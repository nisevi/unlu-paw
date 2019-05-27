# Diseño Web :Hojas de Estilo 

**Objetivo**: Iniciarse en los primeros conceptos relacionados con el diseño orientado a la web. Teniendo en mente la UX y el RWD. 


## Teórico

#### 1) ¿Qué significa que los estilos se apliquen en cascada? ¿cómo aplica la herencia de estilos? 

Los estilos definidos en los elementos de mas alto nivel se aplican a los elementos de niveles inferiores. Pero esta aplicacion de estilos en cascadas ademas depende de tres factores: la importancia, la especificidad, y el ordel del codigo. 
Los elementos padre heredan sus propiedades a los elementos hijos, aunque no todas las propiedades se heredan, y esto se determina mediante el sentido comun o puede verificarse en referencia de CSS.

#### 2) ¿Por qué es necesario utilizar un CSS de Reset? 

Cada navegador web cuantan con una hoja de estilos básica. Al utilizar un CSS de Reset se limpian estas propiedades básica para que una pagina web se vea lo mas homogénea posible en todos los navegadores. 

#### 3) ¿Qué es el CSS box model? 

El modelo de cajas de CSS determina que los navegadores representen cada elemento de una pagina como una caja rectangular, especificando el tamaño, la posicion y las propiedades de las cajas.

#### 4) ¿Cuál es el código que hay que insertar en una hoja de estilo para poder usar WebFonts? 

`@font-face` con la propiedad `font-family` y `src`.

#### 5) ¿Qué son y para qué sirven los pseudoElementos? 

Es una propiedad de los selectores que permite añadir estilos a una parte específicas de un elemento.

#### 6) ¿Cómo se calcula la prioridad de una regla CSS? Expresarlo como una fórmula matemática. 

La especificidad que tiene un selector se mide mediante 4 valores diferentes:

    Componente A: Número de estilos aplicados mediante un atributo `style`.
    Componente B: Número de veces que aparece un `id` en el selector.
    Componente C: Número de veces que aparece una `clase`, `pseudoclase` o `atributo` en el selector.
    Componente D: Número de veces que aparece un `elemento` o un `pseudoelementos` en el selector.


#### 7) ¿Qué es el view port? ¿Cómo se configura? ¿qué problema soluciona? 

Es una etiqueta que permite controlar la posicion de los elementos en los navegadores móviles.


#### 8) ¿Qué son las media querys? Enumere los distintos tipos de medios y las principales características de cada uno de ellos. 

Es herramienta brindada por CSS3 que permite consultar sobre el medio que esta visualizando una pagina web y aplicar un estilos determinado. Si la consulta es verdadera, el estilo se aplica.
Tipos de medios:
`all`: Apto para todos los dispositivos.
`print`: Destinado a material impreso y visualización de documentos en una pantalla en el modo de vista previa de impresión. 
`screen`: Destinado principalmente a las pantallas.
`speech`: Destinado a sintetizadores de voz.


#### 9) ¿En qué circunstancias se pueden utilizar las variables css? ¿Qué problemas pueden traer aparejadas? ¿Cuándo consideras que sería bueno utilizarlas? 

Permiten establecer valores especificos para luego poder reutilizarlos en el resto del sitio.
El problema de las variables es que no son globales y para que sean accesibles a toda la hoja de estilos, es necesario definirla en el elemento raíz.
Son de gran utilidad en sitios son muy grandes donde por ejemplo un color se repite en varios lugares.
Ademas permiten que rapidamente se realice un cambio de estilo en un sitio completo.


#### 10) CSS Grid Layout ¿Qué es? Explicar las reglas que intervienen en el armado de una grilla. ¿Qué ventajas y desventajas tiene frente a otros Layouts? 

Es un sistema de grillas en 2 dimensiones, creado dentro del lenguaje CSS.
Debido a que es un estándar, todos los navegadores pueden entenderlo.

#### 11) ¿Qué puntos en común y en que se diferencian las Material Design Guidelines de Google y las Human Interface Guidelines de Apple? 

Ambos son guias de estilos que buscan mejorar la experiencia del usuario.
Material Design Guidelines de Google se basa en aplicaciones moviles, mienstras que Human Interface Guidelines de Apple se enfoca en ambientes de escritorio.


# Programación FrontEnd : Introducción a JavaScript 

**Objetivo**: Iniciarse en la programación del lado del cliente. Conocer los arboles DOM y DOMCSS. Sin olvidarse nunca de la UX y el RWD. 

**Nota**: En todos los ejercicios se pide que se cumplan los estándares de HTML y CSS. Las hojas de estilo deben ser planteadas pensando las características necesarias para que el ejercicio sea reutilizable y que tenga las condiciones mínimas para una correcta visualización con estilos actuales y funcionales. 

## Práctico

