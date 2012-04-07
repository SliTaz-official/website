<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Espaço dos Desenvolvedores</title>
	<meta name="description" content="SliTaz GNU/Linux project information overview" />
	<meta name="keywords" lang="pt" content="sobre slitaz, gnu, linux, mini distro, livecd" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../../lib/html/meta-link.html"); ?>
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
			O SliTaz é uma distribuição desenvolvida de forma
			colaborativa muitos pessoas em todo o mundo. Todos são
			bem vindos a ajudar e a se envolver no projeto.
		</p>
		<p>
			<img src="/images/users.png" alt="[ ]" />
			Utilize também o <a href="http://scn.slitaz.org/">SCN</a>
			(SliTaz Community Network) e a
			<a href="../mailing-list.php">lista de discussão</a>.
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Espaço dos Desenvolvedores do SliTaz</h2>

<ul>
	<li><a href="forge.php">Central de Desenvolvimento</a> - Desenvolvimento
	colaborativo, princípio KISS, linhas mestras, repositórios mercurial,
	website e outras informações.</li>
	<li><a href="/i18n.php">Projeto de Internacionalização</a> -
	Traduções, objetivos e gerenciamento.</li>
	<li><a href="http://hg.slitaz.org/">Repositório Mercurial</a></li>
	<li><a href="http://bugs.slitaz.org/">Bug Tracker do SliTaz</a></li>
</ul>

<h2>Contribua</h2>

<p>
	O SliTaz é uma distribuição Open Source com colaboração da comunidade.
	Todos são convidados a se juntar a nós e a contribuir, sejam usuários,
	hackers e desenvolvedores, sempre há alguma coisa a fazer, como por
	exemplo escrever ou corrigir a documentação, enviar relatórios de bug
	ou correções para a lista de discussão, criar pacotes ou ajudar usuários
	na lista de discussão ou no <a href="http://forum.slitaz.org">Fórum</a>.
	A distribuição possui repositórios mercurial hospedados num servidor
	SliTaz, desenvolvedores podem requisitar um novo repositório ou obter
	acesso aos já existentes para corrigir o trabalho existente ou adicionar
	algo novo.
</p>
<p>
	Nós ouvimos o que nossos usuários tem a dizer. Há vários desenvolvedores
	ativos no <a href="http://forum.slitaz.org">fórum</a> e na
	<a href="../mailing-list.php">lista de discussão</a>, então podemos
	atender a pedidos ou trabalhar juntos com quem se manifesta nestes
	espaços.
</p>
<p>
	Para quem trabalha com arte, há um espaço dedicado, em que é possível criar
	uma conta e postar trabalhos ou imagens. Este espaço é gerenciado pela
	comunidade, então se alguém estiver disposto a ajudar com trabalhos ou
	com o gerenciamento, por favor contate-nos por email ou na lista de
	discussão. Entre no grupo em
	<a href="http://scn.slitaz.org/groups/artwork/">Grupo de Arte</a>.
</p>

<h2>Atividade</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/"><img
			src="/images/development.png" alt="[ ]" /></a>
			Últimos commits no wok
			<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mais commits</a>
	</p>
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
