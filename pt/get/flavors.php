<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<title>SliTaz - Variantes do LiveCD</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD flavors" />
	<meta name="keywords" lang="pt" content="slitaz flavor" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php include("../../lib/html/header.pt.html") ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.pt.html") ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Obtenha as Variantes</h4>
		<p>
			O sistema de variantes do LiveCD é uma maneira simples de a
			comunidade gerar imagens ISO para certas tarefas, oferecendo
			uma seleção específica de pacotes. Há duas formas de se 
			utilizar variantes: usar uma feita pela comunidade ou criar
			a sua própria.
		</p>
	</div>
</div>

<!-- Language -->
<div id="lang">
	<a href="/i18n.php">
		<img src="/images/locale.png" alt="locale.png" /></a>
	<a href="../../de/get/flavors.html">Deutsch</a>
	<a href="../../en/get/flavors.php">English</a>
	<a href="../../fr/get/flavors.html">Français</a>
	<a href="../../cn/get/flavors.html">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>LiveCD ao gosto do freguês</h2>

<p>
	Por conveniência, o time do SliTaz fornece algumas variantes em formato ISO, 
	baseadas na versão de testes mas nem sempre sincronizadas com a última versão.
	A variante <em>loram</em> pode iniciar o SliTaz em máquinas de poucos recursos,
	isto é, 80 MB de RAM. A <em>loram-cdrom</em> necessita de apenas 16 MB e pode
	ser ejetável e/ou usar o drive de cdrom e a <em>loram-cdrom-sqfs</em> pode
	inicializar com apenas 16 MB e uma pequena memória swap, mas já não pode ser 
	ejetada.
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/">Baixe uma variante</a>
</p>

<h3>Obtendo e gerando uma variante</h3>
<p>
	Uma <em>variante</em> é um arquivo (.flavor) que gera uma variante especial.
	A ferramenta gráfica Tazlitobox pode criar uma variante em poucos cliques do
	mouse. O <a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.pt_BR.html">manual do Tazlito</a> 
	e a <a href="http://doc.slitaz.org/pt:handbook:genlivecd">documentação</a> fornecem
	instruções detalhadas para a geração de variantes. Na linha de comando, você 
	pode obter uma lista de variantes disponíveis via <code>tazlito list-flavors</code>.
</p>

<h3>Crie e compartilhe sua própria variante</h3>
<p>
	As versões estável e de testes oferecem a variante <em>core</em> no mirror,
	que pode ser usada como base para criar sua própria variante. A documentação
	no Manual SliTaz oferece todas as instruções necessárias para
	<a href="http://doc.slitaz.org/pt:handbook:genlivecd">criar sua própria variante do LiveCD</a>.
</p>
<p>
	Se você criou sua própria variante, pode envia-la para a 
	<a href="../mailing-list.php">lista de discussão</a> para que ela seja testada
	e incluida nas variantes oficiais. O sistema de variantes pode ser comparado
	ao de pacotes - cada variante possui um mantenedor.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
