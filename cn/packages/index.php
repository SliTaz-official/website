<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
<head>
	<title>SliTaz - 软件包</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux 关于信息" />
    <meta name="keywords" lang="cn" content="slitaz artwork" />
	<meta name="robots" content="index, follow, all" />
    <meta name="modified" content="2011-03-26 13:15:00" />
    <meta name="author" content="Draplater" />
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
		<a href="http://bugs.slitaz.org">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>美术资源</h4>
		<div class="right_box">
			<ul>
				<li><a href="../../en/mailing-list.php">邮件列表 (en)</a></li>
				<li><a href="../../en/devel/">开发 (en)</a></li>
				<li><a href="../packages/">软件包</a></li>
				<li><a href="../artwork/">美工</a></li>
				<li><a href="../search.php">搜索</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">头条</a></li>
				<li><a href="../about/">关于</a></li>
				<li><a href="../get/">下载</a></li>
				<li><a href="../../en/asso/">捐赠 (en)</a></li>
				<li><a href="../doc/">文档</a></li>
			</ul>
		</div>
	</div>
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

<!-- Languages -->
<div id="lang">
	<a href="../../i18n.php"><img src="../../images/locale.png" alt="Locale:" /></a>
	<a href="../../da/packages/">Dansk</a>
	<a href="../../de/packages/">Deutsch</a>
	<a href="../../en/packages/">English</a>
	<a href="../../es/packages/">Español</a>
	<a href="../../fr/packages/">Français</a>
	Indonesian
	<a href="../../it/packages/">Italiano</a>
	<a href="../../pt/packages/">Português</a>
	<a href="../../ru/packages/">Русский</a>
	<b>中文</b>
</div>

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

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://bugs.slitaz.org">Bugs</a>
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
