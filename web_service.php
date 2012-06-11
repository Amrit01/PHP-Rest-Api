<?php

//$url = 'http://www.samundra.com.np/clients/rest/welcome.php';

$request = $_SERVER['REQUEST_METHOD'];

// Do not allo the GET request
if($request=="GET") {
  header('status : 405 Method not Allowed');
  print 'Method Not Allowed';
  exit;
}

// Write to log file in case if we have any problem
$fp = fopen('log.txt','w');
fwrite($fp, serialize($_SERVER['POST']['username']));
fclose($fp);

// Get the actual POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Our Simple Logic implementation 
if($username=='ritesh' && $password=='pass'){
  
  // set Header Tpe to plain/text
  header('content-type:plain/text');
  print "OK";
}else {
  // set Header Tpe to plain/text
  header('content-type:plain/text');
  print "CANCEL";
}
