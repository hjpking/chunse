<?php

/**
 * 调用方式
 * $post->setCurrUser();//设置用户
 * $post->pubThread();//发帖子
 * $post->pubPost();//发回复
 */
class post {

    private $username = NULL;
    private $password = NULL;
    public $debug = true;
    private $isLogin = false;

    public function setCurrUser($user) {
        if (!$user || !is_array($user) || !$user['username'] || !$user['password']) {
            die(logformat('ERROR:' . __METHOD__ . '|' . __LINE__ . '|Please Check The Var $user!'));
        }
        if ($this->username != $user['username']) {
            clearFormHashFile();
            clearLocalCookie();
            logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|Call $this->login()');
            //用户不一致,切换用户
            $this->username = $user['username'];
            $this->password = $user['password'];
            $this->isLogin = $this->login();
            //登录完成后访问首页
            if ($this->isLogin) {
                $url = 'http://' . FORUM_DOMAIN . '/forum.php';
                $referer = 'http://' . FORUM_DOMAIN . '/';
                $this->isLogin = $this->imitateVisit($url, $referer, true, true, 1);
                if (!$this->isLogin) {
                    logformat('WARNING:' . __METHOD__ . '|' . __LINE__ . '|Lost Cookies!');
                    return false;
                }
            }
        }
        logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|CurrUser Is :' . $this->username);
    }

    /**
     * 发布主题
     * @param type $threaddata
     * @param type $fid
     * @return boolean
     */
    public function pubThread($threaddata = array(), $fid = 0) {
        logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|START Pub Thread To Fid:' . $fid);
        if (!$fid) {
            logformat('WARNING:' . __METHOD__ . '|' . __LINE__ . '|Please Check The Var $fid !');
            return false;
        }
        $posturl = 'http://' . FORUM_DOMAIN . '/forum.php?mod=post&action=newthread&fid=' . $fid . '&extra=&topicsubmit=yes';
        $snoopy = new Snoopy;
        $snoopy->agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; QQDownload 716; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30729; .NET4.0C)";
        $snoopy->referer = "http://" . FORUM_DOMAIN . "/forum.php?mod=post&action=newthread&fid=" . $fid;
        $snoopy->rawheaders["Pragma"] = "no-cache";
        $snoopy->host = FORUM_DOMAIN;
        $snoopy->rawheaders["COOKIE"] = getLocalCookie();
        $snoopy->rawheaders["X_FORWARDED_FOR"] = '127.0.0.1';
        $snoopy->submit($posturl, $threaddata);
        #记录Cookie
        //setLocalCookie($snoopy->headers);
        if ($this->debug) {
            file_put_contents(dirname(__FILE__) . '/pubThread.log', $snoopy->results);
            file_put_contents(dirname(__FILE__) . '/pubThread.log', print_r($snoopy->headers, true), 8);
        }
echo '<pre>';print_r($snoopy->results);exit;
        $pTid = "#tid = parseInt\('(.*)'\)#isU";
        preg_match_all($pTid, $snoopy->results, $d);

        if (!$d[1][0]) {
            logformat('WARNING:' . __METHOD__ . '|' . __LINE__ . '|Pub Thread May be Failed To Fid:' . $fid);
        } else {
            logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|Success Pub Thread AND The tid Is:' . $d[1][0]);
        }
        logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|END Pub Thread,And The tid Is:' . $d[1][0]);

