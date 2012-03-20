<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>SliTaz - Web chat</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz Webchat - Connect to #slitaz on Freenode IRC" />
	<meta name="keywords" lang="en" content="slitaz irc, slitaz chat, slitaz support" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav" style="text-align: center; padding: 10px;">
		<?php include("lib/random-image.php"); ?>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Web chat</h4>
		<p>
			Chat on SliTaz Freenode IRC channel to meet users and contributors
			or get live support. On SliTaz you can also use a desktop application
			to connect to IRC. LostIRC is installed in core and Xchat or Pidgin
			are in the slitaz repositories. 
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	Website language: 
	<a href="i18n.php"><img src="images/locale.png" alt="locale.png" /></a>
	<a href="da/">Dansk</a>
	<a href="de/">Deutsch</a>
	<a href="en/">English</a>
	<a href="es/">Español</a>
	<a href="fr/">Français</a>
	<a href="id/">Indonesian</a>
	<a href="it/">Italiano</a>
	<a href="pt/">Português</a>
	<a href="ru/">Русский</a>
	<a href="cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<iframe
	style="border: solid 1px #ddd;"
	src="http://webchat.freenode.net?channels=slitaz&uio=OT10cnVlJjEyPXRydWU62"
	width="100%" height="400">
</iframe>

<!-- End of content -->
</div>

<div style="margin-top: 100px;"></div>

<?php include("lib/html/footer.html"); ?>

</body>
</html>
