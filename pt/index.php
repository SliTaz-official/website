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
		<h4>Navega��o</h4>
		<div class="right_box">
			<ul>
				<li><a href="mailing-list.html">Lista de discuss�o</a></li>
				<li><a href="devel/">Desenvolvimento</a></li>
				<li><a href="packages/">Pacotes</a></li>
				<li><a href="artwork/">Artwork</a></li>
				<li><a href="search.html">Procurar</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">�ltimas not�cias</a></li>
				<li><a href="about/">Sobre o projeto</a></li>
				<li><a href="get/">Download</a></li>
				<li><a href="asso/">Associa��o</a></li>
				<li><a href="doc/">Documenta��o</a></li>
			</ul>
		</div>
	</div>
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

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Espa�ol</a>
	<a href="../fr/">Fran�ais</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Portugu�s</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="../images/update.png" style="float: left; margin-right: 10px; " />
	<p>
		Help us get a dedicated server - Check out our
		<a href="http://www.gofundme.com/3ql70">online fundraising</a>
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
	<li><strong>31 May 2011 - Novo Cooking (20110329)</strong>
	<p>
		Os desenvolvedores do SliTaz anunciam o lan�amento de uma nova vers�o
		de testes (cooking). Os pacotes foram recompilados e otimizados para
		a arquitetura i486 pelo Cookutils, a nova gera��o das ferramentas de
		cria��o de pacotes da distribui��o. O servidor de compila��o agora
		possui uma amig�vel interface web que funciona por padr�o em qualquer
		instala��o do SliTaz.
	</p>
	<p>
		A inicializa��o foi melhorada e a configura��o no primeiro boot foi
		simplificada. Este lan�amento traz o TazPanel, uma interface web que
		centraliza a configura��o do sistema e gerenciamento de pacotes,
		substituindo as antigas caixas de di�logo da distribui��o e podendo,
		inclusive, ser utilizada em conex�es remotas.
	</p>
	<p>
		O sistema gr�fico agora suporta renderiza��o direta (DRI), ent�o os
		pacotes libdrm, linux-drm e linux-agp passaram a fazer parte da ISO
		padr�o. Isto adicionou 1 MB ao sistema de arquivos comprimido, por�m
		a nova forma de compila��o de pacotes economiza espa�o, o que manteve
		o tamanho da ISO em apenas 35 MB! Download:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>
	
	<li><strong>29 Mar 2011 - Novo Cooking (20110329)</strong>	
	<p>Os desenvolvedores do SliTaz anunciam o lan�amento de uma nova ISO
	da vers�o Cooking (de testes), que conta com mais de 2900 pacotes
	nos reposit�rios. Todos os pacotes foram recompilados utilizando
	as ferramentas atualizadas da distribui��o, dispon�veis no Tazwok.
	A ISO contem o Kernel Linux 2.6.37 compilado com a glibc 2.13, o binutils
	2.21 e o gcc 2.5.2. O LiveCD inclui o Midori 0.3.3; o tazpkg possui tradu��o
	completa para o franc�s, podendo ser agora traduzido em outras l�nguas;
	o tazwok foi inteiramente reescrito e agora � poss�vel recompilar o SliTaz
	a partir dos fontes utilizando-se qualquer imagem ISO. Este lan�amento
	� o primeiro visando a pr�xima vers�o est�vel 4.0.</p>
	<p>Muito trabalho foi feito desde a vers�o cooking anterior, lan�ada em novembro:
	mais de 2200 mudan�as ocorreram no wok (reposit�rios de pacotes) e v�rias
	outras nas ferramentas pr�prias da distribui��o. A comunidade do SliTaz
	cresceu recentemente: neste �ltimo ano, houveram tantas mudan�as
	quanto nos 4 anos anteriores, ou seja, em toda a hist�ria da distribui��o. 
	Entretanto, quantidade n�o � suficiente para garantir qualidade. Por isso
	precisamos que voc� teste esta nova ISO e nos informe sobre eventuais bugs
	podendo, inclusive, ajudar a resolve-los antes do lan�amento da vers�o 4.0. 
	Voc� pode nos contatar os via IRC, lista de discuss�o, f�rum ou mandando um email 
	diretamente para os mantenedores de pacotes. Esperamos que voc� goste deste novo 
	<a href="get/">lan�amento!</a></p>
	</li>

	<li><strong>Arquivos de Not�cias:</strong> 
	<a href="news/2008.html">2008</a> |
	<a href="news/2009.html">2009</a> |
    <a href="news/">2010</a></li>
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
    Ajude o SliTaz a ser mais popular ou fa�a uma doa��o. Voc� pode usar
    PayPal ou Flattr para doa��es em dinheiro para o projeto. Pode criar 
    um post de blog, um tweet, divulgar o projeto no facebook ou
    tamb�m fazer parte da <a href="http://scn.slitaz.org/">comunidade</a>.
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
