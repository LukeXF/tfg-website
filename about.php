<?php
	/*
	  Author :		Luke Brown
	  License:  	Permission based - ask me first before using.
	  Created: 		July 2014
	  URL    :		https://github.com/LukeXF/tfg-website
	  Contact:		me@luke.sx
	*/
?>
<div class="wrapper">
<title>TFG - Information</title>
<?php include 'assets/header.php' ?>

<header>
	<div class="container">
		<h2 class="docs-header">About Me</h2></i>
	</div>
</header>

<section>
	<div class="container">

		<h3> Hello there,</h3>
		
		<p> 
			I am Theekshana, I am a YouTuber with <b><?php echo getYouTubeVideoViews('thefancygamerplays'); ?></b> views with <b><?php echo getYouTubeVideoViews('thefancygamerplays', 'subscriberCount'); ?></b> loyal subscribers and over the current time I have a total of <b><?php printf("%d\n",$uploads->data->totalItems,$user->entry->{'yt$statistics'}->totalUploadViews); ?></b> videos.


	</div>
</section>

<section class="vibrant centered">
	<div class="container">
		<h4><?php echo "Your IP Address is " . $_SERVER["REMOTE_ADDR"] . " and is been tracked for security reasons."; ?></h4>
	</div>
</section>



<div class="push"></div>
</div>
<?php include 'assets/footer.php' ?>