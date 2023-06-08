<?php

$req = json_decode($_POST['req']);

$to = 'jakeritter77@gmail.com';
$sub = $req->sub;
$msg = $req->msg;
$headers = 'From: jr550@humboldt.edu' . "\r\n";

$result = mail($to, $sub, $msg, $headers, "-fjr550@humbodlt.edu");

echo json_encode($result);

?>