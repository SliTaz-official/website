<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>SliTaz - A propos</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="Au sujet de SliTaz GNU/Linux mini syst�me d'exploitation" />
    <meta name="keywords" lang="fr" content="Syst�me, libre, gnu, linux, opensource, livecd" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="20011-03-26 22:30:00" />
    <meta name="author" content="Christophe Lincoln"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../../images/network.png" alt="network.png" /></a>
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
				<li><a href="../mailing-list.php">Mailing List</a></li>
				<li><a href="../devel/">D�veloppement</a></li>
				<li><a href="../packages/">Paquets</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.php">Recherche</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Actualit�s</a></li>
				<li><a href="../about/">A propos</a></li>
				<li><a href="../get/">T�l�chargement</a></li>
				<li><a href="../asso/">Association</a></li>
				<li><a href="../doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>A propos</h4>
		<p>
			SliTaz est un syst�me GNU/Linux fournissant un bureau ou un
			serveur complet dans moins de 30Mb.
		</p>
		<p>
			SliTaz est distribu�e sous forme de LiveCD, le syst�me est
			l�ger, rapide et simple � utiliser. SliTaz fournit un bureau
			graphique intuitif et �l�gant, le meilleur support mat�riel
			possible et dispose d'une active communaut�.
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../de/about/">Deutsch</a>
	<a href="../../en/about/">English</a>
	<a href="../../es/about/">Espa�ol</a>
	<a href="../../fr/about/">Fran�ais</a>
	<a href="../../pt/about/">Portugu�s</a>
	<a href="../../cn/about/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Le projet SliTaz</h2>

<ul>
	<li><a href="#intro">Introduction � SliTaz.</a></li>
	<li><a href="#overview">Vue d'ensemble.</a></li>
	<li><a href="#origin">Origine du projet.</a></li>
	<li><a href="#free">Ind�pendance et libert�.</a></li>
	<li><a href="#license">Licence et garantie.</a></li>
	<li><a href="#website">Site Web.</a></li>
	<li><a href="#reviews">Revues de r�f�rence.</a></li>
	<li><a href="events.php">&Eacute;v�nements.</a></li>
	<li><a href="../asso/">L'Association SliTaz GNU/Linux.</a></li>
</ul>

<a name ="intro"></a>
<h2>Introduction � SliTaz</h2>
<p>
SliTaz GNU/Linux est un syst�me d'exploitation libre fonctionnant en m�moire
vive (mode LiveCD), l�ger, rapide, et enti�rement installable sur disque dur.
SliTaz est distribu�e sous forme d'image ISO que vous pouvez graver sur un
cdrom et amorcer (booter). Une fois le syst�me lanc�, vous disposez d'un 
shell ash, et vous pouvez retirer le cdrom, car SliTaz utilise la m�moire 
vive (RAM) de la machine. SliTaz fournit plus de 300 commandes GNU/Linux usuelles, un 
serveur web, des navigateurs web, un client/serveur SSH, un moteur de base de 
donn�es SQL, le support IDE, eth0, usb, ou encore le syst�me X window. En 
mode LiveCD, vous avez aussi la possibilit� d'utiliser un media USB pour 
stocker vos donn�es et fichiers de configuration personnels. SliTaz
est aussi enti�rement installable sur un disque dur et largement extensible, via
le gestionnaire de paquets et la compilation de nouvelles applications depuis
les sources.
</p>
<p>
Le projet SliTaz fournit un moyen de support technique gratuit aux utilisateurs
du syst�me via <a href="../mailing-list.php">la liste de discussion</a>. C'est
aussi le moyen le plus courant de contacter les personnes impliqu�es dans le
projet. Vous avez aussi la possibilit� de discuter de SliTaz sur le serveur IRC de
<a href="http://www.toile-libre.org/">Toile Libre</a> : <code>irc.toile-libre.org 
#slitaz</code>
</p>

