<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Arquivo de not�cias</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz news archives info release" />
    <meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, opensource software, livecd na RAM" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php include("../../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">
   	<?php include("../../lib/html/nav.pt.html"); ?>
   	<!-- Information/image -->
    <div id="block_info">
		<h4>Arquivos de not�cias</h4>
		<p>
            As not�cias do site arquivadas por ano. Note que alguns
            links podem estar quebrados devido a mudan�as na estrutura
            do site (principalmente a parte da documenta��o que foi 
            movida para dom�nio pr�prio)
		</p>
		<p>
			<img src="../../images/news.png" alt="[ Not�cias]" /> 
			<a href="2008.php">2008</a> | 
            <a href="2009.php">2009</a> | 
            <a href="./">2010</a> |
            <a href="index.php">2011</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>2010</h2>

<ul>
	<li><strong>4 de Novembro de 2010 - Nova vers�o "cooking" 20101104</strong>
	<p>Os desenvolvedores do SliTaz anunciam uma nova imagem ISO da vers�o
	de testes da distribui��o. H� mais de 2600 pacotes nos reposit�rios,
	o kernel Linux vers�o 2.6.34 foi compilado com o novo "toolchain"
	(ferramentas de desenvolvimento) - que inclui a glibc 2.11.2 e o gcc 4.5.1 -
	e o servidor gr�fico Xorg foi atualizado para a vers�o 1.9.2. O LiveCD
	traz o Midori como navegador Web, o reprodutor de �udio Deadbeef e v�rios
	outros aplicativos �teis. O gerenciador de pacotes Tazpkg e o Tazctrlbox
	agora suportam localiza��o por meio do gettext e mais locales UTF foram
	adicionados. Houve v�rias corre��es de bugs, atualiza��es e melhorias nestes
	�ltimos 6 meses de muito trabalho. Voc� pode fazer o 
	<a href="get/#cooking">download</a> desta nova vers�o a partir de um
	dos mirrors oficiais do projeto, podendo recorrer aos f�runs e �s listas 
	de discuss�o para dar seu feedback.</p>
	</li>

	<li><strong>08 Mai 2010 - Mutir�o da Documenta��o</strong>
	<p>Os desenvolvedores do SliTaz est�o organizando um 'Mutir�o da
	Documenta��o', de 10 de maio a 10 de junho do corrente ano. O objetivo
	principal � centralizar, revisar e atualizar toda a documenta��o
	online. Maiores detalhes podem ser obtidos em
	<a href="http://doc.slitaz.org/">doc.slitaz.org</a>. Esperamos que todos
	os usu�rios da distribui��o possam colaborar, atualizando a
	documenta��o existente ou adicionando novos documentos.</p>
	</li>

	<li><strong>28 Mar 2010 - Lan�ada a Vers�o 3.0 do SliTaz GNU/Linux</strong>
	<p>Os participantes do projeto SliTaz GNU/Linux anunciam orgulhosamente 
	o lan�amento da vers�o 3.0, que surge ap�s um ano de desenvolvimento.
	Esta nova vers�o est�vel est� simples, r�pida, customiz�vel, poderosa e 
	ainda assim permanece inacreditavelmente leve.</p>
	<p>O desktop padr�o � constitu�do do servidor gr�fico Xorg 7.4, do Openbox,
	componentes do ambiente desktop LXDE e ferramentas pr�prias da distribui��o.
	Ele permite conectar de forma simples � internet, navegar na web com o
	Midori, ouvir m�sica ou gerenciar e editar imagens e fotos.</p>
	<p>O sistema b�sico cabe numa imagem ISO de 30 Mb e as variantes do LiveCD
	possuem o m�nimo de 8 Mb. Esta nova vers�o foi constru�da com o novo 
	toolchain (ferramentas b�sicas de desenvolvimento), que inclui o GCC 4.4.1
	e o kernel Linux 2.6.30.6. Acesse as <a href="doc/releases/3.0/relnotes.pt.html">
	notas de lan�amento</a> completas para maiores informa��es e 
	<a href="get/#stable">baixe</a> uma imagem do LiveCD a partir dos mirrors.</p> 
	</li>

    <li><strong>14 Mar 2010 - Primeiro RC e conven��o Solutionslinux 2010 (Paris)</strong>
	<p>Visto que estamos mais perto de lan�ar uma vers�o est�vel, 
    atualizamos a imagem ISO b�sica e iniciamos uma s�rie de RC (Release
    Candidates). A maior mudan�a fica por conta de utilizarmos o Midori
    como navegador padr�o, melhorando a experi�ncia do usu�rio ao mesmo
    tempo que mantemos a imagem ISO em torno de 30MB. Este moderno navegador
    utiliza o motor de renderiza��o webkit, sendo r�pido, simples e bem
    integrado ao desktop do SliTaz.</p>
    <p>Esta nova ISO traz v�rias corre��es de bugs e de depend�ncias,
    assim como melhorias nas ferramentas e scripts do sistema. Ela pode
    ser baixada a partir do mirror oficial: 
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">slitaz-cooking.iso</a></p>
    <p>Outra not�cia � que o Projeto SliTaz estar� presente na conven��o
	<a href="http://www.solutionslinux.fr/">Solutionslinux</a> 2010, que
    ocorre na pr�xima semana em Paris. Quem estiver presente poder� 
    aprender mais sobre o projeto e entrar em contato com os membros da
    associa��o e desenvolvedores.</p>
	</li>

	<li><strong>21 Fev 2010 - Nova Vers�o Cooking 20100221</strong>
	<p>Os desenvolvedores do SliTaz anunciam orgulhosamente a nova vers�o de 
	testes (cooking) do LiveCD, que ser� a �ltima antes do RC (Release 
	Candidate) e consequente vers�o est�vel 3.0. Esta nova vers�o traz 
	diversas mudan�as e melhorias. A imagem ISO b�sica possui 27 MB e fornece
	um desktop simples para o uso di�rio e v�rios aplicativos, tais como o
	Netsurf para navegar na web. Tamb�m iremos disponibilizar uma variante
	(flavor) com o Firefox que ter� 29 MB com suporte a som e redes sem fio.
	Esta vers�o tamb�m oferece suporte total a UTF-8 e utiliza o Xorg como
	servidor gr�fico.</p>
	<p>Sobre o que foi melhorado e atualizado: o gerenciador de pacotes tazpkg
	est� mais r�pido, os scritps de boot foram atualizados e as ferramentas
	do sistema melhoradas. O gerenciador de redes sem fio utiliza o awk para
	melhorar a procura de rede. O suporte a WPA nos scripts de boot foi 
	melhorado e � feito um log do tempo de boot. O instalador do SliTaz
	agora ir�: tentar usar um arquivo gravado em uma m�dia USB se n�o houver
	um CDROM, permitir o uso de uma parti��o /home separada, criar uma
	conta de usu�rio padr�o e definir a senha do root. Finalmente, a
	customiza��o do LiveCD � agora muito mais f�cil, o usu�rio precisa apenas 
	iniciar o boot, modificar o que achar necess�rio e usar a op��o writefs
	a partir da interface gr�fica do Tazlito ou da linha de comando.</p>
	<p>Como sempre, pode-se fazer o <a href="get/#cooking">download</a> 
	das novas imagens ISO a partir do mirror oficial do projeto. Por favor,
	informe-nos sobre suas impress�es no f�rum do SliTaz.</p>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html") ?>

</body>
</html>
