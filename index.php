
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
body, div, h1, h2, h3, h4, h5, h6, p, ul, ol, li, dl, dt, dd, img, form, fieldset, input, textarea, blockquote {
	margin: 0; padding: 0; border: 0;
}

body {
	background: #909eab url(bg.png);
	background-attachment:fixed;
	font-family: Helvetica, sans-serif; font-size: 18px; line-height: 24px;
}

nav {
	margin: 50px auto; 
	text-align: center;
}

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}


nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 10px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}

	nav ul li {
		float: left;
	}
		nav ul li:hover {
			background: #4b545f;
			background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
			background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
			background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
		}
			nav ul li:hover a {
				color: #fff;
			}
		
		nav ul li a {
			display: block; padding: 15px 20px;
			color: #757575; text-decoration: none;
		}
			
		
	nav ul ul {
		background: #5f6975; border-radius: 0px; padding: 0;
		position: absolute; top: 100%;
	}
		nav ul ul li {
			float: none; 
			border-top: 1px solid #6b727c;
			border-bottom: 1px solid #575f6a; position: relative;
		}
			nav ul ul li a {
				padding: 15px 20px;
				color: #fff;
			}	
				nav ul ul li a:hover {
					background: #4b545f;
				}
		
	nav ul ul ul {
		position: absolute; left: 100%; top:0;
	}
		
body, div, h1, h2, form, fieldset, input, textarea {
	margin: 0; padding: 0; border: 0; outline: none;
}

html {
	height: 100%;
}

body {
	background: #728eaa;
	background: -moz-linear-gradient(top, #25303C 0%, #728EAA 100%); /* firefox */	
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#25303C), color-stop(100%,#728EAA)); /* webkit */
	font-family: sans-serif; 
	background-attachment:fixed;
}

#contact {
	width: 430px; margin: 60px auto; padding: 60px 30px;
	background: #c9d0de; border: 1px solid #e1e1e1;
	-moz-box-shadow: 0px 0px 8px #444;
	-webkit-box-shadow: 0px 0px 8px #444;
	-moz-border-radius: 50px;
	border-radius: 50px;
}

h1 {
	font-size: 35px; color: #445668; text-transform: uppercase;
	text-align: center; margin: 0 0 35px 0; text-shadow: 0px 1px 0px #f2f2f2;
}
h2 {
	font-size: 22px; color: #445668; text-transform: uppercase;
	text-align: center; margin: 0 0 35px 0; text-shadow: 0px 1px 0px #f2f2f2;
}


label {
	float: left; clear: left; margin: 11px 20px 0 0; width: 95px;
	text-align: right; font-size: 16px; color: #445668; 
	text-transform: uppercase; text-shadow: 0px 1px 0px #f2f2f2;
}

input {
	width: 260px; height: 35px; padding: 5px 20px 0px 20px; margin: 0 0 20px 0; 
	background: #5E768D;
	background: -moz-linear-gradient(top, #546A7F 0%, #5E768D 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D)); /* webkit */
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	-moz-box-shadow: 0px 1px 0px #f2f2f2;-webkit-box-shadow: 0px 1px 0px #f2f2f2;
	font-family: sans-serif; font-size: 16px; color: #f2f2f2; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71; 
}
	input::-webkit-input-placeholder  {
    	color: #a1b2c3; text-shadow: 0px -1px 0px #38506b;  
	}
	input:-moz-placeholder {
	    color: #a1b2c3; text-shadow: 0px -1px 0px #38506b; 
	}

textarea {
	width: 260px; height: 170px; padding: 12px 20px 0px 20px; margin: 0 0 20px 0; 
	background: #5E768D;
	background: -moz-linear-gradient(top, #546A7F 0%, #5E768D 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D)); /* webkit */
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	-moz-box-shadow: 0px 1px 0px #f2f2f2;-webkit-box-shadow: 0px 1px 0px #f2f2f2;
	font-family: sans-serif; font-size: 16px; color: #f2f2f2; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71; 
}
	textarea::-webkit-input-placeholder  {
    	color: #a1b2c3; text-shadow: 0px -1px 0px #38506b;  
	}
	textarea:-moz-placeholder {
	    color: #a1b2c3; text-shadow: 0px -1px 0px #38506b; 
	}
	
input:focus, textarea:focus {
	background: #728eaa;
	background: -moz-linear-gradient(top, #668099 0%, #728eaa 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#668099), color-stop(20%,#728eaa)); /* webkit */
}

input[type=submit] {
	width: 185px; height: 52px; float: right; padding: 10px 15px; margin: 0 15px 0 0;
	-moz-box-shadow: 0px 0px 5px #999;-webkit-box-shadow: 0px 0px 5px #999;
	border: 1px solid #556f8c;
	background: -moz-linear-gradient(top, #718DA9 0%, #415D79 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#718DA9), color-stop(100%,#415D79)); /* webkit */
	cursor: pointer;
}
#opgave {
	width: 900px; margin: 60px auto; padding: 60px 30px;
	background: #c9d0de; border: 1px solid #e1e1e1;
	-moz-box-shadow: 0px 0px 8px #444;
	-webkit-box-shadow: 0px 0px 8px #444;
	-moz-border-radius: 50px;
	border-radius: 50px;
}

#footer {
width: 680px;
background-color: #000;
color: #DDD;
text-align: center;
height: 40px;
padding-top: 10px;
margin: -50px auto 0 auto;
}
</style>

<title>Check Your IP</title>

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


// Grab IP from Clearnet Server

$externalContent = file_get_contents('http://api.externalip.net/ip');

//------

$ipTor = getIP(0);

$ipExternal = $externalContent;

//$ipclear = $_SERVER['REMOTE_ADDR'];

$hostaddress = gethostbyaddr($ipExternal);

$browser = $_SERVER['HTTP_USER_AGENT'];

$referred = $_SERVER['HTTP_REFERER'];
?>

<div id="opgave">

<?php
print "<bold>Your IP Address from ClearNet is:</bold><br />\n";

print "$ipExternal<br /><br />\n";

print "<bold>Your Fully Qualified Doman Name:</bold><br />\n";

print "$hostaddress<br /><br />\n";

//print "<bold>Info about your internet browser</bold>:<br />\n";

//print "$browser<br /><br />\n";

print "You IP Address from Dark Net is:</bold><br>\n";

print "$ipTor<br /><br/>\n";

print "<li>Darknet => Tor Network</li><tr>";
print "<li>Clearnet => Normal Internet <b>(Your IP When Connecting to non onion addresses)</b></li><tr>";


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
        print "Page generated in '.$total_time.' seconds.";
?>

</div>
</body>
</html>