<a name="overview"></a>
<h2>Vue d'ensemble</h2>
<ul>
    <li>Un syst�me racine d'environ 100 Mb et des images ISO de moins de
    30 Mb.</li>
    <li>Les outils SliTaz de personnalisation et d'administration.</li>
    <li>Perl, auto-d�tection du mat�riel PCI/USB et support du Wifi.</li>
    <li>Navigateur web Midori en mode graphique, et Retawq en mode texte.</li>
    <li>Support du son avec mixeur, convertiseur et lecteur de musique.</li>
    <li>Un client de chat IRC et un client mail.</li>
    <li>Un client/serveur SSH, pour un contr�le � distance.</li>
    <li>Un moteur de base de donn�es SQL avec SQLite.</li>
    <li>Des outils pour la gravure de CD/DVD et la cr�ation d'image ISO.</li>
    <li>Plus de 300 commandes GNU/Linux usuelles.</li>
    <li>L'�diteur de texte avanc� Nano, et LeafPad.</li>
    <li>Un client DHCP pour une connexion facilit�e et le support PPPOE.</li>
    <li>Syst�me X avec serveur Xorg/Xvesa, et l'environnement de bureau LXDE.</li>
    <li>Des applications de cr�ation graphique et de gestion des images.</li>
    <li>Des outils de manipulation de fichiers et de maintenance syst�me.</li>
    <li>De la documentation en divers formats.</li>
    <li>Environ 2300 paquets facilement installables depuis le miroir.</li>
</ul>

<a name="origin"></a>
<h2>Origine du projet</h2>
<p>
La premi�re motivation fut l'envie, ensuite le besoin. Envie de cr�er une 
mini distribution rapide, francis�e au mieux, avec le support du clavier pour
la Suisse romande et tous les pays francophones. Cette distribution devait 
�tre rapide, l�g�re, stable, robuste, facile � prendre en main pour les
utilisateurs (m�me d�butants) et fournissant un maximum d'applications utiles
lors de d�placements via le mode LiveCD. Nous voulions aussi que SliTaz
puisse �tre installable sur des machines relativement anciennes pour 
faire du recyclage, tout en proposant un syst�me extensible et ultra rapide sur
des machines puissantes.
</p>

<p>
SliTaz est construite depuis les sources, utilise Busybox pour toutes les
fonctions de base, un noyau Linux r�cent, et des logiciels GNU. SliTaz n'est
bas�e sur aucune autre distibution GNU/Linux, respecte au mieux les standards,
tel que le "Filesystem Hierarchy Standard" ou FHS pour l'arborescence de fichiers.
SliTaz est �pur�e, rapide, utilise un syst�me de d�marrage simple, bas� sur des
scripts shell, lan�ant un minimum de services. La s�curit� n'est pas oubli�e
gr�ce au pare-feu et � un syst�me de mots de passes crypt�s. Il y a aussi
de multiples documents � disposition, destin�s aux utilisateurs,
administrateurs, et (futurs) d�veloppeurs.
</p>
<p>
SliTaz a �t� initialis�e par Christophe Lincoln au d�but 2006. Il aura fallu
plus d'une ann�e de travail et de pr�parations avant la mise en ligne 
de la premi�re version. Le but �tait de commencer la vie publique de SliTaz 
en fournissant d�j� une solide base de travail, un LiveCD fonctionnel 
et le Cookbook expliquant pas � pas la cr�ation du syst�me. 
La premi�re version faisait 15 Mb, fournissait Links comme navigateur Web 
et utilisait JWM 1.8 qui ne proposait pas, � l'�poque, les couleurs d�grad�es 
et les images en fond d'�cran.
</p>
<p>
Malgr� la longue pr�paration pour fournir un syst�me d�j� fonctionnel, le
projet a commenc� sa vie timidement, une petite annonce sur Libordux.Org et
c'est tout. Google a ensuite rapidement r�f�renc� le site et les nombreux
documents, les visites ont commenc� � augmenter et les statistiques de
t�l�chargement aussi. Quatre mois apr�s la premi�re version, une nouvelle
Cooking est publi�e en juin 2007, plus d'attention a �t� donn�e au graphisme
et aux corrections, mais sans gros changements sur le liveCD. C'est par contre
depuis ce moment-l� que Slitaz a �t� capable de se reconstruire par elle-m�me.
C'est � dire que SliTaz peut recompiler tous les paquets depuis les sources.
En ao�t une nouvelle ISO Cooking avec les nouvelles versions des outils SliTaz,
dont le gestionnaire de paquets. Une liste de discussion est ouverte, nous sommes
2, puis 3 pendant 1 mois et 5 le mois suivant. D'ao�t � octobre le plus gros
du travail a �t� de pr�parer Firefox pour son entr�e sur le LiveCD, l'image
ISO est alors pass�e de 18 Mb � 24 Mb environ, pour le plus grand bien du
projet. � partir de l�, la distribution �tait vraiment utilisable par un
grand nombre de personnes. 
</p>
<p>
Encore un mois de travail, la publication d'une ISO avec Firefox en fran�ais, 
de nombreuses am�liorations et, d�part pour une op�ration s�duction, en passant
par le grand  <a href="http://linuxfr.org/pub/">LinuxFR</a>. Cette op�ration
s�duction a permis de renforcer la communaut�, de faire conna�tre le projet
et de faire passer la liste de discussion de 5 � 20 membres en 2 semaines ! 
Le calme apr�s la temp�te, le projet s'est mieux organis� pour collaborer,
le serveur propose des d�p�ts Mercurial et un canal IRC a �t� ouvert, et 
de nombreux paquets ont fait leur entr�e dans la s�lection officielle. 
D�cembre 2007, nouvelle ISO proposant, le support du son et des cartes PCMCIA et 
plus d'options au d�marrage. Cette version utilise la compression lzma 
et tient sur 22,4 Mb. Depuis cette date, le projet suit une feuille de route 
indiquant les �tapes � r�aliser et les buts � atteindre dans le temps.
</p>

