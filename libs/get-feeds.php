<?php

// Read RSS Feed
function get_feed($feed) {
	$cache = '/var/cache/slitaz/website';
	$entries = 4;
	// have the page displayed even if any xml file
	if ( ! file_exists("$cache/$feed")) {
		echo "</p>\n<div>\n";
		echo "Missing feed: $cache/$feed\n" . "</div>\n";
	}
	else {
		$content = file_get_contents("$cache/$feed");
		$x = new SimpleXmlElement($content);
		$count = 0;
		// We look for last item, channel may not have a PubDate*
		$up = ($x->channel->item->pubDate);
		echo "<span>- Updated: " . substr("$up", 5, 17) . "</span>\n";
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

// Read Blog RSS Feed
function get_feed_blog($feed) {
	$cache = '/var/cache/slitaz/website';
	$entries = 4;
	// have the page displayed even if any xml file
	if ( ! file_exists("$cache/$feed")) {
		echo "Missing feed: $cache/$feed\n" . "</div>\n";
	}
	else {
		$content = file_get_contents("$cache/$feed");
		$x = new SimpleXmlElement($content);
		$count = 0;
		// We look for last item, channel may not have a PubDate*
		$up = ($x->channel->item->pubDate);
		
		echo "<ul>\n";
		foreach($x->channel->item as $entry) {
			$count = $count + 1;
			echo "	<li><strong><a href='$entry->link' title='$entry->title'>" . 
				$entry->title . "</strong></a>\n";
			echo "<span>- " . substr("$entry->pubDate", 5, 17) . "</span>\n";
			echo "<p>$entry->description</p>\n</li>";
			if ($count == $entries) {
				break;
			}
		}
		echo "</ul>\n";
	}
}

?>
