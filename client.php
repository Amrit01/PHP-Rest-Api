<?php

// client url here
//$url = 'http://www.samundra.com.np/client/rest/client.php';
/** 
Uncomment the below line and put the actual client url
This is also the url, where the actual request will be made 
**/
$url = '{put your url here}';

// Actual Post Request Here
$data = array(
    'username'=>'ritesh',
    'password'=>'pass',
);

// Initialize the curl
/** 
Curl is separate PHP extension which you might need to enable in php.ini under extensions.
**/
$ch = curl_init($url);

// Set the url
curl_setopt($ch,CURLOPT_URL,$url);

// We want to store the output in some variable rather than just printing it out directly
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

// We want to do POST request
curl_setopt($ch,CURLOPT_POST,TRUE);

// Our POST data
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

// Finally execute the curl request
$response = curl_exec($ch);

//  End the curl request
curl_close($ch);

// Print out the whole request

echo $response;      