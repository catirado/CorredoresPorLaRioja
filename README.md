corredoresrioja
====================

http://corredoresrioja.herokuapp.com/


##Funcionalidad
Se han implementado los repositorios en memoria como Fake, sólo para la funcionalidad necesitada.
Se ha implementado las siguiente páginas:
- Login
- Registro
- Carreras
- Página de una carrera
- Mis carreras

##Seguridad
El menú de mis carreras y perfil sólo se muestran si el usuario está logueado. Además si se intenta entrar sin estar logueado se reenvia a la pantalla de login-

##Internacionalización
- Se ha incluido un elector de idiomas
- Se han internacionalizado las rutas
- Se han hecho traducciones de la mayor parte de la aplicación
- Se han internacionalizado las fechas

##Twig
- Se ha utilizado herencia (de base)
- Se han utlizado includes (header, footer)
- Se han utilizado varios filtros (capitalize, date, localizeddate, 

##bundles
Se han utilizado varios bundles de terceros
- GregwarImageBundle: Para hacer resize de las imágenes
- BeSimpleI18nRoutingBundle: Para la internacionalización de las rutas
- TwigExtension: Para los filtro de fechas interncionalizadas

##optimización
Tanto el css como el js se han comprimido en un único fichero utilizado Assetic

##instalación
Es necesario activar php intl
