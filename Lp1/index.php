<?php
$aff_id = empty($_GET['aff_id']) ? '' : $_GET['aff_id'];
	$aff_key = empty($_GET['aff_key']) ? '' : $_GET['aff_key'];
	$affTranID = empty($_GET['affTranID']) ? '' : $_GET['affTranID'];
	$game = empty($_GET['game']) ? '' : $_GET['game'];
	$coupon = empty($_GET['coupon']) ? '' : $_GET['coupon'];
	$ref = empty($_GET['ref']) ? '' : $_GET['ref'];
	$FT = empty($_GET['FT']) ? '' : $_GET['FT'];
	$lang = empty($_GET['lang']) ? 'en' : $_GET['lang'];
	$color = empty($_GET['color']) ? 'en' : $_GET['color'];
	$mainimage = empty($_GET['i']) ? 'none' : $_GET['i'];
    
	$paymentPage = 'payshortlpbp';
	$country = $_SERVER['HTTP_CF_IPCOUNTRY'];
	$countryLower = strtolower($country);
	 $m = empty($_GET['m']) ? '000' : $_GET['m'];
	
	if($color == 2){
		$paymentPage = 'paymentShort2c';
	}
	$json = file_get_contents('phone.json');
	$json = json_decode($json, true);

	$phonePerfix = $json[$country];
