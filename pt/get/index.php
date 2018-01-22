<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz (pt) - Downloads</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD free download"/>
	<meta name="keywords" lang="pt" content="fonte, iso, livecd, obter, livre"/>
	<meta name="author" content="Claudinei Pereira"/>
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php 
include("../../config.php");
include("../../lib/html/header.pt.html");
include("../../lib/html/nav.pt.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Obtenha o SliTaz</h2>
<p>
    Baixe a última versão estável para fins de produção ou
    um ambiente de trabalho sólido. Use a versão Cooking
    para testar e nos ajudar a melhorar a distribuição.
</p>

<h2>Downloads</h2>

<ul>
	<!-- li><a href="#stable">Versão stable (estável) do LiveCD</a> -
		Imagem ISO inicializável da versão estável mais recente.</li -->
	<li><a href="#rolling">Versão rolling (testes) do LiveCD</a> -
		Imagem ISO inicializável da versão de testes mais recente.</li>
	<li><a href="#floppy">Versão em disquete</a> - Disquete de boot que pode iniciar
		a versão LiveCD, uma mídia USB, etc.</li>
	<li><a href="flavors.php">Variantes do LiveCD</a> - Variantes e loram.</li>
    <li><a href="http://arm.slitaz.org/rpi/">SliTaz Raspberry Pi</a>
	- Distribuição customizada do Projeto SliTaz ARM</li>
</ul>

<div class="box-up">
	<p>
        Ajude o projeto com pequenas doações ou torne-se um 
		<a href="../sponsor/">patrocinador oficial</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>

<h3>Informações Gerais</h3>

<p>
	Esta parte do website permite a você baixar uma cópia gratuita do LiveCd do
	SliTaz GNU/Linux ou obter os fontes das ferramentas e utilitários. Para iniciar
	a utilização da imagem ISO do LiveCD você pode consultar a
	<a href="../doc/">documentação</a> online. Também pode encontrar ajuda e
	suporte no <a href="http://forum.slitaz.org/">Fórum</a>.
</p>

<h3>Mirrors</h3>

<p>
	O SliTaz possui mirrors no Brasil oferecido pelo
	<a href="http://www.c3sl.ufpr.br/">Centro de Computação Científica
	e Software Livre</a> (Agradecimentos a Carlos Carvalho, da UFPR),
	na França, por <a href="http://www.ads-lu.com/" target="_blank" rel="noopener noreferrer">ADS</a>
	e <a href="http://www.tuxfamily.org/">TuxFamily</a>. Na Suiça por
	<a href="http://mirror.switch.ch/">SWITCHmirror</a><!-- e na China por
	LupaWorls -->.
</p>

<ul>
	<li>Suiça - Mirror hospedado por SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> ou
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>Brasil - Mirror hospedado pela UFPR (2 Gbit/s)
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> ou
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>

	<li>França - Mirror hospedado Mésobius (100 Mps)
	<a href="http://slitazmirror.linuxembarque.com">HTTP</a></li>

	<li>França - Mirror hospedado TuxFamily via
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> ou
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<!-- li>China - Mirror hospedado LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li -->
</ul>

<h3 id="sources">Fontes</h3>

<p>
	Tazpkg (gerenciador de pacotes), Tazlito (Ferramenta Live do SliTaz), Tazwok
	(gerador de fontes), Tazusb (ferramenta LiveUSB) e os tarballs das ferramentas
	do SliTaz podem ser baixados do mirror
	<a href="http://www.tuxfamily.org/">TuxFamily</a>. Note que todos os utilitários
	são instalados por padrão no SliTaz e o código fonte é comentado em inglês.
	Baixe os fontes por
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> ou
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<!--
<h2 id="stable">Versão stable (estável) do LiveCD</h2>

<p>
	A versão estável do SliTaz oferece um sistema operacional maduro, largamente
	testado por uma comunidade ativa. O LiveCD base oferece uma grande seleção
	de pacotes variados cuidadosamente integrados à distribuiçao, o que resulta
	num sistema coerente e robusto.
	< ?php echo "A atual versão estável $stable_ver lançada em: $stable_rel."; ? >
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
	Uma imagem de CDROM bootável com todos os pacotes disponíveis da 
	atual versão é gerada todos os dias. Ela também contém uma cópia do
	website e possibilita a instalação de pacotes sem a necessidade de
	conexão com a internet, por meio do script install.sh
</p>

<div class="box-dl"><p>
	< ?php echo "Coleção dos pacotes da versão $stable_ver do SliTaz GNU/Linux ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>
-->

<h2 id="rolling">Versão rolling (testes) do LiveCD</h2>

<p>
	A versão de testes do SliTaz é constantemente desenvolvida, totalmente usável.
	Permite a você testar as ultimas melhorias e pacotes, solicitar novas
	funcionalidades ou reportar algum bug para nos ajudar na preparação de uma
	versão estável.
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
Uma imagem de DVD bootável com todos os pacotes disponíveis da versão Cooking é
gerada todos os dias. Ela também contém uma cópia do website e possibilita a
instalação de pacotes sem a necessidade de conexão com a internet, por meio do
script install.sh. Observação: esta imagem pode ser
<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">instalada em uma mídia USB</a>,
porém isto irá sobrescrever qualquer dado existente na mídia.
</p>

<div class="box-dl"><p>
	< ?php echo "Coleção dos pacotes da versão Cooking do SliTaz GNU/Linux ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ? >
</p></div -->

<h2 id="floppy">Disquete de boot</h2>

<p>
	A versão em disquete é utilizada para efetuar o boot do SliTaz em pc's antigos,
	mesmo que não possuam unidade de CDROM. Pode-se efetuar o boot de uma instalação
	do SliTaz feita em uma mídia USB, de um CD/DVD, do disco rígido, via lan pelo PXE
	e até mesmo pela internet com o <a href="http://boot.slitaz.org/">gPXE</a>.
</p>

<div class="box-dl"><p>
	Disquete (1,44 Mb) -
	<a href="http://slitaz.c3sl.ufpr.br/boot/floppy-grub4dos">imagem</a>
	[ <a href="http://slitaz.c3sl.ufpr.br/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>
	Um <a href="http://mirror.slitaz.org/floppies">
	conjunto de imagens para disquete</a> também está disponível para pessoas
	que não podem usar cdrom, mídias USB ou conexões ethernet
</p>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
