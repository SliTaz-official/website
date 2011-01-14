<?php

// Read Feed
function get_feed($feed_url) {
	$content = file_get_contents($feed_url);
	$x = new SimpleXmlElement($content);
	echo "<ul>";
	foreach($x->channel->item as $entry) {
		echo "
		<li>
		  <strong><a href='$entry->link' 
			title='$entry->title'>" . $entry->title . "</a></strong>
		  <p>$entry->description</p>
		</li>";
		}
	echo "</ul>";
}

?>
