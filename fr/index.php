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
				<li><a href="devel/">D�veloppement</a></li>
				<li><a href="packages/">Paquets</a></li>
				<li><a href="artwork/">Artwork</a></li>
				<li><a href="search.html">Recherche</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">Actualit�s</a></li>
				<li><a href="about/">A propos</a></li>
				<li><a href="get/">T�l�chargement</a></li>
				<li><a href="asso/">Association</a></li>
				<li><a href="doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
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
	Aidez Pankso le cr�ateur de Slitaz � travailler un mois � temps plein
	sur SliTaz et payer le train et autres frais pour aller � l'expo Linux
	� Paris et g�rer le stand SliTaz. Paris est aussi l'occasion aux d�veloppeurs
	de se rencontrer -
	<a href="http://www.gofundme.com/pankso">Donnez en ligne</a>
</div>

<!--
    SliTaz news starting.
-->

<h2>Actualit�s du projet</h2>
<p>
	Le site web de SliTaz propose les principales nouvelles du projet, et
	<a href="http://scn.slitaz.org/">le blog officiel</a> des nouvelles
	sur l'activit� g�n�rale des diff�rents sous-projets. Ces nouvelles sont
	aussi disponibles sous forme de <a href="rss.xml">flux XML</a>. De 
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
	
	<li>
		<strong>29 Mars 2011 - Nouvelle Cooking 20110329</strong>
	<p>L'�quipe SliTaz est heureuse d'annoncer la publication d'une
	nouvelle ISO "cooking" proposant plus de 2900 paquets. Tous les paquets
	ont �t� reconstruits avec notre nouvel outil de cuisson, d�sormais
	inclus dans tazwok. Elle contient le noyau Linux 2.6.37 compil� avec
	glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. Le liveCD "Core" inclus Midori
	0.3.3. Tazpkg est d�sormais enti�rement traduit en fran�ais et nous
	sommes ouverts � de nouvelles traductions. Tazwok a �t� enti�rement
	r�-�crit et il est d�sormais possible de re-cuire SliTaz depuis les
	sources depuis toutes les ISO. Cette ISO est la premi�re de la s�rie
	pr�c�dant la publication de la version stable 4.0.
	</p>
	<p>Beaucoup de travail a �t� fait depuis la derni�re ISO "cooking" publi�e
	en novembre: plus de 2200 changements ont �t� apport�s au wok, et
	plusieurs centaines aux outils faits maison. Nous sommes fiers
	d'annoncer que la communit� SliTaz a beaucoup grandi ces derniers
	mois: cette ann�e, il y a eu autant de changements apport�s que les
	quatres pr�c�dentes - c'est � dire toute l'histoire de SliTaz.
	N�anmoins, la quantit� ne suffit pas � faire la qualit�. Nous avons
	besoin de votre aide pour tester cette nouvelle ISO et signaler les
	bugs �ventuels. Si vous le souhaitez, vous �tes bienvenus pour aider �
	corriger les probl�mes connus avant la publication de la 4.0. Vous
	pouvez joindre les membres de notre groupe via notre IRC, mailing list,
	forums ou les mainteneurs des paquets par courriel. Nous esp�rons que
	vous vous r�jouirez, comme nous, de cette nouvelle 
	<a href="get/">publication!</a></p>
	</li>
	
	<li><strong>4 Novembre 2010 - Nouvelle Cooking 20101104</strong>
	<p>L'�quipe SliTaz est heureuse le vous annoncer une nouvelle cooking
	avec plus de 2600 paquets. Elle contient le Kernel Linux 2.6.34 et a
	�t� construite avec la nouvelle toolchain compos� de la glibc 2.11.2
	et gcc 4.5.1. Xorg a �t� enti�rement mis � jour avec la version 1.9.2.
	Le liveCD inclut entre autres Midori et le lecteur Audio Deadbeef ainsi
	que beaucoup d'autres applications. Tazpkg et Tazctrlbox supporte
	maintenant les translations gettext et plusieurs locales UTF ont �t�
	ajout�es. Beaucoup de bugs ont �t� corrig�s, des mises � jour et des
	am�liorations ont �t� apport�es. C'est le travail de ces 6 derniers
	mois. Vous pouvez <a href="get/#cooking>">t�l�charger</a>
	cette nouvelle version depuis un des
	mirroirs du site officiel du projet. Tous les feedback sont les
	bienvenus et peuvent se faire � travers la mailing list ou le forum.</p>

	<li><strong>08 Mai 2010 - Documentation de l'�t�</strong>
	<p>L'�quipe de SliTaz organise une "documentation de l'�t�" depuis le 10
	mai jusqu'au 10 juin. L'objectif principal est de centraliser, revoir
	et mettre � jour toute la documentation en ligne.
	De plus amples d�tails peuvent �tre trouv�s sur
	<a href="http://doc.slitaz.org/">doc.slitaz.org</a>. Nous esp�rons que
	les utilisateurs de SliTaz pourront contribuer en ajoutant et en
	mettant � jour la documentation.</p>

	<li><strong>28 Mar 2010 - Publication de SliTaz GNU/Linux 3.0</strong>
	<p>Tous les contributeurs SliTaz sont fiers d'annoncer la publication du
	syst�me d'exploitation SliTaz GNU/Linux 3.0. SliTaz est encore plus simple
	� utiliser, plus rapide, plus facile � customizer, plus puissante et
	toujours aussi l�g�re. La nouvelle version stable est maintenant parue
	apr�s une ann�e de d�veloppement.</p>
	<p>Le bureau de base fournit un bureau complet propuls� par Xorg 7.4, Openbox, 
	des composants du projet LXDE et des outils faits maison. Il vous permet de
	vous connecter facilement au r�seau pour surfer avec le navigateur web Midori,
	�couter de la musique ou g�rer vos images.</p>
	<p>La version "Core" du syst�me tient sur une image ISO de 30MB et les saveurs 
	commecent � 8MB. Cette version stable � �t� contruite avec une nouvelle cha�ne 
	d'outils incluant GCC 4.4.1 et utilise le noyau Linux 2.6.30.6. Vous pouvez
	lire <a href="doc/releases/3.0/relnotes.fr.html">les notes de plublication</a>
	pour plus d'informations et <a href="get/#stable>">t�l�charger</a> une image
	du LiveCD depuis un des miroirs du projet.</p>
	</li>
	
	<li><strong>4 novembre 2009 - Nouvelle Cooking 20091104</strong>
	<p>Les contributeurs SliTaz sont fiers d'annoncer la disponibilit� d'une
	nouvelle image ISO de la version Cooking bas�e sur plus de 2100 paquets
	disponibles dans les d�p�ts SliTaz. Le syst�me � �t� reconstruit au complet
	avec une nouvelle cha�ne d'outils compos�e de la Glibc 2.10.1 et de GCC 4.4.1.
	Cette nouvelle Cooking utilise le noyau Linux 2.6.30.6 avec un meilleur
	support mat�riel et plus de modules inclus directement dans le noyau, la
	gestion du d�marrage � �t� am�lior�e et le syst�me d�marre plus rapidement
	que jamais. Les paquets majeurs du LiveCD tel que Firefox ont �t� mis � jour,
	les outils graphiques cr��s pour SliTaz ainsi que le gestionnaire de paquets
	ont �t� am�lior�s. Nouvelle version nouvelle ligne graphique avec un th�me
	pour Openbox, GTK et un set d'icones aux couleurs du projet. Nous avons aussi
	supprim� ePDFview pour un lecteur PDF en ligne mais l'image ISO d�passe 30
	Mb (31,5) � cause d'un plus gros noyau et de d�pendances suppl�mentaires.</p>
	<p>Dans l'actualit� principale le projet Slitaz a un nouveau
	<a href="http://forum.slitaz.org/">forum de support</a>
	et une nouvelle <a href="http://scn.slitaz.org/">platforme communautaire</a>
	ou tout le monde est le bienvenu pour partager et participer ! Cette nouvelle
	version Cooking est comme toujours t�l�chargeable depuis la section
	t�l�chargement du site web: <a href="get/#cooking">Obtenir SliTaz Cooking</a></p>
	</li>

	<li><strong>19 mai 2009 - SliTaz aux LinuxDays 2009 (Gen�ve)</strong>
	<p>
	Lors du salon LinuxDays en Suisse (3-4-5 juin), l'association SliTaz tiendra un stand
	dans le village associatif et une conf�rence sera donn�e mercredi matin.
	Le sujet de la conf�rence est une �tude de cas d'un cabinet d'optique
	utilisant "SliTaz Business Server" avec standard t�l�phonique, ERP int�gr�,
	mail, LDAP, etc. Pendant les 3 jours du salon, le stand sera tenu par des
	membres du projet SliTaz. Le stand proposera des d�monstrations, la cr�ation
	de cl�s USB bootables (LiveUSB) et des cdrom.
	</p>
	<p>
	La saveur du LiveCD LinuxDays contiendra une s�lection de logiciels pour
	une utilisation nomade du syst�me. Les salons sont aussi un lieu d'�changes
	et nous r�pondrons volontiers aux questions, alors n'h�sitez pas � venir
	nous voir ! Organisation de l'�v�nement et informations sur <a
	href="http://labs.slitaz.org/wiki/events/2009-linuxdays">les Labs de SliTaz</a>.
	Site web des LinuxDays : <a href="http://2009.linuxdays.ch/">2009.linuxdays.ch</a>
	</p>
	</li>

	<li><strong>16 avril 2009 - Publication de SliTaz GNU/linux 2.0</strong>
	<p>
	Le projet SliTaz est fier d'annoncer la publication de SliTaz GNU/Linux
	2.0, la nouvelle version stable de la distribution. Cette nouvelle version
	est le r�sultat d'une ann�e de travail communautaire, elle fournit un syst�me
	d'exploitation ultra-l�ger, rapide, stable et modulable. SliTaz propose
	un bureau graphique complet dans moins de 30 Mb, les applications n�cessaires
	� un serveur fiable et robuste, et environ 1400 paquets logiciels facilement
	installables en quelques cliques de souris. Cette nouvelle version propose
	le montage automatique des partitions (dont celles en NTFS), le support Wifi,
	un bureau respectant les standards Freedesktop, le glisser-d�poser, le
	d�marrage r�seau via GPXE et <a href="http://boot.slitaz.org/">boot.slitaz.org</a>,
	la d�tection automatique des p�riph�riques PCI et USB, un gestionnaire
	de paquets et un centre de contr�le graphique, ainsi que divers outils propres
	� la distribution. La cr�ation de m�dia USB bootable et de LiveCD � saveur,
	a �t� grandement am�lior�e et simplifi�e. Le LiveCD core inclut entre autres :
	Firefox 3.0.8, gFTP, LostIRC, ePDFView, mtPaint, Transmission, Osmo et
	Alsaplayer. La documentation du site a �t� mise � jour et vous pouvez consulter
	<a href="doc/releases/2.0/relnotes.fr.html">les notes de publication</a>,
	incluses dans la distribution, pour plus de d�tails sur cette version.
	SliTaz GNU/Linux 2.0 est t�l�chargeable d�s maintenant depuis les
	<a href="get/index.html">miroirs du projet</a>.
	</p></li>

	<li><strong>27 Mars 2009 - Labs et nouveaux miroirs</strong><br />
	Cherchant continuellement � am�liorer la distribution et les services
	que nous proposons, nous sommes fiers d'annoncer le lancement des
	laboratoires SliTaz ou <a href="http://labs.slitaz.org/">SliTaz Labs</a>.
	Cette plate-forme communautaire permet aux contributeurs de collaborer
	plus efficacement, de rapporter plus facilement des bugs ou demander
	de nouvelles fonctionnalit�s. Les labs fournissent � chaque
	<a href="http://labs.slitaz.org/projects">projet</a> un wiki, un
	tracker, un module d'annonces, etc. Les laboratoires fournissent une
	vue d'ensemble sur l'activit� du projet et la publication
	<a href="http://labs.slitaz.org/news">de nouvelles r�guli�res</a>.
	N'h�sitez � vous inscrire, participer et commenter les annonces.
	Le projet est aussi fier d'annon�er 2 nouveaux miroirs : En Suisse,
	h�b�rg� par <a href="http://mirror.switch.ch/">SWITCHmirror</a>
	(10 Gbit/s) et en Chine h�b�rg� par
	<a href="http://www.lupaworld.com">LupaWorld</a>, thanks a lot for
	supporting us.</li>

	<li><strong>20 Mars 2009 - SliTaz � Solutionslinux 2009 (Paris)</strong><br />
	Le projet SliTaz sera pr�sent � Solutionslinux 2009 � Paris, le stand
	sera tenu par 3 membres actifs de l'�quipe pendant les 3 jours du salon
	et plusieurs autres contributeurs seront pr�sents � certain moment. Sur
	place vous aurez la possibilit� de tester SliTaz sur diverses machines
	dont le EeePC, de cr�er (prenez une cl� avec vous) ou d'acheter des
	cl�s USB bootables ansi que des LiveCD � saveurs. Vous pourrez
	aussi vous renseigner sur le projet et prendre contact avec les
	membres de l'Association et du team de d�veloppement. Site web du salon :
	<a href="http://www.solutionslinux.fr/">www.solutionslinux.fr</a>,
	<a href="http://www.solutionslinux.fr/associations.php?pg=2_7">Village associatif</a>,
	<a href="http://www.solutionslinux.fr/exposant_fiche.php?id=763&amp;pg=2_4">Stand SliTaz</a>.
	</li>

	<li><strong>28 F�vrier 2009 - Nouvelle Cooking</strong><br />
	En pr�paration de la prochaine version stable, le projet SliTaz est fier
	de publier une nouvelle version Cooking avec un grand nombre de corrections,
	mises � jour et nouvelles fonctionnalit�s. L'auto-d�tection des p�riph�riques
	PCI/USB est maintenant g�r�e par Tazhw et les firmwares peuvent �tre install�s
	via un simple clique dans l'interface graphique d�di�e. Tazndis a aussi
	une simple box permettant de g�rer facilement des pilotes (drivers) Windows.
	Le gestionnaire de paquets graphique est bien plus simple � utiliser, la
	cr�ation de LiveUSB (ex : cl� USB) peut se faire en un ou deux cliques de souris.
	L'interface de configuration du r�seau affiche une jolie liste des connexions
	disponibles et la nouvelle Wifibox permet de se connecter � diff�rents
	r�seaux, cr�er des favoris et configurer les pilotes manuellement ou via
	Tazhw. Le bureau fournit maintenant une interface permettant de g�rer
	les applications lanc�es avec la session Openbox et Ivman avec desktopbox
	fournissent un syst�me de notification simple et l�ger. Vous pouvez
	<a href="get/index.html#cooking">t�l�charger</a> cette nouvelle image ISO depuis
	la partie t�l�chargement.
	</li>
	<li><strong>Archives des news:</strong>
	<a href="news/2008.html">2008</a> |
	<a href="news/2007.html">2007</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Activit� du projet</h2>
<?php
	require_once("../libs/get-feeds.php");
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
