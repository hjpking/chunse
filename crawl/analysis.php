<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-24
 * Time: 下午9:42
 * To change this template use File | Settings | File Templates.
 */
$rule = array(
    '456zy' => array(
        'name' => "/影片名称：.*<font.*>[.*>](.*)[.*<]<\/font>/sU",
        'type' => "/影片类型：.*<font.*>(.*)<\/font>/sU",
        'area' => "/影片地区：.*<font.*>(.*)<\/font>/sU",
        'status' => "/影片状态：.*<font.*>(.*)<\/font>/sU",
        'address' => "/<input.*id=['\"]copy_yah['\"].*value=['\"](.*)['\"].*\/>/sU",
        'content' => "/<div class=\"intro\">(.*)<\/div>/sU",
        'image' => "/<img.*src=\"(.*)\".*>/sU",
    ),
);