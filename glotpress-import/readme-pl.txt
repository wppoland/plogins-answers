=== Plogins Answers - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Wymaga wtyczek: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dodaj często zadawane pytania dotyczące poszczególnych produktów jako dostępny akordeon, aby zmniejszyć liczbę pytań przedsprzedażowych.

== Description ==

Answers dodaje sekcję często zadawanych pytań do Twoich produktów WooCommerce,
dzięki czemu kupujący mogą zamiast tego przeczytać typowe pytania przedsprzedażowe na stronie produktu
napisz e-mail z zapytaniem.

Często zadawane pytania piszesz w zakładce „FAQ” w panelu danych produktu WooCommerce, używając
powtarzacz pytań/odpowiedzi. Pojawiają się one w osobnej zakładce „FAQ” na singlu
stronie produktu, obok Opisu i Recenzji.

Często zadawane pytania na początku to <strong>przystępny akordeon</strong>. Każde pytanie jest prawdziwe
`<button>` z `aria-expanded` kontrolującym region oznaczony `aria`, więc działa
za pomocą klawiatury i jest poprawnie ogłaszany przez czytniki ekranu. Panele otwarte i
zamknij ze zmianą wysokości, która jest wyłączona w opcji „preferuje-ograniczony-ruch”,
tekst odpowiedzi pozostaje dostępny, gdy JavaScript jest wyłączony, a styl jest zgodny z
jasna lub ciemna kolorystyka odwiedzającego.

Kod źródłowy i raporty o błędach dostępne na GitHubie: https://github.com/wppoland/plogins-answers

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-answers/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-answers/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-answers
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-answers/issues


= Features =

* Często zadawane pytania dotyczące poszczególnych produktów, utworzone w zakładce danych produktów „FAQ”.
* Akordeon zbudowany z „<przycisku>” i regionu oznaczonego „aria”: obsługiwany klawiaturą, widoczny pierścień ostrości, „rozszerzona aria” zsynchronizowana.
* Wyświetla się w osobnej zakładce z informacjami o produkcie „FAQ”; etykietę karty można edytować.
* Odpowiedzi akceptują podstawowy kod HTML, oczyszczany za pomocą `wp_kses_post` przy zapisywaniu i ponownie przy wyjściu.
* Niestandardowe właściwości CSS dotyczące motywów, palety ciemnego schematu i ruchu, które uwzględniają opcję „preferuje zredukowany ruch”.
* Zasoby frontonu ładują się tylko na stronach produktów, które faktycznie zawierają często zadawane pytania.
* Gotowe do tłumaczenia (w tym POT) i usuwa jego opcje po odinstalowaniu.
* Deklaruje kompatybilność HPOS i bloków koszyka/kasy.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/answers` lub zainstaluj poprzez Wtyczki → Dodaj nową.
2. Aktywuj. WooCommerce musi być aktywny.
3. Edytuj produkt i otwórz zakładkę <strong>FAQs<strong>, aby dodać pytania. 4. Jeśli chcesz, zmień nazwę zakładki FAQ w sekcji </strong>WooCommerce → Odpowiedzi</strong>.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. WooCommerce musi być zainstalowany i aktywny.

= Where do FAQs appear? =

W dedykowanej zakładce „FAQ” z informacjami o produkcie na stronie pojedynczego produktu.

= Is the accordion accessible? =

Tak. Każde pytanie to przycisk z rozwiniętą arią, kontrolujący etykietę z etykietą „aria”.
regionie, można go obsługiwać za pomocą klawiatury, ma widoczną ostrość i uwzględnia ograniczenie ruchu.

= Can I use HTML in answers? =

Podstawowy HTML dozwolony przez `wp_kses_post` (linki, listy, podkreślenia). Skrypty są usuwane przy zapisywaniu i wyjściu.

= Does it load assets on every product page? =

Nie. CSS i JS ładują się tylko w przypadku produktów, które mają zapisany przynajmniej jeden FAQ.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== Screenshots ==

1. Akordeon FAQ na stronie produktu.
2. Zakładka Często zadawane pytania dotyczące poszczególnych produktów w panelu danych produktu.
3. Ekran ustawień Odpowiedzi w WooCommerce.

== External Services ==

Answers nie łączy się z żadną usługą zewnętrzną. Nie tworzy wychodzącego protokołu HTTP
żąda i nie ładuje żadnych skryptów, czcionek ani arkuszy stylów innych firm; jego CSS i
JavaScript jest obsługiwany wyłącznie z folderu wtyczek. Treść FAQ, którą piszesz, to
przechowywane w całości na Twojej stronie: pozycje poszczególnych produktów w poście `_answers_faqs`
ustawienia meta i wtyczki w opcji `answers_settings` (ze znacznikiem schematu
w `answers_db_version`). Nic nie jest wysyłane poza witrynę, a wtyczka nie wysyła wiadomości e-mail.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.3 =
* Zmieniono nazwę na Plogins Answers dla WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.2 =
* Opcjonalne pole „kategoria” w często zadawanych pytaniach dotyczących grupowania w Answers Pro.
* Haki wzmacniające: `answers/faq_repeater_after_answer` i `answers/faq_repeater_sanitize_row`.
* Pozycje sklepowe eksponują „kategorię danych-faq”, gdy kategoria jest ustawiona.

= 0.1.1 =
* Haki rozszerzeń do głosowania w Answers Pro: stabilne klucze FAQ, `answers/faq_items`,
  i „answers/faq_after_answer”.

= 0.1.0 =
* Pierwsza wersja: często zadawane pytania dotyczące poszczególnych produktów i dostępny akordeon w zakładce produktu „FAQ”.
