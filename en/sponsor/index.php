<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz - Sponsorship</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux asso sponsor" />
    <meta name="keywords" lang="en" content="slitaz pro, slitaz sponsor, support" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Sponsorship</h4>
		<p>
			SliTaz is a non-profit based project and we are always looking for
			new ways to monetary support the project and provide new hardware.
		</p>
		<p>Help the project via a small donation:</p>
		<?php include("../../lib/html/donate.html"); ?>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2>Sponsoring SliTaz</h2>
<p>
	Firstly, a huge thanks to our <a href="#cur">current sponsors</a> and all 
	the people who support us with small but very important donations to the project.
	The project is still quite young but in 5 years of active development we
	have grown and become a professional grade operating system that is safe to
	use in production environments.
</p>

<h3>Monetary support a developer</h3>
<p>
	Do you use SliTaz in your project and want to see the distribution getting
	even more professional with main developers working on the project full time?
	If so, you can sponsor the SliTaz Association which will pay a developer to
	work fully 100% on SliTaz. We actually don't have enough money the pay a developer
	for the whole year, but the amount of donations and monetary support lets us have
	a professional working 3-4 months per year on the project. In time we hope to
	have developers working on a full time basis on SliTaz.
</p>

<h3>Hardware sponsor</h3>
<p>
	As a open source project we usually develop SliTaz on our own personal computers.
	But we sometimes have to change our personal systems and need new hardware. We also 
	can't test the distribution on some specific machines as we dont have access to them. 
	If you are a hardware manufacturer and want to see Slitaz working out-of-the-box on 
	your computers you can send us a machine so that we can work on it for you.
</p>
<p>
	SliTaz is built with tools ready for cross compilation and we would like to
	port SliTaz to the ARM platform. For this we need some ARM hardware to be
	able to test our cross compiled binaries and adapt SliTaz to ARM architecture.
</p>

<h3>Hardware recycling</h3>
<p>
	SliTaz is a great distribution to give an old computer a new lease of life and we
	need some old hardware to test it on. Also, we may recycle some of your
	old hardware to preinstall SliTaz on it and then sell it on at low cost. This
	lets people have a cheap but powerful machine and lets us make a bit of money
	and provide a service.
</p>

<h2>Contact and information</h2>
<p>
	If you are interested and want more information about monetary or hardware
	sponsorship you can contact the SliTaz Association by mail at &lt;asso at
	slitaz.org&gt; or via <a href="../asso/#postal">post</a>.
</p>
<p>
	By sponsoring SliTaz you will get your logo and website url on this page
	which is linked to all the other pages of the website. You will also be able
	to publicly claim your participation in a pure Open Source project and get
	more attention from Free Software and Linux users.
</p>

<a name="cur"></a>
<h2>Our current sponsors</h2>
<table>
	<tbody>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png"
				style="float: left;" /></a>
			</td>
			<td>
				Allied Data Sys - ADS sponsors the main SliTaz mirror and
				offers us full access to a virtual machine with a high 
				speed connection. This allows us to use the machine as we
				wish without any limitations. A huge thanks to ADS for 
				the service and fast response to any questions and requests
				we might have.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="https://duckduckgo.com/"><img
				src="/images/sponsor/ddg.png"
				style="float: left;" /></a>
			</td>
			<td>
				DuckDuckGo search engine - DDG signed a partnership with SliTaz
				to share the revenue generated by the <em>sponsored links</em>
				within the search results seen by SliTaz users. We share 50% of
				revenue so using DDG in SliTaz helps both projects. DuckDuckGo
				is a search engine with way more instant answers, less spam
				and clutter, lots of goodies and real privacy.
			</td>
		</tr>
		<tr>
			<td style="width: 120px; height: 100px;">
				<a href="http://cosi.clarkson.edu"><img
				src="/images/sponsor/cosi.png"
				style="float: left;" /></a>
			</td>
			<td>
				The Clarkson Open Source Institute - COSI sponsors our Chub
				server and offers us full access to a virtual machine. We are
				proud to work with COSI which was founded 
				to promote open source software (OSS) and provide equipment 
				and support for student projects. A huge thanks to the team
				at COSI for the support and fast response to any of our requests.
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
