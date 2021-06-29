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

require_once __DIR__ . '../vendor/autoload.php';   

$fb = new \Facebook\Facebook([
  'app_id' => '536531470818931',           
  'app_secret' => 'b5b0bba91a0c9d1213a876cf33c47f6f',  
  'graph_api_version' => 'v5.0',
]);


try {
   
// Get your UserNode object, replace {access-token} with your token
  $response = $fb->get('/me', 'EAAHnZBPe6nnMBADkpKY1gcGZAyEGKptJN64SglKkqdyHZAUZBWLbmZAYTLdAeqyoEg75T6WdYOWZALatH30WMLX5R3skAdJ7CCpW1ACGZAdNZBe02lmpvxwEqcKAdJjvAWZBdmxT9TBc69tyenTTXaPeQiLGhXXGh9rMkB0dvxYGpsk8qt6cOL0ZCLOE85KUFl13Okda2sYXmohWZBC7JwEK8sD3wshlJuLyNDm1ts5NvNTrO4AR0YiWJJD');

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