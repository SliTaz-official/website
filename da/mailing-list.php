<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@live.dk
   Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
   visit our hackerspace every tuesday evening for free - always hot coffee -->   
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
    <title>SliTaz - Postliste</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="slitaz brugere udviklere postliste" />
    <meta name="keywords" content="slitaz postliste email diskution" lang="da" />
    <meta name="author" content="Linux User"/>
	<?php include("../lib/html/meta-link.html"); ?>
    <style type="text/css">
	table {
		border: 1px solid #000000;
		width: variable;
		border-collapse: collapse;
	}
	td {
		border: 1px dotted #6495ed;
		width: variable;
		padding: 2px;
	}
	.rowodd {
		background-color: #ffffff;
	}
	.roweven {
		background-color: #e1ffe1; /* the tower */
	}
	th {
		border: 1px solid #000000;
		width: variable;
		padding: 4px;
	}
	.alignright {
		text-align: right;
	}
	</style>
</head>
<body>

<?php include("../lib/html/header.da.html"); ?>

<?php include("../lib/html/header.da.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.da.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Postliste</h4>
		<p>
			SliTaz bidrag, diskutioner og annonceringer (inc. 
			support og udvikling). Alt dette er del af postlisten - 
			Deltag nu for at få hjælp eller blive involveret i projektet.
		</p>
		<p>
			<img src="../images/users.png" alt="users.png" />
			Du kan også følge os på <a href="http://scn.slitaz.org/">SliTaz netværket</a>
			og support <a href="http://forum.slitaz.org/">forumét</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php"><img src="../images/locale.png" alt="Sprog:" /></a>
	<b>Dansk</b>
	<a href="../de/mailing-list.php">Deutsch</a>
	<a href="../en/mailing-list.php">English</a>
	<a href="../es/mailing-list.php">Español</a>
	<a href="../fr/mailing-list.php">Français</a>
	Indonesian
	<a href="../it/mailing-list.php">Italiano</a>
	<a href="../pt/mailing-list.php">Português</a>
	<a href="../ru/mailing-list.php">Русский</a>
	中文
</div>

<!-- Content -->
<div id="content">

<h2>SliTaz postliste</h2>

<ul>
	<li><a href="#about">Om postlisten</a> - Support og udvikling.</li>
	<li><a href="#usage">Brug postlisten</a> - Abonement og arbejdsgang.</li>
	<li><a href="#archives">Postlistens arkiv</a> -  Læs og/eller gennemsøg 
		arkiverede beskeder.</li>
</ul>

<a name="about"></a>
<h3>Om postlisten</h3>
<p>
Diskutionslisten (postliste) er den vigtigste kommunikationsvej i SliTaz samfumdet.
Listen er åben for alle, du kan til enhver tid frit tilmelde eller afmelde
postlisten.
Den er et effiktivt middel til samarbejde og bruges til at formidle gratis
teknisk support til brugere af SliTaz.  
Udviklere, øvede brugere, korrekturlæsere, etc. bruger den samme liste til
at håndtere projektets udvikling.
 Brug af den samme liste til support og udvikling gør at vi når et bredere publikum,
 hvilket resulterer i et hurtigere og mere præcist svar.
 Medlemmerne af listen er alle frivillige og gør det bedste de kan i deres fritid.
 Høflighed og ordentlighed er en pligt  og en lille smule humor skader ingen.
</p>
<p>
<em>Postlisten</em> bruges til at sende og modtage beskeder. Det betyder
at alle registrerede medlemmer kan poste til listen og modtage alle beskeder
postet af andre medlemmer. 
Beskeder sendes af listemotoren  på 
<a href="http://www.tuxfamily.org/">TuxFamily</a> drevet af den glimrende
<a href="http://www.vhffs.org/">VHFFS</a>.
</p>
<h4>Høflighed</h4>
<p>
Postlisten bruges af nogle ofte passionerede og følsomme mennesker.
Gør en ekstra indsats for at behandle andre med respekt, selv om du 
selv føler dig dårligt behandlet. Hvis du har noget negativt eller kritisk
at sige, så post venligst ikke. Hvis en person opførersig sig uhensigtsmæssigt,
kontakt da en SliTaz udvikler.
</p>


<a name="usage"></a>
<h3>Brug postlisten</h3>
<p>
For at poste på listen, skal du først tegne abonnement, du vil derefter
modtage bekræftigelsesbesked. Brevet indeholder et bekræftigelsesnummer
som du skal retunere til listens administrator (dette modvirker spam). 
Når først brevet og bekræftigelsesbeskeden er modtaget, kan du poste på listen
og modtage alle beskeder der er postet.
Bemærk at beskeder kan filtres af dit foretrukne postprogramel til en specifik 
mappe.
Det anbefales at benytte "Besvar" eller "Reply" for at besvare en besked, 
således at diskutionstråden kan følges ordentligt.
</p>
<ul>
    <li>Administrativ addresse :
    <a href="mailto:slitaz-request@lists.tuxfamily.org"
     >slitaz-request@lists.tuxfamily.org</a></li>
    <li>Abonnement fås med emnet: subscribe</li>
    <li>Abonnement ophæves med emnet: unsubscribe</li>
    <li>Hjælp fås med emnet: help</li>
    <li>Post til listen sendes til:
    <a href="mailto:slitaz@lists.tuxfamily.org">slitaz@lists.tuxfamily.org</a></li>
</ul>
<h4>Format</h4>
<p>
Beskeder skal sendes som rå tekst og ikke HTML og linielængden justeres til
72-80 tegn, så menesker der benytter et tekstbaseret postprogram let kan 
læse dem.
Beskedernes format laves automatisk rigtigt med de fleste gode postprogrammer
så som Sylpheed og tillader også en mere ligefrem læsning af arkivet.
Det er også anbefalelsesværdigt at fjerne unødvendige citeringer og
lave være med at vedhæfte store filer.
</p>

<a name="archives"></a>
<h3>Postlistens arkiv</h3>
<p>
Postlisten er et offentligt forum, alle beskeder bliver arkiveret og er
søgbare online. Dette tillader de ikke-registerede at følge listen, det er
også en god kilde til information om specifikke emner. Listen arkiveres
hver nat og du kan let gennemse arkivet via TuxFamilyens listemotor.
Beskeder sorteres efter måned og dato eller efter diskutionstråd
(<em>Thread</em>) :
<a href="http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/"
 >Postlistens arkiv</a>
</p>

<div>
<object type="text/html" width="100%" height="345" data="../lib/archives.php">
</object>
</div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.da.html"); ?>

</body>
</html>
