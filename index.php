<?php 
    /*
        Author   :      Luke Brown
        Website  :      http://luke.sx
        Created  :      July 2014
        Contact  :      me@luke.sx
    */
 ?>


<div class="wrapper">
<title>TFG - HOME PAGE</title>
<?php include 'assets/header.php' ?>

<header>
	<div class="container">
		<h2 class="docs-header">Home Page</h2></i>
	</div>
</header>

<div class="white">
	<div class="container">
		<div class="title">Hey There!</div>
		<div class="title2">
			Welcome to my website, I hope you enjoy your stay and feel free to communicate with me through my
			channel, twitter, email or join me in the chat room, all of which is available through the navigation
			bar above. Thanks for staying tuned and make sure to subscribe!
		</div>
	</div>
</div>	

<div class="blue">
	<div class="container">
		<div class="title">My Latest Feed</div>
			<?php include 'assets/feed.php';?>
	</div>
</div>


<div class="white">
	<div class="container">
		<?php include 'assets/stats.php';?>
		<?php /* include 'assets/twitter/index.php'; */ ?>
	</div>
</div>

<div class="grey">
	<div class="container">
		<div class="title">Contact Me <span> Please fill all the texts in the fields.</span></div>
		<?php include 'assets/contact.php';?>
	</div>
</div>

<!--<section class="vibrant centered">
	<div class="container">
		<h4><?php echo "Your IP Address is " . $_SERVER["REMOTE_ADDR"] . " and is been tracked for security reasons."; ?></h4>
	</div>
</section>-->



<div class="push"></div>
</div>
<?php include 'assets/footer.php' ?>