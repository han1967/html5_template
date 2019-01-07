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
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/callpage-callback.default.css">
    <link rel="stylesheet" href="js/tel/build/css/intlTelInput.css">
    <?php include_once "../register_assets.php" ?>
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
<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}</style>
<div class="videoWrapper">
<iframe  width="560" height="349" src="https://www.youtube.com/embed/27WZiu85f6g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div><img src="device.jpg" class="elIMG ximg" alt="" height="" width="100%">
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
<!-- call page popup -->
<div id="callpageWrapper">
<!--    <div class="alert alert-danger error-class" style="display: none;"></div>-->
<!--    <div class="alert alert-success success-class" > jbkjhbkjbhkb</div>-->
	<div id="callpage" dir="ltr" data-specifity="" class="cp-callpage cp-callpage--widget-callback cp-theme-light">
		<div data-ignore-important-opacity="" class="cp-callpage__bg" style="display: none;"></div>
		<!-- call popup window-->
		<div class="cp-callpage__widget-wrapper js-cp-callpage__widget-wrapper">
			<div data-ignore-important-display="" data-active-state="contact-types-schedule" data-active-root-state="contact-types" id="cp-callback-widget" class="cp-callback-widget cp-callpage__widget cp-js-widget" data-test="widget">
				<!---->
				<a class="cp-close-btn cp-callback-widget__close-btn cp-close-btn--mobile-friendly" href="javascript:close_cp_window();">
					<svg viewBox="2115.656 4371.656 11.054 11.054" class="cp-close-btn__img">
						<g class="cp-close-btn__shape">
							<path d="M2126.003 4372.363l-9.64 9.64" class="cp-close-btn__path"></path>
							<path d="M2116.363 4372.363l9.64 9.64" class="cp-close-btn__path"></path>
						</g>
					</svg>
				</a>
                <!-- first screen -->
                <div class="cp-fade-height cp-fade-height--flexbox" id="screen-0" style="display:block">
                    <div tabindex="0" class="cp-form-submit-helper cp-departments cp-callback-widget__state">
                        <br><br><br>
                        <p class="cp-departments__heading cp-h1"><span>Do you want us to call you back in <span place="seconds">28</span> seconds for free?</span>
                        </p>
                        <br><br>
                        <p class="cp-departments__text cp-text-subheading">Choose your department</p>
                        <div class="cp-grid cp-grid--form cp-form" style="position: relative !important;">
                            <div class="cp-grid__item">
                                <div class="cp-form-control cp-form-control--show-arrow">
                                    <select id="department-select" data-brand-color="border:focus | &amp;:focus + fill" class="cp-form-control__control cp-form-simple-control cp-form-simple-control--select">
                                        <option value="label" disabled="disabled" selected>Choose Department</option>
                                        <option value="1266">Sales and Info</option>
                                        <option value="1267">Customer Service</option>
                                    </select>
                                    <svg x="0px" y="0px" width="12px" viewBox="3 74 220 191.9" class="cp-form-control__arrow">
                                        <path d="M5,98.7l1.2,2.1l93.5,156.5c3.2,5.3,7.9,8.6,13.2,8.6s10-3.4,13.2-8.6l93.4-156.2l1.6-2.6c1.2-2.5,1.9-5.5,1.9-8.7c0-8.7-5.1-15.8-11.4-15.8l0,0H14.4l0,0C8.1,74,3,81.1,3,89.8C3,93.1,3.8,96.2,5,98.7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="cp-grid__item">
                                <br>
                                <button data-brand-color="background" class="cp-btn cp-btn--brand" id="open-screen-btn" style="display: none;">Call me now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of first screen -->
				<div class="cp-fade-height cp-fade-height--flexbox" id="screen-1" style="display: none;">
					<div class="cp-contact-type cp-callback-widget__state" tabindex="0">
						<ul class="cp-segmented-bar cp-contact-type__tabs">
							<li id="cp-schedule__inner" class="cp-segmented-bar__segment cp-segmented-bar__segment--active" style="display: none !important;">
								<svg x="0px" y="0px" viewBox="0 0 364.4 336.9" class="cp-clock-icon cp-segmented-bar__icon" data-brand-color="fill">
									<g>
										<path d="M363.7,142.2c-1.3-2.7-4-4.4-7-4.4H334C319.6,59.5,250.9,0,168.4,0C75.6,0,0,75.6,0,168.4c0,92.9,75.6,168.5,168.4,168.5
          c60,0,115.8-32.3,145.9-84.2c4.2-7.3,1.7-16.7-5.6-20.9c-7.3-4.2-16.7-1.7-20.9,5.6c-24.6,42.5-70.3,68.9-119.4,68.9
          c-76,0-137.8-61.8-137.8-137.8c0-76,61.8-137.8,137.8-137.8c65.5,0,120.3,45.9,134.3,107.2h-22.5c-3,0-5.7,1.7-6.9,4.4
          c-1.3,2.7-0.9,5.9,1.1,8.1l38.3,46c1.4,1.7,3.6,2.7,5.9,2.7c2.3,0,4.4-1,5.9-2.7l38.3-46C364.5,148.1,364.9,144.9,363.7,142.2
          L363.7,142.2z M363.7,142.2"></path>
										<path d="M168.4,38.3c-8.4,0-15.3,6.9-15.3,15.3v92.9c-6.9,4.8-11.5,12.9-11.5,21.9c0,14.8,12,26.8,26.8,26.8
          c4.1,0,7.8-0.9,11.3-2.6l53.3,30.7c2.4,1.4,5,2.1,7.6,2.1c5.3,0,10.4-2.8,13.3-7.7c4.2-7.3,1.7-16.7-5.6-20.9L195,166.1
          c-0.7-8.1-4.9-15.2-11.2-19.6V53.6C183.8,45.2,176.9,38.3,168.4,38.3L168.4,38.3z M168.4,179.9c-6.3,0-11.5-5.2-11.5-11.5
          c0-6.3,5.2-11.5,11.5-11.5c6.4,0,11.5,5.1,11.5,11.5C179.9,174.8,174.8,179.9,168.4,179.9L168.4,179.9z M168.4,179.9"></path>
									</g>
								</svg> <span class="cp-segmented-bar__text">Call me Now</span>
							</li>
							<li id="cp-message__inner" class="cp-segmented-bar__segment">
								<svg x="0px" y="0px" viewBox="0 0 335.3 308.1" class="cp-chat-icon cp-segmented-bar__icon" data-brand-color="fill">
									<g>
										<path d="M55.9,128.6h72.7c3.1,0,5.6-2.5,5.6-5.6c0-3.1-2.5-5.6-5.6-5.6H55.9c-3.1,0-5.6,2.5-5.6,5.6
          C50.3,126.2,52.9,128.6,55.9,128.6L55.9,128.6z M55.9,128.6"></path>
										<path d="M201.4,151H55.9c-3.1,0-5.6,2.5-5.6,5.6c0,3.1,2.5,5.6,5.6,5.6h145.4c3.1,0,5.6-2.5,5.6-5.6C207,153.5,204.5,151,201.4,151
          L201.4,151z M201.4,151"></path>
										<path d="M201.4,184.6H55.9c-3.1,0-5.6,2.5-5.6,5.6c0,3.1,2.5,5.6,5.6,5.6h145.4c3.1,0,5.6-2.5,5.6-5.6
          C207,187.1,204.5,184.6,201.4,184.6L201.4,184.6z M201.4,184.6"></path>
										<path d="M302.5,0.4L111.5,0C93.2,0,78.3,14.9,78.3,33.2v28.7l-45.1,0.1C14.9,61.9,0,76.8,0,95.1v118.2c0,18.3,14.9,33.2,33.2,33.2
          h34v55.9c0,2.3,1.4,4.4,3.6,5.2c0.7,0.2,1.3,0.4,2,0.4c1.6,0,3.1-0.7,4.2-1.8l54.3-59.7l93-0.4c18.3,0,33.2-14.9,33.2-33.2v-0.6
          l29.4,32.4c1.1,1.2,2.6,1.8,4.2,1.8c0.7,0,1.3-0.1,2-0.4c2.2-0.8,3.6-2.9,3.6-5.2V185h6c18.3,0,33.2-14.9,33.2-33.2V33.6
          C335.6,15.3,320.7,0.4,302.5,0.4L302.5,0.4z M246.1,213c0,12.1-9.9,22-22,22l-95.5,0.4c-1.6,0-3.1,0.7-4.1,1.8L78.3,288v-47.1
          c0-3.1-2.5-5.6-5.6-5.6H33.2c-12.1,0-22-9.9-22-22V95.1c0-12.1,9.9-22,22-22L83.9,73l140.2-0.3c12.1,0,22,9.9,22,22V213z
          M324.4,151.8c0,12.1-9.9,22-22,22h-11.6c-3.1,0-5.6,2.5-5.6,5.6v47.1l-28-30.8v-101c0-18.3-14.9-33.2-33.2-33.2L89.5,61.8V33.2
          c0-12.1,9.9-22,22-22l191,0.4h0c12.1,0,22,9.9,22,22L324.4,151.8L324.4,151.8z M324.4,151.8"></path>
									</g>
								</svg> <span class="cp-segmented-bar__text">Leave a message</span>
							</li>
						</ul>
						<div class="cp-fade-height cp-fade-height--flexbox">
							<div tabindex="-1" class="cp-form-submit-helper cp-schedule cp-flex-auto cp-contact-type__inner">
								<div class="cp-schedule__inner">
								</div>
								<!---->
                                <div class="cp-message__inner" style="display: none;">
                                </div>
                                <!---->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of call popu window-->
		<div data-test="widget-button-section" id="cp-button" class="cp-button-section cp-callpage__button" style="display: block; right: calc(2% + 5px) !important; bottom: calc(2% + 5px) !important;">
			<div class="cp-tooltip cp-button-tooltip cp-button-section__tooltip" data-test="button-tooltip" data-ignore-important-opacity="" x-placement="top" style="display: none !important; position: absolute !important; top: auto !important; left: 1511px !important; will-change: transform !important; bottom: 100% !important;">
				<button type="button" class="cp-close-btn cp-tooltip__close-btn cp-close-btn--round cp-close-btn--offset cp-close-btn--mobile-friendly" data-test="tooltip-close-btn">
					<svg viewBox="2115.656 4371.656 11.054 11.054" class="cp-close-btn__img">
						<g class="cp-close-btn__shape">
							<path d="M2126.003 4372.363l-9.64 9.64" class="cp-close-btn__path"></path>
							<path d="M2116.363 4372.363l9.64 9.64" class="cp-close-btn__path"></path>
						</g>
					</svg>
				</button>
				<div x-arrow="" class="cp-tooltip__tail" style="left: 0px !important;"></div>
				<div class="cp-tooltip__inner cp-button-tooltip__inner"></div>
			</div>
			<!---->
			<div data-test="widget-button" class="cp-widget-button" style="visibility:visible !important;">
                <div data-ignore-important-width="" data-ignore-important-height="" data-ignore-important-opacity="" class="cp-widget-button__underlay" style="background-color: rgb(21, 102, 245) !important;"></div>
				<div data-brand-color="background" class="cp-widget-button__inner" >
					<svg x="0px" y="0px" viewBox="0 0 100 108.4" class="cp-phone-icon cp-widget-button__icon">
						<path d="M97.8,84.4l-0.6-1.2c-1.7-4-22.3-10-24.1-10.1l-1.4,0.1c-2.8,0.6-5.9,3.3-12.4,9C52,78.8,41.9,69.7,37.2,64.4 c-5.1-5.8-11.5-15.5-13.8-22.8C30.8,35,33.9,32.2,34.1,29c0.1-1.7-3.4-22.9-7.2-25.1l-1.1-0.7c-2.4-1.5-6-3.8-10-3 c-1,0.2-1.9,0.6-2.8,1.1C10.4,3,3.8,7.5,0.8,13.5C-1,17.2-1.9,51,23.5,79.6c25,28.3,55.9,29.5,60.5,28.5l0.1,0l0.4-0.1 c6.3-2.2,11.6-8.2,13.6-10.7C101.8,92.7,99.2,87.3,97.8,84.4"></path>
					</svg>
				</div>
                <span class="cp-widget-button__close-btn-hover"></span>
                <span id="notifications" class="cp-pill cp-macp cp-widget-button__pill cp-pill--danger">1</span>
			</div>
		</div>
	</div>
