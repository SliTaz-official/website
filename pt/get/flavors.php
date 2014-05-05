<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset=utf-8" />
	<title>SliTaz - Variantes do LiveCD</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD flavors" />
	<meta name="keywords" lang="pt" content="slitaz flavor" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php
include("../../lib/html/header.pt.html");
include("../../lib/html/nav.pt.html");
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Obtenha as Variantes</h2>
<p>
    O sistema de variantes do LiveCD é uma maneira simples de a
    comunidade gerar imagens ISO para certas tarefas, oferecendo
    uma seleção específica de pacotes. Há duas formas de se 
    utilizar variantes: usar uma feita pela comunidade ou criar
    a sua própria.
</p>

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
</section>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
