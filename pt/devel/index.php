<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Espa�o dos Desenvolvedores</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux project information overview" />
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
		<h4>Desenvolvimento</h4>
		<p>
			O SliTaz � uma distribui��o desenvolvida de forma
			colaborativa muitos pessoas em todo o mundo. Todos s�o
			bem vindos a ajudar e a se envolver no projeto.
		</p>
		<p>
			<img src="../../images/users.png" alt="users.png" />
			Utilize tamb�m o <a href="http://scn.slitaz.org/">SCN</a>
			(SliTaz Community Network) e a 
			<a href="../mailing-list.php">lista de discuss�o</a>.
		</p>
	</div>
</div>

<!-- Language -->
<div id="lang">
	<a href="../../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../de/devel/">Deutsch</a>
	<a href="../../en/devel/">English</a>
	<a href="../../fr/devel/">Fran�ais</a>
</div>

<!-- Content -->
<div id="content">

<h2>Espa�o dos Desenvolvedores do SliTaz</h2>

<ul>
    <li><a href="forge.php">Central de Desenvolvimento</a> - Desenvolvimento
    colaborativo, princ�pio KISS, linhas mestras, reposit�rios mercurial, 
    website e outras informa��es.</li>
    <li><a href="../../i18n.php">Projeto de Internacionaliza��o</a> - 
    Tradu��es, objetivos e gerenciamento.</li>
    <li><a href="http://hg.slitaz.org/">Reposit�rio Mercurial</a></li>
    <li><a href="http://bugs.slitaz.org/">Bug Tracker do SliTaz</a></li>
</ul>

<h2>Contribua</h2>
<p>
    O SliTaz � uma distribui��o Open Source com colabora��o da comunidade. 
    Todos s�o convidados a se juntar a n�s e a contribuir, sejam usu�rios,
    hackers e desenvolvedores, sempre h� alguma coisa a fazer, como por 
    exemplo escrever ou corrigir a documenta��o, enviar relat�rios de bug
    ou corre��es para a lista de discuss�o, criar pacotes ou ajudar usu�rios
    na lista de discuss�o ou no <a href="http://forum.slitaz.org">F�rum</a>.
    A distribui��o possui reposit�rios mercurial hospedados num servidor
    SliTaz, desenvolvedores podem requisitar um novo reposit�rio ou obter
    acesso aos j� existentes para corrigir o trabalho existente ou adicionar
    algo novo.
</p>
<p>
    N�s ouvimos o que nossos usu�rios tem a dizer. H� v�rios desenvolvedores
    ativos no <a href="http://forum.slitaz.org">f�rum</a> e na
    <a href="../mailing-list.php">lista de discuss�o</a>, ent�o podemos
    atender a pedidos ou trabalhar juntos com quem se manifesta nestes
    espa�os.
</p>
<p>
   Para quem trabalha com arte, h� um espa�o dedicado, em que � poss�vel criar
    uma conta e postar trabalhos ou imagens. Este espa�o � gerenciado pela
    comunidade, ent�o se algu�m estiver disposto a ajudar com trabalhos ou 
    com o gerenciamento, por favor contate-nos por email ou na lista de
    discuss�o. Entre no grupo em 
    <a href="http://scn.slitaz.org/groups/artwork/">Grupo de Arte</a>.
</p>

<h2>Atividade</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
    <p>
        <a href="http://hg.slitaz.org/"><img
            src="/images/development.png" alt="[ Devel ]" /></a>
            �ltimos commits no wok
            <?php get_feed("wok.xml"); ?>
    </p>
    <p class="activity_more">
        <a href="http://hg.slitaz.org/">Mais commits</a>
    </p>
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
