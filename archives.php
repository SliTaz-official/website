<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>lists.tuxfamily.org/slitaz mailing list</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="slitaz.css" />
	<style type="text/css">
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
$url = "http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/";
$script  = "-e '/<table>/,/<\/table>/!d' ";
$script .= "-e 's|html\"|html\" target=\"_blank\"|g' ";
$script .= "-e 's|href=\"|href=\"$url|g' ";
system("wget -q -O - $url | sed $script");
?>
</body>
</html>
