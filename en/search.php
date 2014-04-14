<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>SliTaz - Search</title>
	<meta name="description" content="SliTaz GNU/Linux custom search engine" />
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../lib/html/header.html");
include("../lib/html/nav.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<div id="content">
	
<h2>Packages Search</h2>

<p>
	Search for <a href="http://pkgs.slitaz.org/">packages</a>,
	files, build logs, receipts, etc. All packages are installable
	via the package manager Tazpkg using the GUI or the command 
	<code>tazpkg get-install pkgname</code>.
</p>

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="en" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Search" />
			</p>
		</div>
		Search for:
		<select name="object">
			<option value="Package">Package</option>
			<option value="Desc">Description</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Depends</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">File</option>
			<option value="File_list">File list</option>
			<option value="FileOverlap">common files</option>
		</select>
		in
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<h2>Google Search</h2>

<p>
	This page lets you also search the entire website Slitaz GNU/Linux,
	the <a href="http://doc.slitaz.org/">documentation</a> wiki and in
	the archives of the <a href="mailing-list.php">Mailing List</a>
	and also in the <a href="http://forum.slitaz.org/">Forum</a>.
	This search engine was created for SliTaz by the Google Co-op custom
	search engine.
</p>

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load('search', '1', {language : 'en', style : google.loader.themes.MINIMALIST});
		google.setOnLoadCallback(function() {
		var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		var options = new google.search.DrawOptions();
		options.setSearchFormRoot('cse-search-form');
		customSearchControl.draw('cse', options);
		}, true);
	</script>
</div>

<div id="cse"></div>
 
<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
