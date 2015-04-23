<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Documentación</title>
	<meta name="description" content="SliTaz GNU/Linux documentation in spanish"/>
	<meta name="keywords" lang="es" content=""/>
	<meta name="author" content="Eduardo Suarez-Santana"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Documentación</h4>
		<p>
			SliTaz official documentation is available on the community
			Wiki site. Manuals and a getting started guide is provided
			by each SliTaz LiveCD (installed in <code>/usr/share/doc/slitaz</code>
			and also available through the "Documentation" menu).
		</p>
		<ul>
			<li><a href="http://doc.slitaz.org/en:start">Community Wiki</a></li>
			<li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.en.html"
				>Getting started guide</a></li>
		</ul>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Guía y Recetario</h2>

<p><a href="http://doc.slitaz.org/en:handbook:start">Guía</a> - Guía de SliTaz.
	Manejo del LiveCD, gestión de paquetes, administración del sistema y redes, así como
	instrucciones específicas. Esta guía es un esfuerzo de la comunidad para proporcionar
	documentación de alta calidad para los usuarios de SliTaz. Te ayudará a
	iniciarte con SliTaz GNU/Linux y te mostrará cómo configurar el sistema
	para ajustarse a tus necesidades y preferencias. Éste es el primer
	documento que te recomendamos leer, aprender y consultar.
</p>
<p>
	<a href="http://doc.slitaz.org/en:cookbook:start">Recetario</a> - Recetario de SliTaz.
	Información sobre la administración, operación y desarrollo de la distribución.
	Instrucciones acerca de cómo usar wok y las recetas de los paquetes, descripciones de los
	scripts de arranque y los ficheros del cd, así como varias herramientas.
</p>
<p>
	<a href="/en/doc/scratchbook/">Desde Cero</a> - SliTaz desde cero.
	Describe las fases para la creación de la primera distribución SliTaz, comenzando con
	instrucciones en la compilación del kernel de Linux, instalando el servidor gráfico (Xvesa)
	y las aplicaciones GTK, etc. Contiene técnicas que requieren tiempo y motivación, pero que te
	permitirán construir un sistema GNU/Linux desde cero.
</p>

<h2>Manuals</h2>

<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.es.html"
		>Manual de Tazpkg</a> -  Gestor de paquetes de SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.es.html"
		>Manual de Tazlito</a> -  Utilidad para el LiveCD SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.en.html"
		>Manual de TazUSB</a> -  Utilidad para el LiveUSB SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazwok/raw-file/tip/doc/tazwok.en.html"
		>Manual de Tazwok</a> -  Cocinero de paquetes para SliTaz.</li>
</ul>

<h2>Recursos via wiki</h2>

<p>
El <a href="http://doc.slitaz.org/">Wiki</a> contiene documentación de la comunidad
incluyendo howtos específicos, consejos, trucos, etc. Tus contribuciones son bienvenidas.
</p>

<h2>Notas de las versiones publicadas</h2>

<p>
Las Notas de las Versión (Release Notes) de SliTaz proporcionan información detallada
acerca de versión estable y dan algunos consejos útiles para ayudarte a empezar a usar
el sistema. En el LiveCD, las Notas de la Versión están instaladas y disponibles mediante
el menú "Documentación".
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.es.html";
		if (!file_exists($file)) {
			$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
			if (!file_exists($file))
				break;
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "		Notas de la Versión</a></li>\n";
	}
?>
</ul>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
