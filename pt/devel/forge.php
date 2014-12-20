<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<title>SliTaz - Espaço dos Desenvolvedores</title>
	<meta name="description" content="SliTaz GNU/Linux project information overview" />
	<meta name="keywords" lang="pt" content="sobre slitaz, gnu, linux, mini distro, livecd" />
	<meta name="author" content="Claudinei Pereira" />
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.pt.html");
include("../../lib/html/nav.pt.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>Espaço dos Desenvolvedores do SliTaz</h2>

<ul>
	<li><a href="#kiss">KISS e respeito aos padrões.</a></li>
	<li><a href="#tank">Build host &amp; home.</a></li>
	<li><a href="#repos">Repositórios Mercurial.</a></li>
	<li><a href="#gui">Interface gráfica em GTK e Web/CGI</a></li>
	<li><a href="#iconv">Implementação da função iconv().</a></li>
	<li><a href="#pkgs">Pacotes Tazpkg.</a></li>
	<li><a href="#website">Gerenciamento do Website.</a></li>
</ul>

<h2 id="kiss">KISS e respeito aos padrões</h2>

<p>
"Keep it Simple", ou seja, tentamos manter as coisas simples: respeito 
aos padrões, planejamento cuidadoso e documentação escrita de alta 
qualidade, fornecimento de um sistema robusto e estável e um sistema de 
arquivos (<em>rootfs</em>) no LiveCD leve o suficiente para ser executado 
em máquinas que tenham ao menos 128 mb de memória RAM. Também usamos
aplicativos baseados em GTK+2, Dialog, scripts SHell ou PHP. A idéia
é não nos repetirmos e deixar o sistema básico leve e pequeno.
</p>

<h2 id="tank">Tank - Build host &amp; home</h2>

<p>
Cada participante do projeto pode obter uma conta no servidor do projeto
com acesso seguro, espaço em disco, um diretório público e acesso a todas
as ferramentas de desenvolvimento. Os desenvolvendores podem compilar
pacotes e os mantenedores dos mirrors podem gerenciar as sincronizações.
O Tank também hospeda o website, o boot via web e os repositórios 
mercurial:
<a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>
<p>
Instruções para a utilização deste servidor estão descritas no "Livro de
Receitas" (cookbook): 
<a href="http://doc.slitaz.org/pt:cookbook:buildhost">SliTaz Build Host (tank)</a>.
</p>

<h2 id="repos">Repositórios Mercurial</h2>

<p>
Os repositórios Mercurial ou Hg do SliTaz podem ser listados ou clonados por 
qualquer um na URL: <a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a>. 
Pessoas com acesso de escrita podem acessar diretamente pelo endereço
<code>repos.slitaz.org</code> que necessita de autenticação.
O Mercurial usa Python e é instalável com o comando: 
<code>tazpkg get-install mercurial</code>
</p>

<h3>~/.hgrc</h3>

<p>
Antes de sua primeira transferência no servidor, assegure-se de que possui
o arquivo de configuração do Hg correto com seu nome e endereço de e-mail
e lembre-se de checar que você não está acessando como usuário root.
Exemplo de arquivo ~/.hgrc:
</p>
<pre class="script">
[ui]
username = FirstName LastName &lt;you@example.org&gt;
</pre>

<h4>Clonar, modificar, transferir e finalizar</h4>

<p>
Clonar (clone) um repositório, exemplo para slitaz-doc:
</p>
<pre>
 $ hg clone http://repos.slitaz.org/wok
</pre>
<p>
Mude de diretório para slitaz-doc, note que você deve estar no repositório
para poder utilizar os comandos "hg". Para marcar todos os logs ou somente o
último log:
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
Note que você pode usar o comando <code>rollback</code> para desfazer a última
transação. Antes de finalizar (push) as mudanças no servidor é seguro executar 
o comando pull ao menos uma vez:
</p>
<pre>
 $ hg pull
 $ hg push
</pre>
<p>
Está feito, suas mudanças, código ou correções estão agora no servidor
</p>

<h4>Comandos Úteis</h4>

<p>
Comandos do mercurial (hg) que podem ser usados.
</p>
<ul>
	<li><code>hg help</code> : Mostra uma lista completa dos comandos.</li>
	<li><code>hg rollback</code> : Desfaz a última ação (commit, pull, 
		push).</li>
	<li><code>hg log &lt;package&gt;</code> : Mostra o log de um pacote.</li>
	<li><code>hg head</code> : Mostra o último log.</li>
</ul>

<h2 id="gui">Interface Gráfica - C/GTK, Yad, Vala/Genie e WEB/GCI</h2>

<p>
	Há várias maneiras de criar interfáces gráficas para o usuário para a
	distribuição. No início do projeto até a versão 3.0, usamos principalmente
	o GTKDialog, o que nos permitia criar interfaces razoavelmente complexas
	em GTK, ao mesmo tempo que pudemos usar uma linguagem de script que 
	era executada sem a necessidade de ser compilada. Porém, o GTKDialog
	não é mais mantido pelos desenvolvedores, e está desatualizado, então
	tivemos que mudar para o Yad para criar algumas caixas de diálogo simples.
	Para todos as ferramentas de administração, pacotes e configuração
	próprias da distribuição, agora usamos o TazPanel, que é uma interface
	WEB/CGI escrita em xHTML5 e CSS3.
</p> 
<p>
	O Yad é simples, porém não nos permite criar interfaces muito complexas,
	então outra maneira teve de ser abordada. A vantagem de uma linguagem
	de script é o fato de não precisar ser compilada e ser codificada em
	tempo real, porém isso significa em programas que rodam com um pouco menos
	de performance. Escrever programas na Linguagem C é complexo e atrai
	menos desenvolvedores, porque linguagens de script são mais atrativas
	para aqueles que desejam contribuir, tal como o SHell Script, que é
	fácil de compreender e manter. Deste modo, com uma linguagem de programação
	script uma interface WEB/CGI ou em GTK, podemos manter nossas linhas
	mestras e atrair desenvolvedores.
</p>
<p>
	Há muitas linguagens que usam GTK, como Genie, Vala ou GTKaml. Mas é
	preciso manter em mente que elas não são tão populares quanto o C ou GTK
	e não são tão fáceis de aprender e usar (para interfaces simples, melhor é
	utilizar scripts SHell para tarefas corriqueiras). Pode-se usar o Vala,
	porém note o seguinte exemplo, que é o código necessário para criar uma
	simples caixa de diálogo, e possui 14 linhas de código:
</p>
<pre>
#include &lt;gtk/gtk.h&gt;;
int main(int argc, char *argv[])
{
    GtkWidget *window;

    gtk_init(&amp;argc, &amp;argv);
    window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    g_signal_connect (G_OBJETCT (window), "destroy",
            G_CALLBACK (gtk_main_quit), NULL);

    gtk_widget_show(window);
    gtk_main();
    return 0;'
}
</pre>
<p>
	Caso queira contribuir, e não está certo qual linguagem usar, mande uma
	mensagem para a lista de discussão. Para pequenas interface gráficas, 
	utilize o TazBox como exemplo, que pode ser encontrado no repositório
	slitaz-tools, que também possui pequenas interfaces gráficas, como a
	responsável pelo logout do usuário. O primeiro utilitário do SliTaz a 
	ser escrito em Linguagem C pura, com GTK, é o TazWeb, e ele pode ser
	utilizado como exemplo na utilização da função system() para incluir
	comandos do sistema em uma interface. Esta ferramente utiliza
	wget para downloads e sed para adicionar favoritos.
</p>
<p>
	Scripts em Yad devem seguir as linhas mestras de codificação para a 
	distribuição:
	<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/README">
		README</a> e o
	<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/tazyad">
		código de exemplo</a>.
</p>

<h2 id="iconv">Implementação da função iconv()</h2>

<p>
O SliTaz utiliza a função iconv() fornecida pela biblioteca glibc do 
projeto GNU - alguns pacotes que necessitam da função <code>libiconv</code>
devem usar a versão fornecida pela glibc (<code>glibc-locale</code>). Note
que já não há mais um pacote libiconv (1.2 MB) no SliTaz.
</p>

<h2 id="pkgs">Pacotes Tazpkg</h2>

<p>
Os pacotes tazpkg no SliTaz são automaticamente criados via o
<a href="http://cook.slitaz.org/">robô de compilação</a> e receitas
no wok. O Livro de Receitas descreve o 
<a href="http://doc.slitaz.org/pt:cookbook:wok">uso das ferramentas</a> 
e o formato das <a href="http://doc.slitaz.org/pt:cookbook:receipt">receitas</a>.
Informações sobre o comando cook e sobre criação de arquivos receipt são
necessários para a criação de pacotes.
</p>
<p>
Em termos de escolha de pacote, a idéia é oferecer o pacote por tarefa ou 
funcionalidade, isto é, a mais leve aplicação em seu campo e sem duplicações.
Note que a atual seleção de pacotes não é imutável, se você souber de uma 
alternativa mais leve, com mais funcionalidades ou mais <em>sexy</em> por apenas
alguns KB a mais, sugira na lista de discussão. Atenção redobrada é prestada
aos pacotes do LiveCD: eles devem ser "limpos", removendo-se dependências
desnecessárias e opções do compilador. Em geral os pacotes candidatos a fazer
parte do LiveCD são discutidos na lista.
</p>
<p>
Antes de você começar a compilar e a criar pacotes para o SliTaz, certifique-se
que o trabalho ainda não existe na relação do wok disponível no mirror principal
do SliTaz. Não se esqueça que os membros da lista podem te ajudar e que a 
documentação do <a href="http://doc.slitaz.org/pt:cookbook:wok">wok e ferramentas</a> 
existe para te guiar nos primeiros passos.
</p>

<h3 id="pkgs-naming">Nomes de Pacotes</h3>

<p>
Na maioria dos casos o nome do pacote é o mesmo do código fonte, exceto
para os módulos das linguagens Python, Perl, PHP, Ruby e Lua. Por exemplo,
o pacote que fornece o sistema de templates Kid, escrito em Python e XML,
é nomeado: <code>python-kid</code>.
</p>

<h2 id="website">Gerenciamento do website e manuais</h2>

<p>
O website e os manuais (Manual do SliTaz, Livro de Receitas) são
gerenciados pelo repositório mercurial, podendo ser clonados da 
seguinte maneira:
</p>
<pre>
 $ hg clone http://hg.slitaz.org/website
  Ou, se você tiver as permissões necessárias:
 $ hg clone http://repos.slitaz.org/website
</pre>

<h3 id="xhtml">Estilo para codificação de xHTML</h3>

<p>
As páginas nos diferentes <em>manuais</em> são codificadas em xHTML 1.0
transitional. As cores para o corpo da página (<code>body</code>) e para 
os títulos são definidas diretamente de forma a permitir que os links
sejam facilmente identificáveis. Os títulos de primeiro nível são usados
apenas uma vez, no topo da página, os de segundo nível são usados para
nomear as seções e os de terceiro e quarto nível para as subseções. Se
uma lista é usada para os tópicos, usando âncoras para as diferentes seções,
é posta logo no início da página, após o título da mesma.
Parágrafos são colocados dentro das tags <code>&lt;p&gt;&lt;/p&gt;</code>.
Para indentação, usa-se tabulações (tabs), de forma a manter-se a semântica
e para diminuir espaço em termos de octetos (bytes). Para mostrar trechos
de código, como o nome de um comando dentro de um parágrafo, 
<code>&lt;code&gt;</code> é o método recomendado. Para mostrar a saida
de comandos ou comandos a serem digitados em um terminal, usa-se
<code>&lt;pre&gt;</code>. Exemplo:
</p>
<pre>
 $ comando
</pre>
<p>
Para mostrar texto que pode ser copiado e colado, como scripts, peças de
código, arquivos de configuração, etc, também se usa a tag 
<code>&lt;pre&gt;</code>, em conjunto com a classe CSS chamada "script".
Exemplo:
</p>
<pre class="script">
&lt;pre class="script"&gt;

code...

&lt;/pre&gt;
</pre>
<p>
Texto <em>enfatizado</em> é colocado dentro da tag <code>&lt;em&gt;</code> 
e links internos são relativos. É recomendável checar a validade do código
xHTML por meio do <em>validador</em> online da W3C.
</p>

<h2>Diff e patch</h2>

<p>
As utilidades <code>diff</code> e <code>patch</code> são ferramentas de linha
de comando para criação e implementação de diferenças entre dois arquivos. Esta
técnica é freqüentemente usada para colaboração e as mudanças feitas no arquivo
original podem ser extraídas facilmente. Para criar um arquivo <code>diff</code> 
legível aos humanos em um simples editor de textos, você deve fornecer a opção
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
</section>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
