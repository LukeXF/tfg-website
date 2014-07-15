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
<title>TFG - HOME PAGE</title>
<?php include 'assets/header.php' ?>

<header>
	<div class="container">
		<h2 class="docs-header">Welcome - TFG Plays Website</h2></i>
	</div>
</header>

<section>
	<div class="container">

		<div style="float: left; width: 33%; text-align: center;">
			<h2>  
				<?php echo getYouTubeVideoViews('thefancygamerplays'); ?>
			</h2>
			<h3>Total Views</h3>
		</div>

		<div style="float: left; width: 33%; text-align: center;">
			<h2>  
				<?php echo getYouTubeVideoViews('thefancygamerplays', 'subscriberCount'); ?>
			</h2>
			<h3>Total Subscribers</h3>
		</div>

		<div style="float: right; width: 33%; text-align: center;">
			<h2>  
						<?php	printf("%d\n",$uploads->data->totalItems,$user->entry->{'yt$statistics'}->totalUploadViews); ?>
			</h2>
			<h3>Total Videos</h3>
		</div>

		<h3> Hello there,</h3>
		
		<p> 
			I am Theekshana </p>
		<ul>
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