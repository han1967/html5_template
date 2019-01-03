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
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/callpage-callback.default.css">
    <link rel="stylesheet" href="js/tel/build/css/intlTelInput.css">
    <?php include_once "../register_assets.php" ?>
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
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5125541.js"></script>
<!-- End of HubSpot Embed Code -->
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
<meta property="og:url" content="https://bcure.bwelltime.com/lp5/">
<meta property="og:type" content="website">
<link rel="stylesheet" media="screen" href="./bcure-laser-uk_files/lander.css">
<link href="./bcure-laser-uk_files/font-awesome.min.css" rel="stylesheet">
<link href="./bcure-laser-uk_files/css" rel="stylesheet" type="text/css">
<meta property="cf:funnel_id" content="WEtjWExnT1Q0VURMYlo1UkgwZEY1UT09LS05eDNsUit6SGplZjF0QTlCZFJadUZBPT0=--4aed82bba581b1c34987a8503c70346f22b8c694">
<meta property="cf:page_id" content="RlVaaExVa2ptNzFqU3E5SFBIc2JBUT09LS1PL3hnOHlQbkxxd25sa2ZRUmgvUWFBPT0=--ea1b0017a59043522475a5b7d6ffe7af41cc90f1">
<meta property="cf:funnel_step_id" content="aFVhN2Q1QTFLaS9oa0RkM251Qnl3QT09LS1NYitXS3F4bkhFQzZXcFg3R3JCSEtBPT0=--8c1529ea339d719c56f730b6ef6718174a894963">
<meta property="cf:user_id" content="Y3FGNXBPK3FmRlpnOFBiQTQ4eU44QT09LS0vcTExU3VHeUJFOEFSYWovUWFUYmNnPT0=--c61aedc78f45632dc9478fc4c1a21bbb860f6bed">
<meta property="cf:page_code" content="MjQ5OTczODM=">
<meta property="cf:mode_id" content="1">
<meta property="cf:time_zone" content="London">
 <?php include_once "../register_assets.php";?>
<style>
    [data-timed-style='fade']{display:none}[data-timed-style='scale']{display:none}
  </style>
<link rel="icon" type="image/png" href="https://bcure.bwelltime.com/lp5/">
<body >

