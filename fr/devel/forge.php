<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz (fr) - Forge</title>
	<meta name="description" content="Développement de SliTaz GNU/Linux"/>
	<meta name="keywords" lang="fr" content="developpement slitaz developer GNU Linux"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.fr.html"); 
include("../../lib/html/nav.fr.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Gestion collaborative du développement</h2>

<p>
	Les outils et services utilisés pour forger Slitaz :-)
</p>

<ul>
	<li><a href="#kiss">KISS et respect des standards.</a></li>
	<li><a href="#tank">Build host &amp; home.</a></li>
	<li><a href="#repos">Dépôts Mercurial.</a></li>
	<li><a href="#iconv">Implémentation d'iconv().</a></li>
	<li><a href="#pkgs">Paquets tazpkg.</a></li>
	<li><a href="#pkgs-naming">Nommage des paquets.</a></li>
	<li><a href="#site">Gestion du site Web et des livres.</a></li>
	<li><a href="#xhtml">xHTML coding style.</a></li>
</ul>

<p>
	Le projet SliTaz dispose de divers moyens pour gérer le travail des
	développeurs et collaborer. Un système de gestion de révision avec Mercurial
	(Hg), des modules de synchronisation avec Rsync, de la documentation, une 
	<a href="../mailing-list.php">liste de discussion</a> et un canal IRC. Tous
	les développeurs sont inscrits sur la liste, c'est le moyen de collaboration
	principal et privilégié.
</p>

<h3 id="kiss">KISS et respect des standards</h3>

<p>
	Rester simple, respecter au mieux les standards, réaliser un travail soigné,
	rédiger de la documentation de haute qualité, fournir un système stable et
	robuste et garder le <em>rootfs</em> du LiveCD standard assez léger pour que
	SliTaz tourne sur des machines ayant au minimum 128 Mb de RAM. Possibilité 
	d'utiliser GTK+2, Dialog, Gtkdialog, des scripts SHell ou encore PHP pour
	coder des outils propres à la distribution. L'idée est aussi de ne pas faire
	de doublons et de penser mini...
</p>

<p>
	SliTaz se veut un projet proche et à l'écoute des ses utilisateurs. Il y a
	plusieurs développeurs actifs sur le <a href="http://forum.slitaz.org/">forum</a>
	et sur la <a href="../mailing-list.php">liste de discussion</a>.
</p>

<h3 id="tank">Tank - Build host &amp; home</h3>

<p>
	Chaque contributeur peut avoir un compte sur le serveur principal du
	projet, avec un accès sécurisé, de l'espace disque, un répertoire public
	et tous les outils de développement. Les développeurs peuvent y compiler
	leurs paquets et les mainteneurs du miroir s'occupent de la synchronisation.
	Tank héberge aussi le site internet, le web boot et les dépôts Mercurial: 
	<a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>

<p>
	L'utilisation du build host est décrite dans le Cookbook:
	<a href="http://doc.slitaz.org/en:cookbook:buildhost">SliTaz Build Host (tank)</a>.
</p>

<h3 id="repos">Dépôts Mercurial</h3>

<p>
	Tous les sous-projets tels que Tazpkg, Tazwok ou Tazlito ont leurs propres 
	dépôts Hg sur le serveur du projet, tout comme le wok. Les développeurs ont
	un compte et des droits en écriture afin de pouvoir envoyer leurs recettes,
	mises à jour ou modifications. Il est bien sûr possible de demander la création  
	d'un nouveau dépôt pour collaborer sur un nouveau sous-projet lié à SliTaz.
	A noter qu'il y a 2 domaines : <a href="http://hg.slitaz.org/">hg.slitaz.org</a>
	est public et <code>repos.slitaz.org</code> nécessite une authentification, c'est-à-dire 
	que vous pouvez cloner hg.slitaz.org mais pas y pousser vos changements ou fichiers.
</p>

<h4>~/.hgrc</h4>

<p>
	Mercurial utilise un fichier caché <code>~./hgrc</code> permettant de 
	spécifier son nom d'utilisateur. Il faut mettre votre nom et adresse mail pour
	qu'on sache qui a modifié quoi. Et attention à ne pas être <em>root</em> pour
	pousser vos modifications. Exemple :
