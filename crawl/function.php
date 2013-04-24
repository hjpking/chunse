<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evan
 * Date: 13-4-24
 * Time: 下午9:44
 * To change this template use File | Settings | File Templates.
 */
function intToPath($id)
{
    $id = (int)$id;
    if($id < 1)return false;

    preg_match("/(\d{1,2})(\d{0,2})/","{$id}", $matches);
    return $matches[1] . '/' . $matches[1].$matches[2] . '/' . $id . '/';
}

/**
 * 开发使用函数
 * @param $d
 */
function p($d)
{
    echo '<pre>';
    print_r($d);
    echo '</pre>';
    exit;
}

function d($d)
{
    echo '<pre>';
    var_dump($d);
    echo '</pre>';
    exit;
}
/* 开发使用函数结束 */