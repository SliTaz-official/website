<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Arquivo de notícias (2008)</title>
	<meta name="description" content="SliTaz news archives info release"/>
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, opensource software, livecd na RAM"/>
	<meta name="author" content="Claudinei Pereira"/>
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php
include("../../lib/html/header.pt.html");
include("../../lib/html/nav.pt.html");
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Notícias do SliTaz (2008)</h2>
<p>
    As notícias do site arquivadas por ano. Note que alguns
    links podem estar quebrados devido a mudanças na estrutura
    do site (principalmente a parte da documentação que foi 
    movida para domínio próprio).
</p>
<p>
    Para outras notícias e informações você também pode consultar o
    <a href="http://scn.slitaz.org/">Blog da comunidade do SliTaz</a>.
</p>

<div class="news">

<ul>
	<li id="d20081231"><strong>31 Dez 2008 - Cooking 20081231 - Wifi e suporte a NTFS </strong>
	<p>
	O projeto Slitaz tem o prazer de apresentar a nova imagem ISO da versão
	cooking do LiveCD. Ela permite que seja utilizado e testado todo o
	trabalho realizado durante os últimos meses. Inclui muitas
	características novas, correções de bugs e inúmeras atualizações. A
	distribuição central inclui agora o controle de gerenciamento WiFi via
	Netbox e as ferramentas wifi trazem ainda o tazdis, uma versão mais
	leve do ndiswarapper que usa os drivers do Windows para interfaces
	de rede que não possuem uma versão aberta. A linguagem Perl foi
	incluída no cdrom e a Lua foi removida. O suporte a WiFi está
	acompanhado do suporte às partições NTFS, então tivemos de remover o mplayer
	da seleção padrão de pacotes que fazem parte do LiveCD. A administração de
	pacotes com o Tazpkg foi melhorada ao extremo, permitindo preservar a
	configuração dos arquivos, atualizando os programas de acordo com as respectivas
	datas de construção (build) no log do servidor do projeto, mantendo as ações
	e diversas correções que forem sendo aplicadas. Além disso, os scripts de
	inicialização foram melhorados e a ferramenta LiveCD (Tazlito) está
	mais coerente. O repositório cooking conta com 	mais de 1,100 pacotes prontos
	para serem instalados, graças ao trabalho pesado dos desenvolvedores. Você
	pode fazer o <a href="../get/#cooking">download</a> a partir de um dos mirrors
	oficiais do projeto.
	</p></li>

	<li id="d20080716"><strong>Versão Cooking 20080716 - Inicialização pela Web e MPlayer</strong>
	<p>
	Os membros do projeto SliTaz orgulhosamente anunciam a disponibilidade de
	uma nova Versão Cooking (testes), que inclui muitas novas características
	e correções de bugs. Esta versão oferece a opção de inicialização <code>web</code>
	que permite a você iniciar o SliTaz por meio da internet usando o gPXE do
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>. Este novo e único
	serviço oferece a possibilidade de usar o SliTaz em modo Live (totalmente
	carregado na memória RAM), usando a opção LIVE para guardar todos os seus
	dados permanentemente e pré-configurar o sistema. Esta nova versão possui
	3 Mb a mais, então pudemos incluir o player multimídia MPlayer, um gerenciador
	de notas (Notecase), uma versão do gerenciador de pacotes Tazpkg que possui
	suporte a md5sum, suporte ao sistema de arquivos XFS diretamente no Kernel,
	o comando "man" e algumas atualizações. Esta versão requer ao menos 160 Mb
	para iniciar e rodar normalmente, e também oferecemos a <a href="../get/flavors.php">variante</a>
	loram para máquinas com menos recursos. <a href="../get/#cooking">Baixe a ISO do SliTaz Cooking</a>.
	</p></li>

	<li id="d20080322"><strong>22 Mar 2008 - SliTaz GNU/Linux 1.0 release</strong>
	<p>
	O time de colaboradores do SliTaz orgulhosamente anunciam o lançamento
	do SliTaz GNU/Linux 1.0. Este é o primeiro lançamento estável após 2 anos
	de trabalho. O sistema é distribuido na forma de um LiveCD inicializável de
	24.8 Mb de tamanho, que fornece um ambiente desktop cheio de recursos e com
	uma generosa seleção de aplicativos para os mais diversificados usos.
	O SliTaz GNU/Linux 1.0 usa o Kernel Linux 2.6.24.2, oferece o Firefox 2.0.0.12,
	Rsync 3.0.0, Gparted 0.3.5 e suporte a som com o Alsa 1.0.16. A distribuição
	permite a você ouvir música, navegar na web, editar vídeos e muito mais por
	meio dos 448 pacotes (programas) disponíveis que podem ser instalados com o
	gerenciador de pacotes tazpkg. O LiveCD permite a você criar uma distribuição
	personalizada ou um dispositivo LiveUSB em um simples comando. Atualizações
	de segurança são fornecidas pelo projeto e pacotes populares como o Firefox
	também pode ser atualizados para se obter mais funcionalidades. Você pode obter
	o SliTaz GNU/Linux 1.0 por meio da <a href="../get/#stable">página de downloads</a>
	do site. Leia as <a href="../doc/releases/1.0/relnotes.pt.html">notas de lançamento</a>
	para informações detalhadas sobre esta versão estável.
	</p></li>
</ul>

</div>

<h2 id="archives">Arquivos de notícias</h2>

<p>
	<img src="/images/news.png" alt="[ ]" />
	<a href="2008.php">2008</a> | <a href="2009.php">2009</a>
	| <a href="2010.php">2010</a> | <a href="2011.php">2011</a>
	| <a href="2012.php">2012</a> | <a href="index.php">2014</a>
</p>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