</p>

<pre class="script">
[ui]
username = Prénom Nom &lt;you@example.org&gt;
</pre>

<h4>Cloner, modifier, commiter et pousser</h4>

<p>
	Vous avez le choix de cloner anonymement via hg.slitaz.org ou 
	directement avec votre login et mot de passe. Pour cloner un dépôt 
	tel que le wok :
</p>

<pre>
 $ hg clone http://repos.slitaz.org/wok/
</pre>

<p>
	Copier, créer, modifier des recettes ou des fichiers dans <code>stuff</code>. 
	Avant de pouvoir pousser vos modifs, il faut les additionner à votre dépôt 
	local et les commiter. A noter que la commande <code>status</code> permet de 
	savoir quels fichiers ont été modifiés :
</p>

<pre>
 $ cd wok
 $ hg status
 $ hg add
 $ hg commit
</pre>

<p>
	La commande <code>commit</code> va ouvrir l'éditeur de texte Nano pour écrire le message
	destiné aux logs (Ctrl + X pour enregistrer et quitter). Vous pouvez éviter
	Nano en utilisant l'option : <code>-m "Message"</code>. And please, 
	messages in English if possible :
</p>

<pre>
 $ hg commit -m "Message for Mercurial log"
</pre>

<p>
	Une fois que tout est prêt, vous pouvez encore utiliser la commande
	<code>log</code> pour voir ce qui va être affiché sur l'interface web. Pour 
	pousser vos changements c'est <code>push</code> :
</p>

<pre>
 $ hg log
 $ hg push
</pre>

<p>
	Si vous avez cloné depuis hg.slitaz.org, il faut alors pousser en spécifiant
	le bon URL :
</p>

<pre>
 $ hg push http://repos.slitaz.org/wok/
</pre>

<h4>Mettre à jour un wok local</h4>

<p>
	Pour mettre à jour votre wok local avec celui du serveur (<em>pull</em>
	pour tirer les changements) :
</p>

<pre>
 $ hg pull
 $ hg update
</pre>

<h4>Commandes utiles</h4>

<p>
	Des commandes hg qui peuvent servir.
</p>

<ul>
	<li><code>hg help</code> : affiche la liste complète des commandes.</li>
	<li><code>hg rollback</code> : annule la dernière action exécutée (commit,
	pull, push).</li>
	<li><code>hg log &lt;paquet&gt;</code> : affiche les logs pour un paquet.</li>
	<li><code>hg head</code> : affiche le dernier log.</li>
</ul>

<h3 id="iconv">Implémentation d'iconv()</h3>

<p>
	SliTaz utilise iconv() fourni par la GNU glibc, même si certain paquets
	proposent d'utiliser <code>libiconv</code> il faut utiliser la version de
	la glibc (paquet <code>glibc-locale</code>). Il n'y a donc pas de paquet 
	libiconv (1,2 Mb) dans SliTaz.
</p>

<h3 id="pkgs">Paquets tazpkg</h3>

<p>
	Les paquets tazpkg de SliTaz sont créés automatiquement via Tazwok et les
	recettes contenues dans le wok, <a href="http://doc.slitaz.org/fr:cookbook:start">le Cookbook</a>
	décrit <a href="http://doc.slitaz.org/fr:cookbook:wok">l'utilisation des outils SliTaz</a> 
	et le format des <a href="http://doc.slitaz.org/fr:cookbook:receipt">recettes</a>,
	c'est sans doute par un petit peu de lecture qu'il faut commencer.
</p>

<p>
	Concernant le choix des paquets, l'idée est de proposer un paquet par tâche ou 
	fonctionnalité, c'est à dire pas (trop) de doublons et de trouver 
	l'application la plus légère dans son domaine. A noter que les paquets actuels
	ne sont pas figés, si vous trouvez une alternative à un paquet existant, étant
	plus légère, ayant plus de fonctionnalités ou étant plus <em>sexy</em> pour
	quelques Ko supplémentaires, vous pouvez la proposer sur la liste. Une 
	attention particulière est portée aux paquets destinés au LiveCD : strip,
	suppression de tout ce qui est inutile, dépendances et options de compilation.
	En général, les paquets candidats pour le corps du LiveCD sont discutés sur
	la liste.
