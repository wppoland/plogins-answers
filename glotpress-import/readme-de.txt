=== Plogins Answers - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Erfordert Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge FAQs pro Produkt als barrierefreies Akkordeon hinzu, um Fragen vor dem Verkauf zu reduzieren.

== Description ==

Answers fügt deinen WooCommerce-Produkten einen Abschnitt mit häufig gestellten Fragen hinzu.
So können Käufer die häufigen Vorverkaufsfragen stattdessen auf der Produktseite lesen
per E-Mail fragen.

Du schreiben die FAQs in eine Registerkarte „FAQs“ im WooCommerce-Produktdatenbereich mit
ein Frage/Antwort-Repeater. Du wirst auf der Single in ihrem eigenen Tab „FAQs“ angezeigt
Produktseite neben Beschreibung und Rezensionen.

Die Front-End-FAQs sind ein <strong>zugängliches Akkordeon</strong>. Jede Frage ist eine echte
`<button>` mit `aria-expanded` steuert eine mit `aria` gekennzeichnete Region, also funktioniert es
mit der Tastatur und wird von Screenreadern korrekt angesagt. Panels öffnen und
schließen mit einem Höhenübergang, der unter „prefers-reduced-motion“ ausgeschaltet ist,
Der Antworttext bleibt erreichbar, wenn JavaScript deaktiviert ist, und der Stil folgt dem
die helle oder dunkle Farbgebung des Besuchers.

Quellcode und Fehlerberichte live auf GitHub: https://github.com/wppoland/plogins-answers

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-answers/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-answers/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-answers
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-answers/issues


= Features =

* FAQ-Elemente pro Produkt, erstellt in einer Produktdatenregisterkarte „FAQs“.
* Akkordeon aufgebaut aus einem „<button>“ und einem mit „aria“ gekennzeichneten Bereich: Tastatur bedienbar, sichtbarer Fokusring, „aria-expanded“ synchron gehalten.
* Wird in einem eigenen Produktinformations-Tab „FAQs“ angezeigt; Die Registerkartenbeschriftung kann bearbeitet werden.
* Antworten akzeptieren einfaches HTML, bereinigt mit „wp_kses_post“ beim Speichern und erneut bei der Ausgabe.
* Benutzerdefinierte CSS-Eigenschaften für das Design, eine dunkle Schemapalette und Bewegung, die „prefers-reduced-motion“ berücksichtigt.
* Frontend-Assets werden nur auf Produktseiten geladen, die tatsächlich FAQs enthalten.
* Übersetzungsbereit (POT enthalten) und entfernt seine Optionen bei der Deinstallation.
* Erklärt die Kompatibilität von HPOS und Warenkorb-/Checkout-Blöcken.

== Installation ==

1. Lade das Plugin nach „/wp-content/plugins/answers“ hoch oder installiere es über Plugins → Neu hinzufügen.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Bearbeite ein Produkt und öffne die Registerkarte <strong>FAQs<strong>, um Fragen hinzuzufügen. 4. Benenne die Registerkarte „FAQ“ unter </strong>WooCommerce → Antworten</strong> um, wenn du möchten.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. WooCommerce muss installiert und aktiv sein.

= Where do FAQs appear? =

In einem speziellen „FAQs“-Produktinformations-Tab auf der einzelnen Produktseite.

= Is the accordion accessible? =

Ja. Bei jeder Frage handelt es sich um eine Schaltfläche mit der Bezeichnung „aria-expanded“, die eine mit „aria“ gekennzeichnete Frage steuert
In der Region ist es über die Tastatur bedienbar, hat einen sichtbaren Fokus und respektiert reduzierte Bewegungen.

= Can I use HTML in answers? =

Grundlegendes HTML, das von „wp_kses_post“ zugelassen wird (Links, Listen, Hervorhebung). Skripte werden beim Speichern und bei der Ausgabe entfernt.

= Does it load assets on every product page? =

Nein. CSS und JS werden nur bei Produkten geladen, bei denen mindestens eine FAQ gespeichert ist.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Das FAQ-Akkordeon auf einer Produktseite.
2. Die Registerkarte „FAQs“ pro Produkt im Produktdatenbereich.
3. Der Antwort-Einstellungsbildschirm unter WooCommerce.

== External Services ==

Answers stellt keine Verbindung zu externen Diensten her. Es erfolgt kein ausgehendes HTTP
fordert und lädt keine Skripte, Schriftarten oder Stylesheets von Drittanbietern; sein CSS und
JavaScript wird nur aus dem Plugin-Ordner bereitgestellt. Der FAQ-Inhalt, den du schreiben, ist
vollständig auf deiner eigenen Website gespeichert: Artikel pro Produkt im Beitrag „_answers_faqs“.
Meta- und Plugin-Einstellungen in der Option „answers_settings“ (mit einer Schemamarkierung
in `answers_db_version`). Es wird nichts an einen externen Standort gesendet und das Plugin sendet keine E-Mails.

== Changelog ==

= 1.0.1 =
* Erste stabile Version.

= 0.1.3 =
* Für einen eindeutigeren Plugin-Namen in Plogins Answers for WooCommerce umbenannt.

= 0.1.2 =
* Optionales „Kategorie“-Feld für FAQ-Elemente für die Answers Pro-Gruppierung.
* Repeater-Hooks: „answers/faq_repeater_after_answer“ und „answers/faq_repeater_sanitize_row“.
* Storefront-Elemente stellen „data-faq-category“ bereit, wenn eine Kategorie festgelegt ist.

= 0.1.1 =
* Erweiterungs-Hooks für Answers Pro-Abstimmungen: stabile FAQ-Schlüssel, „answers/faq_items“,
  und „answers/faq_after_answer“.

= 0.1.0 =
* Erstveröffentlichung: FAQs pro Produkt und ein zugängliches Akkordeon in einer Produktregisterkarte „FAQs“.
