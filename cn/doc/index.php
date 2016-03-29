<!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - 中文文档</title>
	<meta name="description" content="SliTaz GNU/Linux 关于信息"/>
	<meta name="keywords" lang="cn" content="slitaz documentation"/>
	<meta name="author" content="Draplater"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.cn.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>中文文档</h4>
		<p>
			SliTaz official documentation is available on the community
			Wiki site. Manuals and a getting started guide is provided
			by each SliTaz LiveCD (installed in <code>/usr/share/doc/slitaz</code>
			and also available through the "Documentation" menu).
		</p>
		<ul>
			<li><a href="http://doc.slitaz.org/cn:start">Community Wiki</a></li>
			<li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.en.html"
				>Getting started guide</a></li>
		</ul>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>使用指南 &amp; 开发指南</h2>

<ul>
	<li><a href="http://doc.slitaz.org/cn:handbook:start">使用指南</a> - 这本使用指南是SliTaz社区为SliTaz初级用户提供的文档。这本指南能帮助你快速在SliTaz起步，可以帮助你把SliTaz改变成你需要的系统。我们建议你首先阅读这本手册。这本手册包括关于LiveCD指南，软件包管理，网络管理，系统管理的内容和一些软件的帮助。</li>
	<li>开发指南 - （未翻译完成）</li>
	<li>制作指南 - （未翻译完成）</li>
</ul>

<h2>手册</h2>
<ul>
	<li><a href="http://doc.slitaz.org/cn:tazpkg:start">Tazpkg手册</a> -  SliTaz软件包管理器</li>
	<li><a href="http://doc.slitaz.org/cn:tazlito:start">Tazlito 手册</a> -  SliTaz Live CD 工具</li>
	<li>TazUSB 手册 -  SliTaz Live USB 工具（未翻译完成）</li>
	<li>Tazwok 手册 -  SliTaz软件烹饪锅（未翻译完成）</li>
</ul>

<h2>Wiki资源</h2>
<p>
<a href="http://doc.slitaz.org/">Wiki</a> 包括许多非官方SliTaz文档，例如常见问题、小提示、未修复BUG等。你可以自由编辑Wiki。
</p>

<h2>发行笔记</h2>
<p>
（未翻译完成）
</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.cn.html";
		if (!file_exists($file)) {
			$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
			if (!file_exists($file))
				break;
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "         发行笔记</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
