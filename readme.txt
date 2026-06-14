=== Answers - Product FAQs for WooCommerce ===
Contributors: wppoland
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 0.1.0
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add per-product FAQs as an accessible accordion to reduce pre-sale questions.

== Description ==

Answers lets you add a frequently-asked-questions section to your WooCommerce
products. Buyers get their pre-sale questions answered right on the product page —
without contacting support — which lifts conversions and cuts ticket volume.

Author FAQs in a "FAQs" tab inside the WooCommerce Product data panel with a
simple question/answer repeater. They appear in a dedicated "FAQs" tab on the
single product page.

FAQs render as an **accessible accordion**: each question is a real button with
`aria-expanded` and an `aria`-controlled region, so it is keyboard operable and
announced correctly by screen readers. Motion is disabled under
`prefers-reduced-motion`, the markup never shifts layout, and the accordion is
styled with modern CSS that adapts to light and dark themes.

= Features =

* Per-product FAQ items via a "FAQs" product data tab.
* Accessible accordion (button + region, `aria-expanded`, keyboard operable, focus-visible).
* Renders in a dedicated "FAQs" product-information tab, with a configurable tab label.
* Answers accept basic HTML, filtered with `wp_kses_post`.
* Light/dark aware styling, no layout shift, motion-reduced friendly.
* Translation ready (POT included) and clean uninstall.
* HPOS and cart/checkout blocks compatible.

== Installation ==

1. Upload the plugin to `/wp-content/plugins/answers`, or install via Plugins → Add New.
2. Activate it. WooCommerce must be active.
3. Edit a product and open the **FAQs** tab to add questions.
4. Rename the FAQ tab under **WooCommerce → Answers** if you like.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Yes. WooCommerce must be installed and active.

= Where do FAQs appear? =

In a dedicated "FAQs" product-information tab on the single product page.

= Is the accordion accessible? =

Yes. Each question is a button with `aria-expanded` controlling an `aria`-labelled
region, it is keyboard operable, has visible focus, and respects reduced-motion.

== Screenshots ==

1. The FAQ accordion on a product page.
2. The per-product FAQs tab in the product data panel.
3. The Answers settings screen under WooCommerce.

== Changelog ==

= 0.1.0 =
* Initial release: per-product FAQs and an accessible accordion in a "FAQs" product tab.
