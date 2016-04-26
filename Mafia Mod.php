<?php

	$botToken = "195569023:AAEJ45UPobvQMSSfwbNFhj4rTWMAlg-lZ8s";
	$website = "https://api.telegram.org/bot".$botToken;

	$update = file_get_contents($website."/getupdates");

	print_r($update);

?>
