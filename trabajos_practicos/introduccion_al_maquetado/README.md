# Introducción al maquetado

Objetivo: Obtener los conocimientos básicos sobre el maquetado de una página web.

## Links de interés

- [Wireframes: Que son y como crearlos](https://webdesdecero.com/wireframes-que-son-y-como-crearlos/);
- [HTML Validator / Linter](https://www.freeformatter.com/html-validator.html);
- [The W3C Markup Validation Service](https://validator.w3.org/);

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



4. ¿Qué es el Rendering Engine de un Browser? ¿Cuál es el que utiliza cada uno de los 5 browsers más conocidos (Chrome, Firefox, Safari, IE-Edge, Opera)? ¿Cuál es la importancia de conocer cada uno de ellos en la construcción de un sitio?


## Bibliografía

- [Lenguaje de marcado](https://es.wikipedia.org/wiki/Lenguaje_de_marcado);
- Programming The World Wide Web. Eighth Edition. By Robert W. Sebesta;