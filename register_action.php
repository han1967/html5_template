﻿<?php
require_once('/HttpRequest.php'); 
$apiLink = "https://dev-api.lottonetix.io";
$http = new HttpRequest();

$request['IP']           = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR']:'';
$request['Country']      = isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"]:'';
$request['name']         = !empty($_POST['first_name']) ? $_POST['first_name']:'';
$request['surname']      = !empty($_POST['last_name']) ? $_POST['last_name']:'';
$request['email']        = !empty($_POST['email']) ? $_POST['email']:'';
$request['initialPass']  = !empty($_POST['password']) ? $_POST['password']:'';

$country  = !empty($_POST['country']) ? $_POST['country']:'';
$mobilephone  = !empty($_POST['MobilePhone']) ? $_POST['MobilePhone']:'';
$request['MobilePhone']  = $country.$mobilephone;

$request['ref']          = !empty($_SESSION['ref']) ? $_SESSION['ref'] : '';
$request['a']            = !empty($_SESSION['aff_id']) ? $_SESSION['aff_id'] : '';
$request['t']            = !empty($_POST['t']) ? $_POST['t'] : '';
$request['ref']            = !empty($_POST['r']) ? $_POST['r'] : '';
$request['a']            = !empty($_POST['a']) ? $_POST['a'] : '';

echo $userData = $http->sendRequest($apiLink.'/api/v1/user/create',$request);
?>