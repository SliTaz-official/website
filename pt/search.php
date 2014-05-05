<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset=utf-8" />
	<title>SliTaz - Busca</title>
	<meta name="description" content="SliTaz GNU/Linux busca customizada" />
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, software opensource, livecd LINUX na RAM" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../lib/html/header.pt.html");
include("../lib/html/nav.pt.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Busca de pacotes</h2>

<p>
    Busque por <a href="http://pkgs.slitaz.org/">pacotes</a>, arquivos,
    logs de compilação, arquivos receipts, etc. Todos os pacotes são
    instaláveis por meio do gerenciador de pacotes Tazpkg, tanto por sua
    interface gráfica quanto pela linha de comando
    <code>tazpkg get-install nome-do-pacote</code>.
</p>

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="en" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Search" />
			</p>
		</div>
		Buscar por:
		<select name="object">
			<option value="Package">Pacote</option>
			<option value="Desc">Descrição</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Dependências</option>
			<option value="BuildDepends">Dependências de compilação</option>
			<option value="File">Arquivo</option>
			<option value="File_list">Lista de arquivo</option>
			<option value="FileOverlap">arquivos comuns</option>
		</select>
		na versão
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">estável</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<h2>Busca do Google</h2>

<p>
    Esta página também permite buscar termos no website do projeto, na
    <a href="http://doc.slitaz.org/">documentação</a>, nos arquivos da
    <a href="mailing-list.php">lista de discussão</a> e também no 
    <a href="http://forum.slitaz.org/">Fórum</a>. A pesquisa é feita por
    meio do sistema de buscas do Google.
</p>

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load('search', '1', {language : 'pt', style : google.loader.themes.MINIMALIST});
		google.setOnLoadCallback(function() {
		var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		var options = new google.search.DrawOptions();
		options.setSearchFormRoot('cse-search-form');
		customSearchControl.draw('cse', options);
		}, true);
	</script>
</div>

<div id="cse"></div>

<!-- End of content -->
</section>

<?php include("../lib/html/footer.pt.html"); ?>

</body>
</html>
