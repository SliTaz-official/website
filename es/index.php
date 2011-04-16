<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>SliTaz GNU/Linux (es)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="es" content="system linux RAM" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Eduardo Suarez-Santana" />
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../slitaz.css" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="../en/rss.xml" />
	<link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/activity/feed/" />
	<script type="text/javascript">
	/* <![CDATA[ */
	    (function() {
	        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
	        s.type = 'text/javascript';
	        s.async = true;
	        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
	        t.parentNode.insertBefore(s, t);
	    })();
	/* ]]> */
	</script>
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../images/network.png" alt="network.png" /></a>
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
				<li><a href="mailing-list.html">Lista de correo</a></li>
				<li><a href="../en/devel/">Desarrollo (en)</a></li>
				<li><a href="packages/">Paquetes</a></li>
				<li><a href="artwork/">Artwork</a></li>
				<li><a href="search.html">Buscar</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">Últimas noticias</a></li>
				<li><a href="about/">Acerca de</a></li>
				<li><a href="get/">Descargas</a></li>
				<li><a href="../en/asso/">Association (en)</a></li>
				<li><a href="doc/">Documentación</a></li>
			</ul>
		</div>
	</div>
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

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Español</a>
	<a href="../fr/">Français</a>
	<a href="../id/">Indonesian</a>
	<a href="../pt/">Português</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">
    
<h2>Titulares</h2>
<p>La página de SliTaz proporciona las principales noticias del proyecto,
así como noticias sobre la actividad general de los subproyectos en la
sección de la <a href="http://scn.slitaz.org/">comunidad</a>. Ambas están 
disponibles como un feed XML. El proyecto además publica una pequeña 
revista mensual. Por último, en la <a href="../">página principal</a> 
podrás seguir las últimas noticias, commits y tweets.</p>

<h2>Últimas noticias</h2>

<div class="news">

<ul>
    <li><strong>29 de marzo de 2011 - Nueva Cooking 20110329</strong>
    <p>El equipo de SliTaz se complace en anunciar la publicación de una
    nueva ISO de la versión Cooking con alrededor de 2900 paquetes. Todos
    los paquetes han sido reconstruidos usando nuestra nueva herramienta
    de cocción, ahora incluida en tazwok. Contiene el núcleo 2.6.37
    compilado contra glibc 2.13, binutils 2.21 y gcc 4.5.2. El Core LiveCD
    incluye Midori 0.3.3. Tazpkg se ha traducido por completo al francés y
    estamos abiertos a traducciones adicionales. Tazwok ha sido totalmente
    reescrita y es posible reconstruir SliTaz de cero usando cualquier
    ISO. Esta ISO es la primera candidata en nuestra ruta hacia la
    publicación de la versión 4.0 estable.</p>
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
    <a href="news/2008.html">2008</a> |
    <a href="news/2009.html">2009</a> |
    <a href="news/">2010</a>
    </li>
</ul>

<!-- End of news -->
</div>

<h2>Actividad del proyecto</h2>
<?php
	require_once("../libs/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="users.png" /></a>
		Actividad de la comunidad
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Más actividad</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="development.png" /></a>
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

<div>
	<!-- PayPal Button -->
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
		style="display: inline;">
		<input type="hidden" name="cmd" value="_s-xclick" />
		<input type="hidden" name="hosted_button_id" value="4885025" />
		<input type="image" src="../images/paypal.png" name="submit" 
			alt="PayPal - The safer, easier way to pay online!" />
	</form>
	<!-- Flattr Button -->
	<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;"
		href="http://www.slitaz.org/"></a>
	<!-- Twitter Button -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<a href="http://twitter.com/share" class="twitter-share-button" 
		data-text="SliTaz GNU/Linux" 
		data-count="horizontal"
		data-via="slitaz">Tweet</a>
</div>

<!-- End of content -->
</div>

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
