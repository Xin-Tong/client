<?php
$ch = curl_init();
$arguments = getopt('h:o:i:p:t:');
   
if(isset($arguments['h']))
    $host = $arguments['h']; 

$url="http://$host/openphoto.php?";  

if(isset($arguments['o'])){
    $operation = $arguments['o'];
    $url .= "operation=$operation&";
}

if(isset($arguments['i'])){
    $ID = $arguments['i'];
    $url .= "ID=$ID&";
}
if(isset($arguments['p'])){
    $path = $arguments['p'];
    $data = array('file' => "@$path");
    $url .= "path=$path&";
}
if(isset($arguments['t'])){
    $tags = $arguments['t'];
    $url .= "tags=$tags&";  
}
$consumerKey=getenv('consumerKey');
$consumerSecret = getenv('consumerSecret');
$token = getenv('token');
$tokenSecret = getenv('tokenSecret');

$url .= "consumerKey=$consumerKey&";
$url .= "consumerSecret=$consumerSecret&";
$url .= "token=$token&";
$url .= "tokenSecret=$tokenSecret";
//echo $url . "\n";

curl_setopt($ch, CURLOPT_URL, $url);
if(isset($arguments['p'])){
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
}

    curl_setopt($ch, CURLOPT_HEADER, 0);
    $resp = curl_exec($ch);
    curl_close($ch);
    echo $resp;
  
?>