</div>
<script src="js/tel/build/js/intlTelInput.js"></script>
<script>
    
var session = '<?=isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : '' ?>';
session='';
var now = '<?=date('H:i',strtotime('+2 Hours'))?>';
var nowDay = '<?=date('d F')?>';
var mobileSession = '<?=isset($_SESSION['m']) && !empty($_SESSION['m']) ? $_SESSION['m'] : ''?>';
// if (mobileSession==''){
//     $("#MobilePhone").intlTelInput({
//         separateDialCode: true,
//         initialCountry: "auto",
//         utilsScript: "js/utils.js",
//         geoIpLookup: function(callback) {
//             $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
//                 var countryCode = (resp && resp.country) ? resp.country : "";
//                 callback(countryCode);
//             });
//         },
//     });
// }
var t;
function play_beep() {
    if ($("#beep").length<1)
    {
        var e = document.createElement("audio");
        e.setAttribute('id', "beep");
        e.setAttribute('src', "sound/ring.wav");
        document.getElementById('callpageWrapper').appendChild(e);
        e.play();
        setTimeout(function(){ 
            document.getElementById('callpageWrapper').removeChild(e);
        }, 1000);
    }
}
function close_cp_window() {
    clearTimeout(t);
    play_beep();
    $("#cp-callback-widget").removeClass('cp-animated').addClass('cp-animated');
    $("#cp-callback-widget").removeClass('cp-bounce-out-down').addClass('cp-bounce-out-down');
    $("#cp-callback-widget").removeClass('v-leave-to').addClass('v-leave-to');
    $("#cp-button").removeClass('cp-animated').addClass('cp-animated');
    $("#cp-button").removeClass('v-enter-to').addClass('v-enter-to');
    $("#cp-button").removeClass('cp-bounce-in-up').addClass('cp-bounce-in-up');
    $(".cp-callpage__bg").fadeOut(500);
    $("#cp-button").css('display', 'block');
    t = setTimeout(function(){ 
        $("#cp-callback-widget").removeClass('cp-animated').removeClass('cp-bounce-out-down').removeClass('v-leave-to');
        $("#cp-button").removeClass('cp-animated').removeClass('v-enter-to').removeClass('cp-bounce-in-up');
        $('#callpage').removeClass('cp-callpage--widget-opened');
        init_notification();
    }, 600);
}
function init_notification()
{
    var n = Math.floor(Math.random() * 9);
    $('#notifications').html(1);
}
function collaspe_call_btn()
{
    play_beep();
    if ($("#cp-button").css('display')=='none') {
        //close popup window
        clearTimeout(t);
//        play_beep();
        $("#cp-callback-widget").removeClass('cp-animated').addClass('cp-animated');
        $("#cp-callback-widget").removeClass('cp-bounce-out-down').addClass('cp-bounce-out-down');
        $("#cp-callback-widget").removeClass('v-leave-to').addClass('v-leave-to');
        $("#cp-button").removeClass('cp-animated').addClass('cp-animated');
        $("#cp-button").removeClass('v-enter-to').addClass('v-enter-to');
        $("#cp-button").removeClass('cp-bounce-in-up').addClass('cp-bounce-in-up');
        $(".cp-callpage__bg").fadeOut(500);
        $("#cp-button").css('display', 'block');
        t = setTimeout(function(){ 
            $("#cp-callback-widget").removeClass('cp-animated').removeClass('cp-bounce-out-down').removeClass('v-leave-to');
            $("#cp-button").removeClass('cp-animated').removeClass('v-enter-to').removeClass('cp-bounce-in-up');
            $('#callpage').removeClass('cp-callpage--widget-opened');
            init_notification();
        }, 600);

        $('.cp-message__inner').css('display', 'none');
        $('.cp-schedule__inner').css('display', 'none');
        $('#cp-schedule__inner').css('display', 'none');
    }
    else {
        //open popup window
        clearTimeout(t);
        $("#open-screen-btn").css('display', 'none');
        $('#screen-0').css('display', 'none');
        $('#screen-1').css('display', 'block');

        if(session == ''){
            $('.cp-schedule__inner').css('display', 'block');
            $('#cp-schedule__inner').css('display', 'block');
            $('.cp-message__inner').css('display', 'none');
            $('.cp-segmented-bar__segment').removeClass('cp-segmented-bar__segment--active');
            $('#cp-schedule__inner').addClass('cp-segmented-bar__segment--active');
            init_schedule_box();
            init_message_box();
        }else{
            $('.cp-schedule__inner').css('display', 'none');
            $('#cp-schedule__inner').css('display', 'none');
            $('.cp-message__inner').css('display', 'block');
            init_message_box();
            $('#screen-0').css('display', 'none');
            $('#screen-1').css('display', 'block');
        }

        $('#department-select option').prop('selected', function() {
            return this.defaultSelected;
        });

        $('#callpage').removeClass('cp-callpage--widget-opened').addClass('cp-callpage--widget-opened');
        $("#cp-callback-widget").removeClass('cp-animated').addClass('cp-animated');
        $("#cp-callback-widget").removeClass('cp-bounce-in-up').addClass('cp-bounce-in-up');
        $("#cp-callback-widget").removeClass('v-enter-to').addClass('v-enter-to');
        $("#cp-button").removeClass('cp-animated').addClass('cp-animated');
        $("#cp-button").removeClass('v-leave-to').addClass('v-leave-to');
        $("#cp-button").removeClass('cp-fade-out-down').addClass('cp-fade-out-down');
        $(".cp-callpage__bg").fadeIn(500);
        t = setTimeout(function(){
            $("#cp-callback-widget").removeClass('cp-animated').removeClass('cp-bounce-in-up').removeClass('v-enter-to');
            $("#cp-button").removeClass('cp-animated').removeClass('v-leave-to').removeClass('cp-fade-out-down');
            $("#cp-button").css('display', 'none');
        }, 600);
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function init_message_box() {
    var inHtml='<p class="cp-h1 cp-call__heading cp-content-container">Complete your details and we will contact you as soon as possible</p><div class="cp-form cp-message__form"> <div class="cp-grid cp-grid--form"> <div class="cp-grid__item"> ' +
        '<div class="cp-grid__item"><input id="name" data-brand-color="border:focus" data-form-control="" data-input="" class="cp-form-simple-control" type="text" placeholder="Your name"> <label for="name" style="color: red !important;position: absolute !important;top: 0px !important;right: -5px !important;">*</label></div>' +
        '<div class="cp-grid__item"><input id="email1" data-brand-color="border:focus" data-form-control="" data-input="" class="cp-form-simple-control" type="text" placeholder="Your email"><label for="email1" style="color: red !important;position: absolute !important;top: 0px !important;right: -5px !important;">*</label> </div>';
        if(session == '' && mobileSession == ''){
            inHtml += '<div class="cp-grid__item"><input id="MobilePhone1" value="'+mobileSession+'" class="cp-form-simple-control" type="tel" placeholder="Your phone"><label for="email1" style="color: red !important;position: absolute !important;top: 0px !important;right: -5px !important;">*</label> </div>';
        }

    inHtml += '<div class="m_warnning"></div><div class="cp-chars-limit cp-chars-limit--kill-offset cp-custom-text-color"> 1000 </div>' +
        '<textarea id="message-to-manager" data-brand-color="border:focus" data-form-control="" placeholder="Type your message here" class="cp-form-simple-control" data-test="message-to-manager"></textarea> </div>'+
        '<div class="cp-grid__item"> <div class="cp-grid__item"> <button id="leave-message-btn" data-brand-color="background" class="cp-btn cp-btn--brand" data-test="leave-message-btn">Submit</button> </div>' +
        '<div class="cp-grid__item"> <p class="cp-processed-calls-text">You are already the 3rd person who has left a message</p></div></div></div>';
    $('.cp-message__inner').html(inHtml);
    // $("#MobilePhone1").intlTelInput({
    //     separateDialCode: true,
    //     initialCountry: "auto",
    //     utilsScript: "js/utils.js",
    //     geoIpLookup: function(callback) {
    //         $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
    //             var countryCode = (resp && resp.country) ? resp.country : "";
    //             callback(countryCode);
    //         });
    //     },
    // });
    $("#leave-message-btn").click(function(e) {
        var message = $("#message-to-manager").val();
        var name= $("#name").val();
        var email= $("#email1").val();
        var monthday= $("#month-day option:selected").text();
        var hour= $("#hour option:selected").text();

        var mob = $("#MobilePhone1").val();

        if(mob == ''){
            $('.m_warnning').html('Please add your phone number!');
            return false;
        }
        // var telInput = $("#MobilePhone1");
        // if ($.trim(mob)) {
        //     if (telInput.intlTelInput("isValidNumber")) {
        //         $('.m_warnning').html('Please input Valid phone number!');
        //         return false;
        //     }
        // }
        if ($("#MobilePhone1").length>0 && $("#MobilePhone1").val().length<9) {
            $('.m_warnning').html('Please input Valid phone number!');
            return false;
        }

//        if(message == ''){
//            alert('Please add message!');
//            return false;
//        }
        if(name == ''){
            alert('Please add Name!');
            return false;
        }
        if(email == '' || !validateEmail(email)){
            alert('Please add correct email!');
            return false;
        }
        $("#leave-message-btn").prop('disabled',true);
        $("#leave-message-btn").text('Please wait...');
        $("#leave-message-btn").addClass('wait-class');
//        $('.success-class').html('').hide()
//        $('.error-class').html('').hide()
        $.ajax({
            url: "ajax/register.php",
            type: "post",
            dataType: "json",
            data: {'message': message,'action':'update','name':name,'email':email,'monthday':monthday,'hour':hour,'mob':mob},
            success: function (data) {
                if (data.success != undefined) {
                    alert(data.success);
                    var inHtml = '<div class="cp-message__inner" style=""> <p class="cp-h1 cp-call__heading cp-content-container">Success!</p><div class="cp-form cp-message__form"> <div class="cp-grid cp-grid--form"> <div class="cp-grid__item"><p>'
                        + message + '</p></div><div class="cp-grid__item"><p><strong>' + email + '</strong></p></div></div></div></div>';
                    $('.cp-message__inner').html(inHtml);
                    close_cp_window();
                } else {
                    $("#leave-message-btn").prop('disabled',false);
                    $("#leave-message-btn").text('Submit');
                    $("#leave-message-btn").removeClass('wait-class');
                    alert(data.error);
                }
            }
        });

    });
}
function init_schedule_box() {
    
    var inHtml='<br><br><p class="cp-h1 cp-schedule__heading cp-content-container">Please fill in your Phone number<br>And we will call you back.</p>' +
        '<div class="cp-form cp-schedule__form">' +
        '<div class="cp-grid cp-grid--form">' +
        '<div class="cp-grid__item cp-col-6 cp-schedule__select-item">' +
        '<div class="cp-form-control cp-form-control--show-arrow cp-schedule__select">' +
        '<?=$sel?>' +
        '<svg x="0px" y="0px" width="12px" viewBox="3 74 220 191.9" class="cp-form-control__arrow"><path d="M5,98.7l1.2,2.1l93.5,156.5c3.2,5.3,7.9,8.6,13.2,8.6s10-3.4,13.2-8.6l93.4-156.2l1.6-2.6c1.2-2.5,1.9-5.5,1.9-8.7c0-8.7-5.1-15.8-11.4-15.8l0,0H14.4l0,0C8.1,74,3,81.1,3,89.8C3,93.1,3.8,96.2,5,98.7z"></path></svg></div></div><div class="cp-grid__item cp-col-6 cp-schedule__select-item"><div class="cp-form-control cp-form-control--show-arrow cp-schedule__select"><select tabindex="0" data-form-control="" data-brand-color="border:focus | &amp;:focus + fill" class="cp-form-control__control cp-form-simple-control cp-form-simple-control--select" id="hour">' +
        '<option value="1543221000000">'+now+'</option>' +
        '<option value="1543221000000">08:00</option>' +
        '<option value="1543222800000">08:30</option>' +
        '<option value="1543224600000">09:00</option>' +
        '<option value="1543226400000">09:30</option>' +
        '<option value="1543228200000">10:00</option>' +
        '<option value="1543230000000">10:30</option>' +
        '<option value="1543231800000">11:00</option>' +
        '<option value="1543233600000">11:30</option>' +
        '<option value="1543235400000">12:00</option>' +
        '<option value="1543237200000">12:30</option>' +
        '<option value="1543239000000">13:00</option>' +
        '<option value="1543240800000">13:30</option>' +
        '<option value="1543242600000">14:00</option>' +
        '<option value="1543242600000">14:30</option>' +
        '<option value="1543242600000">15:00</option>' +
        '<option value="1543242600000">15:30</option>' +
        '<option value="1543242600000">16:00</option>' +
        '<option value="1543242600000">16:30</option>' +
        '<option value="1543242600000">17:00</option>' +
        '<option value="1543242600000">17:30</option>' +
        '<option value="1543242600000">18:00</option>' +
        '<option value="1543242600000">18:30</option>' +
        '<option value="1543242600000">19:00</option>' +
        '</select>';

    inHtml += '<svg x="0px" y="0px" width="12px" viewBox="3 74 220 191.9" class="cp-form-control__arrow"><path d="M5,98.7l1.2,2.1l93.5,156.5c3.2,5.3,7.9,8.6,13.2,8.6s10-3.4,13.2-8.6l93.4-156.2l1.6-2.6c1.2-2.5,1.9-5.5,1.9-8.7c0-8.7-5.1-15.8-11.4-15.8l0,0H14.4l0,0C8.1,74,3,81.1,3,89.8C3,93.1,3.8,96.2,5,98.7z"></path></svg></div></div>';
    inHtml += '<div class="cp-grid__item">';
    inHtml += '<div class="cp-vuetel cp-vuetel--no-flags"><svg x="0px" y="0px" viewBox="0 0 100 108.4" class="cp-phone-icon cp-vuetel__phone-icon"><path d="M97.8,84.4l-0.6-1.2c-1.7-4-22.3-10-24.1-10.1l-1.4,0.1c-2.8,0.6-5.9,3.3-12.4,9C52,78.8,41.9,69.7,37.2,64.4 c-5.1-5.8-11.5-15.5-13.8-22.8C30.8,35,33.9,32.2,34.1,29c0.1-1.7-3.4-22.9-7.2-25.1l-1.1-0.7c-2.4-1.5-6-3.8-10-3 c-1,0.2-1.9,0.6-2.8,1.1C10.4,3,3.8,7.5,0.8,13.5C-1,17.2-1.9,51,23.5,79.6c25,28.3,55.9,29.5,60.5,28.5l0.1,0l0.4-0.1 c6.3-2.2,11.6-8.2,13.6-10.7C101.8,92.7,99.2,87.3,97.8,84.4"></path></svg>';
    inHtml += '<input type="tel" name="MobilePhone0" id="MobilePhone0" value="'+mobileSession+'" class="cp-form-simple-control" placeholder="Please input Phone number">';
    inHtml += '</div></div><div class="m_warnning"></div><div class="cp-grid__item"><button id="schedule-call-btn" data-brand-color="background" class="cp-btn cp-btn--brand" data-test="schedule-call-btn">Call me now</button></div><div class="cp-grid__item"><p class="cp-processed-calls-text">You are already the 4th person who has ordered a call</p></div></div></div>';
    $('.cp-schedule__inner').html(inHtml);
    // $("#MobilePhone0").intlTelInput({
    //     separateDialCode: true,
    //     initialCountry: "auto",
    //     utilsScript: "js/utils.js",
    //     geoIpLookup: function(callback) {
    //         $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
    //             var countryCode = (resp && resp.country) ? resp.country : "";
    //             callback(countryCode);
    //         });
    //     },
    // });
    $('#month-day').on('change', function (e) {
        var date1 = $(this).find('option:selected').text();
        var now1 = $('#hour').find('option:selected').text();
        if(date1.trim() == nowDay.trim() &&  now1.trim() == now.trim()){
            $('#schedule-call-btn').text('Call me now');
        }else{
            $('#schedule-call-btn').text('Call me later');
        }
    });
    $('#hour').on('change', function (e) {
        var date1 = $('#month-day').find('option:selected').text();
        var now1 = $(this).find('option:selected').text();
        if(date1.trim() == nowDay.trim() &&  now1.trim() == now.trim()){
            $('#schedule-call-btn').text('Call me now');
        }else{
            $('#schedule-call-btn').text('Call me later');
        }
    });
    $("#schedule-call-btn").click(function(e) {
        var mobile = $("#MobilePhone0").val();
        if(mobile == ''){
            $('.m_warnning').html('Please add your phone number!');
            return false;
        }
        // var telInput = $("#MobilePhone0");
        // if ($.trim(mobile)) {
        //     if (telInput.intlTelInput("isValidNumber")) {
        //         $('.m_warnning').html('Please input Valid phone number!');
        //         return false;
        //     }
        // }
        if ($("#MobilePhone0").length>0 && $("#MobilePhone0").val().length<9) {
            $('.m_warnning').html('Please input Valid phone number!');
            return false;
        }

        var monthday= $("#month-day option:selected").text();
        var hour= $("#hour option:selected").text();
       
//        $('.success-class').html('').hide()
//        $('.error-class').html('').hide()
        $("#schedule-call-btn").prop('disabled',true);
        $("#schedule-call-btn").text('Please wait...');
        $("#schedule-call-btn").addClass('wait-class');
        $.ajax({
            url: "ajax/register.php",
            dataType: "json",
            type: "post",
            data: {'MobilePhone': mobile,'action':'register','monthday':monthday,'hour':hour},
            success: function (data) {
                if (data.success != undefined) {
                    session = data.session;
                    $('.cp-message__inner').css('display', 'block');
                    $('.cp-schedule__inner').css('display', 'none');
                    $('#m_warnning').html('');
                    $("#schedule-call-btn").prop('disabled',false);
                    $("#schedule-call-btn").text('Call me now');
                    $("#schedule-call-btn").removeClass('wait-class');
                    $('.cp-segmented-bar__segment').removeClass('cp-segmented-bar__segment--active');
                    $('#cp-message__inner').addClass('cp-segmented-bar__segment--active');
                    init_message_box();
                }else{
                    $('#m_warnning').html('');
                    $("#schedule-call-btn").prop('disabled',false);
                    $("#schedule-call-btn").text('Call me now');
                    $("#schedule-call-btn").removeClass('wait-class');
                    alert(data.error);
                }
            }
        });

    });
}
$(document).ready(function() {
    $("#cp-button").click(function(e) {
        collaspe_call_btn();
    });
    $("#open-screen-btn").click(function(e) {
        $('#screen-0').css('display', 'none');
        $('#screen-1').fadeIn(600);
    });
    $('#department-select').on('change', function (e) {
        $("#open-screen-btn").css('display', 'block');
    });
    $('.cp-segmented-bar__segment').click(function(e) {
        $('.cp-segmented-bar__segment').removeClass('cp-segmented-bar__segment--active');
        $(this).addClass('cp-segmented-bar__segment--active');

        var tabID = $(this).attr('id');
        if (tabID == 'cp-schedule__inner')
        {
            $('.cp-message__inner').css('display', 'none');
            $('.cp-schedule__inner').fadeIn(600);
        }
        else {
            $('.cp-schedule__inner').css('display', 'none');
            $('.cp-message__inner').fadeIn(600);
        }
    });
    setTimeout(function(){
//        play_beep();
        $("#cp-button").addClass('cp-animated');
        $("#cp-button").addClass('v-enter-to');
        $("#cp-button").addClass('cp-bounce-in-up');
        $("#cp-button").css('display', 'block');
        t = setTimeout(function(){ 
            $("#cp-button").removeClass('cp-animated').removeClass('v-enter-to').removeClass('cp-bounce-in-up');
            init_notification();
        }, 600);
    }, 2000);
});
$(document).mouseup(function(e)
{
    var container = $("#cp-callback-widget");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0 && $("#cp-button").css('display')=='none') 
    {
        close_cp_window();
    }
});
</script>
<!-- end of call copup -->
</body></html>