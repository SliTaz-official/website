<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz GNU/Linux (es)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="es" content="system linux RAM"/>
	<meta name="author" content="Eduardo Suarez-Santana"/>
	<meta name="google-site-verification" content="Fls4e5hWEiUAy1fSbF-01IByDMzZdxlVh26jQP1rwis"/>
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

<div class="box-up">
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Check out our new SliTaz 2014 fundraising!</a>
</div>
    
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

        <li><strong><a href="http://mirror.slitaz.org/iso/rolling/">SliTaz 5.0 Rolling release</a></strong> (weekly)  
                <span>- <?php
                $rol_date_file = '/var/cache/slitaz/website/rolling-date.txt';
                if (file_exists("$rol_date_file")) {
                        $rol_date = file_get_contents("/var/cache/slitaz/website/rolling-date.txt");
                        print $rol_date;
                } ?></span></li>

	<li>
		<strong>02 de mayo de 2014 - SliTaz 5.0-RC1 disponible</strong>
	<p>
	El equipo de SliTaz se complace en anunciar la publicación de SliTaz GNU/Linux 5.0 
	candidato para el lanzamiento 1 (RC-1). Este lanzamiento es muy maduro, pero requiere 
	una prueba intensiva para que podamos lanzar la versión estable 5.0 lo antes posible.
	</p>
	<p>
	SliTaz RC-1 incluye varias pequeña correcciónes de errores, con los diálogos de utilidad 
	mejorados de SliTaz-config para que los nuevos usuarios puedan configurar fácilmente el 
	sistema, incluso en el modo de texto, nueva apariencia del Tazpanel y mejor soporte de idiomas. 
	También soporte fijo para los viejos discos duros ATA. 
	</p>
	<p>
	El manejo de escritorio por PCManFM con bote de basura y gvfs/udisks de apoyo. La base de 
	datos de paquetes tiene más de 200 paquetes actualizados y alrededor de 50 nuevos paquetes. 
	Para preparar SliTaz 5.0 el sitio web principal se actualizo proporcionando una manera mucho 
	más fácil de navegar. 
	</p>
	<p>
	Descargar el nuevo <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.iso"
		>slitaz-5.0-rc1.iso</a>
	[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.md5"
		>md5</a> ]
	</p>
	</li>
	<li>
		<strong>16 de febrero de 2014 - Nueva Cooking 20140216</strong>
	<p>
	El equipo de SliTaz se complace en anunciar la publicación de una nueva versión 
	Cooking que prepara el camino para SliTaz 5.0. Esta nueva Cooking incluye casi 
	dos años de trabajo y tiene un ChangeLog increíble. Nuestras herramientas caseras 
	han sido mejoradas con nuevas herramientas estupendas tales como 'frugal' o 'decode'. 
	Hemos enfocado mucho trabajo en la integración con el escritorio para prover una 
	experiencia de usuario más afinada, y hemos mejorado considerablemente la 
	configuración del Linux Kernel (3.2.53).
	</p>
	<p>
	En la parte de paquetes, hemos actualizado todos los paquetes existentes y también 
	añadido un chorro de paquetes nuevos hasta alcanzar más de 4200 paquetes en la base 
	de datos de Cooking. Mucho trabajo se ha hecho en el instalador de SliTaz que viene 
	con un nuevo front-end basado en Ncurses.
	</p>
	<p>
	El LiveCD pregunta ahora por la configuración de lenguaje antes de arrancar, de tal 
	manera que los usuarios llegan directamente al escritorio después de que los scripts 
	de arranque hayan sido ejecutados. El tamaño de la ISO ha crecido un poco debido a un 
	mejor soporte hardware y nuevas funcionalidades. Puedes descargar la imagen ISO de un 
	mirror de SliTaz (40 MB):
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
		>slitaz-cooking.iso</a>
	[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
		>md5</a> ]
	</p>
	</li>

	<li>
		<strong>10 de abril de 2012 - SliTaz GNU/Linux 4.0 Publicado</strong>
	<p>
	Los contribuyentes de SliTaz se complacen en anunciar la liberación de
	la nueva distribución estable SliTaz GNU/Linux 4.0. Dos años de
	trabajo de la comunidad han creado un sistema fiable capaz de tiempos
	de arranque más cortos con más de mil nuevos paquetes instalables.
	</p>
	<p>
	SliTaz proporciona un entorno gráfico completo en 35 MB basado en LXDE
	y Openbox que funciona por completo en 192MB de RAM. La nueva imagen
	de CD 4in1 puede ser instalada en un disco duro con sólo 48MB
	automáticamente seleccionando la configuración que más se ajusta a tu
	hardware
	</p>
	<p>
	Las herramientas caseras han crecido. Tazpkg viene con un nuevo
	sistema de notificación y es mucho más rápido a pesar del aumento en
	el número de paquetes, y Tazpanel habilita un nuevo sistema de gestión
	centralizado. Puedes leer las Notas de la Publicación y descargar
	SliTaz 4.0 de nuestro mirror: 
	<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	</p>
	</li>

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
	Al equipo de SliTaz le complace anunciar la disponibilidad inmediata
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
	El equipo de SliTaz se enorgullece en anunciar la liberación de una
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
		<a href="http://scn.slitaz.org/?log"><img 
			src="/images/users.png" alt="[ ]" /></a>
		Actividad de la comunidad
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/?log">Más actividad</a>
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
