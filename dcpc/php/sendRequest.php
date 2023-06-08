<?php

$req = json_decode($_POST['req']);

$to = 'dcpc@gmail.com';
$sub = $req->sub;
$msg = $req->msg;
$headers = 'From: dcpc@gmail.com';

$result = mail($to, $sub, $msg, $headers, "-fdcpc@gmail.com");

echo json_encode($result);

?>