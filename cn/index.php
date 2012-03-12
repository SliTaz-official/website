<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
<head>
	<title>SliTaz GNU/Linux 中文网站</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="cn" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
	<meta name="author" content="Chen Yufei"/>
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../slitaz.css" />
	<link rel="alternate" type="application//rss.xml" title="SliTaz Website feed" href="/rss.xml" />
	<link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
	<link rel="alternate" type="application//rss.xml" title="SliTaz SCN feed" href="http://scn.slitaz.org//rss.xml" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../images/network.png" alt="network.png" /></a>
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
		<h4>导航</h4>
		<div class="right_box">
			<ul>
				<li><a href="../en/mailing-list.html">邮件列表 (en)</a></li>
				<li><a href="../en/devel/">开发 (en)</a></li>
				<li><a href="packages/">软件包</a></li>
				<li><a href="artwork/">美工</a></li>
				<li><a href="search.html">搜索</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">头条</a></li>
				<li><a href="about/">关于</a></li>
				<li><a href="get/">下载</a></li>
				<li><a href="../en/asso/">捐赠 (en)</a></li>
				<li><a href="doc/">文档</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>主页</h4>
		<p>
			Slitaz是一个免费的操作系统，它能在完全地内存中运行，也可以从CD－ROM、U盘等可移动介质中启动。Slitaz以LiveCD的形式发布，并且不超过30MB，快速、稳定而易用。Slitaz还拥有小巧、直观的桌面，以及易用的设置工具。
			<a href="about/">更多信息...</a> 
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Español</a>
	<a href="../fr/">Français</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Português</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">
	
<div class="box">
	<img src="../images/update.png" style="float: left; margin-right: 10px; " />
	<p>
		SliTaz Chinese website needs a maintainer and contributors. You
		can contact us on the
		<a href="http://scn.slitaz.org/groups/i18n/">i18n group</a>.
	</p>
</div>

<!--
    SliTaz news starting.
-->

<h2>头条</h2>
<p>
	Slitaz网站提供Slitaz计划的主要新闻和<a href="http://labs.slitaz.org/">Slitaz实验室</a>里各种子计划的新闻. 它们都通过 <a href="/rss.xml"> XML feed</a>的形式提供。我们还提供一份简单的每月时讯。网站<a href="../">首页</a>将给出消息、修改、软件包、Tweets的最新情况。
</p>

<div class="box">
	<img src="../images/news.png" alt=".png" />	
	<a href="http://labs.slitaz.org/news">实验室新闻</a>
	(<a href="http://labs.slitaz.org/news?format=atom">Feed</a>) | 
	<a href="http://doc.slitaz.org/en:newsletter:start">每月时讯</a>
</div>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	
	<li><strong>2010年11月4日 － 新的Cooking版本——20101104</strong>
	<p>	新的Cooking版本光盘镜像已经发布。新版本拥有超过2600个安装包的仓库，
	采用Linux Kernel 2.6.34 内核，用新的工具链glibc 2.11.2 ＆ gcc 4.5.1重新编译所有的软件包，
	将Xorg 完全升级到 1.9.2版本。LiveCD包含Midori浏览器，Deadbeef音频播放器，和更多的应用程序。
	Tazpkg 和 Tazctrlbox 支持用gettext提供翻译文本。
	我在之前的六个月里我们做了很多工作，我们增加了更多的的多国语言支持，修订了很多bug，做了更多更新和改进。
	你可以从任意官方仓库镜像<a href="get/#cooking">下载</a>这个新的Cooking版本。
	欢迎到邮件列表或论坛提供您的反馈。</p>
	</li>
	
	<li><strong>2010年5月8日 － 文档之夏</strong>
	<p>5月10日到6月10日，Slitaz开发小组将组织“文档之夏”活动。
			这个活动将把所有的Slitaz文档集中起来并重新审查，同时也将更新这些文档。
			详情请见：<a href="http://doc.slitaz.org/">doc.slitaz.org</a>。
			我们希望用户能通过增加或更新文档来为Slitaz做贡献。</p>
	</li>
	
	<li><strong>2010年3月28日 新的SliTaz 3.0</strong>
	<p>SliTaz GNU/Linux 3.0操作系统即将发布。Slitaz 3.0保留了简单、小巧
	快速、强大、容易定制的特性，还提供了功能强大的桌面支持，
	默认采用Xorg 7.4, Openbox, LXDE组件和自制工具。使你更容易
	听音乐、管理照片，或者使用Midori进行网上冲浪。默认的核心系统镜像大小控制在35 MB，
	而且LiveCD flavors启动只需要8 Mb。
	新版本采用GCC 4.4.1编译开发，使用Linux kernel 2.6.30.6内核。要了解更多信息，
	你可以阅读<a href="doc/releases/3.0/relnotes.cn.html">3.0发行笔记</a>或从官方镜像<a href="get/#stable>">下载</a>3.0
	LiveCD镜像.</p>
	</li>
	
