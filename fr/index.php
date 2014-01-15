<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (fr)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD système libre autonome rapide linux cdrom vif gratuit" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, swiss made" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Page principale</h4>
		<p>
			SliTaz est un système GNU/Linux fournissant un bureau ou un
			serveur complet dans moins de 40Mb. SliTaz est facile $
			utiliser, rapide, sécurisée et stable.
			<a href="about/">Plus d'informations...</a>
		</p>
		<div class="button" style="text-align: left; margin-top: 15px;">
			<img src="/images/download-30.png" />
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<!--<div class="box-up">
	<p>
		Aidez nous a obtenir un serveur dedié -
		<a href="http://www.gofundme.com/3ql70">Campagne de dons en ligne</a>
		ou devez <a href="/en/sponsor/">un sponsor officiel</a>
	</p>
</div>-->

<!--
    SliTaz news starting.
-->

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/en/sponsor/">Become a sponsor</a></p>
</div>

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Dernière publications</h2>

<ul>
	<li><strong><a href="news/2012.php#d20120410">Publication de SliTaz 4.0</a></strong>
		<span>- 10 Apr 2012</span></li>
	<li><strong><a href="news/2012.php#d20120303">SliTaz 4.0 RC2 est disponible</a></strong>
		<span>- 03 Mar 2012</span></li>
	<li><strong><a href="news/">Archives des nouvelles publications</a></strong>
		<span>- 2007-2013</span></li>
</ul>

<!-- End of news -->
</div>

<h2>Activité du projet</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="/images/users.png" alt="[ ]" /></a>
		Activité de la communauté
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Plus d'activité</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="[ ]" /></a>
		Activité du forum
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Plus de support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Derniers commits dans le wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Plus de commits</a>
	</p>
</div>

<!-- SCN blog posts  -->
<h2>Articles du Blog</h2>

<div class="news">
	<?php get_feed_blog("blog.xml"); ?>
</div>

<h2>Aider le projet</h2>

<p>
	Vous pouvez faire un dons pour nous aidez à payer les serveur et
	continuer é developper SliTaz et son infrastructure. Même un petit dons
	de 1 Euro ou dollar via Flattr nous aide!
</p>

<?php include("../lib/html/donate.html"); ?>

<h2>Rejoignez nous!</h2>

<p>
	SliTaz est une communauté active, toujours en mouvement et qui utilise
	beaucoup de resources malgré sa petite taille. Parlez de SliTaz, aidez
	nous à faire connaître la distribution, pasté sur voter blog, parlez en
	à des amis, sur Twitter ou encore Facebook. Rejoignez nous!
</p>

<?php include("../lib/html/social.html"); ?>

<h2>Internationalization</h2>

<p>
The SliTaz web site is available in several languages and maintained by the
<a href="../i18n.php">internationalization</a> team (i18n). Help is often
needed and you're welcome to join us if you would like to see the website
translated into your language.
</p>
<p>
	<img src="../images/users.png" alt="*" />
	<a href="http://scn.slitaz.org/groups/i18n/">Join i18n group on SCN</a>
</p>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
