# MVC Nivel 1

Primer ejemplo de estructura de Proyecto en PHP para una App Web

## Estructura

**index.php** es el punto de entrada a la app

**routes.php** es donde se hace el mapeo URL path -> controlador

**config.php** es el objeto que maneja todas las configuraciones de la instalacion

**core/** es el directorio donde se encuentra toda la funcionalidad generica del proyecto

**controllers/** es donde se alojan todos los controladores

**views/** es donde se encuentran todas las vistas que seran enviadas al usuario

## Agregar una operación

3 cosas deben hacerse:

1. Agregar un archivo al directorio controller/
2. Agregar un archivo al directori views/ y que sea utilizado por el controller creado en el paso 1
3. Agregar el path al archivo routes.php para que el Controller creado en el paso 1 sea invocado

## Faltante

* Falta generar un conector para bases de datos
* Falta elaborar el concepto de modelo dentro de la estructura