?>
<!DOCTYPE html>
<html dir="LTR" lang="en-gb" prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths skrollr skrollr-desktop">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T97VQ66');</script>
<!-- End Google Tag Manager -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./Bcure1_files/54c811d1a7e96453f00848a236188c49.css" data-minify="1">
    <div class="fit-vids-style">­
    <style>
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

            .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
    </style></div>
    <div class="fit-vids-style">­
    <style>
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

            .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
    </style></div>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bcure1</title>
 
    <meta property="og:locale" content="en_gb">
    <meta property="og:type" content="article">
    <meta property="og:title" content="bCureLaser">
    <meta property="og:description" content="ENTER NOW">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Painless Life!">
    <meta property="og:image" content="../images/1.jpg">
    <meta property="og:image:width" content="974">
    <meta property="og:image:height" content="538">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="BCure Laser">
    <meta name="twitter:image" content="../images/1.jpg">
   
       
    <style type="text/css">
        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="google-fonts-1-css" href="./Bcure1_files/css" type="text/css" media="all">
     <meta name="generator" content="WordPress 4.9.6">
    <link rel="shortlink" href="http://painlesslife.co.uk/lp1/?sl=1">
    <link rel="stylesheet" type="text/css" href="./Bcure1_files/css(1)">
    <style type="text/css">
        div.logo-text a {
            color: #666;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 400;
            font-size: 30px;
            line-height: 1em;
        }

        .logo-img a > img {
            width: auto;
        }

        .logo {
            margin-top: 40px;
        }

        body {
            background-color: rgba(255,255,255,1);
            background-position: top center;
            background-repeat: repeat;
            background-size: auto;
            background-attachment: scroll;
            color: #666;
            font-family: 'Roboto Slab',Arial,sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.8em;
        }

        #top-bar {
            background-color: #eee;
            color: #5b5b5b;
            font-family: 'Roboto Slab',Arial,sans-serif;
            font-weight: 400;
            font-size: 12px;
            line-height: 40px;
        }

            #top-bar a {
                color: #888;
            }

                #top-bar a:hover {
                    color: #1c57ff;
                }

        #header, .sticky-header {
            background-color: rgba(255,255,255,1);
            background-position: center bottom;
            background-repeat: repeat-x;
            background-size: auto;
            background-attachment: scroll;
        }

        .sf-menu a, .mobile-menu a {
            color: #383838;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 400;
            font-size: 16px;
            letter-spacing: 0;
        }

            .sf-menu a:hover, .sf-menu li.active a, .sf-menu li.current-menu-item > a, .sf-menu .sfHover > a, .sf-menu .sfHover > li.current-menu-item > a, .sf-menu li.current-menu-ancestor > a, .mobile-menu a:hover, .mobile-menu li.current-menu-item > a {
                color: #1c57ff;
            }

        .nav-main .sf-menu .sub-menu {
            background-color: #383838;
        }

            .nav-main .sf-menu .sub-menu li:hover {
                background-color: #1c57ff;
            }

            .nav-main .sf-menu .sub-menu li a {
                color: #FFF;
                font-family: 'Heebo',Arial,sans-serif;
                font-weight: 400;
                font-size: 14px;
                text-transform: none;
                letter-spacing: 0;
                line-height: 3.8em;
            }

            .nav-main .sf-menu .sub-menu li:hover > a, .nav-main .sf-menu .sub-menu li.current-menu-item > a {
                color: #fff;
            }

        a, .entry-meta:after, .sd-title:after, .title-comments:after, .title-respond:after, .pb-widget-title:after, .widget-title:after {
            color: #1c57ff;
        }

            a:hover {
                color: #1c57ff;
            }

        ::selection {
            color: #fff;
            background: #1c57ff;
        }

        ::-moz-selection {
            color: #fff;
            background: #1c57ff;
        }

        h1 {
            color: #1c57ff;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 700;
            font-size: 41px;
            text-transform: none;
            letter-spacing: 0;
            line-height: 1.3em;
        }

        h2 {
            color: #1c57ff;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 700;
            font-size: 31px;
            text-transform: none;
            letter-spacing: 0;
            line-height: 1.5em;
        }

        h3 {
            color: #1c57ff;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 700;
            font-size: 21px;
            text-transform: none;
            letter-spacing: 0;
            line-height: 1.5em;
        }

        h4 {
            color: #1c57ff;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 500;
            font-size: 21px;
            text-transform: none;
            letter-spacing: 0;
            line-height: 1.5em;
        }

        h5 {
            color: #1c57ff;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 700;
            font-size: 16px;
            text-transform: none;
            letter-spacing: 0;
            line-height: 2em;
        }

        h6 {
            color: #7a7a7a;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 400;
            font-size: 18px;
            text-transform: none;
            line-height: 2.5em;
        }

        #page-header.page-header-style-custom_bg {
            background-color: rgba(243,243,243,1);
            background-position: center center;
            background-repeat: repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        #page-header {
            height: 70px;
            line-height: 70px;
            color: #383838;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 400;
            font-size: 19px;
            text-transform: none;
            letter-spacing: 0;
        }

            #page-header div.breadcrumbs, #page-header div.breadcrumbs a {
                color: #636363;
                font-family: 'Roboto Slab',Arial,sans-serif;
                font-weight: 400;
                font-size: 12px;
                text-transform: none;
                letter-spacing: 0;
                font-style: normal;
            }

        #sidebar {
            color: #606060;
            font-family: 'Roboto Slab',Arial,sans-serif;
            font-weight: 400;
            font-size: 13px;
            line-height: 1.5em;
        }

            #sidebar a {
                color: #606060;
            }

                #sidebar a:hover {
                    color: #1c57ff;
                }

            #sidebar .widget-title {
                color: #1c57ff;
                font-family: 'Heebo',Arial,sans-serif;
                font-weight: 400;
                font-size: 17px;
                text-transform: none;
                letter-spacing: 0;
                line-height: 2em;
            }

        #footer {
            background-color: #3A3A3A;
            color: #9e9e9e;
            font-family: 'Roboto Slab',Arial,sans-serif;
            font-weight: 400;
            font-size: 13px;
            line-height: 1.5em;
        }

            #footer a {
                color: #7c7c7c;
            }

                #footer a:hover {
                    color: #1c57ff;
                }

        #sidebar-footer .widget-title {
            color: #fff;
            font-family: 'Heebo',Arial,sans-serif;
            font-weight: 700;
            font-size: 17px;
            text-transform: none;
            letter-spacing: 0;
            line-height: 2.3em;
        }

        #copyright {
            background-color: #3a3a3a;
            color: #7c7c7c;
            font-family: 'Roboto Slab',Arial,sans-serif;
            font-weight: 400;
            font-size: 12px;
            letter-spacing: 0;
            font-style: normal;
            line-height: 60px;
        }

            #copyright a {
                color: #7c7c7c;
            }

                #copyright a:hover {
                    color: #1c57ff;
                }

        #outer-slidebar #outer-slidebar-overlay {
            background-color: #1c57ff;
        }

        #outer-slidebar {
            color: #fff;
            font-family: 'Neuton',Arial,sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.5em;
        }

            #outer-slidebar a {
                color: #f2f2f2;
            }

                #outer-slidebar a:hover {
                    color: #fff;
                }

            #outer-slidebar .widget-title {
                color: #fff;
                font-family: 'Karla',Arial,sans-serif;
                font-weight: 700;
                font-size: 21px;
                letter-spacing: -1px;
                line-height: 2.5em;
            }

        #pojo-scroll-up {
            width: 50px;
            height: 50px;
            line-height: 50px;
            background-color: rgba(51,51,51,.6);
            background-position: top center;
            background-repeat: repeat;
            background-size: auto;
            background-attachment: scroll;
        }

            #pojo-scroll-up a {
                color: #eee;
            }

        .sf-menu a, .menu-no-found, .sf-menu li.pojo-menu-search, .search-header {
            line-height: 120px;
        }

        .sf-menu li:hover ul, .sf-menu li.sfHover ul {
            top: 120px;
        }

        #top-bar ul.social-links li a .social-icon:before {
            line-height: 40px;
            height: 40px;
            width: 40px;
        }

        .navbar-toggle {
            border-color: #383838;
        }

        .icon-bar {
            background-color: #383838;
        }

        .sf-menu li.active, .sf-menu li:hover, .sf-menu li.current-menu-item, .sf-menu li.current-menu-parent, .sf-menu li.current-menu-ancestor, .sf-menu li.current_page_item, .sf-menu li.current_page_paren, .sf-menu li.current_page_ancestor {
            border-color: #1c57ff;
        }

        #sidebar .menu li a:hover, #sidebar .sub-menu li a:hover, #sidebar .sub-page-menu li a:hover, #sidebar .menu li.current_page_item > a, #sidebar .sub-menu li.current_page_item > a, #sidebar .sub-page-menu li.current_page_item > a, #sidebar .menu li.current-menu-item > a, #sidebar .sub-menu li.current-menu-item > a, #sidebar .sub-page-menu li.current-menu-item > a {
            border-color: #1c57ff;
        }

        .category-filters a {
            color: #1c57ff;
        }

            .category-filters a:hover, .category-filters a.active {
                color: #1c57ff;
                border-top-color: #1c57ff;
            }

        #outer-slidebar #outer-slidebar-toggle a {
            border-right-color: #1c57ff;
            color: #fff;
        }

        .rtl #outer-slidebar #outer-slidebar-toggle a {
            border-left-color: #1c57ff;
        }

        .p {
            margin-top: -52px;
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <style type="text/css" id="pojo-size-sections"></style>
   
    <script type="text/javascript" src="./Bcure1_files/sendrolling.js.download"></script>
    <div style="width: 1px; height: 1px; display: inline; position: absolute;"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(1)"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(2)"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(3)"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(4)"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(5)"><img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(6)"></div>
    <div style="width: 1px; height: 1px; display: inline; position: absolute;">
        <img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(7)">
        <img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(8)">
        <img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(9)">
        <img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(10)">
        <img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(11)">
        <img height="1" width="1" style="border-style:none;" alt="" src="./Bcure1_files/out(12)">
    </div>
</head>
<body class="ltr page-template page-template-elementor_canvas page page-id-978 pojo-title-bar elementor-default elementor-template-canvas elementor-page elementor-page-978 format-text" data-elementor-device-mode="desktop">
    <div class="elementor elementor-978">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section data-id="0cz1tmg" class="elementor-element elementor-element-0cz1tmg elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="6m8m1j9" class="elementor-element elementor-element-6m8m1j9 elementor-column elementor-col-100 elementor-top-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="c7dt8uq" class="elementor-element elementor-element-c7dt8uq elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Do you suffer from back pain, knee pain, sciatica? </p></div></div></div></div></div></div></div></div></section><section data-id="fwujpqp" class="elementor-element elementor-element-fwujpqp elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}" data-element_type="section">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path> </svg></div><div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div data-id="oc8win7" class="elementor-element elementor-element-oc8win7 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section data-id="10kb7zm" class="elementor-element elementor-element-10kb7zm elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-content-top elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-inner-section" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div data-id="9linkps" class="elementor-element elementor-element-9linkps elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="37cgst7" class="elementor-element elementor-element-37cgst7 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>B<span style="color: #ff6600;">–</span>Cure Laser</p></div></div></div><div data-id="oyskt0p" class="elementor-element elementor-element-oyskt0p elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">A home medical device that treats both the pain and the source of the problem by strengthening the body’s natural healing processes </div></div></div><div data-id="5ob94ao" class="elementor-element elementor-element-5ob94ao elementor-headline--style-highlight animated animated-slow elementor-widget elementor-widget-global elementor-global-151 elementor-widget-animated-headline fadeIn" data-settings="{&quot;highlighted_text&quot;:&quot;\u05e2\u05db\u05e9\u05d9\u05d5 \u05d1\u05de\u05d1\u05e6\u05e2 \u05de\u05d9\u05d5\u05d7\u05d3&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;}" data-element_type="animated-headline.default"><div class="elementor-widget-container"><h3 class="elementor-headline"> <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"><span class="elementor-headline-dynamic-text elementor-headline-text-active">Now on special offer.</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7"></path></svg></span></h3></div></div><div data-id="itsfwns" class="elementor-element elementor-element-itsfwns elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Do you also want to try the B-Cure Laser at home for 30 days and find out that it works? Leave your details!</p></div></div></div><div data-id="05xtb7v" class="elementor-element elementor-element-05xtb7v elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-shortcode">
                                                                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2"><a id="gf_2" class="gform_anchor"></a> 
																			<form onsubmit="return validateRegisterForm()" autocomplete="off" method="post"  action="../get_registration.asp" class="formCC" style="padding: 10px;">
			<input type="hidden" name="goto" id="goto" value="<?=$paymentPage ?>">
			<input type="hidden" name="fromWhere" id="fromWhere" value="LP">
			<input type="hidden" name="ref" id="ref" value="<?=$ref ?>">
			<input type="hidden" name="coupon" id="coupon" value="<?= $coupon ?>">
			<input type="hidden" name="game" id="game" value="<?=$game ?>">
			<input type="hidden" name="aff_id" id="aff_id" value="<?=$aff_id ?>">
			<input type="hidden" name="aff_key" id="aff_key" value="<?=$aff_key ?>">
			<input type="hidden" name="affTranID" id="affTranID" value="<?=$affTranID ?>">
			<input type="hidden" name="lang" id="lang" value="<?=$lang?>">
