<!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz (cn) - Download</title>
	<meta name="description" content="SliTaz GNU/Linux 关于信息"/>
	<meta name="keywords" lang="cn" content="slitaz artwork"/>
	<meta name="author" content="Draplater"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.cn.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>下载</h4>
		<p>
			你可以下载最新的稳定版来得到一个稳定的桌面环境，满足日常生活需要。
			或者使用开发版来测试心软件或者帮助我们改进SliTaz。
		</p>
		<div class="button">
			Quick Download:
			<?php echo "<!-- a href='$stable_iso'>SliTaz $stable_ver</a -->
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>下载SliTaz</h2>

<div class="box-warning">使用SliTaz之前请阅读这篇文章： <a href="http://forum.slitaz.org/topic/-important-info-about-meltdown-and-spectre-">Important info about Meltdown and Spectre</a></div>

<ul>
	<!-- li><a href="#stable">LiveCD稳定版</a> -
	当前稳定版的可启动ISO镜像。</li -->
	<li><a href="#cooking">LiveCD开发版</a> -
	当前开发版的可启动ISO镜像。</li>
	<li><a href="#floppy">软盘</a> -
	从LiveCD、USB设备启动的可启动软盘镜像。</li>
	<li><a href="flavors.php">新鲜玩意</a> - loram版本，衍生版本。</li>
</ul>

<div class="box">
	<p>
		通过一个小的捐赠帮助的项目，或成为官方<a href="/en/sponsor/">赞助商 (en)</a>.
	</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>
	
<h3>下载提示</h3>
<p>
在下载SliTaz之前，最好先浏览<a href="http://wiki.slitaz.org/doku.php?id=lang:cn:handbook">相关文档</a>，了解SliTaz的特性以及使用方式，以便将来的使用。
</p>

<h3>软件源</h3>
<p>
SliTaz的软件源在法国、瑞士、中国均有分布。在法国由<a href="http://www.ads-lu.com/" target="_blank" rel="noopener noreferrer">ADS</a>、Mésobius和<a href="http://www.tuxfamily.org/">TuxFamily</a>提供，在瑞士由<a href="http://mirror.switch.ch/">SWITCHmirror</a>提供<!-- ，在中国由<a href="http://www.lupaworld.com/">LupaWorld</a>提供 -->。感谢这些网站对SliTaz的支持。
</p>

<ul>
	<li>瑞士 - SWITCHmirror提供的软件源 (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a>
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>法国 - TuxFamily提供的软件源
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a>
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<!-- li>中国 - LupaWorld提供的软件源
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li -->

	<li>美国 - Ibiblio提供的软件源
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a>
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>巴西 - UFPR提供的软件源
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a>
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<h3 id="sources">源码</h3>
<p>
Tazpkg（软件包管理器）、Tazlito（SliTaz Live工具）、Tazwok（软件包制作）、
Tazusb（LiveUSB工具）和一些其他的SliTaz小工具可以在SliTaz软件源里下载。
所有小工具SliTaz都默认安装有，源代码的注释是用英文书写的。
你可以在软件源的sources文件夹里找到这些源码。
<a href="http://mirror.slitaz.org/sources/">HTTP</a>
<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<!--
<h2 id="stable">LiveCD - 稳定版</h2>
<p>
	SliTaz稳定版提供一个成熟的操作系统。这个操作系统已经经过严格的测试，基本上没有BUG。
	LiveCD。这个版本选择了许多有用的软件，是一个用途广泛、强大的操作系统。这个版本较为稳定，
	不过更新频率较慢。建议服务器用户或追求稳定的个人用户使用这个版本。
	< ?php echo "当前最新的稳定版本是".$stable_ver."版， ".$stable_rel." 发布。"; ? >
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) - 
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>

<p>
提供给< ?php echo "$stable_ver"; ? >版本的，包含所有软件包的可启动CD镜像每天都会创建。
它也包含SliTaz官方网站的副本，在无网络的情况下可以通过install.sh使用。
</p>

<div class="box-dl"><p>
	< ?php echo "SliTaz GNU/Linux $stable_ver 软件包集合 ($stable_pkgs)
	- <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ? >
</p></div>
-->

<h2 id="cooking">LiveCD - 开发版</h2>
<p>
SliTaz开发版LiveCD是一个在不断开发的版本，也是可以使用的。它包含的软件包比稳定版多，包含的新特性和新改善也很多，更新时间也较快。不过因为更新较快，不稳定因素也多了许多。建议个人用户使用这个版本。
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Cooking $cooking_ver ($cooking_size) - 
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$cooking_md5'>md5</a> ]"; ?>
</p></div>

<p>
提供给开发版的，包含所有软件包的可启动DVD镜像每天都会创建。它也包含SliTaz官方网站的副本，
在无网络的情况下可以通过install.sh使用。这个镜像可以安装到USB设备中，不过会格式化U盘。
</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux Cooking 开发版软件包集合 ($cooking_pkgs)
	- <a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p></div>

<h2 id="floppy">启动软盘</h2>
<p>
这个软盘镜像可以启动在旧电脑中的SliTaz，有没有CD-ROM都可以。它可以启动在USB设备、SliTazCD/DVD、硬盘中的SliTaz，还可以通过网络启动。
</p>

<div class="box-dl"><p>
	软盘镜像(1,44 Mb) -
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">镜像</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
