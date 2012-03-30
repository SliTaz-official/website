<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - 2007 News archives</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
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

<h2>2007</h2>

<div class="news">

<ul>
	<li><strong>15 D�cembre 2007 - Forum communautaire et canal IRC</strong><br />
	Apr�s quelques temps de pr�paration, le projet SliTaz est heureux de
	pouvoir annoncer la mise � disposition d'un forum officiel. Le forum est
	principalement destin� � fournir de l'aide et un support technique aux
	utilisateurs de SliTaz. C'est une alternative et un compl�ment � la liste
	de discussion, c'est aussi une initiative d'un utilisateur, merci Eddy. 
	Pour utiliser le forum vous devez commencer par vous inscrire, toutes les
	questions sont les bienvenues et n'h�sitez pas � r�pondre aux autres membres
	de la communaut� : <a href="http://forum.slitaz.org/">forum.slitaz.org</a>.
	Dans la foul�e des moyens de supports et de collaborations, le projet a 
	depuis quelques semaines un canal de discussion IRC sur Freenode.net. 
	Il n'y a pas toujours quelqu'un en ligne, mais �a discute r�guli�rement. 
	Merci � Didier pour l'enregistrement, et tout et tout. Le serveur IRC 
	est <code>irc.freenode.net</code> et le canal <code>#slitaz</code>. Pour
	rejoindre le canal, une fois connect� au serveur, vous pouvez utiliser la
	commande IRC : <code>/join #slitaz</code>.
	</li>
	
    <li><strong>06 D�cembre 2007 - Deux jours pour un d�marrage 2 fois plus rapide</strong><br />
    La nouvelle compression lzma permet � SliTaz de proposer plus de supports
    mat�riels et plus d'applications dans une image ISO encore plus petite
    qu'avant, mais le temps de d�marrage a augment�. La communaut� SliTaz a
    beaucoup travaill� ces derniers deux jours pour arriver � faire d�marrer le
    LiveCD 2 fois plus rapidement. Nous avons donc mis une nouvelle image ISO
    sur le miroir comprenant, un nouveau patch noyau pour lzma et une petite 
    correction dans l'affichage des messages d'initialisation. Nos divers tests 
	donnent des temps de d�marrage allant de 20 � 30 secondes sur des PC
    r�cents et de 60 � 80 secondes sur les machines plus anciennes.
    <a href="../get/#cooking">T�l�chargement de la derni�re version</a>.
    </li>
	
    <li><strong>04 D�cembre 2007 - Nouvelle Cooking avec le son et plus d'options</strong><br />
    Les membres de la communaut� SliTaz sont fiers de vous annoncer la
    disponibilit� d'une nouvelle version du LiveCD en cuisson. Cette version
    apporte un grand nombre de nouveaut�s dont principalement le support du
    son et PCMCIA ainsi que l'utilisation de la compression lzma. De nombreux
    bugs ont aussi �t� corrig�s, de nouveaux, th�me, menu et fond d'�cran, sont
    utilis�s. Un installateur est maintenant pr�sent ainsi qu'une bo�te de dialogue
    pour monter rapidement des p�riph�riques. Plusieurs paquets ont �t� mis �
    jours, dont SQLite, emelFM2, Firefox, avec des marques pages vers des
    application Web tel que Wikipedia ou Jamendo. Dans les 105 paquets contenus sur
    le LiveCD, vous trouverez Alsa et son mixeur, Alsaplayer, mpg123, Gcolor2,
    pcmciautils ou lspci. Un fois install�e, vous avez � disposition plus de
    240 paquets sur le miroir, facilement installables et dont les mises � jour 
    sont assur�es par le projet. Au passage, le Handbook a �t� mis � jour et comporte
    une page Multimedia, � propos du son et de la vid�o sur SlitTaz. Pour finir 
    cette annonce, un �norme travail a �t� r�alis� pour vous proposer un 
    LiveCD de : 22,4 Mb. Simple, L�ger... incroyable. Vous pouvez obtenir cette
    version Cooking via la partie <a href="../get/">t�l�chargement</a> du site.
    Enjoy.
    </li>
    
    <li><strong>06 Novembre 2007 - Nouvelle Cooking et gel des paquets</strong><br />
    Le projet SliTaz est fier d'annoncer la publication d'une nouvelle version
    Cooking du LiveCD de SliTaz. Cette version en cuisson est la derni�re avant
    la publication de la version stable 1.0, la cha�ne d'outils et les paquets
    de base, sont gel�s. Quelques nouveaux paquets ont fait leur entr�e et deux
    paquets ont �t� supprim�s du LiveCD. IPtables et Microperl ne font plus
    partie de l'ISO, mais ils ont fait de la place pour : PHP 5.2.4, Grsync,
    GCC 4.2.2, ISO Master 1.2 et Firefox 2.0.0.9 avec le support de la langue
    fran�aise et une police adapt�e au th�me GTK+. Cette version propose aussi
    un nouveau th�me pour JWM, avec fond d'�cran, un nouveau menu, les ic�nes
    Tango pour les applications GTK+, un message du jour en Fran�ais et un wiki
    personnel install� pour l'utilisateur hacker. Le LiveCD en cuisson de
    24,7 MB, est <a href="../get/">t�l�chargeable</a> depuis le miroir de SliTaz
    propuls� par TuxFamily.</li>
	
    <li><strong>04 Novembre 2007 - Takpkg 1.3, gestion des mises � jour et Tazwok 1.2</strong><br />
    Publication du gestionnaire de paquets Tazpkg 1.3. Cette version apporte la
    commande <code>upgrade</code> permettant la mise � jour de tous les paquets
    install�s. La gestion des mises � jour est une partie importante du syst�me
    de paquets et de la distribution en elle-m�me, elle permet de garder un syst�me
    s�curis�, avec les derni�res corrections. Les mises � jour sont d'ors et
    d�j� disponibles pour la version "Cooking" et les personnes ayant install�
    SliTaz sur disque dur (en mode LiveCD les paquets t�l�charg�s sont perdus).
    En temps voulu, des mises � jour de s�curit� seront r�guli�rement publi�es
    pour la version Stable courante. Pour la version Cooking actuelle, il faut
    t�l�charger et installer � la main Tazpkg 1.3 , pour ensuite simplement
    lancer <code># tazpkg recharge &amp;&amp; tazpkg upgrade</code> et avoir une
    liste des derniers paquets disponibles sur le miroir, dont Firefox 2.0.0.9.
	Au passage Tazpkg et Tazwok proposent des couleurs et un affichage plus clair
	des messages. Tazwok 1.2 g�re mieux les probl�mes (exit et message d'aide).
	Vous pouvez obtenir les archives des deux outils via la partie <a
	href="../get/">t�l�chargement</a> du site. Les deux outils ont �t� test�s sur
	SliTaz et Debian, vous pouvez utiliser Tazpkg pour installer des paquets
	SliTaz sur Debian ou utiliser Tazwok pour construire des paquets SliTaz.
	Cela dit, la prochaine version est bient�t pr�te, les paquets sont gel�s,
	le menu de JWM (2.0.1) sera plus complet, il y aura PHP, ... (24,8 Mb). A
	suivre...
	</li>
	
    <li><strong>12 Octobre 2007 - Nouvelle version Cooking et stabilisation</strong><br />
	Le projet SliTaz est fier de vous annoncer une nouvelle version du syst�me
	en cuisson (Cooking), cette version apporte un grand nombre de changements
	et d'am�liorations, des mises � jour et le LiveCD passe � 24 Mb. Quelques
	Mb de plus pour accueillir : Firefox 2.0.0.7, Rsync 2.6.9, ISO Master,
	GRUB, PPP, le support des connexions PPPOE avec rp-pppoe et le noyau Linux
	avec une solide version 2.6.22.9. Concernant le noyau, le support tlan a �t�
	compil� ainsi que plusieurs autres drivers, il y aura donc plus de cartes 
	fonctionnant directement sans passer par modprobe. Les principaux paquets 
	mis � jours sont Xorg 7.3, Dropbear 0.50, LightTPD 1.4.18, SQLite 3.5.1, 
	et Transmission vers la version 0.82 permettant la cr�ation de fichiers torrents. 
	Le bureau a un nouveau fond d'�cran r�alis� avec mtPaint, un petit centre d'aide 
	a �t� install� et des raccourcis clavier permettent d'ouvrir Firefox ou 
	le gestionnaire de fichiers (Alt + F5 ou F6). La documentation a �t� adapt�e 
	et les outils SliTaz publi�s en version 1.2. La nouvelle version est 
	<a href="../get/">t�l�chargeable</a> via le miroir de SliTaz, elle a �t� g�n�r�e 
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
	ne sont pas support�s). Tazwok-1.0, cet utilitaire permet de configurer,
    compiler et cr�er des paquets (.tazpkg) SliTaz automatiquement, c'est le
    programme qui construit tous les paquets du syst�me depuis les sources.
    Tazwok est distribu� sous forme de paquet SliTaz et d'archive source, avec
    son manuel, de la doc d�veloppeur et des exemples. Les deux applications
    seront install�es par d�faut sur le LiveCD. A noter que beaucoup de travail
    a �t� fait ces derni�res semaines et qu'une nouvelle version est � pressentir
    pour tout bient�t.
    </li>
    
    <li><strong>24 Ao�t 2007 - Liste de discussion (Mailing list) et doc</strong><br />
    Le projet SliTaz a le plaisir d'annoncer l'ouverture officielle de
    <a href="../mailing-list.php">la liste de discussion</a>. La
    <em>mailing list</em> est un moyen de support technique et de collaboration,
    la liste est ouverte � tout le monde, si vous avez une question, une
    remarque, une demande ou que vous d�sirez participer au projet, c'est l�
    qu'il faut s'exprimer. Concernant la documentation, le Handbook propose une
    nouvelle page titr�e <a href="http://doc.slitaz.org/fr:handbook:hacklivecd"
    >Hacking SliTaz LiveCD</a> ou comment modifier et s'amuser avec l'image
    ISO du LiveCD de SliTaz et une page d�crivant les �tapes � r�aliser pour
    <a href="http://doc.slitaz.org/fr:handbook:chroot">cr�er un environnement chroot�.</a>
    Bonne lecture.</li>
	
    <li><strong>7 Ao�t 2007 - Nouvelle Cooking et Tazpkg 1.1</strong><br />
    Apr�s plus d'un mois de travail sur SliTaz, le projet a mis en ligne une
    nouvelle image de la version Cooking (en cuisson). Cette version apporte
    4 nouvelles applications sur le LiveCD, des mises � jour et du design
    avec un th�me GTK, des ic�nes sur la barre des t�ches et une image de
    fond d'�cran. SliTaz propose maintenant une version micro de Perl,
    le client gFTP, Xpad pour prendre des notes sur le bureau et un petit jeu
    de tetris. Microperl permet d'utiliser/cr�er des scripts Perl et des
    scripts CGI pouvant ensuite �tre utilis�s par le serveur web LightTPD,
    pr�configur� pour une utilisation facilit�e et mis � jour vers la derni�re
    version 1.4.16. En interne, le gestionnaire de paquets Tazpkg a �t� 
	grandement am�lior�, il permet de faire une recherche de paquets, d'aider � cr�er 
	ses propres paquets et impl�mente un syst�me de gestion des d�pendances. 
	Au passage l'arbre des paquets a chang� et les meta fichiers de configuration 
	ont plus de variables et de fonctions. Vous pouvez r�cup�rer cette nouvelle mouture
    (15,6 Mb) et les sources de Tazpkg via la partie <a href="../get/">t�l�chargement</a> du site. 
	Enjoy.
    </li>
    
    <li><strong>1 Ao�t 2007 - SliTaz Handbook</strong><br />
    Apr�s plusieurs semaines de r�daction et une mise en ligne depuis quelques
    jours, le projet SliTaz est fier de vous pr�senter la premi�re mouture du
    <a href="http://doc.slitaz.org/fr:handbook:start">Handbook</a>. C'est le livre de main de SliTaz, la
    r�f�rence au sujet de l'utilisation du syst�me pour l'utilisateur,
    l'administrateur et le d�veloppeur en g�n�ral. Il r�unit des travaux de
    r�f�rence, des mini manuels et une collection d'instructions destin�es �
    fournir un livre complet, de haute qualit�, facilement consultable et
    fournissant des r�ponses rapides sur un sujet sp�cifique. A noter que le
    terme Handbook est une suite logique au Cookbook (le livre de cuisine), le
    projet Slitaz centralise la majorit� de sa documentation dans ces deux
    livres.
    </li>
    
    <li><strong>29 Juillet 2007 - SliTaz sur le web et www.slitaz.org</strong><br />
    De retour de vacances, j'ai eu le plaisir de constater que SliTaz a eu
    l'honneur d'�tre cit�e sur plusieurs site web en relation avec les syst�mes
    GNU/Linux. Tout a commen�� par un post de geantbrun
    sur les forums du site <a href="http://www.terranux.net/">Terranux.net</a>
    en d�but de mois, suivi par un post de c'estpasgagn� sur le site web/forums de <a
    href="http://www.lin-web.be/">Linweb.be</a>. En d�but de semaine (le 24),
    geantbrun, nous a propuls� sur les forums de QuebecOS et petitbob a 
	poursuivi en postant une news consultable sur la page principale du grand <a
    href="http://quebecos.com/">QuebecOS.com</a>. Merci pour l'audience, c'est
    le genre d'initiative qui motive � coder librement et qui fait chaud au
    coeur... <strong>Huge thanks to you guys!</strong> Merci aussi aux
    personnes qui ont pris le temps de lire ces posts, qui sont venues visiter
    le site de SliTaz et qui ont encore pris du temps pour essayer la b�te.
    En esp�rant vous avoir s�duit par notre mini syst�me, le travail
    continue du cot� du d�veloppement et de nouvelles informations seront
    publi�es r�guli�rement sur la page principale du site. Au passage j'en
    profite pour annoncer l'achat, pour le projet SliTaz, du nom de domaine
    slitaz.org chez <a href="http://www.gandi.net/">Gandi</a>, les DNS et les
    mail sont aussi g�rer par les services de tr�s haute qualit� offerts par
    Gandi. Le site web officiel de SliTaz est maintenant :
    <a href="http://www.slitaz.org/">www.slitaz.org</a>. Merci de mettre �
    jour vos marques pages. Christophe (Pankso).
    </li>
    
    <li><strong>28 Juin 2007 - Nouvelle version cooking</strong><br />
    Nous sommes fiers de vous annoncer la mise en ligne d'une nouvelle
    image ISO de la version cooking comprenant d'importantes mises � jour,
    des scripts de d�marrage am�lior�s avec de nouvelles fonctions et la
    r�solution de quelques petits probl�mes. L'image ISO bootable � graver
    ou �muler est disponible en <a href="../get/">t�l�chargement</a> depuis le
    le miroir de TuxFamily. Cette nouvelle version propose une mise � jour du
    client/serveur SSH Dropbear vers la version 0.49, du serveur web LightTPD
    vers la version 1.4.15, de SQLite vers la version 3.3.17, du navigateur
    web Links vers la version 2.1pre28, de mtPaint vers la version 3.11, de
    l'IDE Geany vers la version 0.11, du gestionnaire de fen�tres JWM vers
    la version 2.0 avec un nouveau th�me, de Cdrkit, Clex, Nano, Dialog,
    libpng, LeafPad et Transmission. Cette nouvelle version est aussi
    accompagn�e de son lot de nouveaux paquets logiciels, la cha�ne d'outils
    (<em>toolchain</em>) est maintenant facilement installable via le
    mini gestionnaire de paquet Tazpkg. La <em>toolchain</em> est constitu�e
    de binutils-2.17, glibc-2.3.6, du compilateur GCC 4.1.2 et de make-3.81,
    elle permet de recompiler et rendre SliTaz largement extensible via la
    compilation d'applications depuis les paquets source. Pour finir,
    le <a href="http://doc.slitaz.org/en:cookbook:start">cookbook</a> a �t� mis � jour et am�lior�,
    il d�crit la construction de tous les nouveaux paquets et du
    fonctionnement des scripts de d�marrage du syst�me, de plus, les
    outils SliTaz pour d�veloppeurs sont
    pass�s en version 1.1 avec quelques nouveaux scripts, le fichier de
    configuration de Busybox sans cpio (la vesion GNU de cpio est maintenant
    utilis�e) et celui du noyau Linux avec le support de FUSE activ�.</li>
    
    <li><strong>27 Juin 2007 - Howto Xorg et sortie de JWM 2.0</strong><br />
    Publication d'une nouvelle page concernaant la compilation du
    serveur modulaire Xorg contenant une description des �tapes que nous avons utilis�es 
	pour compiler Xorg 7.2. Nous sommes aussi heureux de vous annoncer la sortie 
	du gestionnaire de fen�tres <a href="http://joewing.net/programs/jwm/">JWM 2.0</a> 
	apportant beaucoup de nouveaut�s tels que la gestion des d�grad�s, la possibilit�
    d'utiliser une image en fond d'�cran, un nouveau style graphique que
    nous trouvons tr�s agr�able et plus moderne. JWM 2.0 va entrer dans
    SliTaz cooking d'ici la fin de cette semaine.</li>
    
    <li><strong>22 Mai 2007 - Documentation am�lior�e</strong><br />
    Les pages de la <a href="../doc/">documentation</a> de SliTaz ont
    �t� mises � jour, mais elle n'est pas encore termin�e et ne demande qu'� �tre
    am�lior�e. Nous cherchons des personnes motiv�es pour la relecture.
    Toutes les suggestions sont aussi vraiment appr�ci�es.
    </li>
    
    <li><strong>14 Mars 2007 - Site web de SliTaz en ligne</strong> :
    le site web de SliTaz est en ligne ! Venez le d�couvrir : informations,
    documentation, t�l�chargement gratuit, et d�veloppement.</li>
</ul>

<!-- End of news -->
</div>

<!-- End of content  -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>


