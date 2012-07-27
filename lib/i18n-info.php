<?php

// Build table with i18n info on the SliTaz projects
function get_info() {
	$infofile = '/var/cache/slitaz/website/i18n.html';
	if ( ! file_exists("$infofile")) {
		echo "Can't show info!\nSorry...";
	}
	else {
		$content = file_get_contents("$infofile");
		echo "$content";
	}
}

?>
