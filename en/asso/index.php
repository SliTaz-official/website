<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Association</title>
	<meta name="description" content="SliTaz GNU/Linux asso non-profit donate" />
	<meta name="keywords" lang="en" content="about slitaz, gnu, linux, mini distro, livecd" />
	<meta name="author" content="Christophe Lincoln" />
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Association</h4>
		<p>
			The SliTaz GNU/Linux association is a non-profit entity that 
			maintains and manages the project. Its mission is to ensure
			the durability of the project. It provides an infrastruture
			and delivers professional services to users, developers and
			business enterprises using the distribution.
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

<h2>Infrastructure and services</h2>

<ul>
	<li><a href="#overview">Overview</a></li>
	<li><a href="#goals">Current objectives</a></li>
	<li><a href="#members">Members</a></li>
	<li><a href="../sponsor/">Sponsors</a></li>
	<li><a href="#donation">Donations</a></li>
	<li><a href="#postal">Postal Address</a></li>
</ul>

<h3 id="overview">Overview</h3>

<p>
The SliTaz GNU/Linux is an international association based in
Switzerland and respects the Swiss Civil Code. The association is 
comprised of a committee and members and provides financial and 
staff remuneration. Members meet once a year at a general meeting and
decide for example, the activities of the association or the membership
fees. Each member has a right to vote on individual proposals and can
use the hardware (inc. cdrom, T-shirts) of the association to help setup 
a working group to organize events.
</p>
<p>
The project takes on the scale and demands of the
professional world more and more frequently and the creation of the
association is seen as something of a necessity. We chose an association 
economic model to meet the needs of the project and also provide solid and high
quality services to our users and business partners who wish to sponser
the project.
</p>
<p>
A copy of the statutes is sent to each member upon registration and a
PDF version is always available online: 
<a href="/fr/asso/status-association-slitaz.pdf">status-association-slitaz.pdf</a> |
<a href="statutes.php">English Translation</a>.
</p>

<h3 id="goals">Current objectives</h3>

<p>
SliTaz is a project using the open development model and all the 
work is done by a community of volunteers. Our goal is to improve and
provide better organization of contributions. The project's 
friendliness, support, update sites, maintenance services, technical 
support and management teams are topics that we would like to 
address and professionalize.
</p>
<p>
To achieve this, we would ideally like 1 or 2 developers 
to work part-time or full-time on SliTaz. They would have
the responsibility to consolidate and optimize existing systems while
dealing with new demands. The various sub-projects would also be more
dynamic and would see new features published much more frequently.
</p>

<h3 id="members">Members</h3>

<p>
The association is open to any persons. Becoming a member
allows you to support the project and ensure its sustainability through an
annual fee.
</p>
<p>
To join, just send us a letter or email: asso(at)slitaz.org. You will 
then receive an information pack, details of payment fees and 
a copy of the statutes. The minimum contribution was set at 40 Euros for
the year 2009-10. In the email, please specify your:
</p>
<ul>
	<li>Full Name</li>
	<li>Full Address</li>
	<li>Country</li>
</ul>

<h3 id="donation">Donations</h3>

<p>
There are various ways to financially support the association, become
a member or sponsor, or make a one-off payment via PayPal online secure 
services or by using a bank transfer. For a micropayment you can use Flattr,
which is a very nice service with open-source in mind. The project also has
some logistical needs, any donated equipment in good working order is 
welcomed.
</p>

<div>
	<!-- PayPal boutton -->
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
		style="display: inline;">
			<input type="hidden" name="cmd" value="_s-xclick" />
			<input type="hidden" name="hosted_button_id" value="4885025" />
			<input type="image" src="/images/paypal.png" name="submit" 
				alt="PayPal - The safer, easier way to pay online!" />
	</form>
	<!-- Flattr boutton -->
	<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;"
		href="http://www.slitaz.org/"></a>
</div>

<h3 id="postal">Postal Address</h3>

<div class="box">
Association SliTaz<br />
Rue du Village 40<br />
1081 Montpreveyres<br />
Switzerland
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
