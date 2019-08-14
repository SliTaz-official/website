<!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - 搜索</title>
	<meta name="description" content="SliTaz GNU/Linux 自定义搜索引擎"/>
	<meta name="keywords" lang="cn" content="about slitaz, gnu, linux, mini distro, livecd, 关于SliTaz, SliTaz是什么, 介绍"/>
	<meta name="author" content="Draplater"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>
<?php $engine="DuckDuckGo"; ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.cn.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>搜索</h4>
		<p>
			这个网页可以搜索SliTaz网站、邮件列表、论坛中的内容。
			这个网页由<?php echo $engine; ?>自定义搜索为SliTaz创建。
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<?php if ($engine == "Google") { ?>
<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	  google.load('search', '1', {language : 'cn', style : google.loader.themes.MINIMALIST});
	  google.setOnLoadCallback(function() {
	    var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
	    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	    var options = new google.search.DrawOptions();
	    options.setSearchFormRoot('cse-search-form');
	    customSearchControl.draw('cse', options);
	  }, true);
	</script>
</div>
<?php } if ($engine == "DuckDuckGo") { ?>
<div class="searchbox">
	<iframe src="https://duckduckgo.com/search.html?&kl=cn-zh&t=slitaz&duck=yes&site=www.slitaz.org,doc.slitaz.org,forum.slitaz.org,https://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/&prefill=Search DuckDuckGo"
	 style="overflow:hidden;margin:0;padding:0;width:603px;height:60px;" frameborder="0">
	</iframe>
</div>
<?php } ?>

<div id="cse" style="width:100%;"></div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
