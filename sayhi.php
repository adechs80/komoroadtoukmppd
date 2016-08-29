<?php


$botToken = "263424252:AAHcyodZThi0As-yF2yFqjjxt6SqHMBXrhk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Halo, ini adalah bot KOMO untuk belajar dalam rangka persiapan UKMPPD. Semoga bermanfaat. Semangat!");

?>