<a name="free"></a>
<h2>Ind�pendance et libert�</h2>
<p>
SliTaz se veut un projet ind�pendant et libre, au d�part des d�veloppeurs SliTaz
fournissaient des services en rapport � l'open source (cours GNU/Linux et support) 
pour financer et supporter la distribution. Sans cela, SliTaz n'aurait peut-�tre 
jamais vu le jour sous cette forme. C'est dire que lancer une nouvelle distribution 
n'a pas �t� d�cid� sur un coup de t�te, cela prend du temps, demande un suivi � long terme 
et engendre des frais. En mars 2009 nous avons cr�� 
<a href="../asso/">l'Association SliTaz GNU/Linux</a> afin de r�pondre aux
besoins financiers du projet, d'en assurer la p�r�nit� et de proposer
une base professionelle � nos utilisateurs, membres et sponsors.
</p>
<p>
Cela dit, tout le travail sur SliTaz est b�n�vole et r�alis� par une 
communaut� active et r�active. Slitaz sera toujours gratuite, redistribu�e
avec son code source et ouverte � la communaut�, comme sp�cifi� dans les
statuts de l'association g�rant le projet.
</p>

<a name="license"></a>
<h2>Licence et garantie</h2>
<p>
SliTaz est libre, modifiable, recopiable, t�l�chargeable, et cela gratuitement.
Slitaz GNU/Linux est distribu�e sans aucune garantie, publi�e car potentiellement
utile. SliTaz n'a aucune pr�tention, nous ne sommes que des passionn�s par
l'informatique libre, et qui aimons la libert�. SliTaz est publi�e sous
<a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.
</p>

