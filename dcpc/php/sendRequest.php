<?php

$req = json_decode($_POST['req']);

$to = 'jakeritter77@gmail.com';
$sub = $req->sub;
$msg = $req->msg;
$headers = 'From: jr550@ghumboldt.edu' . "\r\n";

$result = mail($to, $sub, $msg, $headers);

echo json_encode($result);

?>