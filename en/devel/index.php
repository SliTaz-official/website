<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Developers corner</title>
	<meta name="description" content="SliTaz GNU/Linux project information overview" />
	<meta name="keywords" lang="en" content="about slitaz, gnu, linux, mini distro, livecd" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.en.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Development</h4>
		<p>
			SliTaz is a community based distribution made by many
			people all over the world and everyone is welcome to help
			and get involved in the project.
		</p>
		<p>
			<img src="/images/users.png" alt="[ ]" />
			<a href="http://scn.slitaz.org/">Join us on SCN</a> and
			the <a href="../mailing-list.php">mailing list</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Devel corner</h2>

<ul>
	<li><a href="forge.php">Forge</a> - Collaborative management, KISS,
	guidelines, Mercurial repos, website and other services.</li>
	<li><a href="/i18n.php">Internationalization project</a> -
	Translation, goals and management.</li>
	<li><a href="http://hg.slitaz.org/" >Mercurial Repositories</a></li>
	<li><a href="http://bugs.slitaz.org/">SliTaz Bug Tracker</a></li>
</ul>

<h2>Get involved</h2>

<p>
	SliTaz is an open source and community driven distribution. Everyone is
	welcome to join and contribute, from  users, to hackers and developers,
	there is always something to do, ie. Proofreading or writing documentation,
	sending bugs or patches to the Mailing list, gaining access to the wok and
	pushing some new packages or simply to help others on the Mailing list or
	<a href="http://forum.slitaz.org/">forum</a>. SliTaz has got Mercurial
	repositories hosted on a SliTaz system, developers can ask for a new repo
	if needed and contributors have write access to correct typos, scripts, etc.
</p>
<p>
	SliTaz is a tiny community and listens to its users. There are several 
	developers who are active on the <a href="http://forum.slitaz.org/">forum</a>
	and the <a href="../mailing-list.php">Mailing List</a>.
</p>
<p>
	For artists there is a dedicated website, simply create an account and 
	post your graphics or pictures. The site is managed by the community. If 
	you want to lend a hand to administer the site, please contact a 
	contributor or e-mail the discussion list. Join the SliTaz Community 
	<a href="http://scn.slitaz.org/groups/artwork/">Artwork group</a>
</p>

<h2>Activity</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/"><img 
			src="/images/development.png" alt="[ ]" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">More commits</a>
	</p>
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
