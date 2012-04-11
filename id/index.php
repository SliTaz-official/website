<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (id)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="en" content="SliTaz indonesian" />
	<meta name="author" content="AjiNalo" />
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Halaman Utama</h4>
		<p>
			SliTaz didistribusikan dalam bentuk LiveCD dan berukuran
			kurang lebih 30MB. Sistemnya cepat dan responsif, bersih
			dan dukungan yang kuat. SliTaz itu sederhana dan intuitif,
			menyediakan desktop yang elegan tetapi tetap ringan, tool
			konfigurasi yang mudah dan terdokumentasi dengan detil.
		</p>
		<div class="button" style="text-align: left;">
			Download:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<p>
		SliTaz Indonesian website needs a maintainer and contributors. You
		can contact us on the
		<a href="http://scn.slitaz.org/groups/i18n/">i18n group</a>.
	</p>
</div>

<h2>Headlines</h2>

<div class="box">
	<img src="/images/news.png" alt="[ ]" />
	<a href="http://scn.slitaz.org/">Berita dari Blog</a> | 
	<a href="http://doc.slitaz.org/en:newsletter:start">Newsletter Bulanan</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li id="d20120410">
		<strong>10 Apr 2012 - SliTaz GNU/Linux 4.0 Release</strong>
	<p>
		Para kontributor Slitaz dengan bangga mengumumkan tentang rilis
		GNU/Linux Slitaz 4.0, versi stabil terbaru dari distribusi yang ada.
		Usaha komunitas selama dua tahun telah menghasilkan sistem produksi
		yang stabil dengan kemampuan startup yang lebih cepat dan lebih dari
		1000 paket baru yang bisa diinstal.
	</p>
	<p>
		Slitaz menawarkan sebuah desktop grafis yang lengkap dalam kapasitas
		35MB, didukung dengan OpenBox dan LXDE yang bisa bekerja sepenuhnya di
		RAM dengan hanya 192MB. Pengaturan baru 4 in 1 memungkinkan untuk
		menginstalnya di harddisk yang hanya memiliki kapasitas 48MB dengan
		memilih secara otomatis konfigurasi software yang sesuai.
	</p>
	<p>
		Utilitasnya lebih baik. TazPkg dilengkapi dengan sistem notifikasi
		baru; ia lebih cepat walaudemikian bertambahnya jumlah paket dan
		TazPanel memungkinkan untuk memusatkan pengaturan sistem.
		Download image ISO SliTaz 4.0 dari mirror kami:
		<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	</p>
	</li>
	<li>
		<strong>03 Mar 2012 - SliTaz 4.0-RC2</strong>
	<p>
		Tim Slitaz dengan bahagia mengumumkan rilis terbarunya Slitaz 4.0-RC2.
		Kami telah melakukan perbaikan pada bugs dari RC1 dan pada beberapa
		tools bikinan pengguna akhir seperti TazPKG, TazPanel dan TazUSB.
		Koneksi Wifi akan lebih mudah dilakukan lewat TazPanel atau wifibox
		yang baru. TazPKG dengan integrasi desktop yang lebih baik dan sebuah
		sistem notifikasi baru. 
	</p>
	<p>
		Versi baru ini dilengkapi dengan paket Xorg lengkap dan dukungan 
		DRI termasuk juga driver NV, Intel, Geode dan Vesa yang bisa 
		langsung digunakan. Kami juga telah me-rebuild ulang keseluruhan 
		paket sekali lagi dan menghemat lebih kurang 2Mb di dalam LiveCD
		inti, jadi kita bisa memasukkan Lxrandr, Parcellite dan klien
		BiTorrent (transmission). Kami ingin berterima kasih kepada semua yang
		telah mencoba RC yang pertama, dan RC2 ini udah mendekati rencana
		rilis Slitaz 4.0 dalam 2 minggu ke depan. Download image ISO RC2 dari
		mirror kami:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li> 

	<li>
		<strong>23 Feb 2012 - SliTaz 4.0 RC1</strong>
	<p>
		Tim Kontributor SliTaz dengan bangga mengumumkan bahwa dalam waktu
		dekat akan dirilis SliTaz 4.0 RC pertama. SliTaz bisa nge-boot dalam
		waktu 10 sampai 12 detik di PC dengan hardware baru, dan dengan ISO 4
		dalam 1 anda bisa melakukan installasi sebuah desktop SliTaz lengkap
		hanya dengan RAM sebesar 48Mb. ISO 4 dalam 1 bisa melakukan deteksi
		memori secara otomatis dan nge-boot SliTaz dalam Text Mode, dalam
		lingkungan X minimal atau sebuah desktop lengkap.
	</p>
	<p>
		SliTaz 4.0 akan dilengkapi dengan lebih dari 3000 paket yang telah
		teruji di dalam reponya dan seri RC akan memungkinkan kita melacak bug
		terakhir. Dari rilis Cooking terakhir kami paket-paket telah dibikin
		ulang dua kali untuk memastikan kualitasnya.
	</p>
	<p>
		ISO RC1 ini akan menampilkan pertamakali kepada anda sebuah menu
		grafis terbaru, pengaturan bahasa dan keyboard dalam bentuk grafis,
		sebuah tata letak dan artwork desktop baru dan juga sebuah Installer
		dari Comman Line, dan Web Interface yang bisa diakses lewat TazPanel.
		Anda bisa mendownload ISO baru ini dari mirror kami:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p> 
	</li>

	<li>
		<strong>28 Mar 2010 - SliTaz GNU/Linux 3.0 pelepasan</strong>
	<p>Setelah satu tahun masa pengembangan, SliTaz versi 3.0 telah dirilis.
	Sekarang lebih simple, lebih cepat dan lebih kecil (ukuran filenya),
	diperkuat dengan sekira 2300 file paket. Desktopnya menggunakan
	LXPanel, openbox dan Xorg 7.4. Aplikasi bawaan berupa Midori, Rysnc,
	Alsa, ePDFview dan gFTP. Toolchain baru termasuk GCC 4.4.1 dan kernel
	2.6.30.6. System intinya berupa file image sebesar 30MB dan LiveCD
	mulai dari 8MB. Anda bisa baca catatan rilis untuk informasi
	selanjutnya dan download dari salah satu mirror resmi project ini.
	</p></li>
</ul>

<!-- End of news -->
</div>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
