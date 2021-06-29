<!DOCTYPE html>
<!-- <html> -->
<head>
  <title>
    My Name 
  </title>
</head>

<body>
  <h1>Get My Name from Facebook</h1>

<?php
// echo 'hi';

// print(__DIR__)  ;
require_once '../vendor/autoload.php';   


$fb = new \Facebook\Facebook([
  'app_id' => '536531470818931',           
  'app_secret' => 'b5b0bba91a0c9d1213a876cf33c47f6f',  
  'graph_api_version' => 'v5.0',
]);


try {
   
// Get your UserNode object, replace {access-token} with your token
  $response = $fb->get('/me', 'EAAHnZBPe6nnMBAAVmNmsvQaIbsgopQ2ndaYbesSLXgV9e3k1zI2ZBmCYTY0sPlX5rZAhL5r11RxVxwfmnwPZBZAEoMBZBtHv7NtbtWKleoPV5H5g4ZCkEuF8N7Hpnj4aKVLl6p94axdj138MKZAG4OGkDMo11cSc8AqqYuEOMmgfcM5tLycNb4weMCwVVwK9ijRngS1wEmAS4p0kNXZBP3UvptWjsBAFWW5tUzSz0nZCgUaX0z2a7VIBf6');

} catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // Returns Graph API errors when they occur
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // Returns SDK errors when validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();

       //All that is returned in the response
echo 'Data returned from the Facebook : ' . $me;

       //Print out my name
// echo 'My name is ' . $me->getName();

?>

</body>
</html>