<?php
//
// SliTaz Social applications for Facebook. Just a tiny tool to help 
// spread and follow SliTaz activity.
//
// SliTaz FB page: http://facebook.com/slitaz
// SliTaz SO URL : http://apps.facebook.com/slitaz-so/
//
// NOTE: Any ideas for this app are welcome. We could have a comment box
// to let users post to the official SliTaz Facebook wall.
//
function get_feed($feed_url) {
	$content = file_get_contents($feed_url);
	$x = new SimpleXmlElement($content);
	echo "<ul>";
	foreach($x->channel->item as $entry) {
		echo "
		<li>
		  <strong><a href='$entry->link' target='_TOP'
			title='$entry->title'>" . $entry->title . "</a></strong>
		</li>";
		}
	echo "</ul>";
}
?>
<html>
<head>
	<title>SliTaz SO Canvas</title>
	<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<style type="text/css">
		body { font: 13px sans-serif, vernada, arial; }
		h1 { color: #444; font-size: 150%; }
		h2 { color: #b64b22; font-size: 130%; }
		ul { color: #666; }
	</style>
</head>
<body>

<!-- Facebook settings -->
<div id="fb-root"></div>
<script>
	FB.init({ appId:'123696844365041', cookie:true, xfbml:true });
	FB.Canvas.setSize({ width: 700, height: 900 });
</script>


<h1>SliTaz SO</h1>

<p>Добро пожаловать в социальное приложение SliTaz для Facebook.</p>


<h2>SliTaz на Facebook</h2>

<p>Чтобы позволить вам показать свою признательность проекту SliTaz, у нас есть официальная <a href="http://facebook.com/slitaz" target="_TOP">страница Facebook</a>, где вы можете встретиться с нами и поделиться материалами о SliTaz. Нажмите «Мне нравится» на странице, чтобы помочь распространению проекта!</p>

<fb:like 
	href="http://www.facebook.com/slitaz"
	show_faces="true" width="700">
</fb:like>


<h2>SliTaz на Twitter</h2>

<p>У нас есть официальный аккаунт Twitter для распространения небольших новостей о проекте. Сообщения Twitter транслируются на официальную страницу Facebook, чтобы вы могли следить за нами с вашей любимой платформы. Новости Twitter также можно прочитать на <a href="http://www.slitaz.org/" target="_TOP">сайте SliTaz</a>, который является центральным местом всей деятельности SliTaz. Используйте эту кнопку, чтобы твитнуть о сайте SliTaz:</p>

<!-- Twitter Button -->
<a href="https://twitter.com/share" class="twitter-share-button"
	data-url="http://www.slitaz.org/"
	data-text="SliTaz GNU/Linux" 
	data-count="horizontal"
	data-via="slitaz">Tweet</a>


<h2>Сеть сообщества SliTaz</h2>

<p>Сеть сообщества SliTaz, известная также как <a href="http://scn.slitaz.org/" target="_TOP">SCN</a> (SliTaz Community Network) — это место, где пользователи SliTaz и участники команды могут поделиться чем-угодно, связанным с проектом. Мы предоставляем полнофункциональную социальную платформу с блогами, обновлениями статусов, графикой. Вот последние сообщения на SCN:</p>

<div>
	<?php
		echo "<div>\n";
		get_feed("http://scn.slitaz.org/rss.xml");
		echo "<p>Последние сообщения</p>\n";
		get_feed("http://scn.slitaz.org/statuses/recent/feed");
		echo "</div>\n";
	?>
</div>

</body>
</html>
