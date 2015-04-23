<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Arquivos de noticias</title>
	<meta name="description" content="SliTaz news archives info release"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Arquivos de noticias</h4>
		<p>
			Website news archives by year. Note that some links may be
			broken due to website structure changes (mainly the docs 
			that moved to their own domain).
		</p>
		<p>
			<img src="/images/news.png" alt="[ ]" /> 
			<a href="2008.php">2008</a> | 
			<a href="2009.php">2009</a> | 
			2010
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2010</h2>

<ul>
	<li>
		<strong>4 de noviembre de 2010 - Nueva Cooking</strong>   
	<p>El equipo de trabajo de SliTaz se complace en anunciar la publicación
	de una nueva ISO de Cooking cargada con más de 2600 paquetes. Contiene
	el núcleo Linux 2.6.34 y ha sido rehecha con una nueva cadena de
	herramientas usando glibc 2.11.2 y gcc 4.5.1. Xorg ha sido
	completamente actualizado a la 1.9.2. El LiveCD incluye Midori, el
	reproductor de audio Deadbeef y muchas aplicaciones de uso diario.
	Tazpkg y Tazctrlbox ahora soportan las traducciones de gettext y se ha
	añadido más configuración regional. Se ha trabajado mucho en los
	últimos seis meses para resolver muchos errores y añadir
	actualizaciones y mejoras. Puedes 
	<a href="../get/#cooking">descargarte</a> 
	esta nueva versión Cooking de cualquiera de los mirrors oficiales 
	del proyecto. Apreciaciones o comentarios, canalizados a través de 
	la lista de correo o del foro oficial, son siempre bienvenidos.</p>
	</li>

	<li>
		<strong>8 de mayo de 2010 - Verano de documentación</strong>   
	<p>El equipo de SliTaz está organizando un 'Verano de Documentación' 
	del 10 de mayo al 10 de junio. Su objetivo es centralizar, revisar y
	actualizar toda la documentación en línea. Puedes encontrar más
	información en <a href="http://doc.slitaz.org/">doc.slitaz.org</a>. 
	Confiamos que los usuarios del proyecto puedan contribuir, bien 
	añadiendo o bien actualizando la documentación.</p>
	</li>

	<li>
		<strong>28 de marzo de 2010 - Publicada SliTaz GNU/Linux 3.0</strong>   
	<p>El equipo de SliTaz está encantado de anunciar la publicación de SliTaz
	GNU/Linux 3.0. Más sencillo, rápido, configurable, potente, y aún así
	increíblemente pequeño. Esta nueva versión estable ha sido publicada
	después de un año de desarrollo.</p>
	<p>El escritorio está basado en Xorg 7.4, Openbox, componentes de LXDE y
	algunas herramientas de la casa. Con él puedes conectarte y navegar por
	internet con el navegador Midori, escuchar música o gestionar tus fotos.</p>
	<p>El sistema cabe en una imagen ISO de 30MB, y encontramos sus variaciones
	en LiveCD desde 8MB. Esta versión estable ha sido generada con un nuevo
	conjunto de herramientas, incluyendo GCC 4.4.1, y viene con el núcleo
	2.6.30.6. Ya puedes leer las 
	<a href="../doc/releases/3.0/relnotes.es.html">Notas de Lanzamiento</a> para más 
	información y <a href="../get/#stable">descargarte</a> una imagen 
	LiveCD de los mirros de SliTaz.</p>
	</li>

	<li>
		<strong>14 de marzo de 2010 - Series RC y Solutionslinux 2010 (París)</strong>
	<p>Puesto que nos vamos acercando a la próxima versión estable, hemos
	actualizado la imagen ISO principal para comenzar con series RC (release
	candidate). El mayor cambio se encuentra en la sustitución del navegador
	web por Midori, lo mejorará la experiencia de usuario y nos permitirá
	mantener SliTaz en 30MB. Midori es un navegador moderno, creado a partir
	del motor webkit. Es rápido, fácil de usar y se integra de maravilla con
	el escritorio de SliTaz.</p>
	<p>La ISO actualizada viene con un montón de incidencias y dependencias
	resueltas. Hemos mejorado además las herramientas y scripts caseros.
	Esta nueva ISO puede descargarse de los mirrors de SliTaz (30MB):
	<a href="../get/#cooking">slitaz-cooking.iso</a></p>
	<p>Ya de paso, el proyecto SliTaz estará en 
	<a href="http://www.solutionslinux.fr/">Solutionslinux</a> 2010 la próxima
	semana en París. Allí podrás enterarte más de cerca del proyecto, y
	contactar con los miembros de la asociación y del equipo de desarrollo.</p>
	</li>

	<li>
		<strong>21 de febrero de 2010 - Nueva Cooking 20100221</strong>	
	<p>A los participantes del proyecto SliTaz nos complace anunciar una nueva
 	versión Cooking del LiveCD. Esta es la última Cooking RC antes de que la
	versión 3.0 sea publicada. La ISO principal ocupa 27 MB y viene con
	muchos cambios y mejoras. Esta Cooking usa Xorg como servidor X en lugar
	de Xvesa y trae soporte total para UTF-8. Con un entorno de escritorio
	limpio, también trae muchas aplicaciones para el día a día y las tareas
	más frecuentes. Netsurf reemplaza a firefox como el navegador por
	defecto. Aún así, una variación para Firefox de 29 MB con sonido y wifi
	puede también ser descargada de los mirrors oficiales.</p>
	<p>Respecto a actualizaciones y mejoras: tazpkg es más rápido, los scripts
 	de arranque están actualizados y las herramientas caseras han sido
	mejoradas. Wifibox usa awk para un mejor escaneo de red. El soporte para
	WPA en los scripts de arranque ha sido también mejorado. El tiempo en el
	arranque es guardado en los logs, para medir el rendimiento. El
	instalador de SliTaz trata ahora de usar ficheros de un dispositivo USB
	si no hay cd-rom, te permite crear una cuenta de usuario por defecto,
	establece una contraseña de root y usa una partición /home
	independiente. Y por último, la personalización de LiveCDs es ahora
	mucho más sencilla: usuarios sólo necesitan arrancar, modificar y usar
	writefs mediante la interfaz gráfica de Tazlito o mediante línea de
	comandos, para generar su propio CD personalizado.</p>
	<p>Como es habitual, puedes <a href="../get/#cooking">descargarte</a> 
	todo esto de cualquiera de los	mirrors oficiales del proyecto, y decirnos 
	qué te parece en nuestro foro.</p>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
