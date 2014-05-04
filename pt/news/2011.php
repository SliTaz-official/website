<!DOCTYPE html>
<html lang="pt">
<head>
	<title>SliTaz - Arquivo de notícias (2011)</title>
	<meta charset=utf-8" />
	<meta name="description" content="SliTaz news archives info release" />
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, opensource software, livecd na RAM" />
	<meta name="author" content="Claudinei Pereira"/>
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

<h2>Notícias do SliTaz (2011)</h2>
<p>
    As notícias do site arquivadas por ano. Note que alguns
    links podem estar quebrados devido a mudanças na estrutura
    do site (principalmente a parte da documentação que foi 
    movida para domínio próprio).
</p>
<p>
    Para outras notícias e informações você também pode consultar o
    <a href="http://scn.slitaz.org/">Blog da comunidade do SliTaz</a>.
</p>

<div class="news">

<ul>
    <li id="20110329"><strong>29 de março de 2011 - Novo Cooking (20110329)</strong>
	<p>
		Os desenvolvedores do SliTaz anunciam o lançamento de uma nova versão
		de testes (cooking). Os pacotes foram recompilados e otimizados para
		a arquitetura i486 pelo Cookutils, a nova geração das ferramentas de
		criação de pacotes da distribuição. O servidor de compilação agora
		possui uma amigável interface web que funciona por padrão em qualquer
		instalação do SliTaz.
	</p>
	<p>
		A inicialização foi melhorada e a usuário no primeiro boot foi
		simplificada. Este lançamento traz o TazPanel, uma interface web que
		centraliza a usuário do sistema e gerenciamento de pacotes,
		substituindo as antigas caixas de diálogo da distribuição e podendo,
		inclusive, ser utilizada em conexões remotas.
	</p>
	<p>
		O sistema gráfico agora suporta renderização direta (DRI), então os
		pacotes libdrm, linux-drm e linux-agp passaram a fazer parte da ISO
		padrão. Isto adicionou 1 MB ao sistema de arquivos comprimido, porém
		a nova forma de compilação de pacotes economiza espaço, o que manteve
		o tamanho da ISO em apenas 35 MB! Download:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
		slitaz-cooking.iso</a>
	</p>
	</li>

	<li id="d20110329"><strong>29 Mar 2011 - Novo Cooking (20110329)</strong>	
	<p>Os desenvolvedores do SliTaz anunciam o lançamento de uma nova ISO
	da versão Cooking (de testes), que conta com mais de 2900 pacotes
	nos repositórios. Todos os pacotes foram recompilados utilizando
	as ferramentas atualizadas da distribuição, disponíveis no Tazwok.
	A ISO contem o Kernel Linux 2.6.37 compilado com a glibc 2.13, o binutils
	2.21 e o gcc 2.5.2. O LiveCD inclui o Midori 0.3.3; o tazpkg possui tradução
	completa para o francês, podendo ser agora traduzido em outras línguas;
	o tazwok foi inteiramente reescrito e agora é possível recompilar o SliTaz
	a partir dos fontes utilizando-se qualquer imagem ISO. Este lançamento
	é o primeiro visando a próxima versão estável 4.0.</p>
	<p>Muito trabalho foi feito desde a versão cooking anterior, lançada em novembro:
	mais de 2200 mudanças ocorreram no wok (repositórios de pacotes) e várias
	outras nas ferramentas próprias da distribuição. A comunidade do SliTaz
	cresceu recentemente: neste último ano, houveram tantas mudanças
	quanto nos 4 anos anteriores, ou seja, em toda a história da distribuição. 
	Entretanto, quantidade não é suficiente para garantir qualidade. Por isso
	precisamos que você teste esta nova ISO e nos informe sobre eventuais bugs
	podendo, inclusive, ajudar a resolve-los antes do lançamento da versão 4.0. 
	Você pode nos contatar os via IRC, lista de discussão, fórum ou mandando um email 
	diretamente para os mantenedores de pacotes. Esperamos que você goste deste novo 
	<a href="../get/">lançamento!</a></p>
	</li>
</ul>

</div>

<h2 id="archives">Arquivos de notícias</h2>

<p>
	<img src="/images/news.png" alt="[ ]" />
	<a href="2008.php">2008</a> | <a href="2009.php">2009</a>
	| <a href="2010.php">2010</a> | <a href="2011.php">2011</a>
	| <a href="2012.php">2012</a> | <a href="index.php">2014</a>
</p>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
