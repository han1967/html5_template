<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $success = false;
    $system_message = "";
    include_once 'include/HttpRequest.php';
    $http = new HttpRequest();

    $monthDay = !empty($_POST['monthday']) ? $_POST['monthday'] : date('d');
    $hour = !empty($_POST['hour']) ? $_POST['hour'] : date('H:i');
    $hourArr = explode(":",$hour);
    $date = date('Y-m-d '.$hourArr[0].':'.$hourArr[1].':00', strtotime($monthDay));

    $request['name']         = !empty($_POST['name']) ? $_POST['name']:'';
    $request['surname']      = !empty($_POST['name']) ? $_POST['name']:'';
    $request['email']        = !empty($_POST['email']) ? $_POST['email']:'';
    $request['MobilePhone']  = !empty($_POST['phone']) ? $_POST['phone']:'';
    $request['leadStatusID'] = 24;
    $request['lastCallID']   = 24;
    $request['lastCallStatusName'] = 'Call Request';
    $request['ref']          = !empty($_SESSION['r']) ? $_SESSION['r'] : '';
    $request['a']            = !empty($_SESSION['a']) ? $_SESSION['a'] : '';
    $request['t']            = !empty($_SESSION['t']) ? $_SESSION['t'] : '';

    $createUser = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/user/create",$request);
    $createUser = json_decode($createUser,true);

    if($createUser['status']['type'] == 'success') {
        $_SESSION['user']['id'] = $createUser['data']['user']['id'];
        $_SESSION['user']['email'] = !empty($_POST['email']) ? $_POST['email']:'';

        $requestEvent['userID'] = $_SESSION['user']['id'];
        $requestEvent['eventType'] = 'CalCallEvent';
        $requestEvent['subject'] = 'Call Now Form';
        $requestEvent['textEvent'] = 'No message';
        $requestEvent['dateEvent'] = $date;
        $requestEvent['ownerID'] = 1;
        $createEvent = $http->sendRequest("https://connectapi.lottonetix.io/api/v1/functions/call_event",$requestEvent);
        $createEvent = json_decode($createEvent,true);
        if($createEvent['status']['type'] == 'success'){
            $success = true;
            $system_message = "Thank you";
        }else{
            $success = false;
            $system_message = $createEvent['status']['message'];
        }
    }else{
        $success = false;
        $system_message = "Message is not sent. The same email is already exist!";
    }
    $page_title="Thank you";
?>
<!DOCTYPE html>
<html class="js csstransitions js csstransitions no-touch" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Home - B-cure</title>
	<!-- This site is optimized with the Yoast SEO plugin v9.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="robots" content="noindex,follow">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Home - B-cure">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="B-cure">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com.php">
	<link rel="dns-prefetch" href="https://s.w.org.php">
	<link rel="alternate" type="application/rss+xml" title="B-cure » Feed" href="feed.php">
	<link rel="alternate" type="application/rss+xml" title="B-cure » Comments Feed" href="comments/feed.php">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="theme-color" content="#f6f6f6">
	<meta property="og:title" content="Home">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<link rel="stylesheet" href="css/about.css" type="text/css" media="all">
	
	<link rel="stylesheet" id="us-fonts-css" href="css/fonts.css" type="text/css" media="all">
    <link rel="stylesheet" id="bsf-Defaults-css" href="css/Defaults.css" type="text/css" media="all">
	<link rel="stylesheet" id="base.css" href="css/base.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/products.css" type="text/css" media="all">

	<style> 
	.spacer-5d { height:346px } 
	@media (max-width: 1199px) { .spacer-5d { height:395px } }  
	@media (max-width: 991px) { .spacer-5d { height:395px } } 
	@media (max-width: 767px) { .spacer-5d { height:90px } }  
	@media (max-width: 479px) { .spacer-5d { height:75px } } 

	.spacer-5b {height:96px}
	@media (max-width: 767px) { .spacer-5b { height:75px } }  
	@media (max-width: 479px) { .spacer-5b { height:90px } } 

	@media (max-width: 767px) { .spacer-5bffe6a6e3769 { height:15px } }  
	 @media (max-width: 479px) { .spacer-5bffe6a6e3769 { height:15px } }  
	 @media (max-width: 1199px) { .spacer-5bffe6a6e3a53 { height:25px } } 
	  @media (max-width: 991px) { .spacer-5bffe6a6e3a53 { height:25px } }  
	  @media (max-width: 767px) { .spacer-5bffe6a6e3a53 { height:25px } }  
	  @media (max-width: 479px) { .spacer-5bffe6a6e3a53 { height:25px } }  
	  .spacer-5bffe6a6f0f00 { height:10px }  
	  @media (max-width: 767px) { .spacer-5bffe6a6f0f00 { height:25px } }  
	  @media (max-width: 479px) { .spacer-5bffe6a6f0f00 { height:25px } }
    </style>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</head>
