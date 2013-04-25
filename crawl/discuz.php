<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-25
 * Time: 上午11:29
 * To change this template use File | Settings | File Templates.
 */


$userInfo = array(
    'user_id' => 1,
    'username' => 'admin',
    'password' => '123456'
);

define('TIMESTAMP', time());

function postThread($forumId, $subject, $content)
{
    global $userInfo;

    $mysql = new mysql();

    //1 插入帖子
    //INSERT INTO cs_forum_thread (fid, posttableid, readperm, price, typeid, sortid, author, authorid, subject, dateline, lastpost, lastposter,
    //displayorder, digest, special, attachment, moderated, status, isgroup, replycredit, closed)
    //VALUES ('2', '0', '0', '0', '0', '0', 'admin', '1', 'dsadas', '1366857964', '1366857964', 'admin', '0', '0', '0', '0', '0', '32', '0', '0', '0')
    $thread = array(
        'fid' => $forumId,
        'posttableid' => '0',
        'readperm' => '0',
        'price' => '0',
        'typeid' => '0',
        'sortid' => '',
        'author' => $userInfo['username'],
        'authorid' => $userInfo['user_id'],
        'subject' => $subject,
        'dateline' => TIMESTAMP,
        'lastpost' => TIMESTAMP,
        'lastposter' => $userInfo['username'],
        'displayorder' => '0',
        'digest' => '0',
        'special' => '0',
        'attachment' => '0',
        'moderated' => '0',
        'status' => '32',
        'isgroup' => '0',
        'replycredit' => '0',
        'closed' => '0'
    );

    $mysql->insert('cs_forum_thread', $thread);
    $threadId = $mysql->insert_id();

    //2 用户操作日志
    //INSERT INTO cs_common_member_action_log (`uid`, `action`, `dateline`) VALUES ('1', '0', '1366857964')
    $userOperaLog = array(
        'uid' => $userInfo['user_id'],
        'action' => '0',
        'dateline' => TIMESTAMP,
    );
    $mysql->insert('cs_common_member_action_log', $userOperaLog);
    $userOperaLogId = $mysql->insert_id();

    //3 更新家园中 近期更新(备注)
    //UPDATE cs_common_member_field_home SET `recentnote`='dsadas' WHERE `uid`='1'
    $memberHome = array(
        'recentnote' => $subject,
    );
    $mysql->update('cs_common_member_field_home', $memberHome, 'uid='.$userInfo['user_id']);

    //4 标签表
    //INSERT INTO cs_common_tag (tagname, status) VALUES ('dsadas', '0')
    $tag = array(
        'tagname' => $subject,
        'status' => '0',
    );
    $mysql->insert('cs_common_tag', $tag);
    $tagId = $mysql->insert_id();

    //5 标签内容
    //INSERT INTO cs_common_tagitem (tagid, tagname, itemid, idtype) VALUES ('1', 'dsadas', '7', 'tid')
    $tagContent = array(
        'tagid' => $tagId,
        'tagname' => $subject,
        'itemid' => $threadId,
        'idtype' => 'tid',
    );
    $mysql->insert('cs_common_tagitem', $tagContent);
    $tagContentId = $mysql->insert_id();

    //6 论坛回复
    //INSERT INTO cs_forum_post SET `fid`='2',`tid`='7',`first`='1',`author`='admin',`authorid`='1',`subject`='dsadas',`dateline`='1366857964',`message`='dsadsa ',
    //`useip`='127.0.0.1',`invisible`='0',`anonymous`='0',`usesig`='1',`htmlon`='0',`bbcodeoff`='-1',`smileyoff`='-1',`parseurloff`='',`attachment`='0',`tags`='1,dsadas\t',
    //`replycredit`='0',`status`='0',`pid`='6'
    $threadContent = array(
        'fid' => $forumId,
        'tid' => $threadId,
        'first' => '1',
        'author' => $userInfo['username'],
        'authorid' => $userInfo['user_id'],
        'subject' => $subject,
        'dateline' => TIMESTAMP,
        'message' => $content,
        'useip' => '127.0.0.1',
        'invisible' => '0',
        'anonymous' => '0',
        'usesig' => '1',
        'htmlon' => '1',
        'bbcodeoff' => '-1',
        'parseurloff' => '1',
        'attachment' => '0',
        'tags' => $tagId.','.$subject.'\t',
        'replycredit' => '0',
        'status' => '0',
    );
    $mysql->insert('cs_forum_post', $threadContent);

    //7 统计 用于显示今日发帖数量
    //UPDATE cs_common_stat SET `thread`=`thread`+1 WHERE daytime='20130425'
    $sql = "UPDATE cs_common_stat SET `thread`=`thread`+1 WHERE daytime=".date('Ymd', TIMESTAMP);//'20130425'
    $mysql->query($sql);

    //8 用户积分策略
    //UPDATE cs_common_credit_rule_log SET cyclenum=cyclenum+'1',total=total+'1',dateline='1366857964',extcredits1='0',extcredits2='2',extcredits3='0' WHERE clid='2'
    //$sql = "UPDATE cs_common_credit_rule_log SET cyclenum=cyclenum+'1',total=total+'1',dateline='".TIMESTAMP."',extcredits1='0',extcredits2='2',extcredits3='0' WHERE clid='2'";


    //9 用户数据统计
    //UPDATE cs_common_member_count SET extcredits1=extcredits1+'0',extcredits2=extcredits2+'2',extcredits3=extcredits3+'0',threads=threads+'1',posts=posts+'1' WHERE uid IN ('1')
    $sql = "UPDATE cs_common_member_count SET extcredits1=extcredits1+'0',extcredits2=extcredits2+'2',extcredits3=extcredits3+'0',threads=threads+'1',posts=posts+'1'
        WHERE uid IN ('{$userInfo['user_id']}')";
    $mysql->query($sql);


    //10 用户最后发帖时间
    //UPDATE cs_common_member_status SET lastpost='1366857964' WHERE uid IN ('1')
    $sql = "UPDATE cs_common_member_status SET lastpost='".TIMESTAMP."' WHERE uid IN ('{$userInfo['user_id']}')";
    $mysql->query($sql);

    //11 论坛版块表
    //UPDATE cs_forum_forum SET lastpost='7 dsadas 1366857964 admin', threads=threads+1, posts=posts+1, todayposts=todayposts+1 WHERE fid='2'
    $lastPost = $threadId.' '.$subject.' '.TIMESTAMP.' '.$userInfo['username'];
    //echo '<pre>';print_r($thread);print_r($subject);print_r($userInfo['username']);exit;
    $sql = "UPDATE cs_forum_forum SET lastpost='{$lastPost}', threads=threads+1, posts=posts+1, todayposts=todayposts+1 WHERE fid=".$forumId;
    $mysql->query($sql);

    //post分表协调表
    $sql = "insert into cs_forum_post_tableid(pid) value(null)";
    $mysql->query($sql);

    return true;
}
