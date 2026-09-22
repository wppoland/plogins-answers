=== Respondo - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 1.1.0
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add per-product FAQs as an accessible accordion to reduce pre-sale questions.

== Description ==

Respondo adds a frequently-asked-questions section to your WooCommerce products,
so shoppers can read the common pre-sale questions on the product page instead of
emailing to ask.

You write the FAQs in a "FAQs" tab inside the WooCommerce Product data panel using
a question/answer repeater. They show up in their own "FAQs" tab on the single
product page, next to Description and Reviews.

The front-end FAQs are an **accessible accordion**. Each question is a real
`<button>` with `aria-expanded` controlling an `aria`-labelled region, so it works
with the keyboard and is announced correctly by screen readers. Panels open and
close with a height transition that is switched off under `prefers-reduced-motion`,
and the styling follows the visitor's light or dark colour scheme. The enhancement
script is required to open a panel; the answer text is present in the page source
but not reachable to a visitor with JavaScript disabled.

Source code and bug reports live on GitHub: [github.com/wppoland/plogins-answers](https://github.com/wppoland/plogins-answers)

= Documentation and links =

* **Documentation**: [plogins.com/plogins-answers/docs/](https://plogins.com/plogins-answers/docs/)
* **Plugin page**: [plogins.com/plogins-answers/](https://plogins.com/plogins-answers/)
* **Source code**: [github.com/wppoland/plogins-answers](https://github.com/wppoland/plogins-answers)
* **Bug reports and feature requests**: [github.com/wppoland/plogins-answers/issues](https://github.com/wppoland/plogins-answers/issues)


= Features =

* Per-product FAQ items, authored in a "FAQs" product data tab.
* Accordion built from a `<button>` plus an `aria`-labelled region: keyboard operable, visible focus ring, `aria-expanded` kept in sync.
* Shows in its own "FAQs" product-information tab; the tab label is editable.
* Answers accept basic HTML, sanitised with `wp_kses_post` on save and again on output.
* CSS custom properties for theming, a dark-scheme palette, and motion that respects `prefers-reduced-motion`.
* Front-end assets load only on product pages that actually have FAQs.
* Translation ready (POT included), and removes its options on uninstall.
* Declares HPOS and cart/checkout blocks compatibility.

== Installation ==

1. Upload the plugin to `/wp-content/plugins/respondo`, or install via Plugins > Add New.
2. Activate it. WooCommerce must be active.
3. Edit a product and open the **FAQs** tab to add questions.
4. Rename the FAQ tab under **WooCommerce > Respondo** if you like.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Yes. WooCommerce must be installed and active.

= Where do FAQs appear? =

In a dedicated "FAQs" product-information tab on the single product page.

= Is the accordion accessible? =

Yes. Each question is a button with `aria-expanded` controlling an `aria`-labelled
region, it is keyboard operable, has visible focus, and respects reduced-motion.

= Can I use HTML in answers? =

Basic HTML allowed by `wp_kses_post` (links, lists, emphasis). Scripts are stripped on save and output.

= Does it load assets on every product page? =

No. CSS and JS load only on products that have at least one FAQ saved.


= Does this plugin work on WordPress Multisite? =

Yes. This plugin is compatible with WordPress Multisite. Network activate it or activate it on individual sites; each site keeps its own settings and data.

== Screenshots ==

1. The FAQ accordion on a product page.
2. The per-product FAQs tab in the product data panel.
3. The Respondo settings screen under WooCommerce.

== External Services ==

Respondo does not connect to any external service. It makes no outbound HTTP
requests, and loads no third-party scripts, fonts, or stylesheets; its CSS and
JavaScript are served from the plugin folder only. The FAQ content you write is
stored entirely on your own site: per-product items in the `_answers_faqs` post
meta and plugin settings in the `answers_settings` option (with a schema marker
in `answers_db_version`). Nothing is sent off-site, and the plugin sends no email.

== Translations ==

Respondo is fully translatable and ships the `respondo.pot` template. Translations are delivered by WordPress.org language packs from translate.wordpress.org, which is where Polish, German and Spanish are being contributed; the package itself carries no compiled translation files.

== Changelog ==

= 1.1.0 =
* Renamed to Respondo. The WordPress.org review team asks a plugin name to lead with a distinctive, coined identifier rather than a generic descriptive word. Respondo is Esperanto for an answer. The text domain follows the name; the stored FAQs, the settings and every hook are unchanged.

= 1.0.13 =
* Fixed: the PRO upgrade promo kept selling to people who had already bought the paid edition. Only the banner could be dismissed, so the sidebar promo and the locked feature cards followed a paying customer around for good. The promo now checks whether the paid edition is active and steps aside when it is.
* Fixed: arrow glyphs in the admin menu paths, and in the strings handed to translators. An arrow inside a translatable string makes the glyph every translator's problem and changes the layout in any locale that drops it.

= 1.0.12 =
* Fixed: deleting the plugin left the per-user "dismiss" flag from the PRO notice in the database. Uninstall now removes it for every user, not just the one who dismissed it.

= 1.0.11 =
* The translation template was regenerated. It still named an older version of the plugin and pointed at source lines that had since moved, which is what translation tools read to show a string in context.

= 1.0.10 =
* Renamed to Plogins Answers - Product Q&A for WooCommerce so the name leads with the brand rather than a generic word, which is what the WordPress.org plugin review team asks for. The plugin slug is unchanged.

= 1.0.9 =
* Tested against WordPress 7.1. Verified by activating this build on a clean 7.1 install with WooCommerce 11.1, not by editing the header.

= 1.0.8 =
* Fixed the PRO promo on the settings screen quoting a price in PLN. PRO is priced and charged in EUR, so an admin on a Polish site was shown a zloty amount and then billed in euro, and the zloty figure was a fixed conversion that drifted from the real charge as the rate moved. The promo now shows the euro price that is actually taken.

= 1.0.6 =
* Every question saved in the FAQs tab now shows on the product page: repeated questions are no longer hidden from shoppers, and lists longer than 50 questions are no longer cut short.

= 1.0.4 =
* Translations: completed Polish, German and Spanish for the PRO upgrade panel.

= 1.0.3 =
* Fixed low-contrast admin headings under an OS dark-mode preference.

= 1.0.2 =
* Added bundled Polish, German and Spanish translations for the plugin interface.

= 1.0.1 =
* First stable release.

= 0.1.3 =
* Renamed to Plogins Answers for WooCommerce for a more distinctive plugin name.

= 0.1.2 =
* Optional `category` field on FAQ items for Answers Pro grouping.
* Repeater hooks: `answers/faq_repeater_after_answer` and `answers/faq_repeater_sanitize_row`.
* Storefront items expose `data-faq-category` when a category is set.

= 0.1.1 =
* Extension hooks for Answers Pro voting: stable FAQ keys, `answers/faq_items`,
  and `answers/faq_after_answer`.

= 0.1.0 =
* Initial release: per-product FAQs and an accessible accordion in a "FAQs" product tab.
