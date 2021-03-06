﻿<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Documentação em Português</title>
	<meta name="description" content="Documentação em português do SliTaz GNU/Linux"/>
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, opensource software, livecd na RAM"/>
	<meta name="author" content="Claudinei Pereira"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.pt.html");
include("../../lib/html/nav.pt.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Documentação em Português</h2>
<p>
    A documentação oficial do SliTaz está disponível na
    wiki elaborada pela comunidade. Os manuais e um guia
    introdutório são fornecidos por cada LiveCD do SliTaz,
    acessíveis através da entrada "Documentação" no menu.
</p>
<ul>
    <li><a href="http://doc.slitaz.org/pt:start">Community Wiki</a></li>
    <li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.pt.html"
        >Primeiros Passos</a></li>
</ul>

<h2>Handbook &amp; Cookbook</h2>

<p>
	<a href="http://doc.slitaz.org/pt:handbook:start">Handbook</a> 
	- Manual SliTaz. Utilização do LiveCD, gerenciamento de pacotes, 
	rede ou administração do sistema e instruções específicas. Este 
	livro é um esforço da comunidade para fornecer uma documentação de 
	alta qualidade aos usuários do SliTaz. Ele o ajudará nos primeiros
	passos no SliTaz GNU/Linux e mostrará como configurar o sistema
	conforme suas necessidades e preferências.
</p>
<p>
	<a href="http://doc.slitaz.org/pt:cookbook:start">Cookbook</a>
	- Livro de Receitas. Instruções de utilização do wok e das receitas
	de pacotes.
</p>

<h2>Manuais</h2>    

<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.pt.html"
		>Manual Tazpkg</a> - Gerenciador de pacotes do SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.pt.html"
		>Manual Tazlito</a> -  Utilitário LiveCD do SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.pt.html"
		>Manual TazUSB</a> -  Utilitário LiveUSB do SliTaz.</li>
	<li><a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.pt_BR.html"
		>Manual Cookutils</a> -  Criador de Pacotes do SliTaz.</li>
</ul>

<h2>Nova Documentação Wiki</h2>    

<p>
	Toda a documentação do SliTaz foi movida: os manuais, guias e 
	outros recursos agora estão disponíveis em
	<a href="http://doc.slitaz.org/pt:start">doc.slitaz.org</a>
</p>

<h2>Notas de Lançamento</h2>

<p>
	As notas de lançamento do SliTaz fornecem informações detalhadas 
	sobre a versão estável e dão dicas úteis que o ajudarão a começar
	a usar o sistema. No LiveCD base as notas de lançamentos estão 
	disponíves no menu "Documentação"
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.pt.html";
		if (!file_exists($file)) {
			$file = "releases/".$release.".0/relnotes.pt_BR.html";
			if (!file_exists($file)) {
				$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
				if (!file_exists($file))
					break;
			}
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "		Notas de Lançamento</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
