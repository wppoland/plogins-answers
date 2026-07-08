=== Plogins Answers - Product Q&A for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, faq, product faq, accordion
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Requiere complementos: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Añade preguntas frecuentes por producto como un acordeón accesible para reducir las preguntas previas a la venta.

== Description ==

Respuestas añade una sección de preguntas frecuentes a sus productos WooCommerce.
para que los compradores puedan leer las preguntas comunes de preventa en la página del producto en lugar de
enviando un correo electrónico para preguntar.

Escribe las preguntas frecuentes en una pestaña "Preguntas frecuentes" dentro del panel de datos del producto WooCommerce usando
un repetidor de preguntas/respuestas. Aparecen en su propia pestaña "Preguntas frecuentes" en el sencillo.
página del producto, junto a Descripción y Reseñas.

Las preguntas frecuentes del front-end son un <strong>acordeón accesible</strong>. Cada pregunta es una verdadera
`<botón>` con `aria-expanded` controlando una región etiquetada con `aria`, por lo que funciona
con el teclado y es anunciado correctamente por los lectores de pantalla. Los paneles se abren y
cerrar con una transición de altura que se desactiva en "prefiere movimiento reducido",
el texto de la respuesta permanece accesible cuando JavaScript está desactivado y el estilo sigue el
combinación de colores claros u oscuros del visitante.

El código fuente y los informes de errores están disponibles en GitHub: https://github.com/wppoland/plogins-answers

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-answers/docs/
* <strong>Página de complementos</strong> - https://plogins.com/es/plogins-answers/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-answers
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-answers/issues


= Features =

* Elementos de preguntas frecuentes por producto, creados en una pestaña de datos del producto "Preguntas frecuentes".
* Acordeón construido a partir de un `<botón>` más una región etiquetada como `aria`: teclado operable, anillo de enfoque visible, `aria-expanded` mantenido sincronizado.
* Se muestra en su propia pestaña de información del producto "Preguntas frecuentes"; la etiqueta de la pestaña es editable.
* Las respuestas aceptan HTML básico, desinfectado con `wp_kses_post` al guardar y nuevamente al generar.
* Propiedades personalizadas de CSS para temas, una paleta de esquemas oscuros y movimiento que respeta "prefiere movimiento reducido".
* Los recursos de front-end se cargan solo en las páginas de productos que realmente tienen preguntas frecuentes.
* Listo para traducción (POT incluido) y elimina sus opciones al desinstalar.
* Declara compatibilidad con HPOS y bloques de carrito/pago.

== Installation ==

1. Cargue el complemento en `/wp-content/plugins/answers`, o instálelo a través de Complementos → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Edite un producto y abra la pestaña <strong>Preguntas frecuentes<strong> para añadir preguntas. 4. Cambie el nombre de la pestaña Preguntas frecuentes en </strong>WooCommerce → Respuestas</strong> si lo desea.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. WooCommerce debe estar instalado y activo.

= Where do FAQs appear? =

En una pestaña dedicada a la información del producto "Preguntas frecuentes" en la página de un solo producto.

= Is the accordion accessible? =

Sí. Cada pregunta es un botón con "aria-expanded" que controla una etiqueta con "aria"
región, se puede operar con el teclado, tiene un enfoque visible y respeta el movimiento reducido.

= Can I use HTML in answers? =

HTML básico permitido por `wp_kses_post` (enlaces, listas, énfasis). Los scripts se eliminan al guardar y generar.

= Does it load assets on every product page? =

No. CSS y JS se cargan solo en productos que tienen al menos una pregunta frecuente guardada.


= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Activarlo en red o activarlo en sitios individuales; Cada sitio mantiene su propia configuración y datos.

== Screenshots ==

1. El acordeón de preguntas frecuentes en la página de un producto.
2. La pestaña de preguntas frecuentes por producto en el panel de datos del producto.
3. La pantalla de configuración de Respuestas en WooCommerce.

== External Services ==

Respuestas no se conecta a ningún servicio externo. No hace HTTP saliente
no solicita ni carga scripts, fuentes ni hojas de estilo de terceros; su CSS y
JavaScript se sirve únicamente desde la carpeta del complemento. El contenido de preguntas frecuentes que escribe es
almacenado completamente en tu propio sitio: elementos por producto en la publicación `_answers_faqs`
configuración de meta y complementos en la opción `answers_settings` (con un marcador de esquema
en `answers_db_version`). No se envía nada fuera del sitio y el complemento no envía ningún correo electrónico.

== Changelog ==

= 1.0.1 =
* Primera versión estable.

= 0.1.3 =
* Renombrado a Plogins Answers for WooCommerce para obtener un nombre de complemento más distintivo.

= 0.1.2 =
* Campo opcional de "categoría" en elementos de preguntas frecuentes para la agrupación de Answers Pro.
* Ganchos repetidores: `answers/faq_repeater_after_answer` y `answers/faq_repeater_sanitize_row`.
* Los elementos del escaparate exponen la "categoría de preguntas frecuentes de datos" cuando se establece una categoría.

= 0.1.1 =
* Ganchos de extensión para la votación de Answers Pro: claves de preguntas frecuentes estables, `answers/faq_items`,
  y `respuestas/faq_after_answer`.

= 0.1.0 =
* Lanzamiento inicial: preguntas frecuentes por producto y un acordeón accesible en la pestaña de producto "Preguntas frecuentes".
