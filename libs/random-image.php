<?php

$total  = "6";
$folder = "images/slideshow";
$start  = "1";
$random = mt_rand($start, $total);
$name   = $random . ".png";

echo "<img src=\"$folder/$name\" alt=\"$name\" />";

?>
