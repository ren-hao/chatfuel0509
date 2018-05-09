<?php
$method = $_SERVER['REQUEST_METHOD'];

if (isset($_GET['msg']) && ! empty($_GET['msg'])){
	$text = $_GET['msg'];
	$message = array(
				"messages" => [array(
					"text" => $text
				),
				array(
					"text" => "hello"
				)
				]
			);
	echo json_encode($message);
}
/*
{
 "messages": [
   {"text": "Welcome to our store!"},
   {"text": "How can I help you?"}
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