<body class="page-template-default page page-id-1111 l-body Impreza_5.2.1 header_hor header_inpos_top btn_hov_none state_default wpb-js-composer js-comp-ver-5.4.7 vc_responsive">

<?php include "include/main-header.php";?>

<div class="l-canvas sidebar_none type_wide">
    <?php include "include/main-menu.php";?>
	<div class="l-main">
		<div class="l-main-h i-cf">
			<main class="l-content" itemprop="mainContentOfPage">
				<section class="l-section wpb_row height_auto with_img cr-sub-bg">
					<div class="l-section-img loaded" style="background-image: url(img/banner_pnim-1.png);background-repeat: no-repeat;"></div>
					<div class="l-section-h i-cf">
						<div class="g-cols vc_row type_default valign_top">
							<div class="vc_col-sm-12 wpb_column vc_column_container">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="g-cols wpb_row type_default valign_top vc_inner ">
											<div class="vc_col-sm-4 wpb_column vc_column_container banner-col1">
												<div class="vc_column-inner  vc_custom_1530345248828">
													<div class="wpb_wrapper">
														<div class="ult-spacer spacer-5d"></div>
													</div>
												</div>
											</div>
											<div class="vc_col-sm-4 wpb_column vc_column_container banner-col2">
												<div class="vc_column-inner  vc_custom_1530345263493">
													<div class="wpb_wrapper">
														<div class="ult-spacer spacer-5b"></div>
														<div class="w-grid type_carousel layout_testimonial_3 cr-testi" id="us_grid_1">
															<div class="w-grid-list owl-carousel owl-loaded owl-drag" data-breakpoint_1_width="1200" data-breakpoint_1_cols="3" data-breakpoint_1_autoplay="1" data-breakpoint_2_width="900" data-breakpoint_2_cols="2" data-breakpoint_2_autoplay="1" data-breakpoint_3_width="600" data-breakpoint_3_cols="1" data-breakpoint_3_autoplay="1" data-items="1" data-nav="0" data-dots="0" data-center="0" data-autoplay="1" data-timeout="3000" data-autoheight="1" data-slideby="1">
																<div class="owl-stage-outer owl-height" style="height: 154px;">
																	<div class="owl-stage" style="transform: translate3d(-2664px, 0px, 0px); transition: all 0.25s ease 0s; width: 6660px;">
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1600 us_testimonial type-us_testimonial status-publish hentry" data-id="1600">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I used the device on the inner side of the knee and there was a big difference within a month or two. All the pain is gone”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Noga Einfeld</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1599 us_testimonial type-us_testimonial status-publish hentry" data-id="1599">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“The pain in my legs are gone and only on very rare occasion they return. Then I use the device and once again the pain disappears”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Sara and David Rosenzweig</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1591 us_testimonial type-us_testimonial status-publish hentry" data-id="1591">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I would like to note the remarkable results from treating with the B-Cure Laser, dealing with pain syndromes from different sources:</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Dr. Eduard Dvorkin</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1590 us_testimonial type-us_testimonial status-publish hentry" data-id="1590">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“During my work as an aesthetic surgeon I used the B-Cure Laser following plastic and aesthetic surgeries on all body parts in cases”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Dr Efron Rosen</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1585 us_testimonial type-us_testimonial status-publish hentry" data-id="1585">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I heated wax in a microwave and it accidentally spilled on my inner thigh. With B-Cure, the wound had healed much better than anticipated”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Sivan Shan</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1610 us_testimonial type-us_testimonial status-publish hentry" data-id="1610">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“Before I started the treatment, I refrained from walking. Today I walk a short walk every day and I went back to walking to the synagogue”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">David Mollenkduff</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1608 us_testimonial type-us_testimonial status-publish hentry" data-id="1608">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I use B-Cure Laser on a regular basis when treating acute and chronic injuries in order to expedite the healing process of injured athletes”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Claudio Merkiere, chiropractor</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1607 us_testimonial type-us_testimonial status-publish hentry" data-id="1607">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“Although the pain hasn’t disappeared it is much improved and sometimes I go for several days pain-free”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Harry Shuman</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item active" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1606 us_testimonial type-us_testimonial status-publish hentry" data-id="1606">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“In 5 cases we have treated pains in the joints of the hand. The improvement was nearly maximal.”
																								<br>&nbsp;</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Ahuva Dermon, Chief Nurse</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1601 us_testimonial type-us_testimonial status-publish hentry" data-id="1601">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I bought this device a year ago and used it twice for the severe pains I had in my upper back and shoulders. the pain completely disappeared”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Bracha Pasternak</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1600 us_testimonial type-us_testimonial status-publish hentry" data-id="1600">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I used the device on the inner side of the knee and there was a big difference within a month or two. All the pain is gone”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Noga Einfeld</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1599 us_testimonial type-us_testimonial status-publish hentry" data-id="1599">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“The pain in my legs are gone and only on very rare occasion they return. Then I use the device and once again the pain disappears”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Sara and David Rosenzweig</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1591 us_testimonial type-us_testimonial status-publish hentry" data-id="1591">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I would like to note the remarkable results from treating with the B-Cure Laser, dealing with pain syndromes from different sources:</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Dr. Eduard Dvorkin</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1590 us_testimonial type-us_testimonial status-publish hentry" data-id="1590">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“During my work as an aesthetic surgeon I used the B-Cure Laser following plastic and aesthetic surgeries on all body parts in cases”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Dr Efron Rosen</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1585 us_testimonial type-us_testimonial status-publish hentry" data-id="1585">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I heated wax in a microwave and it accidentally spilled on my inner thigh. With B-Cure, the wound had healed much better than anticipated”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Sivan Shan</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1610 us_testimonial type-us_testimonial status-publish hentry" data-id="1610">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“Before I started the treatment, I refrained from walking. Today I walk a short walk every day and I went back to walking to the synagogue”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">David Mollenkduff</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1608 us_testimonial type-us_testimonial status-publish hentry" data-id="1608">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I use B-Cure Laser on a regular basis when treating acute and chronic injuries in order to expedite the healing process of injured athletes”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Claudio Merkiere, chiropractor</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1607 us_testimonial type-us_testimonial status-publish hentry" data-id="1607">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“Although the pain hasn’t disappeared it is much improved and sometimes I go for several days pain-free”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Harry Shuman</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1606 us_testimonial type-us_testimonial status-publish hentry" data-id="1606">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“In 5 cases we have treated pains in the joints of the hand. The improvement was nearly maximal.”
																								<br>&nbsp;</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Ahuva Dermon, Chief Nurse</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																		<div class="owl-item cloned" style="width: 333px;">
																			<article class="w-grid-item ratio_1x1 post-1601 us_testimonial type-us_testimonial status-publish hentry" data-id="1601">
																				<div class="w-grid-item-h">
																					<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
																						<div class="w-grid-item-elm usg_post_custom_field_3 color_link_inherit  post_custom_field type_text"><i class="fas fa-quote-left"></i>
																						</div>
																						<div class="w-grid-item-elm usg_post_content_1  post_content">
																							<p>“I bought this device a year ago and used it twice for the severe pains I had in my upper back and shoulders. the pain completely disappeared”</p>
																						</div>
																						<div class="w-hwrapper usg_hwrapper_1 align_left valign_middle ">
																							<div class="w-vwrapper usg_vwrapper_1 align_left valign_top ">
																								<div class="w-grid-item-elm usg_post_custom_field_1  post_custom_field type_text">Bracha Pasternak</div>
																								<div class="w-grid-item-elm usg_post_custom_field_2 color_link_inherit with_text_color  post_custom_field type_text"></div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>
																		</div>
																	</div>
																</div>
																<div class="owl-nav disabled">
																	<button role="presentation" class="owl-prev"><span aria-label="prev">‹</span>
																	</button>
																	<button role="presentation" class="owl-next"><span aria-label="next">›</span>
																	</button>
																</div>
																<div class="owl-dots disabled"></div>
															</div>
															<div class="g-preloader type_1">
																<div></div>
															</div>
														</div>
														<div class="ult-spacer spacer-5b" data-id="5bffe5149c798" data-height="96" data-height-mobile="15" data-height-tab="" data-height-tab-portrait="" data-height-mobile-landscape="15" style="clear:both;display:block;"></div>
													</div>
												</div>
											</div>
											<div class="vc_col-sm-4 wpb_column vc_column_container home-form">
												<div class="vc_column-inner  vc_custom_1529605716776">
													<div class="wpb_wrapper">
														<div class="w-image align_center">
															<div class="w-image-h">
																<a href="index.php" title="" target="" rel="">
																	<img width="214" height="79" src="img/logo.png" class="attachment-full size-full" alt="">
																</a>
															</div>
														</div>
														<h6 style="font-size: 13px;text-align: left" class="vc_custom_heading vc_custom_1529605666725"><b>For further information please leave your contact details here</b></h6>
														<div class="wpb_text_column ">
															<?php include ('include/home-form.php'); ?>
														</div>
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
				<section class="l-section wpb_row height_auto with_overlay about-color-heading">
					<div class="l-section-overlay" style="background-color: #eceeef"></div>
					<div class="l-section-h i-cf">
						<div class="g-cols vc_row type_default valign_top">
							<div class="vc_col-sm-12 wpb_column vc_column_container">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="g-cols wpb_row type_default valign_top vc_inner ">
											<div class="vc_col-sm-6 wpb_column vc_column_container about-orange">
												<div class="vc_column-inner  vc_custom_1530349867517">
													<div class="wpb_wrapper">
														<h3 style="color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1535531659902"><?=$page_title?></h3>
													</div>
												</div>
											</div>
											<div class="vc_col-sm-2 wpb_column vc_column_container about-red">
												<div class="vc_column-inner  vc_custom_1530349888297">
													<div class="wpb_wrapper">
														<h3 style="color: #ef4135;text-align: left" class="vc_custom_heading vc_custom_1529387459319">njkl</h3>
													</div>
												</div>
											</div>
											<div class="vc_col-sm-2 wpb_column vc_column_container about-green">
												<div class="vc_column-inner  vc_custom_1530349906225">
													<div class="wpb_wrapper">
														<h3 style="color: #00ac7b;text-align: left" class="vc_custom_heading vc_custom_1529387382804">njkl</h3>
													</div>
												</div>
											</div>
											<div class="vc_col-sm-2 wpb_column vc_column_container about-black">
												<div class="vc_column-inner  vc_custom_1530349923974">
													<div class="wpb_wrapper">
														<h3 style="color: #475564;text-align: left" class="vc_custom_heading vc_custom_1529387486388">njkl</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="g-cols wpb_row type_default valign_top vc_inner ">
											<div class="vc_col-sm-12 wpb_column vc_column_container">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_text_column ">
															<div class="wpb_wrapper">
																<div class="breadcrumb-container theme1" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
																	<ul itemtype="http://schema.org/BreadcrumbList" itemscope="">
																		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Home" href="/">Home</a>
																		</li>
																		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                                                            <span class="separator">»</span>
                                                                            <a itemprop="item" title="About Us" href="#"><?=$page_title?></a><span class="separator">»</span>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
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
				<section class="l-section wpb_row height_small with_overlay tab-row">
					<div class="l-section-overlay" style="background-color: #f6f6f6"></div>
					<div class="l-section-h i-cf">
						<div class="g-cols vc_row type_default valign_top">
                        <div class="vc_col-sm-12 wpb_column vc_column_container has-fill">
                            <div class="vc_column-inner  vc_custom_1529672320876">
                                <div class="wpb_wrapper">
                                    <div class="g-cols wpb_row type_default valign_top vc_inner">
                                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column ">
                                                        <div class="wpb_wrapper">
                                                            <p style="border: 1px solid #be7; padding: 10px;">
                                                                <?php if ($success) { ?>
                                                                <img class="alignnone size-full wp-image-2301" style="vertical-align: middle;" src="img/message-24-ok.png" alt="" width="24" height="24"/>
                                                                <?php } ?>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?php echo $system_message; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p><br></p>
                                                    <?php if ($success) { ?>
                                                    <div class="wpb_text_column ">
                                                        <div class="wpb_wrapper">
                                                            <h3 style="text-align: center;">Thank You For Your Message!</h3>
                                                            <h5 style="text-align: center;">We will contact you as soon as possible.</h5>
                                                            <br><br><br>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-cols wpb_row type_default valign_top vc_inner c-info" style="background:#ececec;">
                                        <div class="vc_col-sm-4 wpb_column vc_column_container has-fill">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="aio-icon-component  vc_custom_1530596059518  c-info-1 style_1">
                                                        <div id="Info-box-wrap-8923" class="aio-icon-box left-icon" style="">
                                                            <div class="aio-icon-left">
                                                                <div class="ult-just-icon-wrapper  ">
                                                                    <div class="align-icon" style="text-align:center;">
                                                                        <div class="aio-icon circle " style="color:#ffffff;background:#475564;font-size:22px;display:inline-block;">
                                                                            <i class="Defaults-home"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aio-ibd-block">
                                                                <div class="aio-icon-header">
                                                                    <h3 class="aio-icon-title ult-responsive" data-ultimate-target="#Info-box-wrap-8923 .aio-icon-title" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}" style="font-weight:bold;">Address</h3>
                                                                </div>
                                                                <div class="aio-icon-description ult-responsive" data-ultimate-target="#Info-box-wrap-8923 .aio-icon-description" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}" style="">P.O. Box 15141, 5 Nahum Heth
                                                                    <br>St. Haifa, Israel 3508504</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container has-fill">
                                            <div class="vc_column-inner  vc_custom_1529392051097">
                                                <div class="wpb_wrapper">
                                                    <div class="aio-icon-component  vc_custom_1529733923586   style_1">
                                                        <div id="Info-box-wrap-3773" class="aio-icon-box left-icon" style="">
                                                            <div class="aio-icon-left">
                                                                <div class="ult-just-icon-wrapper  ">
                                                                    <div class="align-icon" style="text-align:center;">
                                                                        <div class="aio-icon circle " style="color:#ffffff;background:#01ad7d;font-size:22px;display:inline-block;">
                                                                            <i class="Defaults-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aio-ibd-block">
                                                                <div class="aio-icon-header">
                                                                    <h3 class="aio-icon-title ult-responsive" data-ultimate-target="#Info-box-wrap-3773 .aio-icon-title" data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:bold;">Phone</h3>
                                                                </div>
                                                                <div class="aio-icon-description ult-responsive" data-ultimate-target="#Info-box-wrap-3773 .aio-icon-description" data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="">+972-73-7293001
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_col-sm-4 wpb_column vc_column_container has-fill">
                                            <div class="vc_column-inner  vc_custom_1529392061013">
                                                <div class="wpb_wrapper">
                                                    <div class="aio-icon-component  vc_custom_1529733930922   style_1">
                                                        <div id="Info-box-wrap-7675" class="aio-icon-box left-icon" style="">
                                                            <div class="aio-icon-left">
                                                                <div class="ult-just-icon-wrapper  ">
                                                                    <div class="align-icon" style="text-align:center;">
                                                                        <div class="aio-icon circle " style="color:#ffffff;background:#f79529;font-size:22px;display:inline-block;">
                                                                            <i class="Defaults-home"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aio-ibd-block">
                                                                <div class="aio-icon-header">
                                                                    <h3 class="aio-icon-title ult-responsive" data-ultimate-target="#Info-box-wrap-7675 .aio-icon-title" data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:bold;">Email</h3>
                                                                </div>
                                                                <div class="aio-icon-description ult-responsive" data-ultimate-target="#Info-box-wrap-7675 .aio-icon-description" data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}" style=""><a href="mailto:info@gd-energies.com">info@gd-energies.com</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
			</main>
		</div>
	</div>
</div>
<?php include "include/footer.php";?>
</body>

</html>