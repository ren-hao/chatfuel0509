<?php
$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'GET'){
	$text = $_GET['msg'];
	$message = {
			 "messages": [
			   {"text": "hello"},
			   {"text": "this is server"}
			 ]
			}
	echo $message;
}
>