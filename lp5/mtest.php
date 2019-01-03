<?php
if(!isset($_SESSION)){
    session_start();
}
//echo date('Y-m-d H:i:s',strtotime('+2 Hours'));
if(isset($_GET['a'])){
    $_SESSION['a'] = $_GET['a'];
}
if(isset($_GET['r'])){
    $_SESSION['r'] = $_GET['r'];
}
if(isset($_GET['t'])){
    $_SESSION['t'] = $_GET['t'];
}
if(isset($_GET['m'])){
    $_SESSION['m'] = $_GET['m'];
}
else {
    $_SESSION['m'] = 0;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
$date = strtotime(date('Y/m/d'));
$sevenPlus = '';
$dateArr = [];
$today = date('Y/m/d');
for ($i=0;$i<= 6;$i++){
    $sevenPlus = date('Y/m/d',strtotime('+'.$i.' days',strtotime($today)));
    $sevenPlus = date('d F ', strtotime($sevenPlus));
    array_push($dateArr,$sevenPlus);
}
$sel = "<select data-form-control=\"\" data-brand-color=\"border:focus | &amp;:focus + fill\" class=\"cp-form-control__control cp-form-simple-control cp-form-simple-control--select\" id=\"month-day\">";
foreach ($dateArr as $value){
    $sel .= "<option>".$value."</option>";
}
$sel .="</select>";

?>
<!DOCTYPE html>
<html dir="LTR" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>B-Cure Laser</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120830425-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120830425-1');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '115173512735053');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display: none;"
  src="https://www.facebook.com/tr?id=115173512735053&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script type="text/javascript">
    window._mfq = window._mfq || [];
    (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript"; mf.async = true;
        mf.src = "//cdn.mouseflow.com/projects/0f8d1546-8fa7-4299-a65a-e4eecc2ebf32.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
    })();
</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="utf-8" http-equiv="encoding">
<meta name="viewport" content="initial-scale=1">
<title>Special B-Cure UK Sale!</title>
<meta class="metaTagTop" name="description" content="">
<meta class="metaTagTop" name="keywords" content="">
<meta class="metaTagTop" name="author" content="">
<meta class="metaTagTop" property="og:image" content="" id="social-image">
<meta property="og:title" content="Special B-Cure UK Sale">
<meta property="og:description" content="">
<meta property="og:type" content="website">


<body >
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
 window.fbAsyncInit = function() {
    FB.init({
      appId            : '2087775877911401',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="287299208793823">
</div>
<script>
FB.CustomerChat.show();
</script> 

TEST PAGE
</body></html>