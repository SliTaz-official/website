<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Guia de Lançamento</title>
	<meta name="description" content="guia de lançamento para desenvolvedores do slitaz"/>
	<meta name="keywords" lang="en" content="slitaz, devel, tazdev, cooking, source"/>
	<meta name="author" content="Claudinei Pereira"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.pt.html");
include("../../lib/html/nav.pt.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">

<h2>Guias de lançamento</h2>

<ul>
	<li><a href="#cooking">Lançamento Cooking</a></li>
	<li><a href="#stable">Lançamento Estável</a></li>
	<li><a href="#project">Lançamento do Projeto</a></li>
</ul>

<h2 id="cooking">Lançamento Cooking</h2>

<p>
	TOWRITE - algumas informações não atualizadas (em inglês)
	<a href="http://doc.slitaz.org/en:cookbook:reltasks">na wiki / cookbook</a>
</p>

<h2 id="stable">Lançamento Estável</h2>

<p>
	TOWRITE
</p>

<p>
    Instruções em como utilizar o servidor de compilação encontra-se no Cookbook:
	<a href="http://doc.slitaz.org/en:cookbook:buildhost">
		SliTaz Build Host (tank)</a>.
</p>

<h2 id="project">Lançamento do Projeto</h2>

<p>
    Sub projetos do SliTaz são lançados individualmente utilizando a ferramenta
    para desenvolvidores "tazdev". Um exemplo simples em linha de comando
    (para o pacote 'spk' 1.0):
</p>

<pre>
$ cd spk
$ hg pull -u
$ hg tag 1.0
$ hg push
$ tazdev -rp spk
</pre>

<p>
    Alguns pacotes não precisam ser arquivados no mirror porque já se
    encontram replicados na árvore completa de pacotes. Uma vez que algum
    pacote tenha sido lançado, pode-se atualizar o wok automaticamente ou
    manualmente, fazer o commit no repositório ou aguardar que o pacote
    seja compilado no <a href="http://cook.slitaz.org/">servidor de compilação</a>.
    Para gravar as mudanças no repositório:
</p>

<pre>
$ cd ../wok
$ hg push
</pre>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
