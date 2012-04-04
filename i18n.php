<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Internationalization | SliTaz</title>
	<meta name="description" content="SliTaz GNU/Linux languages" />
	<meta name="keywords" lang="en" content="SliTaz POT, gettext, translation" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav" style="text-align: center; padding: 10px;">
		<?php include("lib/random-image.php"); ?>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>About i18n</h4>
		<p>
			The main goal of SliTaz is to provide full support for a given
			language, including the website, official Wiki documentation,
			a dedicated forum and all SliTaz related projects such as the
			LiveCD GUI builder.
		</p>
		<p>
			<img src="images/users.png" alt="*" />
			<a href="http://scn.slitaz.org/groups/i18n/">Join us on SCN</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>Internationalization</h2>

<p>
	Translation is a community effort and everyone can help. You're
	welcome to join the team! You can find more pot files on 
	<a href="http://hg.slitaz.org/">Hg</a>, just pick one up,
	translate it and send it to the mailing list or upload it onto the
	SliTaz Community Network aka <a href="http://scn.slitaz.org/">SCN</a>.
</p>

<p>
	SliTaz project Website is available in the following languages:
</p>

<div class="box">
	<?php include "lib/lang.php" ?>
</div>

<h2>Information</h2>

<p>
	The website and documentation has been translated and is kept 
	up-to-date by several contributors. For now, the actively maintained
	languages are English, French, German, Portuguese and Chinese. 
	Spanish is on the stove, but more help is needed. Most of the 
	communication is done through the
	<a href="en/mailing-list.html">Mailing List</a> and the
	<a href="http://scn.slitaz.org/groups/i18n/">i18n group</a> on SCN.
</p>

<p>
	Some additional languages can be installed through the Package 
	Manager, but we are not able to provide support and documentation.
	SliTaz is a community based project, everyone can help out and is
	more than welcome to join us.
</p>

<h2 id="howto">How to participate</h2>

<p>
	From fixing typos to translating a full xHTML page there's always editing
	and proofreading to be done. Websites often move and get updated and
	SliTaz home made tools such as TazPanel acquire new strings depending on the new
	functions added to it. Over time we have developed a few ways to let you contact
	us and get involved in the project. 
</p>
<p>
	For sending translations or requesting a new language you can join the
	SliTaz <a href="en/mailing-list.html">Mailing List</a> and/or join the
	community <a href="http://scn.slitaz.org/groups/i18n/">group on SCN</a>
	and post to the <a href="http://scn.slitaz.org/groups/i18n/forum/">forum</a>
	which lets you attach files.
</p>

<h3>Website translation</h3>

<p>
	Here is a howto for translating a SliTaz website into a new language. First 
	you need the original website page in English. You have 2 ways to get a full 
	copy of the website: use Mercurial and clone the repository or download the
	latest archive in tar.bz2 format. Using Mercurial lets you update your
	local copy in one command and downloading directly from the repository
	allows you to get the page you want. So it's matter of choice, but if you
	want to manage a language and push changes yourself, you will have to use
	Mercurial, here is some <a href="en/devel/forge.php">more info on Hg</a>.
</p>
<p>
	Clone the website or get the latest archive:
</p>

<pre>
$ hg clone http://hg.slitaz.org/website
$ wget <a href="http://hg.slitaz.org/website/archive/tip.tar.bz2">http://hg.slitaz.org/website/archive/tip.tar.bz2</a>
</pre>

<p>
	Now that you have a full copy of the website you can fix typos or start a new
	translation. The reference is English, so always copy an English page to
	your native language and naturally keep the website structure intact. When
	you're happy with your work you can send it to the community as
	explained beforehand.
</p>
<p>
	If you're a bit afraid about sending a mail to more than 300 people on the list
	or becoming exposed on the forum, you can send a private message to one of the i18n
	group members on SCN, but he/she might not have time to answer. Keep in mind we are
	a friendly community and there aren't any stupid questions.
</p>

<h3>System translation</h3>

<p>
	Like said before, the goal is to provide full language support, not only
	with the website or forum, but with the system itself. Everything can be translated
	from menu items to SHell scripts and GUI boxes. For this we use standard
	gettext POT files. 
