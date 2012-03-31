<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - 2007 News archives</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
			<img src="/images/news.png" alt="[ News ]" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a>
			| <a href="2009.php">2009</a> | <a href="2010.php">2010</a>
			| <a href="./">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2007</h2>

<div class="news">

<ul>
	<li><strong>15 Décembre 2007 - Forum communautaire et canal IRC</strong><br />
	Après quelques temps de préparation, le projet SliTaz est heureux de
	pouvoir annoncer la mise à disposition d'un forum officiel. Le forum est
	principalement destiné à fournir de l'aide et un support technique aux
	utilisateurs de SliTaz. C'est une alternative et un complément à la liste
	de discussion, c'est aussi une initiative d'un utilisateur, merci Eddy. 
	Pour utiliser le forum vous devez commencer par vous inscrire, toutes les
	questions sont les bienvenues et n'hésitez pas à répondre aux autres membres
	de la communauté : <a href="http://forum.slitaz.org/">forum.slitaz.org</a>.
	Dans la foulée des moyens de supports et de collaborations, le projet a 
	depuis quelques semaines un canal de discussion IRC sur Freenode.net. 
	Il n'y a pas toujours quelqu'un en ligne, mais ça discute régulièrement. 
	Merci à Didier pour l'enregistrement, et tout et tout. Le serveur IRC 
	est <code>irc.freenode.net</code> et le canal <code>#slitaz</code>. Pour
	rejoindre le canal, une fois connecté au serveur, vous pouvez utiliser la
	commande IRC : <code>/join #slitaz</code>.
	</li>
	
    <li><strong>06 Décembre 2007 - Deux jours pour un démarrage 2 fois plus rapide</strong><br />
    La nouvelle compression lzma permet à SliTaz de proposer plus de supports
    matériels et plus d'applications dans une image ISO encore plus petite
    qu'avant, mais le temps de démarrage a augmenté. La communauté SliTaz a
    beaucoup travaillé ces derniers deux jours pour arriver à faire démarrer le
    LiveCD 2 fois plus rapidement. Nous avons donc mis une nouvelle image ISO
    sur le miroir comprenant, un nouveau patch noyau pour lzma et une petite 
    correction dans l'affichage des messages d'initialisation. Nos divers tests 
	donnent des temps de démarrage allant de 20 à 30 secondes sur des PC
    récents et de 60 à 80 secondes sur les machines plus anciennes.
    <a href="../get/#cooking">Téléchargement de la dernière version</a>.
    </li>
	
    <li><strong>04 Décembre 2007 - Nouvelle Cooking avec le son et plus d'options</strong><br />
    Les membres de la communauté SliTaz sont fiers de vous annoncer la
    disponibilité d'une nouvelle version du LiveCD en cuisson. Cette version
    apporte un grand nombre de nouveautés dont principalement le support du
    son et PCMCIA ainsi que l'utilisation de la compression lzma. De nombreux
    bugs ont aussi été corrigés, de nouveaux, thème, menu et fond d'écran, sont
    utilisés. Un installateur est maintenant présent ainsi qu'une boîte de dialogue
    pour monter rapidement des périphériques. Plusieurs paquets ont été mis à
    jours, dont SQLite, emelFM2, Firefox, avec des marques pages vers des
    application Web tel que Wikipedia ou Jamendo. Dans les 105 paquets contenus sur
    le LiveCD, vous trouverez Alsa et son mixeur, Alsaplayer, mpg123, Gcolor2,
    pcmciautils ou lspci. Un fois installée, vous avez à disposition plus de
    240 paquets sur le miroir, facilement installables et dont les mises à jour 
    sont assurées par le projet. Au passage, le Handbook a été mis à jour et comporte
    une page Multimedia, à propos du son et de la vidéo sur SlitTaz. Pour finir 
    cette annonce, un énorme travail a été réalisé pour vous proposer un 
    LiveCD de : 22,4 Mb. Simple, Léger... incroyable. Vous pouvez obtenir cette
    version Cooking via la partie <a href="../get/">téléchargement</a> du site.
    Enjoy.
    </li>
    
    <li><strong>06 Novembre 2007 - Nouvelle Cooking et gel des paquets</strong><br />
    Le projet SliTaz est fier d'annoncer la publication d'une nouvelle version
    Cooking du LiveCD de SliTaz. Cette version en cuisson est la dernière avant
    la publication de la version stable 1.0, la chaîne d'outils et les paquets
    de base, sont gelés. Quelques nouveaux paquets ont fait leur entrée et deux
    paquets ont été supprimés du LiveCD. IPtables et Microperl ne font plus
    partie de l'ISO, mais ils ont fait de la place pour : PHP 5.2.4, Grsync,
    GCC 4.2.2, ISO Master 1.2 et Firefox 2.0.0.9 avec le support de la langue
    française et une police adaptée au thème GTK+. Cette version propose aussi
    un nouveau thème pour JWM, avec fond d'écran, un nouveau menu, les icônes
    Tango pour les applications GTK+, un message du jour en Français et un wiki
    personnel installé pour l'utilisateur hacker. Le LiveCD en cuisson de
    24,7 MB, est <a href="../get/">téléchargeable</a> depuis le miroir de SliTaz
    propulsé par TuxFamily.</li>
	
    <li><strong>04 Novembre 2007 - Takpkg 1.3, gestion des mises à jour et Tazwok 1.2</strong><br />
    Publication du gestionnaire de paquets Tazpkg 1.3. Cette version apporte la
    commande <code>upgrade</code> permettant la mise à jour de tous les paquets
    installés. La gestion des mises à jour est une partie importante du système
    de paquets et de la distribution en elle-même, elle permet de garder un système
    sécurisé, avec les dernières corrections. Les mises à jour sont d'ors et
    déjà disponibles pour la version "Cooking" et les personnes ayant installé
    SliTaz sur disque dur (en mode LiveCD les paquets téléchargés sont perdus).
    En temps voulu, des mises à jour de sécurité seront régulièrement publiées
    pour la version Stable courante. Pour la version Cooking actuelle, il faut
    télécharger et installer à la main Tazpkg 1.3 , pour ensuite simplement
    lancer <code># tazpkg recharge &amp;&amp; tazpkg upgrade</code> et avoir une
    liste des derniers paquets disponibles sur le miroir, dont Firefox 2.0.0.9.
	Au passage Tazpkg et Tazwok proposent des couleurs et un affichage plus clair
	des messages. Tazwok 1.2 gère mieux les problèmes (exit et message d'aide).
	Vous pouvez obtenir les archives des deux outils via la partie <a
	href="../get/">téléchargement</a> du site. Les deux outils ont été testés sur
	SliTaz et Debian, vous pouvez utiliser Tazpkg pour installer des paquets
	SliTaz sur Debian ou utiliser Tazwok pour construire des paquets SliTaz.
	Cela dit, la prochaine version est bientôt prête, les paquets sont gelés,
	le menu de JWM (2.0.1) sera plus complet, il y aura PHP, ... (24,8 Mb). A
	suivre...
	</li>
	
    <li><strong>12 Octobre 2007 - Nouvelle version Cooking et stabilisation</strong><br />
	Le projet SliTaz est fier de vous annoncer une nouvelle version du système
	en cuisson (Cooking), cette version apporte un grand nombre de changements
	et d'améliorations, des mises à jour et le LiveCD passe à 24 Mb. Quelques
	Mb de plus pour accueillir : Firefox 2.0.0.7, Rsync 2.6.9, ISO Master,
	GRUB, PPP, le support des connexions PPPOE avec rp-pppoe et le noyau Linux
	avec une solide version 2.6.22.9. Concernant le noyau, le support tlan a été
	compilé ainsi que plusieurs autres drivers, il y aura donc plus de cartes 
	fonctionnant directement sans passer par modprobe. Les principaux paquets 
	mis à jours sont Xorg 7.3, Dropbear 0.50, LightTPD 1.4.18, SQLite 3.5.1, 
	et Transmission vers la version 0.82 permettant la création de fichiers torrents. 
	Le bureau a un nouveau fond d'écran réalisé avec mtPaint, un petit centre d'aide 
	a été installé et des raccourcis clavier permettent d'ouvrir Firefox ou 
	le gestionnaire de fichiers (Alt + F5 ou F6). La documentation a été adaptée 
	et les outils SliTaz publiés en version 1.2. La nouvelle version est 
	<a href="../get/">téléchargeable</a> via le miroir de SliTaz, elle a été générée 
	avec Tazwok et les outils SliTaz, en se basant sur le livre de cuisine (Cookbook) 
	toujours accessible depuis la partie <a href="../doc/">documentation</a> du site Web. 
	La voie vers la stabilisation est ouverte pour la publication de SliTaz GNU/Linux 1.0,
	vous pouvez facilement participer au projet et obtenir un support technique
	via <a href="../mailing-list.php">la liste de discussion</a> de SliTaz.
    </li>
    
    <li><strong>10 Octobre 2007 - Tazpkg-1.2 et Tazwok-1.0</strong><br />
    Publication du gestionnaire de paquets Tazpkg et son manuel en version 1.2. 
	Cette version apporte plusieurs nouvelles commandes, un nettoyage du code 
	et des changements dans la structure des paquets (les anciens paquets 
	ne sont pas supportés). Tazwok-1.0, cet utilitaire permet de configurer,
    compiler et créer des paquets (.tazpkg) SliTaz automatiquement, c'est le
    programme qui construit tous les paquets du système depuis les sources.
    Tazwok est distribué sous forme de paquet SliTaz et d'archive source, avec
    son manuel, de la doc développeur et des exemples. Les deux applications
    seront installées par défaut sur le LiveCD. A noter que beaucoup de travail
    a été fait ces dernières semaines et qu'une nouvelle version est à pressentir
    pour tout bientôt.
    </li>
    
    <li><strong>24 Août 2007 - Liste de discussion (Mailing list) et doc</strong><br />
    Le projet SliTaz a le plaisir d'annoncer l'ouverture officielle de
    <a href="../mailing-list.php">la liste de discussion</a>. La
    <em>mailing list</em> est un moyen de support technique et de collaboration,
    la liste est ouverte à tout le monde, si vous avez une question, une
    remarque, une demande ou que vous désirez participer au projet, c'est là
    qu'il faut s'exprimer. Concernant la documentation, le Handbook propose une
    nouvelle page titrée <a href="http://doc.slitaz.org/fr:handbook:hacklivecd"
    >Hacking SliTaz LiveCD</a> ou comment modifier et s'amuser avec l'image
    ISO du LiveCD de SliTaz et une page décrivant les étapes à réaliser pour
    <a href="http://doc.slitaz.org/fr:handbook:chroot">créer un environnement chrooté.</a>
    Bonne lecture.</li>
	
    <li><strong>7 Août 2007 - Nouvelle Cooking et Tazpkg 1.1</strong><br />
    Après plus d'un mois de travail sur SliTaz, le projet a mis en ligne une
    nouvelle image de la version Cooking (en cuisson). Cette version apporte
    4 nouvelles applications sur le LiveCD, des mises à jour et du design
    avec un thème GTK, des icônes sur la barre des tâches et une image de
    fond d'écran. SliTaz propose maintenant une version micro de Perl,
    le client gFTP, Xpad pour prendre des notes sur le bureau et un petit jeu
    de tetris. Microperl permet d'utiliser/créer des scripts Perl et des
    scripts CGI pouvant ensuite être utilisés par le serveur web LightTPD,
    préconfiguré pour une utilisation facilitée et mis à jour vers la dernière
    version 1.4.16. En interne, le gestionnaire de paquets Tazpkg a été 
	grandement amélioré, il permet de faire une recherche de paquets, d'aider à créer 
	ses propres paquets et implémente un système de gestion des dépendances. 
	Au passage l'arbre des paquets a changé et les meta fichiers de configuration 
	ont plus de variables et de fonctions. Vous pouvez récupérer cette nouvelle mouture
    (15,6 Mb) et les sources de Tazpkg via la partie <a href="../get/">téléchargement</a> du site. 
	Enjoy.
    </li>
    
    <li><strong>1 Août 2007 - SliTaz Handbook</strong><br />
    Après plusieurs semaines de rédaction et une mise en ligne depuis quelques
    jours, le projet SliTaz est fier de vous présenter la première mouture du
    <a href="http://doc.slitaz.org/fr:handbook:start">Handbook</a>. C'est le livre de main de SliTaz, la
    référence au sujet de l'utilisation du système pour l'utilisateur,
    l'administrateur et le développeur en général. Il réunit des travaux de
    référence, des mini manuels et une collection d'instructions destinées à
    fournir un livre complet, de haute qualité, facilement consultable et
    fournissant des réponses rapides sur un sujet spécifique. A noter que le
    terme Handbook est une suite logique au Cookbook (le livre de cuisine), le
    projet Slitaz centralise la majorité de sa documentation dans ces deux
    livres.
    </li>
    
    <li><strong>29 Juillet 2007 - SliTaz sur le web et www.slitaz.org</strong><br />
    De retour de vacances, j'ai eu le plaisir de constater que SliTaz a eu
    l'honneur d'être citée sur plusieurs site web en relation avec les systèmes
    GNU/Linux. Tout a commençé par un post de geantbrun
    sur les forums du site <a href="http://www.terranux.net/">Terranux.net</a>
    en début de mois, suivi par un post de c'estpasgagné sur le site web/forums de <a
    href="http://www.lin-web.be/">Linweb.be</a>. En début de semaine (le 24),
    geantbrun, nous a propulsé sur les forums de QuebecOS et petitbob a 
	poursuivi en postant une news consultable sur la page principale du grand <a
    href="http://quebecos.com/">QuebecOS.com</a>. Merci pour l'audience, c'est
    le genre d'initiative qui motive à coder librement et qui fait chaud au
    coeur... <strong>Huge thanks to you guys!</strong> Merci aussi aux
    personnes qui ont pris le temps de lire ces posts, qui sont venues visiter
    le site de SliTaz et qui ont encore pris du temps pour essayer la bête.
    En espérant vous avoir séduit par notre mini système, le travail
    continue du coté du développement et de nouvelles informations seront
    publiées régulièrement sur la page principale du site. Au passage j'en
    profite pour annoncer l'achat, pour le projet SliTaz, du nom de domaine
    slitaz.org chez <a href="http://www.gandi.net/">Gandi</a>, les DNS et les
    mail sont aussi gérer par les services de très haute qualité offerts par
    Gandi. Le site web officiel de SliTaz est maintenant :
    <a href="http://www.slitaz.org/">www.slitaz.org</a>. Merci de mettre à
    jour vos marques pages. Christophe (Pankso).
    </li>
    
    <li><strong>28 Juin 2007 - Nouvelle version cooking</strong><br />
    Nous sommes fiers de vous annoncer la mise en ligne d'une nouvelle
    image ISO de la version cooking comprenant d'importantes mises à jour,
    des scripts de démarrage améliorés avec de nouvelles fonctions et la
    résolution de quelques petits problèmes. L'image ISO bootable à graver
    ou émuler est disponible en <a href="../get/">téléchargement</a> depuis le
    le miroir de TuxFamily. Cette nouvelle version propose une mise à jour du
    client/serveur SSH Dropbear vers la version 0.49, du serveur web LightTPD
    vers la version 1.4.15, de SQLite vers la version 3.3.17, du navigateur
    web Links vers la version 2.1pre28, de mtPaint vers la version 3.11, de
    l'IDE Geany vers la version 0.11, du gestionnaire de fenêtres JWM vers
    la version 2.0 avec un nouveau thème, de Cdrkit, Clex, Nano, Dialog,
    libpng, LeafPad et Transmission. Cette nouvelle version est aussi
    accompagnée de son lot de nouveaux paquets logiciels, la chaîne d'outils
    (<em>toolchain</em>) est maintenant facilement installable via le
    mini gestionnaire de paquet Tazpkg. La <em>toolchain</em> est constituée
    de binutils-2.17, glibc-2.3.6, du compilateur GCC 4.1.2 et de make-3.81,
    elle permet de recompiler et rendre SliTaz largement extensible via la
    compilation d'applications depuis les paquets source. Pour finir,
    le <a href="http://doc.slitaz.org/en:cookbook:start">cookbook</a> a été mis à jour et amélioré,
    il décrit la construction de tous les nouveaux paquets et du
    fonctionnement des scripts de démarrage du système, de plus, les
    outils SliTaz pour développeurs sont
    passés en version 1.1 avec quelques nouveaux scripts, le fichier de
    configuration de Busybox sans cpio (la vesion GNU de cpio est maintenant
    utilisée) et celui du noyau Linux avec le support de FUSE activé.</li>
    
    <li><strong>27 Juin 2007 - Howto Xorg et sortie de JWM 2.0</strong><br />
    Publication d'une nouvelle page concernaant la compilation du
    serveur modulaire Xorg contenant une description des étapes que nous avons utilisées 
	pour compiler Xorg 7.2. Nous sommes aussi heureux de vous annoncer la sortie 
	du gestionnaire de fenêtres <a href="http://joewing.net/programs/jwm/">JWM 2.0</a> 
	apportant beaucoup de nouveautés tels que la gestion des dégradés, la possibilité
    d'utiliser une image en fond d'écran, un nouveau style graphique que
    nous trouvons très agréable et plus moderne. JWM 2.0 va entrer dans
    SliTaz cooking d'ici la fin de cette semaine.</li>
    
    <li><strong>22 Mai 2007 - Documentation améliorée</strong><br />
    Les pages de la <a href="../doc/">documentation</a> de SliTaz ont
    été mises à jour, mais elle n'est pas encore terminée et ne demande qu'à être
    améliorée. Nous cherchons des personnes motivées pour la relecture.
    Toutes les suggestions sont aussi vraiment appréciées.
    </li>
    
    <li><strong>14 Mars 2007 - Site web de SliTaz en ligne</strong> :
    le site web de SliTaz est en ligne ! Venez le découvrir : informations,
    documentation, téléchargement gratuit, et développement.</li>
</ul>

<!-- End of news -->
</div>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>


