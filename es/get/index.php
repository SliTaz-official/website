<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Descargas</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD free download"/>
	<meta name="keywords" lang="es" content="source, iso, livecd, get, free"/>
	<meta name="author" content="Eduardo Suarez-Santana"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../config.php");
include("../../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Descarga SliTaz</h4>
		<p>
			Download the latest stable version for production purposes
			or a solid desktop environment. Use the Cooking version to
			test and help us improve the distribution.
		</p>
		<div class="button">
			Quick Download:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$mirror/rolling/slitaz-rolling.iso'>SliTaz Rolling</a>"; ?>
		</div>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Descargas</h2>

<ul>
	<li><a href="#stable">LiveCD Versión Estable</a> -
		Imagen ISO de autoarranque con la última versión estable.</li>
	<li><a href="#rolling">LiveCD Versión Rolling</a> -
		Imagen ISO de autoarranque con la versión Rolling.</li>
	<li><a href="/en/get/flavors.php">LiveCD al gusto</a> (en) -
		Varias modalides como loram.</li>
</ul>

<div class="box">
	<p>
		Help the project via a small donation or become an official
		<a href="/en/sponsor/">sponsor</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Información general</h3>

<p>
	Esta página te permite descargar una copia gratuita del LiveCD SliTaz
	GNU/Linux, así como utilidades o incluso el código fuente. Para comenzar a
	usar la imagen ISO mejor dirígete a la <a href="../doc/">documentación</a>
	online (en inglés). Puedes también encontrar ayuda y soporte en los
	<a href="http://forum.slitaz.org/forum/es">foros</a> de SliTaz (también en
	inglés).
</p>

<h3>Mirrors</h3>

<p>
	SliTaz se encuentra repartido actualmente en diversos servidores situados en
	Francia, pertenecientes a <a href="http://www.ads-lu.com/">ADS</a>, 
	<a href="http://www.tuxfamily.org/">TuxFamily</a>
	y a Erjo <a href="http://info.pimentvert.com/">Pimentvert</a>. Los ficheros de
	bittorrent se encuentran en el portal Freetorrent y son mantenidos por mumbly.
	Gracias a todos ellos por su colaboración en este proyecto.
</p>

<h3 id="sources">Fuente</h3>

<p>
	Tazpkg (el gestor de paquetes), Tazlito (la herramienta de creación del
	liveCD), Tazwok (el creador de paquetes), TazUSB (la herramienta para el
	manejo de USB), y los tar.gz de las herramientas de SliTaz pueden ser
	descargados del mirror de <a href="http://www.tuxfamily.org/">TuxFamily</a>.
	Observa que todas estas utilidades vienen instaladas por defecto en SliTaz
	y su fuente está comentado en inglés. Descarga los fuentes por
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> o por
	<a href="http://mirror.slitaz.org/sources/">FTP</a>.
</p>

<h2 id="stable">LiveCD - Versión estable</h2>

<p>
	La versión estable de SliTaz proporciona un sistema operativo maduro y
	bastante testeado por la comunidad. El núcleo del LiveCD te ofrece una amplia
	selección de paquetes cuidadosamente integrados en la distribución, resultando
	en un sistema coherente y, sobre todo, robusto. La versión estable actual fue
	liberada el:
	<?php echo "$stable_rel."; ?>
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Diariamente se genera una imagen de cdrom autoarrancable con todos los
	paquetes disponibles para la versión 1.0. También contiene una copia de esta
	página web, con lo que puede ser consultada sin conexión a internet usando el
	script install.sh.
</p>

<div class="box-dl"><p>
	<?php echo "Colección de paquetes de SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<h2 id="rolling">LiveCD - Versión Rolling</h2>

<p>
	El LiveCD SliTaz Rolling es una versión dinámica y totalmente funcional que
	te permite probar los últimos paquetes y mejoras, solicitar nueva
	funcionalidad o generar incidencias que nos ayuden a preparar la próxima
	versión estable.
	SliTaz Rolling ISO released weekly.
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Rolling (43 MB) - 
	<a href='$mirror/rolling/slitaz-rolling.iso'>slitaz-rolling.iso</a>
	[ <a href='$mirror/rolling/slitaz-rolling.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Rolling flavors can be found <a href="http://mirror.slitaz.org/iso/rolling/"
	target="_blank" rel="noopener noreferrer">on mirror</a>.
</p>

<!-- p>
	Diariamente se genera una imagen de DVD autoarrancable con todos los paquetes
	disponibles para la versión Cooking. También contiene una copia de esta página
	web, con lo que puede ser consultada sin conexión a internet usando el script
	install.sh.
</p>

<div class="box-dl"><p>
	<?php echo "Colección de paquetes de SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p></div -->

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
