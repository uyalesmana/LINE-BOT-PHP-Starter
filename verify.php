<?php
$access_token = 'Cc3m5HT+5TqG3j/7XIGfFZVuvTIglHxZTBo8Lt3EXnG3e6StHd57FCsViP6u4KZajIHfm0JwZtjXpWX4awxgacunoey6A8KUlSVI3jJgVOdNAePDSAEogfjLVs7hXVf+k8AlXA90in6/AJWhrJ5nIQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
