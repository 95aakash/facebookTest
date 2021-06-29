<!DOCTYPE html>
<!-- <html> -->
<head>
  <title>
    My Name 
  </title>
</head>

<body>
  <h1>Get My Name from Facebook serve</h1>

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
  $response = $fb->get('/me', 'EAAHnZBPe6nnMBAPsZAvZAZA6rt0XRuS7ItWmWh943ZBLONJggbSHV1bcYjCvHWqkAgapY32ZBBTpQD9KpJVjf2WvNF6cUf2egZBZAMPeTXQ2x7Of81QREEyyilJ57sZBXi0rUb1f7WEHussqhZC8ae5ogSwaUcvKhvSMBJ4Jbkt647u43eN0DlM3yhckJq8CZC3ZBc3xQg8KiyHtbVoRn88P74wPxZBVh8d3SzZBE93tcZAiMFbmZA3AwfCIX7Uh');

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
