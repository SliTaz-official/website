<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (es)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="es" content="system linux RAM" />
	<meta name="author" content="Eduardo Suarez-Santana" />
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Página de Inicio</h4>
		<p>
			SliTaz se distribuye como una imagen ISO de LiveCD cuyo
			tamaño no llega a los 30 MiB, proporcionando un sistema
			rápido, robusto y elegante. 
		</p>
		<p>
			Si buscabas una distro portátil áltamente configurable y 
			fácilmente adaptable a tus necesidades, acabas de encontrarla.
			<a href="about/">Sigue leyendo...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">
    
<h2>Titulares</h2>
<p>La página de SliTaz proporciona las principales noticias del proyecto,
así como noticias sobre la actividad general de los subproyectos en la
sección de la <a href="http://scn.slitaz.org/">comunidad</a>. Ambas están 
disponibles como un feed XML. El proyecto además publica una pequeña 
revista mensual. Por último, en la <a href="../">página principal</a> 
podrás seguir las últimas noticias, commits y tweets.</p>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li>
		<strong>3 de marzo de 2012 - SliTaz 4.0-RC2 disponible</strong>
	<p>
	El equipo de SliTaz se complace en anunciar la nueva SliTaz 4.0-RC2
	release candidate. Hemos tenido mucho trabajo resolviendo bugs de la
	RC1 y de las aplicaciones caseras para usuarios finales como TazPkg,
	TazPanel y TazUsb. La conexión Wifi se hace más sencilla mediante el
	TazPanel o el nuevo Wifibox. TazPkg tiene mejor integración en el
	escritorio y un nuevo sistema de notificación.
	</p>
	<p>
	Esta nueva versión viene con un paquete Xorg completo, soporte DRI así
	como los controladores nv, intel, geode y vesa funcionando sin
	necesidad de configurar. También hemos rehecho todos los paquetes una
	vez más, ahorrando ~2MB en el LiveCD, así que también hemos añadido
	Lxrandr, Parcellite y el cliente bittorrent Transmission.
	</p>
	<p>
	Agradecemos a todos los que han probado la RC1. Esta RC2 nos acerca a
	la SliTaz 4.0 planeada en las próximas dos semanas. Puedes descargarte
	la ISO de la RC2 de nuestro mirror (35,1 MB):
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>

	<li>
		<strong>23 de febrero de 2012 - SliTaz 4.0-RC1 disponible</strong>
	<p>
	Al equipo de Slitaz le complace anunciar la disponibilidad inmediata
	de la primera Release Candidate de SliTaz 4.0. SliTaz puede arrancar
	en 10-12 segundos en hardware relativamente nuevo, y con la nueva ISO
	4 en 1 puedes instalar un ordenador de escritorio con todo SliTaz con
	tan sólo 48 MB de RAM. La ISO 4 en 1 es capaz de autodetectar la
	memoria y puede arrancar SliTaz en modo texto, en un entorno X mínimo,
	o como un escritorio gráfico completo.
	</p>
	<p>
	SliTaz 4.0 tendrá más de 3000 paquetes bien testeados en el
	repositorio, y la serie RC nos permitirá hacer el seguimiento de las
	últimas incidencias. Desde nuestra última versión Cooking, los
	paquetes has sido rehechos dos veces con el fin de asegurar la
	calidad.
	</p>
	<p>
	La ISO RC1 mostrará tras el arranque un nuevo menú gráfico, y una
	configuración gráfica del teclado y el idioma. La ISO muestra una
	nueva distribución y diseño del escritorio, así como un instalador en
	línea de comandos con una interfaz CGI/Web accesible desde TazPanel.
	Te puedes descargar esta nueva ISO desde nuestro mirror:
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>

	<li>
		<strong>31 de mayo de 2011 - Nueva y radiante Cooking 20110531</strong>
	<p>
	El equipo de Slitaz se enorgullece en anunciar la liberación de una
	nueva versión Cooking hecha con nuestros nuevos y frescos paquetes de
	cookutils. Cookutils es una de las herramientas de nueva generación para
	hacer paquetes de SliTaz, proporcionando un Build Bot con una agradable
	interfaz web que funciona directamente en cualquier sistema SliTaz.
	Estos nuevos paquetes se han hecho con una nueva cadena de herramientas
	optimizada para i486.
	</p>
	<p>
	El proceso de arranque completo ha sido mejorado y la primera
	configuración de arranque se hace ahora mediante diálogos GTK en una
	sesión X, siendo el tiempo de arranque también más corto. Esta versión
	viene con una nueva herramienta gráfica para la configuración del
	sistema, así como nuestro nuevo panel de configuración del sistema, más
	conocido como TazPanel. TazPanel te permite configurar todo el sistema
	mediante una interfaz web xHTML/CSS (útil para el control remoto) y
	maneja la gestión de paquetes reemplazando el anterior diálogo GTK.
	</p>
	<p>
	Xorg tiene ahora soporte para dri, así que libdr, linux-drm y linux-agp
	vienen ahora con la ISO base. Esto añade 1MB al sistema de ficheros
	comprimido. Sin embargo, nos las hemos apañado para ahorrar bastante
	espacio en la ISO base con nuestros nuevos paquetes, con lo que nos ha
	quedado ¡una Cooking de 30MB! Esta nueva Cooking también trae mejor
	internacionalización y soporte para italiano. Descarga:
	<a href="get/">slitaz-cooking.iso</a>.
	</p>
	</li>

	<li>
		<strong>29 de marzo de 2011 - Nueva Cooking 20110329</strong>
	<p>
	El equipo de SliTaz se complace en anunciar la publicación de una
	nueva ISO de la versión Cooking con alrededor de 2900 paquetes. Todos
	los paquetes han sido reconstruidos usando nuestra nueva herramienta
	de cocción, ahora incluida en tazwok. Contiene el núcleo 2.6.37
	compilado contra glibc 2.13, binutils 2.21 y gcc 4.5.2. El Core LiveCD
	incluye Midori 0.3.3. Tazpkg se ha traducido por completo al francés y
	estamos abiertos a traducciones adicionales. Tazwok ha sido totalmente
	reescrita y es posible reconstruir SliTaz de cero usando cualquier
	ISO. Esta ISO es la primera candidata en nuestra ruta hacia la
	publicación de la versión 4.0 estable.
	</p>
	<p>
	Se ha trabajado mucho desde la última Cooking publicada en noviembre:
	más de 2200 cambios han sido registrados al wok, y algunos centenares
	más para las herramientas caseras. Nos complace anunciar que la
	comunidad SliTaz ha crecido mucho estos últimos meses: el año pasado
	se registraron más cambios que en los cuatro anteriores. Aún así,
	cantidad no es calidad. Necesitamos tu ayuda para probar esta nueva
	ISO e informar de posibles fallos. Si lo deseas, tu ayuda es
	bienvenida para resolver problemas abiertos camino de la publicación
	de la 4.0. Puedes alistarte vía nuestro IRC, listas de correo, foros o
	directamente escribiendo un correo a los mantenedores de los paquetes.
	Confiamos que disfrutes esta <a href="get/">nueva versión</a>.
	</p>
	</li>    

	<li><strong>Archivo de noticias:</strong>
	<a href="news/2008.php">2008</a> |
	<a href="news/2009.php">2009</a> |
	<a href="news/">2010</a>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Actividad del proyecto</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="/images/users.png" alt="[ ]" /></a>
		Actividad de la comunidad
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Más actividad</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ ]" /></a>
		Forum activity
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">More support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Últimos commits en el wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Más commits</a>
	</p>
</div>

<h2>Echa una mano</h2>

<p>
	Haz SliTaz más popular o haz una donación. Puedes apoyarnos
	monetariamente vía Paypal o mediante un micropago Flattr. Puedes
	bloguear, tweetear, compartir o simplemente hablar de SliTaz para
	ayudar a difundir el proyecto. Puedes también unirte al proyecto y
	compartir o involucrarte en nuestra 
	<a href="http://scn.slitaz.org/">Community Network</a>.
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
