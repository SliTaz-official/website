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
<p>
	Welcome to the SliTaz Social application for Facebook.
</p>

<h2>SliTaz on Facebook</h2>
<p>
	To let you show your appreciation for the SliTaz project, we have an official 
	<a href="http://facebook.com/slitaz" target="_TOP">Facebook page</a>
	where you can meet us and share stuff about SliTaz. Like the page to help
	spread the project!
</p>
<fb:like 
	href="http://www.facebook.com/slitaz"
	show_faces="true" width="700">
</fb:like>

<h2>SliTaz on Twitter</h2>
<p>
	We have an official Twitter account providing small news about the
	project. Twitter posts are relayed on the official Facebook page to
	let you follow us from your favorite platform. Twitter news can also
	be read on the <a href="http://www.slitaz.org/" target="_TOP">SliTaz website</a>
	which is a central place for all SliTaz activity. You can use this 
	button to Tweet about the SliTaz website:
</p>
<!-- Twitter Button -->
<a href="http://twitter.com/share" class="twitter-share-button"
	data-url="http://www.slitaz.org/"
	data-text="SliTaz GNU/Linux" 
	data-count="horizontal"
	data-via="slitaz">Tweet</a>

<h2>SliTaz Community Network</h2>
<p>
	The SliTaz Community Network aka 
	<a href="http://scn.slitaz.org/" target="_TOP">SCN</a> is the place
	where SliTaz users and contributors share things about the project. We
	provide a fully featured social platform with stuff such as Blogs, 
	Status updates and Artwork. Here are the latest posts on SCN:
</p>
<div>
	<?php
		echo "<div>\n";
		get_feed("http://scn.slitaz.org/rss.xml");
		echo "<p>Latest Status Updates</p>\n";
		get_feed("http://scn.slitaz.org/statuses/recent/feed");
		echo "</div>\n";
	?>
</div>

</body>
</html>
