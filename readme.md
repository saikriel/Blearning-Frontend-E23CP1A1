<section>

# Actividad Presencial 1 de Wordpress 2.

Usted tiene un amiga que quiere abrir su propia corredora de propiedades. Ella está desesperada porque le cobran muy caro para desarrollar un sitio web. Le pide ayuda a usted para construir el sitio, pero para reducir los costos le propone trabajar en base a una plantilla gratuita de Wordpress que encontró, su nombre es
[Avenue](http://www.fabthemes.com/avenue/)

Para revisar el template debes instalarlo localmente, cargar la plantilla, navegar las diferentes opciones que tiene y agregar algunas propiedades.

>  Siempre que se instala una plantilla nueva, se debe revisar el funcionamiento: Apariencia, Herramientas, Ajustes, Custom Post, Opciones del Tema, editor de página. 

## Ejercicio - Interpretando la plantilla

**Responda en un archivo .md**

Revisa archivos y adminitración de plantilla. Realiza una descripción técnica y a nivel de usuario del theme lo más detallado posible.

	
*Por ejemplo:  
¿Tiene Page Template?  
¿Usa plugins por defecto?
¿Tiene opciones del tema?  
¿Cómo se carga la información principal?  
¿Qué opciones de personalización tengo?  
¿Qué elementos son fáciles de modificar?  
¿Cuáles no?*


## Ejercicio - Modificando plantilla

Su amiga le pide algunos ajustes. Tú como eres un desarrollador responsable vas a realizar los cambios en un **Child Theme**.

### En la página de inicio
- Traducir textos de listado de propiedades en página de inicio.

> Poner atención en esta línea de código en la plantilla. 
```php <?php include (TEMPLATEPATH . '/lib/listhome.php'); ?>``` 

![Fontpage](http://blog.desafiolatam.com/wp-content/uploads/2017/07/Captura-de-pantalla-2017-07-19-a-las-11.45.45-a.m..png)

### En la página individual de propiedades
- Agregar 3 nuevos campos con *Advanced Custom Fields* 
	- Metros cuadrados con campo de texto
	- Estacionamiento con checkbox donde la respuesta es Si/No
	- Brochure en PDF 
- Desplegar nuevos campos debajo de los que vienen por defecto en la plantilla. El brochure se debe descargar al pinchar una imagen del ícono de PDF.
- Quitar comentarios.
- Reemplazar imagen destacada por Flexslider con 3 imágenes usando ACF. Las imágenes se debe mostrar de 660x320px
> Avanzado: Al clickear la imagen se debe desplegar a tamaño completo en un lightbox

- Vincular el link de *Contact Me Now* a una página de contacto con un formulario de Contact Form 7 dado el HTML entregado. Ingresar los estilos en un archivo diferente.

> Avanzado: Con Query Strings y JS puedes autocompletar el asunto del formulario con el nombre de la propiedad. [Ver ayuda aquí](https://stackoverflow.com/questions/5422265/how-can-i-pre-populate-html-form-input-fields-from-url-parameters)

### Cambios generales
- En el pie de página debe haber un Banner. Para faciliar la administración se debe hacer con Widgets. Pero se requiere que el banner de la página de inicio sea distinta del resto. Su amiga le pide que investigue el tamaño apropiado según los estándares y le deje una imagen de ejemplo por mientras. 





