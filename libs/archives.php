<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>lists.tuxfamily.org/slitaz mailing list</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<!-- link rel="stylesheet" type="text/css" href="/slitaz.css" / -->
	<style type="text/css">
body {
	background: #ffffff;
	color: black;
	font: 13px sans-serif, vernada, arial;
	margin: 0;
	#border-top: 34px solid #f1f1f1;
}
	table {
		border: 1px solid #000000;
		width: variable;
		border-collapse: collapse;
		margin: 2px 2px;
	}
	td {
		border: 1px dotted #6495ed;
		width: variable;
		padding: 2px;
	}
	.rowodd {
		background-color: #ffffff;
	}
	.roweven {
		background-color: #e1ffe1; /* the tower */
	}
	th {
		border: 1px solid #000000;
		width: variable;
		padding: 4px;
	}
	.alignright {
		text-align: right;
	}
	</style>
</head>
<body>
<?php

function translate($word)
{
	if (isset($_GET['lang'])) switch ($_GET['lang']) {
	case "de" :
		switch ($word) {
		case "Archives"  : return "Archiv";
		case "Archive"   : return "Archiv";
		case "View by"   : return "Ansicht von";
		case "Number"    : return "Zahl";
		case "Total size": return "Gesamtgr\&ouml;\&szlig;e";
		case " or "      : return " oder ";
		case "Date"      : return "datum";
		}
		break;
	case "es" :
		switch ($word) {
		case "Archives"  : return "Archivos";
		case "Archive"   : return "Archivo";
		case "View by"   : return "Vista";
		case "Number"    : return "n\&uacute;mero";
		case "Total size": return "Tama\&ntilde;o total";
		case "Thread"    : return "hilo";
		case " or "      : return " o ";
		case "Date"      : return "Fecha";
		}
		break;
	case "fr" :
		switch ($word) {
		case "View by"   : return "Tri\&eacute; par";
		case "Number"    : return "Nombre";
		case "Total size": return "Volume";
		case "Thread"    : return "Sujet";
		case " or "      : return " ou ";
		}
		break;
	case "pt" :
		switch ($word) {
		case "Archives"  : return "Arquivos";
		case "Archive"   : return "Arquivo";
		case "View by"   : return "Exibir por";
		case "Number"    : return "n\&uacute;mero";
		case "Total size": return "O tamanho total";
		case "Thread"    : return "T\&oacute;pico";
		case " or "      : return " ou ";
		case "Date"      : return "Data";
		}
		break;
	}
	return $word;
}

echo '<h4>'.translate("Archives").' 2007-'.date('Y')."</h4>\n";

$url = "http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/";

$script  = "-e '/<table>/,/<\/table>/!d' ";
$script .= "-e 's|html\"|html\" target=\"_blank\"|g' ";
$script .= "-e 's|href=\"|href=\"$url|g' ";
foreach (array("Archive","View by","Number","Total size",
	       "Thread"," or ","Date") as $word) {
	$script .= "-e 's|".$word."|".translate($word)."|' ";
}
system("wget -q -O - $url | sed $script");
?>
</body>
</html>
