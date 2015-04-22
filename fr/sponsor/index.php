<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>SliTaz - Sponsor</title>
	<meta name="description" content="SliTaz GNU/Linux asso sponsor" />
	<meta name="keywords" lang="en" content="slitaz pro, slitaz sponsor, support" />
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
<section id="content">
	
<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2>Sponsoring SliTaz</h2>

<p>
	SliTaz est un projet à but non lucratif et nous sommes toujours à
	la recherche de moyens pour supporter le projet et obtenir de
	nouveaux matériels.
</p>

<p>
	Tout d'abord, une énorme merci à nos <a href="#cur">sponsors actuels</a>
	et tous les gens qui nous supportent avec de petites mais très importantes
	donations au projet.
	Le projet est assez jeune mais en <?php echo date('Y')-2007 ?> ans de dévelopement
	nous avons grandi et somme devenu un système d'exploitation de niveau
	professionnel qui est fiable dans des environnements de production.
</p>

<h3>Aider financièrement un développeur</h3>

<p>
	Vous utiliser SliTaz dans votre projet et vous voulez voir la distribution
	devenir encore plus professionnelle avec les principaux développeurs 
	travaillant à plein temps ?
	Alors vous pouvez sponsoriser l'Association SliTaz qui va payer un 
	développeur pour travailler à 100% sur SliTaz.
	Nous n'avons pas assez d'argent actuellement pour financer un développeur
	à l'année, mais les dont et le support financier nous permet un travail
	professionnel 3 ou 4 mois par an sur le projet. A terme nous espérons d'avoir
	des développeurs travaillant à plein temps sur SliTaz.
<�p>

<p>Aidez le projet avec une petite donation :</p>
<?php include("../../lib/html/donate.html"); ?>

<h3>Sponsor matériel</h3>

<p>
	Comme beaucoup de projet open source nous développons SliTaz avec nos
	ordinateurs personnels. Nous ne pouvons tester la distribution sur des
	machines spécifiques car nous ne n'y avons pas accés.
	Si vous êtes fabriquant de matériels informatiques et que vous voulez
	voir fonctionner SliTaz sur votre ordinateur out-of-the-box, vous pouvez
	nous envoyer une machine sur laquelle nous pourrons travailler pour vous.
</p>
<p>
	SliTaz est construite avec des outils supportant la compilation croisée
	et nous aimerions porter SliTaz sur la plateforme ARM. Nous avons besion
	de quelques machines ARM pour pouvoir tester nos binaires et adapter SliTaz
	à l'architecture ARM.
</p>

<h3>Recyclage du matériel</h3>

<p>
	SliTaz est une distribution très éfficace pour donner une nouvelle vie
	à un ancien ordinateur et nous avons besion de matériel ancien pour la
	tester. Nous pouvons recycler votre ancien matériel pour y préinstaller
	SliTaz et le revendre à bas coût. Celà permet de fournir des machines
	puissante et bon marché et nous permet de faire un peu d'argent et de
	fournir en service concret.
</p>

<h2>Contact et information</h2>

<p>
	Si vous êtes intéressé et vous voulez plus d'information sur le
	sponsoring financier ou matériel, vous pouvez contacter l'association
	SliTaz par mail à &lt;asso à slitaz.org&gt; ou par la
	<a href="../asso/#postal">poste</a>.
</p>
<p>
	En sponsorisant SliTaz votre logo et votre url apparaitra sur cette page
	qui est reliée à toutes les autre pages du site. Vous pourez aussi
	déclarer publiquement votre participation à un projet 100% Open Source
	afin d'attirer l'attention des utilisateurs de logiciel libre et de Linux.
</p>

<h2 id="cur">Nos sponsors actuels</h2>

<table>
	<tbody>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.jpg" alt="Allied Data Sys"
				style="float: left; " /></a>
			</td>
			<td>
				Allied Data Sys - ADS sponsorise le miroir principal de
				SliTaz et nous offre un accés complet à une machine
				virtuelle avec une connxion à haut débit.
				Celà nous permet d'utiliser la machine comme nous voulons
				sans limitation. Un énorme merci à ADS pour le service
				et les réponses rapides à toutes les questions et les
				souhaits que nous avons.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="https://duckduckgo.com/?t=slitaz"><img
				src="/images/sponsor/ddg.png" alt="DuckDuckGo"
				style="float: left;" /></a>
			</td>
			<td>
				Le moteur de recherche DuckDuckGo - DDG a signé un partenariat
				avec SliTaz pour partager les revenus générés par les
				<em>liens sponsorisés</em> dans les resultats des recherches
				des utilisateurs SliTaz. Nous partageons 50% de ces revenus et
				ainsi utiliser DDG dans SliTaz aides les 2 projets.
				DuckDuckGo est un moteur de recherche donnant des réponses
				instantanées, moins de spam, beaucoup d'outils et une réelle
				protection de la vie privée.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://cosi.clarkson.edu"><img
				src="/images/sponsor/cosi.png" alt="Clarkson Open Source Institute"
				style="float: left;" /></a>
			</td>
			<td>
				Le Clarkson Open Source Institute - COSI sponsorise notre
				serveur Chub et offre un accés complet à la machine virtuelle.
				Nous somme fier de travailler avec COSI qui à été fondé
				pour promouvoir le logiciel open source (OSS) et fournit
				équipement et support aux projets étudiant. Un énorme
				merci à l'équipe de COSI pour le support et les réponses
				rapides à nos requêtes.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://webconverger.com"><img
				src="/images/sponsor/webc.png" alt="Webconverger Project"
				style="float: left;" /></a>
			</td>
			<td>
				Le projet Webconverger support financièrement le projet
				SliTaz avec une donation mensuelle. Bises à l'équipe
				Webconverger pour leur support !
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
