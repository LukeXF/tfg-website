<?php

echo "hi2";
include('TwitterAPIExchange.php');

echo "hi";


function getTweets($twitteruser) { 
    $notweets = 20;
    $consumerkey = "PxG4e1ZfQ32JdrizC2ELHJOZK";
    $consumersecret = "qN5PdVyVPNQa5sGGZ9KLgfCaHKLIqqY8Pl50S2VnrJVciN4GP4";
    $accesstoken = "1332524168-PJhoBS6CsweVLrZUxR8FwiBnzMTjRb6lyxIxos1";
    $accesstokensecret = "iqjL687RKyB1NjljWTVMC0CHfN7oxPmDQAJAmE9GpiB4k";
      
    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
      return $connection;
    }
       
    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
     
    return ($tweets);
}

$tweets = getTweets($twitteruser);
foreach ($tweets as $line){
    $status = $line->text;
    $tweetTime =  $line->created_at;
    $tweetId = $line->id_str;
    $outputTweet = '<li>'.$status.'</span> <a style="font-size:85%" href="http://twitter.com/'.$twitteruser.'/statuses/'.$tweetId.'">'. $tweetTime .'</a></li>';
    echo $outputTweet;    
}

$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets."&include_rts=0&exclude_replies=true");