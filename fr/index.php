<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz GNU/Linux (fr)</title>
	<meta name="description" content="SliTaz GNU/Linux français système linux libre gratuit"/>
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, suisse, france, quebec, belgique"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.fr.html");
include("../lib/html/nav.fr.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Bienvenue chez SliTaz</h2>

<p>
	SliTaz est un système d'exploitation libre, sûr et performant
	basé sur le noyau Linux et les logiciels GNU.
</p>

<div class="box-up">
	
	Rejoingez nous sur <a href="https://whaleshares.io/@slitaz">Whaleshares</a>.
	Partager autour de SliTaz, recevez et donnez des récompenses aux développeurs
	sur une blockchain open-source!
	
</div>

<div class="box-up">
	<a href="https://gofund.me/7eca40ed"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="https://gofund.me/7eca40ed">
		Jetez un oeil à la campagne de dons 2022 de SliTaz!</a>
</div>

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Notre sponsor</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/fr/sponsor/">Devenir sponsor</a></p>
</div>

<!--
    SliTaz news starting.
-->

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Dernières publication</h2>

<ul>
	<li><strong><a href="http://mirror.slitaz.org/iso/rolling/">SliTaz 5.0 Rolling release</a></strong> (weekly)
		<span>- <?php
		$rol_date_file = '../cache/rolling-date.txt';
		if (file_exists("$rol_date_file")) {
			$rol_date = file_get_contents("../cache/rolling-date.txt");
			print $rol_date;
		} ?></span></li>
	<li><strong><!-- <a href="news/#d20180316"></a> 
		Link to a SCN blog post or announce on website ?-->
	
	SliTaz is now a rolling distro with 2 branches</strong> We provide a 
	stable version and a cooking (development) version. Stable will get 
	small refinements and security updates. As usual the Cooking version
	brings you the latest improvements made by SliTaz developers.
	
		<span>- 16 March 2018</span></li>
	<li><strong><a href="news/">Website news archives</a></strong>
		<span>- 2007-<?php echo date('Y'); ?></span></li>
</ul>

<!-- End of news -->
</div>

<h2>Téléchargement rapide</h2>

<div class="dldiv">
	<p><!-- ?php echo "<a class='dlbutton nav2' href='$stable_iso'>SliTaz $stable_ver</a>"; ? -->
	<!-- a class='dlbutton nav2' href='$cooking_iso'>SliTaz $cooking</a>"; ? -->
	<a class='dlbutton navpi' href='http://arm.slitaz.org/rpi/'>SliTaz Raspberry Pi</a>
	<a class='dlbutton nav2' href='http://mirror.slitaz.org/iso/rolling/slitaz-rolling.iso'>SliTaz hebdo 32bits</a>
	<a class='dlbutton nav1' href='http://mirror.slitaz.org/iso/rolling/slitaz-rolling-core64.iso'>SliTaz hebdo 64bits</a></p>
</div>

<h2>Activité du projet</h2>

<?php require_once("../lib/get-feeds.php"); ?>

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

<!-- SCN blog posts  
<h2>Blog Posts</h2>

<div class="news">
	<?php //get_feed_blog("blog.xml"); ?>
</div>-->

<!-- Twitter  -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz"  
	data-widget-id="420830244551938048">Tweets @slitaz</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<h2>Aider le projet</h2>

<p>
	Vous pouvez rejoindre le projet ou vous impliquer dans le 
	<a href="http://scn.slitaz.org/">Réseau communautaire de SliTaz</a>.
</p>

<p>
	Vous pouvez faire un don ou devenir <a href="sponsor/">sponsor</a> 
	pour nous aidez à payer les serveurs et continuer à developper
	SliTaz et son infrastructure. Même un petit dons de 1 Euro ou 
	dollar via Flattr nous aide !
</p>

<?php include("../lib/html/donate.html"); ?>

<h2>Rejoignez nous!</h2>

<p>
	SliTaz est une communauté active, toujours en mouvement et qui utilise
	beaucoup de ressources malgré sa petite taille. Parlez de SliTaz, aidez
	nous à faire connaître la distribution, postez sur votre blog, parlez
	en à des amis, sur Twitter ou encore Facebook. Rejoignez nous!
</p>

<?php include("../lib/html/social.fr.html"); ?>

<h2>Internationalization</h2>

<p>
The SliTaz web site is available in several languages and maintained by the
<a href="../i18n.php">internationalization</a> team (i18n). Help is often
needed and you're welcome to join us if you would like to see the website
translated into your language.
</p>

<!-- End of content  -->
</section>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
