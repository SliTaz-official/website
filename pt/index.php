<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<title>SliTaz GNU/Linux (pt)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, software opensource, livecd LINUX na RAM" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../lib/html/meta-link.html") ?>
</head>
<body>

<?php include("../lib/html/header.pt.html") ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.pt.html") ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>P�gina principal</h4>
		<p>
			O SliTaz � um sistema operacional livre. � distribuido na 
			forma de um LiveCD, sendo que a imagem ISO possui menos de
			35 MB.
		</p>
		<p>
			O sistema � r�pido e robusto, possui um desktop elegante, 
			leve e intuitivo, documenta��o detalhada e ferramentas de
			configura��o f�ceis de se utilizar. 
			<a href="about/">Mais informa��es...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="../images/update.png" alt=" [Update ]" style="float: left; margin-right: 10px; " />
	<p>
		Ajude-nos a obter um servidor dedicado - Visite a p�gina de
		<a href="http://www.gofundme.com/3ql70">Doa��o Online</a>
		ou torne-se um
		<a href="/pt/sponsor/">patrocinador</a> oficial.
	</p>
</div>

<h2>�ltimas not�cias</h2>

<div class="news">
<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li><strong>03 Mar 2012 - SliTaz 4.0-RC2</strong>
	<p>
		A equipe do SliTaz tem o prazer de anunciar a disponibilidade do
		segundo "Release Candidate" (RC) para a vers�o 4.0. N�s tivemos 
		muito trabalho corrigindo bugs da RC anterior e nas ferramentas 
		para usu�rios-finais como TazPKG, TazPanel e TazUSB. A 
		configura��o de redes wireless ficou mais f�cil, podendo ser 
		feita pelo TazPanel ou pela nova ferramente wifibox. O TazPKG 
		ganhou uma melhor integra��o ao desktop e um novo sistema de 
		notifica��es.
	</p>
	<p>
		Este RC fornece um sistema gr�fico Xorg completo, com suporte a
		DRI e a placas de rede que utilizam os drivers nv, intel, geode
		e vesa. Tamb�m reconstru�mos todos os pacotes , retirando 
		aproximadamente 2MB da iso desde o �ltimo RC, o que permitiu
		a inclus�o dos pacotes LXRandR, Parcellite e o cliente
		BitTorrent Transmission. Gostariamos de agradecer a todos que
		testaram o primei ro RC; esse RC2 � bem pr�ximo � vers�o 4.0 
		do SliTaz, planejada para duas semanas.
	</p>
	<p>
		Baixe a imagem iso do RC2 de nosso mirror:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>
	<li><strong>23 Feb 2012 -  SliTaz 4.0 RC1</strong>
	<p>
		O time de desenvolvedores do SliTaz anuncia a disponibilidade do primeiro
		"Release Candidate (RC)" para a vers�o 4.0. Sua inicializa��o � r�pida,
		entre 10 a 12 segundos em hardware mais recente. Com a nova iso 4in1 pode-se
		instalar o sistema em computadores com apenas 48MB de mem�ria RAM. Esta
		ISO pode autodetectar a mem�ria dispon�vel e iniciar o SliTaz em modo texto,
		em um sistema gr�fico m�nimo ou em um desktop completo.
	</p>
	<p>
		A vers�o 4.0 ter� mais de 3000 pacotes bem testados em seus
		reposit�rios. Desde a �ltima vers�o de testes (cooking) os pacotes foram compilados
		duas vezes para assegurar a qualidade. Este Release Candidate permite
		aos usu�rios e desenvolvedores descobrirem alguns poss�veis bugs antes
		da vers�o final.
	</p>
	<p>
		As novidades deste RC s�o: um novo menu gr�fico na inicializa��o,
		configura��o de linguagem e teclado com ferramentas gr�ficas,
		novo desenho de desktop, nova arte e novo instalador em modo texto
		com interface web acess�vel localmente pelo TazPanel. Baixe a ISO
		a partir de nosso mirror:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>

	<li><strong>Arquivos de Not�cias:</strong> 
	<a href="news/2008.php">2008</a> |
	<a href="news/2009.php">2009</a> |
    <a href="news/2010.php">2010</a> |
    <a href="news/">2011</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Atividades do projeto</h2>
<?php
	require_once("../lib/get-feeds.php");
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
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ Support ]" /></a>
		Forum activity
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">More support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="development.png" /></a>
		�ltimos commits no wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mais commits</a>
	</p>
</div>

<h2>Ajude-nos</h2>
<p>
	Ajude o SliTaz a ser mais popular ou fa�a uma doa��o. Pode criar um 
	post de blog, um tweet, divulgar o projeto no facebook ou tamb�m 
	fazer parte da <a href="http://scn.slitaz.org/">comunidade</a>.
</p>

<?php include("../lib/html/social.html") ?>

<p>
	Voc� pode usar PayPal ou Flattr para doa��es em dinheiro para o projeto.
</p>

<?php include("../lib/html/donate.html") ?>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.pt.html") ?>

</body>
</html>
