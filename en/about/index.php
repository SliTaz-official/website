<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - About the project</title>
	<meta name="description" content="SliTaz GNU/Linux project information overview">
	<meta name="keywords" lang="en" content="about slitaz, gnu, linux, mini distro, livecd">
	<meta name="author" content="Christophe Lincoln">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.html");
include("../../lib/html/nav.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">
	
<h2>About SliTaz</h2>
<p>
	Small, fast, stable and easy to use!
</p>
<ul>
	<li><a href="#intro">Introduction</a></li>
	<li><a href="#spec">SliTaz Specifications</a></li>
	<li><a href="#overview">Overview</a></li>
	<li><a href="#website">Web site &amp; i18n</a></li>
	<li><a href="#reviews">Reviews</a></li>
	<li><a href="../asso/">Association</a></li>
</ul>

<h2 id="intro">Introduction to the project</h2>

<p>
SliTaz GNU/Linux is a free operating system working completely in memory from  
removable media such as a CD-ROM or USB key. It is light, speedy and fully installable
on a hard drive. SliTaz is distributed in the form of a LiveCD that you can easily
burn to a cdrom and boot from. When the system is running you can eject the LiveCD
and use your CD drive for other tasks. The Live system provides a fully-featured, 
working graphical distro and lets you keep your data and personal settings on 
persistent media. The system can be extended with the Tazpkg package manager and 
security updates are provided for the cooking and stable versions. 
</p>
<p>
SliTaz project provides free technical support to users through the
<a href="../mailing-list.php">Mailing list</a> (i18n list)
and the <a href="http://forum.slitaz.org/">English Forum</a>.
You can also contact us for more information, suggestions, or comments
using the list or directly by mail: &lt;devel at slitaz.org&gt;
</p>

<h2 id="spec">SliTaz Specifications</h2>

<p>
The default ISO image provides 4 flavors: base, just-x, gtk-only and the
full desktop. SliTaz can also be booted from the web, customized to match
any needs and installed on a wide range of devices from old computers, to
powerful servers and small ARM devices such as the Raspberry Pi.
</p>
<p>
SliTaz is easy to use for Linux beginners: we provide a fully featured 
and modern desktop following the Freedesktop standards with home made 
tools that lets users graphically configure the entire system. The full 
system can even be controlled remotely with our web based configuration 
panel.
</p>

<p>
We provide a base system and a stripped down X system from where you can 
build your own customized distro. The custom system can then be used 
from a CD-ROM, USB stick, SD Card, installed to HD or booted from the web.
</p>
<p>
Follow UNIX philosophy: i.e. everything is a text file. Our packages manager
and all system settings are stored in simple text files for easy 
customization and human readable configurations. SHell scripting is 
used for most tools, again for easy customization and development.
</p>
<p>
Radically simple way to boot using 4 scripts to configure the entire
system, handle boot options, manage networking and run local commands.
SliTaz loads the minimal resources and lets users control everything else.
</p>
<p>
Be able to run completely in RAM memory from a LiveCD, a USB stick or
frugal HD install. This mode allows you to save documents on a mounted
partition while the system stays super fast and responsive.
</p>
<p>
Structured network with deep SliTaz integration for easy navigation
between all sites. Structured development with Mercurial and custom
tools such as the bug tracker and the cookutils.
</p>

<h2 id="overview">Overview</h2>

<ul>
	<li>Root filesystem taking up about 100 MB and ISO image of less than 40 MB.</li>
	<li>Ready to use Web/FTP server powered by Busybox with CGI support.</li>
	<li>Browse the Web with Midori, Firefox or Lynx in text mode.</li>
	<li>Sound support provided by Alsa mixer, audio player and CD ripper/encoder.</li>
	<li>Chat, mail and FTP clients.</li>
	<li>SSH client and server powered by Dropbear.</li>
	<li>Database engine with SQLite.</li>
	<li>Generate a LiveUSB device.</li>
	<li>Tools to create, edit or burn CD or DVD images.</li>
	<li>Elegant desktop with Openbox running on the top of Xorg/Xvesa (X server).</li>
	<li>Homemade graphical boxes to command line utilities.</li>
	<li>4967 packages easily installable from the mirror.</li>
	<li>Active and friendly community.</li>
</ul>

<h2 id="website">Website &amp; i18n</h2>

<p>
SliTaz's Web site is also available in several languages and is
part of the <a href="/i18n.php">internationalization project</a>.
The web site allows you to <a href="../get/">download</a> the SliTaz
LiveCD and help us to develop the project. You can check the 
<a href="../doc/">documentation</a> area to learn how to use the SliTaz 
LiveCD and configure the system.
</p>

<h2 id="reviews">Reviews</h2>

<p>
SliTaz GNU/Linux has been reviewed on several web sites. Thanks to 
everyone for support.
</p>

<h3>4.0 - April 2012</h3>

<ul>
	<li><a href="http://badalhocando.blogspot.co.uk/2012/04/slitaz-40-review-small-but-fierce.html"
		>Blogspot</a> - By Klaus Zimmermann.</li>
	<li><a href="http://linuxblog.darkduck.com/2012/04/slitaz-40-light-and-stable.html"
		>DarkDuck</a> - By Dmitry.</li>
	<li><a href="http://frederic.bezies.free.fr/blog/?p=8760"
		>Weblog</a> (fr) - By Frederic Bezies.</li>
</ul>

<h3>3.0 - March 2010 &amp; Cooking - Jan 2010</h3>

<ul>
	<li><a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/"
		>Wordpress</a> - By K.Mandla.</li>
	<li><a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30"
		>Linux Journal</a> - By Susan Linton.</li>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - By Jesse Smith (Cooking just before 3.0).</li>
</ul>

<h3>2.0 - April 2009</h3>

<ul>
	<li><a href="http://www.gdhpress.com.br/blog/slitaz"
		>Gdhpress</a> (pt) - By Carlos Morimoto.</li>
	<li><a href="http://www.frlinux.net/?section=distributions&amp;article=237"
		>FRLinux</a> (fr) - By Steph.</li>
	<li><a href="http://www.junauza.com/2009/07/slitaz-20-simple-speedy-and-secure.html"
		>Tech Source</a> - By Jun Auza.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz-2.html"
		>Dedoimedo</a> - By Dedoimedo.</li>
	<li><a href="http://linuxologist.com/reviews/slitaz-linux-zero-to-distro-in-30-mb/"
		>Linuxologist</a> - By Brie Gordon.</li>
</ul>

<h3>1.0 - March 2008</h3>

<ul>
	<li><a href="http://distrowatch.com/weekly.php?issue=20080331"
		>Distrowatch</a> - By Ladislav Bodnar.</li>
	<li><a href="http://www.junauza.com/2008/03/slitaz-gnulinux-smallest-desktop-distro.html"
		>Tech Source</a> - By Jun Auza.</li>
	<li><a href="http://beranger.org/index.php?page=diary&amp;2008/03/31/07/04/42-a-quick-look-over-slitaz-1-0"
		>Planet Béranger</a> - By Béranger.</li>
	<li><a href="http://kmandla.wordpress.com/2008/04/02/slitaz-10-on-450mhz-k6-2-256mb/"
		>Wordpress</a> - By K.Mandla.</li>
	<li><a href="http://reddevil62-techhead.blogspot.com/2008/04/damn-minuscule-linux-first-look-at.html"
		>Red Devil's Tech Blog</a> - By Steve Lawson.</li>
	<li><a href="http://www.linuxinfusion.com/slitaz-a-light-weight-gnulinux-distribution"
	    >Linux Infusion</a> - By Moparx.</li>	
	<li><a href="http://www.insidesocal.com/click/2008/06/a-second-look-at-slitaz-10.html"
		>Dailynews Blog</a> - By Steven Rosenberg.</li>	
	<li><a href="http://www.linux.com/feature/140573">Linux.com</a> - By Dennis L. Ericson.</li>
	<li><a href="http://www.freesoftwaremagazine.com/columns/slitaz_live_cd_small_beautifully_marked"
		>Free Software Magazine</a> - By Gary Richmond.</li>
	<li><a href="http://www.linux-magazine.com/issues/2008/97/slitaz"
		>Linux Pro Magazine</a> - By Dimitri Popov.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz.html"
		>Dedoimedo</a> - By Dedoimedo.</li>
</ul>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
