## Index
1. [Información General](#informacion-general)
2. [Tecnologías ](#tecnologias)
3. [Funcionalidades](#funcionalidades)
4. [Instalación](#instalacion)
5. [Author](#author)
### Información General
***
Esta aplicación permite gestionar la reserva de vehículos y conductores por fecha y licencia. Proporciona una interfaz amigable para que los usuarios realicen reservas de manera rápida y sencilla. 
***
## Tecnologías 
Una lista de tecnologías utilizadas dentro del proyecto.:
* [Laravel] Framework PHP utilizado para el desarrollo del back-end de la aplicación. (https://laravel.com/): Version 10 
* [HTML5 y CSS3] Lenguajes de marcado y estilo para la estructura y presentación de las páginas web.
* [Bootstrap]  Framework front-end utilizado para el diseño responsivo y la interfaz de usuario. (https://getbootstrap.com/): Version 5.0
* [JavaScript y Jquery] Utilizados para la interactividad del lado del cliente y la manipulación del DOM. (https://jquery.com/download/): Version 3.7.1
## Funcionalidades
***
1. Registro de Vehículos: Los Administradores pueden registrar Vehículos en la aplicación para acceder a funcionalidades adicionales, como  como ver los Conductores registrados, editar y eliminar.
2. Registro de Conductores: Los Administradores pueden registrar Conductores en la aplicación para acceder a funcionalidades adicionales, como ver los vehículos registrados, editar y eliminar.
3. Reserva de Viaje: Los usuarios pueden buscar vehículos y conductores disponibles por fecha, tipo de vehículo, tipo de licencia, y realizar una reserva.
4. Gestión de Reservas: Los usuarios pueden ver las reservas existentes.
## Instalación
*** 
Introducción acerca de la instalación.
```
1. Clona el repositorio en tu máquina local:
$ git clone https://github.com/Donovan180/reserva-vehiculos.git

2. Instala las dependencias de PHP utilizando Composer:
$ composer install

4. Copia el archivo de configuración .env.example y renómbralo a .env:
$ cp .env.example .env

5. Configura tu base de datos en el archivo .env (Importante antes debiste haber importado 
la base de datos que viene dentro del proyecto, en el gestor de bd que en este caso es MySql):

 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=uster_bd
 DB_USERNAME=root
 DB_PASSWORD=

6. Inicia el servidor de desarrollo, este comando te generara un link donde solo tendras que copiar y pegar en tu
navegador para poder ejecutar la aplicación:
$  php artisan serve

## Author
***
1. Donovan Eduardo Hernández Guerrero - Web Developer 
