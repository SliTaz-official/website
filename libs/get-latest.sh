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

# Feed URLs
SCN_FEED='http://scn.slitaz.org/activity/feed/'
DOC_FEED='http://doc.slitaz.org/feed.php'
FORUM_FEED='http://forum.slitaz.org/rss/'
BUGS_FEED='http://labs.slitaz.org/issues.atom?query_id='
WOK_FEED='http://hg.slitaz.org/wok/rss-log'

# Clean cache
mkdir -p $CACHE && cd $CACHE
rm *.xml

# Cache all feeds to save bandwidth (updated by cron)
#wget -O doc.xml $DOC_FEED
#wget -O forum.xml $FORUM_FEED 
#wget -O bugs.xml $BUGS_FEED
wget -O scn.xml $SCN_FEED
wget -O wok.xml $WOK_FEED

# Latest cooked packages by the build bot.
#echo -n "Getting latest cooked packages... "
#echo '<ul>' > $OUTPUT
#cd $PKGS && ls -1t *.tazpkg | head -8 | \
#while read file
#do
	#echo -n '	<li>'$(stat -c '%y' $PKGS/$file | \
	#cut -d ' ' -f 1); echo " - $file</li>"
#done >> $OUTPUT
#echo '</ul>' >> $OUTPUT
#echo "Done"
