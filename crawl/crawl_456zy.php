<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-23
 * Time: 下午8:20
 * To change this template use File | Settings | File Templates.
 */
require_once 'function.php';
require_once 'crawl.php';

$config = array('dir' => '/data/chunse/');


//echo file_get_contents('http://www.456zy.com/detail/?1001.html');exit;
$limit = 5;
$start = 1001;
$end   = 12400;

$url = 'http://www.456zy.com/detail/?%d.html';

/*
for ($i = $start; $i <= $end; $i++)
{
    echo $i."\n";

    $fileName = $config['dir'].intToPath($i).'index.html';//echo $fileName."\n";exit;
    if (file_exists(($fileName))) continue;

    $crawl = new crawl($config);

    $urls = sprintf($url, $i);

    $crawl->crawlOnes($urls, $i);

    //usleep(500000);
    sleep(1);
}
//*/

//*
for ($i = $start; $i < $end; $i = $i + $limit)
{
    $crawl = new crawl($config);
    //$crawl = new crawl_tools($config);
    echo $i."\n";
    echo $i+$limit."\n";
    $urlArray = array();

    for ($ii = $i; $ii < $i+$limit; $ii++)
    {
        //* 抓取漏抓的页面
        $fileName = $config['dir'].intToPath($ii).'index.html';//echo $fileName."\n";exit;
        if (file_exists(($fileName))) continue;

	    $urlArray[$ii] = sprintf($url, $ii);
    }
    //echo '<pre>';print_r($urlArray);exit;continue;

    //*抓取漏抓的页面
    if (empty ($urlArray)) continue;


    $crawl->crawlList($urlArray);
    unset ($crawl);
    sleep(2);
}
//*/

