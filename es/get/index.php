<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>SliTaz - Descargas</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD free download" />
    <meta name="keywords" lang="es" content="source, iso, livecd, get, free" />
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
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
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
    <li><a href="#cooking">LiveCD Versión Cooking</a> -
    Imagen ISO de autoarranque con la versión Cooking.</li>
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
	<a href="http://forum.slitaz.org/#idx5">foros</a> de SliTaz (también en
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

<a name="sources"></a>
<h3>Fuente</h3>
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

<a name="stable"></a>
<h2>LiveCD - Versión estable</h2>
<p>
	La versión estable de SliTaz proporciona un sistema operativo maduro y
	bastante testeado por la comunidad. El núcleo del LiveCD te ofrece una amplia
	selección de paquetes cuidadosamente integrados en la distribución, resultando
	en un sistema coherente y, sobre todo, robusto. La versión estable actual fue
	liberada el:
	<?php echo "$stable_rel."; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p>
	Diariamente se genera una imagen de cdrom autoarrancable con todos los
	paquetes disponibles para la versión 1.0. También contiene una copia de esta
	página web, con lo que puede ser consultada sin conexión a internet usando el
	script install.sh.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Colección de paquetes de SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>LiveCD - Versión Cooking</h2>
<p>
	El LiveCD SliTaz "Cooking" es una versión dinámica y totalmente funcional que
	te permite probar los últimos paquetes y mejoras, solicitar nueva
	funcionalidad o generar incidencias que nos ayuden a preparar la próxima
	versión estable.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
	Diariamente se genera una imagen de DVD autoarrancable con todos los paquetes
	disponibles para la versión Cooking. También contiene una copia de esta página
	web, con lo que puede ser consultada sin conexión a internet usando el script
	install.sh.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Colección de paquetes de SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
