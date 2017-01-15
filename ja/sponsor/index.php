<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - スポンサー</title>
	<meta name="description" content="SliTaz GNU/Linux スポンサー">
	<meta name="keywords" lang="ja" content="slitaz pro, slitaz スポンサー, サポート">
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
	
<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>注目のスポンサー</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2 style="margin-right: 220px;">SliTaz のスポンサー</h2>

<p>
	SliTazは非営利団体のプロジェクトであり、私たちはプロジェクトを金銭的にサポートし、新しいハードウェアを提供する新しい方法を常に探しています。
</p>

<p>
	まず、私たちの<a href="#cur">現在のスポンサー</a>とプロジェクトに寄付をしてくれた皆様、ご協力いただいた皆様に感謝します。
   このプロジェクトは創立から <?php echo date('Y')-2007 ?> 年とまだ若いですが、成長し、プロダクション環境で使用するのに安全なプロフェッショナルグレードのオペレーティングシステムとなっています。
</p>

<h3>開発者の金銭的支援</h3>

<p>
	プロジェクトで SliTaz を使用していて、主要な開発者がプロジェクトにフルタイムで取り組んでいることにより、流通がより専門的になることを確認したいのですか？
	もしそうなら、SliTaz に完全に100％働く開発者に支払う SliTaz Association としてスポンサーすることができます。
    私たちは実際に年間を通して開発者に十分なお金を払っていませんが、寄付金や金銭的支援の額によって、プロジェクトで年間3〜4ヶ月のプロフェッショナルな仕事ができます。
    時間の経過とともに、開発者にSliTazのフルタイムベースで作業させてもらいたいと考えています。
</p>

<p>少額の寄付でプロジェクトを支援する:</p>
<?php include("../../lib/html/donate.html"); ?>

<h3>ハードウェアスポンサー</h3>

<p>
	オープンソースプロジェクトとして、私たちは通常、自身のパーソナルコンピュータでSliTazを開発します。
	しかし、時には個人のシステムを変更し、新しいハードウェアが必要になることもあります。
    また、一部の特定マシンでは、そのマシンへのアクセス権がないため、そのマシンの配布をテストすることはできません。
	ハードウェアの製造元であり、SliTazがコンピュータ上ですぐに動作することを確認したい場合は、私たちがあなたに代わって作業できるように、私たちにマシンを送信することができます。
</p>
<p>
	SliTaz はクロスコンパイルのための準備が整っており、SliTaz を ARM プラットフォームに移植したいと考えています。
    このためには、クロスコンパイルされたバイナリをテストし、SliTaz を ARM アーキテクチャに適合させるために ARM ハードウェアが必要です。
</p>

<h3>ハードウェアリサイクル</h3>

<p>
	SliTazは古いコンピュータに新しいリースのリースを提供する素晴らしいディストリビューションであり、それをテストするために古いハードウェアが必要です。
    また、古いハードウェアの一部をリサイクルして SliTaz をプリインストールし、低価格で販売することもあります。
    これにより、人々は安くて強力なマシンを手に入れることができ、少しでもお金を稼ぎサービスを提供することができます。
</p>

<h2>連絡先と情報</h2>

<p>
	関心があり、金銭的またはハードウェア的なスポンサーシップの詳細については、SliTaz Associationにメール &lt;asso at slitaz.org&gt; または<a href="../asso/#postal">郵便</a>でお問い合わせください。
</p>
<p>
	SliTaz をスポンサーすることで、このページにあなたのロゴとウェブサイトのURLが表示されます。このページは、ウェブサイトの他のすべてのページにリンクしています。
    また、純粋なオープンソースプロジェクトへの参加を公に主張することができ、フリーソフトウェアと Linux ユーザーからより多くの関心を集めることができます。
</p>

<h2 id="cur">現在のスポンサー</h2>

<table>
	<tbody>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png" alt="Allied Data Sys"
				style="float: left; " /></a>
			</td>
			<td>
				Allied Data Sys - ADS はメインの SliTaz ミラースポンサーであり、高速接続の仮想マシンへのフルアクセスを提供します。
                これにより、私たちは何の制限もなく希望どおりにマシンを使用することができます。
                ADS のおかげで、サービスに関するご質問やご要望に迅速にお応えできます。
			</td>
		</tr>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="https://duckduckgo.com/?t=slitaz"><img
				src="/images/sponsor/ddg.png" alt="DuckDuckGo"
				style="float: left;" /></a>
			</td>
			<td>
				DuckDuckGo 検索エンジン - DDG は SliTaz とパートナーシップを締結し、SliTaz ユーザーが見た検索結果内の<em>スポンサーリンク</ em>によって得られた収益を分担します。 当社は売上の 50% を分担しているため、SliTaz の DDG を使用すると両方のプロジェクトに役立ちます。
                DuckDuckGo はより即座に答えを出し、迷惑メールや混乱を避け、たくさんの素晴らしさや本当のプライバシーを得られるの検索エンジンです。
			</td>
		</tr>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="https://www.security-audit.com"><img
				src="/images/sponsor/security-audit.png" 
				alt="Website penetration testing"
				style="float: left;" /></a>
			</td>
			<td>
				Security Audit Systems は世界中の企業に独立したウェブサイト侵入テストサービスを提供します。
                幅広いウェブサイトセキュリティテストサービスを提供するイギリスをリードするウェブサイトセキュリティプロバイダの1つです。
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
