<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('...Direct Access to this location is not allowed...');
### Copyright (C) 2006-2009 Acajoom Services. All rights reserved.
### http://www.ijoobi.com/index.php?option=com_content&view=article&id=12&Itemid=54
if ( !defined('WADMIN') ) define('WADMIN', 'administrator' .DS . 'components' . DS . 'com_acajoom' . DS );
if ( !defined('WFRONT') ) define('WFRONT', 'components' . DS . 'com_acajoom' . DS );
$localVersion = array();
$localVersion['requirement'] = '';
$localVersion['message'] = '1';
$localVersion['component'] = 'Acajoom';
$localVersion['type'] = 'News';
$localVersion['version'] = '3.2.3';
$localVersion['level'] = '1';
$localVersion[ WADMIN . 'acajoom.xml'] = '1.2.8';
$localVersion[ WADMIN . 'admin.acajoom.html.php'] = '1.2.3';
$localVersion[ WADMIN . 'admin.acajoom.php'] = '1.2.3';
$localVersion[ WADMIN . 'config.acajoom.html.php'] = '1.2.3';
$localVersion[ WADMIN . 'config.acajoom.php'] = '1.2.3';
$localVersion[ WADMIN . 'guide.acajoom.php'] = '1.1.4';
$localVersion[ WADMIN . 'index.html'] = '1.0.1';
$localVersion[ WADMIN . 'lists.acajoom.html.php'] = '1.2.3';
$localVersion[ WADMIN . 'lists.acajoom.php'] = '1.2.3';
$localVersion[ WADMIN . 'mailings.acajoom.html.php'] = '1.2.3';
$localVersion[ WADMIN . 'mailings.acajoom.php'] = '1.2.3';
$localVersion[ WADMIN . 'subscribers.acajoom.html.php'] = '1.2.3';
$localVersion[ WADMIN . 'subscribers.acajoom.php'] = '1.1.4';
$localVersion[ WADMIN . 'toolbar.acajoom.html.php'] = '1.2.3';
$localVersion[ WADMIN . 'toolbar.acajoom.php'] = '1.1.4';
$localVersion[ WADMIN . 'uninstall.acajoom.php'] = '1.1.4';
$localVersion[ WADMIN . 'update.acajoom.php'] = '1.2.3';
$localVersion[ WADMIN . 'backup' . DS . 'index.html'] = '1.0.3';
$localVersion[ WADMIN . 'version.php'] = '1.2.8';
$localVersion[ WADMIN . 'cssadmin' . DS . 'acajoom.css'] = '1.0.7';
$localVersion[ WADMIN . 'cssadmin' . DS . 'index.html'] = '1.0.0';
$localVersion[ WADMIN . 'classes' . DS . 'class.acajoom.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.erro.php'] = '1.1.4';
$localVersion[ WADMIN . 'classes' . DS . 'class.frontend.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.jmail.php'] = '1.2.8';
$localVersion[ WADMIN . 'classes' . DS . 'class.lists.php'] = '1.2.8';
$localVersion[ WADMIN . 'classes' . DS . 'class.listype.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.mailing.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.module.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.queue.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.subscribers.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.update.php'] = '1.2.3';
$localVersion[ WADMIN . 'classes' . DS . 'class.xonfig.php'] = '1.1.4';
$localVersion[ WADMIN . 'classes' . DS . 'lib.upload.php'] = '1.1.4';
$localVersion[ WADMIN . 'classes' . DS . 'multifile.js'] = '1.0.4';
$localVersion[ WADMIN . 'classes' . DS . 'index.html'] = '1.0.0';
### class Plugin
$localVersion[ WADMIN . 'plugins' . DS . 'class.newsletter.php'] = '1.2.3';
$localVersion[ WADMIN . 'plugins' . DS . 'index.html'] = '1.0.7';
### class Plus
$localVersion[ WADMIN . 'plugins' . DS . 'class.autoresponder.php'] = '1.1.4';
$localVersion[ WADMIN . 'plus' . DS . 'class.auto.php'] = '1.2.3';
$localVersion[ WADMIN . 'plus' . DS . 'index.html'] = '1.0.7';
### class PRO
$localVersion[ WADMIN . 'plugins' . DS . 'class.autonews.php'] = '1.2.3';
$localVersion[ WADMIN . 'pro' . DS . 'class.pro.php'] = '1.2.3';
$localVersion[ WADMIN . 'pro' . DS . 'index.html'] = '1.0.7';
### class PRO EXTRA
$localVersion[ WADMIN . 'pro' . DS . 'class.form.php'] = '1.2.5';
$localVersion[ WADMIN . 'pro' . DS . 'class.aca_tags.php'] = '1.2.5';
$localVersion[ WADMIN . 'language' . DS . 'brazilian.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'danish.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'dutch.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'english.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'french.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'german.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'germani.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'hungarian.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'italian.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'norwegian.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'polish.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'portuguese.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'simplified_chinese.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'spanish.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'swedish.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'traditional_chinese.php'] = '1.2.3';
$localVersion[ WADMIN . 'language' . DS . 'index.html'] = '1.0.1';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_banner.png'] = '1.0.7';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_icon.png'] = '1.1.5';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_news.png'] = '1.1.5';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_plus.png'] = '1.1.5';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_pro.png'] = '1.1.5';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_slog_news.png'] = '1.1.4';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_slog_plus.png'] = '1.1.4';
$localVersion[ WADMIN . 'images' . DS . 'acajoom_slog_pro.png'] = '1.1.4';
$localVersion[ WADMIN . 'images' . DS . 'acajoom.jpg'] = '1.0.7';
$localVersion[ WADMIN . 'images' . DS . 'button_cancel.gif'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'button_cancel.png'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'button_ok.png'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'cron.gif'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'dot.png'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'general.gif'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'index.html'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'none_back.gif'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'status_g.png'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'status_r.png'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'status_y.png'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'upgrade.gif'] = '1.0.0';
$localVersion[ WADMIN . 'images' . DS . 'warning.png'] = '1.0.0';
$localVersion[ WFRONT . 'acajoom.html.php'] = '1.2.3';
$localVersion[ WFRONT . 'acajoom.php'] = '1.2.3';
$localVersion[ WFRONT . 'defines.php'] = '1.1.4';
$localVersion[ WFRONT . 'sef_ext.php'] = '1.2.3';
$localVersion[ WFRONT . 'index.html'] = '1.0.0';
$localVersion[ WFRONT . 'css' . DS . 'acajoom.css'] = '1.0.7';
$localVersion[ WFRONT . 'css' . DS . 'index.html'] = '1.0.0';
$localVersion[ WFRONT . 'upload' . DS . 'index.html'] = '1.0.3';
$localVersion[ WFRONT . 'images' . DS . 'addedit.png'] = '1.0.0';
$localVersion[ WFRONT . 'images' . DS . 'delete_f2.png'] = '1.0.0';
$localVersion[ WFRONT . 'images' . DS . 'edit_f2.png'] = '1.0.0';
$localVersion[ WFRONT . 'images' . DS . 'folder_add_f2.png'] = '1.0.0';
$localVersion[ WFRONT . 'images' . DS . 'move_f2.png'] = '1.0.0';
$localVersion[ WFRONT . 'images' . DS . 'new_f2.png'] = '1.0.0';
$localVersion[ WFRONT . 'images' . DS . 'acajoom_cron.jpg'] = '1.1.4';
$localVersion[ WFRONT . 'images' . DS . 'index.html'] = '1.0.0';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'tpl0_abovefooter.jpg'] = '1.1.0';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'tpl0_powered_by.gif'] = '1.1.0';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'tpl0_spacer.gif'] = '1.1.0';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'tpl0_top_header.jpg'] = '1.1.0';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'tpl0_underban.jpg'] = '1.1.0';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'default.html'] = '1.2.8';
$localVersion[ WFRONT . 'templates' . DS . 'default' . DS . 'index.html'] = '1.1.0';
$localVersion[ WFRONT . 'templates' . DS . 'index.html'] = '1.1.0';
$localVersion['mambots' . DS . 'acajoom' . DS . 'acajoombot.php'] = '1.2.3';
$localVersion['mambots' . DS . 'acajoom' . DS . 'acajoombot.xml'] = '1.2.3';
$localVersion['mambots' . DS . 'acajoom' . DS . 'index.html'] = '1.0.0';
$localVersion['modules' . DS . 'mod_acajoom.php'] = '1.1.0';
$localVersion['modules' . DS . 'mod_acajoom.xml'] = '1.1.1';
$localVersion['components' . DS . 'com_comprofiler' . DS . 'plugin' . DS . 'user' . DS . 'plug_acajoomcbplugin' . DS . 'acajoom_cb.php'] = '1.2.3';
$localVersion['components' . DS . 'com_comprofiler' . DS . 'plugin' . DS . 'user' . DS . 'plug_acajoomcbplugin' . DS . 'acajoom_cb.xml'] = '1.2.3';
$localVersion['components' . DS . 'com_comprofiler' . DS . 'plugin' . DS . 'user' . DS . 'plug_acajoomcbplugin' . DS . 'index.html'] = '1.0.3';
