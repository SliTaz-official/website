<?php

$addr = str_replace('.php', '', $_SERVER['REQUEST_URI']);
$addr = str_replace('index', '', $addr);

$addr = explode('/', $addr);
$cur  = $addr[1];
$page = '';
if (!empty($addr[2]))
	$page = $addr[2];
if (!empty($addr[3]))
	$page = $addr[3];

echo "<!-- " . $_SERVER['REQUEST_URI'] . " : " . $cur . " : " . $page . " -->\n";

$native  = array ("bs"=>"Bosanski", "da"=>"Dansk", "de"=>"Deutsch", "en"=>"English", "es"=>"Español", "fr"=>"Français", "id"=>"Indonesian", "it"=>"Italiano", "pt"=>"Português", "ru"=>"Русский", "cn"=>"中文", "ja"=>"日本語");

switch($page)
{
	case "mailing-list":
		$url  = "/LANG/mailing-list.php";
		$lang = "cn da de en es fr id it ja pt ru";
		break;
	case "support":
		$url  = "/LANG/support.php";
		$lang = "en fr ja pt";
		break;
	case "search":
		$url  = "/LANG/search.php";
		$lang = "cn da de en es fr ja pt ru";
		break;
	case "about":
		$url  = "/LANG/about/";
		$lang = "bs cn da de en es fr ja pt ru";
		break;
	case "artwork":
		$url  = "/LANG/artwork/";
		$lang = "cn da de en es fr ja pt ru";
		break;
	case "events":
		$url  = "/LANG/about/events.php";
		$lang = "fr";
		break;
	case "screenshots":
		$url  = "/LANG/artwork/screenshots.php";
		$lang = "cn da de en fr ja pt ru";
		break;
	case "asso":
		$url  = "/LANG/asso/";
		$lang = "de en es fr pt ru bs da";
		break;
	case "statutes":
		$url  = "/LANG/asso/statutes.php";
		$lang = "en pt";
		break;
	case "devel":
		$url  = "/LANG/devel/";
		$lang = "da de en es fr id it pt ru";
		break;
	case "forge":
		$url  = "/LANG/devel/forge.php";
		$lang = "da de en es fr pt ru";
		break;
	case "doc":
		$url  = "/LANG/doc/";
		$lang = "cn de en es fr it pt ru";
		break;
	case "get":
		$url  = "/LANG/get/";
		$lang = "bs cn da de en es fr it pt ru";
		break;
	case "flavors":
		$url  = "/LANG/get/flavors.php";
		$lang = "cn da de en fr pt ru";
		break;
	case "news":
		$url  = "/LANG/news/";
		$lang = "de en es fr pt ru";
		break;
	case "2007":
		$url  = "/LANG/news/2007.php";
		$lang = "en fr ru";
		break;
	case "2008":
		$url  = "/LANG/news/2008.php";
		$lang = "en es fr pt ru";
		break;
	case "2009":
		$url  = "/LANG/news/2009.php";
		$lang = "en es fr pt ru";
		break;
	case "2010":
		$url  = "/LANG/news/2010.php";
		$lang = "en fr pt ru";
		break;
	case "2011":
		$url  = "/LANG/news/2011.php";
		$lang = "en fr ru";
		break;
	case "2012":
		$url  = "/LANG/news/2012.php";
		$lang = "en fr ru";
		break;
	case "2013":
		$url  = "/LANG/news/2013.php";
		$lang = "en";
		break;
	case "packages":
		$url  = "/LANG/packages/";
		$lang = "cn da de en es fr it ja pt ru";
		break;
	case "sponsor":
		$url  = "/LANG/sponsor/";
		$lang = "bs de en ja pt ru fr";
		break;
	default:
		$url  = "/LANG/";
		$lang = "bs cn da de en es fr id it ja pt ru";
		break;
}

echo "<!-- Languages -->\n<div id='lang'>\n" .
	"	<a class='flag' href='/i18n.php'>&#9873;</a>\n";

foreach($native as $short=>$long)
{
	if ($cur==$short)
		echo "	<strong>$long</strong>\n";
	elseif (strpos($lang, $short) === false)
		echo "	<span>$long</span>\n";
	else
		echo '	<a href="'.str_replace('LANG', $short, $url).'">'.$long."</a>\n";
}
echo "</div>\n";

?>
