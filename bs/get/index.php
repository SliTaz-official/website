<!DOCTYPE html>
<html lang="bs">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Preuzimanje</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD free download"/>
	<meta name="keywords" lang="en" content="source, iso, livecd, get, free"/>
	<meta name="author" content="Christophe Lincoln, Paul Issot"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.bs.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.bs.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Preuzimanje</h4>
		<p>
			Preuzmite najnoviju stabilnu verziju za proizvodne svrhe ili 
			solidan desktop okruženje. Koristite kuhanje verziju za
            testiranje da možete pomoći nama savršiti distribuciju.
		</p>
		<div class="button">
			Brzo Preuzimanje:
			<?php echo "<!-- a href='$stable_iso'>SliTaz $stable_ver</a -->
				<a href='$mirror/rolling/slitaz-rolling.iso'>SliTaz Rolling</a>"; ?>
		</div>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Preuzmi SliTaz</h2>

<div class="box-warning"><p>Prije korištenja SliTaz — pročitajte ovaj post: <a href="http://forum.slitaz.org/topic/-important-info-about-meltdown-and-spectre-">Important info about Meltdown and Spectre</a></p></div>

<ul>
	<!-- li><a href="#stable">LiveCD Stabilna verzija.</a> - 
		Bootable ISO slika trenutne stabilne verzije.</li -->
	<li><a href="#rolling">LiveCD Rolling verzija</a> - 
		Bootable ISO slika od rolling verzije.</li>
	<li><a href="#floppy">Floppy disketa</a> - Bootable 
		pokretanje diska za pokretanje LiveCD, USB ključa, itd.</li>
	<li><a href="flavors.php">LiveCD za ukus</a> - Okusi i loram.</li>
</ul>

<div class="box">
	<p>
		Pomozi projektu putem malih donacija ili postati službeni
		<a href="../sponsor/">sponzor</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Generalna informacija</h3>

<p>
	Ovaj dio stranice omogućava preuzimanje besplatni primjerak 
	SliTaz GNU / Linux LiveCD ili steći alate i alate izvornog koda. 
	Za početak korištenja slike LiveCD ISO, možete se uputiti na
	<a href="../doc/">dokumentaciju</a>. Također možete naći pomoć i 
	podršku na <a href="http://forum.slitaz.org/">Engleskim Forum</a>.
</p>

<h3>Mirori</h3>

<p>
	SliTaz je miroran upravo u Francuskoj <a href="http://www.ads-lu.com/">ADS</a>,
	i <a href="http://www.tuxfamily.org/">TuxFamily</a>.
	U USA od <a href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a>
	i u Brazilu od <a href="http://www.c3sl.ufpr.br/en/index.html">UFPR</a>. Ogromno hvala!
</p>

<ul>
	<li>Francuska - Mirror hostiran od TuxFamily preko
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> ili
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<!-- li>Kina - Mirror hostiran od LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li -->

	<li>USA - Mirror hostiran od Ibiblio preko
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a> ili
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>Brazil - Mirror hostiran od UFPR preko
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> ili
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<h3 id="sources">Izvori</h3>

<p>
	Tazpkg (Paket menadžer), Tazlito (SliTaz Live Tool), Tazwok (Izvor
graditelja), Tazusb (LiveUSB Tool) i SliTaz Alati tarballs se može skinuti sa 
	<a href="http://www.tuxfamily.org/">TuxFamily</a>
	mirora. Imajte na umi da su svi programi instalirani po defaultu na 
	SliTaz i izvorni kod je komentirao na engleskom jeziku. Preuzmite 
	izvore sa
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> ili
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<!--
<h2 id="stable">LiveCD - Stabilna verzija</h2>

<p>
	SliTaz stabilna verzija pruža zrel operacijski sustav, široko 
	testiran od aktivne zajednice. Jezgra LiveCD vam nudi veliki
    izbor višenamjenski paketa pažljivo integrirani u distribuciji, što je 
    rezultiralo u koherentan i robustan sustav.
	< ?php echo "Current $stable_ver stable version was released on $stable_rel."; ? >
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
	Bootable CDROM slika sa svim dostupnim paketima za stabilnu verziju 
	generira svaki dan. Ona također sadrži kopiju web stranice i može 
	se koristiti bez internetske veze putem install.sh skripte.
</p>

<div class="box-dl"><p>
	< ?php echo "Collection of SliTaz GNU/Linux $stable_ver packages ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>
-->

<h2 id="rolling">LiveCD - Rolling verzija</h2>

<p>
	SliTaz Rolling LiveCD se stalno razvija, u potpunosti 
	iskorištena, to vam omogućuje da treba testirati najnovije poboljšanja i 
	pakete, tražiti nove značajke ili prijaviti bugove koji nam pomažu 
	da se pripremi za stabilnu verziju.
	SliTaz Rolling ISO released weekly.
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Rolling (43 MB) - 
	<a href='$mirror/rolling/slitaz-rolling.iso'>slitaz-rolling.iso</a>
	[ <a href='$mirror/rolling/slitaz-rolling.md5'>md5</a> ]"; ?>
</p></div>

<p>
	Rolling flavors can be found <a href="http://mirror.slitaz.org/iso/rolling/"
	target="_blank" rel="noopener noreferrer">on mirror</a>.
</p>

<!-- p>
	Bootable DVD slika svih dostupnih paketa za kuhanje verzije je 
	generirana svaki dan. Ona također sadrži kopiju web stranice i može
    se koristiti bez internetske veze putem install.sh skripte. 
    Napomena: Ova slika također može biti
	<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">
	instalirana na USB ključ</a>, ali ovaj proces briše sve podatke.
</p>

<div class="box-dl"><p>
	< ?php echo "Collection of SliTaz GNU/Linux Cooking packages ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ? >
</p></div -->

<h2 id="floppy">Floppy boot disketa</h2>

<p>
	Ove diskete mogu početi SliTaz na starim računalima sa ili bez 
	CD-ROM-a. To može dignuti SliTaz iz USB ključe, SliTaz 
	CD / DVD, hard disk, LAN od PXE, pa čak i
	<a href="http://boot.slitaz.org/">Internet sa gPXE</a>.
</p>

<div class="box-dl"><p>
	Floppy disketa (1.44MB) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">slika</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>
	Možete pisati ovaj floppy sliku sa SliTaz bootfloppybox,
	<a href="http://en.wikipedia.org/wiki/RaWrite">Windows rawrite</a>
	ili jednostavno dd (dd if=floppy-grub4dos of=/dev/fd0).
</p>

<p>
	Floppy <a href="http://mirror.slitaz.org/floppies/">skup slika</a>
	također je za ljude koji ne mogu koristiti CD-ROM, 
	USB ključ ili Ethernet kartice.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.bs.html"); ?>

</body>
</html>
