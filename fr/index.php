<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz GNU/Linux (fr)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD syst�me libre autonome rapide linux cdrom vif gratuit" />
	<meta name="keywords" lang="fr" content="Syst�me, libre, gnu, linux, logiciels opensource, livecd, swiss made" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Christophe Lincoln"/>
	<meta name="publisher" content="www.slitaz.org" />
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../slitaz.css" />
	<link rel="alternate" type="application//rss.xml" title="SliTaz Feed" href="/rss.xml" />
	<link rel="alternate" type="application//rss.xml" title="SliTaz SCN Feed" href="http://scn.slitaz.org/activity/feed/" />
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Page principale</h4>
		<p>
			SliTaz est un syst�me GNU/Linux fournissant un bureau ou un
			serveur complet dans moins de 30Mb.
		</p>
		<p>
			SliTaz est distribu�e sous forme de LiveCD, le syst�me est
			l�ger, rapide et simple � utiliser. SliTaz fournit un bureau
			graphique intuitif et �l�gant, le meilleur support mat�riel
			possible et dispose d'une active communaut�.
			<a href="about/">Plus d'informations...</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Espa�ol</a>
	<a href="../fr/">Fran�ais</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Portugu�s</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="../images/update.png" style="float: left; margin-right: 10px; " />
	<p>
		Aidez nous a obtenir un serveur dedi� -
		<a href="http://www.gofundme.com/3ql70">Campagne de dons en ligne</a>
		ou devez
		<a href="/en/asso/sponsor.php">un sponsor officiel</a>
	</p>
</div>

<!--
    SliTaz news starting.
-->

<h2>Actualit�s du projet</h2>
<p>
	Le site web de SliTaz propose les principales nouvelles du projet, et
	<a href="http://scn.slitaz.org/">le blog officiel</a> des nouvelles
	sur l'activit� g�n�rale des diff�rents sous-projets. Ces nouvelles sont
	aussi disponibles sous forme de <a href="/rss.xml">flux XML</a>. De 
	m�me, le projet propose une petite lettre d'information mensuelle et
	<a href="../">la page d'accueil</a> du site, elle, propose un synth�se
	de l'activit� du projet avec les derniers paquets cuits, les commits
	et Tweets.
</p>

<div class="box">
	<img src="../images/news.png" alt="news.png" />
	<a href="http://scn.slitaz.org/">Nouvelles du Blog</a> |
	<a href="http://doc.slitaz.org/fr:newsletter:start">Lettre d'information</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<a name="20120303"></a>
	<li><strong>03 Mar 2012 - SliTaz 4.0-RC2</strong>
	<p>
		L'�quipe de SliTaz est fi�re de vous annoncer la sortie de SliTaz
		4.0-RC2.
		Nous avons fait un �norme travail pour corriger les bugs de la RC1
		et des outils fait maison tels que Tazpkg, TazPanel et TazUSB.
		La connexion WiFi est rendue plus facile par l'interm�diaire de
		TazPanel ou du nouveau wifibox. Tazpkg est maintenant mieux int�gr�
		au bureau et un nouveau syst�me de notification a �t� mis au point.
	</p>
	<p>
		Cette nouvelle version vient avec un paquet Xorg complet et le
		support DRI.
		Les pilotes Intel, Geode et vesa fonctionnent out-of-the-box. 
		Nous avons �galement reconstruit tous les paquets une fois de plus
		et r�duit d'environ 2Mo le LiveCD de base. Celui-ci comprend
		maintenant Lxrandr, Parcellite et le client bitorrent Transmission.
	</p>
	<p>
		Nous tenons � remercier tous les contributeurs qui ont test� la
		premi�re version candidate. 
		La RC2 est proche de ce que sera la version 4.0 de SliTaz pr�vue dans
		2 semaines.
		T�l�charger l'image ISO � partir de RC2 notre miroir (35,1 Mo):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>
	<a name="20120223"></a>
	<li><strong>23 Feb 2012 - SliTaz 4.0-RC1</strong>
	<p>
		L'�quipe des contributeurs SliTaz est heureuse de pouvoir annoncer
		la disponibilit� imm�diate de la premi�re version candidate pour
		SliTaz 4.0. SliTaz peut d�marrer en 10-12 secondes sur du mat�riel
		assez r�cent et ne n�cessite que 48 Mb de RAM pour installer un
		bureau graphique. La nouvelle 4en1 est capable de d�tecter la
		m�moire disponible et d�marrer en mode texte ou graphique selon
		la machine.
	</p>
	<p>
		SliTaz 4.0 aura plus de 3000 paquets bien test�s dans son d�p�t et la
		s�rie de RC va nous permettre de chasser les derni�res anomalies.
		Depuis notre derni�re version stable les paquets on �t� reconstruits
		2 fois pour s'assurer de leur qualit�.
	</p>
	<p>
		Cette RC2 fournit maintenant un menu de d�marrage graphique, la
		configuration de la langue et du clavier en mode graphique, un
		nouveau bureau plus moderne et plus abouti. Vous pouvez t�l�charger
		cette nouvelle ISO depuis notre serveur:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>
	
	<li>
		<a href="news/">Plus d'actualit�</a> ou voir les archives:
		<a href="news/2007.php">2007</a> |
		<a href="news/2008.php">2008</a> |
		<a href="news/2009.php">2009</a> |
		<a href="news/2010.php">2010</a> |
		<a href="news/">2011</a>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Activit� du projet</h2>
<?php
	require_once("../lib/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="users.png" /></a>
		Activit� de la communaut�
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Plus d'activit�</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="development.png" /></a>
		Derniers commits dans le wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Plus de commits</a>
	</p>
</div>

<h2>Nous rejoindre et aider le projet</h2>
<p>
	SliTaz est une communaut� active, toujours en mouvement et qui utilise
	beaucoup de resources malgr� sa petite taille. Parlez de SliTaz, aidez
	nous � faire conna�tre la distribution, past� sur voter blog, parlez en
	� des amis, sur Twitter ou encore Facebook. Rejoignez nous!
</p>

<?php include("../lib/html/social.html"); ?>

<p>
	Vous pouvez aussi faire un dons pour nous aidez � payer les serveur et
	continuer � developper SliTaz et son infrastructure. M�me un petit dons
	de 1 Euro ou dollar via Flattr nous aide!
</p>

<?php include("../lib/html/donate.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
