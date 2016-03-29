<!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset=utf-8"/>
	<title>SliTaz (cn) - Flavors</title>
	<meta name="description" content="SliTaz GNU/Linux 关于信息"/>
	<meta name="keywords" lang="cn" content="slitaz artwork"/>
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
		<h4>获取衍生版本</h4>
		<p>
			SliTaz衍生版本是由SliTaz衍生出的版本。这些版本包含着与SliTaz LiveCD不同的软件包，
			一些/社区可以利用衍生版本进行特定的工作。这些衍生版本可能是社区创建的，也可能是个人创建的。
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>使用ISO镜像</h2>
<p>
为了方便，SliTaz工作组会向您推荐一些衍生版本，它们都基于Cooking版本，
不过不一定总是和当前版本同步。<em>loram</em>版本内存需求量较小，
安装到硬盘后只需128M内存就可以运行。
<em>loram-cdrom</em>只需24M内存和一点点交换空间就可以启动，不过启动后不能弹出CD。
</p>
<p>
<a href="http://mirror.slitaz.org/iso/4.0/flavors/">下载来试试</a>
</p>

<h2>获取并且创建衍生版本</h2>
<p>
<em>flavor</em>是一个创建衍生版本需要的(.flavor)文件，
利用图形界面工具Tazlitobox我们可以轻点鼠标就创建一个衍生版本。
Tazlito <a href="http://doc.slitaz.org/en:handbook:genlivecd">手册</a>和
<a href="http://doc.slitaz.org/en:handbook:genlivecd">文档</a>在创建衍生版本方面提供了详细的介绍。
在命令行下你可以使用<code>tazlito list-flavors</code>命令得到可用衍生版本列表。
</p>

<h3>创建并分享你的衍生版本</h3>
<p>
stable和cooking版本在源里提供衍生版本的core，它可以成为创建衍生版本的基础。用户手册中的文档提供了<a href="http://doc.slitaz.org/en:handbook:genlivecd">创建你的衍生版本</a>所需的注释。
</p>
<p>
如果你已经创建了你的衍生版本，你可以把它发送到<a href="../mailing-list.php">邮件列表</a>，以便我们放入源里并测试。
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
