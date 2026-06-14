<?php
/**
 * Default settings, merged under the option key `answers_settings`.
 *
 * The feature ships enabled. Per-product FAQ items are authored in the product
 * data "FAQs" tab and render as an accessible accordion in a dedicated "FAQs"
 * product-information tab. The merchant can rename that tab from the Answers
 * settings screen (WooCommerce → Answers).
 *
 * @package Answers
 *
 * @return array<string, mixed>
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

return [
    // Master switch. When off, nothing renders and no assets load.
    'enabled' => true,

    // Label for the FAQ product-information tab. Blank uses the default "FAQs".
    'tab_title' => '',
];
