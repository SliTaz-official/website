<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Sponsorship</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux asso sponsor" />
    <meta name="keywords" lang="pt" content="slitaz pro, slitaz patroc�nio, suporte" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
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
		<h4>Patroc�nio</h4>
		<p>
            O SliTaz � uma organiza��o sem fins comerciais, que procura formas
            de patroc�nio monet�rio para o projeto ou para aquisi��o de hardware. 
		</p>
		<p>Ajude o projeto por meio de pequenas doa��es:</p>
		<?php include("../../lib/html/donate.html"); ?>
	</div>
</div>

<!-- Content -->
<div id="content">

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Patrocinadores em destaque</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2>Patrocinando o SliTaz</h2>
<p>
    Primeiramente, agradecemos aos nossos <a href="#cur">atuais patrocinadores</a>
    e todas as pessoas que nos apoiam com pequenas por�m importantes doa��es.
    Nosso projeto � ainda novo, por�m em 5 anos de desenvolvimento ativo
    crescemos e podemos oferecer um sistema operacional que pode ser utilizado
    de forma profissional e � seguro para ambientes de produ��o.
</p>

<h3>Suporte monet�rio a um desenvolvedor</h3>
<p>
    Voc� usa o SliTaz em seu projeto e quer tornar a distribui��o ainda mais
    profissional, com os principais desenvolvedores trabalhando no projeto
    a todo tempo. Se sim, voc� pode patrocinar a Associa��o do SliTaz que
    paga um desenvolvedor para se dedicar totalmente � distribui��o. Atualmente
    n�o temos fundos suficientes para pagar um desenvolvedor por todo o ano,
    por�m a quantidade de doa��es permitem que um desenvolvedor trabalhe em
    torno de 3 a 4 meses no projeto. Em um futuro pr�ximo, gostar�amos que 
    fosse poss�vel ter um desenvolvedor dedicado durante todo o ano.
</p>

<h3>Patroc�nio de Hardware</h3>
<p>
    Como todo projeto opensource, desenvolvemos o SliTaz com nossos computadores
    pessoais. Mas de tempos em tempos precisamos atualizar nossas m�quinas e
    obter novo hardware. N�o podemos testar a distribui��o em hardware espec�fico
    que n�o possu�mos acesso. Se voc� poss�i ou fabrica hardware e gostaria
    de ter o SliTaz funcionando com total compatibilidade com determinado
    hardware, pode doar m�quinas para que possamos adaptar a distribui��o
    de forma a que seja funcional nestas m�quinas / hardware.
</p>
<p>
    O SliTaz � feito com ferramentas que permitem a compila��o em mais de uma
    plataforma, ent�o gostar�amos de portar a distribui��o para m�quinas ARM.
    Por�m, precisamos de hardware ARM para podermos testar nossos compiladores
    e adaptar a distribui��o para esta arquitetura.
</p>

<h3>Reciclagem de Hardware</h3>
<p>
    O SliTaz � �timo para fazer m�quinas antigas funcionarem de forma
    satisfat�ria, por�m precisamos de m�quinas antigas para testarmos. Tamb�m
    podemos reciclar suas m�quinas, instalando o SliTaz e talvez vendendo-as
    a baixo custo. Isto permitiria �s pessoas possuir computadores baratos
    por�m poderosos o suficiente para tarefas cotidianas, e ainda nos permitiria
    obter algum retorno pelo servi�o oferecido
</p>

<h2>Contato e informa��o</h2>
<p>
    Se voc� se interessa e quer mais informa��es sobre patroc�nio � distribui��o,
    ou doa��o de hardware, pode nos contatar por email em 
	&lt;asso at slitaz.org&gt; ou por <a href="../asso/#postal">carta</a>.
</p>
<p>
    Ao patrocinar o SliTaz voc� ter� o logo e endere�o de seu website em
    nosso site. Voc� tamb�m poder� divulgar sua participa��o em um projeto
    de c�digo aberto e obter mais aten��o dos usu�rios de Software Livre e
    Linux. 
</p>

<a name="cur"></a>
<h2>Nossos patrocinadores atuais</h2>
<table>
	<tbody>
		<tr>
			<td style="width: 120px; height: 120px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png"
				style="float: left;" /></a>
			</td>
			<td>
                Allied Data Sys - Nosso patrocinador ADS fornece nosso mirror
                principal, assim como uma m�quina virtual com conex�o de alta
                disponibilidade, o que nos permite us�-la para todas as
                necessidades do projeto. Agradecemos � ADS pelo servi�o
                oferecido e por atender nossas demandas.
			</td>
		</tr>
		<tr>
			<td style="width: 120px;">
				<a href="https://duckduckgo.com/"><img
				src="/images/sponsor/ddg.png"
				style="float: left;" /></a>
			</td>
			<td>
                Buscador DuckDuckGo - O DDG � parceiro do SliTaz e divide
                os fundos conseguidos por meio de <em>links patrocinados</em>
                resultantes das buscas feitas por usu�rios do SliTaz. Dividimos
                os fundos meio a meio, ent�o a utiliza��o deste buscador
                ajuda a ambos os projetos. O DDG � um buscador com mais
                respostas �teis, menos spam, v�rias op��es e que fornece
                privacidade ao usu�rio.
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
