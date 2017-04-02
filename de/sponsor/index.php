<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - Förderer</title>
	<meta name="description" content="SliTaz GNU/Linux asso sponsor">
	<meta name="keywords" lang="en" content="slitaz pro, slitaz sponsor, support">
	<meta name="author" content="Christophe Lincoln">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.de.html");
include("../../lib/html/nav.de.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">
	
<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>besondere Förderer</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2 style="margin-right: 220px;">SliTaz fördern</h2>

<p>
	SliTaz ist ein Projekt, das nicht auf Gewinn ausgerichtet ist. Daher suchen wir ständig
	neue Unterstützer, sei es finanziell oder durch Überlassung von Hardware.
</p>

<p>
	Zunächst gebührt unseren <a href="#cur">aktuellen Förderern</a> ein großer Dank und all
	denjenigen, die unser Projekt mit kleinen aber sehr wichtigen Spenden unterstützen.
	Das Projekt ist immer noch recht jung, aber in <?php echo date('Y')-2007 ?> Jahren aktiver
	Entwicklung sind wir gewachsen und SliTaz ist ein Betriebssystem von professioneller Qualität
	geworden, das auch in Produktivumgebungen eingesetzt werden kann.
</p>

<h3>Einen Entwickler finanziell unterstützen</h3>

<p>
	Setzen Sie SliTaz ein und möchten, dass die Distribution durch Einsatz eines
	vollzeitbeschäftigten Entwicklers noch professioneller wird?
	Dann können Sie die SliTaz Association fördern, die einen Entwickler bezahlen wird, der
	seine ganze Arbeitskraft SliTaz widmen kann. Zur Zeit haben wir nicht genug Geld, um einen Entwickler
	ganzjährig zu beschäftigen, aber es reicht, einen Entwickler drei bis vier Monate im Jahr
	an SliTaz arbeiten zu lassen. Wir hoffen aber beizeiten professionelle Entwickler vollzeit mit SliTaz
	beschäftigen zu können.
</p>

<p>Unterstützen Sie das Projekt mit einer kleinen Spende:</p>
<?php include("../../lib/html/donate.html"); ?>

<h3>Förderung durch Hardware-Überlassung</h3>

<p>
	Als „Open Source“-Projekt wird SliTaz normalerweise auf den privaten Rechnern der Mitwirkenden entwickelt.
	Von Zeite zu Zeit müssen diese privaten Rechner ausgetauscht werden und wir brauchen neue Hardware.
	Auch können wir die Distribution auf einigen speziellen Rechnern nicht testen, da wir
	keinen Zugang zu solchen haben.
	Hardware-Hersteller, die gerne auf ihren Rechnern ein vorinstalliertes SliTaz laufen sehen möchten,
	können uns einen Rechner schicken, so dass wir ihn für sie präparieren können.
</p>
<p>
	SliTaz hat auch die Werkzeuge, ein System auf einer Plattform für eine andere Plattform zu erzeugen
	(„cross compilation“). Da wir SliTaz für die ARM-Plattform portieren möchten, brauchen wir ARM-Hardware um
	die passend übersetzten Programme testen zu können und SliTaz an die ARM-Architektur anpassen zu können.
</p>

<h3>Hardware-Wiederverwendung</h3>

<p>
	SliTaz ist bestens geeignet, alten Rechnern zu neuem Leben zu verhelfen. Daher benötigen
	wir auch einige alte Hardware, um SliTaz darauf zu testen. Wir könnten auch auf Ihrer
	alten Hardware SliTaz installieren und den Rechner dann billig verkaufen. Damit
	könnte jemand billig einen leistungsfähigen Rechner erwerben und wir könnten etwas Geld
	verdienen und eine nützliche Dienstleistung erbringen.
</p>

<h2>Kontakt und Information</h2>

<p>
	Wenn Sie interessiert sind und weitere Informationen über finanzielle oder materielle
	Förderungsmöglichkeiten wünschen, können Sie sich per elektronischer Post unter
	&lt;asso at	slitaz.org&gt; oder per	<a href="../asso/#postal">Briefpost</a> an die
	SliTaz Association wenden.
</p>
<p>
	Wenn Sie SliTaz fördern, wird Ihr Firmenzeichen und der URL Ihrer Internetpräsenz
	auf dieser Seite angezeigt, die mit allen anderen Seiten unserer Internetpräsenz
	verknüpft ist. Sie dürfen dann auch öffentlich bekanntmachen, dass Sie sich an einem
	reinen „Open Source“-Projekt beteiligen und erhalten damit mehr Aufmerksamkeit
	bei Nutzern von Linux und „Free Software“.
</p>

<h2 id="cur">Unsere jetztigen Förderer</h2>

<table>
	<tbody>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png" alt="Allied Data Sys"
				style="float: left; " /></a>
			</td>
			<td>
				Allied Data Sys - ADS fördert das Hauptdepot von SliTaz und
				gewährt uns vollen Zugang zu einer virtuellen Maschine mit einer
				schnellen Netzwerkverbindung. Dadurch können wir die Maschine
				unbegrenzt nach unseren Wünschen nutzen. Vielen Dank an ADS für
				diese Dienstleistung und schnelle Antworten auf alle Fragen und Anforderungen
				unsererseits.
			</td>
		</tr>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="https://duckduckgo.com/?t=slitaz"><img
				src="/images/sponsor/ddg.png" alt="DuckDuckGo"
				style="float: left;" /></a>
			</td>
			<td>
				DuckDuckGo Internetsuche - DDG ist mit SliTaz eine Partnerschaft
				eingegangen, um den Gewinn aus <em>sponsored links</em> zu teilen,
				die bei	Suchresultaten von SliTaz-Nutzern angesehen werden. Wir
				erhalten 50% des Gewinns. Daher nutzt die Verwendung von DDG unter
				SliTaz beiden Projekten. DuckDuckGo ermöglicht eine Internetsuche
				mit mehr Ergebnissen auf Anhieb, weniger Datenmüll, vielen Annehmlichkeiten
				und wahrem Schutz der Privatsphäre.
			</td>
		</tr>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="https://www.security-audit.com"><img
				src="/images/sponsor/security-audit.png" 
				alt="Website penetration testing"
				style="float: left;" /></a>
			</td>
			<td>
				Security Audit Systems offerieren unabhängige Penetrationstests
				für Internetpräsenzen von Firmen weltweit. Einer der führenden
				Anbieter in Großbritannien von Sicherheitsleistungen für Internetpräsenzen,
				der eine Reihe von Testdienstleistungen für die Sicherheit von Internetpräsenzen anbietet.
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
