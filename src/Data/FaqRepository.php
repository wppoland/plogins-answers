<?php

declare(strict_types=1);

namespace Answers\Data;

defined('ABSPATH') || exit;

/**
 * Resolves the ordered list of FAQ items for a product.
 *
 * Items come from the per-product FAQ repeater stored in the `_answers_faqs`
 * post meta (an array of question/answer pairs authored in the product data
 * "FAQs" tab). Accessors are defensive: malformed or missing data yields an
 * empty list rather than a warning, so the renderer can never produce broken
 * markup.
 */
final class FaqRepository
{
    /** Post meta key holding the per-product FAQ repeater (array of pairs). */
    public const META_PRODUCT_FAQS = '_answers_faqs';

    /**
     * Get the ordered FAQ items for a product.
     *
     * Every saved row is returned, in the order the merchant listed it. This
     * used to skip any question that repeated an earlier one (case-insensitive)
     * and to stop after the fiftieth item: the FAQs tab kept showing all the
     * rows, the merchant saw them saved, and the shopper got a shorter
     * accordion with no hint that anything was missing. Size and repeats belong
     * to whoever writes the list, not to the reader.
     *
     * @return list<FaqItem>
     */
    public function forProduct(int $productId): array
    {
        if ($productId <= 0) {
            return [];
        }

        $items = [];

        foreach ($this->rawProductItems($productId) as $pair) {
            $question = trim($pair['question']);
            $answer   = trim($pair['answer']);

            if ($question === '' || $answer === '') {
                continue;
            }

            $category = isset($pair['category']) ? sanitize_key((string) $pair['category']) : '';
            // Key stays derived from the lowercased question so Answers Pro
            // votes survive edits and repeated questions share one tally.
            $items[]  = new FaqItem($question, $answer, md5(strtolower($question)), $category);
        }

        return $items;
    }

    /**
     * Raw per-product FAQ pairs from post meta.
     *
     * @return list<array{question: string, answer: string, category?: string}>
     */
    public function rawProductItems(int $productId): array
    {
        return $this->normalisePairs(get_post_meta($productId, self::META_PRODUCT_FAQS, true));
    }

    /**
     * Coerce arbitrary stored data into a clean list of question/answer pairs.
     *
     * @param mixed $stored
     * @return list<array{question: string, answer: string, category?: string}>
     */
    private function normalisePairs(mixed $stored): array
    {
        if (! is_array($stored)) {
            return [];
        }

        $pairs = [];

        foreach ($stored as $row) {
            if (! is_array($row)) {
                continue;
            }

            $pair = [
                'question' => isset($row['question']) ? (string) $row['question'] : '',
                'answer'   => isset($row['answer']) ? (string) $row['answer'] : '',
            ];

            if (isset($row['category']) && (string) $row['category'] !== '') {
                $pair['category'] = sanitize_key((string) $row['category']);
            }

            $pairs[] = $pair;
        }

        return $pairs;
    }
}
