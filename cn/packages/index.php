<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
<head>
	<title>SliTaz - 软件包</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux 关于信息" />
    <meta name="keywords" lang="cn" content="slitaz artwork" />
    <meta name="author" content="Draplater" />
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.cn.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>软件包</h4>
		<p>
			这个页面可以显示Slitaz软件源上的所有软件包，并且会每天自动更新。你可以使用图形界面工具“软件之盒”或命令<code>tazpkg get-install pkgname</code>安装软件包。
		</p>
		<p>
			Browse the packages web interface: 
			<a href="http://pkgs.slitaz.org/stable/">稳定版软件包</a>
			| <a href="http://pkgs.slitaz.org/cooking/">开发版软件包</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/search.cgi">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="cn" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="搜索" />
			</p>
		</div>
		Search for:
		<select name="object">
			<option value="Package">软件包</option>
			<option value="Desc">描述</option>
			<option value="Tags">标签</option>
			<option value="Depends">依赖</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">文件</option>
			<option value="File_list">文件列表</option>
			<option value="FileOverlap">common files</option>
		</select>
		in
		<select name="version">
			<option value="cooking">开发版(cooking)</option>
			<option value="stable">稳定版3.0(stable)</option>
			<option value="2.0">稳定版2.0(stable)</option>
			<option value="1.0">稳定版1.0(stable)</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="../../images/text.png" alt="text.png" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a>
	<img src="../../images/network.png" alt="text.png" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>文档</h2>
<p>
	The SliTaz project provides detailed 
	<a href="http://doc.slitaz.org/">documentation</a>
	to let you learn how to install and manage packages on your SliTaz 
	GNU/Linux distribution. 
	The <a href="http://forum.slitaz.org/">support forum</a> members 
	will help you in case of trouble and is also the place to request 
	a new package.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>