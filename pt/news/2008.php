<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Arquivo de notícias</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz news archives info release" />
    <meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, opensource software, livecd na RAM" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php include("../../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">

   	<?php include("../../lib/html/nav.pt.html"); ?>

    <div id="block_info">
		<h4>Arquivos de notícias</h4>
		<p>
            As notícias do site arquivadas por ano. Note que alguns
            links podem estar quebrados devido a mudanças na estrutura
            do site (principalmente a parte da documentação que foi 
            movida para domínio próprio)
		</p>
		<p>
			<img src="../../images/news.png" alt="[ Notícias]" /> 
			<a href="./">2008</a> | 
            <a href="2009.php">2009</a> | 
            <a href="2010.php">2010</a> |
            <a href="index.php">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2008</h2>

<ul>
	<li><strong>31 Dez 2008 - Cooking 20081231 - Wifi e suporte a NTFS </strong><br />
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
	</li>

    <li><strong>Versão Cooking 20080716 - Inicialização pela Web e MPlayer</strong><br />
    Os membros do projeto SliTaz orgulhosamente anunciam a disponibilidade de
    uma nova Versão Cooking (testes), que inclui muitas novas características
    e correções de bugs. Esta versão oferece a opção de inicialização <code>web</code>
    que permite a você iniciar o SliTaz por meio da internet usando o gPXE do
    <a href="http://boot.slitaz.org/">boot.slitaz.org</a>. Este novo e único
    serviço oferece a possibilidade de usar o SliTaz em modo Live (totalmente
    carregado na memória RAM), usando a opção LIVE para guardar todos os seus
    dados permanentemente e pré-configurar o sistema. Esta nova versão possui
    3 Mb a mais, então pudemos incluir o player multimí­dia MPlayer, um gerenciador
    de notas (Notecase), uma versão do gerenciador de pacotes Tazpkg que possui
    suporte a md5sum, suporte ao sistema de arquivos XFS diretamente no Kernel,
    o comando "man" e algumas atualizações. Esta versão requer ao menos 160 Mb
    para iniciar e rodar normalmente, e também oferecemos a <a href="../get/flavors.php">variante</a>
    loram para máquinas com menos recursos. <a href="../get/#cooking">Baixe a ISO do SliTaz Cooking</a>.
    </li>

    <li><strong>22 Mar 2008 - SliTaz GNU/Linux 1.0 release</strong><br />
    O time de colaboradores do SliTaz orgulhosamente anunciam o lançamento
    do SliTaz GNU/Linux 1.0. Este é o primeiro lançamento estável após 2 anos
    de trabalho. O sistema é distribuido na forma de um LiveCD inicializável de
    24.8 Mb de tamanho, que fornece um ambiente desktop cheio de recursos e com
    uma generosa seleção de aplicativos para os mais diversificados usos.
    O SliTaz GNU/Linux 1.0 usa o Kernel Linux 2.6.24.2, oferece o Firefox 2.0.0.12,
    Rsync 3.0.0, Gparted 0.3.5 e suporte a som com o Alsa 1.0.16. A distribuição
    permite a você ouvir música, navegar na web, editar ví­deos e muito mais por
    meio dos 448 pacotes (programas) disponí­veis que podem ser instalados com o
    gerenciador de pacotes tazpkg. O LiveCD permite a você criar uma distribuição
    personalizada ou um dispositivo LiveUSB em um simples comando. Atualizações
    de segurança são fornecidas pelo projeto e pacotes populares como o Firefox
    também pode ser atualizados para se obter mais funcionalidades. Você pode obter
    o SliTaz GNU/Linux 1.0 por meio da <a href="../get/#stable">página de downloads</a>
    do site. Leia as <a href="../doc/releases/1.0/relnotes.pt.html">notas de lançamento</a>
    para informações detalhadas sobre esta versão estável.
    </li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
