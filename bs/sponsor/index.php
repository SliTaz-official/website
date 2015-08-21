<!DOCTYPE html>
<html lang="bs">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Sponzorstvo</title>
	<meta name="description" content="SliTaz GNU/Linux asso sponsor"/>
	<meta name="keywords" lang="en" content="slitaz pro, slitaz sponsor, support"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.bs.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.bs.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Sponzorstvo</h4>
		<p>
			SliTaz je neprofitni temelj projekat i mi smo uvijek u 
			potrazi za novim načinima za monetarne potpore projekta i 
			dodavanje novog hardvera.
		</p>
		<p>Možete pomoći projektu sa malom donacijom:</p>
		<?php include("../../lib/html/donate.html"); ?>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">
	
<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Naši Sponzori</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2>SliTaz Sponzorstvo</h2>

<p>
	Prvo, velika zahvala našim <a href="#cur">trenutnim sponzorima</a> i 
	svima koji nas podržavaju sa malim, ali vrlo važnim donacijama za 
	projekat. Projekt je još vrlo mlad, ali za pet godina aktivnog 
	razvoja smo odrasli i postali profesionalni operativni sustav koji 
	je siguran za korištenje u proizvodnim okruženjima.
</p>



<h3>Monetarna podrška programera</h3>

<p>
	Koristite li SliTaz u svoj projekt i želite vidjeti distribuciju 
	dobivanje još više profesionalno sa glavnim programerima koji rade na 
	projektu sa punim radnim vremenom? Ako je tako, možete sponzorirati 
	SliTaz Asocijaciju udruge koja će platiti programera za rad u potpunosti 
	100% na SliTaz. Mi zapravo nemamo dovoljno novaca platiti developere za cijelu 
	godinu, ali iznos donacija i monetarne potpore omogućuje nam 
	stručne rade tri do četiri mjeseca godišnje na projektu. Uz vrijeme 
	nadamo se da ćemo imati programere na puno radno vrijeme na SliTaz.
</p>

<h3>Hardver sponzor</h3>

<p>
	Kao open source projekt, mi obično razvijamo SliTaz na našim osobnim 
	računalima, ali mi ponekad moramo promijeniti naše osobne sustave i 
	zatim treba novi hardver. Mi također ne možemo testirati distribuciju na 
	nekim specifičnim računalima zato što ih nemamo. 
	Ako ste proizvođač hardvera i želite vidjeti Slitaz da radi "out-of-the-box" 
	na računalima, možete nam poslati računalo, tako da možemo raditi 
	i testirati na njemu.
</p>
<p>
	SliTaz je izgrađen sa alatima za sve kompilacije i željeli 
	bismo SliTaz na ARM platformi. Za to nam je potreban ARM 
	hardver da bo mogli testirati naše binaries i prilagoditi 
	SliTaz na ARM arhitekturi.
</p>

<h3>Hardver recikliranje</h3>

<p>
	SliTaz je dobra distribucija i za stare računale, trebaju nam neki stari 
	hardveri za testiranje. Također, možemo reciklirati neke svoje stare 
	hardvere da unaprijed instalira SliTaz na njega, a zatim ga prodati 
	na niskim troškovima. To omogućuje jeftini, ali dobar kompjuter i omogućuje 
	nam malo novca, i također pružaju uslugu.
</p>

<h2>Kontakt i informacije</h2>

<p>
	Ako ste zainteresovani i želite više informacija o monetarnim ili hardvera
    sponzorstvo, možete kontaktirati SliTaz Asocijaciju putem pošte na &lt;asso at
	slitaz.org&gt; ili preko <a href="../asso/#postal">postova</a>.
</p>
<p>
	Sponzoriranje SliTaz projekta ćete dobiti svoj logotip i web stranice 
	URL, na ovoj stranici koja je povezana sa svim drugim stranicama na 
	SliTaz web stranici. Također ćete biti u mogućnosti da se javno tvrde svoje 
	sudjelovanje u čistom Open Source projektu i dobiti više pozornosti 
	od Besplatnog Softvera i Linux korisnika.
</p>

<h2 id="cur">Naši trenutni sponzori</h2>

<table>
	<tbody>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png" alt="Allied Data Sys"
				style="float: left;" /></a>
			</td>
			<td>
				Allied Data Sys - ADS sponzor je glavni SliTaz miror i 
				nudi nam puni pristup virtualnom računalu sa brzom vezom. 
				To nama omogućuje korištenje uređaja kako mi želimo, bez 
				ikakvog ograničenja. Zahvaljujemo se ADS za sve
                usluge i brz odgovor na sva pitanja i zahtjeve sto smo imali.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="https://duckduckgo.com/?t=slitaz"><img
				src="/images/sponsor/ddg.png" alt="DuckDuckGo"
				style="float: left;" /></a>
			</td>
			<td>
				DuckDuckGo tražilac - DDG je potpisao partnerstvo sa SliTaz
				Asocijacijom da dijeli prihode pd generirani 
				<em>sponzorirani linkovia</em> unutar rezultata pretraživanja 
				vidzen pod SliTaz korisnicima. Dijelimo 50% prihoda tako da 
				pomoću DDG (DuckDuckGo) pomaže SliTaz projektu. DuckDuckGo 
				je tražilac sa načinom više izravnih odgovora, manje spama, vrlo dobar 
				i pravi korisnicima privatnost.
			</td>
		</tr>
		<!-- <tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://cosi.clarkson.edu"><img
				src="/images/sponsor/cosi.png" alt="Clarkson Open Source Institute"
				style="float: left;" /></a>
			</td>
			<td>
				The Clarkson Open Source Institute - COSI sponzorira naš 
				klen server i nudi nam puni pristup virtualnom kompjuteru. 
				Mi smo ponosni raditi sa COSI koja je osnovana za promicanje 
				Open Source softvera (OSS) i osiguraje opremu i podršku za 
				studentske projekte. Zahvaljujući tim COSI za podršku 
				i brzu reakciju na bilo koji naših zahtjeva.
			</td>
		</tr> -->
	</tbody>
</table>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.bs.html"); ?>

</body>
</html>
