=== Plogins Answers - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Erfordert Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge FAQs pro Produkt als barrierefreies Akkordeon hinzu, um Fragen vor dem Kauf zu reduzieren.

== Description ==

Answers fügt deinen WooCommerce-Produkten einen Bereich mit häufig gestellten Fragen hinzu, sodass die Kundschaft die gängigen Vorverkaufsfragen direkt auf der Produktseite lesen kann, statt per E-Mail nachzufragen.

Die FAQs schreibst du in einem Tab „FAQs“ im WooCommerce-Produktdaten-Bereich über ein Frage/Antwort-Repeater-Feld. Sie erscheinen in einem eigenen Tab „FAQs“ auf der einzelnen Produktseite, neben Beschreibung und Bewertungen.

Die Frontend-FAQs sind ein <strong>barrierefreies Akkordeon</strong>. Jede Frage ist ein echter `<button>` mit `aria-expanded`, das eine mit `aria` beschriftete Region steuert, sodass es sich mit der Tastatur bedienen lässt und von Screenreadern korrekt angesagt wird. Panels öffnen und schließen mit einem Höhenübergang, der bei `prefers-reduced-motion` abgeschaltet wird; der Antworttext bleibt erreichbar, wenn JavaScript deaktiviert ist, und das Styling folgt dem hellen oder dunklen Farbschema des Besuchers.

Quellcode und Fehlerberichte findest du auf GitHub: https://github.com/wppoland/plogins-answers

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-answers/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-answers/
* <strong>Quellcode</strong> - https://github.com/wppoland/plogins-answers
* <strong>Fehlerberichte und Funktionswünsche</strong> - https://github.com/wppoland/plogins-answers/issues


= Features =

* FAQ-Einträge pro Produkt, erstellt in einem Produktdaten-Tab „FAQs“.
* Akkordeon aus einem `<button>` plus einer mit `aria` beschrifteten Region: per Tastatur bedienbar, sichtbarer Fokusring, `aria-expanded` bleibt synchron.
* Wird in einem eigenen Produktinformations-Tab „FAQs“ angezeigt; die Tab-Beschriftung ist bearbeitbar.
* Antworten akzeptieren einfaches HTML, bereinigt mit `wp_kses_post` beim Speichern und erneut bei der Ausgabe.
* CSS-Custom-Properties fürs Theming, eine Dark-Mode-Palette und Bewegung, die `prefers-reduced-motion` berücksichtigt.
* Frontend-Assets werden nur auf Produktseiten geladen, die tatsächlich FAQs haben.
* Übersetzungsbereit (POT enthalten) und entfernt seine Optionen bei der Deinstallation.
* Deklariert Kompatibilität mit HPOS und den Warenkorb-/Kassen-Blöcken.

== Installation ==

1. Lade das Plugin nach `/wp-content/plugins/answers` hoch oder installiere es über Plugins → Installieren.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Bearbeite ein Produkt und öffne den Tab <strong>FAQs</strong>, um Fragen hinzuzufügen.
4. Benenne den FAQ-Tab unter <strong>WooCommerce → Answers</strong> um, wenn du möchtest.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. WooCommerce muss installiert und aktiv sein.

= Where do FAQs appear? =

In einem eigenen Produktinformations-Tab „FAQs“ auf der einzelnen Produktseite.

= Is the accordion accessible? =

Ja. Jede Frage ist ein Button mit `aria-expanded`, das eine mit `aria` beschriftete Region steuert; er ist per Tastatur bedienbar, hat einen sichtbaren Fokus und berücksichtigt reduzierte Bewegung.

= Can I use HTML in answers? =

Einfaches HTML, das `wp_kses_post` erlaubt (Links, Listen, Hervorhebungen). Skripte werden beim Speichern und bei der Ausgabe entfernt.

= Does it load assets on every product page? =

Nein. CSS und JS werden nur bei Produkten geladen, bei denen mindestens eine FAQ gespeichert ist.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es netzwerkweit oder auf einzelnen Websites; jede Website behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Das FAQ-Akkordeon auf einer Produktseite.
2. Der FAQ-Tab pro Produkt im Produktdaten-Bereich.
3. Der Answers-Einstellungsbildschirm unter WooCommerce.

== External Services ==

Answers stellt keine Verbindung zu externen Diensten her. Es sendet keine ausgehenden HTTP-Anfragen und lädt keine Skripte, Schriftarten oder Stylesheets von Drittanbietern; sein CSS und JavaScript werden nur aus dem Plugin-Ordner ausgeliefert. Die FAQ-Inhalte, die du schreibst, werden vollständig auf deiner eigenen Website gespeichert: Einträge pro Produkt im Post-Meta `_answers_faqs` und die Plugin-Einstellungen in der Option `answers_settings` (mit einer Schema-Markierung in `answers_db_version`). Es wird nichts nach außen gesendet, und das Plugin sendet keine E-Mails.

== Translations ==

Plogins Answers enthält polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-answers`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Mitgelieferte polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche hinzugefügt.

= 1.0.1 =
* Erste stabile Version.

= 0.1.3 =
* In Plogins Answers für WooCommerce umbenannt, für einen eindeutigeren Plugin-Namen.

= 0.1.2 =
* Optionales Feld `category` bei FAQ-Einträgen für die Gruppierung in Answers Pro.
* Repeater-Hooks: `answers/faq_repeater_after_answer` und `answers/faq_repeater_sanitize_row`.
* Shop-Einträge stellen `data-faq-category` bereit, wenn eine Kategorie gesetzt ist.

= 0.1.1 =
* Erweiterungs-Hooks für das Voting in Answers Pro: stabile FAQ-Schlüssel, `answers/faq_items` und `answers/faq_after_answer`.

= 0.1.0 =
* Erstveröffentlichung: FAQs pro Produkt und ein barrierefreies Akkordeon in einem Produkt-Tab „FAQs“.
