<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Sponsorship</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux asso sponsor" />
    <meta name="keywords" lang="pt" content="slitaz pro, slitaz patrocínio, suporte" />
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
		<h4>Patrocínio</h4>
		<p>
            O SliTaz é uma organização sem fins comerciais, que procura formas
            de patrocínio monetário para o projeto ou para aquisição de hardware. 
		</p>
		<p>Ajude o projeto por meio de pequenas doações:</p>
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
    e todas as pessoas que nos apoiam com pequenas porém importantes doações.
    Nosso projeto é ainda novo, porém em 5 anos de desenvolvimento ativo
    crescemos e podemos oferecer um sistema operacional que pode ser utilizado
    de forma profissional e é seguro para ambientes de produção.
</p>

<h3>Suporte monetário a um desenvolvedor</h3>
<p>
    Você usa o SliTaz em seu projeto e quer tornar a distribuição ainda mais
    profissional, com os principais desenvolvedores trabalhando no projeto
    a todo tempo. Se sim, você pode patrocinar a Associação do SliTaz que
    paga um desenvolvedor para se dedicar totalmente à distribuição. Atualmente
    não temos fundos suficientes para pagar um desenvolvedor por todo o ano,
    porém a quantidade de doações permitem que um desenvolvedor trabalhe em
    torno de 3 a 4 meses no projeto. Em um futuro próximo, gostaríamos que 
    fosse possível ter um desenvolvedor dedicado durante todo o ano.
</p>

<h3>Patrocínio de Hardware</h3>
<p>
    Como todo projeto opensource, desenvolvemos o SliTaz com nossos computadores
    pessoais. Mas de tempos em tempos precisamos atualizar nossas máquinas e
    obter novo hardware. Não podemos testar a distribuição em hardware específico
    que não possuímos acesso. Se você possúi ou fabrica hardware e gostaria
    de ter o SliTaz funcionando com total compatibilidade com determinado
    hardware, pode doar máquinas para que possamos adaptar a distribuição
    de forma a que seja funcional nestas máquinas / hardware.
</p>
<p>
    O SliTaz é feito com ferramentas que permitem a compilação em mais de uma
    plataforma, então gostaríamos de portar a distribuição para máquinas ARM.
    Porém, precisamos de hardware ARM para podermos testar nossos compiladores
    e adaptar a distribuição para esta arquitetura.
</p>

<h3>Reciclagem de Hardware</h3>
<p>
    O SliTaz é ótimo para fazer máquinas antigas funcionarem de forma
    satisfatória, porém precisamos de máquinas antigas para testarmos. Também
    podemos reciclar suas máquinas, instalando o SliTaz e talvez vendendo-as
    a baixo custo. Isto permitiria às pessoas possuir computadores baratos
    porém poderosos o suficiente para tarefas cotidianas, e ainda nos permitiria
    obter algum retorno pelo serviço oferecido
</p>

<h2>Contato e informação</h2>
<p>
    Se você se interessa e quer mais informações sobre patrocínio à distribuição,
    ou doação de hardware, pode nos contatar por email em 
	&lt;asso at slitaz.org&gt; ou por <a href="../asso/#postal">carta</a>.
</p>
<p>
    Ao patrocinar o SliTaz você terá o logo e endereço de seu website em
    nosso site. Você também poderá divulgar sua participação em um projeto
    de código aberto e obter mais atenção dos usuários de Software Livre e
    Linux. 
</p>

<a name="cur"></a>
<h2>Nossos patrocinadores atuais</h2>
<table>
	<tbody>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png"
				style="float: left;" /></a>
			</td>
			<td>
                Allied Data Sys - O patrocinador ADS fornece nosso mirror
                principal, assim como uma máquina virtual com conexão de alta
                disponibilidade, o que nos permite usá-la para todas as
                necessidades do projeto. Agradecemos à ADS pelo serviço
                oferecido e por atender nossas demandas.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="https://duckduckgo.com/"><img
				src="/images/sponsor/ddg.png"
				style="float: left;" /></a>
			</td>
			<td>
                Buscador DuckDuckGo - O DDG é parceiro do SliTaz e divide
                os fundos conseguidos por meio de <em>links patrocinados</em>
                resultantes das buscas feitas por usuários do SliTaz. Dividimos
                os fundos meio a meio, então a utilização deste buscador
                ajuda a ambos os projetos. O DDG é um buscador com mais
                respostas úteis, menos spam, várias opções e que fornece
                privacidade ao usuário.
			</td>
		</tr>
        <tr>
            <td style="width: 120px; height: 100px;">
                <a href="http://cosi.clarkson.edu"><img
                src="/images/sponsor/cosi.png"
                style="float: left;" /></a>
            </td>
            <td>
                Clarkson Open Source Institute - O Cosi fornece nosso servidor
                Chub, oferecendo acesso total a uma máquina virtual. Nos
                orgulhamos pela parceria com a Universidade Clarkson, que foi
                fundada para promover Software Open Source, fornecendo
                equipamento e suporte para projetos de estudantes. Nossos
                agradecimentos ao pessoal do COSI pelo suporte e por
                responder prontamente aos nossos pedidos.
            </td>
        </tr> 
	</tbody>
</table>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.pt.html"); ?>

</body>
</html>
