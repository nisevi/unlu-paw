# Tecnologías del lado del servidor

**Objetivo**: Iniciarse en los primeros conceptos relacionados con la programación web desde el punto de vista del Backend. Empezar a ent cómo se realiza el procesamiento de una petición HTTP y la generación de su respuesta.

## Links de interés:

- [Documento](https://github.com/nisevi/paw/blob/master/trabajos_practicos/tecnologias_del_lado_del_servidor/PAW_TP2_PHP.pdf) donde se detallan los puntos a resolver;
- [Introducción a PHP](https://slides.com/tomasdelvechio/backend-1#/);
- [Primer ejemplo de estructura de Proyecto en PHP para una App Web](https://gitlab.com/pawunlu/mvc-example-nivel-1);
- PHP [Website](https://www.php.net/);
- [HTTP Request Methods](https://www.w3schools.com/tags/ref_httpmethods.asp);

## Teórico

3. Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método? Consejo: Utilice las herramientas de desarrollador de su Navegador (Pestaña Red) para observar las diferencias entre las diferentes peticiones.

    **El método POST**

    ![](https://github.com/mjuanico/paw-tp2/blob/master/images/POST.png)

    POST se utiliza para enviar datos a un servidor para crear/actualizar un recurso.

    Los datos enviados al servidor con POST se almacenan en el `body` de la `request` HTTP:

    Algunas cosas a tener en cuenta sobre solicitudes POST:

    - Las solicitudes POST nunca se almacenan en caché;
    - Las solicitudes POST no permanecen en el historial del navegador;
    - Las solicitudes POST no pueden ser marcadas (`bookmarked`);
    - Las solicitudes POST no tienen restricciones en la longitud de los datos;

    **El método GET**

    ![](https://github.com/mjuanico/paw-tp2/blob/master/images/GET.png)

    GET se utiliza para solicitar datos de un recurso específico.

    Algunas cosas a tener en cuenta sobre las solicitudes GET:

    - Las solicitudes GET se pueden almacenar en caché;
    - Las solicitudes GET permanecen en el historial del navegador;
    - Las solicitudes GET se pueden marcar como favoritos;
    - Las solicitudes GET nunca deben usarse cuando se trata de datos confidenciales;
    - Las solicitudes GET tienen restricciones de longitud;
    - Las solicitudes GET solo se utilizan para solicitar datos (no modificar);

    En esta imágen se puede ver como los campos son enviados como `query strings` y a su vez expuestos en la URL.


    Por lo tanto, si la información enviada no es sensible y acotada puede utilizarse el método GET, ya que los datos serán expuestos en la URL y al tener la URL un tamaño limitado, se corre el riesgo de perder información.
    Por otro lado, cuando la información enviada es sensible o extensa, es aconsejable utilizar el método POST, debido a los datos enviados se incluyen en el cuerpo de la solicitud, permitiendo además, una cantidad ilimitada de información. 


4. Agregue al formulario un campo que permita adjuntar una imagen, y que la etiqueta del campo sea `Diagnóstico`. El campo debe validar que sea un tipo de imagen valido (.jpg o .png) y será optativo. La imagen debe almacenarse en un subdirectorio del proyecto y también debe mostrarse al usuario al mostrar el resumen del turno del ejercicio 2. ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?

    Para poder evitar colisiones se creo un `hash` utilizando en algoritmo `SHA256` sobre determinados parámetros:

    - Tamaño de la imagen;
    - El momento en el que el código esta siendo ejecutado expresado como un entero;
    - El nombre de la imagen;

    A continuación se puede observar la parte del `controller` que fue destinada al manejo de las imagenes:

    ```php
    # Handling image upload
    # File info
    $image_basename = basename($_FILES["diagnostic"]["name"]);
    $extention = strtolower(pathinfo($image_basename, PATHINFO_EXTENSION));
    $image_size = $_FILES["diagnostic"]["size"];
    $image_encrypted_name = "";

    if (ValidImage($extention, $image_basename, $image_size)) {
      $image_dir = $app->root_path . "uploads/";
      $time_now = time();
      $image_temp_name = $_FILES["diagnostic"]["tmp_name"];

      # File to be saved
      $image_encrypted_name = hash("sha256", $time_now . $image_basename . $image_size) . "." .$extention;
      $image_file = $image_dir . $image_encrypted_name;

      if (!move_uploaded_file($image_temp_name, $image_file)) {
        $error = $error . "Sorry, there was an error uploading your file. ";
      }
    } elseif(!ValidImageExtention($extention) && ValidImageBasename($image_basename)) {
      $error = $error . "Sorry, we only admit 'jpg' and 'png' files. ";
    } elseif(!ValidImageSize($image_size) && ValidImageBasename($image_basename)) {
      $error = $error . "Sorry, the file was too big to upload. ";
    }
    ```

    Más precisamente esta línea es la que encripta el nombre del archivo:

    ```php
    $image_encrypted_name = hash("sha256", $time_now . $image_basename . $image_size) . "." .$extention;
    ```


5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?

    En la siguiente imagen se encuentran marcadas las diferencias que han sido encontradas:

    **Ejercicio 3 mediante el método GET**

    ![](https://github.com/mjuanico/paw-tp2/blob/master/images/ejer3_GET.png)

    **Ejercicio 4 mediante el método POST**

    ![](https://github.com/mjuanico/paw-tp2/blob/master/images/ejer4_POST.png)

    El método POST agrega los siguientes campos al encabezado:

    Cache-Control:	max-age=0. Evita el almacenamiento en caché.

    Content-Length: Cantidad de bytes enviados.

    Content-Type: Tipo de contenido de la petición en POST.


6. Agregar persistencia al sistema de turnos. Todos los datos del formulario deben almacenarse mediante algún mecanismo para poder ser recuperados posteriormente. Crear una nueva vista que le permita a un empleado administrativo visualizar todos los turnos en una tabla. La tabla debe incluir los siguientes campos:

    a. Fecha del turno

    b. Horadelturno

    c. Nombre del paciente

    d. Teléfono

    e. Email

    f. Link a la ficha del turno (la ficha se implementa en el siguiente punto)

    **Esta página y la del formulario del punto 2 deben contar con una barra de navegación que permita ir a una u otra pantalla.**

    **Además, al procesar el formulario en el lado servidor, el sistema asigne un número de turno (que no debe repetirse).**

    **Para generar el sistema de persistencia, se aconseja estudiar algún mecanismo de serialización de datos.**

    **¿Cómo relaciona la imagen del turno con los datos del turno? Comente alternativas que evaluó y opción elegida.**

    Para asociar la imagen se podria haber utilizado el código de turno para generar el nombre de la imagen. Por ejemplo `codigo_turno.jpg`. Pero hemos decidido que sean dos hashes distintos.

    Si una imagen ha sido adjuntada al formulario, se serializa el nombre del archivo encriptado que ha sido guardado en la carpeta `uploads` junto con la demás información que ha suministrado el usuario.


7. Construya la vista de ficha de turno. Dicha vista debe permitir acceder al turno y mostrar todos sus datos, recuperados del mecanismo de persistencia elaborado en el punto anterior. ¿Cómo se identifica y discrimina un turno de otro? Debe funcionar el link a la ficha que se encuentra en la tabla de turnos. Recuerde agregar un enlace para volver a la tabla de turnos.

    Se ha creado un hash usando el algoritmo `SHA256` utilizando los siguientes atributos:

    - Tiempo actual;
    - Nombre del usuario;
    - Correo electrónico;
    - Fecha del turno;

    A continuación se puede observar la parte del código que se encarga de generad el hash:

    ```php
    function GetAppointmentCode($parsed_params) {
      $name  = $parsed_params["name"];
      $email = $parsed_params["email"];
      $date  = $parsed_params["date"];
      return hash("SHA256", time() . $name . $email . $date);
    }
    ```

    Para poder ver el listado de todos los turnos debe dirigirse a la siguiente URL http://localhost:8000/appointments o mediante la opción "Appointments" de la barra de navegación.

## Práctico

[Aquí](https://github.com/nisevi/paw/tree/master/trabajos_practicos/tecnologias_del_lado_del_servidor/app_tp2) puede encontrar el proyecto.
