<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];


// Set this Verify Token Value on your Facebook App 
if ($verify_token === 'testtoken') {
  echo $challenge;
}

/*........RECEIVING INPUT FROM fACEBOOK.........*/
$input = json_decode(file_get_contents('php://input') , true);
print_r($input);
echo $input;
http_response_code(200);

header("HTTP/1.1 200 OK");

// $input = json_decode(file_get_contents('php://input'), true);
// // echo "testing app webhook";
// // Get the Senders Graph ID
// $sender = $input['entry'][0]['messaging'][0]['sender']['id'];

// // Get the returned message
// $message = $input['entry'][0]['messaging'][0]['message']['text'];

// // print_r($sender);
// // print_r($message)

// //API Url and Access Token, generate this token value on your Facebook App Page
// $url = 'https://graph.facebook.com/v2.6/me/messages?access_token=EAAHnZBPe6nnMBAPsZAvZAZA6rt0XRuS7ItWmWh943ZBLONJggbSHV1bcYjCvHWqkAgapY32ZBBTpQD9KpJVjf2WvNF6cUf2egZBZAMPeTXQ2x7Of81QREEyyilJ57sZBXi0rUb1f7WEHussqhZC8ae5ogSwaUcvKhvSMBJ4Jbkt647u43eN0DlM3yhckJq8CZC3ZBc3xQg8KiyHtbVoRn88P74wPxZBVh8d3SzZBE93tcZAiMFbmZA3AwfCIX7Uh';

// //Initiate cURL.
// $ch = curl_init($url);

// //The JSON data.
// $jsonData = '{
//     "recipient":{
//         "id":"' . $sender . '"
//     }, 
//     "message":{
//         "text":"The message you want to return"
//     }
// }';

// //Tell cURL that we want to send a POST request.
// curl_setopt($ch, CURLOPT_POST, 1);

// //Attach our encoded JSON string to the POST fields.
// curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// //Set the content type to application/json
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// //Execute the request but first check if the message is not empty.
// if(!empty($input['entry'][0]['messaging'][0]['message'])){
//   $result = curl_exec($ch);
// }
?>
