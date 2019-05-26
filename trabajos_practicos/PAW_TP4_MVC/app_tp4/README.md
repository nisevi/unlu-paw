# Proyecto MVC

NOTA: La base de este TP es el TP 2 (Backend). El consejo es migrar el ejercicio del TP 2 al Framework MVC propuesto y a partir de ahí modificar todo lo necesario para cumplir con los ejercicios de este TP. Será obligatorio que el TP actual sea MVC.

OBJETIVO: Construir una aplicación web que utilice un servicio de persistencia externo (SGBD) y profundizar en buenas prácticas de código basadas en patrones conocidos, como MVC y OOP.

## Instalación

 1. Clonar el repositorio;
 2. Instalar [composer](https://getcomposer.org/doc/00-intro.md);
 3. `cd nombre_del_repo`;
 4. Crear un archivo `.env` con los datos de conexion a la base de datos (Hay un ejemplo para copiar en `.env.example`);
 5. Configurar la base de datos creada y los usuarios correspondientes;
 6. Ejecutar los migrations del directorio `sql/` en orden;
 7. Ejecutar `composer install`.
 8. En el root del repositorio correr el siquiente comando: `php -S localhost:8000`;
 9. La aplicación debería estar corriendo en http://localhost:8000;
