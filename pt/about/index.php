<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Sobre o Projeto</title>
	<meta name="description" content="Informações gerais sobre o SliTaz GNU/Linux"/>
	<meta name="keywords" lang="pt" content="sobre slitaz, gnu, linux, mini distro, livecd"/>
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

<h2>Sobre o SliTaz</h2>
<p>
	Pequeno, rápido, estável e fácil de utilizar!
</p>
<ul>
	<li><a href="#intro">Introdução</a></li>
    <li><a href="#spec">Especificações</a></li>
	<li><a href="#overview">Resumo</a></li>
	<li><a href="#website">Website &amp; i18n</a></li>
	<li><a href="#reviews">Resenhas</a></li>
	<li><a href="../asso/">Associação</a></li>
</ul>

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

<h2 id="spec">Especifições</h2>

<p>
A imagem ISO padrão da distribuição fornece 4 variantes: base, just-x,
gkt-only e desktop completo e também oferece a opção de boot
via web. Assim, cobre várias necessidades específicas, suportando vários
dispositivos, desde computadores antigos, servidores de alta disponibilidade
e plataforma ARM com o Raspberry Pi.
</p>
<p>
O SliTaz é simples de ser utilizado por usuários iniciantes em GNU/Linux:
fornece uma área de trabalho moderna, que segue os padrões Freedesktop 
com ferramentas personalizadas que permitem ao usuário configurar todo
o sistema por meio de caixas de diálogo gráficas. O sistema também permite
seu gerenciamento remoto por meio de um painel de configuração via web.
</p>

<p>
O sistema base traz um servidor X simples, sem outros programas, que permite
a personalização do sistema somente com os elementos que o usuário deseja.
Esse sistema pode, depois, ser utilizado a partir de um CDROM, pendrive,
sdcard, instalado no disco rígido ou inicializado via web.
</p>
<p>
A distribuição segue a filosofia UNIX: todos os elementos do sistema se
encontram em arquivos texto. O gerenciador de pacotes e todas as configurações
do sistema são arquivados em arquivos de texto simples, que podem ser
lidos e modificados por qualquer pessoa. A maioria das ferramentas do
sistema são feitas em SHell Script, o que permite sua customização por
desenvolvedores que conheçam essa linguagem.
</p>
<p>
O boot do sistema é feito por meio de 4 scripts, que configuram todo
o processo, lidam com as opções de boot, gerenciam a rede e outros comandos
locais. Somente o necessário para a distribuição funcionar é executado,
dando espaço para o usuário controlar todo o resto conforme suas necessidades.
</p>
<p>
O sistema é capaz de rodar completamente na memória RAM, à partir
de um LiveCD, de um pendrive ou de uma instalação frugal no disco rígido.
Isto permite salvar configurações e documentos em uma partição montada
localmente enquanto o sistema é executado de forma rápida e responsiva.
</p>
<p>
A rede em volta da distribuição é estruturada e integrada, o que permite
uma fácil navegação por todos os sites. O desenvolvimento é centralizado
em repositórios Mercurial e ferramentas customizadas tais como o sistema
de informação de bugs e o cookutils.
</p>


<h2 id="overview">Resumo</h2>

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

<h2 id="website">Web sites &amp; i18n</h2>

<p>
O website do SliTaz está disponível em diferentes linguagens e é parte do 
<a href="/i18n.php">projeto de internacionalização</a>. A partir dele
é possível <a href="../get/">obter</a> o LiveCD do SliTaz e nos 
ajudar no desenvolvimento do projeto. Pode-se também consultar a 
<a href="../doc/">documentação</a> para aprender a utilizar a 
distribuição e configurar o sistema.
</p>

<h2 id="reviews">Resenhas</h2>

<p>
O SliTaz GNU/Linux foi resenhado por diversos websites. Agradecemos a todos
pelo suporte.
</p>

<h3>4.0 - Abr 2012</h3>

<ul>
	<li><a href="http://badalhocando.blogspot.co.uk/2012/04/slitaz-40-review-small-but-fierce.html"
		>Blogspot</a> - Por Klaus Zimmermann.</li>
	<li><a href="http://linuxblog.darkduck.com/2012/04/slitaz-40-light-and-stable.html"
		>DarkDuck</a> - Por Dmitry.</li>
	<li><a href="http://frederic.bezies.free.fr/blog/?p=8760"
		>Weblog</a> (fr) - Por Frederic Bezies.</li>
</ul>

<h3>3.0 - Mar 2010 &amp; Cooking - Jan 2011</h3>

<ul>
	<li><a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/"
		>Wordpress</a> - Por K.Mandla.</li>
	<li><a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30"
		>Linux Journal</a> - Por Susan Linton.</li>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - Por Jesse Smith (da versão cooking anterior à versão 3.0).</li>
</ul>

<h3>2.0 - Abr 2009</h3>

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

<h3>1.0 - Mar 2008</h3>

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
</section>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
