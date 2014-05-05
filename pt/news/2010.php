<!DOCTYPE html>
<html lang="pt">
<head>
	<title>SliTaz - Arquivo de notícias (2010)</title>
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

<h2>Notícias do SliTaz (2010)</h2>
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
	<li id="d20101104"><strong>4 de Novembro de 2010 - Nova versão "cooking" 20101104</strong>
	<p>Os desenvolvedores do SliTaz anunciam uma nova imagem ISO da versão
	de testes da distribuição. Há mais de 2600 pacotes nos repositórios,
	o kernel Linux versão 2.6.34 foi compilado com o novo "toolchain"
	(ferramentas de desenvolvimento) - que inclui a glibc 2.11.2 e o gcc 4.5.1 -
	e o servidor gráfico Xorg foi atualizado para a versão 1.9.2. O LiveCD
	traz o Midori como navegador Web, o reprodutor de áudio Deadbeef e vários
	outros aplicativos úteis. O gerenciador de pacotes Tazpkg e o Tazctrlbox
	agora suportam localização por meio do gettext e mais locales UTF foram
	adicionados. Houve várias correções de bugs, atualizações e melhorias nestes
	últimos 6 meses de muito trabalho. Você pode fazer o 
	<a href="../get/#cooking">download</a> desta nova versão a partir de um
	dos mirrors oficiais do projeto, podendo recorrer aos fóruns e às listas 
	de discussão para dar seu feedback.</p>
	</li>

	<li id="d20100508"><strong>08 Mai 2010 - Mutirão da Documentação</strong>
	<p>Os desenvolvedores do SliTaz estão organizando um 'Mutirão da
	Documentação', de 10 de maio a 10 de junho do corrente ano. O objetivo
	principal é centralizar, revisar e atualizar toda a documentação
	online. Maiores detalhes podem ser obtidos em
	<a href="http://doc.slitaz.org/">doc.slitaz.org</a>. Esperamos que todos
	os usuários da distribuição possam colaborar, atualizando a
	documentação existente ou adicionando novos documentos.</p>
	</li>

	<li id="d20120328"><strong>28 Mar 2010 - Lançada a Versão 3.0 do SliTaz GNU/Linux</strong>
	<p>Os participantes do projeto SliTaz GNU/Linux anunciam orgulhosamente 
	o lançamento da versão 3.0, que surge após um ano de desenvolvimento.
	Esta nova versão estável está simples, rápida, customizável, poderosa e 
	ainda assim permanece inacreditavelmente leve.</p>
	<p>O desktop padrão é constituído do servidor gráfico Xorg 7.4, do Openbox,
	componentes do ambiente desktop LXDE e ferramentas próprias da distribuição.
	Ele permite conectar de forma simples à internet, navegar na web com o
	Midori, ouvir música ou gerenciar e editar imagens e fotos.</p>
	<p>O sistema básico cabe numa imagem ISO de 30 Mb e as variantes do LiveCD
	possuem o mínimo de 8 Mb. Esta nova versão foi construída com o novo 
	toolchain (ferramentas básicas de desenvolvimento), que inclui o GCC 4.4.1
	e o kernel Linux 2.6.30.6. Acesse as <a href="../doc/releases/3.0/relnotes.pt.html">
	notas de lançamento</a> completas para maiores informações e 
	<a href="../get/#stable">baixe</a> uma imagem do LiveCD a partir dos mirrors.</p> 
	</li>

	<li id="d20100314"><strong>14 Mar 2010 - Primeiro RC e convenção Solutionslinux 2010 (Paris)</strong>
	<p>Visto que estamos mais perto de lançar uma versão estável, 
	atualizamos a imagem ISO básica e iniciamos uma série de RC (Release
	Candidates). A maior mudança fica por conta de utilizarmos o Midori
	como navegador padrão, melhorando a experiência do usuário ao mesmo
	tempo que mantemos a imagem ISO em torno de 30MB. Este moderno navegador
	utiliza o motor de renderização webkit, sendo rápido, simples e bem
	integrado ao desktop do SliTaz.</p>
	<p>Esta nova ISO traz várias correções de bugs e de dependências,
	assim como melhorias nas ferramentas e scripts do sistema. Ela pode
	ser baixada a partir do mirror oficial: 
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">slitaz-cooking.iso</a></p>
	<p>Outra notícia é que o Projeto SliTaz estará presente na convenção
	<a href="http://www.solutionslinux.fr/">Solutionslinux</a> 2010, que
	ocorre na próxima semana em Paris. Quem estiver presente poderá 
	aprender mais sobre o projeto e entrar em contato com os membros da
	associação e desenvolvedores.</p>
	</li>

	<li id="d20100221"><strong>21 Fev 2010 - Nova Versão Cooking 20100221</strong>
	<p>Os desenvolvedores do SliTaz anunciam orgulhosamente a nova versão de 
	testes (cooking) do LiveCD, que será a última antes do RC (Release 
	Candidate) e consequente versão estável 3.0. Esta nova versão traz 
	diversas mudanças e melhorias. A imagem ISO básica possui 27 MB e fornece
	um desktop simples para o uso diário e vários aplicativos, tais como o
	Netsurf para navegar na web. Também iremos disponibilizar uma variante
	(flavor) com o Firefox que terá 29 MB com suporte a som e redes sem fio.
	Esta versão também oferece suporte total a UTF-8 e utiliza o Xorg como
	servidor gráfico.</p>
	<p>Sobre o que foi melhorado e atualizado: o gerenciador de pacotes tazpkg
	está mais rápido, os scritps de boot foram atualizados e as ferramentas
	do sistema melhoradas. O gerenciador de redes sem fio utiliza o awk para
	melhorar a procura de rede. O suporte a WPA nos scripts de boot foi 
	melhorado e é feito um log do tempo de boot. O instalador do SliTaz
	agora irá: tentar usar um arquivo gravado em uma mídia USB se não houver
	um CDROM, permitir o uso de uma partição /home separada, criar uma
	conta de usuário padrão e definir a senha do root. Finalmente, a
	customização do LiveCD é agora muito mais fácil, o usuário precisa apenas 
	iniciar o boot, modificar o que achar necessário e usar a opção writefs
	a partir da interface gráfica do Tazlito ou da linha de comando.</p>
	<p>Como sempre, pode-se fazer o <a href="../get/#cooking">download</a> 
	das novas imagens ISO a partir do mirror oficial do projeto. Por favor,
	informe-nos sobre suas impressões no fórum do SliTaz.</p>
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