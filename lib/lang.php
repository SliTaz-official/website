<?php

$addr = str_replace('.php', '', $_SERVER['REQUEST_URI']);
$addr = str_replace('index', '', $addr);

$addr = explode('/', $addr);
$cur  = $addr[1];
$page = ($addr[3] == '') ? $addr[2] : $addr[3];


$native  = array ("da"=>"Dansk", "de"=>"Deutsch", "en"=>"English", "es"=>"Español", "fr"=>"Français", "id"=>"Indonesian", "it"=>"Italiano", "pt"=>"Português", "ru"=>"Русский", "cn"=>"中文");

switch($page)
{
	case "mailing-list":
		$url  = "/LANG/mailing-list.php";
		$lang = "da de en es fr it pt ru";
		break;
	case "search":
		$url  = "/LANG/search.php";
		$lang = "cn da de en es fr pt ru";
		break;
	case "about":
		$url  = "/LANG/about/";
		$lang = "cn da de en es fr pt ru";
		break;
	case "artwork":
		$url  = "/LANG/artwork/";
		$lang = "cn da de en es fr pt ru";
		break;
	case "events":
		$url  = "/LANG/about/events.php";
		$lang = "fr";
		break;
	case "screenshots":
		$url  = "/LANG/artwork/screenshots.php";
		$lang = "cn da de en fr pt ru";
		break;
	case "asso":
		$url  = "/LANG/asso/";
		$lang = "en es fr pt";
		break;
	case "statutes":
		$url  = "/LANG/asso/statutes.php";
		$lang = "en pt";
		break;
	case "devel":
		$url  = "/LANG/devel/";
		$lang = "da de en es fr pt ru";
		break;
	case "forge":
		$url  = "/LANG/devel/forge.php";
		$lang = "en fr pt";
		break;
	case "doc":
		$url  = "/LANG/doc/";
		$lang = "cn en es fr it pt ru";
		break;
	case "get":
		$url  = "/LANG/get/";
		$lang = "cn da de en es fr it pt ru";
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
		$lang = "en fr";
		break;
	case "2008":
		$url  = "/LANG/news/2008.php";
		$lang = "en es fr pt";
		break;
	case "2009":
		$url  = "/LANG/news/2009.php";
		$lang = "en es fr pt";
		break;
	case "2010":
		$url  = "/LANG/news/2010.php";
		$lang = "en fr pt";
		break;
	case "packages":
		$url  = "/LANG/packages/";
		$lang = "cn da de en es fr it pt ru";
		break;
	case "sponsor":
		$url  = "/LANG/sponsor/";
		$lang = "en pt";
		break;
	default:
		$url  = "/LANG/";
		$lang = "cn da de en es fr id it pt ru";
		break;
}

echo "<!-- Languages -->\n<div id='lang'>\n" .
	"	<a href='/i18n.php'><img src='/images/locale.png' alt='i18n' /></a>\n";

foreach($native as $short=>$long)
{
	if ($cur==$short)
		echo "	<strong>$long</strong>\n";
	elseif (strpos($lang, $short) === false)
		echo "	$long\n";
	else
		echo '	<a href="'.str_replace('LANG', $short, $url).'">'.$long."</a>\n";	
}
echo "</div>\n";

?>
