<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-24
 * Time: 下午9:43
 * To change this template use File | Settings | File Templates.
 */
require_once 'function.php';
require_once 'analysis.php';


date_default_timezone_set('Asia/Chongqing');
require_once dirname(__FILE__) . '/Snoopy.class.php';
require_once dirname(__FILE__) . '/global.function.php';
require_once dirname(__FILE__) . '/post.class.php';



$config = array('dir' => '/data/chunse/');
$rules = $rule['456zy'];

$limit = 5;
$start = 1001;
//$end   = 12400;
$end   = 1001;

$data = array(
    'name' => '',
    'type' => '',
    'area' => '',
    'status' => '',
    'content' => '',
    'image' => '',
    'address' => '',
);

define('FORUM_DOMAIN', 'chunse.com');

$post = new post;

$user = array();
$user['username'] = 'admin';
$user['password'] = '123456';


$post->setCurrUser($user);

for ($i = $start; $i <= $end; $i++)
{
    //$fileName = $config['dir'].intToPath($ii).'index.html';//echo $fileName."\n";exit;
    $fileName = dirname(dirname(__FILE__)).'\crawl\index.html';
    if (!file_exists(($fileName))) continue;

    $content = file_get_contents($fileName);
    if (empty ($content)) continue;

    $content = iconv('gbk', 'utf-8', $content);
//echo $content;
    //影片名
    preg_match($rules['name'], $content, $name);
    $data['name'] = isset($name[1]) ? $name[1] : '';

    //影片类型
    preg_match($rules['type'], $content, $type);
    $data['type'] = isset($type[1]) ? $type[1] : '';

    //影片地区
    preg_match($rules['area'], $content, $area);
    $data['area'] = isset($area[1]) ? $area[1] : '';

    //影片状态
    preg_match($rules['status'], $content, $status);
    $data['status'] = isset($status[1]) ? $status[1] : '';

    //影片内容
    preg_match($rules['content'], $content, $contents);
    $data['content'] = isset($contents[1]) ? $contents[1] : '';

    //影片图片
    preg_match($rules['image'], $contents[1], $image);
    $data['image'] = isset($image[1]) ? $image[1] : '';

    //影片地址
    preg_match($rules['address'], $content, $address);
    $data['address'] = isset($address[1]) ? $address[1] : '';

    //p($data);







#模拟发帖
    $threaddata=array();
    $threaddata['allownoticeauthor'] = 1;
    $threaddata['formhash'] = getFormHashValue();
    $threaddata['message'] = $data['content']."<br>影片地址：".$data['address'];
    $threaddata['posttime'] = time();
    $threaddata['replycredit_extcredits'] = 0;
    $threaddata['replycredit_membertimes'] = 1;
    $threaddata['replycredit_random'] = 100;
    $threaddata['replycredit_times'] = 1;
    $threaddata['subject'] = '['.$data['type'].']'.$data['name'];
    $threaddata['usesig'] = 1;
    $threaddata['wysiwyg'] = 1;

#板块ID
    $fid = 2;
    $tid=$post->pubThread($threaddata, $fid);

    //unset ($post);

    sleep(1);
}
