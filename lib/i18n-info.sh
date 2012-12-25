#!/bin/sh

# for english po statistics using `msgfmt --statistics`
LC_ALL=C; export LC_ALL

HG_URL="http://hg.slitaz.org"
INFO_FILE="/var/cache/slitaz/website/i18n.html"
mkdir -p "/var/cache/slitaz/website"
touch "${INFO_FILE}.new"
echo "" > "${INFO_FILE}.new"

# echo to file
echof()
{
	echo "$@" >> "${INFO_FILE}.new"
}

# print table cells with 'pot' and 'po's
out_pot_po()
{
	TMP_PO="/tmp/i18n.po"
	# get all links to files in folder
	LINKS=$(wget "$HG_URL/$PROJ_BASE/$PROJ_PODIR/" -q -O - | \
		grep -A 1 "filename" | \
		grep "href" | \
		sed 's|.*"\([^"]*\)".*|http://hg.slitaz.org\1|g' | \
		sed 's|/file/[^/]*/|/raw-file/tip/|g')
	# get link to 'pot' and print cell
	LINK_POT=$(echo "$LINKS" | grep -e '\.pot$')

	echof "
			<td class=\"pot\">
				<a href=\"$LINK_POT\">
				$(echo $LINK_POT | sed 's|.*/\([^/]*\.pot\)$|\1|')</a></td>
			<td class=\"po\">"

	# process 'po's
	IFS="
"
	for FILE in $(echo "$LINKS" | grep -e '.po$'); do
		# temp download
		wget $FILE -q -O $TMP_PO
		# get stats
		STAT=$(msgfmt --statistics $TMP_PO 2>&1 | sed 's|[^0-9 ]||g')
		rm $TMP_PO
		# language; number of translated and untranslated entries
		LNG=$(echo $FILE | sed 's|.*/\([^/]*\)\.po$|\1|')
		TRAN=$(echo $STAT | cut -d" " -f1)
		UNTR=$(($(echo $STAT | awk '{print $2}') + 0))
		# percents done
		PCNT=$(($TRAN * 100 / ($TRAN + $UNTR)))
		echof "				<a href=\"$FILE\">$LNG<hr/>${PCNT}%</a>"
	done
	echof "			</td>"
}


# print table cell with html documentations
out_doc()
{
	# get all links to files in folder
	LINKS=$(wget "$HG_URL/$PROJ_BASE/$PROJ_DOCDIR/" -q -O - | \
		grep -A 1 "filename" | \
		grep "href" | \
		sed 's|.*"\([^"]*\)".*|http://hg.slitaz.org\1|g' | \
		sed 's|/file/[^/]*/|/raw-file/tip/|g')

	echof "			<td class=\"docs\">"

	IFS="
"
	# get name of subproject, example: subproject 'tazusb-box' from 'tazusb'
	SUB_PROJ=$(echo "$PROJ_PODIR" | sed 's|.*/\(.*\)|\1|')
	for DOCUMENT in $(echo "$LINKS" | grep -e '.html$'); do
		# strip project and subproject names from doc filename
		NAME_DOC=$(echo $DOCUMENT | \
			sed 's|.*/\([^/]*\)\.html$|\1|' | \
			sed 's|'$PROJ_BASE'\.||; s|'$SUB_PROJ'\.||')
		# first part of filename, example faq.en -> faq
		NAME_DOC1=$(echo $NAME_DOC | cut -d"." -f1)
		# second part of filename, faq.en -> en
		NAME_DOC2=$(echo $NAME_DOC | cut -d"." -f2)
		# if filename have only [lang] then rename it to doc.[lang]
		if [ "$NAME_DOC1" == "$NAME_DOC2" ]; then
			NAME_DOC1="doc"
		fi
		# not print 'linked' common documents, only localized ones
		# (often link [project].html pointed to [project].en.html)
		if [ "$NAME_DOC" != "$SUB_PROJ" ] && [ "$NAME_DOC" != "$PROJ_BASE" ]; then
			echof "				<a href=\"$DOCUMENT\">$NAME_DOC1<br/>$NAME_DOC2</a>"
		fi
	done
	echof "			</td>"
}


