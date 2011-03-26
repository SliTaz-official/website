<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
<head>
    <title>SliTaz GNU/Linux</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="SliTaz GNU/Linux LiveCD" />
    <meta name="keywords" lang="cn" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
    <meta name="robots" content="index, follow, all" />
    <meta name="revisit-after" content="7 days" />
    <meta name="expires" content="never" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln"/>
    <meta name="publisher" content="www.slitaz.org" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<!-- Access -->
	<div id="access">
		<a href="../../i18n.html"><img 
			src="../../pics/website/locale.png" alt="locale.png" /></a>
	    <a href="../../de/">Deutsch</a> |
	    <a href="../../en/">English</a> |
	    <a href="../../es/">Español</a> |
	    <a href="../../fr/">Français</a> |
	    <a href="../../pt/">Português</a>
	</div>
    <!-- Logo -->
	<a href="http://www.slitaz.org/"><img id="logo"
		src="../../pics/website/logo.png" 
		title="www.slitaz.org" alt="www.slitaz.org" /></a>
	<p id="titre">#!/GNU/Linux</p>
</div>

<!-- Content -->
<div id="content-full">

<!-- Block begin -->
<div class="block">
	<!-- Nav block begin -->
	<div id="block_nav">
		<h3><img src="../../pics/website/network.png" alt="png" />导航</h3>
		<div style="width: 50%; float: right;">
			<ul>
				<li><a href="../artwork/">美工</a></li>
				<li><a href="../../en/mailing-list.html">邮件列表</a></li>
				<li><a href="../../en/devel/">开发</a></li>
				<li><a href="../search.html">搜索</a></li>
				<li><a href="../../netmap.php">网站地图</a></li>
			</ul>
		</div>
		<ul>
			<li><a href="../about/">关于</a></li>
			<li><a href="../../en/asso/">捐赠</a></li>
			<li><a href="../get/">下载</a></li>
			<li><a href="../doc/">文档</a></li>
			<li><a href="../packages/">软件包</a></li>
		</ul>
	<!-- Nav block end -->
	</div>
	<!-- Top block begin -->
	<div id="block_top">
	<h1>下载Slitaz</h1>
	<p>
		你可以下载最新的稳定版来得到一个稳定的桌面环境，满足日常生活需要。
		或者使用开发版来测试心软件或者帮助我们改进Slitaz。
	</p>
	<ul>
		<li><a href="index.html#stable">LiveCD稳定版</a> -
		当前稳定版的可启动ISO镜像。</li>
		<li><a href="index.html#cooking">LiveCD开发版</a> -
		当前开发版的可启动ISO镜像。</li>
		<li><a href="index.html#floppy">软盘</a> -
		从LiveCD、USB设备启动的可启动软盘镜像。</li>
		<li><a href="flavors.html">新鲜玩意</a> - loram版本，衍生版本。</li>
	</ul>
	<!-- Top block end -->
	</div>
<!-- Block end -->
</div>


<h2>下载</h2>

<h3>下载提示</h3>
<p>
在下载Slitaz之前，最好先浏览<a href="http://wiki.slitaz.org/doku.php?id=lang:cn:handbook">相关文档</a>，了解Slitaz的特性以及使用方式，以便将来的使用。
</p>

<h3>软件源</h3>
<p>
Slitaz的软件源在法国、瑞士、中国均有分布。在法国由<a href="http://www.ads-lu.com/" target="_blank">ADS</a>、Mésobius和<a href="http://www.tuxfamily.org/">TuxFamily</a>提供，在瑞士由<a href="http://mirror.switch.ch/">SWITCHmirror</a>提供，在中国由<a href="http://www.lupaworld.com/">LupaWorld</a>提供。感谢这些网站对Slitaz的支持。
</p>

<ul>
	<li>瑞士 - SWITCHmirror提供的软件源 (10 Gbit/s)
	<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a>
	<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a></li>

	<li>法国 - Mésobius提供的软件源 (100 Mps)
	<a href="http://slitazmirror.linuxembarque.com">HTTP</a></li>

	<li>法国 - TuxFamily提供的软件源
	<a href="http://download.tuxfamily.org/slitaz/">HTTP</a>
	<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a></li>

	<li>中国 - LupaWorld提供的软件源
	<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a></li>

	<li>美国 - Ibiblio提供的软件源
	<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/">HTTP</a>
	<a href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a></li>

	<li>巴西 - UFPR提供的软件源
	<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a>
	<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a></li>
</ul>

