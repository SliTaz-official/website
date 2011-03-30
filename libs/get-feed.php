<?php

// Read RSS Feed
function get_rss_feed($feed_url) {
	$content = file_get_contents($feed_url);
	$x = new SimpleXmlElement($content);
	// We look for last item, channel may not have a PubDate*
	$up = ($x->channel->item->pubDate);
	echo "<span>Updated: " . substr("$up", 5, 12) . "</span>\n";
	echo "</p>\n<div>\n<ul>\n";
	foreach($x->channel->item as $entry) {
		echo "	<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>\n";
	}
	echo "</ul>\n";
}

// Read Atom Feed
function get_atom_feed($feed_url) {
	$content = file_get_contents($feed_url);
	$x = new SimpleXmlElement($content);
	$up = ($x->updated);
	echo "<span>Updated: " . substr("$up", 0, 10) . "</span>\n";
	echo "</p>\n<div>\n<ul>\n";
	foreach($x->entry as $entry) {
		echo "	<li><a href='$entry->id' title='$entry->title'>" . $entry->title . "</a></li>\n";
	}
	echo "</ul>\n";
}

?>
