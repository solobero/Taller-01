
## Instrucciones:

1. Clonar el proyecto: Si aún no has clonado el proyecto, puedes hacerlo ejecutando el siguiente comando en tu terminal: git clone https://github.com/solobero/Taller-01) y luego entra a la carpeta de manera local en tu editor de texto.

2. Instalar dependencias de Composer: Una vez dentro del directorio del proyecto, instala las dependencias de PHP usando Composer: composer install

3. Configurar el archivo .env: El archivo .env contiene las configuraciones necesarias para conectar el proyecto a la base de datos, por favor, si usted no tiene este documento creado, ejecute en su terminal en la raíz del proyecto: cp .env.example .env (puede cambiarle luego el nombre a solo .env)

4. Luego, vamos a darle "start" en xampp, recuerde START en APACHE y MySQL. Nos dirijimos a: http://localhost/phpmyadmin/ y crearemos una base de datos llamada taller01 (es la que usé yo, pero usted puede cambiarle el nombre, tenga en cuenta que tendrá que usar ese mismo en el numeral 5)

5. Luego de tener tu archivo .env, edita el archivo .env y asegúrate de descomentar y configurar las siguientes líneas:
   -DB_CONNECTION=mysql
   -DB_HOST=127.0.0.1
   -DB_PORT=3306 - > Si usted tiene un puerto distinto, asegurese de cambiarlo
   -DB_DATABASE=taller01
   -DB_USERNAME=tu_usuario - > por default es root
   -DB_PASSWORD=tu_contraseña - > por default esto es un campo vacío

7. Migrar la base de datos: Ejecuta las migraciones para crear las tablas necesarias en tu base de datos: php artisan migrate

8. Enlazar el almacenamiento: Laravel necesita un enlace simbólico para que los archivos subidos (como imágenes) sean accesibles públicamente. Ejecuta el siguiente comando: php artisan storage:link

9. Iniciar el servidor local: Finalmente, ejecuta el servidor de desarrollo de Laravel: php artisan serve

10. Y listo :)



