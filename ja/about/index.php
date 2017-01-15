<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - プロジェクトについて</title>
	<meta name="description" content="SliTaz GNU/Linux プロジェクト情報の概要">
	<meta name="keywords" lang="en" content="slitaz について, livecd, ライブcd">
	<meta name="author" content="BALLOON a.k.a. Fu-sen. (Keiichi SHIGA)">
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.html");
include("../../lib/html/nav.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">
	
<h2>SliTaz について</h2>
<p>
	小さく、速く、安定して、使いやすい！
</p>
<ul>
	<li><a href="#intro">はじめに</a></li>
	<li><a href="#spec">SliTaz の仕様</a></li>
	<li><a href="#overview">概要</a></li>
	<li><a href="#website">Web サイト &amp; i18n</a></li>
	<li><a href="#reviews">レビュー</a></li>
	<li><a href="../asso/">Association</a></li>
</ul>

<h2 id="intro">プロジェクトについて はじめに</h2>

<p>
SliTaz GNU/Linux は、CD-ROM や USB キーなどのリムーバブルメディアから完全にメモリ上で動作する無料のオペレーティングシステムです。
軽くて、高速で、ハードドライブに完全にインストール可能です。
SliTaz は LiveCD 形式で配布され、簡単に CDROM に書き込んで起動することができます。
システムが動作しているときに、LiveCD を取り出して CD ドライブを使用して他の作業を行うことができます。 Live システムは、完全な機能を備えた作業用のグラフィカルディストリビューションを提供し、Persistent メディアにデータや個人設定を保存することができます。
システムは Tazpkg パッケージマネージャーで拡張することができ、Cooking (パッケージの生成) や安定版用のセキュリティアップデートが提供されます。
</p>
<p>
SliTaz プロジェクトは、<a href="../mailing-list.php">メーリングリスト</a>（i18nリスト）と
<a href="http://forum.slitaz.org/">英語フォーラム</a> を通して、ユーザーに無料の技術サポートを提供します。
またメーリングリストやメールで直接情報、提案、コメントをご連絡いただくこともできます。メール: &lt;devel at slitaz.org&gt;
</p>

<h2 id="spec">SliTaz の仕様</h2>

<p>
現在 ISO イメージには、base、just-x、gtk-only、フルデスクトップ の 4 フレーバーがあります。
SliTaz は Web から起動して、ニーズに合わせてカスタマイズし、古いコンピュータから強力なサーバー、 Raspberry Pi などの小型 ARM デバイスまで幅広いデバイスにインストールできます。
</p>
<p>
SliTaz は Linux 初心者のために使いやすい: Freedesktop の標準に準拠した、完全機能を備えた最新のデスクトップを提供します。ホームメイドツールを使用することで、システム全体をグラフィカルに構成することができます。
すべてのシステムは、Web ベースの設定パネルでリモートコントロールすることもできます。
</p>

<p>
SliTaz はベースシステムと、カスタマイズしたディストリビューションを構築することができる X システムを提供しています。カスタムシステムは CD-ROM、USB メモリ、SD カード、ハードディスクにインストールしたり、Web から起動したりして使用できます。
</p>
<p>
UNIX の哲学に従う: すなわち、すべてがテキストファイルです。
パッケージマネージャーとすべてのシステム設定は、簡単なカスタマイズと人間が読める構成のためのシンプルなテキストファイルに保存されています。
シェルスクリプトは、簡単なカスタマイズと開発のために、ほとんどのツールで使用されています。
</p>
<p>
4 つのスクリプトを使用して、システム全体を構成し、起動オプションを処理し、ネットワークを管理し、ローカルコマンドを実行する根本的に簡単な方法を提供します。
SliTazは最小限のリソースを読み込み、ユーザーが他すべてのものを制御できるようにします。
</p>
<p>
LiveCD、USB メモリ、Frugal ハードディスクインストールから RAM メモリで完全に実行できるようにします。
このモードでは、システムが超高速かつ応答性の高い状態で、マウントされたパーティションにドキュメントを保存できます。
</p>
<p>
すべてのサイト間で簡単なナビゲーションのために深い SliTaz インテグレーションによる構造化ネットワークを提供します。
バグトラッカーや cookutils などの Mercurial とカスタムツールを使った構造化された開発を行っています。
</p>

<h2 id="overview">概要</h2>

<ul>
	<li>root ファイルシステムは約 100 MB、ISO イメージは 40 MB 未満</li>
	<li>CGI をサポートしている Busybox によって強化された Web・FTP サーバをすぐに使用可能</li>
	<li>Midori、Firefox、Lynx のテキストモードによる Web 参照</li>
	<li>Alsa ミキサー、オーディオプレーヤー、CD リッパー・エンコーダーによる音声対応</li>
	<li>チャット、メール、FTP クライアント</li>
	<li>Dropbear を搭載した SSH クライアントとサーバー</li>
	<li>SQLite によるデータベースエンジン</li>
	<li>LiveUSB デバイスの生成</li>
	<li>CD または DVD イメージを作成、編集、書き込むためのツール</li>
	<li>Xorg・Xvesa (X サーバ) 上で動作する Openbox を備えたエレガントなデスクトップ</li>
	<li>手作りのグラフィックボックスからコマンドラインユーティリティへ</li>
	<li>4967パッケージをミラーから簡単にインストール</li>
	<li>活発でフレンドリーなコミュニティ</li>
</ul>

<h2 id="website">Web サイト &amp; i18n</h2>

<p>
SliTaz Web サイトはいくつかの言語で利用でき、<a href="/i18n.php">国際化プロジェクト</a>の一部です。 
このWebサイトでは、SliTaz LiveCD を<a href="../get/">ダウンロード</a>してプロジェクトの開発に役立てることができます。
SliTaz LiveCD を使用してシステムを構成する方法については、<a href="../doc/">ドキュメント</a>領域を参照して下さい。
</p>

<h2 id="reviews">レビュー</h2>

<p>
SliTaz GNU/Linux はいくつかの Web サイトでレビューされています。
サポートありがとうございます。
</p>

<h3>4.0 - 2012年4月</h3>

<ul>
	<li><a href="http://badalhocando.blogspot.co.uk/2012/04/slitaz-40-review-small-but-fierce.html"
		>Blogspot</a> - By Klaus Zimmermann.</li>
	<li><a href="http://linuxblog.darkduck.com/2012/04/slitaz-40-light-and-stable.html"
		>DarkDuck</a> - By Dmitry.</li>
	<li><a href="http://frederic.bezies.free.fr/blog/?p=8760"
		>Weblog</a> (fr) - By Frederic Bezies.</li>
</ul>

<h3>3.0 - 2010年3月 &amp; Cooking - 2010年1月</h3>

<ul>
	<li><a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/"
		>Wordpress</a> - By K.Mandla.</li>
	<li><a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30"
		>Linux Journal</a> - By Susan Linton.</li>
	<li><a href="http://distrowatch.com/weekly.php?issue=20100111#feature"
		>Distrowatch</a> - By Jesse Smith (Cooking just before 3.0).</li>
</ul>

<h3>2.0 - 2009年4月</h3>

<ul>
	<li><a href="http://www.gdhpress.com.br/blog/slitaz"
		>Gdhpress</a> (pt) - By Carlos Morimoto.</li>
	<li><a href="http://www.frlinux.net/?section=distributions&amp;article=237"
		>FRLinux</a> (fr) - By Steph.</li>
	<li><a href="http://www.junauza.com/2009/07/slitaz-20-simple-speedy-and-secure.html"
		>Tech Source</a> - By Jun Auza.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz-2.html"
		>Dedoimedo</a> - By Dedoimedo.</li>
	<li><a href="http://linuxologist.com/reviews/slitaz-linux-zero-to-distro-in-30-mb/"
		>Linuxologist</a> - By Brie Gordon.</li>
</ul>

<h3>1.0 - 2008年3月</h3>

<ul>
	<li><a href="http://distrowatch.com/weekly.php?issue=20080331"
		>Distrowatch</a> - By Ladislav Bodnar.</li>
	<li><a href="http://www.junauza.com/2008/03/slitaz-gnulinux-smallest-desktop-distro.html"
		>Tech Source</a> - By Jun Auza.</li>
	<li><a href="http://beranger.org/index.php?page=diary&amp;2008/03/31/07/04/42-a-quick-look-over-slitaz-1-0"
		>Planet Béranger</a> - By Béranger.</li>
	<li><a href="http://kmandla.wordpress.com/2008/04/02/slitaz-10-on-450mhz-k6-2-256mb/"
		>Wordpress</a> - By K.Mandla.</li>
	<li><a href="http://reddevil62-techhead.blogspot.com/2008/04/damn-minuscule-linux-first-look-at.html"
		>Red Devil's Tech Blog</a> - By Steve Lawson.</li>
	<li><a href="http://www.linuxinfusion.com/slitaz-a-light-weight-gnulinux-distribution"
	    >Linux Infusion</a> - By Moparx.</li>	
	<li><a href="http://www.insidesocal.com/click/2008/06/a-second-look-at-slitaz-10.html"
		>Dailynews Blog</a> - By Steven Rosenberg.</li>	
	<li><a href="http://www.linux.com/feature/140573">Linux.com</a> - By Dennis L. Ericson.</li>
	<li><a href="http://www.freesoftwaremagazine.com/columns/slitaz_live_cd_small_beautifully_marked"
		>Free Software Magazine</a> - By Gary Richmond.</li>
	<li><a href="http://www.linux-magazine.com/issues/2008/97/slitaz"
		>Linux Pro Magazine</a> - By Dimitri Popov.</li>
	<li><a href="http://www.dedoimedo.com/computers/slitaz.html"
		>Dedoimedo</a> - By Dedoimedo.</li>
</ul>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