<!--	<li><strong>14 March 2010 - RC series and Solutionslinux 2010 (Paris)</strong>
	<p>Since we're getting closer to the next stable release, we have updated the
	core ISO image to start with a RC series. The Major change is the switch to
	Midori as the default web browser, this will improve user experience and let
	us keep SliTaz at 30Mb. Midori is a modern browser powered by the webkit engine -
	it is fast, simple to use and well integrated with the SliTaz desktop.</p>
	<p>This updated ISO comes with a bunch of bug and dependency fixes, we have 
	also improved the home made tools and scripts. This new ISO image can be 
	downloaded from the SliTaz mirrors (35 MB): 
	<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">slitaz-cooking.iso</a></p>
	<p>By the way, the SliTaz project will be at 
	<a href="http://www.solutionslinux.fr/">Solutionslinux</a> 2010 next 
	week in Paris. You will be able to learn about the project and make
	contact with members of the association and the development team.</p>
	</li>
	
	<li><strong>21 February 2010 - New Cooking 20100221</strong>
	<p>SliTaz contributors are proud to announce a new Cooking version of the
	LiveCD. This is the last Cooking RC before 3.0 is released. The core ISO image
	is at 27 MB and comes with many changes and improvments. This Cooking uses
	Xorg as X server instead of Xvesa and provides full UTF-8 support. With
	a clean desktop environment, it also provides many applications for daily
	usage and common tasks. Netsurf replaces firefox as the default web browser.
	Nevertheless, a Firefox flavor at 29 Mb with sound and wifi support can 
	also be downloaded from the official mirrors.</p>
	<p>On the updates and improvements side: tazpkg is faster, boot-scripts are 
	updated and home-made toolboxes are improved. Wifibox uses awk for better
	network scanning. WPA support in the boot scripts have been improved. Boot
	time is logged for performance measuring. The SliTaz installer will now 
	try to use files from an USB device if no cdrom is found, allow you to 
	create a default user account, set a root password and use a separate /home
	partition. And finally, LiveCD customization is now much easier: users
	just have to boot, modify and use writefs via the Tazlito graphical interface
	or from the command line to generate their own customized CD.</p>
	<p>As usual, you can <a href="get/#cooking">download</a> these new
	flavors from one of the official mirrors of the project and provide feedback
	on the SliTaz forum.</p>
	</li>
	<li><strong>News archives:</strong> 
	<a href="news/2007.html">2007</a> |
	<a href="news/2008.html">2008</a> |
	<a href="news/2009.html">2009</a></li>-->
	<!--
		<li><strong>2009年11月4日 新的Cooking版本——20091104</strong><br />
新的Slitaz Cooking已经发布，这个系统以拥有2100个软件包的软件仓库为基础，使用Glibc 2.10.1和GCC 4.4.1重建，包含Linux 2.6.30.6内核，有着更好的硬件支持和内置模块。启动速度也大大增加。LiveCD中Firefox等主要软件升级到最新稳定版，图形界面的功能也大大增强。Tazpkg软件包管理器增加不少新特性，可以将deb/rpm/arch/slackware/ipk等软件包转化为Siltaz格式。ISO镜像拥有新的Openbox、GTK、图标主题以及一个更漂亮的桌面，ePDFview也被一个在线PDF阅读器替换。由于内核增大以及软件包依赖关系，这个ISO镜像大于30MB（31.5MB）。
Slitaz也拥有了新的<a href="http://forum.slitaz.org/">论坛</a>和<a href="http://scn.slitaz.org/">通讯平台</a>，你可以在那里与网友分享、交流。新的Cooking版本可从官方网站<a href="get/#cooking">下载</a>。

	</li>
	<li><strong>2009年5月19日 SliTaz 出席日内瓦LinuxDays 2009</strong><br />