<a name="website"></a>
<h2>Site Web</h2>
<p>
Ce site est en ligne afin de vous permettre <a href="../../get/">d'obtenir SliTaz</a>
et pour aider au d�veloppement du projet. Il regroupe, entre autres, une
partie <a href="../../doc/">documentation</a> avec un tutoriel sur la 
cr�ation de son propre syst�me GNU/Linux libre et autonome.  Le site 
fait partie du <a href="../../i18n.php">projet d'internationalisation</a>.
</p>
<p>
Le site web de SliTaz a �t� mis en ligne le 24 f�vrier 2007, avec
48 pages, la feuille de sytle CSS, et les images. Le site utilise le format
xHTML 1.0 conforme aux normes du W3C et il est h�b�rg� sur le serveur du
projet SliTaz, actuellement chez Pankso, en Suisse romande. Les DNS et services
mail sont propuls�s par <a href="http://www.gandi.net/">Gandi</a>.
</p>
<p>
Historiquement le site de SliTaz a d'abord �t� �crit en fran�ais, par la
suite, l'anglais, le portugais et d'autres langues ont �t� ajout�es par la 
communaut�. Afin de faciliter la vie aux diff�rents contributeurs, le site 
en fran�ais a migr� en avril 2009 vers
<a href="http://www.slitaz.org/fr/">http://www.slitaz.org/fr/</a>.
</p>

<a name="reviews"></a>
<h2>Revues de r�f�rence</h2>
<p>
SliTaz GNU/Linux a �t� signal�e dans la I-presse, par des sites et des personnes de
r�f�rence dans le monde GNU/Linux. En voici une liste non-exhaustive : 
</p>

<h3>2.0 - Avril 2009</h3>
<ul>
	<li><a href="http://www.gdhpress.com.br/blog/slitaz"
		>Gdhpress</a> (pt) - By Carlos Morimoto.</li>
	<li><a href="http://www.frlinux.net/?section=distributions&amp;article=237"
		>FRLinux</a> (fr) - By Steph.</li>
	<li><a href="http://www.junauza.com/2009/07/slitaz-20-simple-speedy-and-secure.html"
		>Tech Source</a> - By Jun Auza.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz-2.html"
		>Dedoimedo</a> - By Dedoimedo.</li>
	<li><a href="http://linuxologist.com/reviews/slitaz-linux-zero-to-distro-in-30-mb/"
		>Linuxologist</a> - By Brie Gordon.</li>
</ul>

<h3>1.0 - Mars 2008</h3>
<ul>
	<li><a href="http://distrowatch.com/weekly.php?issue=20080331"
		>Distrowatch</a> - By Ladislav Bodnar.</li>
	<li><a href="http://www.junauza.com/2008/03/slitaz-gnulinux-smallest-desktop-distro.html"
		>Tech Source</a> - By Jun Auza.</li>
	<li><a href="http://beranger.org/index.php?page=diary&amp;2008/03/31/07/04/42-a-quick-look-over-slitaz-1-0"
		>Planet B�ranger</a> - By B�ranger.</li>
	<li><a href="http://kmandla.wordpress.com/2008/04/02/slitaz-10-on-450mhz-k6-2-256mb/"
		>K.Mandla Blog</a> - By K.Mandla.</li>
	<li><a href="http://reddevil62-techhead.blogspot.com/2008/04/damn-minuscule-linux-first-look-at.html"
		>Red Devil's Tech Blog</a> - By Steve Lawson.</li>
	<li><a href="http://www.linuxinfusion.com/slitaz-a-light-weight-gnulinux-distribution"
	    >Linux Infusion</a> - By Moparx.</li>	
	<li><a href="http://www.insidesocal.com/click/2008/06/a-second-look-at-slitaz-10.html"
		>Dailynews Blog</a> - By Steven Rosenberg.</li>	
	<li><a href="http://www.linux.com/feature/140573">Linux.com</a> - By Dennis L. Ericson.</li>
	<li><a href="http://www.freesoftwaremagazine.com/columns/slitaz_live_cd_small_beautifully_marked"
		>Free Software Magazine</a> - By Gary Richmond.</li>
	<li><a href="http://www.linux-magazine.com/issues/2008/97/slitaz"
		>Linux Pro Magazine</a> - By Dimitri Popov.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz.html"
		>Dedoimedo</a> - By Dedoimedo.</li>
</ul>

<h3>Cooking - Janvier 2010</h3>
<ul>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - By Jesse Smith.</li>
</ul>
<p>
Merci � tous de nous supporter.
</p>

<!-- End of content -->
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

