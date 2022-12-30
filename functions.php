<?php

$name = "";
$age = "";
$msg = "";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $recaptchaResponse = $_POST["g-recaptcha-response"];
    $userIp = $_SERVER["REMOTE_ADDR"];

    $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIp}";
    $content = file_get_contents($request);
    $json = json_decode($content);
    if ($json->success == "true") {
        $msg = "Hi {$name}, You are {$age} years old!";
    }
    else {
        $msg = "You have failed to pass recaptcha. WHat does this means? ROBOT!";
    }

}