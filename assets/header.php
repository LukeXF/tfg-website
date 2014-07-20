<!--
    Author   :      Luke Brown
    Website  :      http://luke.sx
    Created  :      July 2014
    Contact  :      me@luke.sx
-->

<?php //Background Randomisation By Luke Brown
	$bg = array(
		'http://puu.sh/a8eJE/931415b40b.png',
		'http://puu.sh/a8fjb/f828893baf.png',
		'http://puu.sh/a8fk3/824530dbfb.png',
		);

	$i = rand(0, count($bg)-1);  $selectedBg = "$bg[$i]";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="The Fancy Gamer">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="keywords" content="YouTube, Minecraft">
<meta name="author" content="Luke Brown">
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Raleway:700,300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/style.css">
<style type="text/css">
	<!--header { background: url(<?php echo $selectedBg; ?>); 
		background-position: center center;
		background-repeat: no-repeat; 
		background-attachment: fixed; 
		background-size: 100%;
	} -->
</style>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js"></script>

<?php
	$youtube_view_count = json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/users/thefancygamerplays?v=2&alt=json'))->entry->{'yt$statistics'}->totalUploadViews;

	function getYouTubeVideoViews($channel, $stat = 'totalUploadViews')
	{
		return json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/users/' . $channel . '?v=2&alt=json'))->entry->{'yt$statistics'}->$stat;
	}

	$uploads = json_decode(file_get_contents(
	"https://gdata.youtube.com/feeds/api/users/thefancygamerplays/uploads?v=2&alt=jsonc&max-results=0"));
?>

</head>
<body>
<nav>
	<div class="container">
		<h1>The Fancy Gamer</h1>
		<div id="menu">
			<ul class="toplinks">
				<li><a href="./">Home</a></li>
				<li><a href="chat">Chat Room</a></li>
				<li><a href="https://twitter.com/TheFancyGamer">.<in class="fa fa-twitter fa-lg"></a></li>
				<li><a href="https://www.youtube.com/user/thefancygamerplays">.<in class="fa fa-youtube"></a></li>
			</ul>
		</div>
		<a id="menu-toggle" href="#" class=" ">&#9776;</a> </div>
</nav>
		<div id="top"><div class="g-ytsubscribe" data-channel="thefancygamerplays"></div></div>