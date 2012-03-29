<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - 2008 News archives</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="Archive des news de SliTaz GNU/Linux" />
	<meta name="keywords" lang="fr" content="slitaz old news" />
	<meta name="robots" content="index, follow, all" />
	<meta name="expires" content="never" />
	<meta name="modified" content="2009-04-11 22:30:00" />
	<meta name="author" content="Christophe Lincoln"/>
	<meta name="publisher" content="www.slitaz.org" />
	<link rel="shortcut icon" href="../../favicon.ico" />
	<link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Archives des news</h4>
		<p>
			Les archives de l'actualit� du site class�e par ann�e.
		</p>
		<p>
			<img src="/images/news.png" alt="[ News ]" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
			| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
			| <a href="./">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2008</h2>

<div class="news">

<ul>
	<li><strong>31 D�cembre 2008 - Cooking 20081231 - Support du Wifi et du NTFS</strong><br />
	Les membres du projet SliTaz sont fiers de vous proposer une nouvelle 
	image ISO du LiveCD de la version Cooking. Elle vous permet 
	d'utiliser et de tester le travail r�alis� ces derniers mois. Elle comprend
	de nombreuses nouvelles fonctionnalit�s, des corrections de bugs et 
	plusieurs mises � jours. La distribution inclut maintenant un centre
	de contr�le, la gestion du wifi via Netbox et des outils utiles � la 
	gestion du wifi, tel tazndis, une version plus l�g�re de ndiswrapper
	permettant d'utiliser les drivers Windows pour les cartes r�seaux n'ayant
	pas de pilote libre. Perl est inclus sur le cdrom et Lua a �t� supprim�.
	Le support du Wifi est aussi accompagn� par la prise en charge des 
	partitions NTFS, pour cela nous avons sorti mPlayer de la s�lection des
	paquets inclus par d�faut dans le coeur du LiveCD. Le gestionnaire de 
	paquets Tazpkg a �t� grandement am�lior�, il permet la sauvegarde des 
	fichiers de configuration, la mise � jour des logiciels en fonction de
	leur date de construction (build) sur le serveur du projet, des fichiers
	de log sont conserv�s lors d'actions sur les paquets et plusieurs correctifs
	ont �t� appliqu�s. Dans la foul�e des am�liorations : les scripts 
	d'initialisation sont plus performants, l'outil de construction du LiveCD 
	(Tazlito) est plus coh�rent. Le d�p�t de la version Cooking contient maintenant
	plus de 1100 paquets logiciels pr�t � �tre install�s et cela gr�ce � un travail
	acharn� des d�veloppeurs SliTaz. Vous pouvez <a href="../get/#cooking">t�l�charger</a>
	cette nouvelle mouture depuis un des miroirs officiels du projet.
	</li>
	
	<li><strong>16 Juillet 2008 - Cooking 20080716 - Web boot et MPlayer</strong><br />
	Les membres du projet SliTaz sont fiers d'annoncer la disponibilit�
	d'une nouvelle image ISO de la version Cooking, comprenant de nombreuses
	r�solutions de bugs et beaucoup de nouvelles fonctionnalit�s. Cette 
	version fournit l'option de d�marrage <code>web</code> permettant de d�marrer
	la derni�re version de SliTaz depuis internet en utilisant gPXE depuis
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>. Ce nouveau 
	service unique permet d'utiliser SliTaz en mode Live (tout en RAM),
	de se sevir des options propres � SliTaz pour stocker ses donn�es de
	mani�re permanente, et de pr�configurer le syst�me. Cette nouvelle 
	Cooking grossit de 3 Mb afin de fournir : un lecteur video avec MPlayer, 
	un traitement de notes avec Notecase, une nouvelle version du 
	gestionnaire de paquet Tazpkg avec le support md5sum, le support du
	syst�me de fichier XFS nativement, la commande man et plusieurs mises
	� jour. Attention, cette version a besoin de 160 Mb au minimum pour 
	d�marrer, <a href="../get/flavors.php">les saveurs</a> loram sont l� 
	pour les machines ayant moins de ressources. 
	<a href="../get/#cooking">T�l�chargement de la derni�re ISO</a>.
	</li>
	
	<li><strong>26 Juin 2008 - Cooking 20080626 avec nouveau noyau</strong><br />
	L'�t� est l� et la nouvelle Cooking aussi, depuis le 26 juin.
	Beaucoup de travail pour un rendu plus soign� et un meilleur
	confort pour l'utilisateur. Cette nouvelle version Cooking 
	apporte entre autres : La derni�re version du noyau Linux (2.6.25.5),
	le paquet a �t� repens� pour le rendre plus  modulaire, d'o� une
	taille r�duite (2.6Mo contre 3.7Mo sur la version stable), tout
	en incluant de nouveaux modules pour une meilleure prise en charge 
	des p�riph�riques les plus courants. L'utilisateur par d�faut 
	(hacker) a �t� remplac� par tux et la nouvelle option 
	<code>user=name</code> permet de choisir son nom d'utilisateur.
	La plupart des outils SliTaz ont �t� am�lior�s et/ou 
	enrichis : tazpkgbox propose maintenant les commandes sizes,
	search-file, check, block/unblock, reconfigure et list-files.
	Bootfloppybox peut fonctionner en mode texte, avec dialog.
	Netbox a �t� am�lior� sur la prise en charge du WiFi, des 
	protocoles PPP/PPPOE ; une nouvelle fonction (zeroconf) vient
	s'ajouter � toutes les possibilit�s d�j� pr�sentes. Pour finir,
	Firefox est disponible dans sa derni�re version stable 3.0. Cette
	nouvelle version peut �tre librement <a href="../get/#cooking">t�l�charg�e</a>
	via le site web du projet. Les bugs peuvent �tre signal�s via le
	syst�me de suivi de bugs de SliTaz : 
	<a href="http://bugs.slitaz.org">BTS</a>
	</li>
	
	<li><strong>18 Mai 2008 - Cooking 20080518 et LinuxDays.ch</strong><br />
	L'�quipe de SliTaz est fi�re d'annoncer la disponibilit� d'une nouvelle
	image ISO de la version Cooking, fournissant un grand nombre de
	changements par rapport � la version stable. SliTaz utilise maintenant
	le gestionnaire de fen�tres Openbox par d�faut, les ic�nes de bureau
	permettent de lancer vos applications favorites, dbus et hal quant �
	eux autorisent le montage automatique des media amovibles tels que les
	cl�s ou disques durs USB et cela via le gestionnaire de fichiers PCmanFM.
	Les paquets de la distribution peuvent maintenant se g�rer graphiquement
	via Tazpkgbox, mountbox et netbox ont �t� revues et am�lior�es. Le
	LiveCD fournit aussi : lua, un moteur de recherche, un outil
	d'informations syst�me et un de gestion des t�ches, un gestionnaire
	de mots de passe et de clipboard. Tous les paquets majeurs ont �t�
	mis � jour : SliTaz utilise maintenant une nouvelle cha�ne d'outils
	compos�e de la derni�re glibc-2.7, GTK 2.12.9 et Firefox 3.0 RC1 ! Vous
	trouverez aussi plus de 580 paquets sur le miroir dont : le support
	complet du wifi, Gnumeric ou encore Cups. Cette nouvelle version
	peut-�tre librement <a href="../get/#cooking">t�l�charg�e</a> via le
	site web du projet. Note : Cette version sera pr�sent�e et utilis�e au
	stand SliTaz lors des <a href="http://www.linuxdays.ch/">LinuxDay.ch</a>
	� Gen�ve le 21-22 Mai. Le stand proposera entre autres la gravure de
	cdrom et l'installation sur cl� USB � la demande.
	</li>
	
	<li><strong>22 Mars 2008 - Publication de SliTaz GNULinux 1.0</strong><br />
	L'�quipe des contributeurs SliTaz est fi�re de vous annoncer la publication
	de SliTaz GNU/Linux 1.0. C'est la premi�re version stable apr�s plus de
	deux ans de travail. Le syst�me est distribu� sous la forme d'un LiveCD de
	24,8 Mb fournissant un bureau complet avec une s�lection d'applications
	soigeusement int�gr�es et multi-usages. SliTaz GNU/Linux 1.0 utilise le noyau
	Linux 2.6.24.2, propose Firefox 2.0.0.12, Rsync 3.0.0, Gparted 0.3.5, le son
	avec Alsa 1.0.16, de quoi �couter ou �diter des fichiers audio, chatter,
	cr�er des vid�os ou encore d�velopper. La distribution propose 448 paquets
	facilement installables, des outils de cr�ation de LiveCD � saveur et de
	LiveUSB. Des mises � jour de s�curit� de l'ensemble des paquets sont
	assur�es par le projet et des mises � jour de fonctionnalit�s sont fournies
	pour les paquets populaires tel que Firefox. Vous pouvez obtenir SliTaz
	GNU/Linux 1.0 depuis la partie <a href="../get/#stable">t�l�chargement</a> du
	site et lire <a href="../doc/releases/1.0/relnotes.fr.html"
		>les notes de publication</a>,
	incluses dans la distribution, pour plus de d�tails sur cette version.
	</li>
	
	<li><strong>26 F�vrier 2008 - Cooking 20080225</strong><br />
	Apr�s plus d'un mois de travail sur SliTaz, le projet a mis en ligne une
	nouvelle image ISO du LiveCD avec quelques nouveaut�s, des corrections,
	des mises � jours, toutes les nouvelles version des outils, scripts et
	utilitaires du projet. La distribution propose aussi maintenant un
	installateur graphique que vous trouverez dans le menu de JWM. Parmis
	les paquets mis � jour, il y a entre autres : alsa 1.0.16, php 5.2.5,
	htop 0.7, firefox 2.0.0.12, nano 2.0.7, sqlite 3.5.6. Cette version
	apporte aussi le support ACPI avec une option de boot <code>laptop</code>
	chargeant les modules ac et battery. Quant � l'option <code>home=*</code>,
	elle permet de sp�cifier un p�riph�rique en fonction de son UUID ou label.
	Le projet fournit aussi un nouvel utilitaire nomm� 'tazusb', il est
	en pr�paration mais permet d�j� d'installer facilement SliTaz sur un
	media USB, formater et cr�er une archive du syst�me courant sur le
	media USB afin de retrouver les paquets install�s et autres petites
	modifications du syst�me. Au passage, le Handbook a �t� enrichi,
	corrig� et mis � jour (pas totalement). Pour finir, cette version est
	tr�s proche de la version stable, nous allons encore mettre � jour le noyau
	et les outils, ajouter quelques paquets sur le miroir et �crire les notes
	de publication. <a href="../get/#cooking">T�l�chargement de la derni�re Cooking</a>.
	</li>
	
	<li><strong>07 Janvier 2008 - Nouvelle Cooking (20080107)</strong><br />
	Le projet SliTaz est fier de vous proposer une nouvelle version du LiveCD
	comportant de nombreuses corrections et de nouvelles fonctionnalit�s dans
	une image ISO de 22,1 Mb. Cette version fourni le server Xvesa d'Xorg
	corrigeant les probl�mes de caract�re avec Firefox et proposant plus
	d'options, une mise � jour d'ISO Master et de tous les outils SliTaz.
	Le gestionnaire de paquets Tazpkg permet maintenant de, recr�er des paquets
	depuis les fichiers install�s, supprimer des d�pendances et v�rifier les
	paquets. Tazlito (SliTaz Live Tool) propose la cr�ation de distribution �
	saveur et personnalis�e en quelques commandes, Tazwok quant � lui g�re
	les d�pendances de compilation. Les scripts de d�marrage on �t� mis � jour
	et proposent l'option modprobe=modules permettant de charger des modules �
	la vol�e. Le LiveCD contient aussi Asunder permettant de ripper et encoder
	des CD audio et l'utilitaire Burnbox permettant de graver des images ISO
	graphiquement. A noter encore que tous les paquets (291) ont �t�
	reconstruits et que cette version est proche de la version stable. Vous
	pouvez obtenir cette nouvelle version via la partie 
	<a href="../get/#cooking">t�l�chargement</a> du site Web. Enjoy.
	</li>
	
	<li><strong>06 Janvier 2008 - Populariser SliTaz : blog, forum, etc</strong><br />
	Une des mani�res d'aider le projet est de le faire conna�tre, d'en parler
	autour de soi, sur le Web, en famille ou entre amis. De plus, un petit
	article fait toujours plaisir. Si vous avez �crit ou blogu�, vous pouvez
	<a href="http://forum.slitaz.org/viewtopic.php?id=26">signaler l'article via le forum</a>.
	</li>
</ul>

<!-- End of news -->
</div>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>


