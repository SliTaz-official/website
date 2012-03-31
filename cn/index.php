<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux 中文网站</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="cn" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM" />
	<meta name="author" content="Chen Yufei"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.cn.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>主页</h4>
		<p>
			Slitaz是一个免费的操作系统，它能在完全地内存中运行，也可以从CD－ROM、U盘等可移动介质中启动。Slitaz以LiveCD的形式发布，并且不超过30MB，快速、稳定而易用。Slitaz还拥有小巧、直观的桌面，以及易用的设置工具。
			<a href="about/">更多信息...</a> 
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">
	
<div class="box">
	<img src="/images/update.png" style="float: left; margin-right: 10px; " />
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
	<img src="/images/news.png" alt="[ ]" />	
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
	
</ul>

<!-- End of news -->
</div>

<h2>Project Activity</h2>
<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="/images/users.png" alt="[ ]" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">More activity</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ ]" /></a>
		Forum activity
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">More support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">More commits</a>
	</p>
</div>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
