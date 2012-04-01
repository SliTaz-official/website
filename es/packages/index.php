<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Paquetes</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD packages" />
	<meta name="keywords" lang="es" content="package, tazpkg" />
	<meta name="author" content="Eduardo Suarez-Santana" />
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Paquetes</h4>
		<p>
			Esta parte de la página te permite ver todos los paquetes de software
			disponibles en los mirrors de SliTaz. Las páginas se actualizan
			automáticamente cada día mediante un cron. Todos los paquetes son
			instalables con el administrador de paquetes Tazpkg bien sea con la
			interfaz gráfica o con el comando <code>tazpkg get-install nombredepaquete</code>.
		</p>
		<p>
			Browse the packages web interface: 
			<a href="http://pkgs.slitaz.org/stable/">Stable</a>
			| <a href="http://pkgs.slitaz.org/cooking/">Cooking</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/search.cgi">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="es" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Buscar" />
			</p>
		</div>
		Search for:
		<select name="object">
			<option value="Package">Paquete</option>
			<option value="Desc">Descripción</option>
			<option value="Tags">Etiquetas</option>
			<option value="Depends">Depende</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">Fichero</option>
			<option value="File_list">Lista de ficheros</option>
			<option value="FileOverlap">common files</option>
		</select>
		in
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">estable</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="/images/text.png" alt="[ ]" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a><br />
	<img src="/images/network.png" alt="[ ]" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Actividad</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

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

<h2>Documentation</h2>

<p>
	The SliTaz project provides detailed 
	<a href="http://doc.slitaz.org/">documentation</a>
	to let you learn how to install and manage packages on your SliTaz 
	GNU/Linux distribution. 
	The <a href="http://forum.slitaz.org/">support forum</a> members 
	will help you in case of trouble and is also the place to request 
	a new package.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
