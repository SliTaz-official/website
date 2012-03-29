<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Arquivo de not�cias</title>
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
		<h4>Arquivos de not�cias</h4>
		<p>
            As not�cias do site arquivadas por ano. Note que alguns
            links podem estar quebrados devido a mudan�as na estrutura
            do site (principalmente a parte da documenta��o que foi 
            movida para dom�nio pr�prio)
		</p>
		<p>
			<img src="../../images/news.png" alt="[ Not�cias]" /> 
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
    <li><strong>4 Nov 2009 - Nova Vers�o Cooking 20091104</strong>
	<p>Os desenvolvedores do SliTaz GNU/Linux anunciam o lan�amento de
    uma nova imagem ISO da vers�o de testes (cooking) baseada nos cerca 
    de 2100 pacotes dispon�veis nos reposit�rios. Todo o sistema foi
    completamente reconstru�do, utilizando o novo conjunto de ferramentas
    de desenvolvimento composto pela biblioteca Glibc 2.10.1 e pelo
    compilador GCC 4.4.1. Esta nova vers�o de testes traz o kernel Linux
    2.6.30.6, que possui um melhor reconhecimento de hardware e mais
    m�dulos inclusos. O processo de boot foi melhorado e agora est� muito
    mais r�pido. Os pacotes incluidos na imagem ISO, como o Firefox, 
    por exemplo, s�o oferecidos em suas vers�es mais recentes e as
    ferramentas gr�ficas pr�prias da distribui��o tamb�m foram melhoradas.
    O gerenciador de pacotes tazpkg agora possui novas caracter�sticas,
    incluindo a capacidade de converter pacotes deb/rpm/arch/slackware/ipk
    para o formato de pacotes pr�prio do SliTaz. Esta nova imagem ISO
    possui um desktop mais bonito e elegante, baseado no Openbox, aplicativos
    GTK e um novo tema de �cones. O leitor de pdf ePDFview foi retirado e 
    agora oferecemos um leitor de pdf online. Com todas estas mudan�as,
    a imagem ISO ficou um pouco maior, com um tamanho de 31.5 MB, 
    principalmente por causa do novo kernel e novas depend�ncias
    inclusas.</p>
    <p>Tamb�m anunciamos que o projeto traz um novo 
    <a href="http://forum.slitaz.org/">f�rum de discuss�o</a> e um novo
	<a href="http://scn.slitaz.org/">site para a comunidade</a> 
    em que todos s�o convidados a colaborar com conte�do! Baixe agora a nova
    imagem da <a href="../get/#cooking">vers�o de testes</a></p>
	</li>

	<li><strong>19 Mai 2009 - SliTaz na LinuxDays 2009 (Genebra)</strong>
	<p>
    Durante a conven��o LinuxDays na Sui�a a Associa��o SliTaz ter� um
    estande montado na se��o "Association Village" e uma palestra ser�
    dada na quarta de manh�. Esta palestra � um estudo de caso sob uma
    perspectiva corporativa baseada na utiliza��o do "Servidor Empresarial SliTaz"
    que possui painel de controle, ERP (Enterprise Resource Planning -
    Sistemas Integrados de Gest�o Empresarial), correio eletr�nico,
    LDAP, etc...
	</p>
	<p>
    Durante tr�s dias o estande de exibi��o ser� coordenado pelos membros do
    projeto SliTaz. Ser�o oferecidas demonstra��es, inclusive cria��o de
    m�dias USB inicializ�veis (LiveUSB) e cdroms (LiveCD). O LiveCD
    personalizado para a LinuxDays conter� uma cole��o de programas
    voltados para o uso m�vel. A sala de exibi��es tamb�m oferecer� um
    f�rum e estaremos l� para responder qualquer pergunta. Sintam-se
    convidados a nos visitar! Maiores informa��es em
	<a href="http://labs.slitaz.org/wiki/events/2009-linuxdays">SliTaz Labs</a>
	e no site da conven��o: <a href="http://2009.linuxdays.ch/">2009.linuxdays.ch</a>.
	</p>
    </li>

	<li><strong>16 Abr 2009 - Lan�amento do SliTaz GNU/Linux 2.0</strong><br />
	O projeto SliTaz anuncia orgulhosamente o lan�amento da nova vers�o est�vel da
	distribui��o - SliTaz GNU/Linux 2.0 -, resultado de um ano de trabalho em
	comunidade. Esta nova vers�o fornece um sistema operacional super leve, r�pido,
	est�vel e escalon�vel. Fornece, tamb�m, um ambiente desktop completo
	em uma imagem ISO com menos de 30 mb, aplicativos necess�rios para um um
	servidor confi�vel e robusto e cerca de 1400 pacotes facilmentes instal�veis
	com alguns cliques de mouse. Al�m disso, oferece a montagem autom�tica de parti��es
	(inclusive NTFS), suporte a wifi, interface que respeita os padr�es Freedesktop.org
	(arrastar e soltar), boot via rede com o gPXE e o
	<a href="http://boot.slitaz.org/">boot.slitaz.org</a>, detec��o autom�tica de
	dispositivos USB e PCI, interfaces gr�ficas para gerenciamento de pacotes e
	para a central de controle, al�m de v�rias ferramentas gr�ficas para o
	gerenciamento geral da distribui��o. A cria��o de m�dias USB inicializ�veis
	e variantes do LiveCD foi simplificada e melhorada. O LiveCD base inclui
	o Firefox 3.0.8, gFTP, LostIRC, ePDFView, mtPaint, Transmission, Osmo e
	Alsaplayer. A documenta��o do website � atualizada e pode-se ler as
	<a href="../doc/releases/2.0/relnotes.pt.html">notas de lan�amento</a> que
	est�o incluidas na distribui��o para maiores detalhes sobre esta vers�o
	est�vel. O SliTaz GNU/Linux 2.0 pode ser <a href="../get/">obtido</a> a
	partir de um dos mirrors oficiais do projeto.</li>

	<li><strong>27 Mar 2009 - Labs e novos mirrors</strong><br />
	Buscando continuadamente melhorias na distribui��o e nos servi�os que oferecemos,
	anunciamos o lan�amento do <a href="http://labs.slitaz.org/">SliTaz Labs</a>.
	Esta � uma plataforma que torna poss�vel aos participantes do projeto
	colaborarem de forma mais efetiva, reportando bugs ou solicitando novas
	funcionalidades. Cada <a href="http://labs.slitaz.org/projects">projeto</a>
	possui uma wiki, um sistema de controle de bugs,
	<a href="http://labs.slitaz.org/news">not�cias</a>, etc. O SliTaz Labs
	fornece uma vis�o geral das atividades de um determinado projeto e permite
	acompanhar as atualiza��es referentes a ele. Voc� pode se registrar para
	participar e deixar seu coment�rio. Tamb�m anunciamos dois novos mirrors:
	na sui�a, hospedado por <a href="http://mirror.switch.ch/">SWITCHmirror</a>
	(10 Gbits/s), e na China, hospedado por <a href="http://www.lupaworld.com">LupaWorld</a>.
	</li>

	<li><strong>28 Fev 2009 - Nova vers�o cooking</strong><br />
	Abrindo caminho para o pr�ximo lan�amento est�vel, o projeto SliTaz
	publica uma nova vers�o cooking (de testes) que traz v�rias corre��es de
	bugs, atualiza��es e diversas melhorias. A auto-detec��o de dispositivos
	PCI/USB agora � possibilitada pelo aplicativo Tazhw e firmwares podem ser
	instalados em um clique por uma interface gr�fica. O aplicativo Tazndis
	tamb�m ganhou uma interface simples por�m amig�vel para que voc� possa
	instalar e gerenciar drivers para dispositivos que s� possuem vers�o para
	Windows. O gerenciador gr�fico de pacotes est� muito mais f�cil de usar,
	m�dias LiveUSB podem ser criadas sem complica��o por meio de um utilit�rio
	gr�fico. O Netbox agora mostra todas as interfaces de rede e o novo Wifibox
	conecta-se a redes sem fio, gerencia as redes favoritas e configura o driver
	da placa tanto manualmente quanto pelo Tazhw. A �rea de trabalho agora possui
	um aplicativo que habilita ou desabilita aplica��es iniciadas juntamente
	com a sess�o do Openbox e que, em conjunto com o Ivman, prov� um sistema de
	notifica��es leve. <a href="../get/#cooking">Fa�a o download da iso aqui.</a>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