<div class="gform_body"><ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below"><li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Name*" aria-required="true" aria-invalid="false"></div></li><li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label><input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*"></li><li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_3">Email</label><input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email"></li><li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג"></li><li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000"></li></ul></div><div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="2" onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} window[&quot;gf_submitting_2&quot;]=true;  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" class="gform_hidden" name="is_submit_2" value="1"> <input type="hidden" class="gform_hidden" name="gform_submit" value="2"> <input type="hidden" class="gform_hidden" name="gform_unique_id" value=""> <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImFkYzIyMmJjOWUxMzFiOWIzYmNkMTRiOTg4ZmU5YTE0Il0="> <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0"> <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1"> <input type="hidden" name="gform_field_values" value=""></div></form></div>
                                                                            <script type="text/javascript">jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(typeof Placeholders != 'undefined'){
    Placeholders.enable();
}} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script>
                                                                            <script type="text/javascript">    jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } );</script>
                                                                        </div>
                                                                    </div>
                                                                </div><div data-id="84c8daa" class="elementor-element elementor-element-84c8daa elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p><span lang="EN">The Trail Period Is According To The Term Of Use</span></p></div></div></div>
                                                            </div>
                                                        </div>
                                                    </div><div data-id="y2wijzs" class="elementor-element elementor-element-y2wijzs elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="hm1qva5" class="elementor-element elementor-element-hm1qva5 elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="403" height="1000" src="./Bcure1_files/B-cure_laser_devise_NEW2.png" data-lazy-src="./B-cure_laser_devise_NEW2.png" class="attachment-large size-large lazyloaded" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2.png 403w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2-121x300.png 121w" sizes="(max-width: 403px) 100vw, 403px" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2.png 403w, ./B-cure_laser_devise_NEW2-121x300.png 121w" data-was-processed="true"></div></div></div></div></div></div><div data-id="otne0au" class="elementor-element elementor-element-otne0au elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="62plvqd" class="elementor-element elementor-element-62plvqd elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="151" height="151" src="https://painlesslife.co.uk/Images/stamp.png" data-lazy-src="stamp.png" class="attachment-full size-full lazyloaded" alt="" data-lazy-srcset="https://painlesslife.co.uk/Images/stamp.png 151w, https://painlesslife.co.uk/Images/stamp.png 150w" sizes="(max-width: 151px) 100vw, 151px" srcset="https://painlesslife.co.uk/Images/stamp.png 151w, https://painlesslife.co.uk/Images/stamp.png 150w" data-was-processed="true"><noscript><img width="151" height="151" src="https://painlesslife.co.uk/Images/stamp.png" class="attachment-full size-full" alt="" srcset="https://painlesslife.co.uk/Images/stamp.png 151w, https://painlesslife.co.uk/Images/stamp.png 150w" sizes="(max-width: 151px) 100vw, 151px" /></noscript></div></div></div><div data-id="1elhnna" class="elementor-element elementor-element-1elhnna elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-element_type="image-box.default"><div class="elementor-widget-container"><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="88" height="88" src="./Bcure1_files/mli_1.png" data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_1.png" class="attachment-full size-full lazyloaded" alt="" data-was-processed="true"><noscript><img width="88" height="88" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_1.png" class="attachment-full size-full" alt="" /></noscript></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Proven success in reducing pain</h3></div></div></div></div><div data-id="2lm7dua" class="elementor-element elementor-element-2lm7dua elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-element_type="image-box.default"><div class="elementor-widget-container"><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="88" height="88" src="https://painlesslife.co.uk/Images/mli_2.png" data-lazy-src="https://painlesslife.co.uk/Images/mli_2.png" class="attachment-full size-full lazyloaded" alt="" data-was-processed="true"><noscript><img width="88" height="88" src="https://painlesslife.co.uk/Images/mli_2.png" class="attachment-full size-full" alt="" /></noscript></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Easy to use - 6 minutes, twice a day and you will see that  it works!</h3></div></div></div></div><div data-id="zv2ghv3" class="elementor-element elementor-element-zv2ghv3 elementor-position-right elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-element_type="image-box.default"><div class="elementor-widget-container"><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="88" height="88" src="./Bcure1_files/mli_3.png" data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_3.png" class="attachment-full size-full lazyloaded" alt="" data-was-processed="true"><noscript><img width="88" height="88" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_3.png" class="attachment-full size-full" alt="" /></noscript></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Safe for home use</h3></div></div></div></div></div></div></div>
                                                </div>
                                            </div>
                                        </section><div data-id="c9a8b4c" class="elementor-element elementor-element-c9a8b4c elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p><span lang="EN">The Trail Period Is According To The Term Of Use</span></p></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><section data-id="8n11lac" class="elementor-element elementor-element-8n11lac elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}" data-element_type="section"><div class="elementor-shape elementor-shape-bottom" data-negative="true"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path> </svg></div><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="7t1e7ro" class="elementor-element elementor-element-7t1e7ro elementor-column elementor-col-100 elementor-top-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><section data-id="to8f1di" class="elementor-element elementor-element-to8f1di elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="o8fiqvb" class="elementor-element elementor-element-o8fiqvb elementor-column elementor-col-100 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="9wq0txu" class="elementor-element elementor-element-9wq0txu elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">Dr James Craig  (Dr Hagai Amir) explains the advantages of B-Cure Laser</div></div></div><div data-id="qphif83" class="elementor-element elementor-element-qphif83 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-element_type="video.default"><div class="elementor-widget-container"><div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline"><div class="embed"><div class="fluid-width-video-wrapper" style="padding-top: 56.213%;"><iframe src="./Bcure1_files/zzKPlgUH9uA.html" allowfullscreen="" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque" class="lazyloaded" data-was-processed="true" id="fitvid455856"></iframe></div><noscript><iframe src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque" allowfullscreen data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque"></iframe><noscript><iframe src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque" allowfullscreen></iframe></noscript></div></div></div></div></div></div></div></div></div></section><section data-id="tr6v1gc" class="elementor-element elementor-element-tr6v1gc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="xcjtm94" class="elementor-element elementor-element-xcjtm94 elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="mbfm3ic" class="elementor-element elementor-element-mbfm3ic elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Mickey Berkowitz</p></div></div></div></div></div></div><div data-id="fyfx4oj" class="elementor-element elementor-element-fyfx4oj elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div></div></div></div></section><section data-id="0vbs8xh" class="elementor-element elementor-element-0vbs8xh elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="kmbc9as" class="elementor-element elementor-element-kmbc9as elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="y7ksabm" class="elementor-element elementor-element-y7ksabm elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="369" height="251" src=https://painlesslife.co.uk/Images/facebook_3.png data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg 369w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki-300x204.jpg 300w" sizes="(max-width: 369px) 100vw, 369px"><noscript><img width="369" height="251" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg 369w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki-300x204.jpg 300w" sizes="(max-width: 369px) 100vw, 369px" /></noscript></div></div></div></div></div></div><div data-id="wkrrjzv" class="elementor-element elementor-element-wkrrjzv elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="kmve05i" class="elementor-element elementor-element-kmve05i elementor-widget elementor-widget-heading" data-element_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">In the race of life, do not let pain stop you. </h2></div></div><div data-id="uey942b" class="elementor-element elementor-element-uey942b elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">Tens of thousands of patients use B-Cure Laser for the relief of pain from orthopaedic problems and infections, and they have returned to being their old selves.</div></div></div></div></div></div></div></div></section><section data-id="p918yd4" class="elementor-element elementor-element-p918yd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="b6xg6w1" class="elementor-element elementor-element-b6xg6w1 elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="hcsdg26" class="elementor-element elementor-element-hcsdg26 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Patient recommendations</p></div></div></div></div></div></div><div data-id="hs8drgt" class="elementor-element elementor-element-hs8drgt elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div></div></div></div></section><section data-id="6p3pp5v" class="elementor-element elementor-element-6p3pp5v elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="eg9a6gh" class="elementor-element elementor-element-eg9a6gh elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="g4tbsy9" class="elementor-element elementor-element-g4tbsy9 elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="326" height="214" src=https://painlesslife.co.uk/Images/facebook_4.png data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg 326w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05-300x197.jpg 300w" sizes="(max-width: 326px) 100vw, 326px"><noscript><img width="326" height="214" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg 326w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05-300x197.jpg 300w" sizes="(max-width: 326px) 100vw, 326px" /></noscript></div></div></div><div data-id="4xacolq" class="elementor-element elementor-element-4xacolq elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">"I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation. "</div></div></div><div data-id="28rpdbp" class="elementor-element elementor-element-28rpdbp elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p><br class="desktop"><br class="desktop"></p></div></div></div></div></div></div><div data-id="drvaakf" class="elementor-element elementor-element-drvaakf elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="14kgrao" class="elementor-element elementor-element-14kgrao elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="325" height="214" src=https://painlesslife.co.uk/Images/facebook_5.jpg data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px"><noscript><img width="325" height="214" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px" /></noscript></div></div></div><div data-id="1gl2han" class="elementor-element elementor-element-1gl2han elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>I’m back to my own self and going out with friends."<br></p></div></div></div><div data-id="dagel4m" class="elementor-element elementor-element-dagel4m elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>"A health professional recommended B-Cure Laser, and I treated myself at home several times a day, and to my amazement, not only did the pain decrease, but the problem itself disappeared.”<br>I’m back to my own self and going out with friends.”</p></div></div></div></div></div></div><div data-id="sbca2gd" class="elementor-element elementor-element-sbca2gd elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="yp0hd2o" class="elementor-element elementor-element-yp0hd2o elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="325" height="214" src=https://painlesslife.co.uk/Images/shutterstock_515018698.jpg data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px"><noscript><img width="325" height="214" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px" /></noscript></div></div></div><div data-id="tmrl8s2" class="elementor-element elementor-element-tmrl8s2 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">“We bought the device, and within two days he began to feel better.”</div></div></div><div data-id="ys6v066" class="elementor-element elementor-element-ys6v066 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>"John has suffered from ankle pain for many years and tried various treatments - elastic bandages, special shoes, ankle braces but that did not solve the problem - we bought the device, and within two days he began to feel better."</p></div></div></div></div></div></div></div></div></section></div></div></div></div></div></section><section data-id="n4gx3mw" class="elementor-element elementor-element-n4gx3mw elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;triangle&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}" data-element_type="section"><div class="elementor-shape elementor-shape-bottom" data-negative="true"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path> </svg></div><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="e2algax" class="elementor-element elementor-element-e2algax elementor-column elementor-col-100 elementor-top-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="xtmmylq" class="elementor-element elementor-element-xtmmylq elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Do you suffer from back pain, knee pain, sciatica? </p></div></div></div></div></div></div></div></div></section><section data-id="j1vepul" class="elementor-element elementor-element-j1vepul elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div data-id="3i2k9v9" class="elementor-element elementor-element-3i2k9v9 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section data-id="5vz0sez" class="elementor-element elementor-element-5vz0sez elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="0m8v5l2" class="elementor-element elementor-element-0m8v5l2 elementor-column elementor-col-100 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="lme2na9" class="elementor-element elementor-element-lme2na9 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>B<span style="color: #ff6600;">–</span>Cure Laser</p></div></div></div><div data-id="uk8nto1" class="elementor-element elementor-element-uk8nto1 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>A home medical device that treats both the pain and the source of the problem by strengthening the body’s natural healing processes </p></div></div></div></div></div></div></div></div></section><div data-id="c419bb3" class="elementor-element elementor-element-c419bb3 elementor-headline--style-highlight animated animated-slow elementor-widget elementor-widget-global elementor-global-151 elementor-widget-animated-headline fadeIn" data-settings="{&quot;highlighted_text&quot;:&quot;\u05e2\u05db\u05e9\u05d9\u05d5 \u05d1\u05de\u05d1\u05e6\u05e2 \u05de\u05d9\u05d5\u05d7\u05d3&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;}" data-element_type="animated-headline.default"><div class="elementor-widget-container"><h3 class="elementor-headline"> <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"><span class="elementor-headline-dynamic-text elementor-headline-text-active">Now on special offer.</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7"></path></svg></span></h3></div></div><div data-id="f2b540e" class="elementor-element elementor-element-f2b540e elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Do you also want to try the B-Cure Laser at home for 30 days and find out that it works? Leave your details!</p></div></div></div><div data-id="ukx07za" class="elementor-element elementor-element-ukx07za elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2"><a id="gf_2" class="gform_anchor"></a><form method="post" enctype="multipart/form-data" id="gform_2" action="http://bcurelaser.co.il/bc/rem/#gf_2"><div class="gform_body"><ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below"><li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="3" placeholder="Name*" aria-required="true" aria-invalid="false"></div></li><li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label><input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*"></li><li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_3">Email</label><input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email"></li><li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג"></li><li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000"></li></ul></div><div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="4" onclick="        if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  " onkeypress="        if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} window[&quot;gf_submitting_2&quot;]=true;  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" class="gform_hidden" name="is_submit_2" value="1"> <input type="hidden" class="gform_hidden" name="gform_submit" value="2"> <input type="hidden" class="gform_hidden" name="gform_unique_id" value=""> <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImFkYzIyMmJjOWUxMzFiOWIzYmNkMTRiOTg4ZmU5YTE0Il0="> <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0"> <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1"> <input type="hidden" name="gform_field_values" value=""></div></form></div>
                                                    <script type="text/javascript">    jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(typeof Placeholders != 'undefined'){
        Placeholders.enable();
    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script>
                                                    <script type="text/javascript">                                                        jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } );</script>
                                                </div>
                                            </div>
                                        </div><div data-id="cd2b1fa" class="elementor-element elementor-element-cd2b1fa elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p><span lang="EN">The Trail Period Is According To The Term Of Use</span></p></div></div></div><section data-id="90ongi1" class="elementor-element elementor-element-90ongi1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="850wa8y" class="elementor-element elementor-element-850wa8y elementor-column elementor-col-100 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="ee8suo8" class="elementor-element elementor-element-ee8suo8 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Dr James Craig  (Dr Hagai Amir) explains the advantages of B-Cure Laser</p></div></div></div><div data-id="twbbl3h" class="elementor-element elementor-element-twbbl3h elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-element_type="video.default"><div class="elementor-widget-container"><div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline"><div class="embed"><div class="fluid-width-video-wrapper" style="padding-top: 56.3953%;"><iframe src="./Bcure1_files/zzKPlgUH9uA(1).html" allowfullscreen="" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque" class="lazyloaded" data-was-processed="true" id="fitvid113761"></iframe></div><noscript><iframe src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque" allowfullscreen data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque"></iframe><noscript><iframe src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed&amp;autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;mute=0&amp;wmode=opaque" allowfullscreen></iframe></noscript></div></div></div></div></div></div></div></div></div></section><section data-id="5x94xxc" class="elementor-element elementor-element-5x94xxc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="evh7kjs" class="elementor-element elementor-element-evh7kjs elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="3854wfq" class="elementor-element elementor-element-3854wfq elementor-position-top elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-element_type="image-box.default"><div class="elementor-widget-container"><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="88" height="88" src=https://painlesslife.co.uk/Images/shutterstock_5150186981.jpg data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_1.png" class="attachment-full size-full" alt=""><noscript><img width="88" height="88" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_1.png" class="attachment-full size-full" alt="" /></noscript></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Proven success in reducing pain</h3></div></div></div></div><div data-id="n8ow569" class="elementor-element elementor-element-n8ow569 elementor-position-top elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-element_type="image-box.default"><div class="elementor-widget-container"><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="88" height="88" src=https://painlesslife.co.uk/Images/shutterstock_51501869841.jpg data-lazy-src="https://painlesslife.co.uk/Images/mli_2.png" class="attachment-full size-full" alt=""><noscript><img width="88" height="88" src="https://painlesslife.co.uk/Images/mli_2.png" class="attachment-full size-full" alt="" /></noscript></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Easy to use - 6 minutes, twice a day and you will see that  it works!</h3></div></div></div></div><div data-id="m8nks61" class="elementor-element elementor-element-m8nks61 elementor-position-top elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-element_type="image-box.default"><div class="elementor-widget-container"><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="88" height="88" src=https://painlesslife.co.uk/Images/shutterstock_51501869854.jpg data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_3.png" class="attachment-full size-full" alt=""><noscript><img width="88" height="88" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/mli_3.png" class="attachment-full size-full" alt="" /></noscript></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Safe for home use</h3></div></div></div></div></div></div></div><div data-id="gthhoqu" class="elementor-element elementor-element-gthhoqu elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="33nq8gx" class="elementor-element elementor-element-33nq8gx elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="403" height="1000" src=https://painlesslife.co.uk/Images/1.jpg data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2.png" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2.png 403w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2-121x300.png 121w" sizes="(max-width: 403px) 100vw, 403px"><noscript><img width="403" height="1000" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2.png" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2.png 403w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/B-cure_laser_devise_NEW2-121x300.png 121w" sizes="(max-width: 403px) 100vw, 403px" /></noscript></div></div></div><div data-id="xtkicd4" class="elementor-element elementor-element-xtkicd4 elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="151" height="151" src=https://painlesslife.co.uk/Images/facebook_.jpg data-lazy-src="https://painlesslife.co.uk/Images/stamp.png" class="attachment-large size-large" alt="" data-lazy-srcset="https://painlesslife.co.uk/Images/stamp.png 151w, https://painlesslife.co.uk/Images/stamp.png 150w" sizes="(max-width: 151px) 100vw, 151px"><noscript><img width="151" height="151" src="https://painlesslife.co.uk/Images/stamp.png" class="attachment-large size-large" alt="" srcset="https://painlesslife.co.uk/Images/stamp.png 151w, https://painlesslife.co.uk/Images/stamp.png 150w" sizes="(max-width: 151px) 100vw, 151px" /></noscript></div></div></div></div></div></div></div></div></section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><section data-id="eqwky0s" class="elementor-element elementor-element-eqwky0s elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}" data-element_type="section"><div class="elementor-shape elementor-shape-bottom" data-negative="true"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path> </svg></div><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="wn9uby8" class="elementor-element elementor-element-wn9uby8 elementor-column elementor-col-100 elementor-top-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><section data-id="46k25kj" class="elementor-element elementor-element-46k25kj elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="pm7cil9" class="elementor-element elementor-element-pm7cil9 elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="6940kmx" class="elementor-element elementor-element-6940kmx elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Mickey Berkowitz</p></div></div></div></div></div></div><div data-id="kl0y06s" class="elementor-element elementor-element-kl0y06s elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div></div></div></div></section><section data-id="sd5s8oj" class="elementor-element elementor-element-sd5s8oj elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="tb34zeh" class="elementor-element elementor-element-tb34zeh elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="a5t8l3v" class="elementor-element elementor-element-a5t8l3v elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="369" height="251" src=https://painlesslife.co.uk/Images/facebook_2.png data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg 369w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki-300x204.jpg 300w" sizes="(max-width: 369px) 100vw, 369px"><noscript><img width="369" height="251" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki.jpg 369w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/miki-300x204.jpg 300w" sizes="(max-width: 369px) 100vw, 369px" /></noscript></div></div></div></div></div></div><div data-id="mxc18z5" class="elementor-element elementor-element-mxc18z5 elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="kdoqw2w" class="elementor-element elementor-element-kdoqw2w elementor-widget elementor-widget-heading" data-element_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">In the race of life, do not let pain stop you. </h2></div></div><div data-id="jgp0jx4" class="elementor-element elementor-element-jgp0jx4 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Tens of thousands of patients use B-Cure Laser for the relief of pain <br>from orthopaedic problems and infections, and they have returned <br>to being their old selves.. <br><br>B-Cure Laser is clinically proven and recommended by international professionals <br>as an effective treatment, natural and non-invasive, with no known side effects.</p></div></div></div></div></div></div></div></div></section><section data-id="dayx877" class="elementor-element elementor-element-dayx877 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="do1v4xr" class="elementor-element elementor-element-do1v4xr elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="c7t6wz6" class="elementor-element elementor-element-c7t6wz6 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Patient recommendations</p></div></div></div></div></div></div><div data-id="9xyt28w" class="elementor-element elementor-element-9xyt28w elementor-column elementor-col-50 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div></div></div></div></section><section data-id="4ztsm9c" class="elementor-element elementor-element-4ztsm9c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="lh640hx" class="elementor-element elementor-element-lh640hx elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="q847sj5" class="elementor-element elementor-element-q847sj5 elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="326" height="214" src=https://painlesslife.co.uk/Images/facebook_3.png data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg 326w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05-300x197.jpg 300w" sizes="(max-width: 326px) 100vw, 326px"><noscript><img width="326" height="214" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05.jpg 326w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_05-300x197.jpg 300w" sizes="(max-width: 326px) 100vw, 326px" /></noscript></div></div></div><div data-id="q4kn4ol" class="elementor-element elementor-element-q4kn4ol elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix">"I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation. "</div></div></div><div data-id="va9eeta" class="elementor-element elementor-element-va9eeta elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation.</p></div></div></div></div></div></div><div data-id="2jeze4f" class="elementor-element elementor-element-2jeze4f elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="279dokd" class="elementor-element elementor-element-279dokd elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="325" height="214" src=https://painlesslife.co.uk/Images/facebook_4.png data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px"><noscript><img width="325" height="214" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_03-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px" /></noscript></div></div></div><div data-id="xqn343f" class="elementor-element elementor-element-xqn343f elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>I’m back to my own self and going out with friends.”<br></p></div></div></div><div data-id="jojin1q" class="elementor-element elementor-element-jojin1q elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>"A health professional recommended B-Cure Laser, and I treated myself at home several times a day, and to my amazement, not only did the pain decrease, but the problem itself disappeared.”I’m back to my own self and going out with friends.</p></div></div></div></div></div></div><div data-id="k9lepn7" class="elementor-element elementor-element-k9lepn7 elementor-column elementor-col-33 elementor-inner-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="wiqmxb2" class="elementor-element elementor-element-wiqmxb2 elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="325" height="214" src=https://painlesslife.co.uk/Images/facebook_5.jpg data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg" class="attachment-large size-large" alt="" data-lazy-srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px"><noscript><img width="325" height="214" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg" class="attachment-large size-large" alt="" srcset="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01.jpg 325w, http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/00_01-300x198.jpg 300w" sizes="(max-width: 325px) 100vw, 325px" /></noscript></div></div></div><div data-id="kqnugkr" class="elementor-element elementor-element-kqnugkr elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>“We bought the device, and within two days he began to feel better.”<br class="desktop"></p></div></div></div><div data-id="7gsxeuk" class="elementor-element elementor-element-7gsxeuk elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>"John has suffered from ankle pain for many years and tried various treatments - elastic bandages, special shoes, ankle braces <br class="desktop">br but that did not solve the problem - we bought the device, and within two days he began to feel better."</p></div></div></div></div></div></div></div></div></section></div></div></div></div></div></section><section data-id="frnu8ue" class="elementor-element elementor-element-frnu8ue elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div data-id="z5470ai" class="elementor-element elementor-element-z5470ai elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div data-id="hvjkrql" class="elementor-element elementor-element-hvjkrql elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p>Leave Your Details Here:</p></div></div></div><div data-id="b9vgon6" class="elementor-element elementor-element-b9vgon6 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2"><a id="gf_2" class="gform_anchor"></a><form method="post" enctype="multipart/form-data" id="gform_2" action="http://bcurelaser.co.il/bc/rem/#gf_2"><div class="gform_body"><ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below"><li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="5" placeholder="Name*" aria-required="true" aria-invalid="false"></div></li><li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label><input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*"></li><li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_3">Email</label><input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email"></li><li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג"></li><li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000"></li></ul></div><div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="6" onclick="                                                            if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  " onkeypress="                                                            if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} window[&quot;gf_submitting_2&quot;]=true;  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" class="gform_hidden" name="is_submit_2" value="1"> <input type="hidden" class="gform_hidden" name="gform_submit" value="2"> <input type="hidden" class="gform_hidden" name="gform_unique_id" value=""> <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImFkYzIyMmJjOWUxMzFiOWIzYmNkMTRiOTg4ZmU5YTE0Il0="> <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0"> <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1"> <input type="hidden" name="gform_field_values" value=""></div></form></div>
                                                    <script type="text/javascript">                                                        jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(typeof Placeholders != 'undefined'){
                                                            Placeholders.enable();
                                                        }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script>
                                                    <script type="text/javascript">                                                        jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } );</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><section data-id="tua73m7" class="elementor-element elementor-element-tua73m7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div data-id="sumvmnj" class="elementor-element elementor-element-sumvmnj elementor-column elementor-col-50 elementor-top-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="ju6tk1d" class="elementor-element elementor-element-ju6tk1d elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><p><span style="color: #000000;"><strong>&nbsp;</strong></span><span style="color: #000000;">Approved by the Ministry of Health A device does not replace medical treatment as recommended by a physician.<br></span><span style="color: #000000;">The PI sheet should be read before use.</span></p><p dir="LTR"><span lang="EN" style="font-size: 11.5pt; font-family: &#39;Arial&#39;,sans-serif; color: #475564; letter-spacing: -.4pt;">* The device does not replace medical treatment as recommended by a physician</span><span dir="LTR" style="font-size: 11.5pt; font-family: OpenSansHebrew-Regular; color: #475564; letter-spacing: -.4pt;">.&nbsp;<br> </span><span lang="EN" style="font-size: 11.5pt; font-family: &#39;Arial&#39;,sans-serif; color: #475564; letter-spacing: -.4pt;">The experience is subject to the regulations</span><span dir="LTR" style="font-size: 11.5pt; font-family: OpenSansHebrew-Regular; color: #475564; letter-spacing: -.4pt;">.</span></p></div></div></div></div></div></div><div data-id="37w1m0s" class="elementor-element elementor-element-37w1m0s elementor-column elementor-col-50 elementor-top-column" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div data-id="lrfkdpp" class="elementor-element elementor-element-lrfkdpp elementor-widget elementor-widget-image" data-element_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"> <img width="187" height="53" src=https://painlesslife.co.uk/Images/facebook_2.png data-lazy-src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/ge.png" class="attachment-large size-large" alt=""><noscript><img width="187" height="53" src="http://bcurelaser.co.il/bc/wp-content/uploads/2017/09/ge.png" class="attachment-large size-large" alt="" /></noscript></div></div></div></div></div></div></div></div></section>
            </div>
        </div>
    </div>
   
     
       
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T97VQ66"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  
</body>
</html>