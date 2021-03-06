<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>О проекте | SliTaz</title>
	<meta name="description" content="Общие сведения о проекте SliTaz GNU/Linux"/>
	<meta name="keywords" lang="ru" content="о SliTaz, Gnu, Linux, мини дистрибутив, LiveCD"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.ru.html");
include("../../lib/html/nav.ru.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>
О SliTaz
</h2>
<p>
Маленький, быстрый, стабильный и простой в использовании!
</p>

<ul>
<li><a href="#intro">
Введение
</a></li>
<li><a href="#spec">
Технические характеристики SliTaz
</a></li>
<li><a href="#overview">
Общие сведения
</a></li>
<li><a href="#website">
Веб-сайт и i18n
</a></li>
<li><a href="#reviews">
Обзоры
</a></li>
<li><a href="../asso/">
Ассоциация
</a></li>
</ul>

<h2 id="intro">
Введение в проект
</h2>

<p>
SliTaz GNU/Linux — это свободная операционная система, которая может целиком поместиться в ОЗУ и работать без установки, и может запускаться со съемных носителей, таких как CD или USB-флеш-накопитель.
SliTaz легкий, быстрый и может быть целиком установлен на жесткий диск.
SliTaz распространяется в виде ISO-образа Live CD, который легко можно записать на компакт-диск и загрузиться с него.
После того как система загрузилась, диск можно извлечь из привода и использовать привод для других дисков.
Live-система представляет собой полнофункциональный графический дистрибутив, способный хранить ваши данные и персональные настройки на носителе информации.
Вы можете расширить систему с помощью менеджера пакетов Tazpkg; вы найдете обновления безопасности как для нестабильной, так и для стабильной версий.
</p>
<p>
Бесплатную техническую поддержку пользователей SliTaz вы найдете в <a href="../mailing-list.php">рассылке</a> и на <a href="http://forum.slitaz.org/">форуме</a>.
Вы также можете связаться с нами для получения дополнительной информации, внесения предложений и комментариев, используя рассылку или непосредственно по почте: &lt;devel собачка slitaz точка org&gt;
</p>


<h2 id="spec">
Технические характеристики SliTaz
</h2>

<p>
ISO-образ по умолчанию предлагает 4 редакции: base (базовая), just-x (только X), gtk-only (только GTK+) и core (полный рабочий стол).
SliTaz также можно загрузить по сети, настроить под любые потребности, установить на широкий спектр устройств — старые компьютеры, мощные серверы и небольшие ARM-устройства, такие как Raspberry Pi.
</p>
<p>
SliTaz прост в использовании для новичков в Linux: мы предоставляем полнофункциональный и современный рабочий стол, следующий стандартам Freedesktop, а также наши собственные средства, которые позволяют пользователям настроить всю систему, не прибегая к консоли.
Системой можно управлять дистанционно через нашу веб-панель настроек.
</p>

<p>
Мы предлагаем базовую систему и урезанную X-систему, на их основе вы можете построить свой собственный настроенный дистрибутив.
Настроенную систему можно загрузить с CD-ROM, USB-флеш, SD-карты, по сети, или установить на жесткий диск.
</p>
<p>
Следует философии UNIX: всё есть текстовый файл.
Наш менеджер пакетов и все системные настройки хранятся в простых текстовых файлах для легкой настройки при помощи текстового редактора.
Для большинства инструментов используются сценарии оболочки, опять же для простоты настройки и разработки.
</p>
<p>
Радикально простой способ загрузки, использующий 4 скрипта: для настройки всей системы, обработки параметров загрузки, управления сетью и запуска локальных команды.
SliTaz минимально нагружает ресурсы и позволяет пользователям управлять всем остальным.
</p>
<p>
Способен работать полностью в оперативной памяти, загрузившись с LiveCD, USB-флеш или «скромной» установки на жестком диске.
Этот режим позволяет сохранять документы на смонтированном разделе в то время как система остается очень быстрой и отзывчивой.
</p>
<p>
Структурированная сеть с глубокой интеграцией SliTaz для легкой навигации между всеми сайтами.
Структурированная разработка с Mercurial и пользовательскими инструментами, такими как баг-трекер и CookUtils.
</p>


<h2 id="overview">
Общие сведения
</h2>

<ul>
<li>
Корневая файловая система занимает около 100 МБ, а образ Live CD — менее, чем 40 МБ.
</li>
<li>
Готовый к использованию веб/FTP-сервер, основанный на Busybox с поддержкой CGI.
</li>
<li>
Веб-сёрфинг с Midori, Firefox, либо Lynx в текстовом режиме.
</li>
<li>
Поддержка звука обеспечивается при помощи Alsa mixer, аудио-проигрывателя и CD-риппера/кодера.
</li>
<li>
Клиенты чата, почты и FTP.
</li>
<li>
Клиент и сервер SSH, основанные на Dropbear.
</li>
<li>
Движок баз данных на SQLite.
</li>
<li>
Создание загрузочного LiveUSB.
</li>
<li>
Утилиты для создания, правки и прожига образов CD и DVD.
</li>
<li>
Элегантный рабочий стол с Openbox, запущенным поверх Xorg/Xvesa (X-сервер).
</li>
<li>
Наши собственные графические надстройки для утилит командной строки.
</li>
<li>
4967 пакетов, легко устанавливаемых из репозитория.
</li>
<li>
Активное и дружное сообщество.
</li>
</ul>


<h2 id="website">
Веб-сайт и i18n
</h2>

<p>
Веб-сайт SliTaz доступен также на различных языках, он является частью <a href="/i18n.php">проекта интернационализации</a>.
На сайте вы можете <a href="../get/">загрузить</a> LiveCD со SliTaz, а нам сайт помогает развивать проект.
Просмотрите раздел <a href="../doc/">документации</a>, чтобы узнать, как использовать LiveCD SliTaz и как настроить систему.
</p>


<h2 id="reviews">
Обзоры
</h2>

<p>
SliTaz GNU/Linux рассматривался на нескольких сайтах.
Спасибо всем за поддержку.
</p>


<h3>
4.0 — апрель 2012
</h3>

<ul>
<li>
<a href="http://badalhocando.blogspot.co.uk/2012/04/slitaz-40-review-small-but-fierce.html">Blogspot</a> — Klaus Zimmermann.
</li>
<li>
<a href="http://linuxblog.darkduck.com/2012/04/slitaz-40-light-and-stable.html">DarkDuck</a> — Dmitry.
</li>
<li>
<a href="http://frederic.bezies.free.fr/blog/?p=8760">Weblog</a> <em>(fr)</em> — Frederic Bezies.
</li>
</ul>


<h3>
3.0 — март 2010; Cooking — январь 2010
</h3>

<ul>
<li>
<a href="http://kmandla.wordpress.com/2010/03/29/greetings-from-slitaz-3-0/">Wordpress</a> — K.Mandla.
</li>
<li>
<a href="http://www.linuxjournal.com/content/spotlight-linux-slitaz-gnulinux-30">Linux Journal</a> — Susan Linton.
</li>
<li>
<a href="http://distrowatch.com/weekly.php?issue=20100111#feature">Distrowatch</a> — Jesse Smith (Cooking непосредственно перед 3.0).
</li>
</ul>


<h3>
2.0 — апрель 2009
</h3>

<ul>
<li>
<a href="http://www.gdhpress.com.br/blog/slitaz">Gdhpress</a> <em>(pt)</em> — Carlos Morimoto.
</li>
<li>
<a href="http://www.frlinux.net/?section=distributions&amp;article=237">FRLinux</a> <em>(fr)</em> — Steph.
</li>
<li>
<a href="http://www.junauza.com/2009/07/slitaz-20-simple-speedy-and-secure.html">Tech Source</a> — Jun Auza.
</li>
<li><a href="http://www.dedoimedo.com/computers/slitaz-2.html">Dedoimedo</a> — Dedoimedo.
</li>
<li>
<a href="http://linuxologist.com/reviews/slitaz-linux-zero-to-distro-in-30-mb/">Linuxologist</a> — Brie Gordon.
</li>
</ul>


<h3>
1.0 — март 2008
</h3>

<ul>
<li>
<a href="http://distrowatch.com/weekly.php?issue=20080331">Distrowatch</a> — Ladislav Bodnar.
</li>
<li>
<a href="http://www.junauza.com/2008/03/slitaz-gnulinux-smallest-desktop-distro.html">Tech Source</a> — Jun Auza.
</li>
<li>
<a href="http://beranger.org/index.php?page=diary&amp;2008/03/31/07/04/42-a-quick-look-over-slitaz-1-0">Planet Béranger</a> — Béranger.
</li>
<li>
<a href="http://kmandla.wordpress.com/2008/04/02/slitaz-10-on-450mhz-k6-2-256mb/">Wordpress</a> — K.Mandla.
</li>
<li>
<a href="http://reddevil62-techhead.blogspot.com/2008/04/damn-minuscule-linux-first-look-at.html">Red Devil's Tech Blog</a> — Steve Lawson.
</li>
<li>
<a href="http://www.linuxinfusion.com/slitaz-a-light-weight-gnulinux-distribution">Linux Infusion</a> — Moparx.
</li>
<li>
<a href="http://www.insidesocal.com/click/2008/06/a-second-look-at-slitaz-10.html">Dailynews Blog</a> — Steven Rosenberg.
</li>
<li>
<a href="http://www.linux.com/feature/140573">Linux.com</a> — Dennis L. Ericson.
</li>
<li>
<a href="http://www.freesoftwaremagazine.com/columns/slitaz_live_cd_small_beautifully_marked">Free Software Magazine</a> — Gary Richmond.
</li>
<li>
<a href="http://www.linux-magazine.com/issues/2008/97/slitaz">Linux Pro Magazine</a> — Dimitri Popov.
</li>
<li>
<a href="http://www.dedoimedo.com/computers/slitaz.html">Dedoimedo</a> — Dedoimedo.
</li>
</ul>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
