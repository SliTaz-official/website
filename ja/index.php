<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>SliTaz GNU/Linux (ja)</title>
	<meta name="description" content="SliTaz GNU/Linux 日本語ウェブサイト">
	<meta name="keywords" lang="ja" content="シシテム, フリー, オープンソース">
	<meta name="author" content="BALLOON a.k.a. Fu-sen. (Keiichi SHIGA)">
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
include("../lib/html/nav.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>SliTaz へようこそ</h2>

<p>
    SliTaz は Linux カーネルと GNU ソフトウェアを使用する安全で高性能なオペレーティングシステムです。
</p>

<!--<div class="box-up">
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Visit this page now."><img src="../images/gofundme.png"></a>
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		Check out our new SliTaz 2014 fundraising!</a>
</div>-->

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>注目のスポンサー</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/en/sponsor/">スポンサーになる</a></p>
</div>

<!--
    SliTaz news starting.
-->

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>ニュースリリース</h2>

<ul>
	<li><strong><a href="http://mirror.slitaz.org/iso/rolling/">SliTaz 5.0 Rolling 公開</a></strong> (毎週)
		<span>- <?php
		$rol_date_file = '../cache/rolling-date.txt';
		if (file_exists("$rol_date_file")) {
			$rol_date = file_get_contents("../cache/rolling-date.txt");
			print $rol_date;
		} ?></span></li>
	<li><strong><a href="news/#d20150520">SliTaz 5.0 RC-3 公開</a></strong>
		<span>- 2015年5月20日 May 2015</span></li>
	<li><strong><a href="news/#d20140519">SliTaz 5.0 RC-2 公開</a></strong>
		<span>- 2014年5月19日</span></li>
	<li><strong><a href="news/#d20140502">SliTaz 5.0 RC-1 公開</a></strong>
		<span>- 2014年5月2日</span></li>
	<li><strong><a href="news/#d20140329">SliTaz Raspberry Pi 公開</a></strong>
		<span>- 2014年3月29日</span></li>
	<li><strong><a href="news/">過去のニュースリリース</a></strong>
		<span>- 2007〜2013</span></li>
</ul>

<!-- End of news -->
</div>

<h2>クイックダウンロード</h2>

<div class="box-warning"><p>SliTazを使用する前にこの記事をお読みください： <a href="http://forum.slitaz.org/topic/-important-info-about-meltdown-and-spectre-">Important info about Meltdown and Spectre</a></p></div>

<div class="dldiv">
	<p><!-- ?php echo "<a class='dlbutton nav2' href='$stable_iso'>SliTaz $stable_ver</a>"; ? -->
	<!-- a class='dlbutton nav2' href='$cooking_iso'>SliTaz $cooking</a>"; ? -->
	<a class='dlbutton navpi' href='http://arm.slitaz.org/rpi/'>SliTaz Raspberry Pi</a>
	<a class='dlbutton nav2' href='http://mirror.slitaz.org/iso/rolling/slitaz-rolling.iso'>SliTaz Rolling 32 ビット</a>
	<a class='dlbutton nav1' href='http://mirror.slitaz.org/iso/rolling/slitaz-rolling-core64.iso'>SliTaz Rolling 64 ビット</a></p>
</div>

<h2>Project Activity</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="[ ]" /></a>
		フォーラムの状況
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">フォーラム</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="/images/development.png" alt="[ ]" /></a>
		wok の最新コミット
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/?sort=lastchange">wok - コミット</a>
	</p>
</div>

<!-- SCN blog posts  
<h2>ブログ投稿</h2>

<div class="news">
	<?php //get_feed_blog("blog.xml"); ?>
</div>-->

<!-- Twitter  -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz"  
	data-widget-id="420830244551938048">Twiitter @slitaz</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<h2>SliTaz のサポート</h2>

<p>
	SliTaz をさらに人気のあるものにしたり、寄付したりして下さい。
    PayPal または Flattr マイクロペイメントを使用して、金銭的な支援を行う事ができます。
    SliTaz を普及させるために、プロジェクトについてブログ、Tweet、共有、話題を出す事ができます。
    プロジェクトに参加して、SliTaz <a href="http://scn.slitaz.org/">コミュニティネットワーク</a> に接続して共有したり、参加したりすることもできます。
</p>
<p>
	また、毎月の寄付によって、またはハードウェア・サーバーのリソースを提供して、公式スポンサーになることもできます。
	<a href="sponsor/">詳しい情報</a>
</p>

<?php include("../lib/html/donate.html"); ?>

<h2>SliTaz を広げる</h2>

<p>
	このプロジェクトを支援する一つの方法は、SliTaz をさらに普及させることです。
	ブログ、このページを tweet し、共有して、プロジェクトについて話して下さい。
    SliTaz はまた社会的です。参加して、アートワークを共有したり、<a href="http://scn.slitaz.org/">SliTaz Community Network</a> 上でブログを投稿したり、公式 SliTaz Facebpok ページで "いいね！" を付けたりする事ができます！
</p>

<?php include("../lib/html/social.html"); ?>

<h2>国際化</h2>

<p>
    SliTaz の Web サイトはいくつかの言語で利用でき、<a href="/i18n.php">国際化</a> チーム（i18n）によって管理されています。
	あなたの言語にウェブサイトが翻訳されていることを確認したいのであれば、助けがしばしば必要です。
</p>

<h2>アートワーク</h2>

<p>
	SliTaz のロゴ、スクリーンショット、壁紙を入手、また SliTaz Artwork チームに参加して、ISO イメージを配布するデフォルトアートワークを手助けすることができます。 詳細は 
	<a href="artwork/">アートワークセクション</a> を参照して下さい。
</p>

<!-- End of content  -->
</section>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
