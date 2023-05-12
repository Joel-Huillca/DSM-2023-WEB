> Proyecto de Desarrollo de Soluciones Móviles 2023, Profesor: Ricardo Paul Urvina Cordova 
<br>
<p align="center">
    <p align="center" ><img src="https://i.postimg.cc/BZ2yQdcV/Larabel-y-postaman.jpg" width="400"></p>       
</p>

</br>

 ***Este proyecto tambien tiene un  **[sistema móvil](https://github.com/Joel-Huillca/ProyectoDSM.git)** utilizando la tecnologia React Native.***

<br>

## Plataforma WEB (Laravel)
El proyecto consiste en levantar información de empresas y su conocimiento en tecnología a través de un formulario en línea. La aplicación tiene dos partes: una para los usuarios finales (empresas) que pueden completar el formulario y ver un resumen de sus calificaciones, y otra para los administradores del sistema que pueden gestionar los módulos correspondientes y crear nuevos formularios.

</br>

Utilizamos software especializado para construir la página web.

| Herramientas |
| -------------|
| ● [MySQL](https://www.mysql.com/products/workbench/) |
| ● [Laravel](https://laravel.com/docs/4.2) |
| ● [Node](https://nodejs.org/es/download) |
| ● [Composer](https://getcomposer.org/download/) |
| ● [Visual Studio](https://code.visualstudio.com/download) |
| ● [Postaman](https://www.postman.com/downloads/) |
| ● Otros. |


### Colaboración 
- [Cristobal Osses](https://github.com/CristobalKronos)
- [Joel Huillca](https://github.com/Joel-Huillca)

## ¿Como iniciar?
Este comando instalará las dependencias del proyecto (Node.js):
```diff
npm install
```

Instalamos todas las dependencias y paquetes necesarios. Recordar tener la misma version con el PHP (para este proyecto se ocupo una mayor a 8.0.0)
```diff
composer install
```


Acontinuacion creas una copia del archivo **.env** y colocamos nuestro datos para conectar al BD (DB_USERNAME, DB_PASSWORD) para despues generar una clave de aplicación única:
```diff
php artisan key:generate
```

Limpiamos la version anterior:
```diff
php artisan config:clear
php artisan cache:clear
```
Luego cargamos nuestros nuestros datos a las tablas de la base de datos con los datos de prueba o iniciales que se han especificado en los archivos de semillas:

```diff
php artisan migrate  --seed 
```
Para finalizae iniciamos el proyecto:
```diff
php artisan serve
```



