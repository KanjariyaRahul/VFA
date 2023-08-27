<?php 
    $url = "https://economictimes.indiatimes.com/prime/economy-and-policy/rssfeeds/63884214.cms";
    // $feed = simplexml_load_file($url);
    $feed = json_decode(json_encode(simplexml_load_file($url)), true);   
?>