<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "toctoc_comments".
 *
 * Auto generated 01-06-2014 11:48
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'AJAX Social Network Components',
	'description' => 'AJAX-based commenting and rating system (jQuery) for TYPO3 4.3 to 6.2. Works with TemplaVoila, tt_news, tt_products, community, cwt_community and many other extensions. 
		Comments can have webpage previews, pictures and pdfs attached. You can use BB-Codes, emojis and smilies. 
		More plugin-modes for comments are available, a recent comments list and a report bad comment form and several charts. 
		Three looks for ratings by voting stars and facebook-like iLikes, usage of scopes for categorizing ratings. 
		For ratings there is a plugin-mode for top ratings. Many options for spam-protection. AJAX runs with jQuery. 
		Comments or ratings can trigger records in other extensions DETAIL-views and LIST-views (LIST-view tt_news only, modify all other pi1-extensions in PHP and implement a new marker for comments and ratings in LIST-views).
		Includes full featured AJAX Login and Sign Up, including login with facebook account.
		The extension allows sharing as well and is extremely configurable.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '5.2.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_toctoccomments/temp, uploads/tx_toctoccomments/webpagepreview, uploads/tx_felogin',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Gisele Wendl',
	'author_email' => 'gisele.wendl@toctoc.ch',
	'author_company' => 'TocToc Internetmanagement',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-6.2.99',
			'php' => '5.2.0-5.4.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:604:{s:9:"ChangeLog";s:4:"bbc1";s:30:"class.toctoc_comments_ajax.php";s:4:"bf15";s:29:"class.toctoc_comments_api.php";s:4:"c53b";s:29:"class.toctoc_comments_eID.php";s:4:"b10d";s:41:"class.user_toctoc_comments_cms_layout.php";s:4:"8d95";s:38:"class.user_toctoc_comments_tcemain.php";s:4:"b669";s:37:"class.user_toctoc_comments_ttnews.php";s:4:"9019";s:16:"ext_autoload.php";s:4:"4cf7";s:21:"ext_conf_template.txt";s:4:"3be4";s:12:"ext_icon.gif";s:4:"cb51";s:17:"ext_localconf.php";s:4:"9b4f";s:14:"ext_tables.php";s:4:"03bb";s:14:"ext_tables.sql";s:4:"9d32";s:25:"ext_tables_static+adt.sql";s:4:"7fc9";s:22:"flexform_functions.php";s:4:"37a9";s:27:"icon_tx_toctoc_comments.gif";s:4:"0634";s:38:"icon_tx_toctoc_comments_attachment.gif";s:4:"8e68";s:37:"icon_tx_toctoc_comments_feuser_mm.gif";s:4:"b806";s:38:"icon_tx_toctoc_comments_ipbl_local.gif";s:4:"ff1e";s:39:"icon_tx_toctoc_comments_ipbl_static.gif";s:4:"737e";s:40:"icon_tx_toctoc_comments_not_approved.gif";s:4:"7b2a";s:41:"icon_tx_toctoc_comments_prefixtotable.gif";s:4:"6054";s:40:"icon_tx_toctoc_comments_ratings_data.gif";s:4:"4ab9";s:41:"icon_tx_toctoc_comments_ratings_iplog.gif";s:4:"5127";s:41:"icon_tx_toctoc_comments_ratings_scope.gif";s:4:"9e49";s:37:"icon_tx_toctoc_comments_spamwords.gif";s:4:"3ae0";s:34:"icon_tx_toctoc_comments_urllog.gif";s:4:"2555";s:32:"icon_tx_toctoc_comments_user.gif";s:4:"b806";s:32:"icon_tx_toctoc_ratings_scope.gif";s:4:"9e49";s:18:"locallang_ajax.xml";s:4:"71f5";s:17:"locallang_csh.xml";s:4:"9fc6";s:16:"locallang_db.xml";s:4:"bc82";s:17:"locallang_eID.xml";s:4:"5e6a";s:19:"locallang_hooks.xml";s:4:"7027";s:7:"tca.php";s:4:"3351";s:27:"Classes/help_ViewHelper.txt";s:4:"4972";s:60:"Classes/ViewHelpers/Social/TocTocCommentsCountViewHelper.php";s:4:"1901";s:55:"Classes/ViewHelpers/Social/TocTocCommentsViewHelper.php";s:4:"c4ff";s:15:"csh/captcha.png";s:4:"41a5";s:14:"doc/manual.pdf";s:4:"fc39";s:14:"doc/manual.sxw";s:4:"21a3";s:13:"mod1/conf.php";s:4:"c1da";s:14:"mod1/index.php";s:4:"0e44";s:18:"mod1/locallang.xml";s:4:"d670";s:22:"mod1/locallang_mod.xml";s:4:"4a0d";s:19:"mod1/moduleicon.gif";s:4:"3228";s:14:"pi1/ce_wiz.gif";s:4:"cee6";s:46:"pi1/class.toctoc_comments_attachmentupload.php";s:4:"e1b5";s:36:"pi1/class.toctoc_comments_charts.php";s:4:"611d";s:43:"pi1/class.toctoc_comments_commentreport.php";s:4:"8dcb";s:36:"pi1/class.toctoc_comments_common.php";s:4:"dbc6";s:35:"pi1/class.toctoc_comments_emoji.php";s:4:"716a";s:44:"pi1/class.toctoc_comments_emoji_language.php";s:4:"590f";s:33:"pi1/class.toctoc_comments_pi1.php";s:4:"cd7f";s:44:"pi1/class.toctoc_comments_recentcomments.php";s:4:"e801";s:45:"pi1/class.toctoc_comments_seostats.google.php";s:4:"56ad";s:38:"pi1/class.toctoc_comments_seostats.php";s:4:"1994";s:44:"pi1/class.toctoc_comments_webpagepreview.php";s:4:"d990";s:49:"pi1/class.toctoc_comments_webpagepreview_ajax.php";s:4:"7154";s:46:"pi1/class.user_toctoc_comments_pi1_wizicon.php";s:4:"c3e7";s:13:"pi1/clear.gif";s:4:"cc11";s:19:"pi1/flexform_ds.xml";s:4:"4077";s:28:"pi1/flexform_ds_advanced.xml";s:4:"0802";s:31:"pi1/flexform_ds_attachments.xml";s:4:"5f96";s:27:"pi1/flexform_ds_general.xml";s:4:"9dd4";s:27:"pi1/flexform_ds_ratings.xml";s:4:"0cfd";s:31:"pi1/flexform_ds_spamprotect.xml";s:4:"f2db";s:17:"pi1/locallang.xml";s:4:"8b45";s:21:"pi1/locallang_csh.xml";s:4:"04cc";s:26:"pi1/toctoc_comment_lib.php";s:4:"99ec";s:26:"pi1/fonts/Capture it 2.ttf";s:4:"1d78";s:19:"pi1/fonts/Molot.otf";s:4:"41fd";s:27:"pi1/fonts/recaptchaFont.ttf";s:4:"1561";s:29:"pi1/fonts/Walkway rounded.ttf";s:4:"e83d";s:21:"pi2/base_facebook.php";s:4:"fdc4";s:16:"pi2/channel.html";s:4:"c7d9";s:41:"pi2/class.toctoc_comments_felogin_pi1.php";s:4:"2458";s:16:"pi2/facebook.php";s:4:"f1ed";s:26:"pi2/fb_ca_chain_bundle.crt";s:4:"c429";s:17:"pi2/locallang.xml";s:4:"3ce1";s:20:"res/css/bemodule.css";s:4:"73f3";s:21:"res/css/tx-tc-520.css";s:4:"08b6";s:30:"res/css/boxmodels/boxmodel.txt";s:4:"6f97";s:37:"res/css/boxmodels/boxmodel_koogle.txt";s:4:"fc27";s:37:"res/css/boxmodels/boxmodel_tisqus.txt";s:4:"d488";s:46:"res/css/boxmodels/boxmodel_windows_minimal.txt";s:4:"b361";s:49:"res/css/boxmodels/boxmodel_windows_shortlikes.txt";s:4:"dd86";s:47:"res/css/boxmodels/boxmodel_windows_standard.txt";s:4:"403b";s:44:"res/css/boxmodels/system/boxmodel_system.txt";s:4:"2019";s:23:"res/css/emoji/edot0.png";s:4:"ac62";s:23:"res/css/emoji/edot1.png";s:4:"0850";s:25:"res/css/emoji/emoji16.css";s:4:"b2bb";s:25:"res/css/emoji/emoji16.png";s:4:"e07d";s:25:"res/css/emoji/emoji20.css";s:4:"4937";s:25:"res/css/emoji/emoji20.png";s:4:"dd87";s:25:"res/css/emoji/emoji26.css";s:4:"c346";s:25:"res/css/emoji/emoji26.png";s:4:"af3d";s:25:"res/css/emoji/emoji33.css";s:4:"62db";s:25:"res/css/emoji/emoji33.png";s:4:"b624";s:26:"res/css/emoji/epage0-0.png";s:4:"a112";s:26:"res/css/emoji/epage0-1.png";s:4:"6b15";s:26:"res/css/emoji/epage0-2.png";s:4:"c911";s:26:"res/css/emoji/epage1-0.png";s:4:"af9d";s:26:"res/css/emoji/epage1-1.png";s:4:"925c";s:26:"res/css/emoji/epage1-2.png";s:4:"127e";s:26:"res/css/emoji/epage2-0.png";s:4:"58d8";s:26:"res/css/emoji/epage2-1.png";s:4:"cd22";s:26:"res/css/emoji/epage2-2.png";s:4:"169a";s:26:"res/css/emoji/epage3-0.png";s:4:"f20c";s:26:"res/css/emoji/epage3-1.png";s:4:"6bd9";s:26:"res/css/emoji/epage3-2.png";s:4:"18da";s:26:"res/css/emoji/epage4-0.png";s:4:"602a";s:26:"res/css/emoji/epage4-1.png";s:4:"4f03";s:26:"res/css/emoji/epage4-2.png";s:4:"09d8";s:26:"res/css/emoji/epage5-0.png";s:4:"1b13";s:26:"res/css/emoji/epage5-1.png";s:4:"b870";s:26:"res/css/emoji/epage5-2.png";s:4:"efd3";s:30:"res/css/emoji/png8/emoji16.png";s:4:"396e";s:30:"res/css/emoji/png8/emoji20.png";s:4:"e585";s:30:"res/css/emoji/png8/emoji26.png";s:4:"a712";s:30:"res/css/emoji/png8/emoji33.png";s:4:"5568";s:33:"res/css/flowplayer/functional.css";s:4:"c595";s:32:"res/css/flowplayer/img/black.png";s:4:"77d3";s:35:"res/css/flowplayer/img/black@x2.png";s:4:"83fb";s:37:"res/css/flowplayer/img/play_black.png";s:4:"f785";s:40:"res/css/flowplayer/img/play_black@x2.png";s:4:"37ac";s:37:"res/css/flowplayer/img/play_white.png";s:4:"417e";s:40:"res/css/flowplayer/img/play_white@x2.png";s:4:"0fea";s:40:"res/css/flowplayer/img/playful_black.png";s:4:"eb51";s:43:"res/css/flowplayer/img/playful_black@x2.png";s:4:"5432";s:40:"res/css/flowplayer/img/playful_white.png";s:4:"0aa9";s:43:"res/css/flowplayer/img/playful_white@x2.png";s:4:"4539";s:32:"res/css/flowplayer/img/white.png";s:4:"f628";s:35:"res/css/flowplayer/img/white@x2.png";s:4:"9219";s:28:"res/css/temp/tx-tc-dummy.txt";s:4:"d41d";s:30:"res/css/themes/black/theme.txt";s:4:"fca9";s:37:"res/css/themes/black/img/adobepdf.png";s:4:"6113";s:32:"res/css/themes/black/img/asc.gif";s:4:"1baf";s:32:"res/css/themes/black/img/bbs.png";s:4:"c2e3";s:31:"res/css/themes/black/img/bg.gif";s:4:"6dd0";s:35:"res/css/themes/black/img/bgrank.png";s:4:"8bce";s:34:"res/css/themes/black/img/black.png";s:4:"f7e9";s:43:"res/css/themes/black/img/ceditcommentfe.png";s:4:"9fd8";s:34:"res/css/themes/black/img/close.png";s:4:"08d5";s:38:"res/css/themes/black/img/closehuge.png";s:4:"454e";s:37:"res/css/themes/black/img/closejqt.png";s:4:"6347";s:37:"res/css/themes/black/img/closesml.png";s:4:"5db7";s:46:"res/css/themes/black/img/commenting-closed.gif";s:4:"05ac";s:44:"res/css/themes/black/img/deletecommentfe.png";s:4:"b7c1";s:46:"res/css/themes/black/img/denotifycommentfe.png";s:4:"c266";s:33:"res/css/themes/black/img/desc.gif";s:4:"04f1";s:42:"res/css/themes/black/img/editcommentfe.png";s:4:"1dcf";s:42:"res/css/themes/black/img/emojiselector.png";s:4:"3e32";s:42:"res/css/themes/black/img/icon_activity.png";s:4:"15f5";s:45:"res/css/themes/black/img/icon_commentsoff.png";s:4:"5295";s:44:"res/css/themes/black/img/icon_commentson.png";s:4:"213f";s:39:"res/css/themes/black/img/icon_views.png";s:4:"db3c";s:37:"res/css/themes/black/img/idislike.png";s:4:"203e";s:42:"res/css/themes/black/img/idislikemaybe.png";s:4:"4f62";s:34:"res/css/themes/black/img/ilike.png";s:4:"360e";s:39:"res/css/themes/black/img/ilikemaybe.png";s:4:"9044";s:34:"res/css/themes/black/img/logon.gif";s:4:"1f66";s:33:"res/css/themes/black/img/next.png";s:4:"af4d";s:38:"res/css/themes/black/img/nopreview.png";s:4:"26fb";s:41:"res/css/themes/black/img/nopreviewpic.png";s:4:"d830";s:37:"res/css/themes/black/img/play_vid.png";s:4:"adb7";s:33:"res/css/themes/black/img/prev.png";s:4:"5390";s:38:"res/css/themes/black/img/previewct.png";s:4:"c73f";s:36:"res/css/themes/black/img/profile.png";s:4:"96f8";s:37:"res/css/themes/black/img/profilef.png";s:4:"c179";s:36:"res/css/themes/black/img/rclogos.jpg";s:4:"e687";s:38:"res/css/themes/black/img/rcrefresh.jpg";s:4:"74a8";s:36:"res/css/themes/black/img/refresh.png";s:4:"df69";s:35:"res/css/themes/black/img/report.png";s:4:"c38d";s:40:"res/css/themes/black/img/savecomment.png";s:4:"8f65";s:39:"res/css/themes/black/img/tccollapse.png";s:4:"5f81";s:37:"res/css/themes/black/img/tcexpand.png";s:4:"fb4f";s:37:"res/css/themes/black/img/tiparrow.png";s:4:"58bd";s:35:"res/css/themes/black/img/tipemo.png";s:4:"3f3e";s:58:"res/css/themes/black/img/toctoc_comments_myrating_star.png";s:4:"903b";s:57:"res/css/themes/black/img/toctoc_comments_rating_stars.png";s:4:"8d60";s:38:"res/css/themes/black/img/uccontact.png";s:4:"8252";s:33:"res/css/themes/black/img/ucip.png";s:4:"87b4";s:36:"res/css/themes/black/img/ucstats.png";s:4:"837d";s:38:"res/css/themes/black/img/uploadpdf.png";s:4:"ca92";s:38:"res/css/themes/black/img/uploadpic.png";s:4:"312e";s:37:"res/css/themes/black/img/usericon.gif";s:4:"0bef";s:36:"res/css/themes/black/img/white90.png";s:4:"16f0";s:42:"res/css/themes/black/img/workingslides.gif";s:4:"707d";s:32:"res/css/themes/default/theme.txt";s:4:"e5b5";s:46:"res/css/themes/default/css/tx-tc-520-theme.css";s:4:"2090";s:39:"res/css/themes/default/img/adobepdf.png";s:4:"6113";s:34:"res/css/themes/default/img/asc.gif";s:4:"1baf";s:34:"res/css/themes/default/img/bbs.png";s:4:"a793";s:33:"res/css/themes/default/img/bg.gif";s:4:"6dd0";s:37:"res/css/themes/default/img/bgrank.png";s:4:"727d";s:36:"res/css/themes/default/img/black.png";s:4:"514a";s:45:"res/css/themes/default/img/ceditcommentfe.png";s:4:"9fd8";s:36:"res/css/themes/default/img/close.png";s:4:"3847";s:40:"res/css/themes/default/img/closehuge.png";s:4:"454e";s:39:"res/css/themes/default/img/closejqt.png";s:4:"1e5e";s:39:"res/css/themes/default/img/closesml.png";s:4:"4551";s:48:"res/css/themes/default/img/commenting-closed.gif";s:4:"05ac";s:46:"res/css/themes/default/img/deletecommentfe.png";s:4:"c32e";s:48:"res/css/themes/default/img/denotifycommentfe.png";s:4:"ab05";s:35:"res/css/themes/default/img/desc.gif";s:4:"04f1";s:44:"res/css/themes/default/img/editcommentfe.png";s:4:"8e3e";s:44:"res/css/themes/default/img/emojiselector.png";s:4:"0322";s:44:"res/css/themes/default/img/icon_activity.png";s:4:"2711";s:47:"res/css/themes/default/img/icon_commentsoff.png";s:4:"a49d";s:46:"res/css/themes/default/img/icon_commentson.png";s:4:"abf5";s:41:"res/css/themes/default/img/icon_views.png";s:4:"6950";s:39:"res/css/themes/default/img/idislike.png";s:4:"203e";s:44:"res/css/themes/default/img/idislikemaybe.png";s:4:"4f62";s:36:"res/css/themes/default/img/ilike.png";s:4:"360e";s:41:"res/css/themes/default/img/ilikemaybe.png";s:4:"9044";s:36:"res/css/themes/default/img/logon.gif";s:4:"9d07";s:35:"res/css/themes/default/img/next.png";s:4:"af4d";s:40:"res/css/themes/default/img/nopreview.png";s:4:"26fb";s:43:"res/css/themes/default/img/nopreviewpic.png";s:4:"a09f";s:39:"res/css/themes/default/img/play_vid.png";s:4:"adb7";s:35:"res/css/themes/default/img/prev.png";s:4:"5390";s:40:"res/css/themes/default/img/previewct.png";s:4:"cd1c";s:38:"res/css/themes/default/img/profile.png";s:4:"da02";s:39:"res/css/themes/default/img/profilef.png";s:4:"cdd8";s:38:"res/css/themes/default/img/rclogos.jpg";s:4:"5a58";s:40:"res/css/themes/default/img/rcrefresh.jpg";s:4:"57a6";s:38:"res/css/themes/default/img/refresh.png";s:4:"5af8";s:37:"res/css/themes/default/img/report.png";s:4:"6454";s:42:"res/css/themes/default/img/savecomment.png";s:4:"9b42";s:41:"res/css/themes/default/img/tccollapse.png";s:4:"5f81";s:39:"res/css/themes/default/img/tcexpand.png";s:4:"fb4f";s:39:"res/css/themes/default/img/tiparrow.png";s:4:"abc6";s:37:"res/css/themes/default/img/tipemo.png";s:4:"c1e6";s:60:"res/css/themes/default/img/toctoc_comments_myrating_star.png";s:4:"468e";s:59:"res/css/themes/default/img/toctoc_comments_rating_stars.png";s:4:"499d";s:40:"res/css/themes/default/img/uccontact.png";s:4:"8252";s:35:"res/css/themes/default/img/ucip.png";s:4:"87b4";s:38:"res/css/themes/default/img/ucstats.png";s:4:"837d";s:40:"res/css/themes/default/img/uploadpdf.png";s:4:"ca92";s:40:"res/css/themes/default/img/uploadpic.png";s:4:"312e";s:39:"res/css/themes/default/img/usericon.gif";s:4:"0bef";s:38:"res/css/themes/default/img/white90.png";s:4:"746e";s:44:"res/css/themes/default/img/workingslides.gif";s:4:"707d";s:31:"res/css/themes/koogle/theme.txt";s:4:"4569";s:38:"res/css/themes/koogle/img/adobepdf.png";s:4:"6113";s:33:"res/css/themes/koogle/img/asc.gif";s:4:"1baf";s:33:"res/css/themes/koogle/img/bbs.png";s:4:"a793";s:32:"res/css/themes/koogle/img/bg.gif";s:4:"6dd0";s:36:"res/css/themes/koogle/img/bgrank.png";s:4:"0716";s:35:"res/css/themes/koogle/img/black.png";s:4:"514a";s:44:"res/css/themes/koogle/img/ceditcommentfe.png";s:4:"9fd8";s:35:"res/css/themes/koogle/img/close.png";s:4:"3847";s:39:"res/css/themes/koogle/img/closehuge.png";s:4:"454e";s:38:"res/css/themes/koogle/img/closejqt.png";s:4:"1e5e";s:38:"res/css/themes/koogle/img/closesml.png";s:4:"4551";s:47:"res/css/themes/koogle/img/commenting-closed.gif";s:4:"05ac";s:45:"res/css/themes/koogle/img/deletecommentfe.png";s:4:"c32e";s:47:"res/css/themes/koogle/img/denotifycommentfe.png";s:4:"ab05";s:34:"res/css/themes/koogle/img/desc.gif";s:4:"04f1";s:43:"res/css/themes/koogle/img/editcommentfe.png";s:4:"8e3e";s:43:"res/css/themes/koogle/img/emojiselector.png";s:4:"0322";s:43:"res/css/themes/koogle/img/icon_activity.png";s:4:"5660";s:46:"res/css/themes/koogle/img/icon_commentsoff.png";s:4:"9ebd";s:45:"res/css/themes/koogle/img/icon_commentson.png";s:4:"96c0";s:40:"res/css/themes/koogle/img/icon_views.png";s:4:"9ae6";s:38:"res/css/themes/koogle/img/idislike.png";s:4:"0782";s:43:"res/css/themes/koogle/img/idislikemaybe.png";s:4:"1e70";s:35:"res/css/themes/koogle/img/ilike.png";s:4:"cabf";s:40:"res/css/themes/koogle/img/ilikemaybe.png";s:4:"87d9";s:35:"res/css/themes/koogle/img/logon.gif";s:4:"2be5";s:34:"res/css/themes/koogle/img/next.png";s:4:"af4d";s:39:"res/css/themes/koogle/img/nopreview.png";s:4:"26fb";s:42:"res/css/themes/koogle/img/nopreviewpic.png";s:4:"a09f";s:38:"res/css/themes/koogle/img/play_vid.png";s:4:"5140";s:34:"res/css/themes/koogle/img/prev.png";s:4:"5390";s:39:"res/css/themes/koogle/img/previewct.png";s:4:"cd1c";s:37:"res/css/themes/koogle/img/profile.png";s:4:"7ca1";s:38:"res/css/themes/koogle/img/profilef.png";s:4:"ec78";s:37:"res/css/themes/koogle/img/rclogos.jpg";s:4:"5a58";s:39:"res/css/themes/koogle/img/rcrefresh.jpg";s:4:"57a6";s:37:"res/css/themes/koogle/img/refresh.png";s:4:"5af8";s:36:"res/css/themes/koogle/img/report.png";s:4:"5288";s:41:"res/css/themes/koogle/img/savecomment.png";s:4:"9b42";s:36:"res/css/themes/koogle/img/stream.png";s:4:"e7d9";s:40:"res/css/themes/koogle/img/tccollapse.png";s:4:"5f81";s:38:"res/css/themes/koogle/img/tcexpand.png";s:4:"fb4f";s:38:"res/css/themes/koogle/img/tiparrow.png";s:4:"abc6";s:36:"res/css/themes/koogle/img/tipemo.png";s:4:"d37e";s:59:"res/css/themes/koogle/img/toctoc_comments_myrating_star.png";s:4:"c9f8";s:58:"res/css/themes/koogle/img/toctoc_comments_rating_stars.png";s:4:"0fe1";s:39:"res/css/themes/koogle/img/uccontact.png";s:4:"8252";s:34:"res/css/themes/koogle/img/ucip.png";s:4:"87b4";s:37:"res/css/themes/koogle/img/ucstats.png";s:4:"837d";s:39:"res/css/themes/koogle/img/uploadpdf.png";s:4:"ca92";s:39:"res/css/themes/koogle/img/uploadpic.png";s:4:"312e";s:38:"res/css/themes/koogle/img/usericon.gif";s:4:"0bef";s:37:"res/css/themes/koogle/img/white90.png";s:4:"746e";s:43:"res/css/themes/koogle/img/workingslides.gif";s:4:"707d";s:28:"res/css/themes/red/theme.txt";s:4:"7bbe";s:35:"res/css/themes/red/img/adobepdf.png";s:4:"6113";s:30:"res/css/themes/red/img/asc.gif";s:4:"1baf";s:30:"res/css/themes/red/img/bbs.png";s:4:"f88e";s:29:"res/css/themes/red/img/bg.gif";s:4:"6dd0";s:33:"res/css/themes/red/img/bgrank.png";s:4:"386c";s:32:"res/css/themes/red/img/black.png";s:4:"a68c";s:41:"res/css/themes/red/img/ceditcommentfe.png";s:4:"9fd8";s:32:"res/css/themes/red/img/close.png";s:4:"7e24";s:36:"res/css/themes/red/img/closehuge.png";s:4:"454e";s:35:"res/css/themes/red/img/closejqt.png";s:4:"acd9";s:35:"res/css/themes/red/img/closesml.png";s:4:"77ff";s:44:"res/css/themes/red/img/commenting-closed.gif";s:4:"05ac";s:42:"res/css/themes/red/img/deletecommentfe.png";s:4:"b7c1";s:44:"res/css/themes/red/img/denotifycommentfe.png";s:4:"c266";s:31:"res/css/themes/red/img/desc.gif";s:4:"04f1";s:40:"res/css/themes/red/img/editcommentfe.png";s:4:"1dcf";s:40:"res/css/themes/red/img/emojiselector.png";s:4:"0322";s:40:"res/css/themes/red/img/icon_activity.png";s:4:"c890";s:43:"res/css/themes/red/img/icon_commentsoff.png";s:4:"c32c";s:42:"res/css/themes/red/img/icon_commentson.png";s:4:"c0c4";s:37:"res/css/themes/red/img/icon_views.png";s:4:"ba22";s:35:"res/css/themes/red/img/idislike.png";s:4:"bcfb";s:40:"res/css/themes/red/img/idislikemaybe.png";s:4:"4f62";s:32:"res/css/themes/red/img/ilike.png";s:4:"360e";s:37:"res/css/themes/red/img/ilikemaybe.png";s:4:"9044";s:32:"res/css/themes/red/img/logon.gif";s:4:"566f";s:31:"res/css/themes/red/img/next.png";s:4:"af4d";s:36:"res/css/themes/red/img/nopreview.png";s:4:"26fb";s:39:"res/css/themes/red/img/nopreviewpic.png";s:4:"d830";s:35:"res/css/themes/red/img/play_vid.png";s:4:"8f79";s:31:"res/css/themes/red/img/prev.png";s:4:"5390";s:36:"res/css/themes/red/img/previewct.png";s:4:"b109";s:34:"res/css/themes/red/img/profile.png";s:4:"76b1";s:35:"res/css/themes/red/img/profilef.png";s:4:"10dc";s:34:"res/css/themes/red/img/rclogos.jpg";s:4:"6e3d";s:36:"res/css/themes/red/img/rcrefresh.jpg";s:4:"2763";s:34:"res/css/themes/red/img/refresh.png";s:4:"d786";s:33:"res/css/themes/red/img/report.png";s:4:"c38d";s:38:"res/css/themes/red/img/savecomment.png";s:4:"8f65";s:37:"res/css/themes/red/img/tccollapse.png";s:4:"5f81";s:35:"res/css/themes/red/img/tcexpand.png";s:4:"fb4f";s:35:"res/css/themes/red/img/tiparrow.png";s:4:"e185";s:33:"res/css/themes/red/img/tipemo.png";s:4:"0743";s:56:"res/css/themes/red/img/toctoc_comments_myrating_star.png";s:4:"dda4";s:55:"res/css/themes/red/img/toctoc_comments_rating_stars.png";s:4:"896a";s:36:"res/css/themes/red/img/uccontact.png";s:4:"8252";s:31:"res/css/themes/red/img/ucip.png";s:4:"87b4";s:34:"res/css/themes/red/img/ucstats.png";s:4:"837d";s:36:"res/css/themes/red/img/uploadpdf.png";s:4:"ca92";s:36:"res/css/themes/red/img/uploadpic.png";s:4:"312e";s:35:"res/css/themes/red/img/usericon.gif";s:4:"0bef";s:34:"res/css/themes/red/img/white90.png";s:4:"b0b9";s:40:"res/css/themes/red/img/workingslides.gif";s:4:"707d";s:31:"res/css/themes/tisqus/theme.txt";s:4:"8c86";s:38:"res/css/themes/tisqus/img/adobepdf.png";s:4:"6113";s:33:"res/css/themes/tisqus/img/asc.gif";s:4:"1baf";s:33:"res/css/themes/tisqus/img/bbs.png";s:4:"a793";s:32:"res/css/themes/tisqus/img/bg.gif";s:4:"6dd0";s:36:"res/css/themes/tisqus/img/bgrank.png";s:4:"0716";s:35:"res/css/themes/tisqus/img/black.png";s:4:"514a";s:44:"res/css/themes/tisqus/img/ceditcommentfe.png";s:4:"9fd8";s:35:"res/css/themes/tisqus/img/close.png";s:4:"3847";s:39:"res/css/themes/tisqus/img/closehuge.png";s:4:"454e";s:38:"res/css/themes/tisqus/img/closejqt.png";s:4:"1e5e";s:38:"res/css/themes/tisqus/img/closesml.png";s:4:"4551";s:47:"res/css/themes/tisqus/img/commenting-closed.gif";s:4:"05ac";s:45:"res/css/themes/tisqus/img/deletecommentfe.png";s:4:"c32e";s:47:"res/css/themes/tisqus/img/denotifycommentfe.png";s:4:"ab05";s:34:"res/css/themes/tisqus/img/desc.gif";s:4:"04f1";s:43:"res/css/themes/tisqus/img/editcommentfe.png";s:4:"8e3e";s:43:"res/css/themes/tisqus/img/emojiselector.png";s:4:"0322";s:43:"res/css/themes/tisqus/img/icon_activity.png";s:4:"1488";s:46:"res/css/themes/tisqus/img/icon_commentsoff.png";s:4:"d3d3";s:45:"res/css/themes/tisqus/img/icon_commentson.png";s:4:"abf5";s:40:"res/css/themes/tisqus/img/icon_views.png";s:4:"a29d";s:38:"res/css/themes/tisqus/img/idislike.png";s:4:"0c01";s:43:"res/css/themes/tisqus/img/idislikemaybe.png";s:4:"1237";s:35:"res/css/themes/tisqus/img/ilike.png";s:4:"1d1f";s:40:"res/css/themes/tisqus/img/ilikemaybe.png";s:4:"4d81";s:35:"res/css/themes/tisqus/img/logon.gif";s:4:"9cf8";s:41:"res/css/themes/tisqus/img/next-sprite.png";s:4:"be4c";s:34:"res/css/themes/tisqus/img/next.png";s:4:"af4d";s:39:"res/css/themes/tisqus/img/nopreview.png";s:4:"26fb";s:42:"res/css/themes/tisqus/img/nopreviewpic.png";s:4:"a09f";s:38:"res/css/themes/tisqus/img/play_vid.png";s:4:"adb7";s:34:"res/css/themes/tisqus/img/prev.png";s:4:"5390";s:39:"res/css/themes/tisqus/img/previewct.png";s:4:"cd1c";s:37:"res/css/themes/tisqus/img/profile.png";s:4:"da02";s:38:"res/css/themes/tisqus/img/profilef.png";s:4:"cdd8";s:37:"res/css/themes/tisqus/img/rclogos.jpg";s:4:"5a58";s:39:"res/css/themes/tisqus/img/rcrefresh.jpg";s:4:"57a6";s:37:"res/css/themes/tisqus/img/refresh.png";s:4:"5af8";s:36:"res/css/themes/tisqus/img/report.png";s:4:"c38d";s:41:"res/css/themes/tisqus/img/savecomment.png";s:4:"9b42";s:40:"res/css/themes/tisqus/img/tccollapse.png";s:4:"5f81";s:38:"res/css/themes/tisqus/img/tcexpand.png";s:4:"fb4f";s:38:"res/css/themes/tisqus/img/tiparrow.png";s:4:"abc6";s:36:"res/css/themes/tisqus/img/tipemo.png";s:4:"0598";s:59:"res/css/themes/tisqus/img/toctoc_comments_myrating_star.png";s:4:"f87d";s:58:"res/css/themes/tisqus/img/toctoc_comments_rating_stars.png";s:4:"2e50";s:39:"res/css/themes/tisqus/img/uccontact.png";s:4:"8252";s:34:"res/css/themes/tisqus/img/ucip.png";s:4:"87b4";s:37:"res/css/themes/tisqus/img/ucstats.png";s:4:"837d";s:39:"res/css/themes/tisqus/img/uploadpdf.png";s:4:"ca92";s:39:"res/css/themes/tisqus/img/uploadpic.png";s:4:"312e";s:38:"res/css/themes/tisqus/img/usericon.gif";s:4:"0bef";s:37:"res/css/themes/tisqus/img/white90.png";s:4:"746e";s:43:"res/css/themes/tisqus/img/workingslides.gif";s:4:"707d";s:32:"res/css/themes/windows/theme.txt";s:4:"0e08";s:39:"res/css/themes/windows/img/adobepdf.png";s:4:"483a";s:34:"res/css/themes/windows/img/asc.gif";s:4:"1baf";s:34:"res/css/themes/windows/img/bbs.png";s:4:"a793";s:33:"res/css/themes/windows/img/bg.gif";s:4:"6dd0";s:37:"res/css/themes/windows/img/bgrank.png";s:4:"727d";s:36:"res/css/themes/windows/img/black.png";s:4:"514a";s:45:"res/css/themes/windows/img/ceditcommentfe.png";s:4:"9fd8";s:36:"res/css/themes/windows/img/close.png";s:4:"8260";s:40:"res/css/themes/windows/img/closehuge.png";s:4:"454e";s:39:"res/css/themes/windows/img/closejqt.png";s:4:"3ba9";s:39:"res/css/themes/windows/img/closesml.png";s:4:"4551";s:48:"res/css/themes/windows/img/commenting-closed.gif";s:4:"05ac";s:46:"res/css/themes/windows/img/deletecommentfe.png";s:4:"2451";s:48:"res/css/themes/windows/img/denotifycommentfe.png";s:4:"ab05";s:35:"res/css/themes/windows/img/desc.gif";s:4:"04f1";s:44:"res/css/themes/windows/img/editcommentfe.png";s:4:"8e3e";s:44:"res/css/themes/windows/img/emojiselector.png";s:4:"0322";s:44:"res/css/themes/windows/img/icon_activity.png";s:4:"2c5d";s:47:"res/css/themes/windows/img/icon_commentsoff.png";s:4:"877b";s:46:"res/css/themes/windows/img/icon_commentson.png";s:4:"d5ae";s:41:"res/css/themes/windows/img/icon_views.png";s:4:"b176";s:39:"res/css/themes/windows/img/idislike.png";s:4:"e40e";s:44:"res/css/themes/windows/img/idislikemaybe.png";s:4:"554d";s:36:"res/css/themes/windows/img/ilike.png";s:4:"1ddc";s:41:"res/css/themes/windows/img/ilikemaybe.png";s:4:"df79";s:36:"res/css/themes/windows/img/logon.gif";s:4:"8332";s:35:"res/css/themes/windows/img/next.png";s:4:"af4d";s:40:"res/css/themes/windows/img/nopreview.png";s:4:"26fb";s:43:"res/css/themes/windows/img/nopreviewpic.png";s:4:"a09f";s:39:"res/css/themes/windows/img/play_vid.png";s:4:"adb7";s:35:"res/css/themes/windows/img/prev.png";s:4:"5390";s:40:"res/css/themes/windows/img/previewct.png";s:4:"cd1c";s:38:"res/css/themes/windows/img/profile.png";s:4:"da02";s:39:"res/css/themes/windows/img/profilef.png";s:4:"cdd8";s:38:"res/css/themes/windows/img/rclogos.jpg";s:4:"5a58";s:40:"res/css/themes/windows/img/rcrefresh.jpg";s:4:"57a6";s:38:"res/css/themes/windows/img/refresh.png";s:4:"0212";s:37:"res/css/themes/windows/img/report.png";s:4:"9fda";s:42:"res/css/themes/windows/img/savecomment.png";s:4:"039e";s:41:"res/css/themes/windows/img/tccollapse.png";s:4:"5fa4";s:39:"res/css/themes/windows/img/tcexpand.png";s:4:"6c45";s:39:"res/css/themes/windows/img/tiparrow.png";s:4:"72dc";s:37:"res/css/themes/windows/img/tipemo.png";s:4:"9713";s:60:"res/css/themes/windows/img/toctoc_comments_myrating_star.png";s:4:"1253";s:59:"res/css/themes/windows/img/toctoc_comments_rating_stars.png";s:4:"b868";s:40:"res/css/themes/windows/img/uccontact.png";s:4:"8252";s:35:"res/css/themes/windows/img/ucip.png";s:4:"87b4";s:38:"res/css/themes/windows/img/ucstats.png";s:4:"837d";s:40:"res/css/themes/windows/img/uploadpdf.png";s:4:"8057";s:40:"res/css/themes/windows/img/uploadpic.png";s:4:"32b1";s:39:"res/css/themes/windows/img/usericon.gif";s:4:"5fc9";s:38:"res/css/themes/windows/img/white90.png";s:4:"746e";s:44:"res/css/themes/windows/img/workingslides.gif";s:4:"707d";s:29:"res/css/themes/work/theme.txt";s:4:"7a7f";s:36:"res/css/themes/work/img/adobepdf.png";s:4:"6113";s:31:"res/css/themes/work/img/asc.gif";s:4:"1baf";s:31:"res/css/themes/work/img/bbs.png";s:4:"a793";s:30:"res/css/themes/work/img/bg.gif";s:4:"6dd0";s:33:"res/css/themes/work/img/black.png";s:4:"514a";s:42:"res/css/themes/work/img/ceditcommentfe.png";s:4:"9fd8";s:33:"res/css/themes/work/img/close.png";s:4:"3847";s:37:"res/css/themes/work/img/closehuge.png";s:4:"454e";s:36:"res/css/themes/work/img/closejqt.png";s:4:"1e5e";s:36:"res/css/themes/work/img/closesml.png";s:4:"4551";s:45:"res/css/themes/work/img/commenting-closed.gif";s:4:"05ac";s:43:"res/css/themes/work/img/deletecommentfe.png";s:4:"c32e";s:45:"res/css/themes/work/img/denotifycommentfe.png";s:4:"ab05";s:32:"res/css/themes/work/img/desc.gif";s:4:"04f1";s:41:"res/css/themes/work/img/editcommentfe.png";s:4:"8e3e";s:41:"res/css/themes/work/img/emojiselector.png";s:4:"0322";s:36:"res/css/themes/work/img/idislike.png";s:4:"203e";s:41:"res/css/themes/work/img/idislikemaybe.png";s:4:"4f62";s:33:"res/css/themes/work/img/ilike.png";s:4:"360e";s:38:"res/css/themes/work/img/ilikemaybe.png";s:4:"9044";s:33:"res/css/themes/work/img/logon.gif";s:4:"c008";s:32:"res/css/themes/work/img/next.png";s:4:"af4d";s:37:"res/css/themes/work/img/nopreview.png";s:4:"26fb";s:40:"res/css/themes/work/img/nopreviewpic.png";s:4:"a09f";s:36:"res/css/themes/work/img/play_vid.png";s:4:"adb7";s:32:"res/css/themes/work/img/prev.png";s:4:"5390";s:37:"res/css/themes/work/img/previewct.png";s:4:"cd1c";s:35:"res/css/themes/work/img/profile.png";s:4:"da02";s:36:"res/css/themes/work/img/profilef.png";s:4:"cdd8";s:35:"res/css/themes/work/img/rclogos.jpg";s:4:"5a58";s:37:"res/css/themes/work/img/rcrefresh.jpg";s:4:"57a6";s:35:"res/css/themes/work/img/refresh.png";s:4:"5af8";s:34:"res/css/themes/work/img/report.png";s:4:"c38d";s:39:"res/css/themes/work/img/savecomment.png";s:4:"9b42";s:38:"res/css/themes/work/img/tccollapse.png";s:4:"5f81";s:36:"res/css/themes/work/img/tcexpand.png";s:4:"fb4f";s:36:"res/css/themes/work/img/tiparrow.png";s:4:"abc6";s:34:"res/css/themes/work/img/tipemo.png";s:4:"c1e6";s:57:"res/css/themes/work/img/toctoc_comments_myrating_star.png";s:4:"468e";s:56:"res/css/themes/work/img/toctoc_comments_rating_stars.png";s:4:"499d";s:37:"res/css/themes/work/img/uccontact.png";s:4:"8252";s:32:"res/css/themes/work/img/ucip.png";s:4:"87b4";s:35:"res/css/themes/work/img/ucstats.png";s:4:"837d";s:37:"res/css/themes/work/img/uploadpdf.png";s:4:"ca92";s:37:"res/css/themes/work/img/uploadpic.png";s:4:"312e";s:36:"res/css/themes/work/img/usericon.gif";s:4:"0bef";s:35:"res/css/themes/work/img/white90.png";s:4:"746e";s:41:"res/css/themes/work/img/workingslides.gif";s:4:"707d";s:29:"res/flowplayer/flowplayer.swf";s:4:"9783";s:15:"res/img/asc.gif";s:4:"1baf";s:14:"res/img/bg.gif";s:4:"6dd0";s:16:"res/img/desc.gif";s:4:"04f1";s:23:"res/img/pager/first.png";s:4:"5518";s:22:"res/img/pager/last.png";s:4:"055e";s:22:"res/img/pager/next.png";s:4:"6178";s:22:"res/img/pager/prev.png";s:4:"1448";s:24:"res/js/flowplayer.min.js";s:4:"044b";s:32:"res/js/jquery.elastic-1.6.min.js";s:4:"f8f9";s:16:"res/js/jquery.js";s:4:"65b3";s:30:"res/js/jquery.sharrre-1.3.5.js";s:4:"3059";s:28:"res/js/jquery.tablesorter.js";s:4:"ae4b";s:34:"res/js/jquery.tablesorter.pager.js";s:4:"df05";s:33:"res/js/jquery.toctoc.tools.min.js";s:4:"84a8";s:26:"res/js/jquery.tools.min.js";s:4:"34c2";s:43:"res/js/jquery.txtc-simplemodal.1.4.4.min.js";s:4:"e14a";s:26:"res/js/jquery.watermark.js";s:4:"7922";s:26:"res/js/js.uncompressed.zip";s:4:"6715";s:18:"res/js/sharrre.php";s:4:"02d0";s:19:"res/js/tx-tc-520.js";s:4:"14d6";s:23:"res/js/tx-tc-afl-520.js";s:4:"9799";s:23:"res/js/tx-tc-ftr-520.js";s:4:"3321";s:25:"res/js/tx-tc-premojify.js";s:4:"a4de";s:27:"res/js/temp/tx-tc-dummy.txt";s:4:"d41d";s:20:"res/smilie/angel.png";s:4:"b152";s:23:"res/smilie/confused.png";s:4:"55f2";s:18:"res/smilie/cry.png";s:4:"1b9e";s:24:"res/smilie/curlylips.png";s:4:"e589";s:20:"res/smilie/devil.png";s:4:"65af";s:20:"res/smilie/frown.png";s:4:"673b";s:21:"res/smilie/furrow.png";s:4:"86b4";s:19:"res/smilie/gasp.png";s:4:"66ca";s:21:"res/smilie/gisele.png";s:4:"ecb3";s:22:"res/smilie/glasses.png";s:4:"9604";s:19:"res/smilie/grin.png";s:4:"9ffd";s:21:"res/smilie/grumpy.png";s:4:"e1ac";s:20:"res/smilie/heart.png";s:4:"5a21";s:21:"res/smilie/jacque.png";s:4:"7947";s:19:"res/smilie/kiki.png";s:4:"a69b";s:19:"res/smilie/kiss.png";s:4:"06cc";s:21:"res/smilie/mohawk.png";s:4:"0c3f";s:19:"res/smilie/monk.png";s:4:"9238";s:23:"res/smilie/moreevil.png";s:4:"0f36";s:22:"res/smilie/oherrje.png";s:4:"c0f4";s:18:"res/smilie/omg.png";s:4:"9fc2";s:21:"res/smilie/pacman.png";s:4:"079c";s:22:"res/smilie/penguin.png";s:4:"745a";s:21:"res/smilie/putnam.png";s:4:"2541";s:20:"res/smilie/rasta.png";s:4:"23cb";s:20:"res/smilie/robot.png";s:4:"6a47";s:20:"res/smilie/saint.png";s:4:"4741";s:22:"res/smilie/serious.png";s:4:"efff";s:20:"res/smilie/shark.png";s:4:"7ded";s:20:"res/smilie/smile.png";s:4:"7e7e";s:21:"res/smilie/squint.png";s:4:"f5a5";s:25:"res/smilie/sunglasses.png";s:4:"5f4a";s:20:"res/smilie/thief.png";s:4:"bd62";s:21:"res/smilie/tongue.png";s:4:"bedf";s:24:"res/smilie/uncertain.png";s:4:"33a9";s:21:"res/smilie/unsure.png";s:4:"f7bb";s:20:"res/smilie/upset.png";s:4:"8ebc";s:19:"res/smilie/wink.png";s:4:"ca72";s:18:"res/smilie/wow.png";s:4:"2fa0";s:40:"res/template/toctoccomments_ratings.html";s:4:"247b";s:41:"res/template/toctoccomments_template.html";s:4:"0864";s:59:"res/template/toctoccomments_template_commentator_email.html";s:4:"f61f";s:57:"res/template/toctoccomments_template_commentatoremail.txt";s:4:"de9e";s:45:"res/template/toctoccomments_template_eid.html";s:4:"fc5b";s:47:"res/template/toctoccomments_template_email.html";s:4:"259c";s:46:"res/template/toctoccomments_template_email.txt";s:4:"1d9e";s:51:"res/template/toctoccomments_template_email_coi.html";s:4:"60ce";s:50:"res/template/toctoccomments_template_email_coi.txt";s:4:"7921";s:55:"res/template/toctoccomments_template_email_dislike.html";s:4:"d70c";s:53:"res/template/toctoccomments_template_emaildislike.txt";s:4:"7d18";s:50:"res/template/toctoccomments_template_emailinfo.txt";s:4:"5da2";s:53:"res/template/toctoccomments_template_felogin_pi1.html";s:4:"69f9";s:61:"res/template/toctoccomments_template_reportcomment_email.html";s:4:"365c";s:60:"res/template/toctoccomments_template_reportcomment_email.txt";s:4:"d155";s:35:"res/template/mailimg/pixeltrans.gif";s:4:"bf92";s:53:"res/template/mailimg/toctoc_comments_banner_admin.jpg";s:4:"ac38";s:52:"res/template/mailimg/toctoc_comments_banner_user.jpg";s:4:"abc8";s:45:"res/template/mailimg/toctoc_comments_logo.jpg";s:4:"0827";s:48:"res/template/mailimg/toctoc_comments_mailico.jpg";s:4:"571b";s:30:"resources/createstaticdata.php";s:4:"ef6b";s:30:"resources/createstaticdata.txt";s:4:"cf12";s:30:"resources/jquery-1.10.2.min.js";s:4:"6280";s:29:"resources/jquery.watermark.js";s:4:"75da";s:33:"resources/jquery.watermark.min.js";s:4:"ad60";s:44:"resources/original_ext_tables_static+adt.sql";s:4:"37fb";s:44:"resources/toctoc_comments_mod_extensions.txt";s:4:"cff1";s:20:"static/constants.txt";s:4:"bcc1";s:16:"static/setup.txt";s:4:"6e2c";}',
	'suggests' => array(
	),
);

?>