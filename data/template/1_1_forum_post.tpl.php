<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('post');
0
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/header.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_extra.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_body.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_attribute.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/seccheck.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_option.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/editor_menu.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/editor_menu_forum.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/footer.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/header_common.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/pubsearchform.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/editor.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1366797217, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo htmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo htmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2011 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_forum_post.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if($_G['setting']['homestatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(defined('CURMODULE') && ($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && (CURMODULE == 'index' || CURMODULE == 'forumdisplay' || CURMODULE == 'group')) { ?><?php echo $rsshead;?><?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { if($_G['basescript'] == 'forum' && empty($_G['disabledwidthauto']) && $_G['forum_widthauto']) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && (CURMODULE == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && (CURMODULE == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && (CURMODULE == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { include template('common/header_diy'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && !empty($_G['style']['tplfile']) && ($_G['group']['allowdiy'] || $_G['group']['allowaddtopic'] && $topic['uid'] == $_G['uid'] || $_G['group']['allowmanagetopic'])) { ?>
<a id="diy-tg" href="javascript:openDiy();" title="打开 DIY 面板" class="y"><img src="<?php echo STATICURL;?>image/diy/panel-toggle.png" alt="DIY" /></a>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } ?>

<div id="toptb" class="cl">
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if($_G['basescript'] == 'forum' && empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" onclick="widthauto(this)"><?php if(!$_G['forum_widthauto']) { ?>切换到宽版<?php } else { ?>切换到窄版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } if(CURMODULE != 'topic' && $_G['group']['allowdiy'] && !empty($_G['style']['tplfile']) || CURMODULE == 'topic' && !empty($_G['style']['tplfile']) && ($_G['group']['allowaddtopic'] && $topic['uid'] == $_G['uid'] || $_G['group']['allowmanagetopic'])) { ?>
<a id="diy-tg" href="javascript:openDiy();" title="打开 DIY 面板" class="xi1 xw1">DIY</a>
<?php } ?>
</div>
</div>
</div>

<?php if(!IS_ROBOT) { if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } ?>

<div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if($_G['uid']) { ?>
<ul><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } ?>
</div>
<?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
<div class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="./" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>

<?php if($_G['uid']) { ?>
<div id="um">
<div class="avt y"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a></div>
<p>
<strong class="vwmy<?php if($_G['setting']['connect']['allow'] && $_G['member']['conisbind']) { ?> qq<?php } ?>"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a></strong>
<?php if($_G['group']['allowinvisible']) { ?>
<span id="loginstatus">
<a id="loginstatusid" href="member.php?mod=switchstatus" title="切换在线状态" onclick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a>
</span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="home.php?mod=spacecp">设置</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>消息</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>提醒<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><span class="pipe">|</span><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">进行中的任务</a><?php } if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<span class="pipe">|</span><a href="admin.php" target="_blank">管理中心</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<p>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?><?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" id="extcreditmenu"<?php if(!$_G['setting']['bbclosed']) { ?> onmouseover="delayShow(this, showCreditmenu);" class="showmenu"<?php } ?>>积分: <?php echo $_G['member']['credits'];?></a>
<span class="pipe">|</span>用户组: <a href="home.php?mod=spacecp&amp;ac=usergroup"<?php if($upgradecredit !== 'false') { ?> id="g_upmine" class="xi2" onmouseover="delayShow(this, showUpgradeinfo)"<?php } ?>><?php echo $_G['group']['grouptitle'];?></a>
</p>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?php echo htmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">激活</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<?php } else { include template('member/login_simple'); } ?>
</div>

<div id="nv">
<a href="javascript:;" id="qmenu" onmouseover="showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});">快捷导航</a>
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
</div>
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div><?php echo adshow("subnavbanner/a_mu");?><?php if($_G['setting']['search']) { ?><?php $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" class="curtype">本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article"
EOF;
 if(CURSCRIPT == 'portal') { 
$slist[portal] .= <<<EOF
 class="curtype"
EOF;
 } 
$slist[portal] .= <<<EOF
>文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum"
EOF;
 if((CURSCRIPT == 'forum' && !$_G['fid']) || (CURSCRIPT == 'home' && in_array($do, array('thread', 'activity', 'poll', 'reward', 'debate', 'trade')))) { 
$slist[forum] .= <<<EOF
 class="curtype"
EOF;
 } 
$slist[forum] .= <<<EOF
>帖子</a></li>
EOF;
?><?php } if($_G['setting']['homestatus'] && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog"
EOF;
 if(CURSCRIPT == 'home' && $do == 'blog') { 
$slist[blog] .= <<<EOF
 class="curtype"
EOF;
 } 
$slist[blog] .= <<<EOF
>日志</a></li>
EOF;
?><?php } if($_G['setting']['homestatus'] && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album"
EOF;
 if(CURSCRIPT == 'home' && $do == 'album') { 
$slist[album] .= <<<EOF
 class="curtype"
EOF;
 } 
$slist[album] .= <<<EOF
>相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group"
EOF;
 if(CURSCRIPT == 'group' || $_G['basescript']=='group') { 
$slist[group] .= <<<EOF
 class="curtype"
EOF;
 } 
$slist[group] .= <<<EOF
>{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user"
EOF;
 if((CURSCRIPT == 'home' && !in_array($do, array('blog', 'album', 'thread', 'activity', 'poll', 'reward', 'debate', 'trade'))) || $mod == 'ranklist') { 
$slist[user] .= <<<EOF
 class="curtype"
EOF;
 } 
$slist[user] .= <<<EOF
>用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="cl"><?php $searchparams = makeSearchSignUrl();?><form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['0'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['0'])) { ?><?php echo $searchparams['0'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" id="dzsearchforumid" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['1'])) { if(is_array($searchparams['1'])) foreach($searchparams['1'] as $key => $value) { ?><?php $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" value=""  id="cloudsearchforumId" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="showmenu xg1 xs2" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" class="pn pnc" value="true"><strong class="xi2 xs2">搜索</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<strong class="xw1">热搜: </strong><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { ?><?php $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['0'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['0']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
</td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['0'];?>');
</script>
<?php } ?>
</div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>

<div id="wp" class="wp"><script type="text/javascript">
var allowpostattach = parseInt('<?php echo $_G['group']['allowpostattach'];?>');
var allowpostimg = parseInt('<?php echo $allowpostimg;?>');
var pid = parseInt('<?php echo $pid;?>');
var tid = parseInt('<?php echo $_G['tid'];?>');
var extensions = '<?php echo $_G['group']['attachextensions'];?>';
var imgexts = '<?php echo $imgexts;?>';
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
var seccodecheck = parseInt('<?php if(checkperm('seccode') && $seccodecheck) { ?>1<?php } else { ?>0<?php } ?>');
var secqaacheck = parseInt('<?php if(checkperm('seccode') && $secqaacheck) { ?>1<?php } else { ?>0<?php } ?>');
var typerequired = parseInt('<?php echo $_G['forum']['threadtypes']['required'];?>');
var sortrequired = parseInt('<?php echo $_G['forum']['threadsorts']['required'];?>');
var special = parseInt('<?php echo $special;?>');
var isfirstpost = <?php if($isfirstpost) { ?>1<?php } else { ?>0<?php } ?>;
var allowposttrade = parseInt('<?php echo $_G['group']['allowposttrade'];?>');
var allowpostreward = parseInt('<?php echo $_G['group']['allowpostreward'];?>');
var allowpostactivity = parseInt('<?php echo $_G['group']['allowpostactivity'];?>');
var sortid = parseInt('<?php echo $sortid;?>');
var special = parseInt('<?php echo $special;?>');
var fid = <?php echo $_G['fid'];?>;
var ispicstyleforum = <?php if($_G['forum']['picstyle']) { ?>1<?php } else { ?>0<?php } ?>;
</script>

<?php if($_G['gp_action'] == 'edit') { ?><?php $editor[value] = $postinfo[message];?><?php } else { ?><?php $editor[value] = $message;?><?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_post.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<?php if($isfirstpost && $sortid) { ?>
<script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?><?php
$actiontitle = <<<EOF


EOF;
 if($_G['gp_action'] == 'newthread') { if($special == 0) { 
$actiontitle .= <<<EOF
发表帖子

EOF;
 } elseif($special == 1) { 
$actiontitle .= <<<EOF
发起投票

EOF;
 } elseif($special == 2) { 
$actiontitle .= <<<EOF
出售商品

EOF;
 } elseif($special == 3) { 
$actiontitle .= <<<EOF
发布悬赏

EOF;
 } elseif($special == 4) { 
$actiontitle .= <<<EOF
发起活动

EOF;
 } elseif($special == 5) { 
$actiontitle .= <<<EOF
发起辩论

EOF;
 } elseif($specialextra) { 
$actiontitle .= <<<EOF
{$_G['setting']['threadplugins'][$specialextra]['name']}

EOF;
 } } elseif($_G['gp_action'] == 'reply' && !empty($_G['gp_addtrade'])) { 
$actiontitle .= <<<EOF

添加商品

EOF;
 } elseif($_G['gp_action'] == 'reply') { 
$actiontitle .= <<<EOF

参与/回复主题

EOF;
 } elseif($_G['gp_action'] == 'edit') { if($special == 2) { 
$actiontitle .= <<<EOF
编辑商品
EOF;
 } else { 
$actiontitle .= <<<EOF
编辑帖子
EOF;
 } } 
$actiontitle .= <<<EOF


EOF;
?><?php
$icon = <<<EOF


EOF;
 if($special == 1) { 
$icon .= <<<EOF
poll

EOF;
 } elseif($special == 2) { 
$icon .= <<<EOF
trade

EOF;
 } elseif($special == 3) { 
$icon .= <<<EOF
reward

EOF;
 } elseif($special == 4) { 
$icon .= <<<EOF
activity

EOF;
 } elseif($special == 5) { 
$icon .= <<<EOF
debate

EOF;
 } elseif($isfirstpost && $sortid) { 
$icon .= <<<EOF
sort

EOF;
 } 
$icon .= <<<EOF


EOF;
?>

<?php if($_G['gp_action'] != 'newthread') { ?><?php $subjectcut = cutstr($thread[subject], 30);?><?php } ?><?php
$actionsubject = <<<EOF


EOF;
 if($_G['gp_action'] == 'reply') { 
$actionsubject .= <<<EOF

<em>&rsaquo;</em><a href="forum.php?mod=viewthread&amp;tid={$thread['tid']}">{$subjectcut}</a>

EOF;
 } elseif($_G['gp_action'] == 'edit') { 
$actionsubject .= <<<EOF

<em>&rsaquo;</em><a href="forum.php?mod=redirect&amp;goto=findpost&amp;ptid={$thread['tid']}&amp;pid={$pid}">{$subjectcut}</a>

EOF;
 } 
$actionsubject .= <<<EOF


EOF;
?>

<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <?php echo $navigation;?><?php echo $actionsubject;?> <em>&rsaquo;</em> <?php echo $actiontitle;?></div>
</div><?php $adveditor = $isfirstpost && $special || $special == 2 && ($_G['gp_action'] == 'newthread' || $_G['gp_action'] == 'reply' && !empty($_G['gp_addtrade']) || $_G['gp_action'] == 'edit' && $thread['special'] == 2);?><?php $advmore = !$showthreadsorts && !$special || $_G['gp_action'] == 'reply' && empty($_G['gp_addtrade']) || $_G['gp_action'] == 'edit' && !$isfirstpost && ($thread['special'] == 2 && !$special || $thread['special'] != 2);?><form method="post" autocomplete="off" id="postform"
<?php if($_G['gp_action'] == 'newthread') { ?>action="forum.php?mod=post&amp;action=<?php if($special != 2) { ?>newthread<?php } else { ?>newtrade<?php } ?>&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;topicsubmit=yes"
<?php } elseif($_G['gp_action'] == 'reply') { ?>action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $extra;?>&amp;replysubmit=yes"
<?php } elseif($_G['gp_action'] == 'edit') { ?>action="forum.php?mod=post&amp;action=edit&amp;extra=<?php echo $extra;?>&amp;editsubmit=yes" <?php echo $enctype;?>
<?php } ?>
onsubmit="return validate(this)">
<div id="ct" class="ct2_a ct2_a_r wp cl">
<div class="mn">
<input type="hidden" name="formhash" id="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="posttime" id="posttime" value="<?php echo TIMESTAMP;?>" />
<?php if($_G['gp_action'] == 'edit') { ?>
<input type="hidden" name="delattachop" id="delattachop" value="0" />
<?php } if(!empty($_G['gp_modthreadkey'])) { ?><input type="hidden" name="modthreadkey" id="modthreadkey" value="<?php echo $_G['gp_modthreadkey'];?>" /><?php } ?>
<input type="hidden" name="wysiwyg" id="<?php echo $editorid;?>_mode" value="<?php echo $editormode;?>" />
<?php if($_G['gp_action'] == 'reply') { ?>
<input type="hidden" name="noticeauthor" value="<?php echo $noticeauthor;?>" />
<input type="hidden" name="noticetrimstr" value="<?php echo $noticetrimstr;?>" />
<input type="hidden" name="noticeauthormsg" value="<?php echo $noticeauthormsg;?>" />
<?php if($reppid) { ?>
<input type="hidden" name="reppid" value="<?php echo $reppid;?>" />
<?php } if($_G['gp_reppost']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_G['gp_reppost'];?>" />
<?php } elseif($_G['gp_repquote']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_G['gp_repquote'];?>" />
<?php } } if($_G['gp_action'] == 'edit') { ?>
<input type="hidden" name="fid" id="fid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="tid" value="<?php echo $_G['tid'];?>" />
<input type="hidden" name="pid" value="<?php echo $pid;?>" />
<input type="hidden" name="page" value="<?php echo $_G['gp_page'];?>" />
<?php } if($special) { ?>
<input type="hidden" name="special" value="<?php echo $special;?>" />
<?php } if($specialextra) { ?>
<input type="hidden" name="specialextra" value="<?php echo $specialextra;?>" />
<?php } ?>
<div class="bm bw0 cl"<?php if(!$showthreadsorts && !$adveditor) { ?> id="editorbox"<?php } ?>>
<?php if($_G['gp_action'] == 'newthread') { ?>
<ul class="tb cl mbw">
<?php if($savecount) { ?>
<li class="y"><a id="draftlist" href="javascript:;" class="xi2" onmouseover="showMenu({'ctrlid':'draftlist','ctrlclass':'a','duration':2,'pos':'34'})">草稿箱(<strong><?php echo $savecount;?></strong>)</a></li>
<?php } if(!$_G['forum']['threadsorts']['required'] && !$_G['forum']['allowspecialonly']) { ?><li<?php echo $postspecialcheck['0'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread')">发表帖子</a></li><?php } if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $tsortid => $name) { ?><li<?php if($sortid == $tsortid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&sortid=<?php echo $tsortid;?>')"><?php echo strip_tags($name);; ?></a></li>
<?php } if($_G['group']['allowpostpoll']) { ?><li<?php echo $postspecialcheck['1'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=1')">发起投票</a></li><?php } if($_G['group']['allowpostreward']) { ?><li<?php echo $postspecialcheck['3'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=3')">发布悬赏</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li<?php echo $postspecialcheck['5'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=5')">发起辩论</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li<?php echo $postspecialcheck['4'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=4')">发起活动</a></li><?php } if($_G['group']['allowposttrade']) { ?><li<?php echo $postspecialcheck['2'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=2')">出售商品</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li<?php if($specialextra==$tpid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&specialextra=<?php echo $tpid;?>')"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>

<div id="draftlist_menu" style="display:none">
<ul class="xl xl1">
<?php if($savethreads) { if(is_array($savethreads)) foreach($savethreads as $savethread) { ?><li>
<label>[<a href="javascript:;" title="引用" onclick="insertsave(<?php echo $savethread['pid'];?>)">引用</a>]</label>
<a href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $savethread['fid'];?>&amp;tid=<?php echo $savethread['tid'];?>&amp;pid=<?php echo $savethread['pid'];?>" class="xi2" target="_blank"><?php echo $savethread['subject'];?></a>
<span class="xg1"><?php echo $savethread['dateline'];?></span>
</li>
<?php } } if($savethreadothers) { if(is_array($savethreadothers)) foreach($savethreadothers as $savethread) { ?><li>
<label>[<a href="javascript:;" title="引用" onclick="insertsave(<?php echo $savethread['pid'];?>)">引用</a>]</label>
<a href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $savethread['fid'];?>&amp;tid=<?php echo $savethread['tid'];?>&amp;pid=<?php echo $savethread['pid'];?>" class="xi2" target="_blank"><?php echo $savethread['subject'];?></a>
<span class="xg1"><?php echo $savethread['dateline'];?></span>
</li>
<?php } } ?>
<li class="xi2"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;type=thread&amp;from=&amp;filter=save" target="_blank">查看所有草稿</a></li>
</ul>
</div>

<?php } elseif($_G['gp_action'] == 'edit' && $isfirstpost && !$thread['sortid']) { ?>
<ul class="tb cl mbw">
<li<?php if(!$sortid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=edit&tid=<?php echo $_G['tid'];?>&pid=<?php echo $pid;?>')"><?php echo $actiontitle;?></a></li>
<?php if($_G['gp_action'] == 'edit' && $isfirstpost && !$thread['sortid']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $tsortid => $name) { ?><li<?php if($sortid == $tsortid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=edit&tid=<?php echo $_G['tid'];?>&pid=<?php echo $pid;?>&sortid=<?php echo $tsortid;?>')"><?php echo strip_tags($name);; ?></a></li>
<?php } } ?>
</ul>
<?php } ?>

<div id="postbox">
<?php if($_G['gp_action'] == 'newthread' && $_G['setting']['sitemessage']['newthread'] || $_G['gp_action'] == 'reply' && $_G['setting']['sitemessage']['reply']) { ?>
<span id="custominfo" class="y cur1<?php if($_G['gp_action'] != 'reply') { ?> mtn<?php } ?>">&nbsp;<img src="<?php echo IMGDIR;?>/info_small.gif" alt="帮助" /></span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_top'])) echo $_G['setting']['pluginhooks']['post_top'];?><div class="pbt cl">
<?php if($sortid) { ?>
<input type="hidden" name="sortid" value="<?php echo $sortid;?>" />
<?php } if($isfirstpost && !empty($_G['forum']['threadtypes']['types'])) { ?>
<div class="ftid">
<?php if($_G['forum']['ismoderator'] || empty($_G['forum']['threadtypes']['moderators'][$thread['typeid']])) { ?>
<select name="typeid" id="typeid" width="80">
<option value="0">选择主题分类</option><?php if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $typeid => $name) { if(empty($_G['forum']['threadtypes']['moderators'][$typeid]) || $_G['forum']['ismoderator']) { ?>
<option value="<?php echo $typeid;?>"<?php if($thread['typeid'] == $typeid || $_G['gp_typeid'] == $typeid) { ?> selected="selected"<?php } ?>><?php echo strip_tags($name);; ?></option>
<?php } } ?>
</select>
<?php } else { ?>
[<?php echo strip_tags($_G['forum']['threadtypes']['types'][$thread['typeid']]);; ?>]
<?php } ?>
</div>
<?php } ?>
<div class="z">
<?php if($_G['gp_action'] == 'reply' && !empty($_G['gp_addtrade']) || $_G['gp_action'] == 'edit' && $thread['special'] == 2 && !$postinfo['first']) { ?>
<input name="subject" type="hidden" value="" />
<?php } else { if($_G['gp_action'] != 'reply') { ?>
<span><input type="text" name="subject" id="subject" class="px" value="<?php echo $postinfo['subject'];?>" <?php if($_G['gp_action'] == 'newthread') { ?>onblur="if($('tags')){relatekw('-1','-1'<?php if($_G['group']['allowposttag']) { ?>,function(){extraCheck(4)}<?php } ?>);doane();}"<?php } ?> onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" tabindex="1" /></span>
<?php } else { ?>
<span id="subjecthide" class="z">RE: <?php echo $thread['subject'];?> [<a href="javascript:;" onclick="display('subjecthide');display('subjectbox');$('subject').value='RE: <?php echo htmlspecialchars(str_replace('\'', '\\\'', $thread['subject'])); ?>';display('subjectchk');strLenCalc($('subject'), 'checklen', 80);return false;">修改</a>]</span>
<span id="subjectbox" style="display:none"><input type="text" name="subject" id="subject" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" /></span>
<?php } ?>
<span id="subjectchk"<?php if($_G['gp_action'] == 'reply') { ?> style="display:none"<?php } ?>>还可输入 <strong id="checklen">80</strong> 个字符</span>
<?php } if($_G['gp_action'] == 'newthread' && $modnewthreads) { ?> <span class="xg1 xw0">(需审核)</span><?php } if($_G['gp_action'] == 'reply' && $modnewreplies) { ?> <span class="xg1 xw0">(需审核)</span><?php } if($_G['gp_action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4) { ?> <span class="xg1 xw0">(草稿)</span><?php } ?>
</div>
</div>
<?php if(!$isfirstpost && $thread['special'] == 5 && empty($firststand) && $_G['gp_action'] != 'edit') { ?>
<div class="pbt cl">
<div class="ftid">
<select name="stand" id="stand">
<option value="">选择观点</option>
<option value="0">中立</option>
<option value="1"<?php if($stand == 1) { ?> selected="selected"<?php } ?>>正方</option>
<option value="2"<?php if($stand == 2) { ?> selected="selected"<?php } ?>>反方</option>
</select>
</div>
</div>
<?php } ?>

<div id="attachnotice_attach" class="tbms mbm xl" style="display:none">
<a href="javascript:;" title="删除附件" class="d y" onclick="attachoption('attach', 0)">close</a>您有 <a class="xi2" href="javascript:;" onclick="attachoption('attach', 2);" /><span id="unusednum_attach"></span> 个未使用的附件</a> <a class="xi2" href="javascript:;" onclick="attachoption('attach', 1)"><strong>使用附件</strong></a>
<div id="unusedlist_attach" style="display:none"></div>
</div>
<div id="attachnotice_img" class="tbms mbm xl" style="display:none">
<a href="javascript:;" title="删除附件" class="d y" onclick="attachoption('img', 0)">close</a>您有 <a class="xi2" href="javascript:;" onclick="attachoption('img', 2);" /><span id="unusednum_img"></span> 个未使用的图片</a> <a class="xi2" href="javascript:;" onclick="attachoption('img', 1)"><strong>使用图片</strong></a>
<div id="unusedlist_img" style="display:none"></div>
</div>

<?php if($showthreadsorts) { ?>
<div class="exfm cl"><?php include template('forum/post_sortoption'); ?></div>
<?php } elseif($adveditor) { if($special == 1) { include template('forum/post_poll'); } elseif($special == 2 && ($_G['gp_action'] != 'edit' || ($_G['gp_action'] == 'edit' && ($thread['authorid'] == $_G['uid'] && $_G['group']['allowposttrade'] || $_G['group']['allowedittrade'])))) { ?><p class="xg1">添加商品信息，完成后可在本帖中继续添加多个商品</p><?php include template('forum/post_trade'); } elseif($special == 3) { include template('forum/post_reward'); } elseif($special == 4) { include template('forum/post_activity'); } elseif($special == 5) { include template('forum/post_debate'); } elseif($specialextra) { ?><div class="specialpost s_clear"><?php echo $threadplughtml;?></div>
<?php } } if($_G['gp_action'] == 'reply' && $quotemessage) { ?>
<div class="pbt cl"><?php echo $quotemessage;?></div>
<?php } ?><div id="<?php echo $editorid;?>_body_loading"><img src="<?php echo IMGDIR;?>/loading.gif" width="16" height="16" class="vm" /> 请稍后 ...</div>
<div class="edt" id="<?php echo $editorid;?>_body" style="display: none">
<div id="<?php echo $editorid;?>_controls" class="bar">
<div class="y">
<div class="b2r nbl nbr" id="<?php echo $editorid;?>_adv_5">
<p>
<a id="<?php echo $editorid;?>_undo" title="撤销">Undo</a>
</p>
<p>
<a id="<?php echo $editorid;?>_redo" title="重做">Redo</a>
</p>
</div>
<div class="z">
<span class="mbn"><a id="<?php echo $editorid;?>_fullswitcher"></a><a id="<?php echo $editorid;?>_simple"></a></span>
<label id="<?php echo $editorid;?>_switcher" class="bar_swch ptn"><input id="<?php echo $editorid;?>_switchercheck" type="checkbox" class="pc" name="checkbox" value="0" <?php if(!$editor['editormode']) { ?>checked="checked"<?php } ?> onclick="switchEditor(this.checked?0:1)" />纯文本</label>
</div>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_right'])) { ?>
<div class="y"><?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_right'])) echo $_G['setting']['pluginhooks']['post_editorctrl_right'];?></div>
<?php } ?>
<div id="<?php echo $editorid;?>_button" class="btn cl">
<div class="b1r" id="<?php echo $editorid;?>_adv_s0">
<a id="<?php echo $editorid;?>_paste" title="粘贴">粘贴</a>
</div>
<div class="b2r nbr" id="<?php echo $editorid;?>_adv_s2">
<a id="<?php echo $editorid;?>_fontname" class="dp" title="设置字体" menupos="43!"><span id="<?php echo $editorid;?>_font">字体</span></a>
<a id="<?php echo $editorid;?>_fontsize" class="dp" title="设置文字大小" menupos="43!" menuwidth="25"><span id="<?php echo $editorid;?>_size">大小</span></a>
<span id="<?php echo $editorid;?>_adv_1">
<a id="<?php echo $editorid;?>_inserthorizontalrule" title="分隔线">Hr</a>
<br />
</span>
<a id="<?php echo $editorid;?>_bold" title="文字加粗">B</a>
<a id="<?php echo $editorid;?>_italic" title="文字斜体">I</a>
<a id="<?php echo $editorid;?>_underline" title="文字加下划线">U</a>
<a id="<?php echo $editorid;?>_forecolor" title="设置文字颜色">Color</a>
<a id="<?php echo $editorid;?>_backcolor" title="设置文字背景色">BgColor</a>
<a id="<?php echo $editorid;?>_url" title="添加链接">Url</a>
<span id="<?php echo $editorid;?>_adv_8">
<a id="<?php echo $editorid;?>_unlink" title="移除链接">Unlink</a>
</span>
</div>
<div class="b2r nbl" id="<?php echo $editorid;?>_adv_2">
<p id="<?php echo $editorid;?>_adv_3">
<a id="<?php echo $editorid;?>_tbl" title="添加表格">Table</a>
</p>
<p>
<a id="<?php echo $editorid;?>_removeformat" title="清除文本格式">Removeformat</a>
</p>
</div>
<div class="b2r">
<p>
<a id="<?php echo $editorid;?>_autotypeset" title="自动排版">Autotypeset</a>
<a id="<?php echo $editorid;?>_justifyleft" title="居左">Left</a>
<a id="<?php echo $editorid;?>_justifycenter" title="居中">Center</a>
<a id="<?php echo $editorid;?>_justifyright" title="居右">Right</a>
</p>
<p id="<?php echo $editorid;?>_adv_4">
<a id="<?php echo $editorid;?>_floatleft" title="左浮动">FloatLeft</a>
<a id="<?php echo $editorid;?>_floatright" title="右浮动">FloatRight</a>
<a id="<?php echo $editorid;?>_insertorderedlist" title="排序的列表">Orderedlist</a>
<a id="<?php echo $editorid;?>_insertunorderedlist" title="未排序列表">Unorderedlist</a>
</p>
</div>
<div class="b1r" id="<?php echo $editorid;?>_adv_s1">
<a id="<?php echo $editorid;?>_sml" title="添加表情">表情</a>
<div id="<?php echo $editorid;?>_imagen" style="display:none">!</div>
<a id="<?php echo $editorid;?>_image" title="添加图片" menupos="00" menuwidth="600">图片</a>
<?php if($_G['group']['allowpostattach']) { ?>
<div id="<?php echo $editorid;?>_attachn" style="display:none">!</div>
<a id="<?php echo $editorid;?>_attach" title="添加附件" menupos="00" menuwidth="600">附件</a>
<?php } if($_G['forum']['allowmediacode'] && $_G['group']['allowmediacode']) { ?>
<a id="<?php echo $editorid;?>_aud" title="添加音乐">音乐</a>
<a id="<?php echo $editorid;?>_vid" title="添加视频">视频</a>
<a id="<?php echo $editorid;?>_fls" title="添加 Flash">Flash</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_left'])) echo $_G['setting']['pluginhooks']['post_editorctrl_left'];?>
</div>
<div class="b2r<?php if($_G['cache']['bbcodes_display'][$_G['groupid']]) { ?> nbr<?php } ?>" id="<?php echo $editorid;?>_adv_6">
<p>
<a id="<?php echo $editorid;?>_code" title="添加代码文字">代码</a>
<?php if($isfirstpost) { ?><a id="<?php echo $editorid;?>_free" title="添加免费信息">Free</a><?php } ?>
</p>
<p>
<a id="<?php echo $editorid;?>_quote" title="添加引用文字">引用</a>
<?php if($isfirstpost) { ?><a id="<?php echo $editorid;?>_hide" title="添加隐藏内容"<?php if(!$_G['group']['allowhidecode']) { ?> style="visibility:hidden;"<?php } ?>>Hide</a><?php } ?>
</p>
</div>
<?php if($_G['cache']['bbcodes_display'][$_G['groupid']]) { ?>
<div class="b2r nbl"><?php if(is_array($_G['cache']['bbcodes_display'][$_G['groupid']])) foreach($_G['cache']['bbcodes_display'][$_G['groupid']] as $tag => $bbcode) { if($bbcode['i'] % 2 != 0) { ?><a id="<?php echo $editorid;?>_cst<?php echo $bbcode['params'];?>_<?php echo $tag;?>" class="cst" title="<?php echo $bbcode['explanation'];?>"><img src="<?php echo STATICURL;?>image/common/<?php echo $bbcode['icon'];?>" title="<?php echo $bbcode['explanation'];?>" alt="<?php echo $tag;?>" /></a><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_top'])) echo $_G['setting']['pluginhooks']['post_editorctrl_top'];?>
<br id="<?php echo $editorid;?>_adv_7" /><?php if(is_array($_G['cache']['bbcodes_display'][$_G['groupid']])) foreach($_G['cache']['bbcodes_display'][$_G['groupid']] as $tag => $bbcode) { if($bbcode['i'] % 2 == 0) { ?><a id="<?php echo $editorid;?>_cst<?php echo $bbcode['params'];?>_<?php echo $tag;?>" class="cst" title="<?php echo $bbcode['explanation'];?>"><img src="<?php echo STATICURL;?>image/common/<?php echo $bbcode['icon'];?>" title="<?php echo $bbcode['explanation'];?>" alt="<?php echo $tag;?>" /></a><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_bottom'])) echo $_G['setting']['pluginhooks']['post_editorctrl_bottom'];?>
</div>
<?php } ?>
<div class="b2r" id="<?php echo $editorid;?>_adv_9">
<a id="<?php echo $editorid;?>_pasteword" title="从 Word 粘贴内容">Word 粘贴</a>
<?php if($_G['group']['allowdownremoteimg']) { if(!($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle']))) { ?><br><?php } ?><a id="<?php echo $editorid;?>_downremoteimg" title="下载远程图片">下载图片</a><?php } if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>
<br /><a id="a_magic_doodle" href="home.php?mod=magic&amp;mid=doodle&amp;showid=comment_doodle&amp;target=<?php echo $editorid;?>_textarea&amp;from=forumeditor" class="cst" onclick="showWindow(this.id, this.href, 'get', 0)"><img src="<?php echo STATICURL;?>image/magic/doodle.small.gif" alt="doodle" title="<?php echo $_G['setting']['magics']['doodle'];?>" style="margin-top:2px" /></a>
<?php } ?>

</div>
</div>
</div>

<div id="rstnotice" class="ntc_l bbs" style="display:none">
<a href="javascript:;" title="清除内容" class="d y" onclick="userdataoption(0)">close</a>您有上次未提交成功的数据 <a class="xi2" href="javascript:;" onclick="userdataoption(1)"><strong>恢复数据</strong></a>
</div>

<div class="area">
<textarea name="<?php echo $editor['textarea'];?>" id="<?php echo $editorid;?>_textarea" class="pt" rows="15" tabindex="2"><?php echo $editor['value'];?></textarea>
</div><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_editor.css?<?php echo VERHASH;?>" />
<script src="<?php echo $_G['setting']['jspath'];?>editor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var editorid = '<?php echo $editorid;?>';
var textobj = $(editorid + '_textarea');
var wysiwyg = (BROWSER.ie || BROWSER.firefox || (BROWSER.opera >= 9)) && parseInt('<?php echo $editor['editormode'];?>') == 1 ? 1 : 0;
var allowswitcheditor = parseInt('<?php echo $editor['allowswitcheditor'];?>');
var allowhtml = parseInt('<?php echo $editor['allowhtml'];?>');
var allowsmilies = parseInt('<?php echo $editor['allowsmilies'];?>');
var allowbbcode = parseInt('<?php echo $editor['allowbbcode'];?>');
var allowimgcode = parseInt('<?php echo $editor['allowimgcode'];?>');
var simplodemode = parseInt('<?php if($editor['simplemode'] > 0) { ?>1<?php } else { ?>0<?php } ?>');
var fontoptions = new Array("仿宋", "黑体", "楷体", "宋体", "新宋体", "微软雅黑", "Trebuchet MS", "Tahoma", "Arial", "Impact", "Verdana", "Times New Roman");
var smcols = <?php echo $_G['setting']['smcols'];?>;
var custombbcodes = new Array();
<?php if($_G['cache']['bbcodes_display'][$_G['groupid']]) { if(is_array($_G['cache']['bbcodes_display'][$_G['groupid']])) foreach($_G['cache']['bbcodes_display'][$_G['groupid']] as $tag => $bbcode) { ?>custombbcodes["<?php echo $tag;?>"] = {'prompt' : '<?php echo $bbcode['prompt'];?>'};
<?php } } ?>
</script>

<div id="<?php echo $editorid;?>_bbar" class="bbar">
<em id="<?php echo $editorid;?>_tip"></em>
<span id="<?php echo $editorid;?>_svdsecond"></span>
<a href="javascript:;" onclick="discuzcode('svd');return false;" id="<?php echo $editorid;?>_svd">保存数据</a> |
<a href="javascript:;" onclick="discuzcode('rst');return false;" id="<?php echo $editorid;?>_rst">恢复数据</a> &nbsp;&nbsp;
<?php if($editor['allowchecklength']) { ?>
<a href="javascript:;" onclick="discuzcode('chck');return false;" id="<?php echo $editorid;?>_chck">字数检查</a> |
<?php } if($editor['allowtopicreset']) { ?>
<a href="javascript:;" onclick="discuzcode('tpr');return false;" id="<?php echo $editorid;?>_tpr">清除内容</a> &nbsp;&nbsp;
<?php } if($editor['allowresize']) { ?>
<span id="<?php echo $editorid;?>_resize"><a href="javascript:;" onclick="editorsize('+');return false;">加大编辑框</a> | <a href="javascript:;" onclick="editorsize('-');return false;">缩小编辑框</a><img src="<?php echo STATICURL;?>image/editor/resize.gif" onmousedown="editorresize(event)" /></span>
<?php } ?>
</div></div><?php if(!empty($_G['setting']['pluginhooks']['post_middle'])) echo $_G['setting']['pluginhooks']['post_middle'];?>

<?php if($_G['gp_action'] == 'newthread' || $_G['gp_action'] == 'edit' && $isfirstpost) { ?><div id="post_extra" class="ptm cl">
<div id="post_extra_tb" class="cl" onselectstart="return false">
<?php if($_G['group']['allowreplycredit'] && !in_array($special, array(2, 3))) { if($_G['gp_action'] == 'newthread') { ?><?php $extcreditstype = $_G['setting']['creditstransextra'][10];?><?php } else { ?><?php $extcreditstype = $replycredit_rule['extcreditstype'] ? $replycredit_rule['extcreditstype'] : $_G['setting']['creditstransextra'][10];?><?php } ?><?php $userextcredit = getuserprofile('extcredits'.$extcreditstype);?><?php if(($_G['gp_action'] == 'newthread' && $userextcredit > 0) || ($_G['gp_action'] == 'edit' && $isorigauthor && isfirstpost)) { ?>
<label id="extra_replycredit_b" onclick="showExtra('extra_replycredit')"><span id="extra_replycredit_chk">回帖奖励</span></label>
<?php } } if($_G['group']['allowsetreadperm']) { ?>
<label id="extra_readperm_b" onclick="showExtra('extra_readperm')"><span id="extra_readperm_chk">阅读权限</span></label>
<?php } if($_G['group']['maxprice'] && !$special) { ?>
<label id="extra_price_b" onclick="showExtra('extra_price')"><span id="extra_price_chk">售价</span></label>
<?php } if(($_G['gp_action'] == 'newthread' && $_G['group']['allowpostrushreply'] && $special != 2) || ($_G['gp_action'] == 'edit' && getstatus($thread['status'], 3))) { ?>
<label id="extra_rushreplyset_b" onclick="showExtra('extra_rushreplyset')"><span id="extra_rushreplyset_chk">抢楼</span></label>
<?php } if($_G['group']['allowposttag']) { ?>
<label id="extra_tag_b" onclick="showExtra('extra_tag')"><span id="extra_tag_chk">设置主题标签</span></label>
<?php } ?>
</div>

<div id="post_extra_c">
<?php if(!empty($userextcredit)) { ?>
<div id="extra_replycredit_c" class="exfm cl" style="display: none;">
<div><label>每次回帖奖励: <input type="text" name="replycredit_extcredits" id="replycredit_extcredits" class="px pxs vm" value="<?php if($replycredit_rule['extcredits'] && $thread['replycredit'] > 0) { ?><?php echo $replycredit_rule['extcredits'];?><?php } else { ?>0<?php } ?>" onkeyup="javascript:getreplycredit();" onblur="extraCheck(0)" /> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?><?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?></label><span class="xg1">(留空或填 0 为不奖励)</span> , <label>奖励 <input type="text" name="replycredit_times" id="replycredit_times" class="px pxs vm" value="<?php if($replycredit_rule['lasttimes']) { ?><?php echo $replycredit_rule['lasttimes'];?><?php } else { ?>1<?php } ?>" onkeyup="javascript:getreplycredit();"  onblur="extraCheck(0)" /> 次</label>, <label>每人最多可获得 <select id="replycredit_membertimes" name="replycredit_membertimes" class="ps vm"><?php for($i=1;$i<11;$i++) {;?><option value="<?php echo $i;?>"<?php if($replycredit_rule['membertimes'] == $i) { ?> selected="selected"<?php } ?>><?php echo $i;?></option><?php };?></select> 次</label>, <label>中奖率 <select id="replycredit_random" name="replycredit_random" class="ps vm">
 <?php for($i=100;$i>9;$i=$i-10) {;?><option value="<?php echo $i;?>"<?php if($replycredit_rule['random'] == $i) { ?> selected="selected"<?php } ?>><?php echo $i;?></option><?php };?></select> %</label></div>
<div class="xg1">回帖奖励总额: <span id="replycredit_sum"><?php if($thread['replycredit']) { ?><?php echo $thread['replycredit'];?><?php } else { ?>0<?php } ?></span> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?><?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?><?php if($thread['replycredit']) { ?><span class="xg1">(本帖尚有 <?php echo $thread['replycredit'];?> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?><?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?>)</span><?php } ?>, <span id="replycredit">税后支付 <?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?> 0</span> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?>, 您有 <?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?> <?php echo $userextcredit;?> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?></div>
</div>
<?php } if($_G['group']['allowsetreadperm']) { ?>
<div id="extra_readperm_c" class="exfm cl" style="display:none">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="xw1">阅读权限</td>
<td>
<select name="readperm" id="readperm" class="ps" style="width:90px" onchange="extraCheck(1)">
<option value="">不限</option><?php if(is_array($_G['cache']['groupreadaccess'])) foreach($_G['cache']['groupreadaccess'] as $val) { ?><option value="<?php echo $val['readaccess'];?>" title="阅读权限: <?php echo $val['readaccess'];?>"<?php if($thread['readperm'] == $val['readaccess']) { ?> selected="selected"<?php } ?>><?php echo $val['grouptitle'];?></option>
<?php } ?>
<option value="255"<?php if($thread['readperm'] == 255) { ?> selected="selected"<?php } ?>>最高权限</option>
</select>
<span class="xg1">阅读权限按由高到低排列，高于或等于选中组的用户才可以阅读</span>
</td>
</tr>
</table>
</div>
<?php } if($_G['group']['maxprice'] && !$special) { ?>
<div id="extra_price_c" class="exfm cl" style="display:none">
售价:
<input type="text" id="price" name="price" class="px pxs" value="<?php echo $thread['pricedisplay'];?>" onblur="extraCheck(2)" /> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>
<span class="xg1">(最高 <?php echo $_G['group']['maxprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?>)</span>
<?php if($_G['group']['maxprice'] && ($_G['gp_action'] == 'newthread' || $_G['gp_action'] == 'edit' && $isfirstpost)) { if($_G['setting']['maxincperthread']) { ?><p class="xg1">主题出售最高收入上限为 <?php echo $_G['setting']['maxincperthread'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?>&nbsp;&nbsp;&nbsp;&nbsp;</p><?php } if($_G['setting']['maxchargespan']) { ?><p class="xg1">主题最多能销售 <?php echo $_G['setting']['maxchargespan'];?> 个小时<?php if($_G['gp_action'] == 'edit' && $freechargehours) { ?>，本主题还能销售 <?php echo $freechargehours;?> 个小时<?php } ?></p><?php } } ?>
</div>
<?php } if($_G['group']['allowposttag']) { ?>
<div id="extra_tag_c" class="exfm cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="xw1">标签 </td>
<td>
<input type="text" class="px vm" size="60" id="tags" name="tags" value="<?php echo $postinfo['tag'];?>" onblur="extraCheck(4)" />
<a href="javascript:;" id="clickbutton[]" class="xi2" onclick="relatekw('-1','-1');doane();">自动获取</a><span class="pipe">|</span><a href="javascript:;" id="choosetag" class="xi2" onclick="showWindow(this.id, 'forum.php?mod=tag', 'get', 0)">选择标签</a>
</td>
</tr>
<tr>
<td></td>
<td>
<p class="xg1">用逗号或空格隔开多个标签，最多可填写 5 个</p><?php $recent_use_tag = recent_use_tag();?><?php if($recent_use_tag) { ?>
<p class="mtn">最近使用标签:&nbsp;<?php $tagi = 0;?><?php if(is_array($recent_use_tag)) foreach($recent_use_tag as $var) { if($tagi) { ?>, <?php } ?><a href="javascript:;" class="xi2" onclick="$('tags').value == '' ? $('tags').value += '<?php echo $var;?>' : $('tags').value += ',<?php echo $var;?>';extraCheck(4);doane();"><?php echo $var;?></a><?php $tagi++;?><?php } ?>
</p>
<?php } ?>
</td>
</tr>
</table>
</div>
<?php } if(($_G['gp_action'] == 'newthread' && $_G['group']['allowpostrushreply'] && $special != 2) || ($_G['gp_action'] == 'edit' && getstatus($thread['status'], 3))) { ?>
<div class="exfm cl" id="extra_rushreplyset_c" style="display: none;">
<div class="sinf sppoll z">
<dl>
<dt><span style="width: 4em">&nbsp;</span></dt>
<dd><label for="rushreply"><input type="checkbox" name="rushreply" id="rushreply" class="pc vm" value="1" <?php if($_G['gp_action'] == 'edit' && getstatus($thread['status'], 3)) { ?>disabled="disabled" checked="checked"<?php } ?> onclick="extraCheck(3)" /> 将该帖设为抢楼帖</label></dd>
<dt><label>抢楼时间:</label></dt>
<dd>
<div>
<input type="text" name="rushreplyfrom" id="rushreplyfrom" class="px" onclick="showcalendar(event, this, true)" autocomplete="off" value="<?php echo $postinfo['rush']['starttimefrom'];?>" onkeyup="$('rushreply').checked = true;" /><span> ~ </span><input type="text" onclick="showcalendar(event, this, true)" autocomplete="off" id="rushreplyto" name="rushreplyto" class="px" value="<?php echo $postinfo['rush']['starttimeto'];?>" onkeyup="$('rushreply').checked = true;" />
</div>
</dd>
<dt><label>奖励楼层:</label></dt>
<dd>
<input type="text" name="rewardfloor" id="rewardfloor" class="px oinf" value="<?php echo $postinfo['rush']['rewardfloor'];?>" onkeyup="$('rushreply').checked = true;" />
<p class="xg1">多楼层用逗号隔开,*号可匹配任意数或空值,如:8,88,*88</p>
</dd>
</dl>
</div>
<div class="sadd z">
<dl>
<dt><label>截止楼层:</label></dt>
<dd class="hasd cl">
<input type="text" name="stopfloor" id="stopfloor" class="px" autocomplete="off" value="<?php echo $postinfo['rush']['stopfloor'];?>" onkeyup="$('rushreply').checked = true;" />
</dd>
</dl>
</div>
</div>
<?php } ?>
</div>
</div><?php } if($_G['gp_action'] != 'edit' && checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm"><?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$__STATICURL = STATICURL;$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

{$sectplqaa['0']}验证问答{$sectplqaa['1']}<input name="secanswer" id="secqaaverify_{$sechash}" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec('qaa', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updatesecqaa('{$sechash}');doane(event);" class="xi2">换一个</a>
<span id="checksecqaaverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplqaa['2']}<span id="secqaa_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updatesecqaa('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplqaa['3']}

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}验证码{$sectplcode['1']}<input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
width:100px" class="txt px vm" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">换一个</a>
<span id="checkseccodeverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?></div>
<?php } ?>

<div class="mtm mbm pnpost">
<a href="home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=<?php echo $_G['fid'];?>" class="y" target="_blank">本版积分规则</a>
<button type="submit" id="postsubmit" class="pn pnc" value="true" name="<?php if($_G['gp_action'] == 'newthread') { ?>topicsubmit<?php } elseif($_G['gp_action'] == 'reply') { ?>replysubmit<?php } elseif($_G['gp_action'] == 'edit') { ?>editsubmit<?php } ?>">
<?php if($_G['gp_action'] == 'newthread') { if($special == 0) { ?><span>发表帖子</span>
<?php } elseif($special == 1) { ?><span>发起投票</span>
<?php } elseif($special == 2) { ?><span>出售商品</span>
<?php } elseif($special == 3) { ?><span>发布悬赏</span>
<?php } elseif($special == 4) { ?><span>发起活动</span>
<?php } elseif($special == 5) { ?><span>发起辩论</span>
<?php } elseif($special == 127) { ?>
<span><?php if($buttontext) { ?><?php echo $buttontext;?><?php } else { ?>发表帖子<?php } ?></span>
<?php } } elseif($_G['gp_action'] == 'reply' && !empty($_G['gp_addtrade'])) { ?><span>添加商品</span>
<?php } elseif($_G['gp_action'] == 'reply') { ?><span>参与/回复主题</span>
<?php } elseif($_G['gp_action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4) { ?>
<span>发表帖子</span>
<?php } elseif($_G['gp_action'] == 'edit') { ?><span>保存</span>
<?php } ?>
</button>
<?php if($_G['uid']) { ?>
<input type="hidden" id="postsave" name="save" value="" />
<?php if($_G['gp_action'] == 'newthread' && !$modnewthreads || $_G['gp_action'] == 'edit' && $isfirstpost && !$modnewreplies && $thread['displayorder'] == -4) { ?>
<button type="button" id="postsubmit" class="pn" value="true" onclick="$('postsave').value = 1;$('postsubmit').click();"><em>保存草稿</em></button>
<?php } } if($special == 2) { ?><label><input type="checkbox" name="continueadd" value="yes" class="pc" />保存后继续添加下一个商品</label><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_btn_extra'])) echo $_G['setting']['pluginhooks']['post_btn_extra'];?>
<?php if(!empty($_G['setting']['pluginhooks']['post_sync_method'])) { ?>
<span>
将此主题同步到:
<?php if(!empty($_G['setting']['pluginhooks']['post_sync_method'])) echo $_G['setting']['pluginhooks']['post_sync_method'];?>
</span>
<?php } ?>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['post_bottom'])) echo $_G['setting']['pluginhooks']['post_bottom'];?>
</div>
</div>
</div><div id="psd" class="appl">
<h3 class="mbm pbm bbs">附加选项</h3>
<div class="bn">
<?php if(!empty($_G['setting']['pluginhooks']['post_side_top'])) echo $_G['setting']['pluginhooks']['post_side_top'];?>
<?php if(($_G['forum']['allowhtml'] || ($_G['gp_action'] == 'edit' && ($orig['htmlon'] & 1))) && $_G['group']['allowhtml']) { ?>
<p class="mbn"><input type="checkbox" name="htmlon" id="htmlon" class="pc" value="1" <?php echo $htmloncheck;?> /><label for="htmlon">HTML 代码</label></p>
<?php } else { ?>
<p class="mbn"><input type="checkbox" name="htmlon" id="htmlon" class="pc" value="0" <?php echo $htmloncheck;?> disabled="disabled" /><label for="htmlon">HTML 代码</label></p>
<?php } ?>
<p class="mbn"><input type="checkbox" id="allowimgcode" class="pc" disabled="disabled"<?php if($_G['forum']['allowimgcode']) { ?> checked="checked"<?php } ?> /><label for="allowimgcode">[img] 代码</label></p>
<?php if($_G['forum']['allowimgcode']) { ?>
<p class="mbn"><input type="checkbox" id="allowimgurl" class="pc" checked="checked" /><label for="allowimgurl">解析图片链接</label></p>
<?php } ?>
<p class="mbn"><input type="checkbox" name="parseurloff" id="parseurloff" class="pc" value="1" <?php echo $urloffcheck;?> /><label for="parseurloff">禁用链接识别</label></p>
<p class="mbn"><input type="checkbox" name="smileyoff" id="smileyoff" class="pc" value="1" <?php echo $smileyoffcheck;?> /><label for="smileyoff">禁用表情</label></p>
<p class="mbn"><input type="checkbox" name="bbcodeoff" id="bbcodeoff" class="pc" value="1" <?php echo $codeoffcheck;?> /><label for="bbcodeoff">禁用编辑器代码</label></p>

<hr class="bk" />

<p class="mbn"><input type="checkbox" name="usesig" id="usesig" class="pc" value="1" <?php if(!$_G['group']['maxsigsize']) { ?>disabled <?php } else { ?><?php echo $usesigcheck;?> <?php } ?>/><label for="usesig">使用个人签名</label></p>
<?php if($_G['gp_action'] != 'edit') { if($_G['group']['allowanonymous']) { ?><p class="mbn"><input type="checkbox" name="isanonymous" id="isanonymous" class="pc" value="1" /><label for="isanonymous">使用匿名发帖</label></p><?php } } else { if($_G['group']['allowanonymous'] || (!$_G['group']['allowanonymous'] && $orig['anonymous'])) { ?><p class="mbn"><input type="checkbox" name="isanonymous" id="isanonymous" class="pc" value="1" <?php if($orig['anonymous']) { ?>checked="checked"<?php } ?> /><label for="isanonymous">使用匿名发帖</label></p><?php } } if($_G['gp_action'] == 'newthread' || $_G['gp_action'] == 'edit' && $isfirstpost) { ?>
<p class="mbn"><input type="checkbox" name="hiddenreplies" id="hiddenreplies" class="pc"<?php if($thread['hiddenreplies']) { ?> checked="checked"<?php } ?> value="1"><label for="hiddenreplies">回帖仅作者可见</label></p>
<?php } if($_G['uid'] && ($_G['gp_action'] == 'newthread' || $_G['gp_action'] == 'edit' && $isfirstpost) && $special != 3) { ?>
<p class="mbn"><input type="checkbox" name="ordertype" id="ordertype" class="pc" value="1" <?php echo $ordertypecheck;?> /><label for="ordertype">回帖倒序排列</label></p>
<?php } if(($_G['gp_action'] == 'newthread' || $_G['gp_action'] == 'edit' && $isfirstpost)) { ?>
<p class="mbn"><input type="checkbox" name="allownoticeauthor" id="allownoticeauthor" class="pc" value="1"<?php if($allownoticeauthor) { ?> checked="checked"<?php } ?> /><label for="allownoticeauthor">接收回复通知</label></p>
<?php } if($_G['gp_action'] != 'edit' && $_G['forum']['allowfeed']) { ?>
<p class="mbn"><input type="checkbox" name="addfeed" id="addfeed" class="pc" value="1" <?php echo $addfeedcheck;?>><label for="addfeed">发送动态</label></p>
<?php } if($_G['gp_action'] == 'newthread' && $_G['forum']['ismoderator'] && ($_G['group']['allowdirectpost'] || !$_G['forum']['modnewposts'])) { ?>
<hr class="bk" />

<?php if($_G['gp_action'] == 'newthread' && $_G['forum']['ismoderator'] && ($_G['group']['allowdirectpost'] || !$_G['forum']['modnewposts'])) { if($_G['group']['allowstickthread']) { ?>
<p class="mbn"><input type="checkbox" name="sticktopic" id="sticktopic" class="pc" value="1" <?php echo $stickcheck;?> /><label for="sticktopic">主题置顶</label></p>
<?php } if($_G['group']['allowdigestthread']) { ?>
<p class="mbn"><input type="checkbox" name="addtodigest" id="addtodigest" class="pc" value="1" <?php echo $digestcheck;?> /><label for="addtodigest">精华帖子</label></p>
<?php } } } elseif($_G['gp_action'] == 'edit' && $_G['forum_auditstatuson']) { ?>
<hr class="bk" />

<p class="mbn"><input type="checkbox" name="audit" id="audit" class="pc" value="1"><label for="audit">通过审核</label></p>
<?php } ?>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['post_side_bottom'])) echo $_G['setting']['pluginhooks']['post_side_bottom'];?>
<?php if($_G['gp_action'] == 'edit' && $isorigauthor && ($isfirstpost && $thread['replies'] < 1 || !$isfirstpost) && !$rushreply && $_G['setting']['editperdel']) { ?>
<div class="ptm hm">
<input type="hidden" name="delete" id="delete" value="0" />
<hr class="l" />
<p class="ptm pbn"><button type="button" class="pn" onclick="deleteThread();"><span style="white-space: nowrap">删除本帖</span></button></p>
<p class="xw1 xi1">删除后无法撤销<?php if($thread['special'] == 3) { ?>, ，返还悬赏费用，不退还手续费<?php } ?></p>
</div>
<?php } ?>
</div></div>
</form>
<iframe name="ajaxpostframe" id="ajaxpostframe" style="display: none;"></iframe>

<div id="<?php echo $editorid;?>_menus" class="editorrow" style="overflow: hidden; margin-top: -5px; height: 0; border: none; background: transparent;"><div id="<?php echo $editorid;?>_editortoolbar" class="editortoolbar"><?php $fontoptions = array("仿宋", "黑体", "楷体", "宋体", "新宋体", "微软雅黑", "Trebuchet MS", "Tahoma", "Arial", "Impact", "Verdana", "Times New Roman")?><div class="p_pop fnm" id="<?php echo $editorid;?>_fontname_menu" style="display: none">
<ul unselectable="on"><?php if(is_array($fontoptions)) foreach($fontoptions as $fontname) { ?><li onclick="discuzcode('fontname', '<?php echo $fontname;?>')" style="font-family: <?php echo $fontname;?>" unselectable="on"><a href="javascript:;" title="<?php echo $fontname;?>"><?php echo $fontname;?></a></li>
<?php } ?>
</ul>
</div><?php $sizeoptions = array(1, 2, 3, 4, 5, 6, 7)?><div class="p_pop fszm" id="<?php echo $editorid;?>_fontsize_menu" style="display: none">
<ul unselectable="on"><?php if(is_array($sizeoptions)) foreach($sizeoptions as $size) { ?><li onclick="discuzcode('fontsize', <?php echo $size;?>)" unselectable="on"><a href="javascript:;" title="<?php echo $size;?>"><font size="<?php echo $size;?>" unselectable="on"><?php echo $size;?></font></a></li>
<?php } ?>
</ul>
</div>

</div>

<script type="text/javascript">smilies_show('smiliesdiv', <?php echo $_G['setting']['smcols'];?>, editorid + '_');</script><?php
$creditstring = <<<EOF

EOF;
 if(is_array($postattachcredits)) foreach($postattachcredits as $id => $credit) { if($credit != '') { 
$creditstring .= <<<EOF
{$_G['setting']['extcredits'][$id]['title']} 
EOF;
 if($credit >= 0) { 
$creditstring .= <<<EOF
+{$credit}
EOF;
 } else { 
$creditstring .= <<<EOF
{$credit}
EOF;
 } 
$creditstring .= <<<EOF
 {$_G['setting']['extcredits'][$id]['unit']} &nbsp;
EOF;
 } } 
$creditstring .= <<<EOF

EOF;
?>
<div class="p_pof" id="<?php echo $editorid;?>_image_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><div class="mtm mbm">
<ul class="tb tb_s cl" id="<?php echo $editorid;?>_image_ctrl" style="margin-top: 0">
<li class="y"><span class="flbc" onclick="hideAttachMenu('image')">关闭</span></li>
<li class="current" id="<?php echo $editorid;?>_btn_www"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('www');">网络图片</a></li>
<?php if($_G['setting']['homestatus']) { ?><li id="<?php echo $editorid;?>_btn_albumlist"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('albumlist');">相册图片</a></li><?php } if($allowpostimg) { ?>
<li id="<?php echo $editorid;?>_btn_imgattachlist"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('imgattachlist');">图片列表</a></li>
<?php if($_G['setting']['swfupload'] != 1 && $allowuploadtoday) { ?><li id="<?php echo $editorid;?>_btn_local"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('local');">普通上传</a></li><?php } if($_G['setting']['swfupload'] != 0 && $allowuploadtoday) { ?><li id="<?php echo $editorid;?>_btn_multi"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('multi');">批量上传</a></li><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_image_btn_extra'])) echo $_G['setting']['pluginhooks']['post_image_btn_extra'];?>
</ul>
<div class="p_opt popupfix" unselectable="on" id="<?php echo $editorid;?>_www">
<table cellpadding="0" cellspacing="0" width="100%">
<tr class="xg1">
<th width="74%">请输入图片地址</th>
<th width="13%">宽(可选)</th>
<th width="13%">高(可选)</th>
</tr>
<tr>
<td><input type="text" id="<?php echo $editorid;?>_image_param_1" onchange="loadimgsize(this.value)" style="width: 95%;" value="" class="px" autocomplete="off" /></td>
<td><input id="<?php echo $editorid;?>_image_param_2" size="1" value="" class="px p_fre" autocomplete="off" /></td>
<td><input id="<?php echo $editorid;?>_image_param_3" size="1" value="" class="px p_fre" autocomplete="off" /></td>
</tr>
<tr>
<td colspan="3" class="pns ptn">
<button type="button" class="pn pnc" id="<?php echo $editorid;?>_image_submit"><strong>提交</strong></button>
</td>
</tr>
</table>
</div>
<?php if($allowpostimg) { if($_G['setting']['swfupload'] != 1) { ?>
<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_local" style="display: none;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tbody id="imgattachbodyhidden" style="display:none"><tr>
<td class="atnu"><span id="imglocalno[]"><img src="<?php echo STATICURL;?>image/filetype/common_new.gif" /></span></td>
<td class="atna">
<span id="imgdeschidden[]" style="display:none">
<span id="imglocalfile[]"></span>
</span>
<input type="hidden" name="imglocalid[]" />
</td>
<td class="attc"><span id="imgcpdel[]"></span></td>
</tr></tbody>
</table>
<div class="p_tbl"><table cellpadding="0" cellspacing="0" summary="post_attachbody" border="0" width="100%"><tbody id="imgattachbody"></tbody></table></div>
<div class="upbk pbm bbda">
<div id="imgattachbtnhidden" style="display:none"><span><form name="imgattachform" id="imgattachform" method="post" autocomplete="off" action="misc.php?mod=swfupload&amp;operation=upload&amp;simple=1&amp;type=image" target="attachframe" <?php echo $enctype;?>><input type="hidden" name="uid" value="<?php echo $_G['uid'];?>"><input type="hidden" name="hash" value="<?php echo md5(substr(md5($_G['config']['security']['authkey']), 8).$_G['uid']); ?>"><input type="file" name="Filedata" size="45" class="filedata" /></form></span></div>
<div id="imgattachbtn" class="ptm pbn"></div>
<p id="imguploadbtn">
<button class="pn pnc vm" type="button" onclick="uploadAttach(0, 0, 'img')"><span>上传</span></button>
<span class="xg1">&larr;选择完文件后请点击“上传”按钮</span>
</p>
<p id="imguploading" style="display: none;"><img src="<?php echo IMGDIR;?>/uploading.gif" style="vertical-align: middle;" /> 上传中，请稍候，您可以<a href="javascript:;" onclick="hideMenu()">暂时关闭这个小窗口</a>，上传完成后您会收到通知</p>
</div>
<div class="notice upnf">
文件尺寸: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>小于 <?php echo $maxattachsize_mb;?> <?php } else { ?>大小不限制<?php } ?></span>
<?php if($imgexts) { ?>
, 可用扩展名: <span class="xi1"><?php echo $imgexts;?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="积分说明">每上传一个附件您的&nbsp;<?php echo $creditstring;?></a>
<?php } if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
您今日还能上传 <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> 个文件<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> 或者 <?php } ?>总大小 <strong><?php echo $allowuploadsize;?></strong> 以内的文件<?php } } else { ?>
<span class="xi1 xw1">今日您已无法上传更多的附件</span>
<?php } } ?>
</div>
</div>
<?php } if($_G['setting']['swfupload'] != 0) { ?>
<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_multi" style="display: none;">
<div class="bbda hm" id="<?php echo $editorid;?>_multiimg">
<script type="text/javascript">
$('<?php echo $editorid;?>_multiimg').innerHTML = AC_FL_RunContent(
'width', '470', 'height', '268',
'src', '<?php echo IMGDIR;?>/upload.swf?site=<?php echo $_G['siteroot'];?>misc.php%3fmod=swfupload%26type=image%26fid=<?php echo $_G['fid'];?>&type=image&random=<?php echo random(4); ?>',
'quality', 'high',
'id', 'swfupload',
'menu', 'false',
'allowScriptAccess', 'always',
'wmode', 'transparent'
);
</script>
</div>
<div class="notice uploadinfo">
文件尺寸: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>小于 <?php echo $maxattachsize_mb;?> <?php } else { ?>大小不限制<?php } ?></span>
<?php if($imgexts) { ?>
, 可用扩展名: <span class="xi1"><?php echo $imgexts;?></span>
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="积分说明">每上传一个附件您的&nbsp;<?php echo $creditstring;?></a>
<?php } ?>
<br />建议一次上传数量不超过 <strong>20</strong>
<?php if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
您今日还能上传 <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> 个文件<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> 或者 <?php } ?>总大小 <strong><?php echo $allowuploadsize;?></strong> 以内的文件<?php } } else { ?>
<span class="xi1 xw1">今日您已无法上传更多的附件</span>
<?php } } ?>
</div>
</div>
<?php } ?>
<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_imgattachlist" style="display: none;">
<div class="upfilelist upfl">
<?php if(!empty($imgattachs['used'])) { ?><?php $imagelist = $imgattachs['used'];?><?php include template('forum/ajax_imagelist'); } ?>
<div id="imgattachlist">
<?php if(empty($imgattachs['used']) && empty($imgattachs['unused'])) { ?>
<div class="emp hm bbda">本帖还没有图片附件<?php if($allowuploadtoday) { ?>, <a href="javascript:;" onclick="switchImagebutton('<?php if($_G['setting']['swfupload'] != 0) { ?>multi<?php } else { ?>local<?php } ?>');">点击这里</a>上传<?php } ?></div>
<?php } ?>
</div>
<div id="unusedimgattachlist"></div>
</div>
<p id="imgattach_notice"<?php if(empty($imgattachs['used']) && empty($imgattachs['unused'])) { ?> style="display: none"<?php } ?>>
<?php if($_G['setting']['homestatus'] && $_G['group']['allowupload']) { ?>
<label><input type="checkbox" name="selectallimg" class="pc" value="1" onchange="selectAllSaveImg(this.checked);" onpropertychange="selectAllSaveImg(this.checked);" />全部保存到相册</label>
<br />保存选中的图片到相册:
<select name="uploadalbum" onclick="if(!this.value) {$('createalbum').style.display = ''} else {$('createalbum').style.display = 'none'}"><?php if(is_array($albumlist)) foreach($albumlist as $album) { ?><option value="<?php echo $album['albumid'];?>"><?php echo $album['albumname'];?></option>
<?php } ?>
<option value="">+创建新相册</option>
</select>
<br />
<div id="createalbum" style="display:none">
<?php if($_G['setting']['albumcategorystat'] && !empty($_G['cache']['albumcategory'])) { ?><?php echo category_showselect('album', 'albumcatid', !$_G['setting']['albumcategoryrequired'] ? true : false, $_GET['catid']);?>&nbsp;
<?php } ?>
<input type="text" name="newalbum" class="px mtn" size="35" value="" />
</div>
<?php } ?>
<p class="notice">点击图片添加到帖子内容中</p>
</p>
</div>
<?php } if($_G['setting']['homestatus']) { ?>
<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_albumlist" style="display: none;">
<div class="upfilelist pbm bbda">
从我的相册中选择图片:
<select onchange="if(this.value) {ajaxget('forum.php?mod=post&action=albumphoto&aid='+this.value, 'albumphoto');}">
<option value="">选择相册</option><?php if(is_array($albumlist)) foreach($albumlist as $album) { ?><option value="<?php echo $album['albumid'];?>"><?php echo $album['albumname'];?></option>
<?php } ?>
</select>
<div id="albumphoto"></div>
</div>
<p class="notice">点击图片添加到帖子内容中</p>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_image_tab_extra'])) echo $_G['setting']['pluginhooks']['post_image_tab_extra'];?>
</div></td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
</div>

<?php if($_G['group']['allowpostattach']) { ?>
<div class="p_pof upf" id="<?php echo $editorid;?>_attach_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><div class="mtm mbm">
<ul class="tb tb_s cl" id="<?php echo $editorid;?>_attach_ctrl">
<li class="y"><span class="flbc" onclick="hideAttachMenu('attach')">关闭</span></li>
<li class="current" id="<?php echo $editorid;?>_btn_attachlist"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('attachlist');">附件列表</a></li>
<?php if($_G['setting']['swfupload'] != 1 && $allowuploadtoday) { ?><li id="<?php echo $editorid;?>_btn_upload"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('upload');">普通上传</a></li><?php } if($_G['setting']['swfupload'] != 0 && $allowuploadtoday) { ?><li id="<?php echo $editorid;?>_btn_swfupload"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('swfupload');">批量上传</a></li><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_attach_btn_extra'])) echo $_G['setting']['pluginhooks']['post_attach_btn_extra'];?>
</ul>
<?php if($_G['setting']['swfupload'] != 1) { ?>
<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_upload" style="display: none;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tbody id="attachbodyhidden" style="display:none"><tr>
<td class="atnu"><span id="localno[]"><img src="<?php echo STATICURL;?>image/filetype/common_new.gif" /></span></td>
<td class="atna">
<span id="deschidden[]" style="display:none">
<span id="localfile[]"></span>
</span>
<input type="hidden" name="localid[]" />
</td>
<td class="attc"><span id="cpdel[]"></span></td>
</tr></tbody>
</table>
<div class="p_tbl"><table cellpadding="0" cellspacing="0" summary="post_attachbody" border="0" width="100%"><tbody id="attachbody"></tbody></table></div>
<div class="upbk pbm bbda">
<div id="attachbtnhidden" style="display:none"><span><form name="attachform" id="attachform" method="post" autocomplete="off" action="misc.php?mod=swfupload&amp;operation=upload&amp;simple=1" target="attachframe" <?php echo $enctype;?>><input type="hidden" name="uid" value="<?php echo $_G['uid'];?>"><input type="hidden" name="hash" value="<?php echo md5(substr(md5($_G['config']['security']['authkey']), 8).$_G['uid']); ?>"><input type="file" name="Filedata" size="45" class="fldt" /></form></span></div>
<div id="attachbtn" class="ptm pbn"></div>
<p id="uploadbtn">
<button type="button" class="pn pnc vm" onclick="uploadAttach(0, 0)"><span>上传</span></button>
<span class="xg1">&larr;选择完文件后请点击“上传”按钮</span>
</p>
<p id="uploading" style="display: none;"><img src="<?php echo IMGDIR;?>/uploading.gif" style="vertical-align: middle;" /> 上传中，请稍候，您可以<a href="javascript:;" onclick="hideMenu()">暂时关闭这个小窗口</a>，上传完成后您会收到通知</p>
</div>
<div class="notice upnf">
文件尺寸: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>小于 <?php echo $maxattachsize_mb;?> <?php } else { ?>大小不限制<?php } ?></span>
<?php if($_G['group']['attachextensions']) { ?>
, 可用扩展名: <span class="xi1"><?php echo $_G['group']['attachextensions'];?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="积分说明">每上传一个附件您的&nbsp;<?php echo $creditstring;?></a>
<?php } if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
您今日还能上传 <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> 个文件<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> 或者 <?php } ?>总大小 <strong><?php echo $allowuploadsize;?></strong> 以内的文件<?php } } else { ?>
<span class="xi1 xw1">今日您已无法上传更多的附件</span>
<?php } } ?>
</div>
</div>
<?php } if($_G['setting']['swfupload'] != 0) { ?>
<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_swfupload" style="display: none;">
<div class="hm bbda" id="<?php echo $editorid;?>_multiattach">
<script type="text/javascript">
$('<?php echo $editorid;?>_multiattach').innerHTML = AC_FL_RunContent(
'width', '470', 'height', '268',
'src', '<?php echo IMGDIR;?>/upload.swf?site=<?php echo $_G['siteroot'];?>misc.php%3fmod=swfupload%26fid=<?php echo $_G['fid'];?>&random=<?php echo random(4); ?>',
'quality', 'high',
'id', 'swfupload',
'menu', 'false',
'allowScriptAccess', 'always',
'wmode', 'transparent'
);
</script>
</div>
<div class="notice uploadinfo">
文件尺寸: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>小于 <?php echo $maxattachsize_mb;?> <?php } else { ?>大小不限制<?php } ?></span>&nbsp;
<?php if($_G['group']['attachextensions']) { ?>
, 可用扩展名: <span class="xi1"><?php echo $_G['group']['attachextensions'];?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="积分说明">每上传一个附件您的&nbsp;<?php echo $creditstring;?></a>
<?php } ?>
<br>建议一次上传数量不超过 <strong>20</strong>
<?php if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
您今日还能上传 <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> 个文件<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> 或者 <?php } ?>总大小 <strong><?php echo $allowuploadsize;?></strong> 以内的文件<?php } } else { ?>
<span class="xi1 xw1">今日您已无法上传更多的附件</span>
<?php } } ?>
</div>
</div>
<?php } ?>
<div class="p_opt post_tablelist" unselectable="on" id="<?php echo $editorid;?>_attachlist">
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="attach_tblheader"<?php if(empty($attachs['used']) && empty($attachs['unused'])) { ?> style="display: none"<?php } ?>>
<tr>
<td class="atnu"></td>
<td class="atna">文件名 ( <a onclick="insertAllAttachTag();return false;" href="javascript:;" class="xi2">插入全部附件</a> )</td>
<td class="atds">描述</td>
<?php if($_G['group']['allowsetattachperm']) { ?>
<td class="attv">
阅读权限
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" style="margin: 0;" onmouseover="showTip(this)" tip="阅读权限按由高到低排列，高于或等于选中组的用户才可以阅读" />
</td>
<?php } if($_G['group']['maxprice']) { ?><td class="attp"><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></td><?php } ?>
<td class="attc"></td>
</tr>
</table>
<div class="upfl">
<?php if(!empty($attachs['used'])) { ?><?php $attachlist = $attachs['used'];?><?php include template('forum/ajax_attachlist'); } ?>
<div id="attachlist">
<?php if(empty($attachs['used']) && empty($attachs['unused'])) { ?>
<p class="emp hm">本帖还没有附件<?php if($allowuploadtoday) { ?>, <a href="javascript:;" onclick="switchAttachbutton('<?php if($_G['setting']['swfupload'] != 0) { ?>swfupload<?php } else { ?>upload<?php } ?>');return false;">点击这里</a>上传<?php } ?></p>
<?php } ?>
</div>
<div id="unusedattachlist"></div>
</div>
<p class="ptm" id="attach_notice"<?php if(empty($attachs['used']) && empty($attachs['unused'])) { ?> style="display: none"<?php } ?>>点击附件文件名添加到帖子内容中<?php if($_G['setting']['allowattachurl']) { ?>，"attach://" 开头的附件地址支持任何人下载请谨慎添加<?php } ?></p>
<?php if($_G['group']['maxprice'] && $_G['setting']['maxincperthread']) { ?><p class="notice">附件出售最高收入上限为 <?php echo $_G['setting']['maxincperthread'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?>&nbsp;&nbsp;&nbsp;&nbsp;</p><?php } ?>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['post_attach_tab_extra'])) echo $_G['setting']['pluginhooks']['post_attach_tab_extra'];?>
</div></td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
</div>
<?php } ?>

<iframe name="attachframe" id="attachframe" style="display: none;" onload="uploadNextAttach();"></iframe>

<script type="text/javascript">
if(wysiwyg) {
newEditor(1, bbcode2html(textobj.value));
} else {
newEditor(0, textobj.value);
}
<?php if($editor['simplemode'] > 0) { ?>
editorsimple();
<?php } ?>

var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
function switchImagebutton(btn) {
switchButton(btn, 'image');
$(editorid + '_image_menu').style.height = '';
doane();
}
<?php if($allowpostimg) { ?>
ATTACHNUM['imageused'] = <?php echo @count($imgattachs['used']); ?>;
<?php if(!empty($imgattachs['used']) || !empty($imgattachs['unused'])) { ?>
switchImagebutton('imgattachlist');
$(editorid + '_image').evt = false;
updateattachnum('image');
<?php } else { ?>
switchImagebutton('<?php if($_G['setting']['swfupload'] != 0) { ?>multi<?php } else { ?>local<?php } ?>');
<?php } } if($_G['group']['allowpostattach'] || $_G['group']['allowpostimage']) { ?>
function switchAttachbutton(btn) {
switchButton(btn, 'attach');
doane();
}
ATTACHNUM['attachused'] = <?php echo @count($attachs['used']); ?>;
<?php if(!empty($attachs['used']) || !empty($attachs['unused'])) { ?>
$(editorid + '_attach').evt = false;
updateattachnum('attach');
<?php } else { ?>
switchAttachbutton('<?php if($_G['setting']['swfupload'] != 0) { ?>swfupload<?php } else { ?>upload<?php } ?>');
<?php } } if(!empty($attachs['unused'])) { ?>
display('attachnotice_attach');
var msg = '';<?php if(is_array($attachs['unused'])) foreach($attachs['unused'] as $attach) { ?>msg += '<p><label><input id="unused<?php echo $attach['aid'];?>" name="unused[]" value="<?php echo $attach['aid'];?>" checked type="checkbox" class="pc" /><span title="<?php echo $attach['filenametitle'];?> <?php echo $attach['dateline'];?>"><?php echo $attach['filename'];?></span></label></p>'
ATTACHUNUSEDAID[<?php echo $attach['aid'];?>] = '<?php echo $attach['aid'];?>';
<?php } ?>
$('unusedlist_attach').innerHTML = '<div class="cl">' + msg + '</div>';
$('unusednum_attach').innerHTML = parseInt(<?php echo @count($attachs['unused']); ?>);
<?php } if(!empty($imgattachs['unused'])) { ?>
display('attachnotice_img');
var msg = '';<?php if(is_array($imgattachs['unused'])) foreach($imgattachs['unused'] as $attach) { ?>msg += '<p style="float:left;width:220px;"><label><input id="unused<?php echo $attach['aid'];?>" name="unused[]" value="<?php echo $attach['aid'];?>" checked type="checkbox" class="pc" /><span title="<?php echo $attach['filenametitle'];?> <?php echo $attach['dateline'];?>"><?php echo $attach['filename'];?></span></label></p>'
IMGUNUSEDAID[<?php echo $attach['aid'];?>] = '<?php echo $attach['aid'];?>';
<?php } ?>
$('unusedlist_img').innerHTML = '<div class="cl">' + msg + '</div>';
$('unusednum_img').innerHTML = parseInt(<?php echo @count($imgattachs['unused']); ?>);
<?php } ?>
setCaretAtEnd();
if(BROWSER.ie >= 5 || BROWSER.firefox >= '2') {
_attachEvent(window, 'beforeunload', unloadAutoSave);
}
<?php if(!empty($_G['gp_cedit']) && $_G['gp_cedit'] == 'yes') { ?>
loadData(1);
$(editorid + '_switchercheck').checked = !wysiwyg;
<?php } ?>
</script></div>

<?php if($special || ($_G['gp_action'] == 'newthread' && $_G['group']['allowpostrushreply'] && $special != 2) || ($_G['gp_action'] == 'edit' && getstatus($thread['status'], 3))) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<script type="text/javascript">
var editorsubmit = $('postsubmit');
var editorform = $('postform');
<?php if($isfirstpost && !empty($_G['forum']['threadtypes']['types'])) { ?>
simulateSelect('typeid');
<?php } if(!$isfirstpost && $thread['special'] == 5 && empty($firststand) && $_G['gp_action'] != 'edit') { ?>
simulateSelect('stand');
<?php } ?>
function switchpost(href) {
editchange = false;
saveData(1);
location.href = href + '&fid=<?php echo $_G['fid'];?>&cedit=yes<?php if(!empty($_G['tid'])) { ?>&tid=<?php echo $_G['tid'];?><?php } if(!empty($modelid)) { ?>&modelid=<?php echo $modelid;?><?php } ?>&extra=<?php echo $extra;?>';
doane();
}

<?php if($_G['gp_action'] == 'newthread' && $_G['setting']['sitemessage']['newthread'] || $_G['gp_action'] == 'reply' && $_G['setting']['sitemessage']['reply']) { ?>
showPrompt('custominfo', 'mouseover', '<?php if($_G['gp_action'] == 'newthread') { echo trim($_G['setting']['sitemessage']['newthread'][array_rand($_G['setting']['sitemessage']['newthread'])]); } elseif($_G['gp_action'] == 'reply') { echo trim($_G['setting']['sitemessage']['reply'][array_rand($_G['setting']['sitemessage']['reply'])]); } ?>', <?php echo $_G['setting']['sitemessage']['time'];?>);
<?php } if($_G['setting']['swfupload'] != 1 && $_G['group']['allowpostattach']) { ?>addAttach();<?php } if($_G['setting']['swfupload'] != 1 && $allowpostimg) { ?>addAttach('img');<?php } ?>

if($('subjectbox')) {
var tmp_obj = $('e_textarea');
if(tmp_obj && tmp_obj.style.display == '') {
tmp_obj.focus();
}
} else if($('subject')) {
$('subject').focus();
}
<?php if(empty($_G['gp_cedit'])) { ?>
if(loadUserdata('forum')) {
$('rstnotice').style.display = '';
}
<?php } if(!empty($userextcredit)) { ?>
var have_replycredit = 0;
var creditstax = <?php echo $_G['setting']['creditstax'];?>;
var replycredit_result_lang = "税后支付<?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?> ";
var userextcredit = <?php echo $userextcredit;?>;
<?php if($thread['replycredit'] > 0) { ?>
have_replycredit = <?php echo $thread['replycredit'];?>;
<?php } } if($_G['gp_action'] == 'edit') { ?>
extraCheckall();
<?php } ?>
</script>	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { ?><?php $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { ?><?php $focus = $_G['cache']['focus']['data'][$focusid];?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $focusid;?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2><?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?></h2>
</div>
<div class="bm_c">
<dl class="xld cl bbda">
<dt><a href="<?php echo $focus['url'];?>" class="xi2" target="_blank"><?php echo $focus['subject'];?></a></dt>
<?php if($focus['image']) { ?>
<dd class="m"><a href="<?php echo $focus['url'];?>" target="_blank"><img src="<?php echo $focus['image'];?>" alt="<?php echo $focus['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $focus['summary'];?></dd>
</dl>
<p class="ptn hm"><a href="<?php echo $focus['url'];?>" class="xi2" target="_blank">查看 &raquo;</a></p>
</div>
</div>
</div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div id="ft" class="wp cl">
<div id="flk" class="y">
<p><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { if($nav['id'] == 'mobile' && $_G['setting']['mobile']['allowmobile'] != 1) { ?><?php continue;?><?php } ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
<p class="xs0">
GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<span id="debuginfo">
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if($_G['memory']) { ?>, <?php echo ucwords($_G['memory']); ?> On<?php } ?>.
<?php } ?>
</span>
</p>
</div>
<div id="frt">
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?></p>
<p class="xs0">&copy; 2001-2011 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></p>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>

<?php if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="tip tip_3" style="display:none;">
<div class="tip_c">
积分 <?php echo $_G['member']['credits'];?>, 距离下一级还需 <?php echo $upgradecredit;?> 积分
</div>
<div class="tip_horn"></div>
</div>
<?php } } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if((CURMODULE == 'topic' || $_G['group']['allowdiy']) && (empty($do) || $do != 'index') && !empty($_G['style']['tplfile'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_G['gp_do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } ?><?php userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<span id="scrolltop" onclick="window.scrollTo('0','0')">回顶部</span>
<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});</script>
<?php } ?><?php output();?></body>
</html>
