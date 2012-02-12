#!/bin/sh
# 
# Get latest commits and feeds to display on the website main page.
# On Tank, this script is executed by cron each hour.
#

CACHE="/var/cache/slitaz/website"

# Feeds URL http://scn.slitaz.org/activity/feed/
SCN_FEED='http://scn.slitaz.org/activity/feed/'
BLOG_FEED='http://scn.slitaz.org/category/news/feed/'
WOK_FEED='http://hg.slitaz.org/wok/rss-log'
FORUM_FEED='http://forum.slitaz.org/rss'

# Clean cache
mkdir -p $CACHE && cd $CACHE
rm -f *.xml

# Cache all feeds to save bandwidth (updated by cron)
echo -n "Getting latest rss feeds... "
wget -O scn.xml $SCN_FEED 2>/dev/null
wget -O wok.xml $WOK_FEED 2>/dev/null
wget -O blog.xml $BLOG_FEED 2>/dev/null
#wget -O forum.xml $FORUM_FEED 2>/dev/null
echo "Done"

exit 0
