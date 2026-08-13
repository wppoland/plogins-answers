<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-answers-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Answers Pro',
    'url'        => 'https://plogins.com/plogins-answers-pro/pricing/',
    'sellable'   => true,
    'price_from' => 29,
    'currency'   => 'EUR',
    'price_pln'  => 129,
    'lead'       => [
        'en' => 'FAQ search, helpful voting, categories and AI FAQ drafting are available in the 0.4.0 release.',
        'pl' => 'Wyszukiwarka FAQ, głosowanie, kategorie i szkicowanie AI są dostępne w wydaniu 0.4.0.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'FAQ search', 'desc' => 'A search box that filters questions and answers on the product page as the shopper types.'],
            'pl' => ['title' => 'Wyszukiwarka FAQ', 'desc' => 'Pole wyszukiwania filtrujące pytania i odpowiedzi na karcie produktu.'],
        ],
        [
            'en' => ['title' => 'Helpful voting', 'desc' => 'Was this helpful? voting without comments; counts stored per product.'],
            'pl' => ['title' => 'Głosowanie „czy pomocne”', 'desc' => 'Klienci oceniają odpowiedzi bez komentarzy; liczniki zapisane per produkt.'],
        ],
        [
            'en' => ['title' => 'FAQ categories', 'desc' => 'Group questions into categories on the product page (shipped).'],
            'pl' => ['title' => 'Kategorie FAQ', 'desc' => 'Grupuj pytania w kategorie na karcie produktu (wdrożone).'],
        ],
        [
            'en' => ['title' => 'AI FAQ drafting', 'desc' => 'Generate draft questions and answers from product context in wp-admin (shipped).'],
            'pl' => ['title' => 'Szkicowanie AI FAQ', 'desc' => 'Generuj szkice pytań i odpowiedzi z kontekstu produktu w panelu (wdrożone).'],
        ],
        [
            'en' => ['title' => 'FAQ analytics', 'desc' => 'Report on popular questions and no-result search terms.'],
            'pl' => ['title' => 'Analityka FAQ', 'desc' => 'Raporty o popularnych pytaniach i frazach bez wyników.'],
        ],
    ],
];
