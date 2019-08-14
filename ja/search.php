<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - 検索</title>
	<meta name="description" content="SliTaz GNU/Linux カスタマイズ検索エンジン">
	<meta name="keywords" lang="ja" content="システム, フリー, オープンソース">
	<meta name="author" content="BALLOON a.k.a. Fu-sen. (Keiichi SHIGA)">
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
	
<h2>パッケージの検索</h2>

<p>
	<a href="http://pkgs.slitaz.org/">パッケージ</a>、ファイル、ビルドログ、Receipt
    などを検索します。すべてのパッケージは、パッケージマネージャ Tazpkg 経由の GUI
    または次のコマンドを使用してインストール可能です。
	<code>tazpkg get-install パッケージ名</code>
</p>

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="ja" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Search" />
			</p>
		</div>
		Search for:
		<select name="object">
			<option value="Package">パッケージ</option>
			<option value="Desc">説明</option>
			<option value="Tags">タグ</option>
			<option value="Arch">Arch</option>
			<option value="Bugs">バグ</option>
			<option value="Depends">依存</option>
			<option value="BuildDepends">ビルド依存</option>
			<option value="File">ファイル</option>
			<option value="File_list">ファイル一覧</option>
			<option value="FileOverlap">共通ファイル</option>
			<option value="Category">カテゴリ</option>
			<option value="Maintainer">メンテナー</option>
			<option value="License">ライセンス</option>
		</select>
		in
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
			<option value="backports">backports</option>
			<option value="3.0">3.0</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
			<option value="tiny">tiny</option>
			<option value="undigest">undigest</option>
		</select>
	</form>
</div>

<?php if (false) { ?>
<h2>Google 検索</h2>

<p>
	Google 検索では、ウェブサイトSliTaz GNU/Linux 全体、<a href="http://doc.slitaz.org/">ドキュメント</a> Wiki、<a href="mailing-list.php">メーリングリスト</a> のアーカイブ、<a href="http://forum.slitaz.org/">フォーラム</a> も検索することができます。
	この検索エンジンは、Google Co-op カスタム検索エンジンによって SliTaz 用に作成されました。
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
<?php } if (true) { ?>
<h2>DuckDuckGo 検索</h2>

<p>
	DuckDuckGo 検索では、ウェブサイトSliTaz GNU/Linux 全体、<a href="http://doc.slitaz.org/">ドキュメント</a> Wiki、<a href="mailing-list.php">メーリングリスト</a> のアーカイブ、<a href="http://forum.slitaz.org/">フォーラム</a> も検索することができます。
	この検索エンジンは、DuckDuckGo Co-op カスタム検索エンジンによって SliTaz 用に作成されました。
</p>

<div class="searchbox">
	<iframe src="https://duckduckgo.com/search.html?t=slitaz&kl=jp-jp&duck=yes&site=www.slitaz.org,doc.slitaz.org,forum.slitaz.org,https://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/&prefill=Search DuckDuckGo"
	 style="overflow:hidden;margin:0;padding:0;width:603px;height:60px;" frameborder="0">
	</iframe>
</div>
<?php } ?>

<div id="cse"></div>
 
<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
