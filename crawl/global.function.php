<?php

/**
 * 日志输出
 * @param type $msg
 */
function logformat($msg, $p = true) {
    date_default_timezone_set('Asia/Chongqing');
    $s = date('Y-m-d H:i:s') . '|' . $msg . '|' . PHP_EOL;
    $file = dirname(__FILE__) . '/logs/' . date('Y-m-d') . '.log';
    FcheckDir($file);
    file_put_contents($file, $s, 8);
    if ($p) {
        echo $s;
    }
}

/**
 * 获取FormHash
 * @return type
 */
function getFormHashValue() {
    return @file_get_contents(getFormHashFile());
}

/**
 * 设置FormHash
 * @param type $html
 * @return type
 */
function setFormHashValue($html) {
    $p = '#<input type="hidden" name="formhash" value="(.*)" />#isU';
    preg_match_all($p, $html, $d);
    file_put_contents(getFormHashFile(), $d[1][0]);
    return $d[1][0];
}

/**
 * 清空FormHash
 * @return boolean
 */
function clearFormHashFile() {
    @unlink(getFormHashFile());
    return true;
}

/**
 * FormHash所保存在的文件
 * @return type
 */
function getFormHashFile() {
    return dirname(__FILE__) . '/formhash.txt';
}

/**
 * 获取Cookie保存的文件
 * @return type
 */
function getCookieFile() {
    return dirname(__FILE__) . '/cookie.txt';
}

/**
 * 获取本地Cookie
 * @return type
 */
function getLocalCookie() {
    return @file_get_contents(getCookieFile());
}

/**
 * 获取Cookie数组
 * @return type
 */
function getLocalCookieArray() {
    $array = array();
    $s = file_get_contents(getCookieFile());
    $e = explode(';', $s);
    foreach ($e as $t) {
        $y = explode('=', $t);
        $array[$t[0]] = $t[1];
    }
    return $array;
}

/**
 * 清空本地Cookie
 * @return boolean
 */
function clearLocalCookie() {
    @unlink(getCookieFile());
    return true;
}

/**
 * 设置本地Cookie
 * @param type $headers
 * @return type
 */
function setLocalCookie($headers) {
    $strLocalCookie = @file_get_contents(getCookieFile());
    $arrLocalCookie = array();
    $arrLocalCookieOld = explode(';', $strLocalCookie);
    if (!empty($arrLocalCookieOld)) {
        foreach ($arrLocalCookieOld as $v) {
            $f = explode('=', $v);
            $arrLocalCookie[$f[0]] = isset($f[1]) ? $f[1] : '';
        }
    }
    foreach ($headers as $header) {
        if (substr($header, 0, strlen('Set-Cookie:')) == 'Set-Cookie:') {
            $header = str_replace('Set-Cookie:', '', $header);
            $arrHeader = explode(';', $header);
            $cookieString = $arrHeader[0];
            $cookieArray = explode('=', $cookieString);
            $cookieArray[0] = trim($cookieArray[0]);
            $cookieArray[1] = trim($cookieArray[1]);
            $arrLocalCookie[$cookieArray[0]] = $cookieArray[1];
        }
    }
    $strCookieString = '';
    foreach ($arrLocalCookie as $k => $v) {
        $strCookieString.="{$k}={$v};";
    }
    file_put_contents(getCookieFile(), $strCookieString);
    return $strLocalCookie;
}

//检查并创建多级目录
function FcheckDir($path) {
    $pathArray = explode('/', $path);
    $nowPath = '';
    array_pop($pathArray);
    foreach ($pathArray as $key => $value) {
        if ('' == $value) {
            unset($pathArray[$key]);
        } else {
            if ($key == 0)
                $nowPath .= $value;
            else
                $nowPath .= '/' . $value;
            if (!is_dir($nowPath)) {
                if (!mkdir($nowPath, 0777))
                    return false;
            }
        }
    }
    return true;
}

?>