<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>SliTaz - メーリングリスト</title>
	<meta name="description" content="slitaz ユーザー 管理者 メーリングリスト">
	<meta name="keywords" content="slitaz メーリングリスト メール" lang="ja">
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

<h2>SliTaz メーリングリスト</h2>

<p>
	ユーザーのサポート、一般的な情報、SliTaz 寄稿者のディスカッションおよび発表（サポートと開発のサポート）
    これはメーリングリストの一部です - 今すぐ参加して支援得るか、プロジェクトに参加して下さい。
</p>

<ul>
	<li><a href="#about">メーリングリストについて</a> - サポート・開発</li>
	<li><a href="#usage">メーリングリストの使用</a> - 登録・解除・操作</li>
	<li><a href="#archives">過去のメーリングリスト投稿</a> - 過去メッセージの参照・検索</li>
</ul>

<h3 id="about">メーリングリストについて/h3>

<p>
ディスカッション/ディストリビューション（メーリングリスト）は、SliTaz コミュニティにおけるコミュニケーションの主要形態です。
メーリングリストは誰にでも公開されています。いつでも購読・解除できます。
これは非常に効果的なコラボレーション手段であり、SliTazのユーザーに無料の技術サポートを提供するために使用されます。
開発者、上級ユーザー、校正者などは、同じリストを使用してプロジェクトの開発を管理します。
サポートと開発に同じリストを使用することで、より多くのユーザーにアプローチすることができ、より迅速で正確な対応が可能になります。 しかし、メーリングリストのメンバーはすべてボランティアであり、自由時間に基づいてできる限りベストを尽くしています。
礼儀は厳しいもので、ユーモアはほとんど誰にも害を与えません。
</p>
<p>
<em>メーリングリスト</em>は、メッセージの送信とメールの受信で使用されます。
これは、登録されたすべてのメンバーがメーリングリストに投稿し、他のメンバーが投稿したすべてのメッセージを受信できることを意味します。
メッセージは、優れた <a href="http://www.vhffs.org/">VHFFS</a> によって強化された <a href="http://www.tuxfamily.org/">TuxFamily</a> のリストエンジンによって送信されます。
</p>

<h4>礼儀</h4>

<p>
メーリングリストは、しばしば熱心で敏感な人々によって使用されます。
自分自身をひどく扱っていると感じたとしても、他人を敬意をもって扱うために余分な努力をしてください。
否定的または批判的なことがある場合は投稿しないでください。
不適切と思われる人がいる場合は、SliTaz 開発者に連絡してください。
</p>

<h3 id="usage">メーリングリストの使用</h3>

<p>
メーリングリストに投稿できるようにするには、最初に登録する必要があります。確認メッセージが表示されます。
このメールにはメーリングリスト管理者に返す必要のある確認番号が含まれています。（これにより spam を防止します）
メールと確認メッセージが受信されると、メーリングリストに投稿し、投稿されたすべてのメッセージを受信することができます。
好みのメールソフトウェアでメッセージを特定のディレクトリにフィルタリングすることができます。
また、「返信」を使用してメッセージに返信すると、ディスカッションスレッドに正しく従うことができます。
</p>
<ul>
	<li>管理者アドレス :
		<a href="mailto:slitaz-request@lists.tuxfamily.org"
		>slitaz-request@lists.tuxfamily.org</a></li>
	<li>登録時の件名 (subject) : subscribe</li>
	<li>解除時の件名 (subejct) : unsubscribe</li>
	<li>ヘルプの件名 (subject) : help</li>
	<li>メーリングリスト投稿アドレス :
		<a href="mailto:slitaz@lists.tuxfamily.org">slitaz@lists.tuxfamily.org</a></li>
</ul>

<h4>投稿形式</h4>

<p>
メッセージは、テキストモードでメールクライアントを使用する人々が簡単に読むことができるように、行を 72〜80 文字に正当化し、HTML ではなく生のテキストとして送信する必要があります。
これらのメッセージのフォーマットは、Sylpheed のような大部分の優れたメールクライアントによって自動的に行われることができます。また、アーカイブをより直接的に読むこともできます。
不要な引用を削除し、大きなファイルを添付しないこともお勧めします。
</p>

<h3 id="archives">過去のメーリングリスト投稿</h3>

<p>
メーリングリストはパブリックフォーラムであり、すべてのメッセージはアーカイブされ、オンラインで検索可能です。
これにより登録していない人は依然としてメーリングリストに従うことができ、特定の科目に関する情報のための良いリソースでもあります。
このリストは毎晩アーカイブされ、TuxFamilyのリストエンジンを使用してアーカイブを簡単に参照できます。
メッセージは月・日付・ディスカッションスレッドで並べ替えされます。 (<em>スレッド</em>) :
<a href="http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/"
 >過去のメーリングリスト投稿</a>
</p>

<div>
<object type="text/html" width="100%" height="345" data="../lib/archives.php">
</object>
</div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
