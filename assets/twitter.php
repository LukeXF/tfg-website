<?php
require_once('twitter/TwitterAPIExchange.php');
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=TheFancyGamer';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>