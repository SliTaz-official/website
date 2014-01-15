<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - 2008 News archives</title>
	<meta name="description" content="Archive des news de SliTaz GNU/Linux" />
	<meta name="keywords" lang="fr" content="slitaz old news" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
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
			Les archives de l'actualité du site classée par année.
		</p>
		<p>
			<img src="/images/news.png" alt="[ ]" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
			| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
			| <a href="2011.php">2011</a> | <a href="2012.php">2012</a>
			| <a href="./">2014</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2008</h2>

<div class="news">

<ul>
	<li>
		<strong>31 Décembre 2008 - Cooking 20081231 - Support du Wifi et du NTFS</strong><br />
	Les membres du projet SliTaz sont fiers de vous proposer une nouvelle 
	image ISO du LiveCD de la version Cooking. Elle vous permet 
	d'utiliser et de tester le travail réalisé ces derniers mois. Elle comprend
	de nombreuses nouvelles fonctionnalités, des corrections de bugs et 
	plusieurs mises à jours. La distribution inclut maintenant un centre
	de contrôle, la gestion du wifi via Netbox et des outils utiles à la 
	gestion du wifi, tel tazndis, une version plus légère de ndiswrapper
	permettant d'utiliser les drivers Windows pour les cartes réseaux n'ayant
	pas de pilote libre. Perl est inclus sur le cdrom et Lua a été supprimé.
	Le support du Wifi est aussi accompagné par la prise en charge des 
	partitions NTFS, pour cela nous avons sorti mPlayer de la sélection des
	paquets inclus par défaut dans le coeur du LiveCD. Le gestionnaire de 
	paquets Tazpkg a été grandement amélioré, il permet la sauvegarde des 
	fichiers de configuration, la mise à jour des logiciels en fonction de
	leur date de construction (build) sur le serveur du projet, des fichiers
	de log sont conservés lors d'actions sur les paquets et plusieurs correctifs
	ont été appliqués. Dans la foulée des améliorations : les scripts 
	d'initialisation sont plus performants, l'outil de construction du LiveCD 
	(Tazlito) est plus cohérent. Le dépôt de la version Cooking contient maintenant
	plus de 1100 paquets logiciels prêt à être installés et cela grâce à un travail
	acharné des développeurs SliTaz. Vous pouvez <a href="../get/#cooking">télécharger</a>
	cette nouvelle mouture depuis un des miroirs officiels du projet.
	</li>

	<li>
		<strong>16 Juillet 2008 - Cooking 20080716 - Web boot et MPlayer</strong><br />
	Les membres du projet SliTaz sont fiers d'annoncer la disponibilité
	d'une nouvelle image ISO de la version Cooking, comprenant de nombreuses
	résolutions de bugs et beaucoup de nouvelles fonctionnalités. Cette 
	version fournit l'option de démarrage <code>web</code> permettant de démarrer
	la dernière version de SliTaz depuis internet en utilisant gPXE depuis
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>. Ce nouveau 
	service unique permet d'utiliser SliTaz en mode Live (tout en RAM),
	de se sevir des options propres à SliTaz pour stocker ses données de
	manière permanente, et de préconfigurer le système. Cette nouvelle 
	Cooking grossit de 3 Mb afin de fournir : un lecteur video avec MPlayer, 
	un traitement de notes avec Notecase, une nouvelle version du 
	gestionnaire de paquet Tazpkg avec le support md5sum, le support du
	système de fichier XFS nativement, la commande man et plusieurs mises
	à jour. Attention, cette version a besoin de 160 Mb au minimum pour 
	démarrer, <a href="../get/flavors.php">les saveurs</a> loram sont là 
	pour les machines ayant moins de ressources. 
	<a href="../get/#cooking">Téléchargement de la dernière ISO</a>.
	</li>

	<li>
		<strong>26 Juin 2008 - Cooking 20080626 avec nouveau noyau</strong><br />
	L'été est là et la nouvelle Cooking aussi, depuis le 26 juin.
	Beaucoup de travail pour un rendu plus soigné et un meilleur
	confort pour l'utilisateur. Cette nouvelle version Cooking 
	apporte entre autres : La dernière version du noyau Linux (2.6.25.5),
	le paquet a été repensé pour le rendre plus  modulaire, d'où une
	taille réduite (2.6Mo contre 3.7Mo sur la version stable), tout
	en incluant de nouveaux modules pour une meilleure prise en charge 
	des périphériques les plus courants. L'utilisateur par défaut 
	(hacker) a été remplacé par tux et la nouvelle option 
	<code>user=name</code> permet de choisir son nom d'utilisateur.
	La plupart des outils SliTaz ont été améliorés et/ou 
	enrichis : tazpkgbox propose maintenant les commandes sizes,
	search-file, check, block/unblock, reconfigure et list-files.
	Bootfloppybox peut fonctionner en mode texte, avec dialog.
	Netbox a été amélioré sur la prise en charge du WiFi, des 
	protocoles PPP/PPPOE ; une nouvelle fonction (zeroconf) vient
	s'ajouter à toutes les possibilités déjà présentes. Pour finir,
	Firefox est disponible dans sa dernière version stable 3.0. Cette
	nouvelle version peut être librement <a href="../get/#cooking">téléchargée</a>
	via le site web du projet. Les bugs peuvent être signalés via le
	système de suivi de bugs de SliTaz : 
	<a href="http://bugs.slitaz.org">BTS</a>
	</li>

	<li>
		<strong>18 Mai 2008 - Cooking 20080518 et LinuxDays.ch</strong><br />
	L'équipe de SliTaz est fière d'annoncer la disponibilité d'une nouvelle
	image ISO de la version Cooking, fournissant un grand nombre de
	changements par rapport à la version stable. SliTaz utilise maintenant
	le gestionnaire de fenêtres Openbox par défaut, les icônes de bureau
	permettent de lancer vos applications favorites, dbus et hal quant à
	eux autorisent le montage automatique des media amovibles tels que les
	clés ou disques durs USB et cela via le gestionnaire de fichiers PCmanFM.
	Les paquets de la distribution peuvent maintenant se gérer graphiquement
	via Tazpkgbox, mountbox et netbox ont été revues et améliorées. Le
	LiveCD fournit aussi : lua, un moteur de recherche, un outil
	d'informations système et un de gestion des tâches, un gestionnaire
	de mots de passe et de clipboard. Tous les paquets majeurs ont été
	mis à jour : SliTaz utilise maintenant une nouvelle chaîne d'outils
	composée de la dernière glibc-2.7, GTK 2.12.9 et Firefox 3.0 RC1 ! Vous
	trouverez aussi plus de 580 paquets sur le miroir dont : le support
	complet du wifi, Gnumeric ou encore Cups. Cette nouvelle version
	peut-être librement <a href="../get/#cooking">téléchargée</a> via le
	site web du projet. Note : Cette version sera présentée et utilisée au
	stand SliTaz lors des <a href="http://www.linuxdays.ch/">LinuxDay.ch</a>
	à Genève le 21-22 Mai. Le stand proposera entre autres la gravure de
	cdrom et l'installation sur clé USB à la demande.
	</li>

	<li>
		<strong>22 Mars 2008 - Publication de SliTaz GNULinux 1.0</strong><br />
	L'équipe des contributeurs SliTaz est fière de vous annoncer la publication
	de SliTaz GNU/Linux 1.0. C'est la première version stable après plus de
	deux ans de travail. Le système est distribué sous la forme d'un LiveCD de
	24,8 Mb fournissant un bureau complet avec une sélection d'applications
	soigeusement intégrées et multi-usages. SliTaz GNU/Linux 1.0 utilise le noyau
	Linux 2.6.24.2, propose Firefox 2.0.0.12, Rsync 3.0.0, Gparted 0.3.5, le son
	avec Alsa 1.0.16, de quoi écouter ou éditer des fichiers audio, chatter,
	créer des vidéos ou encore développer. La distribution propose 448 paquets
	facilement installables, des outils de création de LiveCD à saveur et de
	LiveUSB. Des mises à jour de sécurité de l'ensemble des paquets sont
	assurées par le projet et des mises à jour de fonctionnalités sont fournies
	pour les paquets populaires tel que Firefox. Vous pouvez obtenir SliTaz
	GNU/Linux 1.0 depuis la partie <a href="../get/#stable">téléchargement</a> du
	site et lire <a href="../doc/releases/1.0/relnotes.fr.html"
	>les notes de publication</a>,
	incluses dans la distribution, pour plus de détails sur cette version.
	</li>

	<li>
		<strong>26 Février 2008 - Cooking 20080225</strong><br />
	Après plus d'un mois de travail sur SliTaz, le projet a mis en ligne une
	nouvelle image ISO du LiveCD avec quelques nouveautés, des corrections,
	des mises à jours, toutes les nouvelles version des outils, scripts et
	utilitaires du projet. La distribution propose aussi maintenant un
	installateur graphique que vous trouverez dans le menu de JWM. Parmis
	les paquets mis à jour, il y a entre autres : alsa 1.0.16, php 5.2.5,
	htop 0.7, firefox 2.0.0.12, nano 2.0.7, sqlite 3.5.6. Cette version
	apporte aussi le support ACPI avec une option de boot <code>laptop</code>
	chargeant les modules ac et battery. Quant à l'option <code>home=*</code>,
	elle permet de spécifier un périphérique en fonction de son UUID ou label.
	Le projet fournit aussi un nouvel utilitaire nommé 'tazusb', il est
	en préparation mais permet déjà d'installer facilement SliTaz sur un
	media USB, formater et créer une archive du système courant sur le
	media USB afin de retrouver les paquets installés et autres petites
	modifications du système. Au passage, le Handbook a été enrichi,
	corrigé et mis à jour (pas totalement). Pour finir, cette version est
	très proche de la version stable, nous allons encore mettre à jour le noyau
	et les outils, ajouter quelques paquets sur le miroir et écrire les notes
	de publication. <a href="../get/#cooking">Téléchargement de la dernière Cooking</a>.
	</li>

	<li>
		<strong>07 Janvier 2008 - Nouvelle Cooking (20080107)</strong><br />
	Le projet SliTaz est fier de vous proposer une nouvelle version du LiveCD
	comportant de nombreuses corrections et de nouvelles fonctionnalités dans
	une image ISO de 22,1 Mb. Cette version fourni le server Xvesa d'Xorg
	corrigeant les problèmes de caractère avec Firefox et proposant plus
	d'options, une mise à jour d'ISO Master et de tous les outils SliTaz.
	Le gestionnaire de paquets Tazpkg permet maintenant de, recréer des paquets
	depuis les fichiers installés, supprimer des dépendances et vérifier les
	paquets. Tazlito (SliTaz Live Tool) propose la création de distribution à
	saveur et personnalisée en quelques commandes, Tazwok quant à lui gère
	les dépendances de compilation. Les scripts de démarrage on été mis à jour
	et proposent l'option modprobe=modules permettant de charger des modules à
	la volée. Le LiveCD contient aussi Asunder permettant de ripper et encoder
	des CD audio et l'utilitaire Burnbox permettant de graver des images ISO
	graphiquement. A noter encore que tous les paquets (291) ont été
	reconstruits et que cette version est proche de la version stable. Vous
	pouvez obtenir cette nouvelle version via la partie 
	<a href="../get/#cooking">téléchargement</a> du site Web. Enjoy.
	</li>

	<li>
		<strong>06 Janvier 2008 - Populariser SliTaz : blog, forum, etc</strong><br />
	Une des manières d'aider le projet est de le faire connaître, d'en parler
	autour de soi, sur le Web, en famille ou entre amis. De plus, un petit
	article fait toujours plaisir. Si vous avez écrit ou blogué, vous pouvez
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
