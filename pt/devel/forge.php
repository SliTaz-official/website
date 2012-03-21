<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Espa�o dos Desenvolvedores</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux project information overview" />
    <meta name="keywords" lang="pt" content="sobre slitaz, gnu, linux, mini distro, livecd" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="2011-03-26 00:30:00" />
    <meta name="author" content="Claudinei Pereira" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php include("../../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">

    <?php include("../../lib/html/nav.pt.html"); ?>

    <!-- Information/image -->
	<div id="block_info">
		<h4>Desenvolvimento</h4>
		<p>
            Utilit�rios, linhas mestras e servi�os utilizados para 
            desenvolver o SliTaz.
        </p>
		<p>
			<img src="../../images/users.png" alt="users.png" />
			Utilize tamb�m o <a href="http://scn.slitaz.org/">SCN</a>
			(SliTaz Community Network) e a 
			<a href="../mailing-list.php">lista de discuss�o</a>.
		</p>
	</div>
</div>

<!-- Language -->
<div id="lang">
	<a href="../../i18n.php">
		<img src="../../images/locale.png" alt="locale.png" /></a>
	<a href="../../de/devel/">Deutsch</a>
	<a href="../../en/devel/">English</a>
	<a href="../../fr/devel/">Fran�ais</a>
</div>

<!-- Content -->
<div id="content">

<h2>Espa�o dos Desenvolvedores do SliTaz</h2>

<ul>
	<li><a href="#kiss">KISS e respeito aos padr�es.</a></li>
	<li><a href="#tank">Build host &amp; home.</a></li>
    <li><a href="#repos">Reposit�rios Mercurial.</a></li>
    <li><a href="#gui">Interface gr�fica em GTK e Web/CGI</a></li>
    <li><a href="#iconv">Implementa��o da fun��o iconv().</a></li>
    <li><a href="#pkgs">Pacotes Tazpkg.</a></li>
    <li><a href="#website">Gerenciamento do Website.</a></li>
</ul>

<a name="kiss"></a>
<h2>KISS e respeito aos padr�es</h2>
<p>
"Keep it Simple", ou seja, tentamos manter as coisas simples: respeito 
aos padr�es, planejamento cuidadoso e documenta��o escrita de alta 
qualidade, fornecimento de um sistema robusto e est�vel e um sistema de 
arquivos (<em>rootfs</em>) no LiveCD leve o suficiente para ser executado 
em m�quinas que tenham ao menos 128 mb de mem�ria RAM. Tamb�m usamos
aplicativos baseados em GTK+2, Dialog, scripts SHell ou PHP. A id�ia
� n�o nos repetirmos e deixar o sistema b�sico leve e pequeno.
</p>

<a name="tank"></a>
<h2>Tank - Build host &amp; home</h2>
<p>
Cada participante do projeto pode obter uma conta no servidor do projeto
com acesso seguro, espa�o em disco, um diret�rio p�blico e acesso a todas
as ferramentas de desenvolvimento. Os desenvolvendores podem compilar
pacotes e os mantenedores dos mirrors podem gerenciar as sincroniza��es.
O Tank tamb�m hospeda o website, o boot via web e os reposit�rios 
mercurial:
<a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>
<p>
Instru��es para a utiliza��o deste servidor est�o descritas no "Livro de
Receitas" (cookbook): 
<a href="http://doc.slitaz.org/pt:cookbook:buildhost">SliTaz Build Host (tank)</a>.
</p>

<a name="repos"></a>
<h2>Reposit�rios Mercurial</h2>
<p>
Os reposit�rios Mercurial ou Hg do SliTaz podem ser listados ou clonados por 
qualquer um na URL: <a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a>. 
Pessoas com acesso de escrita podem acessar diretamente pelo endere�o
<code>repos.slitaz.org</code> que necessita de autentica��o.
O Mercurial usa Python e � instal�vel com o comando: 
<code>tazpkg get-install mercurial</code>
</p>
<h3>~/.hgrc</h3>
<p>
Antes de sua primeira transfer�ncia no servidor, assegure-se de que possui
o arquivo de configura��o do Hg correto com seu nome e endere�o de e-mail
e lembre-se de checar que voc� n�o est� acessando como usu�rio root.
Exemplo de arquivo ~/.hgrc:
</p>
<pre class="script">
[ui]
username = FirstName LastName &lt;you@example.org&gt;
</pre>
<h4>Clonar, modificar, transferir e finalizar</h4>
<p>
Clonar (clone) um reposit�rio, exemplo para slitaz-doc:
</p>
<pre>
 $ hg clone http://repos.slitaz.org/wok
</pre>
<p>
Mude de diret�rio para slitaz-doc, note que voc� deve estar no reposit�rio
para poder utilizar os comandos "hg". Para marcar todos os logs ou somente o
�ltimo log:
</p>
<pre>
 $ hg log
 $ hg head
</pre>
<p>
Modifique um ou mais arquivos e transfira (commit):
</p>
<pre>
 $ hg add
 $ hg status
 $ hg commit -m "Log message..."
 $ hg log
</pre>
<p>
Note que voc� pode usar o comando <code>rollback</code> para desfazer a �ltima
transa��o. Antes de finalizar (push) as mudan�as no servidor � seguro executar 
o comando pull ao menos uma vez:
</p>
<pre>
 $ hg pull
 $ hg push
</pre>
<p>
Est� feito, suas mudan�as, c�digo ou corre��es est�o agora no servidor
</p>

<h4>Comandos �teis</h4>
<p>
Comandos do mercurial (hg) que podem ser usados.
</p>
<ul>
	<li><code>hg help</code> : Mostra uma lista completa dos comandos.</li>
	<li><code>hg rollback</code> : Desfaz a �ltima a��o (commit, pull, 
    push).</li>
	<li><code>hg log &lt;package&gt;</code> : Mostra o log de um pacote.</li>
	<li><code>hg head</code> : Mostra o �ltimo log.</li>
</ul>

<a name="gui"</a>
<h2>Interface Gr�fica - C/GTK, Yad, Vala/Genie e WEB/GCI</h2>
<p>
    H� v�rias maneiras de criar interf�ces gr�ficas para o usu�rio para a
    distribui��o. No in�cio do projeto at� a vers�o 3.0, usamos principalmente
    o GTKDialog, o que nos permitia criar interfaces razoavelmente complexas
    em GTK, ao mesmo tempo que pudemos usar uma linguagem de script que 
    era executada sem a necessidade de ser compilada. Por�m, o GTKDialog
    n�o � mais mantido pelos desenvolvedores, e est� desatualizado, ent�o
    tivemos que mudar para o Yad para criar algumas caixas de di�logo simples.
    Para todos as ferramentas de administra��o, pacotes e configura��o
    pr�prias da distribui��o, agora usamos o TazPanel, que � uma interface
    WEB/CGI escrita em xHTML5 e CSS3.
</p> 
<p>
    O Yad � simples, por�m n�o nos permite criar interfaces muito complexas,
    ent�o outra maneira teve de ser abordada. A vantagem de uma linguagem
    de script � o fato de n�o precisar ser compilada e ser codificada em
    tempo real, por�m isso significa em programas que rodam com um pouco menos
    de performance. Escrever programas na Linguagem C � complexo e atrai
    menos desenvolvedores, porque linguagens de script s�o mais atrativas
    para aqueles que desejam contribuir, tal como o SHell Script, que �
    f�cil de compreender e manter. Deste modo, com uma linguagem de programa��o
    script uma interface WEB/CGI ou em GTK, podemos manter nossas linhas
    mestras e atrair desenvolvedores.
</p>
<p>
    H� muitas linguagens que usam GTK, como Genie, Vala ou GTKaml. Mas �
    preciso manter em mente que elas n�o s�o t�o populares quanto o C ou GTK
    e n�o s�o t�o f�ceis de aprender e usar (para interfaces simples, melhor �
    utilizar scripts SHell para tarefas corriqueiras). Pode-se usar o Vala,
    por�m note o seguinte exemplo, que � o c�digo necess�rio para criar uma
    simples caixa de di�logo, e possui 14 linhas de c�digo:
</p>
<pre>
#include <gtk/gtk.h>;
int main(int argc, char *argv[])
{
    GtkWidget *window;

    gtk_init(&argc, &argv);
    window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    g_signal_connect (G_OBJETCT (window), "destroy",
            G_CALLBACK (gtk_main_quit), NULL);

    gtk_widget_show(window);
    gtk_main();
    return 0;'
}
</pre>
<p>
    Caso queira contribuir, e n�o est� certo qual linguagem usar, mande uma
    mensagem para a lista de discuss�o. Para pequenas interface gr�ficas, 
    utilize o TazBox como exemplo, que pode ser encontrado no reposit�rio
    slitaz-tools, que tamb�m possui pequenas interfaces gr�ficas, como a
    respons�vel pelo logout do usu�rio. O primeiro utilit�rio do SliTaz a 
    ser escrito em Linguagem C pura, com GTK, � o TazWeb, e ele pode ser
    utilizado como exemplo na utiliza��o da fun��o system() para incluir
    comandos do sistema em uma interface. Esta ferramente utiliza
    wget para downloads e sed para adicionar favoritos.
</p>
<p>
    Scripts em Yad devem seguir as linhas mestras de codifica��o para a 
    distribui��o:
    <a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/README">
        README</a> e o
    <a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/tazyad">
        c�digo de exemplo</a>.
</p>

<a name="iconv"></a>
<h2>Implementa��o da fun��o iconv()</h2>
<p>
O SliTaz utiliza a fun��o iconv() fornecida pela biblioteca glibc do 
projeto GNU - alguns pacotes que necessitam da fun��o <code>libiconv</code>
devem usar a vers�o fornecida pela glibc (<code>glibc-locale</code>). Note
que j� n�o h� mais um pacote libiconv (1.2 MB) no SliTaz.
</p>

<a name="pkgs"></a>
<h2>Pacotes Tazpkg</h2>
<p>
Os pacotes tazpkg no SliTaz s�o automaticamente criados via o
<a href="http://cook.slitaz.org/">rob� de compila��o</a> e receitas
no wok. O Livro de Receitas descreve o 
<a href="http://doc.slitaz.org/pt:cookbook:wok">uso das ferramentas</a> 
e o formato das <a href="http://doc.slitaz.org/pt:cookbook:receipt">receitas</a>.
Informa��es sobre o comando cook e sobre cria��o de arquivos receipt s�o
necess�rios para a cria��o de pacotes.
</p>
<p>
Em termos de escolha de pacote, a id�ia � oferecer o pacote por tarefa ou 
funcionalidade, isto �, a mais leve aplica��o em seu campo e sem duplica��es.
Note que a atual sele��o de pacotes n�o � imut�vel, se voc� souber de uma 
alternativa mais leve, com mais funcionalidades ou mais <em>sexy</em> por apenas
alguns KB a mais, sugira na lista de discuss�o. Aten��o redobrada � prestada
aos pacotes do LiveCD: eles devem ser "limpos", removendo-se depend�ncias
desnecess�rias e op��es do compilador. Em geral os pacotes candidatos a fazer
parte do LiveCD s�o discutidos na lista.
</p>
<p>
Antes de voc� come�ar a compilar e a criar pacotes para o SliTaz, certifique-se
que o trabalho ainda n�o existe na rela��o do wok dispon�vel no mirror principal
do SliTaz. N�o se esque�a que os membros da lista podem te ajudar e que a 
documenta��o do <a href="http://doc.slitaz.org/pt:cookbook:wok">wok e ferramentas</a> 
existe para te guiar nos primeiros passos.
</p>

<a name="pkgs-naming"></a>
<h3>Nomes de Pacotes</h3>
<p>
Na maioria dos casos o nome do pacote � o mesmo do c�digo fonte, exceto
para os m�dulos das linguagens Python, Perl, PHP, Ruby e Lua. Por exemplo,
o pacote que fornece o sistema de templates Kid, escrito em Python e XML,
� nomeado: <code>python-kid</code>.
</p>

<a name="website"></a>
<h2>Gerenciamento do website e manuais</h2>
<p>
O website e os manuais (Manual do SliTaz, Livro de Receitas) s�o
gerenciados pelo reposit�rio mercurial, podendo ser clonados da 
seguinte maneira:
</p>
<pre>
 $ hg clone http://hg.slitaz.org/website
  Ou, se voc� tiver as permiss�es necess�rias:
 $ hg clone http://repos.slitaz.org/website
</pre>

<a name="xhtml"></a>
<h3>Estilo para codifica��o de xHTML</h3>
<p>
As p�ginas nos diferentes <em>manuais</em> s�o codificadas em xHTML 1.0
transitional. As cores para o corpo da p�gina (<code>body</code>) e para 
os t�tulos s�o definidas diretamente de forma a permitir que os links
sejam facilmente identific�veis. Os t�tulos de primeiro n�vel s�o usados
apenas uma vez, no topo da p�gina, os de segundo n�vel s�o usados para
nomear as se��es e os de terceiro e quarto n�vel para as subse��es. Se
uma lista � usada para os t�picos, usando �ncoras para as diferentes se��es,
� posta logo no in�cio da p�gina, ap�s o t�tulo da mesma.
Par�grafos s�o colocados dentro das tags <code>&lt;p&gt;&lt;/p&gt;</code>.
Para indenta��o, usa-se tabula��es (tabs), de forma a manter-se a sem�ntica
e para diminuir espa�o em termos de octetos (bytes). Para mostrar trechos
de c�digo, como o nome de um comando dentro de um par�grafo, 
<code>&lt;code&gt;</code> � o m�todo recomendado. Para mostrar a saida
de comandos ou comandos a serem digitados em um terminal, usa-se
<code>&lt;pre&gt;</code>. Exemplo:
</p>
<pre>
 $ comando
</pre>
<p>
Para mostrar texto que pode ser copiado e colado, como scripts, pe�as de
c�digo, arquivos de configura��o, etc, tamb�m se usa a tag 
<code>&lt;pre&gt;</code>, em conjunto com a classe CSS chamada "script".
Exemplo:
</p>
<pre class="script">
&lt;pre class="script"&gt;

code...

&lt;/pre&gt;
</pre>
<p>
Texto <em>enfatizado</em> � colocado dentro da tag <code>&lt;em&gt;</code> 
e links internos s�o relativos. � recomend�vel checar a validade do c�digo
xHTML por meio do <em>validador</em> online da W3C.
</p>

<h2>Diff e patch</h2>
<p>
As utilidades <code>diff</code> e <code>patch</code> s�o ferramentas de linha
de comando para cria��o e implementa��o de diferen�as entre dois arquivos. Esta
t�cnica � freq�entemente usada para colabora��o e as mudan�as feitas no arquivo
original podem ser extra�das facilmente. Para criar um arquivo <code>diff</code> 
leg�vel aos humanos em um simples editor de textos, voc� deve fornecer a op��o
<code>-u</code> :
</p>
<pre>
 $ diff -u file.orig file.new &gt; file.diff
</pre>
<p>
Para aplicar um patch:
</p>
<pre>
 $ patch file.orig file.diff
</pre>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
