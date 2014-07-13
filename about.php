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
<?php
$trends_url = "http://api.twitter.com/1/statuses/followers/TheFancyGamer.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $trends_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$curlout = curl_exec($ch);
curl_close($ch);
$response = json_decode($curlout, true);
foreach($response as $friends){
$thumb = $friends['profile_image_url'];
$url = $friends['TheFancyGamer'];
$name = $friends['name'];

?>
<a title="<?php echo $name;?>" href="http://www.twitter.com/<?php echo $url;?>">

<?php
}
?>

2 y

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