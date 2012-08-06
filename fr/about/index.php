<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - A propos</title>
	<meta name="description" content="Au sujet de SliTaz GNU/Linux mini système d'exploitation" />
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, opensource, livecd" />
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
		<h4>A propos</h4>
		<p>
			SliTaz est un système GNU/Linux fournissant un bureau ou un
			serveur complet dans moins de 30Mb.
		</p>
		<p>
			SliTaz est distribuée sous forme de LiveCD, le système est
			léger, rapide et simple à utiliser. SliTaz fournit un bureau
			graphique intuitif et élégant, le meilleur support matériel
			possible et dispose d'une active communauté.
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Le projet SliTaz</h2>

<ul>
	<li><a href="#intro">Introduction à SliTaz.</a></li>
	<li><a href="#overview">Vue d'ensemble.</a></li>
	<li><a href="#origin">Origine du projet.</a></li>
	<li><a href="#free">Indépendance et liberté.</a></li>
	<li><a href="#license">Licence et garantie.</a></li>
	<li><a href="#website">Site Web.</a></li>
	<li><a href="#reviews">Revues de référence.</a></li>
	<li><a href="events.php">Évènements.</a></li>
	<li><a href="../asso/">L'Association SliTaz GNU/Linux.</a></li>
</ul>

<h2 id="intro">Introduction à SliTaz</h2>

<p>
SliTaz GNU/Linux est un système d'exploitation libre fonctionnant en mémoire
vive (mode LiveCD), léger, rapide, et entièrement installable sur disque dur.
SliTaz est distribuée sous forme d'image ISO que vous pouvez graver sur un
cdrom et amorcer (booter). Une fois le système lancé, vous disposez d'un
shell ash, et vous pouvez retirer le cdrom, car SliTaz utilise la mémoire
vive (RAM) de la machine. SliTaz fournit plus de 300 commandes GNU/Linux usuelles, un
serveur web, des navigateurs web, un client/serveur SSH, un moteur de base de
données SQL, le support IDE, eth0, usb, ou encore le système X window. En
mode LiveCD, vous avez aussi la possibilité d'utiliser un media USB pour
stocker vos données et fichiers de configuration personnels. SliTaz
est aussi entièrement installable sur un disque dur et largement extensible, via
le gestionnaire de paquets et la compilation de nouvelles applications depuis
les sources.
</p>
<p>
Le projet SliTaz fournit un moyen de support technique gratuit aux utilisateurs
du système via <a href="../mailing-list.php">la liste de discussion</a>. C'est
aussi le moyen le plus courant de contacter les personnes impliquées dans le
projet. Vous avez aussi la possibilité de discuter de SliTaz sur le serveur IRC de
<a href="http://www.toile-libre.org/">Toile Libre</a> : <code>irc.toile-libre.org
#slitaz</code>
</p>

<h2 id="overview">Vue d'ensemble</h2>

<ul>
	<li>Un système racine d'environ 100 Mb et des images ISO de moins de
		30 Mb.</li>
	<li>Les outils SliTaz de personnalisation et d'administration.</li>
	<li>Perl, auto-détection du matériel PCI/USB et support du Wifi.</li>
	<li>Navigateur web Midori en mode graphique, et Retawq en mode texte.</li>
	<li>Support du son avec mixeur, convertiseur et lecteur de musique.</li>
	<li>Un client de chat IRC et un client mail.</li>
	<li>Un client/serveur SSH, pour un contrôle à distance.</li>
	<li>Un moteur de base de données SQL avec SQLite.</li>
	<li>Des outils pour la gravure de CD/DVD et la création d'image ISO.</li>
	<li>Plus de 300 commandes GNU/Linux usuelles.</li>
	<li>L'éditeur de texte avancé Nano, et LeafPad.</li>
	<li>Un client DHCP pour une connexion facilitée et le support PPPOE.</li>
	<li>Système X avec serveur Xorg/Xvesa, et l'environnement de bureau LXDE.</li>
	<li>Des applications de création graphique et de gestion des images.</li>
	<li>Des outils de manipulation de fichiers et de maintenance système.</li>
	<li>De la documentation en divers formats.</li>
	<li>Environ 2300 paquets facilement installables depuis le miroir.</li>
