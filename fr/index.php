<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>SliTaz GNU/Linux (fr)</title>
	<meta name="description" content="SliTaz GNU/Linux français système linux libre gratuit" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, suisse, france, quebec, belgique" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
include("../lib/html/nav-ng.fr.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Jetez un oeil à la campagne de dons 2014 de SliTaz!</a>
</div>

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
	<li><strong><a href="http://arm.slitaz.org/rpi/">Publication de SliTaz Raspberry Pi</a></strong>
		<span>- - 29 Mar 2014</span></li>
	<li><strong><a href="../en/news/">Nouvelle SliTaz Cooking</a></strong>
		<span>- - 16 Feb 2014</span></li>
	<li><strong><a href="news/2012.php#d20120410">Publication de SliTaz 4.0</a></strong>
		<span>- 10 Apr 2012</span></li>
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
