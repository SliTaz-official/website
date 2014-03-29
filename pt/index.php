<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux (pt)</title>
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
		<h4>Página principal</h4>
		<p>
			O SliTaz é um sistema operacional livre. É distribuido na 
			forma de um LiveCD, sendo que a imagem ISO possui menos de
			35 MB.
		</p>
		<p>
			O sistema é rápido e robusto, possui um desktop elegante, 
			leve e intuitivo, documentação detalhada e ferramentas de
			configuração fáceis de se utilizar. 
			<a href="about/">Mais informações...</a>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Check out our new SliTaz 2014 fundraising!</a>
</div>

<h2>Últimas notícias</h2>

<div class="news">
<ul>
	<!-- <li id="d20120223">
		<strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li id="d20140216">
		<strong>16 Feb 2014 - Novo Cooking (20140216)</strong>
	<p>
  	Os desenvolvedores do SliTaz anunciam o lançamento danova versão Cooking
	(de testes), que é a base para a próxima versão estável 5.0. Ela traz quase
	2 anos de trabalho e grandes mudanças. Todas as ferramentas do sistema foram
	melhoradas com novas funções como "frugal" (gerencia instalações frugais 
	da distribuição) e "decode" (decodifica diversos arquivos de áudio).
	A versão cooking foca na integração do Desktop para fornecer uma melhor
	experiência ao usuário, assim como traz uma configuração de Kernel (3.2.53)
	mais abrangente. 
	</p>
	<p>
	Todos os pacotes existentes foram atualizados e novos foram adicionados, 
	totalizando em torno de 4200 pacotes disponibilizados para instalação. O
	instalador da distribuição também foi modificado, trazendo uma nova
	interface de usuário em modo texto.
	</p>
	<p>
	O LiveCD agora requisita a configuração de linguagem antes do boot, assim
	o usuário obtém seu desktop diretamente configurado e pronto para ser utilizado.
	O tamanho da imagem ISO ficou um pouco maior para que haja melhor suporte a
	hardware e abrigar novas funções. A ISO pode ser obtida a partir de um mirror
	do SliTaz:
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
		>slitaz-cooking.iso</a>
	[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
		>md5</a> ]
	</p>
	</li>
    
	<li id="d20120410">
		<strong>10 Abr 2012 - Lançamento do SliTaz GNU/Linux 4.0</strong>
	<p>
        Os desenvolvedores do SliTaz anunciam o lançamento da nova versão
        estável da distribuição, SliTaz GNU/Linux 4.0. Dois anos de
        trabalho em conjunto resultaram em um sistema confiável, com tempo
        de boot rápido e com mais de 1000 novos pacotes disponíveis para
        instalação.
	</p>
	<p>
        O SliTaz fornece um ambiente de trabalho gráfico completo,
        baseado no LXDE e no Openbox, em uma imagem ISO de apenas 35 MB, 
        com seu modo "Live" carregado em 192 MB de memória RAM. A imagem 
        "4 em 1" pode ser instalada em disco rígido com o mínimo de 48 MB 
        de memória RAM disponível, possuindo seleção automática que 
        detecta as configurações da máquina utilizada e executa a melhor
        versão da distribuição disponível.
	</p>
	<p>
        As ferramentas próprias da distribuição foram melhoradas: o Tazpkg
        possui um novo sistema de notificação e está muito mais rápido, 
        mesmo com vários novos pacotes adicionados ao repositório e o
        novo Tazpanel centraliza todo o gerenciamento do sistema. Maiores
        detalhes podem ser encontrados nas <a 
        href="doc/releases/4.0/relnotes.pt_BR.html">notas de lançamento.</a> 
		Baixe a imagem ISO a partir de nosso mirror: 
		<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	</p>
	</li>
    
	<li id="d20120410"><strong>03 Mar 2012 - SliTaz 4.0-RC2</strong>
	<p>
		A equipe do SliTaz tem o prazer de anunciar a disponibilidade do
		segundo "Release Candidate" (RC) para a versão 4.0. Nós tivemos 
		muito trabalho corrigindo bugs da RC anterior e nas ferramentas 
		para usuários-finais como TazPKG, TazPanel e TazUSB. A 
		configuração de redes wireless ficou mais fácil, podendo ser 
		feita pelo TazPanel ou pela nova ferramente wifibox. O TazPKG 
		ganhou uma melhor integração ao desktop e um novo sistema de 
		notificações.
	</p>
	<p>
		Este RC fornece um sistema gráfico Xorg completo, com suporte a
		DRI e a placas de rede que utilizam os drivers nv, intel, geode
		e vesa. Também reconstruímos todos os pacotes , retirando 
		aproximadamente 2MB da iso desde o último RC, o que permitiu
		a inclusão dos pacotes LXRandR, Parcellite e o cliente
		BitTorrent Transmission. Gostariamos de agradecer a todos que
		testaram o primei ro RC; esse RC2 é bem próximo à versão 4.0 
		do SliTaz, planejada para duas semanas.
	</p>
	<p>
		Baixe a imagem iso do RC2 de nosso mirror:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>

	<li id="d20120410"><strong>23 Feb 2012 -  SliTaz 4.0 RC1</strong>
	<p>
		O time de desenvolvedores do SliTaz anuncia a disponibilidade do primeiro
		"Release Candidate (RC)" para a versão 4.0. Sua inicialização é rápida,
		entre 10 a 12 segundos em hardware mais recente. Com a nova iso 4in1 pode-se
		instalar o sistema em computadores com apenas 48MB de memória RAM. Esta
		ISO pode autodetectar a memória disponível e iniciar o SliTaz em modo texto,
		em um sistema gráfico mínimo ou em um desktop completo.
	</p>
	<p>
		A versão 4.0 terá mais de 3000 pacotes bem testados em seus
		repositórios. Desde a última versão de testes (cooking) os pacotes foram compilados
		duas vezes para assegurar a qualidade. Este Release Candidate permite
		aos usuários e desenvolvedores descobrirem alguns possíveis bugs antes
		da versão final.
	</p>
	<p>
		As novidades deste RC são: um novo menu gráfico na inicialização,
		configuração de linguagem e teclado com ferramentas gráficas,
		novo desenho de desktop, nova arte e novo instalador em modo texto
		com interface web acessível localmente pelo TazPanel. Baixe a ISO
		a partir de nosso mirror:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>
	</li>

	<li id="d20120410"><strong>Arquivos de Notícias:</strong> 
	<a href="news/2008.php">2008</a> |
	<a href="news/2009.php">2009</a> |
    <a href="news/2010.php">2010</a> |
    <a href="news/">2011</a></li>
</ul>

<!-- End of news -->
</div>

<h2>Atividades do projeto</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="/images/users.png" alt="[ ]" /></a>
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
			src="/images/support.png" alt="[ ]" /></a>
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
			<img src="/images/development.png" alt="[ ]" /></a>
		Últimos commits no wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Mais commits</a>
	</p>
</div>

<h2>Ajude-nos</h2>

<p>
	Ajude o SliTaz a ser mais popular ou faça uma doação. Pode criar um 
	post de blog, um tweet, divulgar o projeto no facebook ou também 
	fazer parte da <a href="http://scn.slitaz.org/">comunidade</a>.
</p>

<?php include("../lib/html/social.html") ?>

<p>
	Você pode usar PayPal ou Flattr para doações em dinheiro para o projeto.
</p>

<?php include("../lib/html/donate.html") ?>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.pt.html") ?>

</body>
</html>