<a name="sources"></a>
<h3>源码</h3>
<p>
Tazpkg（软件包管理器）、Tazlito（Slitaz Live工具）、Tazwok（软件包制作）、
Tazusb（LiveUSB工具）和一些其他的Slitaz小工具可以在Slitaz软件源里下载。
所有小工具Slitaz都默认安装有，源代码的注释是用英文书写的。
你可以在软件源的sources文件夹里找到这些源码。
<a href="http://mirror.slitaz.org/sources/">HTTP</a>
<a href="http://mirror.slitaz.org/sources/">FTP</a>
</p>

<a name="stable"></a>
<h2>LiveCD - 稳定版</h2>
<p>
Slitaz稳定版提供一个成熟的操作系统。这个操作系统已经经过严格的测试，基本上没有BUG。
LiveCD。这个版本选择了许多有用的软件，是一个用途广泛、强大的操作系统。这个版本较为稳定，
不过更新频率较慢。建议服务器用户或追求稳定的个人用户使用这个版本。
当前最新的稳定版本是3.0版，在2010年3月28日发布。
</p>

<p class="get">
SliTaz GNU/Linux 3.0 (30 MB) -
<a href="http://mirror.slitaz.org/iso/3.0/slitaz-3.0.iso"
>slitaz-3.0.iso</a>
[ <a href="http://mirror.slitaz.org/iso/3.0/slitaz-3.0.md5"
>md5</a> ]
</p>

<p>
提供给2.0版本的，包含所有软件包的可启动CD镜像每天都会创建。它也包含Slitaz官方网站的副本，在无网络的情况下可以通过install.sh使用。
</p>

<p class="get">
SliTaz GNU/Linux 3.0 软件包集合 (&lt; 2Gb) -
<a href="http://mirror.switch.ch/ftp/mirror/slitaz/iso/3.0/packages-3.0.iso">packages-3.0.iso</a>
[ <a href="http://mirror.switch.ch/ftp/mirror/slitaz/iso/3.0/packages-3.0.md5">md5</a> ]
</p>

<a name="cooking"></a>
<h2>LiveCD - 开发版</h2>
<p>
Slitaz开发版LiveCD是一个在不断开发的版本，也是可以使用的。它包含的软件包比稳定版多，包含的新特性和新改善也很多，更新时间也较快。不过因为更新较快，不稳定因素也多了许多。建议个人用户使用这个版本。
</p>

<p class="get">
SliTaz GNU/Linux 开发版-20101104 (32 Mb) -
<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
>slitaz-cooking.iso</a>
[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
>md5</a> ]
</p>

<p>
提供给开发版的，包含所有软件包的可启动DVD镜像每天都会创建。它也包含Slitaz官方网站的副本，在无网络的情况下可以通过install.sh使用。这个镜像可以安装到USB设备中，不过会格式化U盘。

</p>

<p class="get">
SliTaz GNU/Linux 开发版软件包集合 (&lt; 4Gb) -
<a href="http://mirror.slitaz.org/iso/cooking/packages-cooking.iso">packages-cooking.iso</a>
[ <a href="http://mirror.slitaz.org/iso/cooking/packages-cooking.md5">md5</a> ]
</p>

<a name="floppy"></a>
<h2>启动软盘</h2>
<p>
这个软盘镜像可以启动在旧电脑中的Slitaz，有没有CD-ROM都可以。它可以启动在USB设备、SlitazCD/DVD、硬盘中的Slitaz，还可以通过网络启动。
</p>

<p class="get">
软盘镜像(1,44 Mb) -
<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">镜像</a>
[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	<div class="right_box">
	<h4>Slitaz网络</h4>
		<ul>
			<li><a href="http://doc.slitaz.org/">文档</a></li>
			<li><a href="http://forum.slitaz.org/">支持论坛</a>/<a href="http://slitaz-cn.5d6d.com/">中文论坛</a></li>
			<li><a href="http://scn.slitaz.org/">交流社区</a></li>
			<li><a href="http://labs.slitaz.org/">实验室</a></li>
			<li><a href="http://twitter.com/slitaz">Twitter</a></li>
			<li><a href="http://distrowatch.com/slitaz">DistroWatch</a></li>
		</ul>
	</div>
	<h4>SliTaz网站</h4>
	<ul>
		<li><a href="#header">页首</a></li>
		<li>Copyright &copy; <span class="year"></span>
			<a href="http://www.slitaz.org/">SliTaz</a></li>
		<li><a href=".../about/">关于我们</a></li>
		<li><a href="../../netmap.php">网站地图</a></li>
		<li>Page modified the <?php echo (date( "d M Y", getlastmod())); ?></li>
		<li><a href="http://validator.w3.org/check?uri=referer"><img
		src="../pics/website/xhtml10.png" alt="Valid XHTML 1.0"
		title="Code validé XHTML 1.0"
		style="width: 80px; height: 15px; vertical-align: middle;" /></a></li>
	</ul>
</div>

</body>
</html>