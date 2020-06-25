# Analitica

Procesamiento de archivos con SOAP, XSLT, XML, MYSQL, PHP


### Pre-requisitos 📋


```
php
apache2
mysql
```

### Instalación 🔧

configurar la base de datos

```
    Actualizar el archivo datos-conexion.php con las credenciales de su servidor mysql
    Crear una base de datos "archivos"
    Ejecutar el archivo db.sql para crear las tablas de nombres y extensiones
```
Para ser ejecutado solo con PHP
```
    Clonar repositorio
    cambiar a la carpeta del proyecto con: cd ./analitica
    Ejecutar php -S 127.0.0.1:8080
    Ingresar en el explorador localhost:8080/reporte1.php
    Listo
```
Para ser ejecutado con apache2
```
    Clonar repositorio
    Copiar la carpeta del repositorio [analitica] a la carpeta htdocs de apache
    Ingresar en el explorador localhost/analitica/reporte1.php
    Listo
```
### Como ejecutar

Para hacer el llamo al enpoint con soap, ir en el explorador

```
    localhost/index.php    
```
Para procesar el xml cargado en el paso anterior, ir en el explorador

```
    localhost/procesar.php    
```
Para ver los reportes, ir en el explorador

```
    localhost/reporte1.php
    localhost/reporte2.php    
```
_

## Construido con 🛠️

* [PHP]
* [MYSQLI]
* [MYSQL]
* [APACHE2]
* [SOAP]
* [XSLT]

## Licencia 📄

Este proyecto está bajo la Licencia GNU General Public License