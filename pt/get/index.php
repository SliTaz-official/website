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
			Baixe a �ltima vers�o est�vel para fins de produ��o ou
			um ambiente de trabalho s�lido. Use a vers�o Cooking
			para testar e nos ajudar a melhorar a distribui��o.
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
	<a href="../../es/get/">Espa�ol</a>
	<a href="../../fr/get/">Fran�ais</a>
	<a href="../../it/get/">Italiano</a>
	<a href="../../pt/get/">Portugu�s</a>
	<a href="../../cn/get/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Downloads</h2>

<ul>
    <li><a href="index.html#stable">Vers�o stable (est�vel) do LiveCD</a> -
    Imagem ISO inicializ�vel da vers�o est�vel mais recente.</li>
    <li><a href="index.html#cooking">Vers�o cooking (testes) do LiveCD</a> -
    Imagem ISO inicializ�vel da vers�o de testes mais recente.</li>
	<li><a href="index.html#floppy">Vers�o em disquete</a> - Disquete de boot que pode iniciar
	a vers�o LiveCD, uma m�dia USB, etc.</li>
    <li><a href="flavors.html">Variantes do LiveCD</a> - Variantes e loram.</li>
</ul>

<h3>Informa��es Gerais</h3>
<p>
	Esta parte do website permite a voc� baixar uma c�pia gratuita do LiveCd do
	SliTaz GNU/Linux ou obter os fontes das ferramentas e utilit�rios. Para iniciar
	a utiliza��o da imagem ISO do LiveCD voc� pode consultar a
	<a href="../doc/">documenta��o</a> online. Tamb�m pode encontrar ajuda e
	suporte no <a href="http://forum.slitaz.org/">F�rum</a>.
</p>

<h3>Mirrors</h3>
<p>
	O SliTaz possui mirrors no Brasil oferecido pelo
	<a href="http://www.c3sl.ufpr.br/">Centro de Computa��o Cient�fica
	e Software Livre</a> (Agradecimentos a Carlos Carvalho, da UFPR),
	na Fran�a, por <a href="http://www.ads-lu.com/" target="_blank">ADS</a>
	e <a href="http://www.tuxfamily.org/">TuxFamily</a>. Na Sui�a por
	<a href="http://mirror.switch.ch/">SWITCHmirror</a> e na China por
	LupaWorls.
</p>

<ul>
	<li>Sui�a - Mirror hospedado por SWITCHmirror (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> ou
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

    <li>Brasil - Mirror hospedado pela UFPR (2 Gbit/s)
    <a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> ou
    <a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>

	<li>Fran�a - Mirror hospedado M�sobius (100 Mps)
	<a href="http://slitazmirror.linuxembarque.com">HTTP</a></li>

	<li>Fran�a - Mirror hospedado TuxFamily via
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
	<a href="http://www.tuxfamily.org/">TuxFamily</a>. Note que todos os utilit�rios
	s�o instalados por padr�o no SliTaz e o c�digo fonte � comentado em ingl�s.
	Baixe os fontes por
	<a href="http://mirror.slitaz.org/sources/">HTTP</a> ou
	<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<a name="stable"></a>
<h2>Vers�o stable (est�vel) do LiveCD</h2>
<p>
	A vers�o est�vel do SliTaz oferece um sistema operacional maduro, largamente
	testado por uma comunidade ativa. O LiveCD base oferece uma grande sele��o
	de pacotes variados cuidadosamente integrados � distribui�ao, o que resulta
	num sistema coerente e robusto.
	<?php echo "A atual vers�o est�vel $stable_ver lan�ada em: $stable_rel."; ?>
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<p>
	Uma imagem de CDROM boot�vel com todos os pacotes dispon�veis da 
	atual vers�o � gerada todos os dias. Ela tamb�m cont�m uma c�pia do
	website e possibilita a instala��o de pacotes sem a necessidade de
	conex�o com a internet, por meio do script install.sh
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Cole��o dos pacotes da vers�o $stable_ver do SliTaz GNU/Linux ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p>

<a name="cooking"></a>
<h2>Vers�o cooking (testes) do LiveCD</h2>
<p>
	A vers�o de testes do SliTaz � constantemente desenvolvida, totalmente us�vel.
	Permite a voc� testar as ultimas melhorias e pacotes, solicitar novas
	funcionalidades ou reportar algum bug para nos ajudar na prepara��o de uma
	vers�o est�vel.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p>

<p>
Uma imagem de DVD boot�vel com todos os pacotes dispon�veis da vers�o Cooking �
gerada todos os dias. Ela tamb�m cont�m uma c�pia do website e possibilita a
instala��o de pacotes sem a necessidade de conex�o com a internet, por meio do
script install.sh. Observa��o: esta imagem pode ser
<a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">instalada em uma m�dia USB</a>,
por�m isto ir� sobrescrever qualquer dado existente na m�dia.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	<?php echo "Cole��o dos pacotes da vers�o Cooking do SliTaz GNU/Linux ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p>

<a name="floppy"></a>
<h2>Disquete de boot</h2>
<p>
	A vers�o em disquete � utilizada para efetuar o boot do SliTaz em pc's antigos,
	mesmo que n�o possuam unidade de CDROM. Pode-se efetuar o boot de uma instala��o
	do SliTaz feita em uma m�dia USB, de um CD/DVD, do disco r�gido, via lan pelo PXE
	e at� mesmo pela internet com o <a href="http://boot.slitaz.org/">gPXE</a>.
</p>

<p class="box">
	<img src="/images/download.png" height="48px" width="48px" alt="[ DL ]" />
	Disquete (1,44 Mb) -
	<a href="http://slitaz.c3sl.ufpr.br/boot/floppy-grub4dos">imagem</a>
	[ <a href="http://slitaz.c3sl.ufpr.br/boot/floppy-grub4dos.md5">md5</a> ]
</p>

<p>
	Um <a href="http://mirror.slitaz.org/floppies">
	conjunto de imagens para disquete</a> tamb�m est� dispon�vel para pessoas
	que n�o podem usar cdrom, m�dias USB ou conex�es ethernet
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html") ?>

</body>
</html>
