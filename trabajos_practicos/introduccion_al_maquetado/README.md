# Introducción al maquetado

Objetivo: Obtener los conocimientos básicos sobre el maquetado de una página web.

## Links de interés

- [Documento](https://github.com/nisevi/paw/blob/master/trabajos_practicos/introduccion_al_maquetado/PAW_TP1_HTML.pdf) donde se detallan los puntos a resolver;
- [Wireframes: Que son y como crearlos](https://webdesdecero.com/wireframes-que-son-y-como-crearlos/);
- [HTML Validator / Linter](https://www.freeformatter.com/html-validator.html);
- [The W3C Markup Validation Service](https://validator.w3.org/);
- [ColorSlurp](http://colorslurp.com/);

## Teórico

1. ¿Qué es un lenguaje de marcado? ¿Cuál es su utilidad? ¿Qué es un tag? ¿Qué es un atributo?

    Un lenguaje de marcado o lenguaje de marcas es una forma de codificar un documento que, junto con el texto, incorpora etiquetas o marcas que contienen información adicional acerca de la estructura del texto o su presentación.
    
    Las unidades sintácticas fundamentales de HTML se llaman *tags*. En general los tags son utilizados para especificar categorias de contenido. Por cada tipo de tag, un browser tiene presentaciones por defecto para el contenido que ha sido especificado. La syntaxis de un tag es el nombre del tag rodeado de paréntesis angulares (< y >). Los tags deben ser escritos en minúscula. La mayoría de los tags aparecen de a pares: el tag de apertura y el tag de cierre. El nombre del tag de cierre, cuando es requerido, será el nombre del tag de apertura con una barra invertida (**/**) que lo preceda. Por ejemplo, si el nombre del tag es **p**, el tag de cierre será **/p**. Cualquier cosa que aparezca entre el tag de apertura y el de cierre será el *contenido* del tag. La visualización de HTML en un browser nos muestra el contenido de todos los tags del documento. No todos los tags tienen contenido.
    
    El tag de apertura junto con el tag de cierre especifican un contenedor para su contenido. El contendor y el contenido juntos con llamados 'elemento'. Por ejemplo, considere el siguiente *elemento*:
    
    ```html
      <p> Esto es algo simple. </p>
    ```
    
    Atributos, son aquellos que se utilizan para especificar un significado alternativo del un tag. Son escritos entre el tag de apertura y el paréntesis angular izquierdo. Son especificados en el formato de clave valor, lo que significa que el nombre del atributo es seguido por un symbolo de igual (=) y el valor del atributo. El nombre del atributo así como también el nombre de los tags, son escritos en minúscula. Los valores de los atributos deben ser escritos entre comillas dobles (**"**).
    
    Un ejemplo a continuación sería el atributo **src** para el tag **img**:
    ```html
      <img src="alguna_imagen.jpg">
    ```

2. ¿Cuál es la utilidad de HTML? ¿Qué conjunto mínimo de tags debe contener un documento elaborado en este lenguaje? Describa brevemente su utilidad.

    HTML esta definido por el uso de SGML (Standard Generalized Markup Language), que es un lenguage para definir lenguages de marcado. 
    
    HTML es un lenguaje de marcado, lo que significa que es usado para marcar partes de documentos para indicar como deberían visualizarse en la pantalla. HTML fue diseñado para especificar la estructura de un documento en un nivel de abstracción mas alto, esto era necesario puesto que los documentos HTML debían ser visualizados en una variedad de sistemas informáticos con diferentes navegadores.
    
    La primera línea de cada documento HTML es un comando **DOCTYPE**, que especifica la definición de tipo de documento (DTD) SGML particular con la que cumple el documento.  
    
    Para HTML, esta declaración es la siguiente:
    
    ```html
      <!DOCTYPE html>
    ```
    
    Un documento HTML debe incluir los cuatro tags `<html>`, `<head>`, `title`, y `<body>`. El tag `<html>` identifica el elemento raíz del documento. Por lo que los documentos HTML, siempre tienen un tag `<html>` a continuación del comando DOCTYPE y siempre terminan con el tag de cierre `</html>`. El elemento `html` incluye un atributo, `lang`, que especifica el lenguage en el cual el documento esta escrito, como se muestra a continuación:
    
    ```html
      <html lang="en">
    ```
    
    En este ejemplo, el lenguage que se ha especificado es Inglés.
    
    Un documento HTML consiste en dos partes, el `head` y el `body`. El elemento `head` provee la información acerca del documento pero no provee el contenido. El elemento `head` contiene dos simples elementos, un elemento `title` y un elemento `meta`. El elemento `meta` es utilizado para proveer información adicional acerca de un documento. No posee contenido. Toda la información que provee lo hace a travéz de atributos. Como mínimo el elemento `meta` especifica el conjunto de carácteres usado para escribir el documento. El conjunto de carácteres mas popular usado por la Web es el 8-bit Unicode Transformation Format (UTF-8). Este conjunto de carácteres usa desde 1 byte hasta 6 bytes para representar un carácter, y es compatible con el conjunto de carácteres ASCII. Éste es el elemento `meta` necesario:
    
    ```html
      <meta charset="utf-8"/>
    ```
    
    La barra invertida al final del elemento `/` indica que no posee tag de cierre.
    
    El contenido del elemento `title` va a ser visualizado en el browser en la parte superior de la ventana.
    
    El elemento `body` proveera el contenido del documento.
    
    A continuación un esqueleto del documento que ilustra la estructura básica de la que venimos hablando:
    
    ```html
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <title> A title for the document </title>
          <meta charset="utf-8" />
          ...
        </head>
        <body>
        ...
        </body>
      </html>
    ```

3. ¿Cuál es la utilidad e importancia de los enlaces o links entre páginas? ¿Qué significa hipertexto? ¿Un link solo puede apuntar a otra página? ¿Qué importancia tiene esto último?

    Un enlace de hipertexto en un documento HTML, actúa como un puntero a algún lugar en particular en algún recurso web. Ese recurso puede ser un documento HTML en cualquier lugar de la Web o puede ser el documento que se muestra actualmente. Sin enlaces, los documentos web serían aburridos y tediosos de leer. No habría una manera conveniente para que el usuario del navegador pase de un documento a un documento relacionado lógicamente. La mayoría de los sitios web constan de muchos documentos diferentes, todos vinculados lógicamente. Por lo tanto, los enlaces son esenciales para construir un sitio web interesante.

    Un enlace que apunta a un recurso diferente especifica la dirección de ese recurso. Dicha dirección puede ser un nombre de archivo, un directorio y un nombre de archivo, o una URL.
    
    Los enlaces se especifican en el atributo `href` del elemento `<a>`. El documento cuya dirección se especifica en un elemento `<a>` se denomina destino de ese enlace.
    
    Para crear enlaces, solo se requiere un atributo: `href` (un acrónimo de referencia de hipertexto). El valor asignado a `href` especifica el destino del enlace. Si el destino está en otro documento en el mismo directorio, es solo el nombre del archivo del documento. Si el documento de destino está en algún otro directorio, se utilizan las convenciones de nombre de directorios de UNIX. Por ejemplo, supongamos que tenemos un documento en el directorio `public_html`, que está vinculado a un documento llamado `C210data.html`, que se almacena en el subdirectorio de nombre `airplanes` dentro del directorio `public_html`. El valor del atributo `href` del elemento `<a>` sería "**airplanes/c210data.html**".
    
    Si el destino está en un documento diferente, ese documento se carga y se muestra, reemplazando el documento que se muestra actualmente:

    ```html
       <a href="airplanes/c210data.html">
    ```
    
    Ejemplo completo:
    
    ```html
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <title> A title for the document </title>
          <meta charset="utf-8" />
          ...
        </head>
        <body>
          <h1 id="h1_title">Titulo H1</h1>
          <h2 id="h2_title">Titulo H2</h1>
          <h3 id="h3_title">Titulo H3</h1>
          <h4 id="h4_title">Titulo H4</h1>
          <h5 id="h5_title">Titulo H5</h1>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
          </p>
          <a href="airplanes/c210data.html">
        </body>
      </html>
    ```

    Si el destino está en el documento actual, el navegador desplazará para mostrar la parte del documento en la que se define el destino del enlace:

    ```html
       <a href="#ID">
    ```
 
    Ejemplo completo:
    
    ```html
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <title> A title for the document </title>
          <meta charset="utf-8" />
          ...
        </head>
        <body>
          <h1 id="h1_title">Titulo H1</h1>
          <h2 id="h2_title">Titulo H2</h1>
          <h3 id="h3_title">Titulo H3</h1>
          <h4 id="h4_title">Titulo H4</h1>
          <h5 id="h5_title">Titulo H5</h1>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          </p>
          <a href="#h1_title">
        </body>
      </html>
    ```
    
4. ¿Qué es el Rendering Engine de un Browser? ¿Cuál es el que utiliza cada uno de los 5 browsers más conocidos (Chrome, Firefox, Safari, IE-Edge, Opera)? ¿Cuál es la importancia de conocer cada uno de ellos en la construcción de un sitio?

    Un motor de renderizado es un software que dibuja texto e imágenes en la pantalla. El motor extrae texto estructurado de un documento (a menudo HTML), y lo formatea adecuadamente en función de las declaraciones de estilo dadas (a menudo, dadas en CSS). Ejemplos de motores de diseño: Blink, Gecko, WebKit.

    |  Engine  |         Browser      |
    |----------|:--------------------:|
    | WebKit   |  Safari              |
    | Blink    |  Chrome, Opera, Edge |
    | Gecko    |  Firefox             |

    Conocer cada uno de estos motores de renderizado nos ayudará a comprender el proceso por el cual pasan los documentos HTML al momento de ser renderizados, las políticas de seguridad que estan siendo implementadas así como también el manejo de hipervínculos y formularios web.

## Práctico

5. Dibujar el Wireframe correspondiente a la página principal de [lujan.gob.ar](http://www.lujan.gob.ar/) y en función a este desarrollar el código HTML5 correspondiente.

    *Nota: Realizar una captura en imagen del sitio a fin de poder corregir contrastando con lo que muestra el sitio ese día ya que puede variar.*

    Para el maquetado he utilizado la herramienta llamada `Balsamiq`.
    
    ~~Por error he maquetado la página principal de la UNLu:~~
    
    - ~~Documento `pdf` con el maquedado del sitio puede ser encontrado [aquí](https://github.com/nisevi/paw/blob/master/trabajos_practicos/introduccion_al_maquetado/maquetado_unlu.pdf);~~
    - ~~Documento `bmpr` (entensión propia de la herramienta) puede ser encontrado [aquí](https://github.com/nisevi/paw/blob/master/trabajos_practicos/introduccion_al_maquetado/maquetado_unlu.bmpr);~~
    
    A continuación el maquetado del sitio web de la Municipalidad de Luján:
    
    - [pdf](https://github.com/nisevi/paw/blob/master/trabajos_practicos/introduccion_al_maquetado/municipalidad_de_lujan.pdf);
    - [bmpr](https://github.com/nisevi/paw/blob/master/trabajos_practicos/introduccion_al_maquetado/municipalidad_de_lujan.bmpr);
    
    El HTML correspondiente puede ser encontrado [aquí]().

6. Elabore en HTML5 una página que contenga su currículum vítae, respetando la estructura que se muestra a continuación. Tenga en cuenta que los elementos subrayados son enlaces a páginas web o a direcciones de correo electrónico y que la foto debe ser un enlace a la propia imagen. Determine qué tags con qué atributos son necesarios en cada caso.

    El CV puede encontrarlo dirigiendose a CodePen [aquí](https://codepen.io/nisevi/pen/LvEdpG) o bien puede visitar el gist [aquí](https://gist.github.com/nisevi/e68fba6a068082a6e560070a22427319).

7. Elabore el código necesario para representar la siguiente tabla:

    ![](https://github.com/nisevi/paw/blob/master/trabajos_practicos/introduccion_al_maquetado/practico_punto_7_tabla.png)
    
    Para visualizar el diseño completo puede dirigirse a CodePen [aquí](https://codepen.io/nisevi/pen/MRWqdO) o bien puede visitar el gist [aquí](https://gist.github.com/nisevi/47e93c0fff130f45a0388b8fc52a09e3).

## Bibliografía

- [Lenguaje de marcado](https://es.wikipedia.org/wiki/Lenguaje_de_marcado);
- Programming The World Wide Web. Eighth Edition. By Robert W. Sebesta;
- [Rendering engine](https://developer.mozilla.org/en-US/docs/Glossary/Rendering_engine);
- [Comparison of browser engines](https://en.wikipedia.org/wiki/Comparison_of_browser_engines);