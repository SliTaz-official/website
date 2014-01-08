#!/bin/sh
#
. /usr/lib/slitaz/httphelper
header

cat << EOT
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>SliTaz.org - CGI Testsuite</title>
	<meta charset="utf-8" />
</head>
<body>
<pre>
EOT

env

cat << EOT
</pre>
</body>
</html>
EOT
