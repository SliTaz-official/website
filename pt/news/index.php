<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<title>SliTaz - Notícias do SliTaz</title>
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

<h2>Notícias do SliTaz</h2>
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
	<li id="d20140519">
		<strong>19 de maio de 2014 - Lançamento do SliTaz 5.0 RC-2</strong>
	<p>
        Os desenvolvedores do SliTaz anunciam a disponibilidade da segunda
        versão de testes em preparamento à próxima versão estável. Ela traz
        as mudanças feitas desde a primeira versão de testes, que corrigiram
        diversos bugs detectados, num total de 500 alterações em nossos 
        repositório de desenvolvimento. Todos os 4300 pacotes foram recompilados
        de forma a buscar por bugs e garantir que usuários avançados possam 
        compilar seus programas à partir dos fontes.
	</p>
	<p>
        Buscamos também melhorar a experiência do usuário com a área de
        trabalho padrão oferecida pelo LXDE. Os utilitários Polkit e udisks
        tiveram sua configuração corrigida de forma a gerenciarem adequadamente
        dispositivos de armazenamento externos e partições dos discos
        internos.
	</p>
	<p>
        Esta versão suporta um novo método de instalação: o SliTaz agora pode
        ser instalado diretamente num diretório qualquer, sem a necessidade de
        particionar o disco rígido, funcionando inclusive em partições NTFS e
        FAT32.
	</p>
	<p>
		Download: <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.iso"
			>slitaz-5.0-rc2.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc2.md5"
			>md5</a> ]
	</p>
	</li>
    
	<li id="d20140502">
		<strong>02 de maio de 2014 - lançamento do SliTaz 5.0 RC-1</strong>
	<p>
        Os desenvolvedores do SliTaz tem o prazer de anunciar a disponibilidade 
        do SliTaz 5.0 Release Candidate (RC-1)! É um lançamento maduro, mas
        ainda requer testes intensos antes que possamos lançar uma versão
        totalmente estável.
	</p>
	<p>
        Este RC-1 inclui várias correções de bugs e caixas de diálogo melhoradas
        para o utilitário <em>slitaz-config</em>, que permite ao usuário configurar
        o sistema tanto pela interface gráfica quanto pela linha de comando. O tazpanel
        traz mudanças na interface e a o suporte à linguagem está melhorado. O suporte
        a discos rígidos do tipo ATA foi corrigido, assim continuamos a prover
        uma distribuição que pode ser executada em hardwares mais antigos.
	</p>
	<p>
        O ambiente desktop volta a ser gerenciado pelo PCmanFM, com a adição de suporte
        à lixeira e montagem de dispositivos via gvfs/udisks. O banco de dados de pacotes
        recebeu mais de 200 atualizações e cerca de 50 novos pacotes foram adicionados.
        Em preparação ao novo lançamento estável, o website foi atualizado com uma nova
        interface mais simples de usar.
	</p>
	<p>
		Baixe agora o <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.iso"
			>slitaz-5.0-rc1.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/5.0/slitaz-5.0-rc1.md5"
			>md5</a> ]
	</p>
	</li>

	<li id="d20140329">
		<strong>29 de março de 2014 - lançamento do SliTaz Raspberry Pi</strong>
	<p>
        Os desenvolvedores do SliTaz tem o prazer de anunciar a disponibilidade
        do SliTaz Raspberry Pi 20140329, após 2 anos de porte e estabilização
        da distribuição para a plataforma ARM. Este lançamento fornece cerca de 420
        pacotes compilados de forma cruzada em nosso servidor de compilação. A variante
        base possui 22MB e a variante JWM/FOX traz um ambiente de desktop em apenas
        34MB, com aplicativos tais como o editor de texto Adie, o gerenciador de arquivos
        PathFinder, o navegador web Links2, o cliente de IRC TazIRC, um servidor web,
        o cliente de SSH Dropbear e vários outros aplicativos de linha de comando
        GNU/Linux.
	</p>
	<p>
        O SliTaz Raspberry Pi também inclui o utilitário em modo texto
        TazBerry que configura o sistema e a interface de controle remoto
        SliTaz ARM CGI, que possui um plugin de boot RPi customizado. Para
        utilizar o SliTaz RPi: baixe o tarball de alguma variante, extraia,
        execute o script install.sh e inicialize seu Raspberry Pi.
	</p>
	<p>
		<a href="http://mirror.slitaz.org/arm/rpi/slitaz-rpi-desktop-20140329.tar.bz2"
			>slitaz-rpi-desktop-20140329</a> (34 Mb) -
		<a href="http://mirror.slitaz.org/arm/rpi/slitaz-rpi-base-20140329.tar.bz2"
			>slitaz-rpi-base-20140329</a> (22 Mb) -
		<a href="http://arm.slitaz.org/rpi/">Página do SliTaz Raspberry Pi</a>
	</p>
    </li>

	<li id="d20140216">
		<strong>16 de fevereiro de 2014 - novo cooking (20140216)</strong>
	<p>
  	Os desenvolvedores do SliTaz anunciam o lançamento da nova versão Cooking
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
