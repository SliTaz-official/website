<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz - Developers corner</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux project information overview" />
    <meta name="keywords" lang="en" content="about slitaz, gnu, linux, mini distro, livecd" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../../images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://labs.slitaz.org/issues">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>Navigation</h4>
		<div class="right_box">
			<ul>
				<li><a href="../mailing-list.html">Mailing List</a></li>
				<li><a href="../devel/">Development</a></li>
				<li><a href="../packages/">Packages</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.html">Search</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Headlines</a></li>
				<li><a href="../about/">About</a></li>
				<li><a href="../get/">Download</a></li>
				<li><a href="../asso/">Association</a></li>
				<li><a href="../doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Development</h4>
		<p>
			SliTaz is a community based distribution made by many
			people all over the world and everyone is welcome to help
			and get involve in the project.
		</p>
		<p>
			<img src="../../images/users.png" alt="users.png" />
			<a href="http://scn.slitaz.org/">Join us on SCN</a> and
			the <a href="../mailing-list.html">mailing list</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>Devel corner</h2>

<ul>
	<li><a href="#devel">SliTaz Developers corner.</a></li>
	<li><a href="#kiss">KISS and comply to standards.</a></li>
	<li><a href="#tank">Build host &amp; home.</a></li>
	<li><a href="#repos">Mercurial repositories.</a></li>
	<li><a href="#iconv">Implementation of iconv().</a></li>
	<li><a href="#pkgs">Tazpkg packages.</a></li>
	<li><a href="#website">Website Management.</a></li>
	<!--<li><a href="#diff">Diff and patch files.</a></li>-->
</ul>

<a name="devel"></a>
<h2>SliTaz Developers corner</h2>
<p>
SliTaz is an open source and community driven distribution. Everyone is welcome 
to join and contribute, from  users, to hackers and developers, there is always
something to do, ie. Proofreading or writing documentation, sending bugs or 
patches to the Mailing list, gaining access to the wok and pushing some new 
packages or simply to help others on the Mailing list or forum. SliTaz has got
Mercurial repositories hosted on a SliTaz system, developers can ask for a new
repo if needed and contributors have write access to correct typos, scripts, etc.
</p>
<p>
SliTaz is a tiny community and listens to its users. There are several 
developers who are active on the <a href="http://forum.slitaz.org/">forum</a>
and the <a href="../mailing-list.html">Mailing List</a>.
</p>
<p>
For artists there is a dedicated website, simply create an account and 
post your graphics or pictures. The site is managed by the community. If 
you want to lend a hand to administer the site, please contact a 
contributor or e-mail the discussion list. The website art.slitaz.org: 
<a href="http://art.slitaz.org/">SliTaz Community Art</a>
</p>

<a name="kiss"></a>
<h2>KISS and comply to standards</h2>
<p>
Keep it simple: follow the best standards, carefully draft and write
high quality documentation, provide a stable and robust system and keep
the <em>rootfs</em> on the LiveCD light enough to run on machines with at 
least 128 MB RAM. It's also possible to use GTK+2, Dialog, SHell scripts, 
or PHP coding tools on the distribution. The idea is not to duplicate and 
to think small...
</p>

<a name="tank"></a>
<h2>Tank - Build host &amp; home</h2>
<p>
Each contributor may have an account on the project server with secure 
access, disk space, a public directory and all development tools. 
Developers can compile packages and maintainers of the mirror can handle 
sychronization. Tank also hosts the website, web boot and mercurial 
repositories: <a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>
<p>
Instructions on using the build host are described in the Cookbook:
<a href="http://doc.slitaz.org/en:cookbook:buildhost">SliTaz Build Host (tank)</a>.
</p>

<a name="repos"></a>
<h2>Mercurial repositories</h2>
<p>
SliTaz Mercurial or Hg repos can be browsed or cloned by anyone using the URL:
<a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a>. People with write
access can directly use <code>repos.slitaz.org</code> which requires authentication.
Mercurial uses Python and is installable with: 
<code>tazpkg get-install mercurial</code>
</p>
<h3>~/.hgrc</h3>
<p>
Before you push your first commit onto the server, be sure that you have a correct
Hg configuration file with your name and email address, and remember to check 
that you are not root. Personal ~/.hgrc file example:
</p>
<pre class="script">
[ui]
username = FirstName LastName &lt;you@example.org&gt;
</pre>
<h4>Clone, modify, commit and push</h4>
<p>
Clone a repo, example for wok:
</p>
<pre>
 $ hg clone http://repos.slitaz.org/wok
</pre>
<p>
Change directory to wok, note you must be in the repository to be able 
to use 'hg' commands. To check all logs or just the last log:
</p>
<pre>
 $ hg log
 $ hg head
</pre>
<p>
Add or modify one or more files and commit:
</p>
<pre>
 $ hg add
 $ hg status
 $ hg commit -m "Log message..."
 $ hg log
</pre>
<p>
Note that you can use the command <code>rollback</code> to roll back to the last 
transaction. Before pushing changes to the server, it is safe to pull once:
</p>
<pre>
 $ hg pull
 $ hg push
</pre>
<p>
Done, your changes, code or corrections are now on the server.
</p>
<h4>Updating a local wok</h4>
<p>
To update your wok with the local server (<em>pull</em> to pull the changes):
</p>
<pre>
 $ hg pull
 $ hg update
