<?php
// Read RSS Feed
function get_rss_feed($feed_url) {
	if ( ! file_exists($feed_url)) {
		echo "</p>\n<div>\n";
		echo "No feed: $feed_url\n" . "</div>\n";
	}
	else {
		$content = file_get_contents($feed_url);
		$x = new SimpleXmlElement($content);
		$entries = 4;
		$count = 0;
		// We look for last item, channel may not have a PubDate*
		$up = ($x->channel->item->pubDate);
		echo "<span>Updated: " . substr("$up", 5, 17) . "</span>\n";
		echo "</p>\n<div>\n<ul>\n";
		foreach($x->channel->item as $entry) {
			$count = $count + 1;
			echo "	<li><a href='$entry->link' title='$entry->title'>" . 
				$entry->title . "</a></li>\n";
			if ($count == $entries) {
				break;
			}
		}
		echo "</ul>\n";
	}
}
?>
