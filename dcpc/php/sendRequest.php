<?php

$req = json_decode($_POST['req']);

$name = $req->name;
$phone = $req->phone;
$address = $req->address;
$description = $req->description;
$avail = $req->avail;

$to = 'douglascitypc@gmail.com';
$sub = "Work Request";
$msg = "You have recieved a work request from:\n" . $name . "\n\n" .
        "Description:\n" . $description . "\n\n" .
        "Phone: " . $phone . "\n" .
        "Address: " . $address . "\n\n" . 
        "Available Times:\n" . join("\n", $avail);

$result = mail($to, $sub, $msg);

echo json_encode($result);

?>