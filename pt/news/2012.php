<!DOCTYPE html>
<html lang="pt">
<head>
	<title>SliTaz - Arquivo de notícias (2012)</title>
	<meta charset="utf-8" />
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

<h2>Notícias do SliTaz (2012)</h2>
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
		para usuários finais como TazPKG, TazPanel e TazUSB. A 
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
		testaram o primeiro RC; esse RC2 é bem próximo à versão 4.0 
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
