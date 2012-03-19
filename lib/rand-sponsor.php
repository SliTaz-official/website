<?php
//
// Display random sponsor. Only main sponsor are featured on main page.
//

$total  = "3";
$folder = "/images/sponsor";
$random = mt_rand(1, $total);

switch($random) {
case 1:
	$name = "Allied Data Sys";
	$img  = "ads.png";
	$url  = "http://www.ads-lu.com/";
	break;
case 2:
	$name = "DuckDuckGo";
	$img  = "ddg.png";
	$url  = "https://duckduckgo.com/";
	break;
case 3:
	$name = "Clarkson Open Source Institute";
	$img  = "cosi.png";
	$url  = "http://cosi.clarkson.edu/";
	break;
}

echo "<a href='$url'><img src='$folder/$img' title='$name' alt='[ $name ]' /></a>";

?>
