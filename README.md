## Instrucciones:

1. **Clonar el proyecto:**  
   Si aún no has clonado el proyecto, puedes hacerlo ejecutando el siguiente comando en tu terminal:  
   `git clone https://github.com/solobero/Taller-01`  
   Luego entra a la carpeta del proyecto de manera local en tu editor de texto.

2. **Instalar dependencias de Composer:**  
   Una vez dentro del directorio del proyecto, instala las dependencias de PHP usando Composer:  
   `composer install`

3. **Configurar el archivo .env:**  
   El archivo `.env` contiene las configuraciones necesarias para conectar el proyecto a la base de datos. Si no tienes este archivo creado, ejecuta en tu terminal, en la raíz del proyecto:  
   `cp .env.example .env`  
   Luego puedes cambiarle el nombre a `.env` si es necesario.

4. **Configurar XAMPP:**  
   Inicia XAMPP y asegúrate de hacer "START" en Apache y MySQL. Luego ve a:  
   [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) y crea una base de datos llamada `talleruno`. (Puedes cambiar el nombre, pero asegúrate de usar ese mismo nombre en el siguiente paso).

5. **Configurar las variables de entorno:**  
   Edita el archivo `.env` y asegúrate de descomentar y configurar las siguientes líneas:

```env
   DB_CONNECTION=mysql  
   DB_HOST=127.0.0.1  
   DB_PORT=3306      # Si tienes un puerto distinto, asegúrate de cambiarlo.  
   DB_DATABASE=talleruno  
   DB_USERNAME=tu_usuario  # Por defecto es root.  
   DB_PASSWORD=tu_contraseña  # Por defecto este campo es vacío.
```

6. **Migrar la base de datos:**  
Ejecuta las migraciones para crear las tablas necesarias en tu base de datos:  
`php artisan migrate`

7. **Enlazar el almacenamiento:**  
Laravel necesita un enlace simbólico para que los archivos subidos (como imágenes) sean accesibles públicamente. Ejecuta el siguiente comando:  
`php artisan storage:link`

8. **Iniciar el servidor local:**  
Finalmente, ejecuta el servidor de desarrollo de Laravel:  
`php artisan serve`

9. **¡Listo!**  
Ya puedes acceder al proyecto desde [http://localhost:8000](http://localhost:8000).
