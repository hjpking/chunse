<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-24
 * Time: 下午9:43
 * To change this template use File | Settings | File Templates.
 */

date_default_timezone_set('Asia/Chongqing');

require_once 'function.php';
require_once 'analysis.php';
require_once 'discuz.php';
require_once 'mysql.php';

$config = array('dir' => '/data/chunse/');
$rules = $rule['456zy'];

$forumId = 2;

$limit = 5;
$start = 1001;
$end   = 12400;
//$end   = 1003;

$data = array(
    'name' => '',
    'type' => '',
    'area' => '',
    'status' => '',
    'content' => '',
    'image' => '',
    'address' => '',
);

for ($i = $start; $i <= $end; $i++)
{
    $fileName = $config['dir'].intToPath($i).'index.html';
    if (!file_exists(($fileName))) continue;

    $content = file_get_contents($fileName);
    if (empty ($content)) continue;

    $content = iconv('gbk', 'utf-8', $content);
    $content = preg_replace("/<!--.*-->/sU", '', $content);
    //echo $content;exit;
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
    preg_match($rules['image'], $data['content'], $image);
    $data['image'] = isset($image[1]) ? $image[1] : '';

    //影片地址
    preg_match($rules['address'], $content, $address);
    $data['address'] = isset($address[1]) ? $address[1] : '';

    //p($data);

    $title = '['.$data['type'].']'.$data['name'];
    $content = $data['content'].'<br><br>地址：'.$data['address'];
    postThread($forumId, $title, $content);
}
