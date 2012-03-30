<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>SliTaz - Arquivos de noticias 2008</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz news archives info release" />
    <meta name="keywords" lang="en" content="System, free, gnu, linux, opensource software, livecd in RAM" />
    <meta name="robots" content="index, follow, all" />
    <meta name="revisit-after" content="7 days" />
    <meta name="expires" content="never" />
    <meta name="modified" content="2010-03-30 21:45:00" />
    <meta name="author" content="Christophe Lincoln"/>
    <meta name="publisher" content="www.slitaz.org" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
    <link rel="Content" href="#content" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../../images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://bugs.slitaz.org">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
    <div id="block_nav">
		<h4>Navigation</h4>
		<div class="right_box">
			<ul>
				<li><a href="../mailing-list.php">Lista de correo</a></li>
				<li><a href="../devel/">Desarrollo</a></li>
				<li><a href="../packages/">Paquetes</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.php">Buscar</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">Titulares</a></li>
				<li><a href="../about/">Acerca de</a></li>
				<li><a href="../get/">Descargas</a></li>
				<li><a href="../asso/">Asociación</a></li>
				<li><a href="../doc/">Documentación</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Arquivos de noticias</h4>
		<p>
			Website news archives by year. Note that some links may be
			broken due to website structure changes (mainly the docs 
			that moved to their own domain).
		</p>
		<p>
			<img src="../../images/news.png" alt="png" />
			2008 | <a href="2009.php">2009</a> | <a href="./">2010</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2008</h2>

<ul>
<li><strong>28 de febrero de 2008 - Cooking 20090228</strong><br />

	¡Preparándonos para la próxima versión estable! El proyecto Slitaz se
	complace en anunciar la publicación de una nueva versión Cooking cargada
	de correcciones, actualizaciones, mejoras y nuevas funcionalidades. La
	autodetección PCI/USB es ahora gestionada por Tazhw y el firmware puede
	ser instalado con un click mediante una interfaz gráfica. Tazndis
	también tiene una GUI más amigable con la que administrar los
	controladores de Windows. El gestor gráfico de paquetes es también más
	fácil de usar y los medios LiveUSB como las memorias USB pueden ser
	creadas de forma sencilla mediante un cuadro de diálogo. Netbox muestra
	todas las intefaces y la nueva Wifibox puede conectarse a essids wifi,
	administrar las redes preferidas y configurar los controladores de la
	tarjeta bien manualmente bien mediante Tazhw. El escritorio tiene una
	GUI para habilitar y deshabilitar las aplicaciones de inicio de Openbox
	y lvman conjuntamente con desktopbox proporcionan un sistema de
	notificación ligero. Puedes <a href="get/#cooking">descargarte</a>
	esta nueva ISO de cualquiera de nuestros mirrors oficiales.
	</li>
	<li><strong>31 de diciembre de 2008 - Cooking 20081231 - Soporte para Wifi y NTFS</strong><br />

	Los miembros del proyecto SliTaz anuncian una nueva imagen ISO de la versión
	Cooking del LiveCD. Con ella puedes disfrutar del trabajo realizado en estos
	últimos meses, esto es, nuevas funcionalidades, nuevas actualizaciones y
	menos errores. Se ha añadido un centro de control y la gestión del wifi mediante
	Netbox y tazndis, una versión más ligera del ndiswrapper, que permite usar
	los controladores de Windows para aquellas tarjetas para las que no hay
	controlador libre. Se ha incluido Perl y se ha eliminado Lua. El soporte wifi viene
	acompañado además por el soporte para particiones NTFS, por lo que el mplayer
	ha tenido que ser eliminado de la lista de paquetes que vienen
	inicialmente en el LiveCD. Se ha mejorado sustancialmente el gestor de
	paquetes Tazpkg, corrigiendo varios errores y permitiendo preservar los ficheros de
	configuración, actualizar el software en función de la fecha de compilación en
	log. Sehan mejorado también los scripts de arranque, ahora más eficientes, así como
	la utilidad de construcción de LiveCD (tazlito). El repositorio de la versión
	Cooking dispone ahora mismo de más de 1100 paquetes listos para ser
	instalados, y todo esto gracias a nuestro equipo de desarrolladores. Puedes
	<a href="get/#cooking">descargarte</a> esta nueva versión de cualquiera
	de los mirrors oficiales del proyecto.
	</li>
    <li><strong>16 de julio de 2008 - Cooking 20080716 - Web boot y MPlayer</strong><br />

    	Los miembros del proyecto SliTaz anuncian la disponibilidad de una nueva
	imagen ISO de la versión Cooking, en la que se resuelven muchas incidencias a
	la vez que se añaden nuevas funcionalidades. Esta versión incluye la opción
	de arranque web, con la que es posible arrancar SliTaz directamente desde
	internet tirando por gPXE del servidor <a href="http://boot.slitaz.org/">boot.slitaz.org</a>.
	De esta manera es posible arrancar SliTaz en modo Live (directamente en la RAM),
	y así almacenar tu información permanentemente y preconfigurar el sistema. Esta nueva imagen
	ocupa 3 MiB adicionales en los que hemos añadido: el reproductor multimedia
	MPlayer, el gestor de notas Notecase, una nueva versión de nuestro gestor de
	paquetes Tazpkg con soporte para md5, soporte para XFS, el comando 'man' y
	algunas actualizaciones. Para arrancar y funcionar en condiciones, esta
	versión necesita al menos 160 MiB de RAM, si bien disponemos de modalidades
	loram para máquinas que no alcancen este requerimiento. 
	<a href="get/#cooking">Descarga SliTaz Cooking ISO.</a>
    </li>
    <li><strong>22 de marzo de 2008 - SliTaz GNU/Linux 1.0</strong><br />

    	Los participantes en el proyecto SliTaz se enorgullecen en anunciar la
	publicación de SliTaz GNU/Linux 1.0. Esta es la primera versión estable tras
	dos años de trabajo. El sistema se distribuye como un LiveCD de 24.8 MiB que
	trae todo un entorno de escritorio y una amplia gama de aplicaciones. Slitaz
	GNU/Linux 1.0 usa el kernel 2.6.24.2, incluye firefox 2.0.0.12, rsync 3.0.0,
	gparted 0.3.5 y soporte para sonido mediante alsa 1.0.16. Con esta
	distribución puedes escuchar tu música preferida, navegar por internet, y
	mucho más gracias a sus más de 448 paquetes disponibles que pueden ser
	instalados con nuestro gestor de paquetes Tazpkg. El LiveCD te permite crear
	una distro personalizada o una LiveUSB en una sola línea de comando. El
	proyecto proporciona actualizaciones de seguridad, además de actualizaciones
	para los paquetes tales como firefox. Puedes descargarte SliTaz GNU/Linux 1.0
	de la <a href="get/#stable">página de descarga</a>. Lee las Release Notes
	si quieres información más detallada de esta versión estable.
    </li>
</ul>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://bugs.slitaz.org">Bugs</a>
	<a href="http://hg.slitaz.org/">Hg</a>
	<p>
		SliTaz @
		<a href="http://twitter.com/slitaz">Twitter</a>
		<a href="http://www.facebook.com/slitaz">Facebook</a>
		<a href="http://distrowatch.com/slitaz">Distrowatch</a>
		<a href="http://en.wikipedia.org/wiki/SliTaz">Wikipedia</a>
		<a href="http://flattr.com/profile/slitaz">Flattr</a>
	</p>
</div>

</body>
</html>