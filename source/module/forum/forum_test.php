<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-23
 * Time: 下午8:20
 * To change this template use File | Settings | File Templates.
 */
set_time_limit(200);
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require libfile('class/crawl');

$config = array('dir' => '/data/chunse/');
$crawl = new crawl_tools($config);


$limit = 1;
$start = 1;
$end   = 376;

$url = 'http://www.456zy.com/list/?29-%d.html';

//*
for ($i = $start; $i < $end; $i = $i + $limit)
{
    //$crawl = new crawl_tools($config);
    echo $i."\n";
    echo $i+$limit."\n";
    $urlArray = array();

    for ($ii = $i; $ii < $i+$limit; $ii++)
    {
        //* 抓取漏抓的页面
        $fileName = $config['dir'].intToPath($ii).'index.html';
        if (file_exists(($fileName))) continue;

	    $urlArray[$ii] = sprintf($url, $ii);
    }
    //echo '<pre>';print_r($urlArray);exit;continue;

    //*抓取漏抓的页面
    if (empty ($urlArray)) continue;


    $crawl->crawlList($urlArray);
    unset ($crawl);
}
//*/

function intToPath($id)
{
	$id = (int)$id;
    if($id < 1)return false;

    preg_match("/(\d{1,2})(\d{0,2})/","{$id}", $matches);
	return $matches[1] . '/' . $matches[1].$matches[2] . '/' . $id . '/';
}