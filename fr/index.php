<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz GNU/Linux (fr)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD système libre autonome rapide linux cdrom vif gratuit" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, logiciels opensource, livecd, swiss made" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Christophe Lincoln"/>
	<meta name="publisher" content="www.slitaz.org" />
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../slitaz.css" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="rss.xml" />
	<link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/rss.xml" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../images/network.png" alt="network.png" /></a>
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
				<li><a href="mailing-list.html">Mailing List</a></li>
				<li><a href="devel/">Développement</a></li>
				<li><a href="packages/">Paquets</a></li>
				<li><a href="artwork/">Artwork</a></li>
				<li><a href="search.html">Recherche</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">Actualités</a></li>
				<li><a href="about/">A propos</a></li>
				<li><a href="get/">Téléchargement</a></li>
				<li><a href="asso/">Association</a></li>
				<li><a href="doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Page principale</h4>
		<p>
			SliTaz est un système GNU/Linux fournissant un bureau ou un
			serveur complet dans moins de 30Mb.
		</p>
		<p>
			SliTaz est distribuée sous forme de LiveCD, le système est
			léger, rapide et simple à utiliser. SliTaz fournit un bureau
			graphique intuitif et élégant, le meilleur support matériel
			possible et dispose d'une active communauté.
			<a href="about/">Plus d'informations...</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Español</a>
	<a href="../fr/">Français</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Português</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="../images/update.png" style="float: left; margin-right: 10px; " />
	Aidez Pankso le créateur de Slitaz à travailler un mois à temps plein
	sur SliTaz et payer le train et autres frais pour aller à l'expo Linux
	à Paris et gérer le stand SliTaz. Paris est aussi l'occasion aux développeurs
	de se rencontrer -
	<a href="http://www.gofundme.com/pankso">Donnez en ligne</a>
</div>

<!--
    SliTaz news starting.
-->

