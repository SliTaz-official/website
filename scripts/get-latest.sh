#!/bin/sh
# 
# Get latest commits and packages to display on the website main page.
# On Tank, this script is executed by cron each hour.
#

REPO="/home/slitaz/repos/wok"
URL="http://hg.slitaz.org/wok"
PKGS="/home/slitaz/cooking/packages"
OUTPUT="/var/cache/slitaz/website/latest.html"

mkdir -p /var/cache/slitaz/website

# Latest Hg commits
echo -n "Getting latest commits... "
echo '<h2><font color="#DF8F06">Latest commits</font></h2>' > $OUTPUT
echo "<ul>" >> $OUTPUT
hg log --repository $REPO --limit 5 --no-merges \
	--template "	<li><strong>{date|shortdate}</strong> \
- <a href=\"$URL/rev/{rev}\">{desc}</a></li>\n" >> $OUTPUT 2> /dev/null
echo "</ul>" >> $OUTPUT
echo "Done"

# Latest cooked packages by the build bot.
echo -n "Getting latest cooked packages... "
echo '<h2><font color="#DF8F06">Latest cooked packages</font></h2>' >> $OUTPUT
echo "<ul>" >> $OUTPUT
cd $PKGS && ls -1t *.tazpkg | head -5 | \
while read file
do
	echo -n '	<li><strong>'$(stat -c '%y' $PKGS/$file | \
	cut -d ' ' -f 1); echo "</strong> - $file</li>"
done >> $OUTPUT
echo "</ul>" >> $OUTPUT
echo "Done"