</ul>

<h2 id="origin">Origine du projet</h2>

<p>
La première motivation fut l'envie, ensuite le besoin. Envie de créer une
mini distribution rapide, francisée au mieux, avec le support du clavier pour
la Suisse romande et tous les pays francophones. Cette distribution devait
être rapide, légère, stable, robuste, facile à prendre en main pour les
utilisateurs (même débutants) et fournissant un maximum d'applications utiles
lors de déplacements via le mode LiveCD. Nous voulions aussi que SliTaz
puisse être installable sur des machines relativement anciennes pour
faire du recyclage, tout en proposant un système extensible et ultra rapide sur
des machines puissantes.
</p>

<p>
SliTaz est construite depuis les sources, utilise Busybox pour toutes les
fonctions de base, un noyau Linux récent, et des logiciels GNU. SliTaz n'est
basée sur aucune autre distibution GNU/Linux, respecte au mieux les standards,
tel que le "Filesystem Hierarchy Standard" ou FHS pour l'arborescence de fichiers.
SliTaz est épurée, rapide, utilise un système de démarrage simple, basé sur des
scripts shell, lançant un minimum de services. La sécurité n'est pas oubliée
grâce au pare-feu et à un système de mots de passes cryptés. Il y a aussi
de multiples documents à disposition, destinés aux utilisateurs,
administrateurs, et (futurs) développeurs.
</p>
<p>
SliTaz a été initialisée par Christophe Lincoln au début 2006. Il aura fallu
plus d'une année de travail et de préparations avant la mise en ligne
de la première version. Le but était de commencer la vie publique de SliTaz
en fournissant déjà une solide base de travail, un LiveCD fonctionnel
et le Cookbook expliquant pas à pas la création du système.
La première version faisait 15 Mb, fournissait Links comme navigateur Web
et utilisait JWM 1.8 qui ne proposait pas, à l'époque, les couleurs dégradées
et les images en fond d'écran.
</p>
<p>
Malgré la longue préparation pour fournir un système déjà fonctionnel, le
projet a commencé sa vie timidement, une petite annonce sur Libordux.Org et
c'est tout. Google a ensuite rapidement référencé le site et les nombreux
documents, les visites ont commencé à augmenter et les statistiques de
téléchargement aussi. Quatre mois après la première version, une nouvelle
Cooking est publiée en juin 2007, plus d'attention a été donnée au graphisme
et aux corrections, mais sans gros changements sur le liveCD. C'est par contre
depuis ce moment-là que Slitaz a été capable de se reconstruire par elle-même.
C'est à dire que SliTaz peut recompiler tous les paquets depuis les sources.
En août une nouvelle ISO Cooking avec les nouvelles versions des outils SliTaz,
dont le gestionnaire de paquets. Une liste de discussion est ouverte, nous sommes
2, puis 3 pendant 1 mois et 5 le mois suivant. D'août à octobre le plus gros
du travail a été de préparer Firefox pour son entrée sur le LiveCD, l'image
ISO est alors passée de 18 Mb à 24 Mb environ, pour le plus grand bien du
projet. À partir de là, la distribution était vraiment utilisable par un
grand nombre de personnes.
</p>
<p>
Encore un mois de travail, la publication d'une ISO avec Firefox en français,
de nombreuses améliorations et, départ pour une opération séduction, en passant
par le grand  <a href="http://linuxfr.org/pub/">LinuxFR</a>. Cette opération
séduction a permis de renforcer la communauté, de faire connaître le projet
et de faire passer la liste de discussion de 5 à 20 membres en 2 semaines !
Le calme après la tempête, le projet s'est mieux organisé pour collaborer,
le serveur propose des dépôts Mercurial et un canal IRC a été ouvert, et
de nombreux paquets ont fait leur entrée dans la sélection officielle.
Décembre 2007, nouvelle ISO proposant, le support du son et des cartes PCMCIA et
plus d'options au démarrage. Cette version utilise la compression lzma
et tient sur 22,4 Mb. Depuis cette date, le projet suit une feuille de route
indiquant les étapes à réaliser et les buts à atteindre dans le temps.
</p>

