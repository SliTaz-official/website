#!/bin/sh
#
# Get latest commits and feeds to display on the website main pages.
# On the server, this script is executed by cron each hour.
#
PWD=$(dirname $0)
CACHE="$(dirname $PWD)/cache"

# Feeds URL http://scn.slitaz.org/activity/feed/
BLOG_FEED='http://scn.slitaz.org/?blog=rss'
WOK_FEED='http://hg.slitaz.org/wok/rss-log'
FORUM_FEED='http://forum.slitaz.org/rss'
ROLLING_DATE='http://mirror1.slitaz.org/rolling-date.sh'

# Clean cache
mkdir -p ${CACHE} && cd ${CACHE}
rm -f *.xml

# Cache all feeds to save bandwidth (updated by cron)
echo -n "Getting latest rss feeds... "
wget -O wok.xml $WOK_FEED 2>/dev/null
wget -O blog.xml $BLOG_FEED 2>/dev/null
wget -O forum.xml $FORUM_FEED 2>/dev/null
wget -O rolling-date.txt $ROLLING_DATE 2>/dev/null
echo "Done"

exit 0
