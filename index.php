<?php
$method = $_SERVER['REQUEST_METHOD'];
$serverLocation = 'https://chatfuel0509.herokuapp.com/';
if (isset($_GET['msg']) && ! empty($_GET['msg'])){
	$text = $_GET['msg'];
	
	//$filepath = sprintf("../response/%s.json", $text);
	//echo __DIR__ . '/response/' . $text . '.json';
	$responseSet = file_get_contents('response/' . $text . '.json');
	$responseSetJson = json_decode($responseSet, JSON_UNESCAPED_UNICODE);
	$imageCount = count($responseSetJson['imageUrl']);
	//echo $imageCount;

	$imagerul = $responseSetJson['imageUrl'][rand(0, $imageCount - 1)];
		
	$message = array(
				"messages" => [array(
					"attachment" => array(
					"type" => "image",
					"payload" => array(
					"url" => $serverLocation . $imagerul
					)
					)		
				)
				]
			);
	echo json_encode($message);
}

	/*$message = array(
				"messages" => [array(
					"text" => $text
				),
				array(
					"text" => "hello"
				)
				]
			);
	*/

/*
{
 "messages": [
   {"text": "Welcome to our store!"},
   {"text": "How can I help you?"}
 ]
}
*/

/*
{
  "messages": [
    {
      "attachment": {
        "type": "image",
        "payload": {
          "url": "https://rockets.chatfuel.com/assets/welcome.png"
        }
      }
    }
  ]
}
*/

/* Process only when method is POST
if($method == 'GET'){
	$text = $_GET['msg'];
	$message = {
			 "messages": [
			   {"text": "hello"},
			   {"text": "this is server"},
			   {"text": $text}
			 ]
			}
	echo $text;
}
*/
?>