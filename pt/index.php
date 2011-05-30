<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<title>SliTaz GNU/Linux (pt)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, software opensource, livecd LINUX na RAM" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Claudinei Pereira" />
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../slitaz.css" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="../en/rss.xml" />
	<link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/activity/feed/" />
	<script type="text/javascript">
	/* <![CDATA[ */
	    (function() {
	        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
	        s.type = 'text/javascript';
	        s.async = true;
	        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
	        t.parentNode.insertBefore(s, t);
	    })();
	/* ]]> */
	</script>
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://bugs.slitaz.org">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>Navegação</h4>
		<div class="right_box">
			<ul>
				<li><a href="mailing-list.html">Lista de discussão</a></li>
				<li><a href="devel/">Desenvolvimento</a></li>
				<li><a href="packages/">Pacotes</a></li>
				<li><a href="artwork/">Artwork</a></li>
				<li><a href="search.html">Procurar</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">Últimas notícias</a></li>
				<li><a href="about/">Sobre o projeto</a></li>
				<li><a href="get/">Download</a></li>
				<li><a href="asso/">Associação</a></li>
				<li><a href="doc/">Documentação</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Página principal</h4>
		<p>
			O SliTaz é um sistema operacional livre. É distribuido na 
			forma de um LiveCD, sendo que a imagem ISO possui menos de
			30 mb.
		</p>
		<p>
			O sistema é rápido e robusto, possui um desktop elegante, 
			leve e intuitivo, documentação detalhada e ferramentas de
			configuração fáceis de se utilizar. 
			<a href="about/">Mais informações...</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Español</a>
	<a href="../fr/">Français</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Português</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<h2>Últimas notícias</h2>

<div class="news">
<ul>
	<li><strong>31 May 2011 - Novo Cooking (20110329)</strong>
	<p>
		Os desenvolvedores do SliTaz anunciam o lançamento de uma nova versão
		de testes (cooking). Os pacotes foram recompilados e otimizados para
		a arquitetura i486 pelo Cookutils, a nova geração das ferramentas de
		criação de pacotes da distribuição. O servidor de compilação agora
		possui uma amigável interface web que funciona por padrão em qualquer
		instalação do SliTaz.
	</p>
	<p>
		A inicialização foi melhorada e a configuração no primeiro boot foi
		simplificada. Este lançamento traz o TazPanel, uma interface web que
		centraliza a configuração do sistema e gerenciamento de pacotes,
		substituindo as antigas caixas de diálogo da distribuição e podendo,
		inclusive, ser utilizada em conexões remotas.
	</p>
	<p>
		O sistema gráfico agora suporta renderização direta (DRI), então os
		pacotes libdrm, linux-drm e linux-agp passaram a fazer parte da ISO
		padrão. Isto adicionou 1 MB ao sistema de arquivos comprimido, porém
		a nova forma de compilação de pacotes economiza espaço, o que manteve
		o tamanho da ISO em apenas 30 MB! Download:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>
	
	<li><strong>29 Mar 2011 - Novo Cooking (20110329)</strong>	
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
	<a href="get/">lançamento!</a></p>
	</li>

	<li><strong>Arquivos de Notícias:</strong> 
	<a href="news/2008.html">2008</a> |
	<a href="news/2009.html">2009</a> |
    <a href="news/">2010</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Atividades do projeto</h2>
<?php
	require_once("../libs/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="users.png" /></a>
		Atividade da comunidade
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Mais atividade</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="development.png" /></a>
		Últimos commits no wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mais commits</a>
	</p>
</div>

<h2>Ajude-nos</h2>
<p>
    Ajude o SliTaz a ser mais popular ou faça uma doação. Você pode usar
    PayPal ou Flattr para doações em dinheiro para o projeto. Pode criar 
    um post de blog, um tweet, divulgar o projeto no facebook ou
    também fazer parte da <a href="http://scn.slitaz.org/">comunidade</a>.
</p>

<div>
	<!-- PayPal Button -->
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
		style="display: inline;">
		<input type="hidden" name="cmd" value="_s-xclick" />
		<input type="hidden" name="hosted_button_id" value="4885025" />
		<input type="image" src="../images/paypal.png" name="submit" 
			alt="PayPal - The safer, easier way to pay online!" />
	</form>
	<!-- Flattr Button -->
	<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;"
		href="http://www.slitaz.org/"></a>
	<!-- Twitter Button -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<a href="http://twitter.com/share" class="twitter-share-button" 
		data-text="SliTaz GNU/Linux" 
		data-count="horizontal"
		data-via="slitaz">Tweet</a>
</div>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://bugs.slitaz.org">Bugs</a>
	<a href="http://hg.slitaz.org/">Hg</a>
	<p>
		SliTaz @
		<a href="http://twitter.com/slitaz">Twitter</a>
		<a href="http://www.facebook.com/slitaz">Facebook</a>
		<a href="http://distrowatch.com/slitaz">Distrowatch</a>
		<a href="http://en.wikipedia.org/wiki/SliTaz">Wikipedia</a>
		<a href="http://flattr.com/profile/slitaz">Flattr</a>
	</p>
</div>

</body>
</html>