<div class="containerWrapper">
<meta name="robots" content="noindex, nofollow">
<textarea id="tracking-body-top" style="display: none !important"></textarea>
<input id="submit-form-action" value="redirect-url" data-url="#" data-ar-service="" data-ar-list="" data-webhook="" type="hidden">
<div class="nodoHiddenFormFields hide">
<input id="elHidden1" class="elInputHidden elInput" name="ad" type="hidden">
<input id="elHidden2" class="elInputHidden elInput" name="tag" type="hidden">
<input id="elHidden3" class="elInputHidden elInput" name="" type="hidden">
<input id="elHidden4" class="elInputHidden elInput" name="" type="hidden">
<input id="elHidden5" class="elInputHidden elInput" name="" type="hidden">
</div>
<div class="nodoCustomHTML hide"></div>
<div class="modalBackdropWrapper" style="display: none; background-color: rgba(0, 0, 0, 0.4); height: 100%;"></div>
<div class="container containerModal midContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius10 shadow0 bgNoRepeat emptySection" id="modalPopup" data-title="Modal" data-block-color="0074C7" style="display: none; margin-top: 100px; padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(255, 255, 255);" data-trigger="none" data-animate="top" data-delay="0">
<div class="containerInner ui-sortable"></div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<div class="container wideContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 emptySection" id="container-36881" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 10px; outline: none; background-color: rgba(255, 255, 255, 0);" data-trigger="none" data-animate="fade" data-delay="500">
<div class="containerInner ui-sortable" style="padding-left: 0px; padding-right: 0px;">
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-120" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top:10px; padding-bottom: 5px; margin: 0px; outline: none;">
<div id="col-full-102-117" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;"><div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px"><div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-30754" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<img src="logo_wide.png" class="elIMG ximg" alt="" height="85px;" width="">
</div></div></div>
</div>
<style id="button_style_tmp_button-80668">#tmp_button-80668 .elButtonFlat:hover{ background-color: #c9830c !important;} #tmp_button-80668 .elButtonBottomBorder:hover{ background-color: #c9830c !important;}#tmp_button-80668 .elButtonSubtle:hover{ background-color: #c9830c !important;}#tmp_button-80668 .elButtonGradient{                                                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(240, 156, 14)), color-stop(1, #c9830c));                                                 background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: linear-gradient(to bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                             }#tmp_button-80668 .elButtonGradient:hover{                                                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(240, 156, 14)), color-stop(0, #c9830c));                                                 background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: linear-gradient(to bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                             }#tmp_button-80668 .elButtonGradient2{    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(240, 156, 14)), color-stop(1, #c9830c));     background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: linear-gradient(to bottom, rgb(240, 156, 14) 30%, #c9830c 80%); }#tmp_button-80668 .elButtonGradient2:hover{    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(240, 156, 14)), color-stop(0, #c9830c));     background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: linear-gradient(to bottom, rgb(240, 156, 14) 100%, #c9830c 30%); }#tmp_button-80668 .elButtonBorder{                        border: 3px solid rgb(240, 156, 14) !important;                         color: rgb(240, 156, 14) !important;                     }#tmp_button-80668 .elButtonBorder:hover{                          background-color:rgb(240, 156, 14) !important;                          color: #FFF !important;                       }</style>
</div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<div class="container wideContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 emptySection radius5 borderLight border1px" id="container-23201" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 40px; outline: none; background-color: rgb(255, 255, 255); border-color: rgba(47, 47, 47, 0.25);" data-trigger="none" data-animate="fade" data-delay="500">
<div class="containerInner ui-sortable" style="padding-left: 20px; padding-right: 20px;">
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--21657" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="outline: none; padding-top: 10px; padding-bottom: 10px; margin-bottom: 0px;">
<div id="col-full-778-109" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;"><div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"><div style="float:right; z-index:100 !important;"><img src="fs.png" class="elIMG ximg" alt="" height="" width=""></div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-82216-161" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 elFont_opensans hsSize72" style="text-align: center; font-size: 28px;" data-bold="inherit" contenteditable="false"><div style="direction: LTR;"><b><span style="background-color:yellow;">Now On a special offer - 25% off + free gift</span> </b></div>
</div>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-91065-119" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 elFont_opensans hsSize4" style="text-align: center; font-size: 14px;" data-bold="inherit" contenteditable="false"><div style="direction: LTR;"><i style="color: inherit;">Limited stock, Offer valid for an individual purchase only.</i></div></div>
</div>
</div></div>
</div>
<div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin border1px noBorder" id="row--86763" data-trigger="none" data-animate="fade" data-delay="500" data-title="right sidebar row" style="outline: none; border-color: rgba(47, 47, 47, 0.137); padding-top: 20px; padding-bottom: 20px; margin: 0px; background-color: rgb(246, 246, 246); width: auto;">
<div id="col-left-730-123" class="col-md-8 innerContent col_left ui-resizable" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="left column" style="outline: none;"><div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"><div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-49284-148" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
<img src="banner_13.png" class="elIMG ximg" alt="" height="" width="PX"><img src="device.jpg" class="elIMG ximg" alt="" height="" width="100%">
</div><div style="direction: LTR;"><b>Helps relieve symptomatic pain AND treat the source of the problem by speeding up the body's natural recovery process!</b></div></div></div>
<div id="col-right-395-164" class="col-md-4 innerContent col_right ui-resizable" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="Right column" style="outline: none;"><div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="background-color: rgb(246, 246, 246);">
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-16427-172" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize21" style="text-align: center;" data-bold="inherit" contenteditable="false"><BR><b>B-Cure Laser</b></div>
</div>
<div class="de elImageWrapper de-image-block elMargin0 ui-droppable elAlign_center de-editable" id="tmp_image-70085-174" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
<img src="./bcure-laser-uk_files/5-stars-icons-800x138.png" class="elIMG ximg" alt="" height="20">
</div>

