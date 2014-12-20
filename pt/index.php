<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<title>SliTaz GNU/Linux (pt)</title>
	<meta name="description" content="Site em português do SliTaz GNU/Linux" />
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, software opensource, livecd LINUX na RAM" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../lib/html/meta-link.html") ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.pt.html");
include("../lib/html/nav.pt.html");
include("../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Bem vindo ao SliTaz</h2>

<div class="box-up">
    <a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
        title="Visite esta página"><img src="../images/gofundme.png"></a>
    <a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Participe das doações para o SliTaz em 2014!</a>
</div>

<!-- Featured Sponsor -->
<div id="sponsor">
    <p><strong>Patrocinador em destaque</strong></p>
    <?php include("../lib/rand-sponsor.php"); ?>
    <p><a href="/pt/sponsor/">Torne-se um patrocinador!</a></p>
</div>

<!--
    SliTaz News starting
-->

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Últimos lançamentos</h2>

<ul>
    <li><strong><a href="news/#d20140519">Lançamento do SliTaz 5.0 RC-2</a></strong>
        <span>- 19 de maio de  2014</span></li>
    <li><strong><a href="news/#d20140502">Lançamento do SliTaz 5.0 RC-1</a></strong>
        <span>- 02 de maio de 2014</span></li>
    <li><strong><a href="news/#d20140329">Lançamento do SliTaz Raspberry Pi</a></strong>
        <span>- 29 de março de 2014</span></li>
    <li><strong><a href="news/#d20140216">Novo SliTaz Cooking</a></strong>
        <span>- 16 de fevereiro de 2014</span></li>
    <li><strong><a href="news/2012.php#d20120410">Lançamento do SliTaz 4.0</a></strong>
        <span>- 10 de abril de 2012</span></li>
    <li><strong><a href="news/">Arquivo dos lançamentos anteriores</a></strong>
        <span>- 2007-2013</span></li>   
</ul>        

<!-- Enf of news -->
</div>

<h2>Atalho para downloads</h2>

<div class="dldiv">
	<p><?php echo "<a class='dlbutton nav1' href='$stable_iso'>SliTaz $stable_ver</a>
	<a class='dlbutton nav2' href='$cooking_iso'>SliTaz $cooking</a>"; ?>
	<a class='dlbutton navpi' href='http://arm.slitaz.org/rpi'>SliTaz Raspberry Pi</a></p>
</div>

<h2>Atividades do projeto</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ ]" /></a>
		Atividade do fórum
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Obtenha suporte</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Últimos commits no wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mais commits</a>
	</p>
</div>

<!-- SCN blog posts  
<h2>Posts do blog</h2>

<div class="news">
	<?php //get_feed_blog("blog.xml"); ?>
</div>-->

<!-- Twitter  -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz"  
	data-widget-id="420830244551938048">Tweets por @slitaz</a>
	<style type="text/css">
		.twitter-timeline { width: 100%; }
	</style>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<h2>Ajude-nos</h2>

<p>
    Você pode ajudar o SliTaz a se tornar mais popular ou fazer uma doação,
    usando o Paypal ou o sistema de micro pagamentos Flattr. Você também
    pode blogar, twittar e falar sobre o projeto para aumentar nosso
    número de usuários. Caso deseje fazer parte da comunidade do SliTaz,
    cadastre-se em nosso <a href="http://scn.slitaz.org/">portal para a comunidade</a>.
</p>
<p>
    Você também pode se tornar um patrocinador oficial via uma doação mensal ou
    fornecendo hardware ou recursos para servidores. 
	<a href="sponsor/">Maiores informações</a>.
</p>

<?php include("../lib/html/donate.html"); ?>

<h2>Divulgue o SliTaz</h2>

<p>
    Uma forma de ajudar o projeto é torna-lo mais popular. Escreva sobre
    o SliTaz em seu blog, twitter, compartilhe essa página com seus amigos.
    Temos nosso próprio 
    <a href="http://scn.slitaz.org/">portal da comunidade</a>, em que você 
    pode contribuir com artes sobre o projetos, escritos, etc. Também
    possuimos uma página no Facebook, curta e participe!
</p>

<?php include("../lib/html/social.pt.html"); ?>

<h2>Internacionalização</h2>

<p>
O website do SliTaz está disponível em diversas linguagens e é mantido pelo
time de <a href="../i18n.php">internacionalização</a> (i18n). Ajuda é sempre
bem vinda e você pode entrar em contato conosco a qualquer tempo para contribuir
e ajudar o projeto a ter as páginas traduzidas em sua língua.
</p>
<p>
	<img src="../images/users.png" alt="*" />
	<a href="http://scn.slitaz.org/groups/i18n/">Entre no grupo i18n no SCN</a>
</p>

<!-- End of content  -->
</section>

<?php include("../lib/html/footer.pt.html"); ?>

</body>
</html>
