<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Association</title>
	<meta name="description" content="Au sujet de SliTaz GNU/Linux mini système d'exploitation"/>
	<meta name="keywords" lang="fr" content="Système, libre, gnu, linux, opensource, livecd"/>
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

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2 style="margin-right: 220px;">Infrastructure et services</h2>

<p>
	L'Association SliTaz GNU/Linux est une association à but 
	non lucratif, c'est l'entité qui soutient et gère le projet.
	Elle fournit une infrastructure et des services de qualité
	professionnelle aux utilisateurs, développeurs et entreprises
	utilisant la distribution.
</p>

<ul>
	<li><a href="#overview">Vue d'ensemble</a></li>
	<li><a href="#goals">Objectifs actuels</a></li>
	<li><a href="#members">Membres</a></li>
	<li><a href="../sponsor/">Sponsors</a></li>
	<li><a href="#donation">Donation</a></li>
	<li><a href="#postal">Adresse postale</a></li>
</ul>

<p>Aidez le projet via un petit don:
	<?php include("../../lib/html/donate.html"); ?></p>

<h3 id="overview">Vue d'ensemble</h3>

<p>
L'association SliTaz GNU/Linux est internationale, son siège est en
Suisse et respecte donc le Code civil suisse. L'association est
composée d'un Comité et de membres, elle peut avoir des activités
financières et rémunérer du personnel. Les membres se réunissent une
fois par an en Assemblée générale (audio/visio conférence), c'est 
l'organe suprême, elle décide par exemple des activités de l'association
ou du montant de la cotisation des membres. Chaque membre a un droit de vote
et de proposition individuelle, il peut utiliser le matériel (cdrom, T-shirt)
de l'association, créer un groupe de travail pour organiser des
événements, etc.
</p>

<p>
Le projet prenant de l'ampleur et les demandes du monde professionnel se
faisant de plus en plus fréquentes, la création de l'association SliTaz GNU/Linux
nous est apparue comme une nécessité. Nous avons choisi un modèle économique
associatif pour satisfaire les besoins du projet et proposer une base solide
et de haute qualité à nos utilisateurs et aux entreprises partenaires qui
souhaiteraient sponsoriser le projet.
</p>
<p>
Une copie des statuts est envoyée à chaque membre lors de son inscription
et la version PDF est toujours disponible en ligne : 
<a href="status-association-slitaz.pdf">statuts-association-slitaz.pdf</a>
</p>

<h3 id="goals">Objectifs actuels</h3>

<p>
Le projet SliTaz a un modèle de développement ouvert et la totalité du travail
réalisée par la communauté est bénévole. Notre objectif est d'améliorer et de 
proposer un meilleur suivi et une meilleure organisation des contributions.
L'accueil, la convivialité, l'accompagnement, la mise à jour des sites, la
maintenance des services, le support technique ou la gestion des équipes
sont autant de sujets que nous aimerions professionnaliser.
</p>
<p>
Pour atteindre ces objectfs nous souhaiterions offrir à l'Association 1 voire
2 permanents qui travailleraient, à temps partiel ou plein, pour SliTaz.
Ces personnes auraient d'abord à charge de consolider et d'optimiser l'existant
tout en s'occupant des nouvelles demandes. Les différents sous-projets
seraient également plus dynamiques et verraient les nouveautés publiées
bien plus rapidement. Mais c'est surtout dans l'animation et le suivi des
équipes, des espaces de discussion et de travail, que nous pourrions agir
car les participants trouveraient alors des points d'appui plus réactifs
et une disponibilité accrue.
</p>

<h3 id="members">Membres</h3>

<p>
L'association est ouverte à toute personne physique ou morale. Devenir
membre vous permet de soutenir le projet et d'assurer sa pérennité via une
cotisation annuelle.
</p>
<p>
Pour devenir membre, il vous suffit d'envoyer un courrier, ou un mail à 
l'adresse : asso (at) slitaz.org. Vous recevrez alors un mail avec toutes
les informations utiles, les moyens de paiement de la cotisation et 
une copie des statuts. La cotisation de base a été fixée à 40 Euro (60 CHF)
pour l'année 2009-2010. Dans le contenu du courrier ou mail, vous êtes priés
de spécifier :
</p>
<ul>
	<li>Nom et Prénom</li>
	<li>Adresse complète</li>
	<li>Pays</li>
</ul>

<h3 id="donation">Donation</h3>

<p>
Il y a divers moyens pour soutenir financièrement l'association, devenir
membre ou sponsor, faire un don par virement bancaire ou en ligne via 
les services de PayPal. Le projet a aussi des besoins logistiques, 
tous les dons de matériel en bon état sont bienvenus.
</p>

<?php include("../../lib/html/donate.html"); ?>

<h3 id="postal">Adresse postale</h3>

<div class="box">
	Association SliTaz<br />
	Rue du Village 40<br />
	1081 Montpreveyres<br />
	Switzerland<br />
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
