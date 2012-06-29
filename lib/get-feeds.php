<?php

function updated() {
	$addr = explode('/', $_SERVER['REQUEST_URI']);
	$lang = $addr[1];
	if ($lang == '') $lang = "en";
	$native = array(
	"cn"=>"- 更新于: ",
	"da"=>"- Opdateret den: ",
	"de"=>"- Aktualisiert am: ",
	"en"=>"- Updated: ",
	"es"=>"- Actualizado el: ",
	"fr"=>"- Mis à jour le: ",
	"id"=>"- Diperbarui pada: ",
	"it"=>"- Aggiornato il: ",
	"pt"=>"- Atualizado em: ",
	"ru"=>"— Обновлено: "
	);
	return $native[$lang];
}

// Read RSS Feed
function get_feed($feed) {
	$cache = '/var/cache/slitaz/website';
	$entries = 4;
	// no follow all links, but hg commits
	if ($feed !== "wok.xml") {
		$nofollow = " rel='nofollow'"
	else
		$nofollow = ""
	}
	// have the page displayed even if any xml file
	if ( ! file_exists("$cache/$feed")) {
		echo "</p>\n<div>\n";
		echo "Missing feed: $cache/$feed\n";
	}
	else {
		$content = file_get_contents("$cache/$feed");
		$x = new SimpleXmlElement($content);
		$count = 0;
		// We look for last item, channel may not have a PubDate*
		$up = ($x->channel->item->pubDate);
		echo "<span>" . updated() . substr("$up", 5, 17) . "</span>\n";
		echo "</p>\n<div>\n<ul>\n";
		foreach($x->channel->item as $entry) {
			$count = $count + 1;
			echo "	<li><a href='$entry->guid'$nofollow>" .
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
		echo "<div>\n";
		echo "Missing feed: $cache/$feed\n";
		echo "</div>\n";
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
			echo "	<li><a href='$entry->link'><strong>" .
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

// Read Forum Feed
function get_feed_forum($feed) {
	$cache = '/var/cache/slitaz/website';
	$entries = 4;
	// have the page displayed even if any xml file
	if ( ! file_exists("$cache/$feed")) {
		echo "</p>\n<div>\n";
		echo "Missing feed: $cache/$feed\n";
	}
	else {
		$content = file_get_contents("$cache/$feed");
		$x = new SimpleXmlElement($content);
		$count = 0;
		// We look for last item, channel may not have a PubDate*
		$up = ($x->channel->item->pubDate);
		echo "<span>" . updated() . substr("$up", 5, 17) . "</span>\n";
		echo "</p>\n<div>\n<ul>\n";
		foreach($x->channel->item as $entry) {
			$count = $count + 1;
			echo "	<li><a href='$entry->link' rel='nofollow'>" .
				$entry->title . "</a></li>\n";
			if ($count == $entries) {
				break;
			}
		}
		echo "</ul>\n";
	}
}

?>
