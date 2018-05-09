<?php
$method = $_SERVER['REQUEST_METHOD'];

if (isset($_GET['msg']) && ! empty($_GET['msg'])){
	$text = $_GET['msg'];
	echo $text;
}
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