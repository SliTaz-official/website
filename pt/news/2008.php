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
	O projeto Slitaz tem o prazer de apresentar a nova imagem ISO da vers�o
	cooking do LiveCD. Ela permite que seja utilizado e testado todo o
	trabalho realizado durante os �ltimos meses. Inclui muitas
	caracter�sticas novas, corre��es de bugs e in�meras atualiza��es. A
	distribui��o central inclui agora o controle de gerenciamento WiFi via
	Netbox e as ferramentas wifi trazem ainda o tazdis, uma vers�o mais
	leve do ndiswarapper que usa os drivers do Windows para interfaces
	de rede que n�o possuem uma vers�o aberta. A linguagem Perl foi
	inclu�da no cdrom e a Lua foi removida. O suporte a WiFi est�
	acompanhado do suporte �s parti��es NTFS, ent�o tivemos de remover o mplayer
	da sele��o padr�o de pacotes que fazem parte do LiveCD. A administra��o de
	pacotes com o Tazpkg foi melhorada ao extremo, permitindo preservar a
	configura��o dos arquivos, atualizando os programas de acordo com as respectivas
	datas de constru��o (build) no log do servidor do projeto, mantendo as a��es
	e diversas corre��es que forem sendo aplicadas. Al�m disso, os scripts de
	inicializa��o foram melhorados e a ferramenta LiveCD (Tazlito) est�
	mais coerente. O reposit�rio cooking conta com 	mais de 1,100 pacotes prontos
	para serem instalados, gra�as ao trabalho pesado dos desenvolvedores. Voc�
	pode fazer o <a href="../get/#cooking">download</a> a partir de um dos mirrors
	oficiais do projeto.
	</li>

    <li><strong>Vers�o Cooking 20080716 - Inicializa��o pela Web e MPlayer</strong><br />
    Os membros do projeto SliTaz orgulhosamente anunciam a disponibilidade de
    uma nova Vers�o Cooking (testes), que inclui muitas novas caracter�sticas
    e corre��es de bugs. Esta vers�o oferece a op��o de inicializa��o <code>web</code>
    que permite a voc� iniciar o SliTaz por meio da internet usando o gPXE do
    <a href="http://boot.slitaz.org/">boot.slitaz.org</a>. Este novo e �nico
    servi�o oferece a possibilidade de usar o SliTaz em modo Live (totalmente
    carregado na mem�ria RAM), usando a op��o LIVE para guardar todos os seus
    dados permanentemente e pr�-configurar o sistema. Esta nova vers�o possui
    3 Mb a mais, ent�o pudemos incluir o player multim�dia MPlayer, um gerenciador
    de notas (Notecase), uma vers�o do gerenciador de pacotes Tazpkg que possui
    suporte a md5sum, suporte ao sistema de arquivos XFS diretamente no Kernel,
    o comando "man" e algumas atualiza��es. Esta vers�o requer ao menos 160 Mb
    para iniciar e rodar normalmente, e tamb�m oferecemos a <a href="../get/flavors.php">variante</a>
    loram para m�quinas com menos recursos. <a href="../get/#cooking">Baixe a ISO do SliTaz Cooking</a>.
    </li>

    <li><strong>22 Mar 2008 - SliTaz GNU/Linux 1.0 release</strong><br />
    O time de colaboradores do SliTaz orgulhosamente anunciam o lan�amento
    do SliTaz GNU/Linux 1.0. Este � o primeiro lan�amento est�vel ap�s 2 anos
    de trabalho. O sistema � distribuido na forma de um LiveCD inicializ�vel de
    24.8 Mb de tamanho, que fornece um ambiente desktop cheio de recursos e com
    uma generosa sele��o de aplicativos para os mais diversificados usos.
    O SliTaz GNU/Linux 1.0 usa o Kernel Linux 2.6.24.2, oferece o Firefox 2.0.0.12,
    Rsync 3.0.0, Gparted 0.3.5 e suporte a som com o Alsa 1.0.16. A distribui��o
    permite a voc� ouvir m�sica, navegar na web, editar v�deos e muito mais por
    meio dos 448 pacotes (programas) dispon�veis que podem ser instalados com o
    gerenciador de pacotes tazpkg. O LiveCD permite a voc� criar uma distribui��o
    personalizada ou um dispositivo LiveUSB em um simples comando. Atualiza��es
    de seguran�a s�o fornecidas pelo projeto e pacotes populares como o Firefox
    tamb�m pode ser atualizados para se obter mais funcionalidades. Voc� pode obter
    o SliTaz GNU/Linux 1.0 por meio da <a href="../get/#stable">p�gina de downloads</a>
    do site. Leia as <a href="../doc/releases/1.0/relnotes.pt.html">notas de lan�amento</a>
    para informa��es detalhadas sobre esta vers�o est�vel.
    </li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
