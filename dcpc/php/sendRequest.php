<?php

$req = json_decode($_POST['req']);

$to = 'jakeritter77@gmail.com';
$sub = $req->sub;
$msg = $req->msg;

$result = mail($to, $sub, $msg);

echo json_encode($result);

?>