</p>

<p>
	Avant de commencer à compiler et créer des paquets pour SliTaz, assurez-vous 
	qu'une recette n'existe pas dans le wok undigest, disponible sur le miroir
	principal de SliTaz. N'oubliez pas non plus que les membres de la liste sont
	là pour vous aider et que pour bien commencer, 
	<a href="http://doc.slitaz.org/fr:cookbook:wok"
	>la documentation du wok et des outils</a> existe.
</p>

<h3 id="pkgs-naming">Nommage des paquets</h3>

<p>
	Dans la majorité des cas le nom du paquet est celui des sources exception
	faite des modules Python, Perl, PHP, Ruby, Lua. Par example le paquet Kid
	fournissant un système de template XML et écrit en Python se nomme:
	<code>python-kid</code>.
</p>

<h3 id="site">Gestion du site Web et des livres</h3>

<p>
	La gestion du site et des livres (Handbook et Cookbook) est faite via un 
	dépôt Mercurial, ce qui nous permet de traviller à plusieurs. Il faut
	juste installer <code>mercurial</code> sur SliTaz et connaître les commandes
	de base. Une fois le dépôt cloné vous avez une copie complète du site en
	local pour commencer à travailler. Pour cloner le site web :
</p>

<pre>
 $ hg clone http://hg.slitaz.org/website
</pre>

<p>
	Sur SliTaz vous pouvez installer le serveur web Lighttpd et mettre le
	site dans votre répertoire ~/Public, cela permet de naviguer dans 
	votre copie locale via localhost/~user.
</p>

<h3 id="xhtml">xHTML coding style</h3>

<p>
	Les pages du site et des différents <em>books</em> sont codés en xHTML 1.0
	Transitional, les couleurs pour le <code>body</code> et les titres sont
	directement mis dans la page, cela permet d'avoir une présentation plus soignée
	pour Links. Le titre de niveau 1 est utilisé une seule fois en haut de page,
	le titre 2 correspond au titre du document et les titres de niveau 3 et 4 sont
	ensuite utilisés pour les sous-titres. Si il y a lieu d'avoir une liste à puces
	avec des ancres, elle se met en haut juste après le titre de niveau 2. Les
	paragraphes sont contenus dans les balises <code>&lt;p&gt;&lt;/p&gt;</code>.
	Pour indenter, nous utilisons des tabulations, elles ont une raison d'être
	sémantique et prennent moins de place en terme d'octets. Pour mettre
	du code tel que le nom d'une commande dans un paragraphe, la balise
	<code>&lt;code&gt;</code> est recommandée. Pour afficher une ou des commandes
	à lancer dans un terminal, les pages du site utilisent la balise
	<code>&lt;pre&gt;</code> permettant d'afficher du texte préformaté. Exemple :
</p>

<pre>
 $ command
</pre>

<p>
	Pour afficher du texte à copier/coller tels que des scripts, des bouts de
	code, des exemples de fichiers de configuration, etc, c'est aussi la balise
	<code>&lt;pre&gt;</code> mais avec une classe CSS nommée "script". Exemple:
</p>

<pre class="script">
&lt;pre class="script"&gt;

code...

&lt;/pre&gt;
</pre>

<p>
	Les mots en <em>English</em> se mettent dans la balise <code>&lt;em&gt;</code>
	et les liens internes sont relatifs. Penser à vérifier la validité du code via
	le <em>validator</em> en ligne du W3C.
</p>

<h3>Diff et patch</h3>

<p>
	Les utilitaires <code>diff</code> et <code>patch</code> sont des outils en
	ligne de commande permettant de créer et d'appliquer un fichier contenant
	les différences entre deux fichiers. Cette technique est souvent utilisée
	pour collaborer et permet d'extraire clairement les modifications apportées
	au fichier original. Pour créer un fichier <code>diff</code> lisible par
	les humains dans un simple éditeur de texte, il faut utiliser l'option
	<code>-u</code> en argument :
</p>

<pre>
 $ diff -u file.orig file.new > file.diff
</pre>

<p>
	Pour appliquer un patch :
</p>

<pre>
 $ patch file.orig file.diff
</pre>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