</pre>
<h4>Useful commands</h4>
<p>
Hg commands that can be used.
</p>
<ul>
	<li><code>hg help</code> : Display the full list of commands.</li>
	<li><code>hg rollback</code> : Undo the last action performed (commit,
	pull, push).</li>
	<li><code>hg log &lt;package&gt;</code> : Display a package log.</li>
	<li><code>hg head</code> : Display the last log.</li>
</ul>

<a name="iconv"></a>
<h2>Implementation of iconv()</h2>
<p>
SliTaz uses iconv() provided by GNU glibc - any packages that offer 
<code>libiconv</code> must use the library contained in <code>glibc-locale</code>. 
There is therefore no longer a libiconv package (1.2 MB) in SliTaz.
</p>

<a name="pkgs"></a>
<h2>Tazpkg Packages</h2>
<p>
The tazpkg packages in SliTaz are automatically created via Tazwok and a 
receipt in the wok. The Cookbook describes the 
<a href="../doc/cookbook/wok-tools.html">use of tools</a> 
and the format of <a href="../doc/cookbook/receipts.html">receipts</a>.
These are required reading before we begin.
</p>
<p>
In terms of choice of package, the idea is to offer a package by task or 
functionality, ie. the lightest application in the field and not duplicated. 
Note that the current packages are not immutable, if you find an alternative 
that is lighter, with more features or more <em>sexy</em> for a few extra KB, 
you can suggest it on the Mailing List. Particular attention is given to 
packages for the LiveCD, these should be stripped, removing unnecesary 
dependancies and compiler options. In general candidate packages for the core 
LiveCD are discussed on the Mailing List.
</p>
<p>
Before you begin to compile and create packages for SliTaz, be sure that the 
work doesn't already exist in the 
<a href="http://download.tuxfamily.org/slitaz/packages/undigest/">undigest</a> 
wok provided by the primary SliTaz mirror. Don't forget that the members 
of the list are there to help you and that the documentation of the 
<a href="../doc/cookbook/wok-tools.html">wok and tools</a> 
exists to help you get started.
</p>

<a name="pkgs-naming"></a>
<h3>Naming of packages</h3>
<p>
In most cases the package name is the same as the source, except for
Python, Perl, PHP, Ruby and Lua modules. For example, the package
providing a Kid template system written in Python and XML is named:
<code>python-kid</code>.
</p>

<a name="website"></a>
<h2>Website Management</h2>
<p>
	The website is managed via a mercurial repository, they can be cloned by:
</p>
<pre>
 $ hg clone http://hg.slitaz.org/website
  Or if you have the proper permissions:
 $ hg clone http://repos.slitaz.org/website
</pre>

<h3>xHTML coding style</h3>
<p>
The pages and different <em>books</em> are coded in xHTML 1.0
transitional. The title of level 1 is used only once (at the top), 
level 2 is the title of the document and levels 3 and 4 are then used for
the subtitles. If a list is used instead using smart anchors;
then that starts at the top, just after the title of level 2.
Paragraphs are contained in the tags <code>&lt;p&gt;&lt;/p&gt;</code>. 
For indentation, we use tabs - the reason being semantics and to take 
up less space in terms of octets (bytes). To put code, like the name of
a command inside a paragraph: <code>&lt;code&gt;</code> is the preferred 
method. To view commands or to utilize a terminal, the web pages use
<code>&lt;pre&gt;</code> to display the formatted text. Example:
</p>
<pre>
 $ command
</pre>
<p>
To view text that can be copied and pasted, such as scripts,
bits of code, sample configuration files, etc - we also use
<code>&lt;pre&gt;</code>, but with a CSS class named "script". Example:
</p>
<pre class="script">
&lt;pre class="script"&gt;

code...

&lt;/pre&gt;
</pre>
<p>
The <em>emphasized</em> words put themselves in the tag <code>&lt;em&gt;</code> 
and internal links are relative. Remember to check the validity
of the code via the online <em>validator</em> of the W3C.
</p>

<a name="diff"></a>
<h2>Diff and patch</h2>
<p>
The utilities <code>diff</code> and <code>patch</code> are command-line tools 
for creating and implementing a file containing differences between two files. 
This technique is often used for collaboration and the changes made to the 
original file can be clearly extracted. To create a <code>diff</code> file 
readable by humans in a simple text editor, you must supply the <code>-u</code> option:
</p>
<pre>
 $ diff -u file.orig file.new &gt; file.diff
</pre>
<p>
To apply a patch:
</p>
<pre>
 $ patch file.orig file.diff
</pre>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://labs.slitaz.org/issues">Bugs</a>
	<a href="http://hg.slitaz.org/">Hg</a>
	<p>
		SliTaz @
		<a href="http://twitter.com/slitaz">Twitter</a>
		<a href="http://www.facebook.com/slitaz">Facebook</a>
		<a href="http://distrowatch.com/slitaz">Distrowatch</a>
		<a href="http://en.wikipedia.org/wiki/SliTaz">Wikipedia</a>
		<a href="http://flattr.com/profile/slitaz">Flattr</a>
	</p>
</div>

</body>
</html>