<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-12458-184" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: center; font-size: 15px;" data-gramm="false" contenteditable="false">
<div style="direction: LTR;">
<b style="color: inherit;">The next generation of Low Level Laser Therapy is now available in the UK!
</b><br>
</div>
<div style="direction: LTR;"><b style="color: inherit;"><br></b></div>
<div style="direction: LTR;">
<b>B-Cure Laser</b> a revolutionary device for pain relief:<br><br>
</div>
<div>
<div style="direction: LTR;"><span style="color: inherit;">• May help in relieving a variety of conditions such as  Carpal Tunnel Syndrome, Fibromyalgia, Myofascial Pain Syndromes, joint pain, Arthritis, sport injuries and many more.
• Easy and safe to use at home.
• Non-invasive, no known side effects.
</span></div>
</div>

<div style="direction: LTR;"><br></div>

</div>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-81536-184" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left;" data-gramm="false" contenteditable="false"></div>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-51298-150" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="cursor: pointer; outline: none; margin-top: 0px;" aria-disabled="false">
<div class="ne elHeadline hsSize3 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; color: rgb(162, 0, 0);" data-bold="inherit" contenteditable="false"><div style="direction: LTR;"><b></b></div></div>
</div>
<div style="background-color: #f18b0b !important; " class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-80668-129" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="0" style="outline: none; cursor: pointer; margin-top: 10px;" aria-disabled="false" data-elbuttontype="1">
<span class="" style="color: rgb(255, 255, 255); background-color: #f18b0b; font-size: 27px;">  
<span class="elButtonMain" >Fill in Your Details:</span><span style="font-size: 10px;">
<iframe style="border: none; overflow: hidden; min-height: 260px;" src="https://bcure.bwelltime.com/index.php?a=na&t=nt&r=" width="100%" height="220px"></iframe>
</span></div>
<div class="de elImageWrapper de-image-block elAlign_left elMargin0 ui-droppable de-editable" id="tmp_image-82841-146" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="outline: none; cursor: pointer; margin-top: 10px;" aria-disabled="false">
<img src="icon_mbg.png" class="elIMG ximg" alt="" width="" height="80" style="font-size: 20px;"><B>30 Days Money Back Guarantee</B>
</div>
<div class="de elImageWrapper de-image-block elAlign_left elMargin0 ui-droppable de-editable" id="tmp_image-82841-146" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="outline: none; cursor: pointer; margin-top: 10px;" aria-disabled="false">
<img src="icon_free_shipping.png" class="elIMG ximg" alt="" width="" height="80"  style="font-size: 20px;"><b>FREE Shipping</b>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-69248-134" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="cursor: pointer; outline: none; margin-top: 10px;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize1" style="text-align: center;" data-bold="inherit" contenteditable="false"></div>
</div>
</div></div>
</div>
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--84758" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
<div id="col-full-138" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-10459" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 40px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 borderLightTop borderSolid border1px padding20" style="text-align: center;font-size: 32px" data-bold="inherit" data-gramm="false" contenteditable="false"><div style="direction: LTR;"><b style="color: inherit;">Consumers Rank: 4.8/5 (3492 posts)</b></div></div>
</div>
<div class="de elImageWrapper de-image-block elMargin0 elAlign_center ui-droppable de-editable" id="tmp_image-48773" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<img src="./bcure-laser-uk_files/5-stars-icons-800x138.png" class="elIMG ximg" alt="" width="" height="30">
</div>
</div>
</div>
</div>
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--93480" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
<div id="col-full-167" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
<div class="de elBullet elMargin0 ui-droppable de-editable" id="tmp_list_image-73716-186-173" data-de-type="listimg" data-de-editing="false" data-title="Image List" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
<ul class="ne elBulletList listSize1 listImage32 listBorder0" data-bold="inherit" contenteditable="false" style="color: rgb(45, 45, 45);"><li style="background-image: url(&quot;bcure-laser-uk_files/avatarf.png&quot;); font-size: 14px;">
<b>Milla A.<br></b><i>6 min. ago</i>
</li></ul>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-52449-138-115" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 noBorder" data-bold="inherit" style="text-align: left;" contenteditable="false"><div style="direction: LTR;"><span style="color: inherit;">Before purchasing B-Cure Laser I had tried so many treatments for my knee-pain, but nothing really made a significant improvement. This device has changed my life. Three weeks into the treatment and the pain was almost gone. No more painkillers, no more frequent visits at the clinic. That simple :)</span></div></div>
</div>
<div class="de elBullet elMargin0 ui-droppable de-editable" id="tmp_list_image-75082-101-173" data-de-type="listimg" data-de-editing="false" data-title="Image List" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 40px; outline: none; cursor: pointer;" aria-disabled="false">
<ul class="ne elBulletList listSize1 listImage32 listBorder0" data-bold="inherit" contenteditable="false" style="color: rgb(45, 45, 45);"><li style="background-image: url(&quot;bcure-laser-uk_files/ian.png&quot;);">
<b>Omar B.<br></b><i>2 hrs. ago</i>
</li></ul>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-53133-150-172" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left;" contenteditable="false"><div style="direction: LTR;"><span style="color: inherit;">If you really commit to it and treat yourself every day, this thing works like magic. I couldn’t believe how potent and effective this device is. I am a professional athlete and unfortunately, I have experienced a pretty bad injury a few months back. Now I am back in shape and competing again. </span></div></div>
</div>
<div class="de elBullet elMargin0 ui-droppable de-editable" id="tmp_list_image-53453-168-125" data-de-type="listimg" data-de-editing="false" data-title="Image List" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
<ul class="ne elBulletList listSize1 listImage32 listBorder0" data-bold="inherit" contenteditable="false" style="color: rgb(45, 45, 45);"><li style="background-image: url(&quot;bcure-laser-uk_files/avatarf.png&quot;);">
<b>Siobhan H.<br></b><i>4 hrs ago.</i>
</li></ul>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-62482-189-148" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left;" contenteditable="false"><div style="direction: LTR;"><span style="color: inherit;">I feel like my recovery would have lasted much longer without the help of B-Cure Laser.</span></div></div>
</div>
<div class="de elBullet elMargin0 ui-droppable de-editable" id="listimg-78022-120-108" data-de-type="listimg" data-de-editing="false" data-title="Image List" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
<ul class="ne elBulletList listSize1 listImage32 listBorder0" data-bold="inherit" contenteditable="false" style="color: rgb(45, 45, 45);"><li style="background-image: url(&quot;bcure-laser-uk_files/avatarf.png&quot;);">
<b>Ian T.<br></b><i>12 hrs. ago</i>
</li></ul>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-91313-144-163" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left;" contenteditable="false">
<div style="direction: LTR;">
<span style="color: inherit;">I decided to use this device in my clinic after doing some research on Low Level Laser Therapy. So far, the feedback from my patients has been very positive</span><br>
</div>
<div style="direction: LTR;">Worth every penny! I have been experiencing crucifying pain in my left hip, caused by an apparent inflammation. It got so bad I couldn’t sleep at night. While I am still under medical observation, this device has reduced the pain tremendously and made my everyday life so much easier.</div>
</div>
</div>
<div class="de elBullet elMargin0 ui-droppable de-editable" id="listimg-28880" data-de-type="listimg" data-de-editing="false" data-title="Image List" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
<ul class="ne elBulletList listSize1 listImage32 listBorder0" data-bold="inherit" contenteditable="false" style="color: rgb(45, 45, 45);"><li style="background-image: url(&quot;bcure-laser-uk_files/melinda.jpg&quot;);">
<b>Maggie W.<br></b><i>12 hrs. ago</i>
</li></ul>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-68560" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left;" contenteditable="false"><div style="direction: LTR;">I am so happy to see my mum finally doing better!</div></div>
</div>
<div class="de elBullet elMargin0 ui-droppable de-editable" id="listimg-57795" data-de-type="listimg" data-de-editing="false" data-title="Image List" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
<ul class="ne elBulletList listSize1 listImage32 listBorder0" data-bold="inherit" contenteditable="false" style="color: rgb(45, 45, 45);"><li style="background-image: url(&quot;bcure-laser-uk_files/gary.png&quot;);">
<b>Mark D.<br></b><i>Yesterday</i>
</li></ul>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-16217" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left;" contenteditable="false">
<div style="direction: LTR;">I have ordered this device to treat symptomatic pain I have been experiencing due to a medical condition. Not only did it work well, but I was also impressed by how fast I received it. Packaging was good and kept the product undamaged. Customer service was surprisingly friendly and helpful.</div>
</div>
</div>

