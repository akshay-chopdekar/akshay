<?php
require_once('lib/squeeks-Pusher-PHP/lib/Pusher.php');
require_once('config.php');

// logic

// if (condition) {
	# code...


$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);

// $message = sanitize( $_GET['message'] );
$message = "this is notification 1";
$id=1;
$data = array('message' => $message);

if($pusher->trigger('my_notifications1', 'notification', $data)){
	echo "<h1>notification has been sent successfully</h1>";
} else {
	echo "<h1>process failed</h1>";
}

/*function sanitize($data) {
  return htmlspecialchars($data);
}*/
?>