<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>SliTaz - Descargas</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
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

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../da/get/">Dansk</a>
	<a href="../../de/get/">Deutsch</a>
	<a href="../../en/get/">English</a>
	<a href="../../es/get/">Espa�ol</a>
	<a href="../../fr/get/">Fran�ais</a>
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Portugu�s</a>
	<a href="../../cn/get/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Descargas</h2>

<ul>
    <li><a href="#stable">LiveCD Versi�n Estable</a> -
    Imagen ISO de autoarranque con la �ltima versi�n estable.</li>
    <li><a href="#cooking">LiveCD Versi�n Cooking</a> -
    Imagen ISO de autoarranque con la versi�n Cooking.</li>
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

<h3>Informaci�n general</h3>
<p>
	Esta p�gina te permite descargar una copia gratuita del LiveCD SliTaz
	GNU/Linux, as� como utilidades o incluso el c�digo fuente. Para comenzar a
	usar la imagen ISO mejor dir�gete a la <a href="../doc/">documentaci�n</a>
	online (en ingl�s). Puedes tambi�n encontrar ayuda y soporte en los
	<a href="http://forum.slitaz.org/#idx5">foros</a> de SliTaz (tambi�n en
	ingl�s).
</p>

<h3>Mirrors</h3>
<p>
	SliTaz se encuentra repartido actualmente en diversos servidores situados en
	Francia, pertenecientes a <a href="http://www.ads-lu.com/">ADS</a>, 
	<a href="http://www.tuxfamily.org/">TuxFamily</a>
	y a Erjo <a href="http://info.pimentvert.com/">Pimentvert</a>. Los ficheros de
	bittorrent se encuentran en el portal Freetorrent y son mantenidos por mumbly.
	Gracias a todos ellos por su colaboraci�n en este proyecto.
</p>

<a name="sources"></a>
<h3>Fuente</h3>
<p>
	Tazpkg (el gestor de paquetes), Tazlito (la herramienta de creaci�n del
	liveCD), Tazwok (el creador de paquetes), TazUSB (la herramienta para el
	manejo de USB), y los tar.gz de las herramientas de SliTaz pueden ser
	descargados del mirror de <a href="http://www.tuxfamily.org/">TuxFamily</a>.
	Observa que todas estas utilidades vienen instaladas por defecto en SliTaz
	y su fuente est� comentado en ingl�s. Descarga los fuentes por
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> o por
	<a href="http://mirror.slitaz.org/sources/">FTP</a>.
</p>

<a name="stable"></a>
<h2>LiveCD - Versi�n estable</h2>
<p>
	La versi�n estable de SliTaz proporciona un sistema operativo maduro y
	bastante testeado por la comunidad. El n�cleo del LiveCD te ofrece una amplia
	selecci�n de paquetes cuidadosamente integrados en la distribuci�n, resultando
	en un sistema coherente y, sobre todo, robusto. La versi�n estable actual fue
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
	paquetes disponibles para la versi�n 1.0. Tambi�n contiene una copia de esta
	p�gina web, con lo que puede ser consultada sin conexi�n a internet usando el
	script install.sh.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Colecci�n de paquetes de SliTaz GNU/Linux $stable_ver ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>LiveCD - Versi�n Cooking</h2>
<p>
	El LiveCD SliTaz "Cooking" es una versi�n din�mica y totalmente funcional que
	te permite probar los �ltimos paquetes y mejoras, solicitar nueva
	funcionalidad o generar incidencias que nos ayuden a preparar la pr�xima
	versi�n estable.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
	Diariamente se genera una imagen de DVD autoarrancable con todos los paquetes
	disponibles para la versi�n Cooking. Tambi�n contiene una copia de esta p�gina
	web, con lo que puede ser consultada sin conexi�n a internet usando el script
	install.sh.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Colecci�n de paquetes de SliTaz GNU/Linux Cooking ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
