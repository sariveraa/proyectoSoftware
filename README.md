# proyectoFinal
Para desplegar el proyecto es necesario tener en cuenta los siguientes pasos
1. Copiar el archivo .env.example y renombrarlo a .env
2. Cambiar en el archivo .env todos los datos correspondientes al ambiente en que se va a desplegar el aplicativo.
3. En la terminal se debe correr el comando: composer install
4. En la terminal se debe correr el comando:  npm install
5. En la terminal se debe correr el comando: npm run dev (Puede que la primera vez que se ejecute aparezca un error. Se soluciona volviendo a correr este mismo comando).
6. Se crea una base de datos vacía con el nombre: proyectoFinal
7. Correr las migraciones con el comando php artisan migrate.
8. Para el funcionamiento de las imágenes se debe correr el comando: php artisan storage:link
9. Para el funcionamiento de los reportes se debe correr el comando: composer require barryvdh/laravel-dompdf
10. Para correr el proyecto, se corre el comando php artisan serve
11. Tener en cuenta: Si hay problemas con las imágenes, se pueden seguir los siguientes pasos:
    -Ejecutar el comando: php artisan optimize:clear
    -Borrar la carpeta storage, que está en public/storage
    -Correr el comando php artisan storage:link. Después de eso se habrá creado nuevamente la carpeta storage en public/
