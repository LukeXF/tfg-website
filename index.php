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
		<h2 class="docs-header">Home Page</h2></i>
	</div>
</header>

<div class="white">
	<div class="container">
		<div class="title">Hey There!</div>
		<div class="title2">
			Welcome to my website, I hope you enjoy your stay and feel free to communicate with me through my channel, twitter, email or join me in the chat room, all of which is available through the navigation bar above. Thanks for staying tuned and make sure to subscribe!
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

		<form action="MAILTO:theekshana.ambepitiya@gmail.com?subject=Website Contact Form" enctype="text/plain" method="post" class="basic-grey">
    
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="My Name" placeholder="Your Full Name" />
    </label>
    
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="My Contact Address" placeholder="Valid Email Address" />
    </label>
    
    <label>
        <span>Message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
    </label> 
     <label>
        <span>Subject :</span><select name="selection">
        <option value="Job Inquiry">Suggestions</option>
        <option value="Job Inquiry">Improvements</option>
        <option value="Job Inquiry">Business Relations</option>
        <option value="General Question">General Question</option>
        </select>
    </label>    
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Send" /> 
    </label>    
</form>


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