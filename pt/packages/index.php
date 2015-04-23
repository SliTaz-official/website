<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Pacotes (programas)</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, software opensource, livecd LINUX na RAM"/>
	<meta name="author" content="Claudinei Pereira"/>
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php include("../../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.pt.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Pacotes</h4>
		<p>
			Esta parte do site permite a você ter acesso a todos os
			pacotes de programas disponíveis no mirror do SliTaz.
			Todos os pacotes são instaláveis via o gerenciador de
			pacotes Tazpkg usando o comando <code>tazpkg get-install
			nome-do-pacote</code>.
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="pt" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Buscar" />
			</p>
		</div>
		Buscar o:
		<select name="object">
			<option value="Package">Pacote</option>
			<option value="Desc">Descrição</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Dependência</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">Arquivo</option>
			<option value="File_list">Lista de Arquivos</option>
			<option value="FileOverlap">common files</option>
		</select>
		em
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="/images/text.png" alt="[ ]" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a><br />
	<img src="/images/network.png" alt="[ ]" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Atividades do projeto</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/"><img
			src="/images/development.png" alt="*" /></a>
		Últimos commits no wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mais commits</a>
	</p>
</div>

<h2>Documentação</h2>

<p>
	O projeto SliTaz fornece <a href="http://doc.slitaz.org/">documentação</a>
	detalhada para permitir que você aprenda como instalar e gerenciar
	pacotes no seu SliTaz distribuição GNU / Linux. Os membros do
	<a href="http://forum.slitaz.org/">fórum</a> de apoio irá ajudá-lo
	em caso de problemas e também é o lugar para pedir um novo pacote.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