LinuxDays在日内瓦进行期间，Slitaz协会会在Association Village出现，并且会在星期三发布演讲。这个演讲主要讲述"SliTaz Business Server" 在邮件服务器、嵌入式设备等方面的应用。
在这三天里，工作组成员将会详细策划Slitaz展览。我们还会对Slitaz进行宣传，包括创建可启动U盘（LiveUSB）和CD。LinuxDays LiveCD会包括不少设计用于移动的软件。你也可以到现场给我们提问，和我们聊天。你可以在<a href="http://labs.slitaz.org/wiki/events/2009-linuxdays">SliTaz实验室</a>和<a href="2009.linuxdays.ch"> 2009.linuxdays.ch</a>找到相关资料。
	</li>
	<li><strong>2009年4月16日 SliTaz GNU/linux 2.0 发布</strong><br />
经过一年的漫长等待，Slitaz工作组发布了新的稳定版——SliTaz GNU/linux 2.0。在这一年间，我们一直致力于提供一个轻快小巧、稳定的操作系统。ISO镜像文件大小不足30M额的Slitaz提供了一个完整的桌面环境，还可以通过软件包管理器安装超过1400个软件包。这只要轻点鼠标就可以完成。这个新版本提供分区自动挂载（兼容NTFS）、无线网络支持、gPXE和boot.slitaz.org的网络启动、USB和PCI设备的自动选择、软件包管理器和控制中心，还提供各种管理系统的图形界面工具。你可以更轻松地通过小工具轻松创建可启动USB设备和LiveCD。LiveCD包含Firefox 3.0.8、gFTP、LostIRC、ePDFView、mtPaint、 Transmission、Osmo和Alsaplayer。网站的文档已经升级，你还可以阅读ISO中的发行笔记来查看这个版本更详细的更新。SliTaz GNU/linux 2.0现在已经可以在官方源下载。
	</li>
	<li><strong>2009年3月27日 实验室和新的软件源</strong><br />
我们会不断提升发行版和服务的质量。近期<a href="http://labs.slitaz.org/">SliTaz Labs</a>顺利运行，这个平台可以让Slitaz贡献者更有效地合作，可以报告BUG、提出新要求。SliTaz Labs给每个<a href="http://labs.slitaz.org/projects">项目</a>提供了一个wiki、一个讨论区、一个新闻模块等内容。SliTaz Labs还提供计划内容总览、更新报告等功能。你可以注册SliTaz Labs来参与计划或者发表评论。我们还增添了2个新的软件源：瑞士的SWITCHmirror和中国的LupaWorld。感谢对我们的支持。
	</li>
	<li><strong>2009年3月20日 SliTaz出席巴黎Solutionslinux 2009</strong><br />
Slitaz将会出席在巴黎的2009 Solutionslinux会展，我们将在观众席上派出3个成员。此外，其他Slitaz的贡献者也将会在会场的各个角落出现。现在你就有了一个测试各种电脑的好时机，例如你可以做“EeePC是否能使用Slitaz”的试验。你还可以现场创建一个Slitaz可启动U盘（自带），如果没带U盘，也可以购买U盘或LiveCD。你还可以了解关于Slitaz的信息，或者和Slitaz工作组的成员交流讨论。网站：
	<a href="http://www.solutionslinux.fr/">www.solutionslinux.fr</a>,
	<a href="http://www.solutionslinux.fr/associations.php?pg=2_7">Village associations</a>,
	<a href="http://www.solutionslinux.fr/exposant_fiche.php?id=763&amp;pg=2_4">SliTaz Stand</a>.
	</li>
	<li><strong>2009年2月28日 - 新Cooking版本 20090228</strong><br />
Slitaz工作组发布了一个新的Cooking版本，这个版本修复了很多BUG，升级了很多软件，做了许许多多的改进，还增添了许多新特性。例如PCI/USB设备可以由Tazhw自动管理，设备的控件可以通过图形界面，轻点鼠标完成，Tazndis可以让你通过简单的图形界面管理Windows驱动。图形界面的软件包管理器变得更加简单易用，LiveUSB设备也可以通过一个窗口轻松创建。 Netbox可以显示所有的网络连接，新增的WIfibox可以连接上无线网络。你还可以手动或者通过Tazhw来管理“喜爱网络”、设置网卡。在图形界面方面，也新增了一个可以启用/禁用自启动程序的GUI，你可以在Openbox的菜单中打开它。此外，Desktopbox也新增了一个简易的通知程序。我们在为下一个稳定版做准备。你可以到 <a href="get/index.html#cooking">下载</a>页面或任意一个源下载这个版本的ISO镜像。
	</li>
	-->
</ul>

<!-- End of news -->
</div>

<!-- End of content  -->
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
