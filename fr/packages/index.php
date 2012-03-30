<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz Packages</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="Recherche et information sur les paquets slitaz" />
	<meta name="keywords" lang="fr" content="tazpkg, paquet slitaz" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="2011-03-26 00:04:00" />
	<meta name="author" content="Christophe Lincoln"/>
	<link rel="shortcut icon" href="../../favicon.ico" />
	<link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
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
				<li><a href="../mailing-list.php">Mailing List</a></li>
				<li><a href="../devel/">D�veloppement</a></li>
				<li><a href="../packages/">Paquets</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.php">Recherche</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Actualit�s</a></li>
				<li><a href="../about/">A propos</a></li>
				<li><a href="../get/">T�l�chargement</a></li>
				<li><a href="../asso/">Association</a></li>
				<li><a href="../doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Paquets</h4>
		<p>
			Cette partie du site permet de voir ou trouver les paquets
			logiciels disponibles sur le miroir de SliTaz. Les pages 
			sont mises � jour automatiquement via une t�che cron. Tous
			les paquets sont installables via le gestionnaire de 
			paquets Tazpkg, graphiquement en quelques cliques de souris 
			ou avec la commande <code>tazpkg get-install pkgname</code>.
		</p>
		<p>
			Naviguer dans l'interface web des paquets: 
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
				<input type="hidden" name="lang" value="fr" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Recherche" />
			</p>
		</div>
		Recherche de:
		<select name="object">
			<option value="Package">Paquet</option>
			<option value="Desc">Description</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Depends</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">Fichier</option>
			<option value="File_list">Liste des fichiers</option>
			<option value="FileOverlap">Fichiers communs</option>
		</select>
		dans
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
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

<h2>Documentation</h2>
<p>
	Le projet SliTaz fournit de la
	<a href="http://doc.slitaz.org/">documentation</a> d�taill�
	pour vous permettre d'apprendre � instller et g�rer vous paquets
	sur votre distribution SliTaz.

	Les membres du <a href="http://forum.slitaz.org/">forum de support</a>
	vous aiderons probablement en cas de probl�mes, le forum est aussi
	une bonne place pour faire une demande d'un ou plusieurs nouveaux
	paquets. members 
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