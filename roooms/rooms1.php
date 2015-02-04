<?php
require('../php/lib/squeeks-Pusher-PHP/libPusher.php');

$app_id = '105331';
$app_key = 'fa6c030da25ecdb22750';
$app_secret = '90c563d8113cbe28b63a';

$pusher = new Pusher($app_key, $app_secret, $app_id);

$data['message'] = 'hello world';
$pusher->trigger('test_channel', 'my_event', $data);
?>