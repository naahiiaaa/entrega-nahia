# entrega-nahia
TECNOLOGÍAS
   -Bootstrap
   -jQuery
   -HTML:5
   -CSS3
   -Google Fonts
   -PHP

ENTORNO DE DESARROLLO
   -Visual Studio Code
   -GitHub desktop
   -XAMPP

ESTRUCTURA
   -index.html: página principal que incluye las siguientes secciones:
       -Sobre mí: breve introducción sobre quién soy y mis intereses personales
       -Estudios: detalles sobre mi formación académica
       -Proyectos: descripción de proyectos destacados como I3 y Kaixomundua
       -Contacto: formulario de contacto para que los usuarios puedan comunicarse conmigo
   -bbdd.html: formulario para añadir proyectos nuevos
   -bbdd.php: página php para poder añadir los nuevos proyectos a la base de datos

IMPORTANTE:
   -Tener instalado XAMPP y activado Apache y MySQL
   -Hay que meter esta carpeta (entrga-nahia) en "C:\xampp\htdocs"
   -Antes de ejecutar nada hay que cambiar el nombre por tu usuario y tu nombre en bbdd.php
      $servername = 'localhost';
      $username = 'tu_nombre';
      $password = 'tu_contraseña';
      $dbname = 'portfolio_nahia';

BASE DE DATOS
   -Crear la base de datos y darle permisos en phpMyAdmin
      CREATE DATABASE PORTFOLIO_NAHIA;
      USE PORTFOLIO_NAHIA
      CREATE TABLE PORTFOLIO_NAHIA.PROYECTOS (
         ID SMALLINT AUTO_INCREMENT PRIMARY KEY,
         TITULO VARCHAR(255) NOT NULL,
         IMAGEN VARCHAR(255) NOT NULL,
         DESCRIPCION_BREVE TEXT NOT NULL,
         DESCRIPCION_EXTENSA TEXT NOT NULL
      );
      GRANT ALL PRIVILEGES ON PORTFOLIO_NAHIA.* TO 'tu_nombre'@'localhost' IDENTIFIED BY 'tu_contraseña';
      FLUSH PRIVILEGES;