
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>Check Your IP</title>

<a href="https://github.com/Anonymous121/ip-checker"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>

</head>

<body>

<?php include_once ("menu.php"); ?>

<?php

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

//////////////////////////////////////////////////
//						//
//	IP Checker Script for Tor		//
//						//
//	Author: Anonymous12 Date: 1-24-2014	//
//	Email:	anonymous12@riseup.net		//
//////////////////////////////////////////////////

// Tor Function

function getIP($type) {
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
                 return $ip;
                     }
                 if ($type==1) {return md5($ip);}
                 if ($type==0) {return $ip;}
                 }




// Grab IP from Clearnet Server - Will output the server that executed the php code

$externalContent = file_get_contents('http://api.externalip.net/ip');

//------

$ipTor = getIP(0);

//$ipExternal = $externalContent;

//$ipExternal = $_SERVER['REMOTE_ADDR'];

//$ipclear = $_SERVER['REMOTE_ADDR'];

$hostaddress = gethostbyaddr($ipExternal);

$browser = $_SERVER['HTTP_USER_AGENT'];

$referred = $_SERVER['HTTP_REFERER'];
?>

<div id="opgave">

<?php
print "<bold>Your IP Address from ClearNet is:</bold><br />\n";

//print "$ipExternal<br /><br />\n";
print "<bold>Cannot find it due how Tor works. Google: What is my IP to find it.</bold><br>";

//print "<bold>Your Fully Qualified Doman Name:</bold><br />\n";

//print "$hostaddress<br /><br />\n";

//print "<bold>Info about your internet browser</bold>:<br />\n";

//print "$browser<br /><br />\n";

print "You IP Address from Dark Net is:</bold><br>\n";

print "$ipTor<br /><br/>\n";

print "<li>Darknet => Tor Network</li><br>";
print "<li>Clearnet => Normal Internet <b>(Your IP When Connecting to non onion addresses)</b></li><br>";


print "<p>Time is now:</p>";
	date_default_timezone_set('GMT');
	echo date('Y-m-d H:i:s T', time()) . "<br>\n";

print "</div>";
?>

<div id="footer">

<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time = round(($finish - $start), 4);
        print "Page generated in '.$total_time.' seconds.<br>";
	print "&copy; 2014 | All Rights Reserved.";
?>
<!-- &copy; 2014 | All Rights Reserved. -->

</div>
</body>
</html>