# print table cell with link to .desktop files
out_app()
{
	APP_DIR="$HG_URL/$PROJ_BASE/file/tip/$PROJ_APPDIR"
	PAGE=$(wget $APP_DIR -q -O -)
	LINKS=$(echo "$PAGE" | grep -A 1 "filename" | grep "href" | wc -l)
	# plural form
	if [ "$LINKS" == "1" ]; then
		APP_TEXT="1<br/>item"
	else
		APP_TEXT="$LINKS<br/>items"
	fi

	# rowspan: folder with desktop files is one for project
	# combine all subprojects
	echof "			<td class=\"desk\"$ROWSPAN><a href=\"$APP_DIR\">$APP_TEXT</a></td>"
}



# standard path to folder with 'pot' and 'po's
S="file/tip/po"
# standard path to doc folder
D="file/tip/doc"

# list of all processed projects; fields description:
# [1]: Human readable project name (once)
# [2]: Project base:  http://hg.slitaz.org/[2]
# [3]: Spanned cells (number or empty)
# [4]: Pot&po folder: http://hg.slitaz.org/[2]/[4]/
# [5]: Docs folder:   http://hg.slitaz.org/[2]/[5]/
# [6]: Apps folder:   http://hg.slitaz.org/[2]/file/tip/[6]/
PROJ_LIST="
SliTaz Base Files|slitaz-base-files||$S||rootfs/usr/share/applications
pkgs.slitaz.org|slitaz-forge/file/tip/pkgs||po||
SliTaz Pizza|slitaz-pizza||$S|$D|
SliTaz Tools|slitaz-tools|5|$S/slitaz-boxes||applications
|slitaz-tools||$S/slitaz-tools||
|slitaz-tools||$S/tazbox||
|slitaz-tools||$S/tazdrop||
|slitaz-tools||$S/tazinst|$D|
SSFS|ssfs|2|$S/server||data
|ssfs||$S/ssfs||
TazBug|tazbug||$S||data
TazLito|tazlito||$S/tazlito-wiz|$D|applications
TazPanel|tazpanel||$S|$D|data
TazPkg|tazpkg|2|$S/tazpkg|$D|applications
|tazpkg||$S/tazpkg-notify||
TazUsb|tazusb|2|$S/tazusb|$D|applications
|tazusb||$S/tazusb-box||"

# print table header
echof "
<table>
	<thead class=\"thead\">
		<tr><td>Project</td>
			<td>POT file</td>
			<td>PO files</td>
			<td>Docs</td>
			<td>Menu</td>
		</tr>
	</thead>
	<tbody>"


# main loop
IFS="
"
for PROJECT in $PROJ_LIST
do
	IFS="|"
	echo "$PROJECT" | while read P_NAME PROJ_BASE P_SPAN PROJ_PODIR PROJ_DOCDIR PROJ_APPDIR
	do
		if [ -n "$P_SPAN" ]; then
			ROWSPAN=" rowspan=\"$P_SPAN\""
		else
			ROWSPAN=""
		fi

		echof -n "		<tr>"

		if [ -n "$P_NAME" ]; then
			echof "<td$ROWSPAN class=\"proj\">
				<a href=\"http://hg.slitaz.org/$PROJ_BASE\">$P_NAME</a></td>"
		else
			echof "<!-- td -->"
		fi

		# unconditional out pot and po
		out_pot_po

		# out doc if exists
		if [ -n "$PROJ_DOCDIR" ]; then
			out_doc
		else
			echof "			<td class=\"docs\">&nbsp;</td>"
		fi

		# out apps if exists
		if [ -n "$PROJ_APPDIR" ]; then
			out_app
		elif [ -n "$P_NAME" ]; then
			echof "			<td class=\"desk\">&nbsp;</td>"
		fi


		echof "		</tr>"

		IFS="
"
	done
done

echof "	</tbody>
</table>
<p>Updated: $(date '+%B %d, %Y @ %H:%M')</p>"

mv "${INFO_FILE}.new" "$INFO_FILE"
# the end
