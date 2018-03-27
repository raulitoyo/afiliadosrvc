=== Afiliados RVC ===

Plugin Name:  Afiliados RVC
Description:  Registro de afiliados, de una organización de profesionales que permite agregar campos adicionales de los usuarios registrados (Personales, Formación académica y otros datos de interés). Desde la página principal a través del shortcodes [afiliadosrvc-edit] puede modificar algunos datos cambiables
Plugin URI:   https://raulitoyo.com
Author:       Raul Vargas Choquilla
Version:      1.0
Text Domain:  affiliates
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt

Registro de afiliados, de una organización de profesionales que permite agregar campos adicionales de los usuarios registrados (Personales, Formación académica y otros datos de interés). Desde la página principal a través del shortcodes [afiliadosrvc-edit] puede modificar.

== Description ==

El plugin Afiliados RVC permite realizar un registro de afiliados de una organización de profesionales donde se utilizará como base la tabla de usuarios del wordpress y se deberá permitir añadir campos adicionales:
•	Personales: dirección, teléfonos, fecha de nacimiento, redes sociales, datos de trabajo, etc.
•	Formación académica: universidad de formación, numero de registro, especialidad, etc.
•	Otros datos de interés: tallas - la organización ocasionalmente puede regalar suvenirs 
Desde la página principal los usuarios registrados deben poder ingresar con su usuario y contraseña asignados y deberán poder cambiar algunos datos personales y que son cambiables en el tiempo como, por ejemplo:
•	Correo electrónico
•	Números de contacto (personal y de trabajo)
•	Dirección (personal y de trabajo)
•	Tallas
•	Otros en consideración


== Installation ==

A continuación se describe como instalar el plugin Afiliados RVC

1. Copiar el plugin a la carpeta `/wp-content/plugins/afiliadosrvc`, o instalar el plugin a traves del WordPress directamente.
2. Activate the plugin a traves de la ventana 'Plugins' en el WordPress (crea tablas adicionales, mas sus datos)
3. Utilizar la ventana Settings->Afiliados RVC, para habilitar o deshabilitar que desde el front-end los usuarios tengan acceso a la barra de menus
4. En el modo Administrador desde la ventana de edicion de Usuarios, se podra introducir datos adicionales que se indican en la descripcion


== Changelog ==

= 1.0 =
* Se ha configurado los idiomas.

= 0.8 =
* Se ha realizado el front-end con los campos modificables por parte de los usuarios

= 0.5 =
* Se ha realizado el modulo de administracion del backend
* Se ha insertado los datos de la tabla configuraciones
* Se ha creado los campos adicionales, y se ha creado la estructura de la Tabla Configuraciones


== Field Details ==

Algunas de las carpetas son:

admin
Archivos para el administrador en el lado del backend 
admin-views
Contiene archivos de los formularios (backend) de los datos adicionales de usuarios (personal, profesional, registro, trabajo, etc.)
public
Contiene archivos de los formularios (frontend) de los datos modificables por los usuarios.
public-css
Contiene archivos de estilo del frontend.
public-images
Contiene archivos de imagenes necesarios para el frontend
languages
Contiene los idiomas del plugin
