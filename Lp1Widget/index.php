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
    <title>Bcure - 2</title>
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
</head>

<body class="ltr page-template page-template-elementor_canvas page page-id-978 pojo-title-bar elementor-default elementor-template-canvas elementor-page elementor-page-978 format-text">
    <div class="elementor elementor-978">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-element elementor-element-0cz1tmg elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-top-section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-6m8m1j9 elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c7dt8uq elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Suffering from back pain, knee pain or sciatica? </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-element elementor-element-fwujpqp elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-oc8win7 elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-element elementor-element-10kb7zm elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-content-top elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-9linkps elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-37cgst7 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>B<span style="color: #ff6600;">–</span>Cure Laser</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-oyskt0p elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">A home medical device that treats both the pain and the source of the problem by strengthening the body’s natural healing processes </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5ob94ao elementor-headline--style-highlight animated animated-slow elementor-widget elementor-widget-global elementor-global-151 elementor-widget-animated-headline fadeIn" data-settings="{&quot;highlighted_text&quot;:&quot;\u05e2\u05db\u05e9\u05d9\u05d5 \u05d1\u05de\u05d1\u05e6\u05e2 \u05de\u05d9\u05d5\u05d7\u05d3&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;}" data-element_type="animated-headline.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h3 class="elementor-headline">
                                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"><span class="elementor-headline-dynamic-text elementor-headline-text-active">Enjoy a special offer now</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7"></path></svg></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-itsfwns elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Do you also want to try the B-Cure Laser with 30 days money back guarantee? Fill in your details:</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-05xtb7v elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-shortcode">
                                                                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                                                                                <a id="gf_2" class="gform_anchor"></a>
                                                                                <?php include_once "../register_form.php"?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-84c8daa elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>The Trail Period Is According To The Term Of Use</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-y2wijzs elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-hm1qva5 elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="403" height="1000" src="img/product.png" class="attachment-large size-large lazyloaded" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-otne0au elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-62plvqd elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="151" height="151" src="img/stamp.png" class="attachment-full size-full lazyloaded" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-1elhnna elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <figure class="elementor-image-box-img">
                                                                                <img width="88" height="88" src="img/mli_1.png" class="attachment-full size-full lazyloaded">
                                                                            </figure>
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Proven success in reducing pain</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2lm7dua elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <figure class="elementor-image-box-img">
                                                                                <img width="88" height="88" src="img/mli_2.png" class="attachment-full size-full lazyloaded">
                                                                            </figure>
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Easy to use - 6 minutes, twice a day and you will see that  it works!</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-zv2ghv3 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <figure class="elementor-image-box-img">
                                                                                <img width="88" height="88" src="./img/mli_3.png" class="attachment-full size-full lazyloaded" alt="">
                                                                            </figure>
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Safe for home use</h3></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-element elementor-element-n4gx3mw elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;triangle&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-e2algax elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-xtmmylq elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Suffering from back pain, knee pain or sciatica? </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-element elementor-element-j1vepul elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-3i2k9v9 elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-element elementor-element-5vz0sez elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-0m8v5l2 elementor-column elementor-col-100 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-lme2na9 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>B<span style="color: #ff6600;">–</span>Cure Laser</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-uk8nto1 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>A home medical device that treats both the pain and the source of the problem by strengthening the body’s natural healing processes </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-c419bb3 elementor-headline--style-highlight animated animated-slow elementor-widget elementor-widget-global elementor-global-151 elementor-widget-animated-headline fadeIn" data-settings="{&quot;highlighted_text&quot;:&quot;\u05e2\u05db\u05e9\u05d9\u05d5 \u05d1\u05de\u05d1\u05e6\u05e2 \u05de\u05d9\u05d5\u05d7\u05d3&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;}" data-element_type="animated-headline.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-headline"> <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"><span class="elementor-headline-dynamic-text elementor-headline-text-active">Enjoy a special offer now</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7"></path></svg></span></h3></div>
                                        </div>
                                        <div class="elementor-element elementor-element-f2b540e elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Do you also want to try the B-Cure Laser comfortably at your own home and find out that it works?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ukx07za elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                                                        <a id="gf_2" class="gform_anchor"></a>
                                                        <?php include_once "../register_form.php"?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-cd2b1fa elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span lang="EN">The Trail Period Is According To The Term Of Use</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="elementor-element elementor-element-5x94xxc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-evh7kjs elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-3854wfq elementor-position-top elementor-vertical-align-middle elementor-widget elementor-widget-image-box">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <figure class="elementor-image-box-img">
                                                                                <img width="88" height="88" src="img/mli_1.png" class="attachment-full size-full" alt="">
                                                                            </figure>
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Proven success in reducing pain</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-n8ow569 elementor-position-top elementor-vertical-align-middle elementor-widget elementor-widget-image-box">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <figure class="elementor-image-box-img">
                                                                                <img width="88" height="88" src="img/mli_2.png" class="attachment-full size-full" alt="">
                                                                            </figure>
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Easy to use - 6 minutes, twice a day and you will see that  it works!</h3></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-m8nks61 elementor-position-top elementor-vertical-align-middle elementor-widget elementor-widget-image-box">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <figure class="elementor-image-box-img">
                                                                                <img width="88" height="88" src="img/mli_3.png" class="attachment-full size-full" alt="">
                                                                            </figure>
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Safe for home use</h3></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-gthhoqu elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-33nq8gx elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="403" height="1000" src="img/product.png" class="attachment-large size-large">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-xtkicd4 elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="151" height="151" src="img/stamp.png" class="attachment-large size-large" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-z5470ai elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-hvjkrql elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Fill in your details:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b9vgon6 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                                                        <a id="gf_2" class="gform_anchor"></a>
                                                        <?php include ("../register_form.php") ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-element elementor-element-8n11lac elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path>
                        </svg>
                    </div>
                    <div class="custom-embed">
                        <div class="embed">
                            <iframe src="https://www.youtube.com/embed/jorbtFU_7k0?feature=oembed" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-7t1e7ro elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-element elementor-element-p918yd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-b6xg6w1 elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-hcsdg26 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Patients recommendations</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-hs8drgt elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-element elementor-element-6p3pp5v elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-eg9a6gh elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-g4tbsy9 elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="326" height="214" src="img/rec3.png" class="attachment-large size-large">
                                                                            <span>Alexander Veus</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-tmrl8s2 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">“The result was a significant improvement in the quality of life.”</div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ys6v066 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>"I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation."</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-drvaakf elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-14kgrao elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="325" height="214" src="img/rec2.png" class="attachment-large size-large" />
                                                                            <span>Charlie Roberts</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-1gl2han elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>I’m back to my own self and going out with friends."
                                                                                <br>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-dagel4m elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>"A health professional recommended B-Cure Laser, and I treated myself at home several times a day, and to my amazement, not only did the pain decrease, but the problem itself disappeared.”
                                                                                <br>I’m back to my own self and going out with friends.”</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-sbca2gd elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-yp0hd2o elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="325" height="214" src="img/rec1.png" class="attachment-large size-large" />
                                                                            <span>John and Cindy</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-tmrl8s2 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">“We bought the device, and within two days he began to feel better.”</div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ys6v066 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>"John has suffered from ankle pain for many years and tried various treatments - elastic bandages, special shoes, ankle braces but that did not solve the problem - we bought the device, and within two days he began to feel better."</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-element elementor-element-tua73m7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section">
                    <?php include ("../register_form3.php") ?>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-column elementor-top-column" style="width:100%">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-ju6tk1d elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container text-center" style="width:100%">
                                                <p dir="LTR" style='color: #475564;font-size: 17px; font-family: "Poppins-Regular", Sans-serif; line-height:1.3em;'>
                                                    * The device does not replace medical treatment as recommended by a physician.<br/>
                                                   <BR>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

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
		<div data-test="widget-button-section" id="cp-button" class="cp-button-section cp-callpage__button" style="display: none; right: calc(2% + 40px) !important; bottom: calc(5% + 40px) !important;">
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
			<div data-test="widget-button" class="cp-widget-button">
                <div data-ignore-important-width="" data-ignore-important-height="" data-ignore-important-opacity="" class="cp-widget-button__underlay" style="background-color: rgb(21, 102, 245) !important;"></div>
				<div data-brand-color="background" class="cp-widget-button__inner">
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
    $("#MobilePhone1").intlTelInput({
        separateDialCode: true,
        initialCountry: "auto",
        utilsScript: "js/utils.js",
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
    });
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
        var telInput = $("#MobilePhone1");
        if ($.trim(mob)) {
            if (telInput.intlTelInput("isValidNumber")) {
                $('.m_warnning').html('Please input Valid phone number!');
                return false;
            }
        }
        if ($("#MobilePhone1").length>0 && $("#MobilePhone1").val().length<5) {
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
                    alert(data.error)
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
    inHtml += '<input type="tel" name="MobilePhone0" id="MobilePhone0" value="'+mobileSession+'" class="cp-form-simple-control">';
    inHtml += '</div><div class="m_warnning"></div><div class="cp-grid__item"><button id="schedule-call-btn" data-brand-color="background" class="cp-btn cp-btn--brand" data-test="schedule-call-btn">Call me now</button></div><div class="cp-grid__item"><p class="cp-processed-calls-text">You are already the 4th person who has ordered a call</p></div></div></div>';
    $('.cp-schedule__inner').html(inHtml);
    $("#MobilePhone0").intlTelInput({
        separateDialCode: true,
        initialCountry: "auto",
        utilsScript: "js/utils.js",
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
    });
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
        var telInput = $("#MobilePhone0");
        if ($.trim(mobile)) {
            if (telInput.intlTelInput("isValidNumber")) {
                $('.m_warnning').html('Please input Valid phone number!');
                return false;
            }
        }
        if ($("#MobilePhone0").length>0 && $("#MobilePhone0").val().length<5) {
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
                    $('.cp-segmented-bar__segment').removeClass('cp-segmented-bar__segment--active');
                    $('#cp-message__inner').addClass('cp-segmented-bar__segment--active');
                    init_message_box();
                }else{
                    alert(data.error)
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
</body>
</html>