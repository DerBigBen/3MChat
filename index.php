<?php
$webhookurl = "https://discordapp.com/api/webhooks/739587152022863912/hjQqzutckW6qoUSZw9M-GKp0YSb8m3HSeOs_fZPsGSuidL7s-9yh-FVBT874st7oTwEC";
$ip= $_SERVER['REMOTE_ADOR'];
$msg = "$ip";
$json_data = array ('content' => "$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
>