<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz (pt) - Downloads</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD free download" />
    <meta name="keywords" lang="pt" content="fonte, iso, livecd, obter, livre" />
    <meta name="author" content="Claudinei Pereira" />
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php 
include("../../config.php");
include("../../lib/html/header.html")
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.pt.html") ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Obtenha o SliTaz</h4>
		<p>
			Baixe a última versão estável para fins de produção ou
			um ambiente de trabalho sólido. Use a versão Cooking
			para testar e nos ajudar a melhorar a distribuição.
		</p>
		<div class="button">
			Download:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../da/get/">Dansk</a>
	<a href="../../de/get/">Deutsch</a>
	<a href="../../en/get/">English</a>
	<a href="../../es/get/">Español</a>
	<a href="../../fr/get/">Français</a>
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Português</a>
	<a href="../../cn/get/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Downloads</h2>

<ul>
    <li><a href="index.html#stable">Versão stable (estável) do LiveCD</a> -
    Imagem ISO inicializável da versão estável mais recente.</li>
    <li><a href="index.html#cooking">Versão cooking (testes) do LiveCD</a> -
    Imagem ISO inicializável da versão de testes mais recente.</li>
	<li><a href="index.html#floppy">Versão em disquete</a> - Disquete de boot que pode iniciar
	a versão LiveCD, uma mídia USB, etc.</li>
    <li><a href="flavors.html">Variantes do LiveCD</a> - Variantes e loram.</li>
</ul>

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
	na França, por <a href="http://www.ads-lu.com/" target="_blank">ADS</a>
	e <a href="http://www.tuxfamily.org/">TuxFamily</a>. Na Suiça por
	<a href="http://mirror.switch.ch/">SWITCHmirror</a> e na China por
	LupaWorls.
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

	<li>China - Mirror hospedado LupaWorld
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>
</ul>

<a name="sources"></a>
<h3>Fontes</h3>
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

<a name="stable"></a>
<h2>Versão stable (estável) do LiveCD</h2>
<p>
	A versão estável do SliTaz oferece um sistema operacional maduro, largamente
	testado por uma comunidade ativa. O LiveCD base oferece uma grande seleção
	de pacotes variados cuidadosamente integrados à distribuiçao, o que resulta
	num sistema coerente e robusto.
	<?php echo "A atual versão estável $stable_ver lançada em: $stable_rel."; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p>
	Uma imagem de CDROM bootável com todos os pacotes disponíveis da 
	atual versão é gerada todos os dias. Ela também contém uma cópia do
	website e possibilita a instalação de pacotes sem a necessidade de
	conexão com a internet, por meio do script install.sh
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Coleção dos pacotes da versão $stable_ver do SliTaz GNU/Linux ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>Versão cooking (testes) do LiveCD</h2>
<p>
	A versão de testes do SliTaz é constantemente desenvolvida, totalmente usável.
	Permite a você testar as ultimas melhorias e pacotes, solicitar novas
	funcionalidades ou reportar algum bug para nos ajudar na preparação de uma
	versão estável.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
Uma imagem de DVD bootável com todos os pacotes disponíveis da versão Cooking é
gerada todos os dias. Ela também contém uma cópia do website e possibilita a
instalação de pacotes sem a necessidade de conexão com a internet, por meio do
script install.sh. Observação: esta imagem pode ser
<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">instalada em uma mídia USB</a>,
porém isto irá sobrescrever qualquer dado existente na mídia.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Coleção dos pacotes da versão Cooking do SliTaz GNU/Linux ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<a name="floppy"></a>
<h2>Disquete de boot</h2>
<p>
	A versão em disquete é utilizada para efetuar o boot do SliTaz em pc's antigos,
	mesmo que não possuam unidade de CDROM. Pode-se efetuar o boot de uma instalação
	do SliTaz feita em uma mídia USB, de um CD/DVD, do disco rígido, via lan pelo PXE
	e até mesmo pela internet com o <a href="http://boot.slitaz.org/">gPXE</a>.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	Disquete (1,44 Mb) -
	<a href="http://slitaz.c3sl.ufpr.br/boot/floppy-grub4dos">imagem</a>
	[ <a href="http://slitaz.c3sl.ufpr.br/boot/floppy-grub4dos.md5">md5</a> ]
</p>

<p>
	Um <a href="http://mirror.slitaz.org/floppies">
	conjunto de imagens para disquete</a> também está disponível para pessoas
	que não podem usar cdrom, mídias USB ou conexões ethernet
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html") ?>

</body>
</html>
