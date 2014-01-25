<?php
function getIp() {

        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $ip;

function Test($type) {
	if (getenv("HTTP_CLIENT_IP")
                     && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
                     $ip = getenv("HTTP_CLIENT_IP");
                 else if (getenv("REMOTE_ADDR")
                     && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
                     $ip = getenv("REMOTE_ADDR");
                 else if (getenv("HTTP_X_FORWARDED_FOR")
                     && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
                     $ip = getenv("HTTP_X_FORWARDED_FOR");
                 else if (isset($_SERVER['REMOTE_ADDR'])
                     && $_SERVER['REMOTE_ADDR']
                     && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
                     $ip = $_SERVER['REMOTE_ADDR'];
                 else {
                     $ip = "unknown";
		 }
                 if ($type==1) {return md5($ip);}
                 if ($type==0) {return $ip;}
                 }

getIp();

//Test(0);

