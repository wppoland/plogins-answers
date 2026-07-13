=== Plogins Answers - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Requiere plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Añade preguntas frecuentes por producto como un acordeón accesible para reducir las preguntas previas a la venta.

== Description ==

Answers añade una sección de preguntas frecuentes a tus productos de WooCommerce, para que los clientes puedan leer las dudas habituales previas a la venta en la página del producto en lugar de escribir un correo para preguntar.

Escribes las preguntas frecuentes en una pestaña «FAQs» dentro del panel de datos de producto de WooCommerce mediante un repetidor de pregunta/respuesta. Aparecen en su propia pestaña «FAQs» en la página de producto individual, junto a Descripción y Valoraciones.

Las preguntas frecuentes del frontend son un <strong>acordeón accesible</strong>. Cada pregunta es un `<button>` real con `aria-expanded` que controla una región etiquetada con `aria`, así que funciona con el teclado y los lectores de pantalla la anuncian correctamente. Los paneles se abren y se cierran con una transición de altura que se desactiva con `prefers-reduced-motion`; el texto de la respuesta sigue siendo accesible cuando JavaScript está desactivado, y el estilo se adapta a la combinación de colores clara u oscura del visitante.

El código fuente y los informes de errores están en GitHub: https://github.com/wppoland/plogins-answers

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-answers/docs/
* <strong>Página del plugin</strong> - https://plogins.com/es/plogins-answers/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-answers
* <strong>Informes de errores y peticiones de funciones</strong> - https://github.com/wppoland/plogins-answers/issues


= Features =

* Elementos de preguntas frecuentes por producto, redactados en una pestaña de datos de producto «FAQs».
* Acordeón construido con un `<button>` más una región etiquetada con `aria`: operable con el teclado, anillo de foco visible y `aria-expanded` sincronizado.
* Se muestra en su propia pestaña de información del producto «FAQs»; la etiqueta de la pestaña es editable.
* Las respuestas admiten HTML básico, saneado con `wp_kses_post` al guardar y de nuevo al mostrarse.
* Propiedades personalizadas de CSS para el tema, una paleta para modo oscuro y movimiento que respeta `prefers-reduced-motion`.
* Los recursos del frontend se cargan solo en las páginas de producto que realmente tienen preguntas frecuentes.
* Preparado para traducción (incluye POT) y elimina sus opciones al desinstalar.
* Declara compatibilidad con HPOS y con los bloques de carrito/pago.

== Installation ==

1. Sube el plugin a `/wp-content/plugins/answers` o instálalo desde Plugins → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Edita un producto y abre la pestaña <strong>FAQs</strong> para añadir preguntas.
4. Cambia el nombre de la pestaña de preguntas frecuentes en <strong>WooCommerce → Answers</strong> si quieres.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. WooCommerce debe estar instalado y activo.

= Where do FAQs appear? =

En una pestaña propia de información del producto «FAQs» en la página de producto individual.

= Is the accordion accessible? =

Sí. Cada pregunta es un botón con `aria-expanded` que controla una región etiquetada con `aria`; se maneja con el teclado, tiene un foco visible y respeta la reducción de movimiento.

= Can I use HTML in answers? =

HTML básico permitido por `wp_kses_post` (enlaces, listas, énfasis). Los scripts se eliminan al guardar y al mostrarse.

= Does it load assets on every product page? =

No. El CSS y el JS se cargan solo en los productos que tienen guardada al menos una pregunta frecuente.


= Does this plugin work on WordPress Multisite? =

Sí. Este plugin es compatible con WordPress Multisite. Actívalo en red o en sitios concretos; cada sitio conserva sus propios ajustes y datos.

== Screenshots ==

1. El acordeón de preguntas frecuentes en la página de un producto.
2. La pestaña de preguntas frecuentes por producto en el panel de datos del producto.
3. La pantalla de ajustes de Answers en WooCommerce.

== External Services ==

Answers no se conecta a ningún servicio externo. No hace peticiones HTTP salientes y no carga scripts, fuentes ni hojas de estilo de terceros; su CSS y su JavaScript se sirven solo desde la carpeta del plugin. El contenido de preguntas frecuentes que escribes se guarda por completo en tu propio sitio: los elementos por producto en el post meta `_answers_faqs` y los ajustes del plugin en la opción `answers_settings` (con un marcador de esquema en `answers_db_version`). No se envía nada fuera del sitio y el plugin no envía ningún correo electrónico.

== Translations ==

Plogins Answers incluye traducciones al polaco, al alemán y al español para la interfaz del plugin. El dominio de texto es `plogins-answers`, así que los paquetes de idioma de WordPress.org también pueden sustituir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Añadidas traducciones incluidas al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.3 =
* Renombrado a Plogins Answers para WooCommerce, para un nombre de plugin más distintivo.

= 0.1.2 =
* Campo opcional `category` en los elementos de preguntas frecuentes para la agrupación de Answers Pro.
* Hooks del repetidor: `answers/faq_repeater_after_answer` y `answers/faq_repeater_sanitize_row`.
* Los elementos de la tienda exponen `data-faq-category` cuando se define una categoría.

= 0.1.1 =
* Hooks de extensión para la votación de Answers Pro: claves de FAQ estables, `answers/faq_items` y `answers/faq_after_answer`.

= 0.1.0 =
* Lanzamiento inicial: preguntas frecuentes por producto y un acordeón accesible en una pestaña de producto «FAQs».
