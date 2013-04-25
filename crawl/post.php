<?php

date_default_timezone_set('Asia/Chongqing');
require_once dirname(__FILE__) . '/Snoopy.class.php';
require_once dirname(__FILE__) . '/global.function.php';
require_once dirname(__FILE__) . '/post.class.php';


define('FORUM_DOMAIN', 'chunse.com');

$post = new post;

$user = array();
$user['username'] = 'admin';
$user['password'] = '123456';


$post->setCurrUser($user);


#模拟发帖
$threaddata=array();
$threaddata['allownoticeauthor'] = 1;
$threaddata['formhash'] = getFormHashValue();
$threaddata['message'] = '内容内容内容内容内容内容内dd容内ddds容内容内容ooo';
$threaddata['posttime'] = time();
$threaddata['replycredit_extcredits'] = 0;
$threaddata['replycredit_membertimes'] = 1;
$threaddata['replycredit_random'] = 100;
$threaddata['replycredit_times'] = 1;
$threaddata['subject'] = '标题标题标题标题标题标题标题标题uuu';
$threaddata['usesig'] = 1;
$threaddata['wysiwyg'] = 1;

#板块ID
$fid = 2;
$tid=$post->pubThread($threaddata, $fid);
exit;
#模拟发回复
$postdata=array();
$postdata['formhash'] = getFormHashValue();
$postdata['posttime'] = time();
$postdata['subject'] = '不错哦';
$postdata['usesig'] = 1;
$postdata['wysiwyg'] = 1;
$postdata['message']='呵呵呵呵';
$post->pubPost($postdata, $fid,$tid);



?>