<h2>Actualités du projet</h2>
<p>
	Le site web de SliTaz propose les principales nouvelles du projet, et
	<a href="http://scn.slitaz.org/">le blog officiel</a> des nouvelles
	sur l'activité générale des différents sous-projets. Ces nouvelles sont
	aussi disponibles sous forme de <a href="rss.xml">flux XML</a>. De 
	même, le projet propose une petite lettre d'information mensuelle et
	<a href="../">la page d'accueil</a> du site, elle, propose un synthèse
	de l'activité du projet avec les derniers paquets cuits, les commits
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
	
	<li>
		<strong>29 Mars 2011 - Nouvelle Cooking 20110329</strong>
	<p>L'équipe SliTaz est heureuse d'annoncer la publication d'une
	nouvelle ISO "cooking" proposant plus de 2900 paquets. Tous les paquets
	ont été reconstruits avec notre nouvel outil de cuisson, désormais
	inclus dans tazwok. Elle contient le noyau Linux 2.6.37 compilé avec
	glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. Le liveCD "Core" inclus Midori
	0.3.3. Tazpkg est désormais entièrement traduit en français et nous
	sommes ouverts à de nouvelles traductions. Tazwok a été entièrement
	ré-écrit et il est désormais possible de re-cuire SliTaz depuis les
	sources depuis toutes les ISO. Cette ISO est la première de la série
	précédant la publication de la version stable 4.0.
	</p>
	<p>Beaucoup de travail a été fait depuis la dernière ISO "cooking" publiée
	en novembre: plus de 2200 changements ont été apportés au wok, et
	plusieurs centaines aux outils faits maison. Nous sommes fiers
	d'annoncer que la communité SliTaz a beaucoup grandi ces derniers
	mois: cette année, il y a eu autant de changements apportés que les
	quatres précédentes - c'est à dire toute l'histoire de SliTaz.
	Néanmoins, la quantité ne suffit pas à faire la qualité. Nous avons
	besoin de votre aide pour tester cette nouvelle ISO et signaler les
	bugs éventuels. Si vous le souhaitez, vous êtes bienvenus pour aider à
	corriger les problèmes connus avant la publication de la 4.0. Vous
	pouvez joindre les membres de notre groupe via notre IRC, mailing list,
	forums ou les mainteneurs des paquets par courriel. Nous espérons que
	vous vous réjouirez, comme nous, de cette nouvelle 
	<a href="get/">publication!</a></p>
	</li>
	
	<li><strong>4 Novembre 2010 - Nouvelle Cooking 20101104</strong>
	<p>L'équipe SliTaz est heureuse le vous annoncer une nouvelle cooking
	avec plus de 2600 paquets. Elle contient le Kernel Linux 2.6.34 et a
	été construite avec la nouvelle toolchain composé de la glibc 2.11.2
	et gcc 4.5.1. Xorg a été entièrement mis à jour avec la version 1.9.2.
	Le liveCD inclut entre autres Midori et le lecteur Audio Deadbeef ainsi
	que beaucoup d'autres applications. Tazpkg et Tazctrlbox supporte
	maintenant les translations gettext et plusieurs locales UTF ont été
	ajoutées. Beaucoup de bugs ont été corrigés, des mises à jour et des
	améliorations ont été apportées. C'est le travail de ces 6 derniers
	mois. Vous pouvez <a href="get/#cooking>">télécharger</a>
	cette nouvelle version depuis un des
	mirroirs du site officiel du projet. Tous les feedback sont les
	bienvenus et peuvent se faire à travers la mailing list ou le forum.</p>

	<li><strong>08 Mai 2010 - Documentation de l'été</strong>
	<p>L'équipe de SliTaz organise une "documentation de l'été" depuis le 10
	mai jusqu'au 10 juin. L'objectif principal est de centraliser, revoir
	et mettre à jour toute la documentation en ligne.
	De plus amples détails peuvent être trouvés sur
	<a href="http://doc.slitaz.org/">doc.slitaz.org</a>. Nous espérons que
	les utilisateurs de SliTaz pourront contribuer en ajoutant et en
	mettant à jour la documentation.</p>

	<li><strong>28 Mar 2010 - Publication de SliTaz GNU/Linux 3.0</strong>
	<p>Tous les contributeurs SliTaz sont fiers d'annoncer la publication du
	système d'exploitation SliTaz GNU/Linux 3.0. SliTaz est encore plus simple
	à utiliser, plus rapide, plus facile à customizer, plus puissante et
	toujours aussi légère. La nouvelle version stable est maintenant parue
	après une année de développement.</p>
	<p>Le bureau de base fournit un bureau complet propulsé par Xorg 7.4, Openbox, 
	des composants du projet LXDE et des outils faits maison. Il vous permet de
	vous connecter facilement au réseau pour surfer avec le navigateur web Midori,
	écouter de la musique ou gérer vos images.</p>
	<p>La version "Core" du système tient sur une image ISO de 30MB et les saveurs 
	commecent à 8MB. Cette version stable à été contruite avec une nouvelle chaîne 
	d'outils incluant GCC 4.4.1 et utilise le noyau Linux 2.6.30.6. Vous pouvez
	lire <a href="doc/releases/3.0/relnotes.fr.html">les notes de plublication</a>
	pour plus d'informations et <a href="get/#stable>">télécharger</a> une image
	du LiveCD depuis un des miroirs du projet.</p>
	</li>
	
	<li><strong>4 novembre 2009 - Nouvelle Cooking 20091104</strong>
	<p>Les contributeurs SliTaz sont fiers d'annoncer la disponibilité d'une
	nouvelle image ISO de la version Cooking basée sur plus de 2100 paquets
	disponibles dans les dépôts SliTaz. Le système à été reconstruit au complet
	avec une nouvelle chaîne d'outils composée de la Glibc 2.10.1 et de GCC 4.4.1.
	Cette nouvelle Cooking utilise le noyau Linux 2.6.30.6 avec un meilleur
	support matériel et plus de modules inclus directement dans le noyau, la
	gestion du démarrage à été améliorée et le système démarre plus rapidement
	que jamais. Les paquets majeurs du LiveCD tel que Firefox ont été mis à jour,
	les outils graphiques créés pour SliTaz ainsi que le gestionnaire de paquets
	ont été améliorés. Nouvelle version nouvelle ligne graphique avec un thème
	pour Openbox, GTK et un set d'icones aux couleurs du projet. Nous avons aussi
	supprimé ePDFview pour un lecteur PDF en ligne mais l'image ISO dépasse 30
	Mb (31,5) à cause d'un plus gros noyau et de dépendances supplémentaires.</p>
	<p>Dans l'actualité principale le projet Slitaz a un nouveau
	<a href="http://forum.slitaz.org/">forum de support</a>
	et une nouvelle <a href="http://scn.slitaz.org/">platforme communautaire</a>
	ou tout le monde est le bienvenu pour partager et participer ! Cette nouvelle
	version Cooking est comme toujours téléchargeable depuis la section
	téléchargement du site web: <a href="get/#cooking">Obtenir SliTaz Cooking</a></p>
	</li>

	<li><strong>19 mai 2009 - SliTaz aux LinuxDays 2009 (Genève)</strong>
	<p>
	Lors du salon LinuxDays en Suisse (3-4-5 juin), l'association SliTaz tiendra un stand
	dans le village associatif et une conférence sera donnée mercredi matin.
	Le sujet de la conférence est une étude de cas d'un cabinet d'optique
	utilisant "SliTaz Business Server" avec standard téléphonique, ERP intégré,
	mail, LDAP, etc. Pendant les 3 jours du salon, le stand sera tenu par des
	membres du projet SliTaz. Le stand proposera des démonstrations, la création
	de clés USB bootables (LiveUSB) et des cdrom.
	</p>
	<p>
	La saveur du LiveCD LinuxDays contiendra une sélection de logiciels pour
	une utilisation nomade du système. Les salons sont aussi un lieu d'échanges
	et nous répondrons volontiers aux questions, alors n'hésitez pas à venir
	nous voir ! Organisation de l'événement et informations sur <a
	href="http://labs.slitaz.org/wiki/events/2009-linuxdays">les Labs de SliTaz</a>.
	Site web des LinuxDays : <a href="http://2009.linuxdays.ch/">2009.linuxdays.ch</a>
	</p>
	</li>

	<li><strong>16 avril 2009 - Publication de SliTaz GNU/linux 2.0</strong>
	<p>
	Le projet SliTaz est fier d'annoncer la publication de SliTaz GNU/Linux
	2.0, la nouvelle version stable de la distribution. Cette nouvelle version
	est le résultat d'une année de travail communautaire, elle fournit un système
	d'exploitation ultra-léger, rapide, stable et modulable. SliTaz propose
	un bureau graphique complet dans moins de 30 Mb, les applications nécessaires
	à un serveur fiable et robuste, et environ 1400 paquets logiciels facilement
	installables en quelques cliques de souris. Cette nouvelle version propose
	le montage automatique des partitions (dont celles en NTFS), le support Wifi,
	un bureau respectant les standards Freedesktop, le glisser-déposer, le
	démarrage réseau via GPXE et <a href="http://boot.slitaz.org/">boot.slitaz.org</a>,
	la détection automatique des périphériques PCI et USB, un gestionnaire
	de paquets et un centre de contrôle graphique, ainsi que divers outils propres
	à la distribution. La création de média USB bootable et de LiveCD à saveur,
	a été grandement améliorée et simplifiée. Le LiveCD core inclut entre autres :
	Firefox 3.0.8, gFTP, LostIRC, ePDFView, mtPaint, Transmission, Osmo et
	Alsaplayer. La documentation du site a été mise à jour et vous pouvez consulter
	<a href="doc/releases/2.0/relnotes.fr.html">les notes de publication</a>,
	incluses dans la distribution, pour plus de détails sur cette version.
	SliTaz GNU/Linux 2.0 est téléchargeable dès maintenant depuis les
	<a href="get/index.html">miroirs du projet</a>.
	</p></li>

	<li><strong>27 Mars 2009 - Labs et nouveaux miroirs</strong><br />
	Cherchant continuellement à améliorer la distribution et les services
	que nous proposons, nous sommes fiers d'annoncer le lancement des
	laboratoires SliTaz ou <a href="http://labs.slitaz.org/">SliTaz Labs</a>.
	Cette plate-forme communautaire permet aux contributeurs de collaborer
	plus efficacement, de rapporter plus facilement des bugs ou demander
	de nouvelles fonctionnalités. Les labs fournissent à chaque
	<a href="http://labs.slitaz.org/projects">projet</a> un wiki, un
	tracker, un module d'annonces, etc. Les laboratoires fournissent une
	vue d'ensemble sur l'activité du projet et la publication
	<a href="http://labs.slitaz.org/news">de nouvelles régulières</a>.
	N'hésitez à vous inscrire, participer et commenter les annonces.
	Le projet est aussi fier d'annonçer 2 nouveaux miroirs : En Suisse,
	hébérgé par <a href="http://mirror.switch.ch/">SWITCHmirror</a>
	(10 Gbit/s) et en Chine hébérgé par
	<a href="http://www.lupaworld.com">LupaWorld</a>, thanks a lot for
	supporting us.</li>

	<li><strong>20 Mars 2009 - SliTaz à Solutionslinux 2009 (Paris)</strong><br />
	Le projet SliTaz sera présent à Solutionslinux 2009 à Paris, le stand
	sera tenu par 3 membres actifs de l'équipe pendant les 3 jours du salon
	et plusieurs autres contributeurs seront présents à certain moment. Sur
	place vous aurez la possibilité de tester SliTaz sur diverses machines
	dont le EeePC, de créer (prenez une clé avec vous) ou d'acheter des
	clés USB bootables ansi que des LiveCD à saveurs. Vous pourrez
	aussi vous renseigner sur le projet et prendre contact avec les
	membres de l'Association et du team de développement. Site web du salon :
	<a href="http://www.solutionslinux.fr/">www.solutionslinux.fr</a>,
	<a href="http://www.solutionslinux.fr/associations.php?pg=2_7">Village associatif</a>,
	<a href="http://www.solutionslinux.fr/exposant_fiche.php?id=763&amp;pg=2_4">Stand SliTaz</a>.
	</li>

	<li><strong>28 Février 2009 - Nouvelle Cooking</strong><br />
	En préparation de la prochaine version stable, le projet SliTaz est fier
	de publier une nouvelle version Cooking avec un grand nombre de corrections,
	mises à jour et nouvelles fonctionnalités. L'auto-détection des périphériques
	PCI/USB est maintenant gérée par Tazhw et les firmwares peuvent être installés
	via un simple clique dans l'interface graphique dédiée. Tazndis a aussi
	une simple box permettant de gérer facilement des pilotes (drivers) Windows.
	Le gestionnaire de paquets graphique est bien plus simple à utiliser, la
	création de LiveUSB (ex : clé USB) peut se faire en un ou deux cliques de souris.
	L'interface de configuration du réseau affiche une jolie liste des connexions
	disponibles et la nouvelle Wifibox permet de se connecter à différents
	réseaux, créer des favoris et configurer les pilotes manuellement ou via
	Tazhw. Le bureau fournit maintenant une interface permettant de gérer
	les applications lancées avec la session Openbox et Ivman avec desktopbox
	fournissent un système de notification simple et léger. Vous pouvez
	<a href="get/index.html#cooking">télécharger</a> cette nouvelle image ISO depuis
	la partie téléchargement.
	</li>
	<li><strong>Archives des news:</strong>
	<a href="news/2008.html">2008</a> |
	<a href="news/2007.html">2007</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Activité du projet</h2>
<?php
	require_once("../libs/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="users.png" /></a>
		Activité de la communauté
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Plus d'activité</a>
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

<!-- End of content  -->
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
