#!/bin/sh
# 
# Get latest commits and packages to display on the website main page.
# On Tank, this script is executed by cron each hour.
#

REPO="/home/slitaz/repos/wok"
URL="http://hg.slitaz.org/wok"
PKGS="/home/slitaz/cooking/packages"
CACHE="/var/cache/slitaz/website"
OUTPUT="$CACHE/latest.html"

# Feed URL's
SCN_FEED='http://scn.slitaz.org/rss.xml'
DOC_FEED='http://doc.slitaz.org/feed.php'
FORUM_FEED='http://forum.slitaz.org/discussions/feed.rss'
BUGS_FEED='http://labs.slitaz.org/issues.atom?query_id='

# Clean cache
mkdir -p $CACHE && cd $CACHE
rm *.xml

# Cache all feeds to save bandwitch (update by cron)
wget -O scn.xml $SCN_FEED
wget -O doc.xml $DOC_FEED
wget -O forum.xml $FORUM_FEED 
wget -O bugs.xml $BUGS_FEED 

# Latest Hg commits
echo -n "Getting latest commits... "
echo '<div class="feed-grid"><div class="right_box">' > $OUTPUT
echo '<h3><img src="pics/website/feed.png" alt=".png" />Latest commits</h3>' >> $OUTPUT
echo '<ul>' >> $OUTPUT
hg log --repository $REPO --limit 5 --no-merges \
	--template "	<li><strong>{date|shortdate}</strong> \
- <a href=\"$URL/rev/{rev}\">{desc}</a></li>\n" >> $OUTPUT 2> /dev/null
echo '</ul>' >> $OUTPUT
echo '</div>' >> $OUTPUT
echo "Done"

# Latest cooked packages by the build bot.
echo -n "Getting latest cooked packages... "
echo '<div class="left_box">' >> $OUTPUT
echo '<h3><img src="pics/website/feed.png" alt=".png" />Latest cooked packages</h3>' >> $OUTPUT
echo '<ul>' >> $OUTPUT
cd $PKGS && ls -1t *.tazpkg | head -5 | \
while read file
do
	echo -n '	<li><strong>'$(stat -c '%y' $PKGS/$file | \
	cut -d ' ' -f 1); echo "</strong> - $file</li>"
done >> $OUTPUT
echo '</ul>' >> $OUTPUT
echo '</div></div>' >> $OUTPUT
echo "Done"
