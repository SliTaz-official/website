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
			<a href="2008.php">2008</a> | 
            <a href="./">2009</a> | 
            <a href="2010.php">2010</a> |
            <a href="index.php">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2009</h2>

<ul>
    <li><strong>4 Nov 2009 - Nova Versão Cooking 20091104</strong>
	<p>Os desenvolvedores do SliTaz GNU/Linux anunciam o lançamento de
    uma nova imagem ISO da versão de testes (cooking) baseada nos cerca 
    de 2100 pacotes disponíveis nos repositórios. Todo o sistema foi
    completamente reconstruído, utilizando o novo conjunto de ferramentas
    de desenvolvimento composto pela biblioteca Glibc 2.10.1 e pelo
    compilador GCC 4.4.1. Esta nova versão de testes traz o kernel Linux
    2.6.30.6, que possui um melhor reconhecimento de hardware e mais
    módulos inclusos. O processo de boot foi melhorado e agora está muito
    mais rápido. Os pacotes incluidos na imagem ISO, como o Firefox, 
    por exemplo, são oferecidos em suas versões mais recentes e as
    ferramentas gráficas próprias da distribuição também foram melhoradas.
    O gerenciador de pacotes tazpkg agora possui novas características,
    incluindo a capacidade de converter pacotes deb/rpm/arch/slackware/ipk
    para o formato de pacotes próprio do SliTaz. Esta nova imagem ISO
    possui um desktop mais bonito e elegante, baseado no Openbox, aplicativos
    GTK e um novo tema de ícones. O leitor de pdf ePDFview foi retirado e 
    agora oferecemos um leitor de pdf online. Com todas estas mudanças,
    a imagem ISO ficou um pouco maior, com um tamanho de 31.5 MB, 
    principalmente por causa do novo kernel e novas dependências
    inclusas.</p>
    <p>Também anunciamos que o projeto traz um novo 
    <a href="http://forum.slitaz.org/">fórum de discussão</a> e um novo
	<a href="http://scn.slitaz.org/">site para a comunidade</a> 
    em que todos são convidados a colaborar com conteúdo! Baixe agora a nova
    imagem da <a href="../get/#cooking">versão de testes</a></p>
	</li>

	<li><strong>19 Mai 2009 - SliTaz na LinuxDays 2009 (Genebra)</strong>
	<p>
    Durante a convenção LinuxDays na Suiça a Associação SliTaz terá um
    estande montado na seção "Association Village" e uma palestra será
    dada na quarta de manhã. Esta palestra é um estudo de caso sob uma
    perspectiva corporativa baseada na utilização do "Servidor Empresarial SliTaz"
    que possui painel de controle, ERP (Enterprise Resource Planning -
    Sistemas Integrados de Gestão Empresarial), correio eletrônico,
    LDAP, etc...
	</p>
	<p>
    Durante três dias o estande de exibição será coordenado pelos membros do
    projeto SliTaz. Serão oferecidas demonstrações, inclusive criação de
    mídias USB inicializáveis (LiveUSB) e cdroms (LiveCD). O LiveCD
    personalizado para a LinuxDays conterá uma coleção de programas
    voltados para o uso móvel. A sala de exibições também oferecerá um
    fórum e estaremos lá para responder qualquer pergunta. Sintam-se
    convidados a nos visitar! Maiores informações em
	<a href="http://labs.slitaz.org/wiki/events/2009-linuxdays">SliTaz Labs</a>
	e no site da convenção: <a href="http://2009.linuxdays.ch/">2009.linuxdays.ch</a>.
	</p>
    </li>

	<li><strong>16 Abr 2009 - Lançamento do SliTaz GNU/Linux 2.0</strong><br />
	O projeto SliTaz anuncia orgulhosamente o lançamento da nova versão estável da
	distribuição - SliTaz GNU/Linux 2.0 -, resultado de um ano de trabalho em
	comunidade. Esta nova versão fornece um sistema operacional super leve, rápido,
	estável e escalonável. Fornece, também, um ambiente desktop completo
	em uma imagem ISO com menos de 30 mb, aplicativos necessários para um um
	servidor confiável e robusto e cerca de 1400 pacotes facilmentes instaláveis
	com alguns cliques de mouse. Além disso, oferece a montagem automática de partições
	(inclusive NTFS), suporte a wifi, interface que respeita os padrões Freedesktop.org
	(arrastar e soltar), boot via rede com o gPXE e o
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>, detecção automática de
	dispositivos USB e PCI, interfaces gráficas para gerenciamento de pacotes e
	para a central de controle, além de várias ferramentas gráficas para o
	gerenciamento geral da distribuição. A criação de mídias USB inicializáveis
	e variantes do LiveCD foi simplificada e melhorada. O LiveCD base inclui
	o Firefox 3.0.8, gFTP, LostIRC, ePDFView, mtPaint, Transmission, Osmo e
	Alsaplayer. A documentação do website é atualizada e pode-se ler as
	<a href="../doc/releases/2.0/relnotes.pt.html">notas de lançamento</a> que
	estão incluidas na distribuição para maiores detalhes sobre esta versão
	estável. O SliTaz GNU/Linux 2.0 pode ser <a href="../get/">obtido</a> a
	partir de um dos mirrors oficiais do projeto.</li>

	<li><strong>27 Mar 2009 - Labs e novos mirrors</strong><br />
	Buscando continuadamente melhorias na distribuição e nos serviços que oferecemos,
	anunciamos o lançamento do <a href="http://labs.slitaz.org/">SliTaz Labs</a>.
	Esta é uma plataforma que torna possível aos participantes do projeto
	colaborarem de forma mais efetiva, reportando bugs ou solicitando novas
	funcionalidades. Cada <a href="http://labs.slitaz.org/projects">projeto</a>
	possui uma wiki, um sistema de controle de bugs,
	<a href="http://labs.slitaz.org/news">notícias</a>, etc. O SliTaz Labs
	fornece uma visão geral das atividades de um determinado projeto e permite
	acompanhar as atualizações referentes a ele. Você pode se registrar para
	participar e deixar seu comentário. Também anunciamos dois novos mirrors:
	na suiça, hospedado por <a href="http://mirror.switch.ch/">SWITCHmirror</a>
	(10 Gbits/s), e na China, hospedado por <a href="http://www.lupaworld.com">LupaWorld</a>.
	</li>

	<li><strong>28 Fev 2009 - Nova versão cooking</strong><br />
	Abrindo caminho para o próximo lançamento estável, o projeto SliTaz
	publica uma nova versão cooking (de testes) que traz várias correções de
	bugs, atualizações e diversas melhorias. A auto-detecção de dispositivos
	PCI/USB agora é possibilitada pelo aplicativo Tazhw e firmwares podem ser
	instalados em um clique por uma interface gráfica. O aplicativo Tazndis
	também ganhou uma interface simples porém amigável para que você possa
	instalar e gerenciar drivers para dispositivos que só possuem versão para
	Windows. O gerenciador gráfico de pacotes está muito mais fácil de usar,
	mídias LiveUSB podem ser criadas sem complicação por meio de um utilitário
	gráfico. O Netbox agora mostra todas as interfaces de rede e o novo Wifibox
	conecta-se a redes sem fio, gerencia as redes favoritas e configura o driver
	da placa tanto manualmente quanto pelo Tazhw. A área de trabalho agora possui
	um aplicativo que habilita ou desabilita aplicações iniciadas juntamente
	com a sessão do Openbox e que, em conjunto com o Ivman, provê um sistema de
	notificações leve. <a href="../get/#cooking">Faça o download da iso aqui.</a>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
