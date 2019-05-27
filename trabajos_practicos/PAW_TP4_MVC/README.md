# Persistencia y MVC

## Teoría

1. Instale el Sistema Gestor de Bases de Datos MySQL y las extensiones necesarias para poder interactuar con la misma desde PHP. Documente brevemente los pasos realizados y como verificó que el driver se instaló correctamente (vía phpinfo y vía un script de prueba).

   El driver de la base de datos se instalo utilizando la assitencia del IDE:
   
   ![](https://github.com/mjuanico/paw-tp4/blob/master/docs/images/MySQL_driver.png)

2. Genere un objeto que construya y gestione la conexión a la base de datos. El objeto debe permitir vía constructor la provisión de los datos de acceso. Los datos de acceso deben estar en un archivo de configuración específico y fuera del control de versiones. Documentar este mecanismo de forma adecuada.

    Dentro del directorio [core](https://github.com/mjuanico/paw-tp4/tree/master/app_tp4/core) se pueden observar una serie de archivos que conforman la configuración básica del proyecto. Dentro de estoy archivos se encuentra [bootstrap.php](https://github.com/mjuanico/paw-tp4/blob/master/app_tp4/core/bootstrap.php) y en la linea [21](https://github.com/mjuanico/paw-tp4/blob/2e00f9184c1a5bb0e8db0e586927d0a26fb6745d/app_tp4/core/bootstrap.php#L21) esta el código que se encargar de mantener la conexión con la base de datos.

3. Extienda el sistema de gestión de turnos médicos para que los datos sean persistidos sobre una base de datos. La generación del número de turno debe hacerse vía motor de base de datos. ¿Qué cambios hubo que realizar para la generación del id?

   La generación del ID ahora se da en la base de datos, en el campo id del tipo AUTO_INCREMENT. Este tipo de dato genera automáticamente valores numéricos secuenciales cada vez que se inserta un registro en la tabla.

4. Modifique el sistema para permitir que las imágenes sean persistidas sobre la base de datos. El software debe permitir cargar imágenes de hasta 10 MB.

   En la versión anterior lo que teniamos como validación era lo siguiente:
   
   ```php
    public static function valid_image_size($size)
    {
        if ($size <= 5000000) {
            return TRUE;
        }
        return FALSE;
    }
   ```
   
   Esta validación solo nos permitía cargar una image de menos de 5 megabytes.
   
   La actualización que se hizo para poder cargar una imagen de menos de 10 megabytes es la siguiente:
   
   ```php
   
    public static function valid_image_size($size)
    {
        if ($size <= 10000000) {
            return TRUE;
        }
        return FALSE;
    }
   ```

5. ¿Qué es un motor de persistencia ORM (Object-Relational Mapping; Mapeo objeto-relacional)? ¿Qué problemática resuelve? Realice una evaluación de cuánto le costaría modificar el código para implementar uno en el sistema de turnos por usted desarrollado. Si para realizar la evaluación necesita elegir un producto particular, aclárelo.

   Un motor de persistencia ORM transforma las tablas de la base de datos a objetos de una aplicación logrando un mapeo automático. 
   Permitiendo que cambiar el motor de base de datos de forma sencilla. Ademas provee mayor seguridad ya que se ocupa de la satinizacion de los datos. Y hacer un mejor uso de la programacion orientada a objetos.

6. Implemente Modificación y Baja de los registros del sistema de turnos. Dichas acciones deben ser visualmente integradas en la tabla de turnos pedidos realizada en el TP 2.

   En la imagen que se ve a continuación se puede observar la columna de acciones `Show`, `Edit` y `Delete`. Haciendo click en cualquiera de estas acciones queda implementado el punto 5.
   
   ![](https://github.com/mjuanico/paw-tp4/blob/master/docs/images/CRUD.png)
   
## Práctico

[Aquí](https://github.com/nisevi/paw/tree/master/trabajos_practicos/PAW_TP4_MVC/app_tp4) puede encontrar el proyecto.
