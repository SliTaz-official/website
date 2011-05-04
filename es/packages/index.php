<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>SliTaz - Paquetes</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD packages" />
    <meta name="keywords" lang="es" content="package, tazpkg" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Eduardo Suarez-Santana" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
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
			<ul>
				<li><a href="../mailing-list.html">Lista de correo</a></li>
				<li><a href="../devel/">Desarrollo</a></li>
				<li><a href="../packages/">Paquetes</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.html">Buscar</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Titulares</a></li>
				<li><a href="../about/">Acerca de</a></li>
				<li><a href="../get/">Descargas</a></li>
				<li><a href="../asso/">Asociación</a></li>
				<li><a href="../doc/">Documentación</a></li>
			</ul>
		</div>
	</div>
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
	<img src="../../images/text.png" alt="text.png" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a>
	<img src="../../images/network.png" alt="text.png" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Actividad</h2>

<?php require_once("../../libs/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../../images/development.png" alt="development.png" /></a>
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