<h2 id="free">Indépendance et liberté</h2>

<p>
SliTaz se veut un projet indépendant et libre, au départ des développeurs SliTaz
fournissaient des services en rapport à l'open source (cours GNU/Linux et support)
pour financer et supporter la distribution. Sans cela, SliTaz n'aurait peut-être
jamais vu le jour sous cette forme. C'est dire que lancer une nouvelle distribution
n'a pas été décidé sur un coup de tête, cela prend du temps, demande un suivi à long terme
et engendre des frais. En mars 2009 nous avons créé
<a href="../asso/">l'Association SliTaz GNU/Linux</a> afin de répondre aux
besoins financiers du projet, d'en assurer la pérénité et de proposer
une base professionelle à nos utilisateurs, membres et sponsors.
</p>
<p>
Cela dit, tout le travail sur SliTaz est bénévole et réalisé par une
communauté active et réactive. Slitaz sera toujours gratuite, redistribuée
avec son code source et ouverte à la communauté, comme spécifié dans les
statuts de l'association gérant le projet.
</p>

<h2 id="license">Licence et garantie</h2>

<p>
SliTaz est libre, modifiable, recopiable, téléchargeable, et cela gratuitement.
Slitaz GNU/Linux est distribuée sans aucune garantie, publiée car potentiellement
utile. SliTaz n'a aucune prétention, nous ne sommes que des passionnés par
l'informatique libre, et qui aimons la liberté. SliTaz est publiée sous
<a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.
</p>

<h2 id="website">Site Web</h2>

<p>
Ce site est en ligne afin de vous permettre <a href="../get/">d'obtenir SliTaz</a>
et pour aider au développement du projet. Il regroupe, entre autres, une
partie <a href="../doc/">documentation</a> avec un tutoriel sur la
création de son propre système GNU/Linux libre et autonome.  Le site
fait partie du <a href="/i18n.php">projet d'internationalisation</a>.
</p>
<p>
Le site web de SliTaz a été mis en ligne le 24 février 2007, avec
48 pages, la feuille de sytle CSS, et les images. Le site utilise le format
xHTML 1.0 conforme aux normes du W3C et il est hébérgé sur le serveur du
projet SliTaz, actuellement chez Pankso, en Suisse romande. Les DNS et services
mail sont propulsés par <a href="http://www.gandi.net/">Gandi</a>.
</p>
<p>
Historiquement le site de SliTaz a d'abord été écrit en français, par la
suite, l'anglais, le portugais et d'autres langues ont été ajoutées par la
communauté. Afin de faciliter la vie aux différents contributeurs, le site
en français a migré en avril 2009 vers
<a href="http://www.slitaz.org/fr/">http://www.slitaz.org/fr/</a>.
</p>

<h2 id="reviews">Revues de référence</h2>

<p>
SliTaz GNU/Linux a été signalée dans la I-presse, par des sites et des personnes de
référence dans le monde GNU/Linux. En voici une liste non-exhaustive :
</p>

<h3>4.0 - Avril 2012</h3>

<ul>
	<li><a href="http://badalhocando.blogspot.co.uk/2012/04/slitaz-40-review-small-but-fierce.html"
		>Blogspot</a> - By Klaus Zimmermann.</li>
	<li><a href="http://linuxblog.darkduck.com/2012/04/slitaz-40-light-and-stable.html"
		>DarkDuck</a> - By Dmitry.</li>
</ul>

<h3>3.0 - Mars 2010 &amp; Cooking - Janvier 2010</h3>

<ul>
	<li><a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/"
		>Wordpress</a> - By K.Mandla.</li>
	<li><a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30"
		>Linux Journal</a> - By Susan Linton.</li>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - By Jesse Smith (Cooking just before 3.0).</li>
</ul>

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
		>Planet Béranger</a> - By Béranger.</li>
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
Merci à tous de nous supporter.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