        return intval($d[1][0]);
    }

    /**
     * 发布回复
     * @param type $threaddata
     * @param type $fid
     * @return boolean
     */
    public function pubPost($threaddata = array(), $fid = 0, $tid = 0) {
        logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|START Pub Post To Tid:' . $tid);
        if (!$fid || !$tid) {
            logformat('WARNING:' . __METHOD__ . '|' . __LINE__ . '|Please Check The Vars $fid And $tid !');
            return false;
        }

        $posturl = 'http://' . FORUM_DOMAIN . '/forum.php?mod=post&action=reply&fid=' . $fid . '&tid=' . $tid . '&extra=&replysubmit=yes';
        $snoopy = new Snoopy;
        $snoopy->agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; QQDownload 716; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30729; .NET4.0C)";
        $snoopy->referer = 'http://' . FORUM_DOMAIN . '/forum.php?mod=post&action=reply&fid=' . $fid . '&extra=&tid=' . $tid;
        $snoopy->rawheaders["Pragma"] = "no-cache";
        $snoopy->host = FORUM_DOMAIN;
        $snoopy->rawheaders["COOKIE"] = getLocalCookie();
        $snoopy->rawheaders["X_FORWARDED_FOR"] = '127.0.0.1';
        $snoopy->submit($posturl, $threaddata);
        if ($this->debug) {
            file_put_contents(dirname(__FILE__) . '/pubPost.log', $snoopy->results);
            file_put_contents(dirname(__FILE__) . '/pubPost.log', print_r($snoopy->headers, true), 8);
        }
        logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|END Pub Post To Tid:' . $tid);
    }

    /**
     * 模拟访问
     * @param type $url
     * @param type $refer
     * @param type $h
     */
    private function imitateVisit($url, $referer, $h = false, $c = true, $k = 'default') {
        logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|Fetch Url:' . $url);
        $e = parse_url($url);
        $snoopy = new Snoopy;
        $snoopy->agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; QQDownload 716; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30729; .NET4.0C)";
        $snoopy->referer = $referer;
        $snoopy->rawheaders["Pragma"] = "no-cache";
        $snoopy->host = $e['host'];
        $snoopy->rawheaders["COOKIE"] = getLocalCookie();
        $snoopy->rawheaders["X_FORWARDED_FOR"] = '127.0.0.1';
        $snoopy->fetch($url);
        #设置Cookie
        if ($c) {
            setLocalCookie($snoopy->headers);
        }
        #记录FormHash
        if ($h) {
            clearFormHashFile();
            setFormHashValue($snoopy->results);
        }
        if ($this->debug) {
            file_put_contents(dirname(__FILE__) . '/visit-' . $k . '.log', $snoopy->results);
            file_put_contents(dirname(__FILE__) . '/visit-' . $k . '.log', print_r($snoopy->headers, true), 8);
        }

        if ($k == 1) {
            //检测是否登录成功
            $strChk = $this->username . '</a></strong>';
            if (strpos($snoopy->results, $strChk)) {
                return true;
            }
            logformat('WARNING:' . __METHOD__ . '|' . __LINE__ . '|Fetch Index May Lost Cookies!User:' . $this->username);
            return false;
        }

        return true;
    }

    /**
     * 执行登录
     */
    private function login() {
        $loginurl = 'http://' . FORUM_DOMAIN . '/member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes&inajax=1';
        $logindata = array();
        $logindata['fastloginfield'] = 'username';
        $logindata['handlekey'] = 'ls';
        $logindata['password'] = $this->password;
        $logindata['quickforward'] = 'yes';
        $logindata['username'] = $this->username;

        $snoopy = new Snoopy;
        $snoopy->agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; QQDownload 716; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30729; .NET4.0C)";
        $snoopy->referer = "http://" . FORUM_DOMAIN;
        $snoopy->rawheaders["Pragma"] = "no-cache";
        $snoopy->rawheaders["COOKIE"] = getLocalCookie();
        $snoopy->rawheaders["X_FORWARDED_FOR"] = '127.0.0.1';
        $snoopy->submit($loginurl, $logindata);
        #清除之前的人的Cookie
        clearLocalCookie();
        #写Cookie
        setLocalCookie($snoopy->headers);
        if ($this->debug) {
            file_put_contents(dirname(__FILE__) . '/login.log', $snoopy->results);
            file_put_contents(dirname(__FILE__) . '/login.log', print_r($snoopy->headers, true), 8);
        }
        #看用户名密码是否正确
        $strChk = "<root><![CDATA[<script type=\"text/javascript\" reload=\"1\">window.location.href='http://" . FORUM_DOMAIN . "/forum.php';</script>]]></root>";
        if (strpos($snoopy->results, $strChk) || strpos($snoopy->results, "<root><![CDATA[<script type=\"text/javascript\" reload=\"1\">window.location.href='forum.php';</script>]]></root>")) {
            logformat('NOTICE:' . __METHOD__ . '|' . __LINE__ . '|User:' . $logindata['username'] . '|Login Access OK!');
            return true;
        }
        logformat('WARNING:' . __METHOD__ . '|' . __LINE__ . '|User:' . $logindata['username'] . '|Login Failed,Check User And Password!');
		die();
        return false;
    }

}

?>