<?php
require_once('/HttpRequest.php'); 

$apiLink = "https://connectapi.lottonetix.io";
$http = new HttpRequest();

$request['IP']           = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR']:'';
$request['Country']      = !empty($_POST['Country']) ? $_POST['Country']:$_SERVER["HTTP_CF_IPCOUNTRY"];
$request['name']         = !empty($_POST['first_name']) ? $_POST['first_name']:'';
$request['surname']      = !empty($_POST['last_name']) ? $_POST['last_name']:'';
$request['email']        = !empty($_POST['email']) ? $_POST['email']:'';
$request['initialPass']  = !empty($_POST['password']) ? $_POST['password']:'';

$country                 = !empty($_POST['Country']) ? $_POST['Country']:'';
$mobilephone             = !empty($_POST['MobilePhone']) ? $_POST['MobilePhone']:'';
$request['MobilePhone']  = $country.$mobilephone;

$request['ref']          = !empty($_SESSION['ref']) ? $_SESSION['ref'] : '';
$request['a']            = !empty($_SESSION['aff_id']) ? $_SESSION['aff_id'] : '';
$request['t']            = !empty($_POST['t']) ? $_POST['t'] : '';
$request['ref']            = !empty($_POST['r']) ? $_POST['r'] : $_SERVER['HTTP_REFERER'];
$request['a']            = !empty($_POST['a']) ? $_POST['a'] : '';
$request['compInfo']     = $_SERVER["HTTP_USER_AGENT"];

echo $userData = $http->sendRequest('https://connectapi.lottonetix.io/api/v1/user/create',$request);
?>