</div>
</div>
</div>
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--47423" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
<div id="col-full-163" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
<div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-53884" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" data-element-theme="customized" data-elbuttontype="1" aria-disabled="false">
<span style="font-size:27px;background:yellow;">Yes, I want to enjoy the 25% off discount & a free gift!</span>
<iframe style="border: none; overflow: hidden; min-height: 260px;" src="https://bcure.bwelltime.com/index.php?a=na&t=nt&r=" width="100%" height="260px"></iframe>


</div>
</div>
</div>
<style id="bold_style_headline-82216">#headline-82216 .elHeadline b{ color: rgb(240, 156, 14);}</style>
<style id="bold_style_headline-91065">#headline-91065 .elHeadline b{color:rgb(191,0,0);}</style>
</div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<div class="container wideContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 emptySection" id="container-42580" data-title="Section" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgba(255, 255, 255, 0);" data-trigger="none" data-animate="fade" data-delay="500">
<div class="containerInner ui-sortable" style=""><div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-121" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="outline: none; margin-bottom: 0px;">
<div id="col-full-649-108" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;"><div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"><div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-95209-131" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="cursor: pointer; outline: none;" aria-disabled="false">
</div></div></div>
</div></div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<style id="button_style_tmp_button-90702">#tmp_button-90702 .elButtonFlat:hover{background-color:#e87600!important;}#tmp_button-90702 .elButtonBottomBorder:hover{background-color:#e87600!important;}#tmp_button-90702 .elButtonSubtle:hover{background-color:#e87600!important;}#tmp_button-90702 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,138,18)),color-stop(1,#e87600));background-image:-o-linear-gradient(bottom,rgb(255,138,18) 0%,#e87600 100%);background-image:-moz-linear-gradient(bottom,rgb(255,138,18) 0%,#e87600 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,138,18) 0%,#e87600 100%);background-image:-ms-linear-gradient(bottom,rgb(255,138,18) 0%,#e87600 100%);background-image:linear-gradient(to bottom,rgb(255,138,18) 0%,#e87600 100%);}#tmp_button-90702 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(255,138,18)),color-stop(0,#e87600));background-image:-o-linear-gradient(bottom,rgb(255,138,18) 100%,#e87600 0%);background-image:-moz-linear-gradient(bottom,rgb(255,138,18) 100%,#e87600 0%);background-image:-webkit-linear-gradient(bottom,rgb(255,138,18) 100%,#e87600 0%);background-image:-ms-linear-gradient(bottom,rgb(255,138,18) 100%,#e87600 0%);background-image:linear-gradient(to bottom,rgb(255,138,18) 100%,#e87600 0%);}#tmp_button-90702 .elButtonBorder{border:3px solid rgb(255,138,18)!important;color:rgb(255,138,18)!important;}#tmp_button-90702 .elButtonBorder:hover{background-color:rgb(255,138,18)!important;color:#FFF!important;}</style>
<style id="button_style_tmp_button-80668-129">#tmp_button-80668-129 .elButtonFlat:hover{ background-color: #c9830c !important;} #tmp_button-80668-129 .elButtonBottomBorder:hover{ background-color: #c9830c !important;}#tmp_button-80668-129 .elButtonSubtle:hover{ background-color: #c9830c !important;}#tmp_button-80668-129 .elButtonGradient{                                                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(240, 156, 14)), color-stop(1, #c9830c));                                                 background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: linear-gradient(to bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                             }#tmp_button-80668-129 .elButtonGradient:hover{                                                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(240, 156, 14)), color-stop(0, #c9830c));                                                 background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: linear-gradient(to bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                             }#tmp_button-80668-129 .elButtonGradient2{    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(240, 156, 14)), color-stop(1, #c9830c));     background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: linear-gradient(to bottom, rgb(240, 156, 14) 30%, #c9830c 80%); }#tmp_button-80668-129 .elButtonGradient2:hover{    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(240, 156, 14)), color-stop(0, #c9830c));     background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: linear-gradient(to bottom, rgb(240, 156, 14) 100%, #c9830c 30%); }#tmp_button-80668-129 .elButtonBorder{                        border: 3px solid rgb(240, 156, 14) !important;                         color: rgb(240, 156, 14) !important;                     }#tmp_button-80668-129 .elButtonBorder:hover{                          background-color:rgb(240, 156, 14) !important;                          color: #FFF !important;                       }</style>
<style id="bold_style_headline-91065-119">#headline-91065-119 .elHeadline b{color:rgb(191,0,0);}</style>
<style id="button_style_tmp_button-53884">#tmp_button-53884 .elButtonFlat:hover{ background-color: #c9830c !important;} 
#tmp_button-53884 .elButtonBottomBorder:hover{ background-color: #c9830c !important;}
#tmp_button-53884 .elButtonSubtle:hover{ background-color: #c9830c !important;}
#tmp_button-53884 .elButtonGradient{                                                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(240, 156, 14)), color-stop(1, #c9830c));                                                 background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                                 background-image: linear-gradient(to bottom, rgb(240, 156, 14) 0%, #c9830c 100%);                                             }
#tmp_button-53884 .elButtonGradient:hover{                                                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(240, 156, 14)), color-stop(0, #c9830c));                                                 background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                                 background-image: linear-gradient(to bottom, rgb(240, 156, 14) 100%, #c9830c 0%);                                             }
#tmp_button-53884 .elButtonGradient2{    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(240, 156, 14)), color-stop(1, #c9830c));     background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 30%, #c9830c 80%);     background-image: linear-gradient(to bottom, rgb(240, 156, 14) 30%, #c9830c 80%); }
#tmp_button-53884 .elButtonGradient2:hover{    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(240, 156, 14)), color-stop(0, #c9830c));     background-image: -o-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -moz-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -webkit-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: -ms-linear-gradient(bottom, rgb(240, 156, 14) 100%, #c9830c 30%);     background-image: linear-gradient(to bottom, rgb(240, 156, 14) 100%, #c9830c 30%); }
#tmp_button-53884 .elButtonBorder{                        border: 3px solid rgb(240, 156, 14) !important;                         color: rgb(240, 156, 14) !important;                     }
#tmp_button-53884 .elButtonBorder:hover{                          background-color:rgb(240, 156, 14) !important;                          color: #FFF !important;                       }
</style>
<style id="bold_style_headline-82216-161">#headline-82216-161 .elHeadline b{ color: rgb(45, 45, 45);}</style>
</div>
<style id="custom-css">#tmp_button-80668-129 a{border-radius:50px;}#tmp_headline1-67060{letter-spacing:-2px}

#tmp_button-53884 a{border-radius:50px;}</style>
<input type="hidden" value="24997383" id="page-id">
<input type="hidden" value="24997383" id="root-id">
<input type="hidden" value="core" id="variant-check">
<input type="hidden" value="1373452" id="user-id">
<input type="hidden" value="" id="cf-cid">

</body></html>