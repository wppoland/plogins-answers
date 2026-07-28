=== Plogins Answers - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Wymaga wtyczek: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dodaj sekcję FAQ dla poszczególnych produktów w formie dostępnego akordeonu, aby zmniejszyć liczbę pytań przedsprzedażowych.

== Description ==

Answers dodaje do Twoich produktów WooCommerce sekcję z często zadawanymi pytaniami, dzięki czemu kupujący mogą przeczytać typowe pytania przedsprzedażowe na stronie produktu, zamiast pytać e-mailem.

Często zadawane pytania piszesz w zakładce „FAQ” w panelu Dane produktu WooCommerce za pomocą powtarzalnego pola pytanie/odpowiedź. Pojawiają się w osobnej zakładce „FAQ” na stronie pojedynczego produktu, obok Opisu i Opinii.

Front-endowe FAQ to <strong>dostępny akordeon</strong>. Każde pytanie to prawdziwy `<button>` z atrybutem `aria-expanded` sterującym regionem oznaczonym przez `aria`, więc działa z klawiatury i jest poprawnie odczytywany przez czytniki ekranu. Panele otwierają się i zamykają płynną animacją wysokości, która jest wyłączana przy `prefers-reduced-motion`; tekst odpowiedzi pozostaje dostępny, gdy JavaScript jest wyłączony, a wygląd dostosowuje się do jasnego lub ciemnego schematu kolorów odwiedzającego.

Kod źródłowy i zgłoszenia błędów znajdziesz na GitHubie: https://github.com/wppoland/plogins-answers

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-answers/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-answers/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-answers
* <strong>Zgłoszenia błędów i propozycje funkcji</strong> - https://github.com/wppoland/plogins-answers/issues


= Features =

* Elementy FAQ dla poszczególnych produktów, tworzone w zakładce danych produktu „FAQ”.
* Akordeon zbudowany z elementu `<button>` i regionu oznaczonego przez `aria`: obsługa z klawiatury, widoczny pierścień fokusu, `aria-expanded` utrzymywany w synchronizacji.
* Wyświetlany w osobnej zakładce z informacjami o produkcie „FAQ”; etykietę zakładki można edytować.
* Odpowiedzi przyjmują podstawowy HTML, oczyszczany przez `wp_kses_post` przy zapisie i ponownie przy wyświetlaniu.
* Właściwości niestandardowe CSS do stylizacji, paleta trybu ciemnego oraz animacje uwzględniające `prefers-reduced-motion`.
* Zasoby front-endu ładują się tylko na stronach produktów, które faktycznie mają FAQ.
* Gotowy do tłumaczenia (dołączony plik POT); usuwa swoje opcje przy odinstalowaniu.
* Deklaruje zgodność z HPOS oraz blokami koszyka/kasy.

== Installation ==

1. Wgraj wtyczkę do `/wp-content/plugins/answers` lub zainstaluj przez Wtyczki → Dodaj nową.
2. Włącz ją. WooCommerce musi być aktywne.
3. Edytuj produkt i otwórz zakładkę <strong>FAQs</strong>, aby dodać pytania.
4. Jeśli chcesz, zmień nazwę zakładki FAQ w <strong>WooCommerce → Answers</strong>.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. WooCommerce musi być zainstalowane i aktywne.

= Where do FAQs appear? =

W dedykowanej zakładce z informacjami o produkcie „FAQ” na stronie pojedynczego produktu.

= Is the accordion accessible? =

Tak. Każde pytanie to przycisk z atrybutem `aria-expanded` sterującym regionem oznaczonym przez `aria`; można go obsługiwać z klawiatury, ma widoczny fokus i uwzględnia ograniczony ruch.

= Can I use HTML in answers? =

Podstawowy HTML dozwolony przez `wp_kses_post` (linki, listy, wyróżnienia). Skrypty są usuwane przy zapisie i przy wyświetlaniu.

= Does it load assets on every product page? =

Nie. CSS i JS ładują się tylko dla produktów, które mają zapisane co najmniej jedno FAQ.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest zgodna z WordPress Multisite. Włącz ją dla całej sieci lub w pojedynczych witrynach; każda witryna zachowuje własne ustawienia i dane.

== Screenshots ==

1. Akordeon FAQ na stronie produktu.
2. Zakładka FAQ dla poszczególnych produktów w panelu danych produktu.
3. Ekran ustawień Answers w WooCommerce.

== External Services ==

Answers nie łączy się z żadną usługą zewnętrzną. Nie wykonuje żadnych wychodzących żądań HTTP i nie ładuje żadnych skryptów, czcionek ani arkuszy stylów innych firm; jego pliki CSS i JavaScript są serwowane wyłącznie z folderu wtyczki. Treść FAQ, którą piszesz, jest przechowywana w całości w Twojej własnej witrynie: pozycje poszczególnych produktów w meta wpisu `_answers_faqs`, a ustawienia wtyczki w opcji `answers_settings` (ze znacznikiem schematu w `answers_db_version`). Nic nie jest wysyłane poza witrynę, a wtyczka nie wysyła e-maili.

== Translations ==

Plogins Answers zawiera polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki. Domena tekstowa to `plogins-answers`, więc pakiety językowe z WordPress.org mogą również nadpisać lub rozszerzyć te dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.3 =
* Zmieniono nazwę na Plogins Answers dla WooCommerce, aby nazwa wtyczki była bardziej charakterystyczna.

= 0.1.2 =
* Opcjonalne pole `category` w elementach FAQ na potrzeby grupowania w Answers Pro.
* Haki repeatera: `answers/faq_repeater_after_answer` oraz `answers/faq_repeater_sanitize_row`.
* Elementy w sklepie udostępniają atrybut `data-faq-category`, gdy ustawiona jest kategoria.

= 0.1.1 =
* Haki rozszerzeń do głosowania w Answers Pro: stabilne klucze FAQ, `answers/faq_items` oraz `answers/faq_after_answer`.

= 0.1.0 =
* Pierwsze wydanie: często zadawane pytania dla poszczególnych produktów i dostępny akordeon w zakładce produktu „FAQ”.
