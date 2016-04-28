<?php 


$botToken = "165180744:AAHG_JvmlUf0icqbKgtmfRa8j5jVyDY2yUc"; 
$website = "https://api.telegram.org/bot".$botToken; 

$update = file_get_contents($website."/getupdates");

print_r($update);



?> 