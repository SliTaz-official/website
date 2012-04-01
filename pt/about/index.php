<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Sobre o Projeto</title>
	<meta name="description" content="SliTaz GNU/Linux project information overview" />
	<meta name="keywords" lang="pt" content="sobre slitaz, gnu, linux, mini distro, livecd" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../../lib/html/meta-link.html") ?>
</head>
<body>

<?php include("../../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.pt.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Sobre</h4>
		<p>
			Pequeno, rápido, estável e simples de usar! 
		</p>
		<ul>
			<li><a href="#intro">Introdução.</a></li>
			<li><a href="#overview">Resumo.</a></li>
			<li><a href="#website">Website &amp; i18n.</a></li>
			<li><a href="#reviews">Resenhas.</a></li>
			<li><a href="../asso/">Associação.</a></li>
		</ul>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2 id="intro">Introdução ao projeto</h2>

<p>
O SliTaz GNU/Linux é um sistema operacional livre, leve, rápido e estável que 
funciona completamente carregado na memória RAM e inicia a partir de mídias 
removíveis como um cdrom ou um Pendrive. É distribuído na forma de LiveCD, o
que significa que se pode obter uma imagem ISO a partir do site e gravá-la em
um cdrom do qual você pode iniciar o sistema. Quando este estiver funcionando, 
pode-se ejetar o LiveCD e usar o drive de cd para outras tarefas. O Sistema 
Live fornece uma distribuição gráfica completamente funcional e permite a você
manter seus dados e configurações pessoais em mídias graváveis. O sistema pode 
ser expandido com o gerenciador de pacotes Tazpkg e atualizações de segurança
são fornecidas para as versões stable (estável) e cooking (testes).
</p>
<p>
O projeto SliTaz oferece suporte técnico gratuito aos usuários por meio da
<a href="../mailing-list.php">Lista de Discussão</a> (lista multilingue)
e do <a href="http://forum.slitaz.org">Fórum</a>.
Você também pode nos contatar para maiores informações, sugestões e comentários,
usando a lista ou diretamente por e-mail :  &lt;devel at slitaz.org&gt;
</p>

<h3 id="overview">Resumo</h3>

<ul>
	<li>Sistema de Arquivos Root com cerca de 100 MB e a imagem ISO menor que 30 MB.</li>
	<li>Servidor Web pronto para uso fornecido pelo LightTPD com suporte a CGI e PHP.</li>
	<li>Navegue na Web com o Midori ou o Retawq em modo texto.</li>
	<li>Suporte a som fornecido pelo mixer Alsa, tocador de audio e extrator/codificador de CD.</li>
	<li>Clientes de chat, e-mail e FTP.</li>
	<li>Cliente/Servidor SSH fornecido pelo Dropbear.</li>
	<li>Banco de Dados com o SQLite.</li>
	<li>Geração de dispositivo LiveUSB.</li>
	<li>Ferramentas para criar, editar ou gravar imagens de CD ou DVD.</li>
	<li>Desktop elegante com o Openbox rodando sobre o Xorg (Servidor Gráfico).</li>
	<li>Caixas de Diálogo gráficas nativas para utilitários de linha-de-comando.</li>
	<li>Cerca de 3345 pacotes facilmente instaláveis a partir do mirror.</li>
	<li>Comunidade ativa e amigável.</li>
</ul>

<h3 id="website">Web sites &amp; i18n</h3>

<p>
O website do SliTaz está disponível em diferentes linguagens e é parte do 
<a href="/i18n.php">projeto de internacionalização</a>. A partir dele
é possível <a href="../get/">obter</a> o LiveCD do SliTaz e nos 
ajudar no desenvolvimento do projeto. Pode-se também consultar a 
<a href="../doc/">documentação</a> para aprender a utilizar a 
distribuição e configurar o sistema.
</p>

<h3 id="reviews">Resenhas</h3>

<p>
O SliTaz GNU/Linux foi resenhado por diversos websites. Agradecemos a todos
pelo suporte.
</p>

<h4>3.0 - Mar 2010 &amp; Cooking - Jan 2011</h4>

<ul>
	<li><a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/"
		>Wordpress</a> - Por K.Mandla.</li>
	<li><a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30"
		>Linux Journal</a> - Por Susan Linton.</li>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - Por Jesse Smith (da versão cooking anterior à versão 3.0).</li>
</ul>

<h4>2.0 - Abr 2009</h4>

<ul>
	<li><a href="http://www.gdhpress.com.br/blog/slitaz"
		>Gdhpress</a> (pt) - Por Carlos Morimoto.</li>
	<li><a href="http://www.frlinux.net/?section=distributions&amp;article=237"
		>FRLinux</a> (fr) - Por Steph.</li>
	<li><a href="http://www.junauza.com/2009/07/slitaz-20-simple-speedy-and-secure.html"
		>Tech Source</a> - Por Jun Auza.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz-2.html"
		>Dedoimedo</a> - Por Dedoimedo.</li>
	<li><a href="http://linuxologist.com/reviews/slitaz-linux-zero-to-distro-in-30-mb/"
		>Linuxologist</a> - Por Brie Gordon.</li>
</ul>

<h4>1.0 - Mar 2008</h4>

<ul>
	<li><a href="http://distrowatch.com/weekly.php?issue=20080331"
		>Distrowatch</a> - Por Ladislav Bodnar.</li>
	<li><a href="http://www.junauza.com/2008/03/slitaz-gnulinux-smallest-desktop-distro.html"
		>Tech Source</a> - Por Jun Auza.</li>
	<li><a href="http://beranger.org/index.php?page=diary&amp;2008/03/31/07/04/42-a-quick-look-over-slitaz-1-0"
		>Planet Béranger</a> - Por Béranger.</li>
	<li><a href="http://kmandla.wordpress.com/2008/04/02/slitaz-10-on-450mhz-k6-2-256mb/"
		>K.Mandla Blog</a> - Por K.Mandla.</li>
	<li><a href="http://reddevil62-techhead.blogspot.com/2008/04/damn-minuscule-linux-first-look-at.html"
		>Red Devil's Tech Blog</a> - Por Steve Lawson.</li>
	<li><a href="http://www.linuxinfusion.com/slitaz-a-light-weight-gnulinux-distribution"
	    >Linux Infusion</a> - Por Moparx.</li>	
	<li><a href="http://www.insidesocal.com/click/2008/06/a-second-look-at-slitaz-10.html"
		>Dailynews Blog</a> - Por Steven Rosenberg.</li>	
	<li><a href="http://www.linux.com/feature/140573">Linux.com</a> - Por Dennis L. Ericson.</li>
	<li><a href="http://www.freesoftwaremagazine.com/columns/slitaz_live_cd_small_beautifully_marked"
		>Free Software Magazine</a> - Por Gary Richmond.</li>
	<li><a href="http://www.linux-magazine.com/issues/2008/97/slitaz"
		>Linux Pro Magazine</a> - Por Dimitri Popov.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz.html"
		>Dedoimedo</a> - Por Dedoimedo.</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