</p>
<p>
	Each translation of a sub-project has its own file named with a language
	prefix, example: pt_BR.po or fr.po. This PO file can be translated with a nice
	graphical editor like POedit on SliTaz. That means you don't need to have
	programming or Linux skills to help or maintain a translation.
</p>
<p>
	If a PO file for a language doesn't exist you can create one yourself or
	ask a contributor to do it for you and commit the new file to Hg. For each
	project you will find a README file with translation instructions to use
	msginit and other gettext tools. If you want to update or complete a
	translation PO file, you can download it from here or from Hg and then
	send it to the list, the forum or SCN as usual. Note that some projects
	are contained in the same repository such as tazpkg-notify which is part
	of tazpkg.
</p>

<style type="text/css">
	table {
			width: 100%;
			border: 1px solid #ddd;
			padding: 10px;
			border-radius: 4px;
		}
	.thead { font-weight: bold; }
	td { border-bottom: 1pt dashed #ddd }
</style>

<!--
	Here we don't link to old gtkdialog box POT files since they will be
	removed. We may have links to menu files or some explaination about
	menu translations.
-->

<table>
	<thead class="thead">
		<tr>
			<td>Project</td>
			<td>POT file</td>
			<td>PO files</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="http://hg.slitaz.org/tazpkg">TazPKG</a></td>
			<td><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg/tazpkg.pot">
				tazpkg.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg/es.po">es</a>,
				<a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/tazpkg">TazPKG Notify</a></td>
			<td><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg-notify/tazpkg-notify.pot">
				tazpkg-notify.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg-notify/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/tazpkg/raw-file/tip/po/tazpkg-notify/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/tazpanel">TazPanel</a></td>
			<td><a href="http://hg.slitaz.org/tazpanel/raw-file/tip/po/tazpanel.pot">
				tazpanel.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/tazpanel/raw-file/tip/po/es.po">es</a>,
				<a href="http://hg.slitaz.org/tazpanel/raw-file/tip/po/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/tazpanel/raw-file/tip/po/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/slitaz-tools">SliTaz Tools</a></td>
			<td><a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-tools/slitaz-tools.pot">
				slitaz-tools.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-tools/es_AR.po">es_AR</a>,
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-tools/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-tools/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/slitaz-tools">SliTaz Boxes</a></td>
			<td><a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-boxes/slitaz-boxes.pot">
				slitaz-boxes.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-boxes/es_AR.po">es_AR</a>,
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-boxes/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/slitaz-boxes/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/slitaz-tools">TazBox</a></td>
			<td><a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/tazbox/tazbox.pot">
				tazbox.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/tazbox/es_AR.po">es_AR</a>,
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/tazbox/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/slitaz-tools/raw-file/tip/po/tazbox/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/ssfs">Ssfs</a></td>
			<td><a href="http://hg.slitaz.org/ssfs/raw-file/tip/po/ssfs/ssfs.pot">
				ssfs.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/ssfs/raw-file/tip/po/ssfs/fr.po">fr</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/tazusb">TazUSB</a></td>
			<td><a href="http://hg.slitaz.org/tazusb/raw-file/tip/po/tazusb/tazusb.pot">
				tazusb.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/tazusb/raw-file/tip/po/tazusb/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/tazusb/raw-file/tip/po/tazusb/pt_BR.po">pt_BR</a>
			</td>
		</tr>
		<tr>
			<td><a href="http://hg.slitaz.org/tazusb">TazUSB Box</a></td>
			<td><a href="http://hg.slitaz.org/tazusb/raw-file/tip/po/tazusb-box/tazusb-box.pot">
				tazusb-box.pot</a></td>
			<td>
				<a href="http://hg.slitaz.org/tazusb/raw-file/tip/po/tazusb-box/fr.po">fr</a>,
				<a href="http://hg.slitaz.org/tazusb/raw-file/tip/po/tazusb-box/pt_BR.po">pt_BR</a>
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</div>

<?php include("lib/html/footer.html"); ?>

</body>
</html>
