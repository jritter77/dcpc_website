<?php

ini_set()

$req = json_decode($_POST['req']);

$to = 'jakeritter77@gmail.com';
$sub = $req->sub;
$msg = $req->msg;
$headers = 'From:jakeritter77@gmail.com';

$result = mail($to, $sub, $msg, $headers);

echo json_encode($result);

?>