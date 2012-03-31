<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz (pt) - Artwork</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux project artwok images logos" />
    <meta name="keywords" lang="pt" content="sobre slitaz, gnu, linux, mini distro, livecd" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="2011-03-26 00:30:00" />
    <meta name="author" content="Claudinei Pereira" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php include("../../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">
    
    <?php include("../../lib/html/nav.pt.html"); ?>

    <!-- Information/image -->
	<div id="block_info">
		<h4>Artwork</h4>
		<p>
			Localizar, apreciar, discutir, fazer upload e compartilhar 
			arte para o SliTaz! Junte-se ao 
			<a href="http://scn.slitaz.org/image/">grupo</a> 
			de arte, seu trabalho pode ser usado em nossa próxima
			versão Cooking!
		</p>
		<ul> 
			<li><a href="#art4taz">Artwork para o SliTaz.</a></li>
			<li><a href="#logos">Logos, spider &amp; ícones.</a></li>
			<li><a href="screenshots.php">Screenshots.</a></li> 
		</ul>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Arte &amp; Design</h2>

<p>
Esta seção do website é dedicada a arte e gráficos do projeto SliTaz.
As imagens são livres, e você pode utiliza-las para fazer seu próprio papel de
parede ou mostrar o logo em seu site para ajudar na popularização do projeto.
Os logos e ícones do SliTaz estão disponíveis em muitos tamanhos e podem ser
baixados diretamente do diretório <a href="../../images/artwork/">artwork</a>.
Você também vai achar aqui alguns <a href="screenshots.php">screenshots</a> 
feitos com o mtPaint e o Gimp.
</p>

<a name="art4taz"></a>
<h3>Artwork para o SliTaz</h3>
<p>
Como muitas coisas no SliTaz os gráficos, logos, temas e papéis de parede são
totalmente construídos pela comunidade e pelos desenvolvedores. O projeto
procura manter um design de qualidade e elegância. Fazer um logo, um papel de 
parede ou qualquer outra coisa é uma boa forma de participar do projeto sem
precisar "sujar" suas mãos codificando ou testando a validade do xHTML. Se você
deseja criar alguma arte para o SliTaz, ou se pretende usar alguma de nossas imagens
online, é recomendável que nos contate primeiro pela 
<a href="../mailing-list.php">Lista de Discussão</a>. Tente não mandar arquivos
muito grandes.
</p>
<h4>Artwork do LiveCD</h4>
<p>
Para manter a coesão do LiveCd, a imagem não pode exceder 200 kb, e serão
necessárias duas delas, diferindo em tamanho: 1024x768 e 1280x1024. Isto se deve
ao fato de a razão 3/4 não ser suportada por telas que possuem 1280 pixels de 
largura (o que resultar em imagem distorcida e bordas negras). Por fim, cada 
lançamento de versão oferece um novo tema / imagem de fundo que seguem as mesmas
diretrizes sem se prender à utilização de qualquer ferramenta distribuida pelo
sistema. No LiveCd já há o mtPaint e num sistema instalado o Gimp se encontra
no mirror. Note que o formato livre PNG é preferível.
</p>

<a name="logos"></a>
<h2>Logos &amp; spider</h2>

<div class="box">
	SVG Format: <a href="../../images/artwork/slitaz-logo.svg">slitaz-logo.svg</a> |
	<a href="../../images/artwork/slitaz-spider.svg">slitaz-spider.svg</a>
</div>
<div>
	<img
	   src="../../images/artwork/slitaz-button-red.png"
	   alt="SliTaz button"
	   style="width: 148px; height: 148px;" />
	<img
	   src="../../images/artwork/slitaz-logo-whitebg-320x118.png"
	   alt="SliTaz spider"
	   style="width: 320px; height: 118px;" />
	<img
	   src="../../images/artwork/slitaz-tux-124x126.png"
	   alt="SliTaz Tux"
	   style="width: 124px; height: 126px;" />
	<img
	   src="../../images/artwork/slitaz-spider-48x48.png"
	   alt="SliTaz spider"
	   style="width: 48px; height: 48px;" />
	<img
	   src="../../images/artwork/tazpkg.png"
	   alt="Tazpkg package logo"
	   style="width: 32px; height: 32px;" />
	<img
	   src="../../images/artwork/slitaz-minilogo-80x15.png"
	   alt="SliTaz mini logo"
	   style="width: 80px; height: 15px;" />
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
