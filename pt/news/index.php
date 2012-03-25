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
   	<!-- Information/image -->
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
            <a href="2009.php">2009</a> | 
            <a href="2010.php">2010</a> |
            <a href="./">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2011</h2>

<ul>
	<li><strong>31 May 2011 - Novo Cooking (20110329)</strong>
	<p>
		Os desenvolvedores do SliTaz anunciam o lan�amento de uma nova vers�o
		de testes (cooking). Os pacotes foram recompilados e otimizados para
		a arquitetura i486 pelo Cookutils, a nova gera��o das ferramentas de
		cria��o de pacotes da distribui��o. O servidor de compila��o agora
		possui uma amig�vel interface web que funciona por padr�o em qualquer
		instala��o do SliTaz.
	</p>
	<p>
		A inicializa��o foi melhorada e a configura��o no primeiro boot foi
		simplificada. Este lan�amento traz o TazPanel, uma interface web que
		centraliza a configura��o do sistema e gerenciamento de pacotes,
		substituindo as antigas caixas de di�logo da distribui��o e podendo,
		inclusive, ser utilizada em conex�es remotas.
	</p>
	<p>
		O sistema gr�fico agora suporta renderiza��o direta (DRI), ent�o os
		pacotes libdrm, linux-drm e linux-agp passaram a fazer parte da ISO
		padr�o. Isto adicionou 1 MB ao sistema de arquivos comprimido, por�m
		a nova forma de compila��o de pacotes economiza espa�o, o que manteve
		o tamanho da ISO em apenas 35 MB! Download:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>
	
	<li><strong>29 Mar 2011 - Novo Cooking (20110329)</strong>	
	<p>Os desenvolvedores do SliTaz anunciam o lan�amento de uma nova ISO
	da vers�o Cooking (de testes), que conta com mais de 2900 pacotes
	nos reposit�rios. Todos os pacotes foram recompilados utilizando
	as ferramentas atualizadas da distribui��o, dispon�veis no Tazwok.
	A ISO contem o Kernel Linux 2.6.37 compilado com a glibc 2.13, o binutils
	2.21 e o gcc 2.5.2. O LiveCD inclui o Midori 0.3.3; o tazpkg possui tradu��o
	completa para o franc�s, podendo ser agora traduzido em outras l�nguas;
	o tazwok foi inteiramente reescrito e agora � poss�vel recompilar o SliTaz
	a partir dos fontes utilizando-se qualquer imagem ISO. Este lan�amento
	� o primeiro visando a pr�xima vers�o est�vel 4.0.</p>
	<p>Muito trabalho foi feito desde a vers�o cooking anterior, lan�ada em novembro:
	mais de 2200 mudan�as ocorreram no wok (reposit�rios de pacotes) e v�rias
	outras nas ferramentas pr�prias da distribui��o. A comunidade do SliTaz
	cresceu recentemente: neste �ltimo ano, houveram tantas mudan�as
	quanto nos 4 anos anteriores, ou seja, em toda a hist�ria da distribui��o. 
	Entretanto, quantidade n�o � suficiente para garantir qualidade. Por isso
	precisamos que voc� teste esta nova ISO e nos informe sobre eventuais bugs
	podendo, inclusive, ajudar a resolve-los antes do lan�amento da vers�o 4.0. 
	Voc� pode nos contatar os via IRC, lista de discuss�o, f�rum ou mandando um email 
	diretamente para os mantenedores de pacotes. Esperamos que voc� goste deste novo 
	<a href="get/">lan�amento!</a></p>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
