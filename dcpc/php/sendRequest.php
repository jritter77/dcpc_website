<?php

$req = json_decode($_POST['req']);

$to = 'jakeritter77@gmail.com';
$sub = $req->sub;
$msg = $req->msg;

$fromName = "Jake Ritter";
$fromEmail = "jriveserver@gmail.com"

$headers .= 'From:  ' . $fromName . ' <' . $fromEmail .'>' . " \r\n" .
            'Reply-To: '.  $fromEmail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

$result = mail($to, $sub, $msg, $headers);

echo json_encode($result);

?>