<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Forge (en)</title>
	<meta name="description" content="slitaz developers forge"/>
	<meta name="keywords" lang="en" content="slitaz, devel, hg, bugs"/>
	<meta name="author" content="Christophe Lincoln"/>
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

<h2>Collaborative management</h2>

<ul>
	<li><a href="#kiss">KISS and comply to standards.</a></li>
	<li><a href="#tank">Build host &amp; home.</a></li>
	<li><a href="#repos">Mercurial repositories.</a></li>
	<li><a href="#gui">GUI in GTK and CGI/web</a></li>
	<li><a href="#iconv">Implementation of iconv().</a></li>
	<li><a href="#pkgs">Building SliTaz packages.</a></li>
	<li><a href="#website">Website Management.</a></li>
</ul>

<h2 id="kiss">KISS and comply to standards</h2>

<p>
	Keep it simple: follow the best standards, carefully draft and write
	high quality documentation, provide a stable and robust system and keep
	the <em>rootfs</em> on the LiveCD light enough to run on machines with at
	least 128 MB RAM. It's also possible to use GTK+2, Dialog, SHell scripts,
	or PHP coding tools on the distribution. The idea is not to duplicate and
	to think small...
</p>

<h2 id="tank">Tank - Build host &amp; home</h2>

<p>
	Each contributor may have an account on the project server with secure
	access, disk space, a public directory and all development tools.
	Developers can compile packages and maintainers of the mirror can handle
	synchronization. Tank also hosts the Build Bot, Web boot and SliTaz Pro:
	<a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>

<p>
	Instructions on using the build host are described in the Cookbook:
	<a href="http://doc.slitaz.org/en:cookbook:buildhost">
		SliTaz Build Host (tank)</a>.
</p>

<h2 id="repos">Mercurial repositories</h2>

<p>
	SliTaz Mercurial or Hg repos can be browsed or cloned by anyone using
	the URL: <a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a>. People
	with write access can directly use <code>repos.slitaz.org</code> which
	requires authentication. Mercurial uses Python and is installable with:
	<code>tazpkg get-install mercurial</code>
</p>

<h3>~/.hgrc</h3>

<p>
	Before you push your first commit onto the server, be sure that you have a
	correct Hg configuration file with your name and email address, and remember
	to check that you are not root. Personal ~/.hgrc file example:
</p>
<pre class="script">
[ui]
username = FirstName LastName &lt;you@example.com&gt;
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
 $ hg pull -u
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

<h2 id="gui">GUI - Pure C/GTK, Yad, Vala/Genie and CGI/web</h2>

<p>
	There are many ways to create user interfaces in the open source world. From
	the start of the project until 3.0 we mainly used a tool called Gtkdialog
	which let us create quite nice and complex interfaces in GTK, but using a
	scripting language that just ran without having to be compiled. But gtkdialog is
	unmaintained and lacks many new GTK features, so we switched to Yad for simple GUI boxes.
	For all the administration, packages and configuration tools we switched to TazPanel,
	a CGI/web interface with a gui coded in xHTML 5 and CSS 3.
</p>
<p>
	Yad is very simple but doesn't allow us to create complex interfaces even if we
	only need 2 or 3 entries with labels and a few buttons, so another way
	must be found. The advantage of a scripting language is the fact that it doesn't need
	to be compiled and can be coded in realtime (but it produces slower applications).
	Writing tools in C is complex and gets less contributions since SHell scripts are easier
	to understand, so the guidelines are now to keep and continue to improve our
	cmdline tools and provide frontends in GTK or CGI/web.
</p>
<p>
	There are many new languages that use GTK such as Genie, Vala or GTKaml.
	But keep in mind that they are not as popular as C and GTK and not really
	easier to learn and use (for simple frontends you can use SHell
	scripts to perform tasks). You can use Vala but look at a pure
	GTK single window, it uses only 14 lines:
</p>
<pre>
#include &lt;gtk/gtk.h&gt;

int main(int argc, char *argv[])
{
	GtkWidget *window;

	gtk_init(&amp;argc, &amp;argv);
	window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
	g_signal_connect (G_OBJECT (window), "destroy",
			G_CALLBACK (gtk_main_quit), NULL);

	gtk_widget_show(window);
	gtk_main();
	return 0;
}
</pre>
<p>
	If you are not sure about which language to use, discuss it on the mailing list.
	If you just want a small GUI function, look at tazbox in the slitaz-tools
	repo, it has tiny desktop tools such as a logout box. The first
	SliTaz sub-project written in pure GTK is TazWeb and you can use it to learn
	ways to use system() to include system commands in your frontend. For
	example TazWeb uses wget for downloads and sed to add bookmarks.
</p>
<p>
	Yad scripts should follow TazYad guidelines:
	<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/README">
		README</a> and
	<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/tazyad">
		example code</a>
</p>

<h2 id="iconv">Implementation of iconv()</h2>

<p>
	SliTaz uses iconv() provided by GNU glibc - any packages that offer
	<code>libiconv</code> must use the library contained in <code>glibc-locale</code>.
	There is therefore no longer a libiconv package (1.2 MB) in SliTaz.
</p>

<h2 id="pkgs">Building SliTaz packages</h2>

<p>
	Officially building is done with the Cookutils suite. This package is installed
	on each SliTaz system as well as documentation about using cook and
	<a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html">creating SliTaz packages</a> 
	suitable for the TazPKG packages manager.
</p>
<p>
	The tazpkg packages in SliTaz are automatically created via the
	<a href="http://cook.slitaz.org/">Cooker</a> from the Cookutils package
	and a receipt in the wok. The Cookbook describes the format of
	<a href="http://doc.slitaz.org/en:cookbook:receipt">receipts</a>.
	Cookutils and receipt documentation are required reading before we begin.
</p>
<p>
	In terms of choice of package, the idea is to offer a package by task or
	functionality, ie. the lightest application in the field and not duplicated.
	Note that the current packages are not immutable, if you find an alternative
	that is lighter, with more features or more <em>sexy</em> for a few extra KB,
	you can suggest it on the Mailing List. Particular attention is given to
	packages for the LiveCD, these should be stripped, removing unnecessary
	dependencies and compiler options. In general candidate packages for the core
	LiveCD are discussed on the Mailing List.
</p>
<p>
	Before you begin to compile and create packages for SliTaz, be sure that the
	work doesn't already exist in the
	<a href="http://download.tuxfamily.org/slitaz/packages/undigest/">undigest</a>
	wok provided by the primary SliTaz mirror. Don't forget that the members
	of the list are there to help you and that the 
	<a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html">Cookutils</a>
	documentation exists to help you get started.
</p>

<h3 id="pkgs-naming">Naming of packages</h3>

<p>
	In most cases the package name is the same as the source, except for
	Python, Perl, PHP, Ruby and Lua modules. For example, the package
	providing a Kid template system written in Python and XML is named:
	<code>python-kid</code>.
</p>

<h2 id="website">Website Management</h2>

<p>
	The website is managed via a mercurial repository, this can be cloned by:
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

<h2 id="diff">Diff and patch</h2>

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
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
