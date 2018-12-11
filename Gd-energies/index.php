<?php include "include/header.php"; ?>
	<link rel="stylesheet" href="css/breadcrumb_style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/contact-form.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/rs-plugin-settings.css" type="text/css" media="all">
	<style type="text/css">
		.hesperiden.tparrows {
			cursor:pointer;
			background:rgba(0,0,0,0.5);
			width:40px;
			height:40px;
			position:absolute;
			display:block;
			z-index:100;
		    border-radius: 50%;
		}
		.hesperiden.tparrows:hover {
			background:rgba(0, 0, 0, 1);
		}
		.hesperiden.tparrows:before {
			font-family: "revicons";
			font-size:20px;
			color:rgb(255, 255, 255);
			display:block;
			line-height: 40px;
			text-align: center;
		}
		.hesperiden.tparrows.tp-leftarrow:before {
			content: "\e82c";
		    margin-left:-3px;
		}
		.hesperiden.tparrows.tp-rightarrow:before {
			content: "\e82d";
		    margin-right:-3px;
		}
	</style>
	<link rel="stylesheet" id="us-fonts-css" href="css/fonts.css" type="text/css" media="all">
	<link rel="stylesheet" id="gforms_reset_css-css" href="css/formreset.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="gforms_formsmain_css-css" href="css/formsmain.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="gforms_ready_class_css-css" href="css/readyclass.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="gforms_browsers_css-css" href="css/browsers.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-style-css" href="css/style.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-gravityforms-css" href="css/gravityforms.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-responsive-css" href="css/responsive.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="theme-style-css" href="css/theme-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="bsf-Defaults-css" href="css/Defaults.css" type="text/css" media="all">
	<link rel="stylesheet" id="ultimate-style-css" href="css/ultimate-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="ult-btn-css" href="css/advanced-buttons.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="ult_content_box_css-css" href="css/content-box.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="ultimate-animate-css" href="css/animate.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="ultimate-modal-css" href="css/modal.min.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> 	<script type="text/javascript" src="js/custom.js"></script>
	<!--
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/placeholders.jquery.min.js"></script>
	<script type="text/javascript" src="js/ultimate-params.min.js"></script>
	<script type="text/javascript" src="js/custom.min.js"></script>
	<script type="text/javascript" src="js/modernizr-custom.min.js"></script>
	<script type="text/javascript" src="js/modal-all.min.js"></script> -->
	<style>
		form.example button {
		   background: #f78f1e none repeat scroll 0 0;
		    border: 1px solid #f78f1e;
		    color: white;
		    cursor: pointer;
		    float: left;
		    font-size: 12px;
		    padding: 9px;
		    width: 11%;
		}
		
		form.example button:hover {
		    background: #475564;
		}
		
		form.example::after {
		    content: "";
		    clear: both;
		    display: table;
		}
		.language
		{
			padding:6px;
			margin:0 auto !important;
			background:#ECEEEF;
			border:1px solid #ECEEEF;
			width:120px;
		}
		.s-icn{
		    color: #ccc;
		    font-size: 29px !important;
		    margin-left: 20px;
		    margin-top: 4px;
		}
		.dropbtn {
		    background-color: #ECEEEF;
		    color: #787878;
		    padding: 4px 20px;
		    font-size: 14px;
		    border: none;
		    cursor: pointer;
		}
		.dropdown {
		    position: relative;
		    display: inline-block;
		}
		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f1f1f1;
		    min-width: 190px;
		    overflow: auto;
		    z-index: 9999;
		}
		.dropdown-content a {
		    color: black;
		    padding: 5px 18px;
		    text-decoration: none;
		    display: block;
		}
		.dropdown a:hover {
			background-color: #fff;
		}
		.show {
			display: block;
		}
		.bcure-mainheader-full{
		    background-color:#fff;
		min-height: 54px;
		}
		.bcure-mainheader{
		    width:950px;
		    margin:auto;
		    background-color:#fff;
		    padding:10px;
		}
		.bcure-header-logo{
			width: 8%;
		float: left;
		margin-right: 20px;
		}
		.bcure-header-logo-mobile {
		    float: left;
		    margin-right: 8px !important;
		    padding: 11px 5px 5px 10px;
		    width: 26%;
		}
		.header-language{
			width:23%;
			float:left;
		}
		.header-search{
			width:21%;
			float:left;
		}
		.header-social{
			width:10%;
			float:left;
		}
		.header-social .fab.fa-facebook-f{
		    color: #c2c2c2;
		    font-size: 26px;
		    margin-right: 12px;
		    vertical-align: middle;
		}
		.header-social .fab.fa-linkedin-in{
		    color: #c2c2c2;
		    font-size: 26px;
		    vertical-align: middle;
		}
		/** Ultimate: Media Responsive **/ #ubtn-4015 {font-size:12px;}#ubtn-3289{font-size:12px;}#ubtn-5124{font-size:12px;}#ubtn-5179{font-size:12px;}#ubtn-4668{font-size:14px;}#ubtn-5580{font-size:14px;}#ubtn-1184{font-size:14px;} @media (max-width: 1199px) { .spacer-5bfdde087ca30 { height:10px } }  @media (max-width: 991px) { .spacer-5bfdde087ca30 { height:36px } }  @media (max-width: 767px) { .spacer-5bfdde087ca30 { height:px } }  @media (max-width: 479px) { .spacer-5bfdde087ca30 { height:px } }  @media (max-width: 1199px) { .spacer-5bfdde087db22 { height:10px } }  @media (max-width: 991px) { .spacer-5bfdde087db22 { height:36px } }  @media (max-width: 767px) { .spacer-5bfdde087db22 { height:px } }  @media (max-width: 479px) { .spacer-5bfdde087db22 { height:px } }  @media (max-width: 1199px) { .spacer-5bfdde087ec2e { height:10px } }  @media (max-width: 991px) { .spacer-5bfdde087ec2e { height:36px } }  @media (max-width: 767px) { .spacer-5bfdde087ec2e { height:px } }  @media (max-width: 479px) { .spacer-5bfdde087ec2e { height:px } }  .spacer-5bfdde087f810 { height:35px }  @media (max-width: 1199px) { .spacer-5bfdde087f810 { height:45px } }  @media (max-width: 991px) { .spacer-5bfdde087f810 { height:62px } }  @media (max-width: 767px) { .spacer-5bfdde087f810 { height:px } }  @media (max-width: 479px) { .spacer-5bfdde087f810 { height:px } }  .spacer-5bfdde0880939 { height:20px }  @media (max-width: 1199px) { .spacer-5bfdde0880939 { height:20px } }  @media (max-width: 991px) { .spacer-5bfdde0880939 { height:px } }  @media (max-width: 767px) { .spacer-5bfdde0880939 { height:px } }  @media (max-width: 479px) { .spacer-5bfdde0880939 { height:20px } }  .spacer-5bfdde088bfab { height:20px }  @media (max-width: 1199px) { .spacer-5bfdde088bfab { height:20px } }  @media (max-width: 991px) { .spacer-5bfdde088bfab { height:px } }  @media (max-width: 767px) { .spacer-5bfdde088bfab { height:px } }  @media (max-width: 479px) { .spacer-5bfdde088bfab { height:20px } }  .spacer-5bfdde088cc0d { height:63px }  @media (max-width: 1199px) { .spacer-5bfdde088cc0d { height:63px } }  @media (max-width: 991px) { .spacer-5bfdde088cc0d { height:px } }  @media (max-width: 767px) { .spacer-5bfdde088cc0d { height:px } }  @media (max-width: 479px) { .spacer-5bfdde088cc0d { height:63px } }
	</style>
</head>

<body data-rsssl="1" class="home page-template-default page page-id-5 l-body Impreza_5.2.1 header_hor header_inpos_top btn_hov_none state_default wpb-js-composer js-comp-ver-5.4.7 vc_responsive" itemscope="" itemtype="https://schema.org/WebPage">

	<?php include "include/main-header.php";?>

	<style type="text/css">
		.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
	</style>
	<script type="text/javascript">
		function setREVStartSize(e){									
			try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
				if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
			}catch(d){console.log("Failure at Presize of Slider:"+d)}						
		};
	</script>
	<style type="text/css" data-type="vc_custom-css">
		.ult-modal-input-wrapper {
		    display: none;
		}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1532499731044{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1536827833513{padding-right: 15px !important;padding-bottom: 10px !important;padding-left: 15px !important;}.vc_custom_1529605666725{margin-bottom: 0px !important;}.vc_custom_1532496230282{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1529583316293{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1532501288513{margin-top: -70px !important;padding-top: 0px !important;padding-right: 25px !important;padding-bottom: 0px !important;padding-left: 25px !important;}.vc_custom_1530614523648{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;background-image: url(img/logo.png) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1530613989829{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;background-image: url(img/sport_0.png) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1530614929158{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;background-image: url(img/logo.png) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1530599273304{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}.vc_custom_1529585080570{margin-bottom: 0px !important;}.vc_custom_1530611664450{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1529594035923{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1529758464029{margin-right: 10px !important;margin-bottom: 10px !important;}.vc_custom_1529594779716{margin-bottom: 0px !important;}.vc_custom_1530612026347{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1530599262851{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1529758490931{margin-right: 10px !important;margin-bottom: 10px !important;}.vc_custom_1529597272843{margin-bottom: 0px !important;}.vc_custom_1530612032533{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1529597244659{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1529758518446{margin-right: 10px !important;margin-bottom: 10px !important;}.vc_custom_1529600811692{padding-top: 12.5px !important;padding-bottom: 12.5px !important;background-color: #eceeef !important;}.vc_custom_1529597815041{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1529758586957{margin-right: 10px !important;margin-bottom: 10px !important;}.vc_custom_1536148972378{border-right-width: 1px !important;border-left-width: 1px !important;padding-top: 0px !important;border-left-color: #e0e0e0 !important;border-left-style: solid !important;border-right-color: #e0e0e0 !important;border-right-style: solid !important;}.vc_custom_1529607170168{margin-bottom: 0px !important;}.vc_custom_1529607210896{margin-bottom: 0px !important;}.vc_custom_1529607221356{margin-bottom: 0px !important;}.vc_custom_1534921074676{margin-bottom: 0px !important;padding-bottom: 10px !important;}
	</style>
	<noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible { opacity: 1; }
		</style>
	</noscript>
	<style id="us-theme-options-css">
		@font-face{font-family:'Font Awesome 5 Brands';font-style:normal;font-weight:normal;src:url("fonts/fa-brands-400.woff2") format("woff2"),url("fonts/fa-brands-400.woff") format("woff")}.fab{font-family:'Font Awesome 5 Brands'}@font-face{font-family:'fontawesome';font-style:normal;font-weight:300;src:url("fonts/fa-light-300.woff2") format("woff2"),url("fonts/fa-light-300.woff") format("woff")}.fal{font-family:'fontawesome';font-weight:300}@font-face{font-family:'fontawesome';font-style:normal;font-weight:400;src:url("fonts/fa-regular-400.woff2") format("woff2"),url("fonts/fa-regular-400.woff") format("woff")}.far{font-family:'fontawesome';font-weight:400}@font-face{font-family:'fontawesome';font-style:normal;font-weight:900;src:url("fonts/fa-solid-900.woff2") format("woff2"),url("fonts/fa-solid-900.woff") format("woff")}.fa,.fas{font-family:'fontawesome';font-weight:900}.style_phone6-1>div{background-image:url(img/phone-6-black-real.png)}.style_phone6-2>div{background-image:url(img/phone-6-white-real.png)}.style_phone6-3>div{background-image:url(img/phone-6-black-flat.png)}.style_phone6-4>div{background-image:url(img/phone-6-white-flat.png)}html,.w-nav .widget{font-family:"Open Sans", sans-serif;font-weight:400;font-size:16px;line-height:28px}h1, h2, h3, h4, h5, h6,.w-counter-number,.w-pricing-item-price,.w-tabs-item-title,.stats-block .stats-desc .stats-number{font-family:"Open Sans", sans-serif;font-weight:400}h1{font-size:48px;line-height:1.4;font-weight:400;letter-spacing:0em}h2{font-size:40px;line-height:1.4;font-weight:400;letter-spacing:0em}h3{font-size:26px;line-height:1.4;font-weight:400;letter-spacing:0em}h4,.widgettitle,.comment-reply-title{font-size:22px;line-height:1.4;font-weight:400;letter-spacing:0em}h5{font-size:20px;line-height:1.4;font-weight:400;letter-spacing:0em}h6{font-size:18px;line-height:1.4;font-weight:400;letter-spacing:0em}@media (max-width:767px){html{font-size:16px;line-height:26px}h1{font-size:40px}h1.vc_custom_heading{font-size:40px !important}h2{font-size:30px}h2.vc_custom_heading{font-size:30px !important}h3{font-size:24px}h3.vc_custom_heading{font-size:24px !important}h4,.widgettitle,.comment-reply-title{font-size:20px}h4.vc_custom_heading{font-size:20px !important}h5{font-size:18px}h5.vc_custom_heading{font-size:18px !important}h6{font-size:16px}h6.vc_custom_heading{font-size:16px !important}}body,.header_hor .l-header.pos_fixed{min-width:1240px}.l-canvas.type_boxed,.l-canvas.type_boxed .l-subheader,.l-canvas.type_boxed .l-section.type_sticky,.l-canvas.type_boxed~.l-footer{max-width:1240px}.header_hor .l-subheader-h,.l-titlebar-h,.l-main-h,.l-section-h,.w-tabs-section-content-h,.w-blogpost-body{max-width:950px}@media (max-width:1100px){.l-section:not(.width_full) .owl-nav{display:none}}@media (max-width:1150px){.l-section:not(.width_full) .w-grid .owl-nav{display:none}}.l-sidebar{width:25%}.l-content{width:70%}@media (max-width:767px){.g-cols>div:not([class*=" vc_col-"]){width:100%;margin:0 0 1rem}.g-cols.type_boxes>div,.g-cols>div:last-child,.g-cols>div.has-fill{margin-bottom:0}.vc_wp_custommenu.layout_hor,.align_center_xs,.align_center_xs .w-socials{text-align:center}}.w-btn,.button,.l-body .cl-btn,.l-body .ubtn,.l-body .ultb3-btn,.l-body .btn-modal,.l-body .flip-box-wrap .flip_link a,.rev_slider a.w-btn, .tribe-events-button,button[type="submit"],input[type="submit"]{font-family:"Open Sans", sans-serif;font-weight:400;font-size:17px;font-weight:700;line-height:2.8;padding:0 1.8em;border-radius:0em;letter-spacing:0em;box-shadow:0 0em 0em rgba(0,0,0,0.18)}.w-btn.icon_atleft i{left:1.8em}.w-btn.icon_atright i{right:1.8em}.no-touch .w-btn:hover,.no-touch .button:hover,.no-touch .cl-btn:hover,.no-touch .ubtn:hover,.no-touch .ultb3-btn:hover,.no-touch .btn-modal:hover,.no-touch .flip-box-wrap .flip_link a:hover,.no-touch .rev_slider a.w-btn, .no-touch .tribe-events-button:hover,.no-touch button[type="submit"]:hover,.no-touch input[type="submit"]:hover{box-shadow:0 0.5em 1em rgba(0,0,0,0.2)}.w-header-show,.w-toplink{background-color:rgba(0,0,0,0.3)}a,button,input[type="submit"],.ui-slider-handle{outline:none !important}body{background-color:#f2f1f0;-webkit-tap-highlight-color:rgba(249,160,44,0.2)}.l-subheader.at_top,.l-subheader.at_top .w-dropdown-list,.l-subheader.at_top .type_mobile .w-nav-list.level_1{background-color:#475564}.l-subheader.at_top,.l-subheader.at_top .w-dropdown.active,.l-subheader.at_top .type_mobile .w-nav-list.level_1{color:#666666}.no-touch .l-subheader.at_top a:hover,.no-touch .l-header.bg_transparent .l-subheader.at_top .w-dropdown.active a:hover{color:#f9a02c}.header_ver .l-header,.header_hor .l-subheader.at_middle,.l-subheader.at_middle .w-dropdown-list,.l-subheader.at_middle .type_mobile .w-nav-list.level_1{background-color:#ffffff}.l-subheader.at_middle,.l-subheader.at_middle .w-dropdown.active,.l-subheader.at_middle .type_mobile .w-nav-list.level_1{color:#475564}.no-touch .l-subheader.at_middle a:hover,.no-touch .l-header.bg_transparent .l-subheader.at_middle .w-dropdown.active a:hover{color:#f9a02c}.l-subheader.at_bottom,.l-subheader.at_bottom .w-dropdown-list,.l-subheader.at_bottom .type_mobile .w-nav-list.level_1{background-color:#475564}.l-subheader.at_bottom,.l-subheader.at_bottom .w-dropdown.active,.l-subheader.at_bottom .type_mobile .w-nav-list.level_1{color:#ffffff}.no-touch .l-subheader.at_bottom a:hover,.no-touch .l-header.bg_transparent .l-subheader.at_bottom .w-dropdown.active a:hover{color:#f9a02c}.l-header.bg_transparent:not(.sticky) .l-subheader{color:#ffffff}.no-touch .l-header.bg_transparent:not(.sticky) .w-text a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .w-html a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .w-dropdown a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .type_desktop .menu-item.level_1:hover>.w-nav-anchor{color:#f9a02c}.l-header.bg_transparent:not(.sticky) .w-nav-title:after{background-color:#f9a02c}.w-search-form{background-color:#475564;color:#333333}.menu-item.level_1>.w-nav-anchor:focus,.no-touch .menu-item.level_1.opened>.w-nav-anchor,.no-touch .menu-item.level_1:hover>.w-nav-anchor{background-color:;color:#f9a02c}.w-nav-title:after{background-color:#f9a02c}.menu-item.level_1.current-menu-item>.w-nav-anchor,.menu-item.level_1.current-menu-parent>.w-nav-anchor,.menu-item.level_1.current-menu-ancestor>.w-nav-anchor{background-color:;color:#f9a02c}.l-header.bg_transparent:not(.sticky) .type_desktop .menu-item.level_1.current-menu-item>.w-nav-anchor,.l-header.bg_transparent:not(.sticky) .type_desktop .menu-item.level_1.current-menu-ancestor>.w-nav-anchor{color:#f9a02c}.w-nav-list:not(.level_1){background-color:#eeeeee;color:#333333}.no-touch .menu-item:not(.level_1)>.w-nav-anchor:focus,.no-touch .menu-item:not(.level_1):hover>.w-nav-anchor{background-color:#ffffff;color:#333333}.menu-item:not(.level_1).current-menu-item>.w-nav-anchor,.menu-item:not(.level_1).current-menu-parent>.w-nav-anchor,.menu-item:not(.level_1).current-menu-ancestor>.w-nav-anchor{background-color:#ffffff;color:#00AC7B}.w-cart-quantity,.btn.w-menu-item,.btn.menu-item.level_1>a,.l-footer .vc_wp_custommenu.layout_hor .btn>a{background-color:#ffffff !important;color:#ffffff !important}.no-touch .btn.w-menu-item:hover,.no-touch .btn.menu-item.level_1>a:hover,.no-touch .l-footer .vc_wp_custommenu.layout_hor .btn>a:hover{background-color:#333333 !important;color:#ffffff !important}body.us_iframe,.l-preloader,.l-canvas,.l-footer,.l-popup-box-content,.g-filters.style_1 .g-filters-item.active,.w-tabs.layout_default .w-tabs-item.active,.w-tabs.layout_ver .w-tabs-item.active,.no-touch .w-tabs.layout_default .w-tabs-item.active:hover,.no-touch .w-tabs.layout_ver .w-tabs-item.active:hover,.w-tabs.layout_timeline .w-tabs-item,.w-tabs.layout_timeline .w-tabs-section-header-h,.chosen-search input,.chosen-choices li.search-choice,.wpml-ls-statics-footer,.select2-selection__choice,.select2-search input{background-color:#ffffff}.w-tabs.layout_modern .w-tabs-item:after{border-bottom-color:#ffffff}.w-iconbox.style_circle.color_contrast .w-iconbox-icon,.tribe-events-calendar thead th{color:#ffffff}.w-btn.color_contrast.style_solid,.no-touch .btn_hov_fade .w-btn.color_contrast.style_outlined:hover,.no-touch .btn_hov_slide .w-btn.color_contrast.style_outlined:hover,.no-touch .btn_hov_reverse .w-btn.color_contrast.style_outlined:hover{color:#ffffff !important}input,textarea,select,.l-section.for_blogpost .w-blogpost-preview,.w-actionbox.color_light,.w-form-row.for_checkbox label>i,.g-filters.style_1,.g-filters.style_2 .g-filters-item.active,.w-grid-none,.w-iconbox.style_circle.color_light .w-iconbox-icon,.g-loadmore.type_block .g-loadmore-btn,.w-pricing-item-header,.w-progbar-bar,.w-progbar.style_3 .w-progbar-bar:before,.w-progbar.style_3 .w-progbar-bar-count,.w-socials.style_solid .w-socials-item-link,.w-tabs.layout_default .w-tabs-list,.w-tabs.layout_ver .w-tabs-list,.no-touch .l-main .widget_nav_menu a:hover,.wp-caption-text,.ginput_container_creditcard,.chosen-single,.chosen-drop,.chosen-choices,.smile-icon-timeline-wrap .timeline-wrapper .timeline-block,.smile-icon-timeline-wrap .timeline-feature-item.feat-item,.wpml-ls-legacy-dropdown a,.wpml-ls-legacy-dropdown-click a,.tablepress .row-hover tr:hover td,.select2-selection,.select2-dropdown{background-color:#f6f6f6}.timeline-wrapper .timeline-post-right .ult-timeline-arrow l,.timeline-wrapper .timeline-post-left .ult-timeline-arrow l,.timeline-feature-item.feat-item .ult-timeline-arrow l{border-color:#f6f6f6}hr,td,th,.l-section,.vc_column_container,.vc_column-inner,.w-author,.w-btn.color_light,.w-comments-list,.w-image,.w-pricing-item-h,.w-profile,.w-sharing-item,.w-tabs-list,.w-tabs-section,.w-tabs-section-header:before,.w-tabs.layout_timeline.accordion .w-tabs-section-content,.widget_calendar #calendar_wrap,.l-main .widget_nav_menu .menu,.l-main .widget_nav_menu .menu-item a,.gform_wrapper .gsection,.gform_wrapper .gf_page_steps,.gform_wrapper li.gfield_creditcard_warning,.form_saved_message,.smile-icon-timeline-wrap .timeline-line{border-color:#ebebeb}blockquote:before,.w-separator.color_border,.w-iconbox.color_light .w-iconbox-icon{color:#ebebeb}.w-btn.color_light.style_solid,.w-btn.color_light.style_outlined:before,.no-touch .btn_hov_reverse .w-btn.color_light.style_outlined:hover,.w-iconbox.style_circle.color_light .w-iconbox-icon,.no-touch .g-loadmore.type_block .g-loadmore-btn:hover,.gform_wrapper .gform_page_footer .gform_previous_button,.no-touch .wpml-ls-sub-menu a:hover{background-color:#ebebeb}.w-iconbox.style_outlined.color_light .w-iconbox-icon,.w-person-links-item,.w-socials.style_outlined .w-socials-item-link,.pagination .page-numbers{box-shadow:0 0 0 2px #ebebeb inset}.w-tabs.layout_trendy .w-tabs-list{box-shadow:0 -1px 0 #ebebeb inset}h1, h2, h3, h4, h5, h6,.w-counter.color_heading .w-counter-number{color:#475564}.w-progbar.color_heading .w-progbar-bar-h{background-color:#475564}input,textarea,select,.l-canvas,.l-footer,.l-popup-box-content,.w-form-row-field:before,.w-iconbox.color_light.style_circle .w-iconbox-icon,.w-tabs.layout_timeline .w-tabs-item,.w-tabs.layout_timeline .w-tabs-section-header-h,.bbpress .button,.select2-dropdown{color:#475564}.w-btn.color_contrast.style_outlined,.no-touch .btn_hov_reverse .w-btn.color_contrast.style_solid:hover{color:#475564 !important}.w-btn.color_contrast.style_solid,.w-btn.color_contrast.style_outlined:before,.no-touch .btn_hov_reverse .w-btn.color_contrast.style_outlined:hover,.w-iconbox.style_circle.color_contrast .w-iconbox-icon,.w-progbar.color_text .w-progbar-bar-h,.w-scroller-dot span{background-color:#475564}.w-btn.color_contrast{border-color:#475564}.w-iconbox.style_outlined.color_contrast .w-iconbox-icon{box-shadow:0 0 0 2px #475564 inset}.w-scroller-dot span{box-shadow:0 0 0 2px #475564}a{color:#475564}.no-touch a:hover,.no-touch .tablepress .sorting:hover{color:#000000}.highlight_primary,.g-preloader,.l-main .w-contacts-item:before,.w-counter.color_primary .w-counter-number,.g-filters.style_1 .g-filters-item.active,.g-filters.style_3 .g-filters-item.active,.w-form-row.focused .w-form-row-field:before,.w-iconbox.color_primary .w-iconbox-icon,.w-separator.color_primary,.w-sharing.type_outlined.color_primary .w-sharing-item,.no-touch .w-sharing.type_simple.color_primary .w-sharing-item:hover .w-sharing-icon,.w-tabs.layout_default .w-tabs-item.active,.w-tabs.layout_trendy .w-tabs-item.active,.w-tabs.layout_ver .w-tabs-item.active,.w-tabs-section.active .w-tabs-section-header,.tablepress .sorting_asc,.tablepress .sorting_desc,.no-touch .owl-prev:hover,.no-touch .owl-next:hover{color:#f9a02c}.w-btn.color_primary.style_outlined,.no-touch .btn_hov_reverse .w-btn.color_primary.style_solid:hover{color:#f9a02c !important}.l-section.color_primary,.l-titlebar.color_primary,.no-touch .l-navigation-item:hover .l-navigation-item-arrow,.highlight_primary_bg,.w-actionbox.color_primary,button[type="submit"]:not(.w-btn),input[type="submit"],.w-btn.color_primary.style_solid,.w-btn.color_primary.style_outlined:before,.no-touch .btn_hov_reverse .w-btn.color_primary.style_outlined:hover,.w-form-row.for_checkbox label>input:checked + i,.no-touch .g-filters.style_1 .g-filters-item:hover,.no-touch .g-filters.style_2 .g-filters-item:hover,.w-grid-item-placeholder,.w-grid-item-elm.post_taxonomy.style_badge a,.w-iconbox.style_circle.color_primary .w-iconbox-icon,.no-touch .w-iconbox.style_circle .w-iconbox-icon:before,.no-touch .w-iconbox.style_outlined .w-iconbox-icon:before,.no-touch .w-person-links-item:before,.w-pricing-item.type_featured .w-pricing-item-header,.w-progbar.color_primary .w-progbar-bar-h,.w-sharing.type_solid.color_primary .w-sharing-item,.w-sharing.type_fixed.color_primary .w-sharing-item,.w-sharing.type_outlined.color_primary .w-sharing-item:before,.w-socials-item-link-hover,.w-tabs.layout_modern .w-tabs-list,.w-tabs.layout_trendy .w-tabs-item:after,.w-tabs.layout_timeline .w-tabs-item:before,.w-tabs.layout_timeline .w-tabs-section-header-h:before,.no-touch .w-header-show:hover,.no-touch .w-toplink.active:hover,.no-touch .pagination .page-numbers:before,.pagination .page-numbers.current,.l-main .widget_nav_menu .menu-item.current-menu-item>a,.rsThumb.rsNavSelected,.no-touch .tp-leftarrow.custom:before,.no-touch .tp-rightarrow.custom:before,.smile-icon-timeline-wrap .timeline-separator-text .sep-text,.smile-icon-timeline-wrap .timeline-wrapper .timeline-dot,.smile-icon-timeline-wrap .timeline-feature-item .timeline-dot,.gform_page_footer .gform_next_button,.gf_progressbar_percentage,.chosen-results li.highlighted,.select2-results__option--highlighted,.l-body .cl-btn{background-color:#f9a02c}.w-btn.color_primary,.no-touch .owl-prev:hover,.no-touch .owl-next:hover,.no-touch .w-logos.style_1 .w-logos-item:hover,.w-tabs.layout_default .w-tabs-item.active,.w-tabs.layout_ver .w-tabs-item.active,.owl-dot.active span,.rsBullet.rsNavSelected span,.tp-bullets.custom .tp-bullet{border-color:#f9a02c}.l-main .w-contacts-item:before,.w-iconbox.color_primary.style_outlined .w-iconbox-icon,.w-sharing.type_outlined.color_primary .w-sharing-item,.w-tabs.layout_timeline .w-tabs-item,.w-tabs.layout_timeline .w-tabs-section-header-h{box-shadow:0 0 0 2px #f9a02c inset}input:focus,textarea:focus,select:focus,.select2-container--focus .select2-selection{box-shadow:0 0 0 2px #f9a02c}.no-touch .w-blognav-item:hover .w-blognav-title,.w-counter.color_secondary .w-counter-number,.w-iconbox.color_secondary .w-iconbox-icon,.w-separator.color_secondary,.w-sharing.type_outlined.color_secondary .w-sharing-item,.no-touch .w-sharing.type_simple.color_secondary .w-sharing-item:hover .w-sharing-icon,.highlight_secondary{color:#333333}.w-btn.color_secondary.style_outlined,.no-touch .btn_hov_reverse .w-btn.color_secondary.style_solid:hover{color:#333333 !important}.l-section.color_secondary,.l-titlebar.color_secondary,.no-touch .w-grid-item-elm.post_taxonomy.style_badge a:hover,.no-touch .l-section.preview_trendy .w-blogpost-meta-category a:hover,.no-touch body:not(.btn_hov_none) .button:hover,.no-touch body:not(.btn_hov_none) button[type="submit"]:not(.w-btn):hover,.no-touch body:not(.btn_hov_none) input[type="submit"]:hover,.w-btn.color_secondary.style_solid,.w-btn.color_secondary.style_outlined:before,.no-touch .btn_hov_reverse .w-btn.color_secondary.style_outlined:hover,.w-actionbox.color_secondary,.w-iconbox.style_circle.color_secondary .w-iconbox-icon,.w-progbar.color_secondary .w-progbar-bar-h,.w-sharing.type_solid.color_secondary .w-sharing-item,.w-sharing.type_fixed.color_secondary .w-sharing-item,.w-sharing.type_outlined.color_secondary .w-sharing-item:before,.highlight_secondary_bg{background-color:#333333}.w-btn.color_secondary{border-color:#333333}.w-iconbox.color_secondary.style_outlined .w-iconbox-icon,.w-sharing.type_outlined.color_secondary .w-sharing-item{box-shadow:0 0 0 2px #333333 inset}.l-main .w-author-url,.l-main .w-blogpost-meta>*,.l-main .w-profile-link.for_logout,.l-main .widget_tag_cloud,.highlight_faded{color:#999999}.l-section.color_alternate,.l-titlebar.color_alternate,.color_alternate .g-filters.style_1 .g-filters-item.active,.color_alternate .w-tabs.layout_default .w-tabs-item.active,.no-touch .color_alternate .w-tabs.layout_default .w-tabs-item.active:hover,.color_alternate .w-tabs.layout_ver .w-tabs-item.active,.no-touch .color_alternate .w-tabs.layout_ver .w-tabs-item.active:hover,.color_alternate .w-tabs.layout_timeline .w-tabs-item,.color_alternate .w-tabs.layout_timeline .w-tabs-section-header-h{background-color:#f6f6f6}.color_alternate .w-iconbox.style_circle.color_contrast .w-iconbox-icon{color:#f6f6f6}.color_alternate .w-btn.color_contrast.style_solid,.no-touch .btn_hov_fade .color_alternate .w-btn.color_contrast.style_outlined:hover,.no-touch .btn_hov_slide .color_alternate .w-btn.color_contrast.style_outlined:hover,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_contrast.style_outlined:hover{color:#f6f6f6 !important}.color_alternate .w-tabs.layout_modern .w-tabs-item:after{border-bottom-color:#f6f6f6}.color_alternate input,.color_alternate textarea,.color_alternate select,.color_alternate .g-filters.style_1,.color_alternate .g-filters.style_2 .g-filters-item.active,.color_alternate .w-grid-none,.color_alternate .w-iconbox.style_circle.color_light .w-iconbox-icon,.color_alternate .g-loadmore.type_block .g-loadmore-btn,.color_alternate .w-pricing-item-header,.color_alternate .w-progbar-bar,.color_alternate .w-socials.style_solid .w-socials-item-link,.color_alternate .w-tabs.layout_default .w-tabs-list,.color_alternate .wp-caption-text,.color_alternate .ginput_container_creditcard{background-color:#ffffff}.l-section.color_alternate,.l-section.color_alternate *,.l-section.color_alternate .w-btn.color_light{border-color:#e5e5e5}.color_alternate .w-separator.color_border,.color_alternate .w-iconbox.color_light .w-iconbox-icon{color:#e5e5e5}.color_alternate .w-btn.color_light.style_solid,.color_alternate .w-btn.color_light.style_outlined:before,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_light.style_outlined:hover,.color_alternate .w-iconbox.style_circle.color_light .w-iconbox-icon,.no-touch .color_alternate .g-loadmore.type_block .g-loadmore-btn:hover{background-color:#e5e5e5}.color_alternate .w-iconbox.style_outlined.color_light .w-iconbox-icon,.color_alternate .w-person-links-item,.color_alternate .w-socials.style_outlined .w-socials-item-link,.color_alternate .pagination .page-numbers{box-shadow:0 0 0 2px #e5e5e5 inset}.color_alternate .w-tabs.layout_trendy .w-tabs-list{box-shadow:0 -1px 0 #e5e5e5 inset}.l-titlebar.color_alternate h1,.l-section.color_alternate h1,.l-section.color_alternate h2,.l-section.color_alternate h3,.l-section.color_alternate h4,.l-section.color_alternate h5,.l-section.color_alternate h6,.l-section.color_alternate .w-counter-number{color:#475564}.color_alternate .w-progbar.color_contrast .w-progbar-bar-h{background-color:#475564}.l-titlebar.color_alternate,.l-section.color_alternate,.color_alternate input,.color_alternate textarea,.color_alternate select,.color_alternate .w-iconbox.color_contrast .w-iconbox-icon,.color_alternate .w-iconbox.color_light.style_circle .w-iconbox-icon,.color_alternate .w-tabs.layout_timeline .w-tabs-item,.color_alternate .w-tabs.layout_timeline .w-tabs-section-header-h{color:#475564}.color_alternate .w-btn.color_contrast.style_outlined,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_contrast.style_solid:hover{color:#475564 !important}.color_alternate .w-btn.color_contrast.style_solid,.color_alternate .w-btn.color_contrast.style_outlined:before,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_contrast.style_outlined:hover,.color_alternate .w-iconbox.style_circle.color_contrast .w-iconbox-icon{background-color:#475564}.color_alternate .w-btn.color_contrast{border-color:#475564}.color_alternate .w-iconbox.style_outlined.color_contrast .w-iconbox-icon{box-shadow:0 0 0 2px #475564 inset}.color_alternate a{color:#475564}.no-touch .color_alternate a:hover{color:#000000}.color_alternate .highlight_primary,.l-main .color_alternate .w-contacts-item:before,.color_alternate .w-counter.color_primary .w-counter-number,.color_alternate .g-preloader,.color_alternate .g-filters.style_1 .g-filters-item.active,.color_alternate .g-filters.style_3 .g-filters-item.active,.color_alternate .w-form-row.focused .w-form-row-field:before,.color_alternate .w-iconbox.color_primary .w-iconbox-icon,.no-touch .color_alternate .owl-prev:hover,.no-touch .color_alternate .owl-next:hover,.color_alternate .w-separator.color_primary,.color_alternate .w-tabs.layout_default .w-tabs-item.active,.color_alternate .w-tabs.layout_trendy .w-tabs-item.active,.color_alternate .w-tabs.layout_ver .w-tabs-item.active,.color_alternate .w-tabs-section.active .w-tabs-section-header{color:#f9a02c}.color_alternate .w-btn.color_primary.style_outlined,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_primary.style_solid:hover{color:#f9a02c !important}.color_alternate .highlight_primary_bg,.color_alternate .w-actionbox.color_primary,.color_alternate .w-btn.color_primary.style_solid,.color_alternate .w-btn.color_primary.style_outlined:before,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_primary.style_outlined:hover,.no-touch .color_alternate .g-filters.style_1 .g-filters-item:hover,.no-touch .color_alternate .g-filters.style_2 .g-filters-item:hover,.color_alternate .w-iconbox.style_circle.color_primary .w-iconbox-icon,.no-touch .color_alternate .w-iconbox.style_circle .w-iconbox-icon:before,.no-touch .color_alternate .w-iconbox.style_outlined .w-iconbox-icon:before,.color_alternate .w-pricing-item.type_featured .w-pricing-item-header,.color_alternate .w-progbar.color_primary .w-progbar-bar-h,.color_alternate .w-tabs.layout_modern .w-tabs-list,.color_alternate .w-tabs.layout_trendy .w-tabs-item:after,.color_alternate .w-tabs.layout_timeline .w-tabs-item:before,.color_alternate .w-tabs.layout_timeline .w-tabs-section-header-h:before,.no-touch .color_alternate .pagination .page-numbers:before,.color_alternate .pagination .page-numbers.current{background-color:#f9a02c}.color_alternate .w-btn.color_primary,.no-touch .color_alternate .owl-prev:hover,.no-touch .color_alternate .owl-next:hover,.no-touch .color_alternate .w-logos.style_1 .w-logos-item:hover,.color_alternate .w-tabs.layout_default .w-tabs-item.active,.color_alternate .w-tabs.layout_ver .w-tabs-item.active,.no-touch .color_alternate .w-tabs.layout_default .w-tabs-item.active:hover,.no-touch .color_alternate .w-tabs.layout_ver .w-tabs-item.active:hover{border-color:#f9a02c}.l-main .color_alternate .w-contacts-item:before,.color_alternate .w-iconbox.color_primary.style_outlined .w-iconbox-icon,.color_alternate .w-tabs.layout_timeline .w-tabs-item,.color_alternate .w-tabs.layout_timeline .w-tabs-section-header-h{box-shadow:0 0 0 2px #f9a02c inset}.color_alternate input:focus,.color_alternate textarea:focus,.color_alternate select:focus{box-shadow:0 0 0 2px #f9a02c}.color_alternate .highlight_secondary,.color_alternate .w-counter.color_secondary .w-counter-number,.color_alternate .w-iconbox.color_secondary .w-iconbox-icon,.color_alternate .w-separator.color_secondary{color:#333333}.color_alternate .w-btn.color_secondary.style_outlined,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_secondary.style_solid:hover{color:#333333 !important}.color_alternate .highlight_secondary_bg,.color_alternate .w-btn.color_secondary.style_solid,.color_alternate .w-btn.color_secondary.style_outlined:before,.no-touch .btn_hov_reverse .color_alternate .w-btn.color_secondary.style_outlined:hover,.color_alternate .w-actionbox.color_secondary,.color_alternate .w-iconbox.style_circle.color_secondary .w-iconbox-icon,.color_alternate .w-progbar.color_secondary .w-progbar-bar-h{background-color:#333333}.color_alternate .w-btn.color_secondary{border-color:#333333}.color_alternate .w-iconbox.color_secondary.style_outlined .w-iconbox-icon{box-shadow:0 0 0 2px #333333 inset}.color_alternate .highlight_faded,.color_alternate .w-profile-link.for_logout{color:#999999}.color_footer-top{background-color:#f6f6f6}.color_footer-top input,.color_footer-top textarea,.color_footer-top select,.color_footer-top .g-loadmore.type_block .g-loadmore-btn,.color_footer-top .w-socials.style_solid .w-socials-item-link{background-color:#ffffff}.color_footer-top,.color_footer-top *,.color_footer-top .w-btn.color_light{border-color:#e2e2e2}.color_footer-top .w-btn.color_light.style_solid,.color_footer-top .w-btn.color_light.style_outlined:before,.no-touch .color_footer-top .g-loadmore.type_block .g-loadmore-btn:hover{background-color:#e2e2e2}.color_footer-top .w-separator.color_border{color:#e2e2e2}.color_footer-top .w-socials.style_outlined .w-socials-item-link{box-shadow:0 0 0 2px #e2e2e2 inset}.color_footer-top,.color_footer-top input,.color_footer-top textarea,.color_footer-top select{color:#666666}.color_footer-top a{color:#f9a02c}.no-touch .color_footer-top a:hover,.no-touch .color_footer-top .w-form-row.focused .w-form-row-field:before{color:#000000}.color_footer-top input:focus,.color_footer-top textarea:focus,.color_footer-top select:focus{box-shadow:0 0 0 2px #000000}.color_footer-bottom{background-color:#ffffff}.color_footer-bottom input,.color_footer-bottom textarea,.color_footer-bottom select,.color_footer-bottom .g-loadmore.type_block .g-loadmore-btn,.color_footer-bottom .w-socials.style_solid .w-socials-item-link{background-color:#f6f6f6}.color_footer-bottom,.color_footer-bottom *,.color_footer-bottom .w-btn.color_light{border-color:#ebebeb}.color_footer-bottom .w-btn.color_light.style_solid,.color_footer-bottom .w-btn.color_light.style_outlined:before,.no-touch .color_footer-bottom .g-loadmore.type_block .g-loadmore-btn:hover{background-color:#ebebeb}.color_footer-bottom .w-separator.color_border{color:#ebebeb}.color_footer-bottom .w-socials.style_outlined .w-socials-item-link{box-shadow:0 0 0 2px #ebebeb inset}.color_footer-bottom,.color_footer-bottom input,.color_footer-bottom textarea,.color_footer-bottom select{color:#999999}.color_footer-bottom a{color:#666666}.no-touch .color_footer-bottom a:hover,.no-touch .color_footer-bottom .w-form-row.focused .w-form-row-field:before{color:#f9a02c}.color_footer-bottom input:focus,.color_footer-bottom textarea:focus,.color_footer-bottom select:focus{box-shadow:0 0 0 2px #f9a02c}
	</style>
	<style id="us-header-css">
		@media (min-width:901px){.hidden_for_default{display:none !important}.l-subheader.at_top{display:none}.header_hor .l-subheader.at_top{line-height:60px;height:60px}.header_hor .l-header.sticky .l-subheader.at_top{line-height:0px;height:0px;overflow:hidden}.header_hor .l-subheader.at_middle{line-height:0px;height:0px}.header_hor .l-header.sticky .l-subheader.at_middle{line-height:60px;height:60px}.header_hor .l-subheader.at_bottom{line-height:54px;height:54px}.header_hor .l-header.sticky .l-subheader.at_bottom{line-height:40px;height:40px}.header_hor .l-header.pos_fixed + .l-titlebar,.header_hor .sidebar_left .l-header.pos_fixed + .l-main,.header_hor .sidebar_right .l-header.pos_fixed + .l-main,.header_hor .sidebar_none .l-header.pos_fixed + .l-main .l-section:first-child,.header_hor .sidebar_none .l-header.pos_fixed + .l-main .l-section-gap:nth-child(2),.header_hor.header_inpos_below .l-header.pos_fixed~.l-main .l-section:nth-child(2),.header_hor .l-header.pos_static.bg_transparent + .l-titlebar,.header_hor .sidebar_left .l-header.pos_static.bg_transparent + .l-main,.header_hor .sidebar_right .l-header.pos_static.bg_transparent + .l-main,.header_hor .sidebar_none .l-header.pos_static.bg_transparent + .l-main .l-section:first-child{padding-top:54px}.header_hor .l-header.pos_static.bg_solid + .l-main .l-section.preview_trendy .w-blogpost-preview{top:-54px}.header_hor.header_inpos_bottom .l-header.pos_fixed~.l-main .l-section:first-child{padding-bottom:54px}.header_hor .l-header.bg_transparent~.l-main .l-section.valign_center:first-child>.l-section-h{top:-27px}.header_hor.header_inpos_bottom .l-header.pos_fixed.bg_transparent~.l-main .l-section.valign_center:first-child>.l-section-h{top:27px}.header_hor .l-header.pos_fixed~.l-main .l-section.height_full:not(:first-child){min-height:calc(100vh - 100px)}.admin-bar.header_hor .l-header.pos_fixed~.l-main .l-section.height_full:not(:first-child){min-height:calc(100vh - 132px)}.header_hor .l-header.pos_fixed~.l-main .l-section.sticky{top:100px}.admin-bar.header_hor .l-header.pos_fixed~.l-main .l-section.sticky{top:132px}.header_hor .sidebar_none .l-header.pos_fixed.sticky + .l-main .l-section.type_sticky:first-child{padding-top:100px}.header_hor.header_inpos_below .l-header.pos_fixed:not(.sticky){position:absolute;top:100%}.header_hor.header_inpos_bottom .l-header.pos_fixed:not(.sticky){position:absolute;bottom:0}.header_inpos_below .l-header.pos_fixed~.l-main .l-section:first-child,.header_inpos_bottom .l-header.pos_fixed~.l-main .l-section:first-child{padding-top:0 !important}.header_hor.header_inpos_below .l-header.pos_fixed~.l-main .l-section.height_full:nth-child(2){min-height:100vh}.admin-bar.header_hor.header_inpos_below .l-header.pos_fixed~.l-main .l-section.height_full:nth-child(2){min-height:calc(100vh - 32px)}.header_inpos_bottom .l-header.pos_fixed:not(.sticky) .w-cart-dropdown,.header_inpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_2{bottom:100%;transform-origin:0 100%}.header_inpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_mobile.m_layout_dropdown .w-nav-list.level_1{top:auto;bottom:100%;box-shadow:0 -3px 3px rgba(0,0,0,0.1)}.header_inpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_3,.header_inpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_4{top:auto;bottom:0;transform-origin:0 100%}}@media (min-width:601px) and (max-width:900px){.hidden_for_tablets{display:none !important}.l-subheader.at_top{display:none}.header_hor .l-subheader.at_top{line-height:40px;height:40px}.header_hor .l-header.sticky .l-subheader.at_top{line-height:40px;height:40px}.header_hor .l-subheader.at_middle{line-height:50px;height:50px}.header_hor .l-header.sticky .l-subheader.at_middle{line-height:50px;height:50px}.header_hor .l-subheader.at_bottom{line-height:50px;height:50px}.header_hor .l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px}.header_hor .l-header.pos_fixed + .l-titlebar,.header_hor .sidebar_left .l-header.pos_fixed + .l-main,.header_hor .sidebar_right .l-header.pos_fixed + .l-main,.header_hor .sidebar_none .l-header.pos_fixed + .l-main .l-section:first-child,.header_hor .sidebar_none .l-header.pos_fixed + .l-main .l-section-gap:nth-child(2),.header_hor .l-header.pos_static.bg_transparent + .l-titlebar,.header_hor .sidebar_left .l-header.pos_static.bg_transparent + .l-main,.header_hor .sidebar_right .l-header.pos_static.bg_transparent + .l-main,.header_hor .sidebar_none .l-header.pos_static.bg_transparent + .l-main .l-section:first-child{padding-top:100px}.header_hor .l-header.pos_static.bg_solid + .l-main .l-section.preview_trendy .w-blogpost-preview{top:-100px}.header_hor .l-header.pos_fixed~.l-main .l-section.sticky{top:100px}.header_hor .sidebar_none .l-header.pos_fixed.sticky + .l-main .l-section.type_sticky:first-child{padding-top:100px}}@media (max-width:600px){.hidden_for_mobiles{display:none !important}.l-subheader.at_top{display:none}.header_hor .l-subheader.at_top{line-height:40px;height:40px}.header_hor .l-header.sticky .l-subheader.at_top{line-height:40px;height:40px}.header_hor .l-subheader.at_middle{line-height:50px;height:50px}.header_hor .l-header.sticky .l-subheader.at_middle{line-height:0px;height:0px;overflow:hidden}.header_hor .l-subheader.at_bottom{line-height:50px;height:50px}.header_hor .l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px}.header_hor .l-header.pos_fixed + .l-titlebar,.header_hor .sidebar_left .l-header.pos_fixed + .l-main,.header_hor .sidebar_right .l-header.pos_fixed + .l-main,.header_hor .sidebar_none .l-header.pos_fixed + .l-main .l-section:first-child,.header_hor .sidebar_none .l-header.pos_fixed + .l-main .l-section-gap:nth-child(2),.header_hor .l-header.pos_static.bg_transparent + .l-titlebar,.header_hor .sidebar_left .l-header.pos_static.bg_transparent + .l-main,.header_hor .sidebar_right .l-header.pos_static.bg_transparent + .l-main,.header_hor .sidebar_none .l-header.pos_static.bg_transparent + .l-main .l-section:first-child{padding-top:100px}.header_hor .l-header.pos_static.bg_solid + .l-main .l-section.preview_trendy .w-blogpost-preview{top:-100px}.header_hor .l-header.pos_fixed~.l-main .l-section.sticky{top:50px}.header_hor .sidebar_none .l-header.pos_fixed.sticky + .l-main .l-section.type_sticky:first-child{padding-top:50px}}@media (min-width:901px){.ush_image_1{height:30px}.l-header.sticky .ush_image_1{height:43px}}@media (min-width:601px) and (max-width:900px){.ush_image_1{height:30px}.l-header.sticky .ush_image_1{height:30px}}@media (max-width:600px){.ush_image_1{height:30px}.l-header.sticky .ush_image_1{height:30px}}.ush_text_1{white-space:nowrap}@media (min-width:901px){.ush_text_1{font-size:27px}}@media (min-width:601px) and (max-width:900px){.ush_text_1{font-size:24px}}@media (max-width:600px){.ush_text_1{font-size:20px}}.ush_text_2{white-space:nowrap}@media (min-width:901px){.ush_text_2{font-size:13px}}@media (min-width:601px) and (max-width:900px){.ush_text_2{font-size:13px}}@media (max-width:600px){.ush_text_2{font-size:13px}}.ush_text_3{white-space:nowrap}@media (min-width:901px){.ush_text_3{font-size:13px}}@media (min-width:601px) and (max-width:900px){.ush_text_3{font-size:13px}}@media (max-width:600px){.ush_text_3{font-size:13px}}.header_hor .ush_menu_1.type_desktop .w-nav-list.level_1>.menu-item>a{padding:0 8px}.header_ver .ush_menu_1.type_desktop{line-height:16px}.ush_menu_1.type_desktop .btn.menu-item.level_1>.w-nav-anchor{margin:4px}.ush_menu_1.type_desktop .w-nav-list>.menu-item.level_1{font-size:16px}.ush_menu_1.type_desktop .w-nav-list>.menu-item:not(.level_1){font-size:14px}.ush_menu_1.type_mobile .w-nav-anchor.level_1{font-size:15px}.ush_menu_1.type_mobile .w-nav-anchor:not(.level_1){font-size:14px}@media (min-width:901px){.ush_menu_1 .w-nav-icon{font-size:20px}}@media (min-width:601px) and (max-width:900px){.ush_menu_1 .w-nav-icon{font-size:20px}}@media (max-width:600px){.ush_menu_1 .w-nav-icon{font-size:20px}}@media screen and (max-width:799px){.ush_menu_1 .w-nav-list{display:none}.ush_menu_1 .w-nav-control{display:block}}@media (min-width:901px){.ush_search_1.layout_simple{max-width:240px}.ush_search_1.layout_modern.active{width:240px}.ush_search_1 .w-search-open,.ush_search_1 .w-search-close,.ush_search_1 .w-search-form-btn{font-size:18px}}@media (min-width:601px) and (max-width:900px){.ush_search_1.layout_simple{max-width:200px}.ush_search_1.layout_modern.active{width:200px}.ush_search_1 .w-search-open,.ush_search_1 .w-search-close,.ush_search_1 .w-search-form-btn{font-size:18px}}@media (max-width:600px){.ush_search_1 .w-search-open,.ush_search_1 .w-search-close,.ush_search_1 .w-search-form-btn{font-size:18px}}@media (min-width:901px){.ush_socials_1{font-size:18px}}@media (min-width:601px) and (max-width:900px){.ush_socials_1{font-size:18px}}@media (max-width:600px){.ush_socials_1{font-size:18px}}@media (min-width:901px){.ush_cart_1 .w-cart-link{font-size:20px}}@media (min-width:601px) and (max-width:900px){.ush_cart_1 .w-cart-link{font-size:20px}}@media (max-width:600px){.ush_cart_1 .w-cart-link{font-size:20px}}
	</style>
	<style id="us-custom-css">
		.slide-popup-close{background:#f78f1e none repeat scroll 0 0;border-radius:5px 0 0 5px;height:50px;position:fixed;right:0;top:50%;width:50px;padding:6px}.slider-form #field_2_2>input{border-radius:0;box-shadow:none;margin-bottom:15px !important;background:#ECEEEF;padding-right:0px !important;height:38px !important;margin-bottom:0 !important;margin-top:14px !important}.slideout-form #field_3_2>input{border-radius:0;box-shadow:none;margin-bottom:15px !important;background:#ECEEEF;padding-right:0px !important;height:38px !important;margin-bottom:0 !important;margin-top:8px !important}.post-form #field_6_2>input{margin-bottom:0 !important;margin-top:8px !important}.single-post .sidebar_right .l-main .l-main-h main.l-content section.l-section div.l-section-h{padding-top:5px !important}.for_blogpost .l-section-h.i-cf{padding-top:0px !important}.single-post .sidebar_right .l-main .l-main-h main.l-content{border-right:1px solid #787878 !important;margin-top:64px !important;padding-right:25px !important;margin-bottom:64px !important}.single-post .for_blogpost .l-section-h .w-blogpost .w-blogpost-body h1.w-blogpost-title{border-bottom:1px solid #787878 !important;padding-bottom:20px !important}@media only screen and (min-width:320px) and (max-width:600px){.home-respo-border-bottom{border-bottom:1px solid #eee !important;padding-bottom:20px;margin-bottom:20px !important}.single-post .sidebar_right .l-main .l-main-h main.l-content{border-right:none !important;margin-top:0px !important}#home-color-box:hover{margin-top:0px !important}}.widget_us_blog .w-grid-list .w-grid-item-h .w-hwrapper{display:none}.widget_us_blog .w-grid-list .w-grid-item-h .post_content{display:none}.widget_us_blog .w-grid-list .w-grid-item-h .btn{display:none}.about-color-heading .breadcrumb-container{margin:0px 0px 20px -28px !important}section.for_comments #comments{display:none}.header_hor .l-subheader-h{position:static}.w-search.ush_search_1.layout_simple{position:absolute;right:39%;top:9px}.w-search.layout_simple button{background:#f78f1e none repeat scroll 0 0 !important;box-shadow:none !important;color:#fff !important;opacity:1;height:36px;line-height:30px}.w-search input{background-color:#eceeef;border-radius:0;box-shadow:none !important;height:36px;line-height:30px}.wpcf7-response-output{border:none!important;margin:0!important;padding:0!important}.w-tabs-item.active, .w-tabs-item.active .w-tabs-item-h{background:#F78F1E !important}.tp-leftarrow{top:120% !important;left:-12%!important;background:#F78F1E !important}.tp-rightarrow{top:120% !important;left:148%!important;background:#F78F1E !important}.sub-slider .tp-thumb-mask{max-width:970px !important;overflow:hidden !important;width:975px !important}.tp-thumbs{max-width:975px !important;overflow:hidden !important;width:970px !important;padding:20px 0px 20px 0px !important}.tp-thumbs-inner-wrapper{right:-922px !important;width:1892px !important}#home-color-box{transition:all 0.5s ease 0s}#home-color-box:hover{margin-top:-90px; position:relative;transition:all 0.4s ease 0s}.drrns .w-gallery-item-img{border:1px solid #F78F1E}.drrns .w-gallery-item-img img{ }.drrns .w-gallery-list .w-gallery-item{padding:15px}.home-orange .vc_column-inner{background-position:center bottom !important}.home-red .vc_column-inner{background-position:center bottom !important}.home-green .vc_column-inner{background-position:center bottom !important}button{box-shadow:none!important}.w-portfolio.style_2 .w-portfolio-item-meta{background:#f78f1e none repeat scroll 0 0;padding:5px}.w-portfolio.style_2 .w-portfolio-item-meta::before{background:#f78f1e none repeat scroll 0 0}.main-cform .wpcf7-form-control.wpcf7-submit{background:#F78F1E none repeat scroll 0 0;border-radius:0;width:100%}.main-cform .wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required{border-radius:0;box-shadow:none;background:#ECEEEF}.Contact-Form .wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required{border-radius:0;box-shadow:none}.Contact-Form textarea{border-radius:0;box-shadow:none}.Contact-Form .wpcf7-form-control.wpcf7-text{border-radius:0;box-shadow:none}.classic .ubtn{ text-transform:capitalize !important}.classic-tab .w-tabs-list.items_2{ background:none!important; color:#fff !important}#video{ position:relative; padding-bottom:56.25%; / 16:9 / height:0}#video iframe{ position:absolute; top:0; left:0; width:100%; height:100%}.Contact-Form .wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required{background:#f0f0f0 !important}.Contact-Form .wpcf7-form-control.wpcf7-text{background:#f0f0f0}.home-form{background:#fff none repeat scroll 0 0;position:absolute;right:0px;top:-54px;border-radius:0px 0px 5px 5px;z-index:1;width:243px}.header_hor .l-header{ z-index:3; position:static}.home-form .ajax-loader{display:none !important}.home-form .wpcf7-form-control.wpcf7-text{background:#eceeef none repeat scroll 0 0;border:medium none;border-radius:0;box-shadow:none;color:#777;height:37px;padding:5px 8px}.home-form .wpcf7-form>p{margin:6px 0}.home-form .wpcf7-form-control.wpcf7-submit{background:#f78f1e none repeat scroll 0 0;border:medium none;border-radius:0;box-shadow:none;color:#fff;font-size:20px;height:37px;line-height:28px;margin-top:6px;padding:5px 8px;text-transform:capitalize;width:100%}.home-boxes a{ color:#fff!important}.home-reviews .w-testimonial-h{padding:0px !important;border:none !important}.home-reviews .w-testimonial-author{color:#f78f1e} .w-testimonial-author{color:#00AC7B}.home-reviews .w-testimonial-author-name{font-size:14px !important;font-weight:bold}.l-subheader-cell.at_right{justify-content:left}.l-subheader-cell{flex-grow:0}.sub-slider .tp-thumb-mask{max-width:950px !important;overflow:hidden !important;width:950px !important}.large-button{white-space:normal !important}.sub-slider .tp-thumb.selected{border:2px solid #f78f1e}.tp-thumb{opacity:1}.news-section .w-blog-list .w-blog-post-title{font-weight:bold}.news-section .w-blog-list .w-blog-post-more{background:#f78f1e none repeat scroll 0 0 !important;border:1px solid #f78f1e !important;box-shadow:none !important;color:#fff !important}.news-section .w-blog-list .w-blog-post-more:hover{background:#c67218 none repeat scroll 0 0 !important;border:1px solid#c67218 !important}.about-orange .vc_column-inner{margin-right:-97px;margin-top:0 !important}.about-red .vc_column-inner{margin-right:-49px;margin-left:49px;margin-top:0 !important}.about-green .vc_column-inner{margin-left:14px;margin-top:0 !important;margin-right:-20px}.about-black .vc_column-inner{margin-right:17px;margin-top:0 !important;margin-right:-22px}.about-color-heading{padding-top:32px !important}@media (min-width:320px) and (max-width:479.98px){.resp-mt-top-from-hedin{margin-top:3rem}.w-grid-item-elm.usg_post_taxonomy_1.color_link_inherit.post_taxonomy.style_badge>a{font-size:10px !important}.w-grid-item-elm.usg_post_title_1.color_link_inherit.with_text_color.post_title.entry-title>a{font-size:11px}.far.fa-clock, time{font-size:12px !important}.w-grid-item-elm.usg_post_author_1.color_link_inherit.with_text_color.post_author.vcard.author{font-size:12px !important}.w-grid-item-elm.usg_post_comments_1.color_link_inherit.with_text_color.post_comments.with_word{font-size:12px !important}.res-mar-top{margin-top:3rem}.aio-icon-description.ult-responsive, .aio-icon-description.ult-responsive a{font-size:12px;line-height:18px}.breadcrumb-container.theme1{color:#fff !important;left:4rem;position:fixed !important;right:auto;top:63px;height:30px !important;z-index:999}.breadcrumb-container.theme1>ul li a, .breadcrumb-container.theme1>ul li span{color:#fff !important}.wpb_wrapper .w-image{margin-bottom:-2.5rem}.about-color-heading{padding-top:0px !important}}@media only screen and (min-width:320px) and (max-width:600px){.slideout-form .name_first{width:100% !important}.slideout-form_wrapper{margin:0px 0px 20px 0px !important;padding:20px 0px!important}.slide-popup-close{top:50%}}@media only screen and (min-width:320px) and (max-width:640px){.main-popup{display:none !important}}@media only screen and (max-width:640px){.w-search.ush_search_1.layout_simple{display:none}.w-image.align_center.home-form-img{display:none}}@media only screen and (min-width:641px) and (max-width:950px){.w-search.ush_search_1.layout_simple{position:absolute;right:55px;top:-44px}}@media only screen and (min-width:951px) and (max-width:1250px){.w-search.ush_search_1.layout_simple{position:absolute;right:35%;top:9px}}@media only screen and (max-width:767px){.header_hor .l-subheader-h{display:inherit;top:5px}.home-form .vc_custom_heading{text-align:center !important;margin-top:45px !important}.home-form{position:relative;margin:0 15px !important}.home-row-three h3{text-align:center !important}.home-row-three h4{text-align:center !important}.footer-top .l-section-overlay{height:49px}.footer-top .g-cols.vc_row.type_default.valign_top{max-height:60px;height:60px}.footer-bottom .vc_col-sm-6.wpb_column.vc_column_container{width:50%}.about-row-three h4{text-align:center !important}.product-slider-news .vc_column-inner{margin:0 25px !important}.large-button .ubtn{width:100% !important}.sub-bg .l-section-img.loaded{background-position:center 100px;background-size:100% 25%}.cr-sub-bg .l-section-img.loaded{background-position:center 100px;background-size:100% 18%}.cr-testi{padding:0 5%}.c-form h3{text-align:center !important}.aio-icon-component.c-info-1{margin-left:0 !important}.home-orange{margin-bottom:25px !important}.home-red{margin-bottom:25px !important}.home-green{margin-bottom:25px !important}.vc_col-sm-4.wpb_column.vc_column_container.home-form{margin-top:0 !importantmargin-left:0 !important;margin-right:0 !important}.home-video{text-align:center !important}.home-video h3{text-align:center !important}.home-video h4{text-align:center !important}.home-form{position:relative;margin-top:50px !important;margin-left:0 !important;z-index:0 !important}.tab-row-menu .vc_column-inner{padding:0!important}.tab-row .menu-baisc-menu-container{border-right:none !important}.tab-row .menu-dental-pro-menu-container{border-right:none !important}.tab-row .menu-technology-container{border-right:none !important}.tab-row .menu-clinical-resorces-container{border-right:none !important}.tab-row .menu-news-container{border-right:none !important}.product-slider-news .vc_col-sm-9 .vc_column-inner{padding:0 !important}.product-slider-news .vc_col-sm-9{margin-bottom:65px !important}.product-slider-news .tp-rightarrow.tparrows.hesperiden.noSwipe{transform:matrix(1, 0, 0, 1, -155, -20) !important}.l-section.wpb_row.height_auto.product-top{padding-top:50px !important}.product-top .ult-spacer{display:none !important}.classic-tab h1{font-size:28px !important}.classic-tab .g-cols.wpb_row.type_default.valign_top.vc_inner{padding-left:0 !important}.home-main .vc_col-sm-4.wpb_column.vc_column_container.home-form{margin-right:-5px !important;margin-left:25px !important;margin-bottom:60px !important}}@media only screen and (max-width:640px){.home-slider{display:none}.bcure-header-logo{display:none}.home-form .w-image-h{display:none}.home-form-bottom .wpcf7-form-control.wpcf7-text{background:#eceeef none repeat scroll 0 0;border:medium none;border-radius:0;box-shadow:none;color:#777;height:37px;padding:5px 8px}.home-form-bottom p{margin-bottom:8px}.home-form-bottom h6{text-align:center !important}.home-form-bottom .wpcf7-form-control.wpcf7-submit{background:#f78f1e none repeat scroll 0 0;border:medium none;border-radius:0;box-shadow:none;color:#fff;font-size:20px;height:37px;line-height:28px;margin-top:6px;padding:5px 8px;text-transform:capitalize;width:100%}.cr-sub-bg .l-section-img.loaded{display:none}.cr-sub-bg .ult-spacer{display:none !important}.cr-sub-bg .w-grid-item-h{display:none}.cr-sub-bg .home-form{margin-top:20px !important}.sub-bg .l-section-img.loaded{display:none}.sub-bg .ult-spacer{display:none !important}.vc_col-sm-9.wpb_column.vc_column_container.sub-slider{display:none}}@media only screen and (max-width:359px){.bcure-mainheader-full{position:fixed;height:35px;z-index:9;width:100%}.bcure-header-logo-mobile{display:block;width:22%;padding:1px}.bcure-mainheader{width:100%}.header-language{float:left;width:54% !important;margin-right:4px}.header-language .dropbtn{padding:4px 10px}.header-social{float:left;width:20%}.header_hor .l-header{top:50px}}@media only screen and (min-width:360px) and (max-width:420px){.bcure-mainheader-full{position:fixed;height:30px;z-index:9;width:100%}.bcure-header-logo-mobile{display:block;width:22%;padding:3px}.bcure-mainheader{width:100%}.header-language{float:left;width:53%}.header-language .dropbtn{padding:4px 15px}.header-social{float:left;width:22%}.header_hor .l-header{top:50px}}@media only screen and (min-width:421px) and (max-width:500px){.bcure-mainheader-full{position:fixed;height:50px;z-index:9;width:100%}.bcure-header-logo-mobile{display:block;width:22%;padding:3px}.bcure-mainheader{width:100%}.header-language{float:left;width:48%}.header-social{float:left;width:28%}.header_hor .l-header{top:55px}}@media only screen and (min-width:501px) and (max-width:600px){.bcure-mainheader-full{position:fixed;height:65px;z-index:9;width:100%}.bcure-header-logo-mobile{display:block;width:22%;padding:3px}.bcure-mainheader{width:100%}.header-language{float:left;width:43%}.header-social{float:left;width:33%}.header_hor .l-header{top:65px}}@media only screen and (min-width:601px) and (max-width:700px){.bcure-mainheader-full{position:fixed;height:65px;z-index:9;width:100%}.bcure-header-logo-mobile{display:block;width:22%;padding:3px}.bcure-mainheader{width:100%}.header-language{float:left;width:36%}.header-social{float:left;width:40%}.header_hor .l-header{top:65px}}@media only screen and (max-width:600px){.footer-bottom .vc_col-sm-6.wpb_column.vc_column_container{padding:0 15px}.about-color-heading .vc_col-sm-2.wpb_column.vc_column_container{display:none}.about-color-heading .l-section-h.i-cf{padding:0}.about-color-heading .l-section-overlay{background:none !important}.about-orange .vc_column-inner{padding-top:20px !important; margin-left:15px; margin-right:-10px}.c-form p{width:100% !important}}.about-color-heading pre{background:none !important;font-family:open sans;padding:0 !important}.about-color-heading .breadcrumb-container ul li span:last-child{display:none}@media only screen and (min-width:601px) and (max-width:767px){.about-color-heading .vc_col-sm-6.wpb_column.vc_column_container.about-orange{width:40%}.about-color-heading .vc_col-sm-2.wpb_column.vc_column_container{width:20%}.about-orange .vc_column-inner{margin-left:40px}.about-red .vc_column-inner{margin-right:-41px;margin-left:49px}.l-section.wpb_row.height_auto.with_overlay.about-color-heading{padding-left:0}.about-color-heading .vc_col-sm-9{padding-left:25px}}@media only screen and (min-width:768px) and (max-width:950px){.about-row-three .vc_column-inner{padding:15px !important}.header_hor .l-header{ z-index:2147483647 !important; position:relative!important}.home-form{z-index:99 !important}.banner-col1.vc_col-sm-4.wpb_column.vc_column_container{width:30% !important}.banner-col2.vc_col-sm-4.wpb_column.vc_column_container{width:35% !important}.home-form.vc_col-sm-4.wpb_column.vc_column_container{width:35% !important}.large-button .ubtn{font-size:14px !important;line-height:18px !important;height:40px !important;min-height:45px !important}.product-slider-news .vc_custom_heading{margin-bottom:15px !important}.tab-row .tab-row-menu{width:25%}.tab-row .tab-row-contant{width:75%}}@media only screen and (min-width:992px) and (max-width:950px){.home-form{width:234px !important}}@media only screen and (min-width:901px) and (max-width:950px){.home-form{margin-top:100px !important}}@media only screen and (min-width:768px) and (max-width:950px){.banner-col1.vc_col-sm-4.wpb_column.vc_column_container{width:30% !important}.banner-col2.vc_col-sm-4.wpb_column.vc_column_container{width:35% !important}.home-form.vc_col-sm-4.wpb_column.vc_column_container{width:35% !important}}@media only screen and (max-width:640px){#rev_slider_1_1_wrapper{margin-top:-56px !important;margin-bottom:88px !important}}@media only screen and (min-width:641px) and (max-width:767px){.home-form{position:relative;margin-top:50px !important;z-index:0 !important}#rev_slider_1_1_wrapper{margin-top:-56px !important;margin-bottom:88px !important}}@media only screen and (min-width:891px) and (max-width:923px){.home-black h5{line-height:22px;font-size:18px}}@media only screen and (min-width:924px) and (max-width:945px){.home-black h5{line-height:24px;font-size:18px}}@media only screen and (min-width:946px) and (max-width:978px){.home-black h5{line-height:24px;font-size:18px}}@media only screen and (min-width:799px) and (max-width:816px){}@media only screen and (min-width:817px) and (max-width:833px){}@media only screen and (min-width:834px) and (max-width:852px){}@media only screen and (min-width:853px) and (max-width:881px){}@media only screen and (min-width:882px) and (max-width:890px){}@media only screen and (min-width:891px) and (max-width:945px){}@media only screen and (min-width:946px) and (max-width:991px){}.homepage .home-form{ right:15px; z-index:1}.home-video .w-vwrapper.usg_vwrapper_2.align_left.valign_top{border:medium none !important;padding:0 25px !important}.home-video .w-grid-item-elm.usg_post_content_1.post_content{line-height:20px !important;min-height:90px !important}.home-video .w-hwrapper.usg_hwrapper_1.align_left.valign_middle{color:#f78f1e;font-size:14px}.footer-bottom p{ font-size:13px !important}.main-popup .ult_modal-content{min-width:640px}.main-popup .ult_modal.ult-small{width:50%}.main-popup .FNAME-label{margin-left:12%}.main-popup .EMAIL-label.yikes-mailchimp-field-required{margin-left:12%}.main-popup .yikes-easy-mc-submit-button.yikes-easy-mc-submit-button-1.btn.btn-primary{margin-left:12%}.cr-sub-bg .owl-carousel .us_testimonial.type-us_testimonial .post_content{min-height:115px!important}.tab-row .menu{margin-right:15px !important;border-bottom:medium none !important}.tab-row .menu-baisc-menu-container{border-right:1px solid #787878}.tab-row .menu-dental-pro-menu-container{border-right:1px solid #787878}.tab-row .menu-technology-container{border-right:1px solid #787878}.tab-row .menu-clinical-resorces-container{border-right:1px solid #787878}.tab-row .menu-news-container{border-right:1px solid #787878}.vc_col-sm-2.wpb_column.vc_column_container.tab-row-menu .vc_column-inner{padding:0 !important}.l-main .widget_nav_menu .menu-item.current-menu-item>a{background:none !important;color:#00ac7b}.tab-row-menu a{border:medium none !important;padding-right:5px !important}.tab-row-menu a:hover{background:none !important}.Contact-Form textarea{background:#f0f0f0 none repeat scroll 0 0}.Contact-Form select{border-radius:0;box-shadow:none;background:#f0f0f0 none repeat scroll 0 0}.Contact-Form h6{text-align:center}.Contact-Form .wpcf7-form-control.wpcf7-submit{width:100%;margin-top:15px}.neck-btn{background:#F78F1E none repeat scroll 0 0 !important;margin-top:28px;padding:17px;text-align:center !important;width:50%}.neck-btn a{color:fff}@media only screen and (max-width:900px){.l-subheader.at_middle{display:none}}*/.main-popup .ult_modal-body.ult-responsive.ult-html>div{background:transparent none repeat scroll 0 0 !important}.classic-tab .w-tabs-item-h{background:#475564 none repeat scroll 0 0;color:#fff !important;margin:0 5px;padding:6px 20px}.tab-row .vc_custom_heading{font-size:18px}.tab-row p{font-size:14px}.classic-tab h4{font-size:18px !important}.classic-tab .w-tabs-section-content-h.i-cf{padding-top:0}.ult_modal-content{border:medium none !important}.ult-overlay-close.popup-top-right{border-radius:0 !important;margin-left:-22px;padding:6px !important;position:absolute;top:0}.main-popup .ult_modal-body{background-image:url("img/bcure.jpg");background-position:center center !important;background-size:100% 100% !important;padding-top:60px}.main-popup .wpcf7-form-control.wpcf7-text{border-radius:0;box-shadow:none;height:40px;margin-left:24%;width:48%}.main-popup .wpcf7-form-control.wpcf7-submit{border:2px solid #fff;height:42px;line-height:36px;margin-left:24%}@media screen and (min-width:888px) and (max-width:960px){.w-tabs-item-h{font-size:14px !important;padding:6px 12px !important}}@media screen and (min-width:769px) and (max-width:887px){.w-tabs-item-h{ font-size:12px !important;padding:6px 12px !important}}@media screen and (min-width:769px) and (max-width:992px){li.tp-revslider-slidesli div.tp-parallax-wrap div.tp-loop-wrap div.tp-mask-wrap div{font-size:10px !important} .ush_menu_1.type_desktop .w-nav-list>.menu-item.level_1{font-size:14px !important}}@media screen and (min-width:769px) and (max-width:1024px){h5.vc_custom_heading.vc_custom_1529600811692{font-size:15px}.home-boxes p{ min-height:85px !important} .home-boxes h2{min-height:72px !important}.home-boxes ul{ min-height:128px !important}}.news-form{background:#ECEEEF none repeat scroll 0 0;border-radius:5px;width:225px;margin-left:10px}.news-form .wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required{background:#fff none repeat scroll 0 0;border:medium none !important;box-shadow:none;height:40px}.news-form .wpcf7-form-control.wpcf7-text.wpcf7-email.wpcf7-validates-as-email{background:#fff none repeat scroll 0 0;border:medium none !important;box-shadow:none;height:40px}.news-form .wpcf7-form-control.wpcf7-submit{box-shadow:none;height:38px;line-height:30px;width:100%}.news-form h6{font-size:12px !important}.news-section .w-hwrapper.usg_hwrapper_1.align_left.valign_top.wrap{display:none}.news-section h2{font-weight:bold !important}@media only screen and (max-width:800px){.w-nav-list.level_1.hover_simple{margin:0 12px}}@media only screen and (min-width:768px) and (max-width:948px){.tp-leftarrow.tparrows.hesperiden.noSwipe{transform:matrix(1, 0, 0, 1, 58, -40) !important}.tp-rightarrow.tparrows.hesperiden.noSwipe{transform:matrix(1, 0, 0, 1, -100, -40) !important}}@media only screen and (min-width:901px) and (max-width:950px){.l-section.wpb_row.height_auto.with_img.cr-sub-bg{height:500px}}@media only screen and (min-width:641px){ .bcure-header-logo-mobile{display:none} .home-form-bottom{display:none}}@media only screen and (max-width:768px){.menu a{width:75%;font-size:82%}.menu{width:90%}.menu a, .next-post a{float:left;margin:0 1%;padding:5px 1%;margin-bottom:0}.menu li:first-child a{margin-left:0}.menu li:last-childa{margin-right:0}.menu li{display:inline}}.menu{width:100%;float:left;background:none;margin-bottom:9px;padding:5px 0px 5px 0px}.menu select{display:none}@media (max-width:768px){.menu li{display:none}.menu select{border:1px solid #ddd!important;box-shadow:none!important;display:block;margin:0 auto;width:90% !important}}.contact-form .gform_body ul li{clear:none !important;float:left !important;width:50% !important;margin:0 !important}#input_1_1_3_container>label{display:none !important}.contact-form .medium{width:100% !important;border-radius:0;box-shadow:none;margin-bottom:0 !important}#input_1_1_3_container>input{border-radius:0;box-shadow:none;margin-bottom:0 !important}.contact-form .ginput_container.ginput_container_select{margin-top:-73px !important}.contact-form textarea{height:125px !important}.contact-form .gform_footer.top_label{text-align:center}.contact-form .gform_button.button{margin-top:30px !important;width:40% !important;box-shadow:none !important}.contact-form .gform_heading{display:none}#input_2_1_3_container>label{display:none !important}.slider-form .gform_body ul li{ float:left !important;padding-right:0px!important;height:50px !important;margin:0 !important;width:100% !important}.slider-form .gform_body ul li .ginput_container{float:left !important; width:100% !important}.slider-form .gform_body ul li .ginput_container_name span{padding-right:0px!important}.slider-form .medium{width:100% !important;border-radius:0;box-shadow:none;margin-bottom:0 !important;background:#ECEEEF;padding-right:0px!important;height:38px !important;margin-top:5px}.slider-form #input_2_1_3_container>input{border-radius:0;box-shadow:none;margin-bottom:15px !important;background:#ECEEEF;padding-right:0px!important;height:38px !important}.slider-form .gform_footer.top_label{padding-bottom:0;padding-top:8px}.slider-form_wrapper{margin:5px 0 !important}.gform_button.button{height:38px;line-height:24px;width:100% !important}.slider-form .gform_heading{display:none}@media only screen and (max-width:640px){.slider-form .gform_body ul li .ginput_container{margin-top:0px !important}}@media only screen and (min-width:480px) and (max-width:640px){.slider-form .name_first{width:100% !important}.contact-form .name_first{width:100% !important}}@media only screen and (max-width:479px){.blog-form_wrapper .blog-form .gform_body ul li{ float:none !important;padding-right:0px!important;height:50px !important;margin:0 !important;width:92% !important}.blog-form_wrapper .blog-form .gform_body ul li.field_sublabel_below .ginput_complex{margin-top:40px!important}.blog-form_wrapper .blog-form .gform_body ul li input#input_5_1_3{float:none !important;padding-right:0px!important;margin:0 !important;width:100% !important}.blog-form_wrapper .blog-form .gform_body ul li label#label_5_4_1{ height:50px !important; float:right !important} .blog-form_wrapper .blog-form .gform_body ul li.gfield.field_sublabel_below.field_description_below.gfield_visibility_visible{margin:0% 0 0 4% !important}.gform_wrapper .top_label li.gfield{ float:left !important;padding-right:0px!important;height:50px !important;margin:1px !important;width:100% !important}.slider-form .gform_footer.top_label{padding-bottom:0;padding-top:42px}} @media only screen and (min-width:951px){.review-page .home-form{top:-150px}}@media only screen and (min-width:900px) and (max-width:950px){.review-page .home-form{top:-140px}} .slideout-form label{display:none !important}.slideout-form .gform_body ul li{ float:left !important;padding-right:0px!important;height:50px !important;margin:0 !important;width:100% !important}.slideout-form .gform_body ul li .ginput_container{float:left !important; width:100% !important}.slideout-form .gform_body ul li .ginput_container_name span{padding-right:0px!important}.slideout-form .medium{width:100% !important;border-radius:0;box-shadow:none;margin-bottom:0 !important;background:#ECEEEF;padding-right:0px!important;height:38px !important}.slideout-form-message .medium{width:100% !important;border-radius:0;box-shadow:none;margin-bottom:0 !important;background:#ECEEEF;padding-right:0px!important;height:70px !important}.slideout-form #input_3_1_3{border-radius:0;box-shadow:none;margin-bottom:15px !important;background:#ECEEEF;padding-right:0px!important;height:38px !important}.slideout-form .gform_footer.top_label{padding-bottom:0;padding-top:8px}.slideout-form .gform_button.button{height:38px;line-height:24px;width:100% !important;margin-top:30px !important}.slideout-form .gform_heading{display:none} .slideout-form_wrapper{background:#fff;margin:0px 20px 20px 20px;padding:20px}.slideout-logo{text-align:center}.slideout-logo img{max-height:40px;margin:auto;max-width:100% !important}.slideout-form h6{text-align:center;font-size:16px;margin-top:15px} .popup-form label{display:none !important}.popup-form .gform_body ul li{ float:left !important;padding-right:0px!important;height:50px !important;margin:0 !important;width:100% !important}.popup-form .gform_body ul li .ginput_container{float:left !important; width:100% !important}.popup-form .gform_body ul li .ginput_container_name span{padding-right:0px!important}.popup-form .medium{width:48% !important;border-radius:0;box-shadow:none;margin-bottom:0 !important;margin-left:22% !important;background:#fff;padding-right:0px!important;height:38px !important}.popup-form #input_4_1_3{width:48% !important;border-radius:0;box-shadow:none;margin-bottom:15px !important;margin-left:22% !important;background:#fff;padding-right:0px!important;height:38px !important}.popup-form .gform_footer.top_label{padding-bottom:0;padding-top:8px}.popup-form .gform_button.button{height:38px;line-height:24px;width:22% !important;margin-left:22% !important;border:2px solid #fff}.popup-form .gform_heading{display:none} #gform_wrapper_5{background:#475564}.blog-form p{color:#fff;font-size:14px;text-align:center;line-height:20px;padding:15px 10px}.blog-form label{display:none !important}.blog-form label#label_5_4_1{display:block !important;color:#fff !important}.ginput_container.ginput_container_checkbox{padding:0 10px}.blog-form .gform_body ul li{ float:left !important;padding-right:0px!important;margin:0 !important;width:100% !important}.blog-form .gform_body ul li .ginput_container{float:left !important; width:100% !important}.blog-form .gform_body ul li .ginput_container_name span{padding-right:0px!important}.blog-form .medium{width:90% !important;border-radius:0;box-shadow:none;margin:0 5% !important;background:#fff;padding-right:0px !important;height:38px !important}.blog-form #input_5_1_3{width:90% !important;border-radius:0;box-shadow:none;margin:0 5% !important;background:#fff;padding-right:0px !important;height:38px !important}.blog-form .gform_footer.top_label{padding-bottom:0;padding-top:8px}.blog-form .gform_button.button{height:38px;line-height:24px;width:90% !important;margin:0 5% 10% 5% !important;border:2px solid #fff}.blog-form .gform_heading{display:none}@media only screen and (max-width:640px){.widget_nav_menu .menu{border:none !important;border-left:none !important} }@media only screen and (min-width:768px) and (max-width:1920px){.widget_nav_menu .menu{border-right:1px solid #787878!important;border-bottom:none !important} }.post-form{background:#475564}.post-form p{color:#fff;font-size:14px;text-align:left;line-height:20px;padding:20px 30px}.post-form .ginput_container.ginput_container_checkbox{margin-left:22px!important}.post-form label{display:none !important}.post-form label#label_5_4_1{display:block !important;color:#fff !important}.post-form .gform_body ul li{ float:left !important;padding-right:0px!important;margin:0 !important;width:100% !important}.post-form .gform_body ul li .ginput_container{float:left !important; width:100% !important}.post-form .gform_body ul li .ginput_container_name span{padding-right:0px!important}.post-form .medium{width:90% !important;border-radius:0;box-shadow:none;margin:0 5% !important;background:#fff;padding-right:0px !important;height:38px !important}.post-form #input_6_1_3{width:90% !important;border-radius:0;box-shadow:none;margin:0 5% !important;background:#fff;padding-right:0px !important;height:38px !important}.post-form .gform_footer.top_label{padding-bottom:0;padding-top:8px}.post-form .gform_button.button{height:38px;line-height:24px;width:90% !important;margin:0 5% 10% 5% !important;border:2px solid #fff}.post-form .gform_heading{display:none}.post-form label#label_6_4_1{display:block !important;color:#fff !important}@media only screen and (max-width:900px){ .blog-form{ display:none!important} }@media only screen and (max-width:640px){.post-form p{padding:20px 2px}.post-form_wrapper .post-form .gform_body ul li{ float:none !important;padding-right:0px!important;height:50px !important;margin:0 !important;width:92% !important}.post-form_wrapper .post-form .gform_body ul li.field_sublabel_below .ginput_complex{margin-top:60px!important}.post-form_wrapper .post-form .gform_body ul li input#input_6_1_3{float:none !important;padding-right:0px!important;margin:0 !important;width:100% !important}.post-form_wrapper .post-form .gform_body ul li label#label_6_4_1{ height:50px !important; float:right !important} .post-form_wrapper .post-form .gform_body ul li.gfield.field_sublabel_below.field_description_below.gfield_visibility_visible{margin:0% 0 0 4% !important}}@media only screen and (max-width:640px){ .slider-form #field_2_2>input{margin-bottom:0 !important;margin-top:14px !important}.slideout-form #field_3_2>input{margin-bottom:0 !important;margin-top:10px !important}.post-form #field_6_2>input{margin-bottom:0 !important;margin-top:14px !important} }.rev_slider_wrapper #rev_slider_1_1 ul li .slotholder .tp-bgimg.defaultimg{background-size:95% auto !important;background-position:25px 0px !important}.sub-slider .rev_slider_wrapper #rev_slider_9_1 ul li .slotholder .tp-bgimg.defaultimg{background-size:585px auto !important;background-position:110px 0px !important}.sub-slider .rev_slider_wrapper #rev_slider_7_1 ul li .slotholder .tp-bgimg.defaultimg{background-size:585px auto !important;background-position:110px 0px !important}.sub-slider .rev_slider_wrapper #rev_slider_8_1 ul li .slotholder .tp-bgimg.defaultimg{background-size:585px auto !important;background-position:110px 0px !important}.post-template-default.single.single-post .slide-popup-close{display:none}@media screen and (max-width:767px) and (min-width:320px).wpb_text_column .gf_browser_safari .slider-form .gform_body ul li{height:opx !important}
	</style>
	<div class="l-canvas sidebar_none type_wide">
		
		<?php include "include/main-menu.php";?>
		
		<div class="l-main">
			<div class="l-main-h i-cf">
				<main class="l-content" itemprop="mainContentOfPage">
					<section class="l-section wpb_row height_auto home-main">
						<div class="l-section-h i-cf">
							<div class="g-cols vc_row type_default valign_top">
								<div class="vc_col-sm-12 wpb_column vc_column_container homepage">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="g-cols wpb_row type_default valign_top vc_inner home-contact-form ">
												<div class="vc_col-sm-8 wpb_column vc_column_container">
													<div class="vc_column-inner">
														<div class="wpb_wrapper"></div>
													</div>
												</div>
												<div class="vc_col-sm-4 wpb_column vc_column_container home-form home-respo-border-bottom" id="homemain-form">
													<div class="vc_column-inner  vc_custom_1536827833513">
														<div class="wpb_wrapper">
															<div class="w-image align_center home-form-img">
																<div class="w-image-h">
																	<img width="214" height="79" src="img/logo.png" class="attachment-full size-full" alt="">
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
										<div class="g-cols wpb_row type_default valign_top vc_inner home-slider ">
											<div class="vc_col-sm-12 wpb_column vc_column_container">
												<div class="vc_column-inner  vc_custom_1532496230282">
													<div class="wpb_wrapper">
														<div class="wpb_revslider_element wpb_content_element">
															<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin: 0px auto; background: transparent; padding: 0px; height: 585px; overflow: visible;">
																<!-- START REVOLUTION SLIDER 5.4.7.4 auto mode -->
																<div id="rev_slider_1_1" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus" style="margin-top: 0px; margin-bottom: 0px; height: 585px;" data-version="5.4.7.4" data-slideactive="rs-26">
																	<ul class="tp-revslider-mainul" style="display: block; overflow: hidden; width: 998px; height: 100%; max-height: none; left: 0px;">
																		<!-- SLIDE  -->
																		<li data-index="rs-24" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: inherit; opacity: 0; background-color: rgba(255, 255, 255, 0);">
																			<!-- MAIN IMAGE -->
																			<div class="slotholder" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
																				<div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url('img/eng.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="img/eng.jpg"></div>
																			</div>
																			<!-- LAYERS -->
																			<!-- LAYER NR. 1 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 24px; top: 0px; z-index: 5;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-24-layer-15" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]" data-width="110" data-height="585" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[,,,]" data-paddingright="[,,,]" data-paddingbottom="[,,,]" data-paddingleft="[,,,]" style="z-index: 5; background-color: rgba(251, 251, 251, 0.8); visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 28px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 585px; min-width: 110px; max-height: 585px; max-width: 110px; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;"></div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 2 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 30px; z-index: 6;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-24-layer-5" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;30&#39;,&#39;30&#39;,&#39;30&#39;,&#39;30&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon3_3_1.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="65" height="65" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 3 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 102px; z-index: 7;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-24-layer-6" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;102&#39;,&#39;102&#39;,&#39;102&#39;,&#39;102&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Proven Efficacy</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 4 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 146px; z-index: 8;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-24-layer-9" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;146&#39;,&#39;146&#39;,&#39;146&#39;,&#39;146&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon3_2_4.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="65" height="65" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 5 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 220px; z-index: 9;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-24-layer-11" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;220&#39;,&#39;220&#39;,&#39;220&#39;,&#39;220&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">6 minutes twice daily</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 6 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 261px; z-index: 10;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-24-layer-12" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;261&#39;,&#39;261&#39;,&#39;261&#39;,&#39;261&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon3_1_4.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="65" height="65" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 7 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 333px; z-index: 11;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-24-layer-13" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;333&#39;,&#39;333&#39;,&#39;333&#39;,&#39;333&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Easy and Safe</div>
																					</div>
																				</div>
																			</div>
																		</li>
																		<!-- SLIDE  -->
																		<li data-index="rs-25" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: inherit; opacity: 0; background-color: rgba(255, 255, 255, 0);">
																			<!-- MAIN IMAGE -->
																			<div class="slotholder" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
																				<div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url('img/eng.png'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="img/eng.png"></div>
																			</div>
																			<!-- LAYERS -->
																			<!-- LAYER NR. 8 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 24px; top: 0px; z-index: 5;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-25-layer-15" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]" data-width="110" data-height="585" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[,,,]" data-paddingright="[,,,]" data-paddingbottom="[,,,]" data-paddingleft="[,,,]" style="z-index: 5; background-color: rgba(251, 251, 251, 0.8); visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 28px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 585px; min-width: 110px; max-height: 585px; max-width: 110px; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;"></div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 9 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 30px; z-index: 6;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-5" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;30&#39;,&#39;30&#39;,&#39;30&#39;,&#39;30&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon2_1_2.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="65" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 10 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 102px; z-index: 7;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-6" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;102&#39;,&#39;102&#39;,&#39;102&#39;,&#39;102&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Reduces Pain</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 11 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 146px; z-index: 8;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-9" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;146&#39;,&#39;146&#39;,&#39;146&#39;,&#39;146&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon2_2_0_0.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="67" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 12 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 220px; z-index: 9;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-11" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;220&#39;,&#39;220&#39;,&#39;220&#39;,&#39;220&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">6-8 Min. twice daily</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 13 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 261px; z-index: 10;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-12" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;261&#39;,&#39;261&#39;,&#39;261&#39;,&#39;261&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon2_4_0.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="65" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 14 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 333px; z-index: 11;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-13" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;333&#39;,&#39;333&#39;,&#39;333&#39;,&#39;333&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Enhanced Efficacy</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 15 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 47px; top: 378px; z-index: 12;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-17" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;378&#39;,&#39;378&#39;,&#39;378&#39;,&#39;378&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon2_3_0.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="65" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 16 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; left: 39px; top: 450px; z-index: 13;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-25-layer-18" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;450&#39;,&#39;450&#39;,&#39;450&#39;,&#39;450&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Faster Healing</div>
																					</div>
																				</div>
																			</div>
																		</li>
																		<!-- SLIDE  -->
																		<li data-index="rs-26" class="tp-revslider-slidesli active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1; background-color: rgba(255, 255, 255, 0);">
																			<!-- MAIN IMAGE -->
																			<div class="slotholder" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
																				<div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url('img/eng1.png'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="img/eng1.png"></div>
																			</div>
																			<!-- LAYERS -->
																			<!-- LAYER NR. 17 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 24px; top: 0px; z-index: 5;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-26-layer-15" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]" data-width="110" data-height="585" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[,,,]" data-paddingright="[,,,]" data-paddingbottom="[,,,]" data-paddingleft="[,,,]" style="z-index: 5; background-color: rgba(251, 251, 251, 0.8); visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 28px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 585px; min-width: 110px; max-height: 585px; max-width: 110px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;"></div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 18 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 47px; top: 30px; z-index: 6;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-5" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;30&#39;,&#39;30&#39;,&#39;30&#39;,&#39;30&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon1_2_1.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="68" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 19 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 39px; top: 102px; z-index: 7;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-6" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;102&#39;,&#39;102&#39;,&#39;102&#39;,&#39;102&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Treats Inflammation</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 20 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 47px; top: 146px; z-index: 8;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-9" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;146&#39;,&#39;146&#39;,&#39;146&#39;,&#39;146&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon1_3_3.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="67" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 21 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 39px; top: 220px; z-index: 9;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-11" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;220&#39;,&#39;220&#39;,&#39;220&#39;,&#39;220&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Reduces Pain</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 22 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 47px; top: 261px; z-index: 10;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-12" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;261&#39;,&#39;261&#39;,&#39;261&#39;,&#39;261&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon1_1_3.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="67" height="67" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 23 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 39px; top: 333px; z-index: 11;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-13" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;333&#39;,&#39;333&#39;,&#39;333&#39;,&#39;333&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Faster Healing</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 24 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 47px; top: 378px; z-index: 12;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-17" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;23&#39;,&#39;23&#39;,&#39;23&#39;,&#39;23&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;378&#39;,&#39;378&#39;,&#39;378&#39;,&#39;378&#39;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
																							<img src="img/icon015_0.png" alt="" data-ww="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" data-hh="[&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;,&#39;65px&#39;]" width="68" height="68" data-no-retina="" style="width: 65px; height: 65px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- LAYER NR. 25 -->
																			<div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 39px; top: 450px; z-index: 13;">
																				<div class="tp-loop-wrap" style="position:absolute;display:block;;">
																					<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
																						<div class="tp-caption   tp-resizeme" id="slide-26-layer-18" data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]" data-hoffset="[&#39;15&#39;,&#39;15&#39;,&#39;15&#39;,&#39;15&#39;]" data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]" data-voffset="[&#39;450&#39;,&#39;450&#39;,&#39;450&#39;,&#39;450&#39;]" data-width="80" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 80px; max-width: 80px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 400; color: rgb(71, 85, 100); letter-spacing: 0px; font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none 0s ease 0s; text-align: center; border-width: 0px; margin: 0px; padding: 0px; min-height: 0px; max-height: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Enhanced Efficacy</div>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<!-- END REVOLUTION SLIDER -->
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
			<section class="l-section wpb_row height_auto with_overlay home-color">
				<div class="l-section-overlay" style="background-color: #eceeef"></div>
				<div class="l-section-h i-cf">
					<div class="g-cols vc_row type_default valign_top">
						<div class="vc_col-sm-12 wpb_column vc_column_container home-boxes">
							<div class="vc_column-inner  vc_custom_1529583316293 color_custom" style="color:#ffffff;">
								<div class="wpb_wrapper">
									<div class="g-cols wpb_row type_default valign_top vc_inner  vc_custom_1532501288513">
										<div class="vc_col-sm-3 wpb_column vc_column_container has-fill home-orange" id="home-color-box">
											<div class="vc_column-inner  vc_custom_1530614523648 color_custom" style="color:#ffffff;">
												<div class="wpb_wrapper">
													<div class="ult-content-box-container ">
														<div class="ult-content-box" style="background-color: rgb(247, 143, 30); padding-bottom: 2px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent; box-shadow: none;" data-hover_box_shadow="none" data-bg="#f78f1e" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
															<div class="w-image align_center vc_custom_1529585080570">
																<div class="w-image-h">
																	<img width="237" height="54" src="img/logo1_0.png" class="attachment-full size-full" alt="">
																</div>
															</div>
															<h2 style="font-size: 20px;color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1530611664450"><a href="#"><b>B-Cure Laser Classic</b></a></h2>
															<div class="wpb_text_column  vc_custom_1529594035923">
																<div class="wpb_wrapper">
																	<p><a>Home device for orthopedic and pain problems </a>
																	</p>
																</div>
															</div>
															<div class="ult-spacer spacer-5bfdde087ca30" data-id="5bfdde087ca30" data-height="0" data-height-mobile="" data-height-tab="10" data-height-tab-portrait="36" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
															<div class=" vc_custom_1529758464029 ubtn-ctn-right ">
																<a class="ubtn-link ult-adjust-bottom-margin ubtn-right ubtn-custom " href="classic.php" target="_blank" rel="noopener">
																	<button type="button" id="ubtn-4015" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-right   tooltip-5bfdde087cb96" data-hover="#f78f1e" data-border-color="#ffffff" data-bg="" data-hover-bg="#ffffff" data-border-hover="#ffffff" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-4015" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:normal;width:135px;min-height:28px;padding:px px;border-radius:0px;border-width:1px;border-color:#ffffff;border-style:solid;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(255, 255, 255);"></span><span class="ubtn-data ubtn-text ">Read More</span>
																	</button>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_col-sm-3 wpb_column vc_column_container has-fill home-red" id="home-color-box">
											<div class="vc_column-inner  vc_custom_1530613989829">
												<div class="wpb_wrapper">
													<div class="ult-content-box-container ">
														<div class="ult-content-box" style="background-color: rgb(239, 65, 53); padding-bottom: 2px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent; box-shadow: none;" data-hover_box_shadow="none" data-bg="#ef4135" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
															<div class="w-image align_center vc_custom_1529594779716">
																<div class="w-image-h">
																	<img width="237" height="54" src="img/sport_logo.png" class="attachment-full size-full" alt="">
																</div>
															</div>
															<h2 style="font-size: 20px;color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1530612026347"><a href="sports.php"><b>B-Cure Laser Sport</b></a></h2>
															<div class="wpb_text_column  vc_custom_1530599262851">
																<div class="wpb_wrapper">
																	<p><a>LLLT for acute and chronic sports injuries</a>
																	</p>
																</div>
															</div>
															<div class="ult-spacer spacer-5bfdde087db22" data-id="5bfdde087db22" data-height="0" data-height-mobile="" data-height-tab="10" data-height-tab-portrait="36" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
															<div class=" vc_custom_1529758490931 ubtn-ctn-right ">
																<a class="ubtn-link ult-adjust-bottom-margin ubtn-right ubtn-custom " href="sports.php" target="_blank" rel="noopener">
																	<button type="button" id="ubtn-3289" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-right   tooltip-5bfdde087dc69" data-hover="#ef4135" data-border-color="#ffffff" data-bg="" data-hover-bg="#ffffff" data-border-hover="#ffffff" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-3289" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:normal;width:135px;min-height:28px;padding:px px;border-radius:0px;border-width:1px;border-color:#ffffff;border-style:solid;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(255, 255, 255);"></span><span class="ubtn-data ubtn-text ">Read More</span>
																	</button>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_col-sm-3 wpb_column vc_column_container has-fill home-green" id="home-color-box">
											<div class="vc_column-inner  vc_custom_1530614929158">
												<div class="wpb_wrapper">
													<div class="ult-content-box-container ">
														<div class="ult-content-box" style="background-color: rgb(0, 172, 123); padding-bottom: 2px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent; box-shadow: none;" data-hover_box_shadow="none" data-bg="#00ac7b" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
															<div class="w-image align_center vc_custom_1529597272843">
																<div class="w-image-h">
																	<img width="237" height="54" src="img/dental-laser_logo_0.png" class="attachment-full size-full" alt="">
																</div>
															</div>
															<h2 style="font-size: 20px;color: #ffffff;text-align: left" class="vc_custom_heading vc_custom_1530612032533"><a href="dental-laser.php"><b>B-Cure Dental Laser</b></a></h2>
															<div class="wpb_text_column  vc_custom_1529597244659">
																<div class="wpb_wrapper">
																	<p><a>Brakethrough treatment for gum problems</a>
																	</p>
																</div>
															</div>
															<div class="ult-spacer spacer-5bfdde087ec2e" data-id="5bfdde087ec2e" data-height="0" data-height-mobile="" data-height-tab="10" data-height-tab-portrait="36" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
															<div class=" vc_custom_1529758518446 ubtn-ctn-right ">
																<a class="ubtn-link ult-adjust-bottom-margin ubtn-right ubtn-custom " href="dental-laser.php" rel="noopener">
																	<button type="button" id="ubtn-5124" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-right   tooltip-5bfdde087ed77" data-hover="#00ac7b" data-border-color="#ffffff" data-bg="" data-hover-bg="#ffffff" data-border-hover="#ffffff" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-5124" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:normal;width:135px;min-height:28px;padding:px px;border-radius:0px;border-width:1px;border-color:#ffffff;border-style:solid;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(255, 255, 255);"></span><span class="ubtn-data ubtn-text ">Read More</span>
																	</button>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_col-sm-3 wpb_column vc_column_container home-black">
											<div class="vc_column-inner  vc_custom_1530599273304">
												<div class="wpb_wrapper">
													<div class="wpb_text_column ">
														<div class="wpb_wrapper">
															<div class="views-field views-field-field-doctors-list">
																<div class="field-content">
																	<div class="item-list"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="ult-content-box-container ">
														<div class="ult-content-box" style="background-color: rgb(71, 85, 100); padding-bottom: 3px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent; box-shadow: none;" data-hover_box_shadow="none" data-bg="#475564" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
															<h5 style="color: #475564;text-align: center" class="vc_custom_heading vc_custom_1529600811692"><b>Professional Devices</b></h5>
															<div class="wpb_text_column  vc_custom_1529597815041">
																<div class="wpb_wrapper">
																	<ul>
																		<li class="first"><a href="#">Sports medicine</a>
																		</li>
																		<li class="last"><a href="#">Mouth and Jaw</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="ult-spacer spacer-5bfdde087f810" data-id="5bfdde087f810" data-height="35" data-height-mobile="" data-height-tab="45" data-height-tab-portrait="62" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
															<div class=" vc_custom_1529758586957 ubtn-ctn-right ">
																<a class="ubtn-link ult-adjust-bottom-margin ubtn-right ubtn-custom " href="dental-pro.php" target="_blank" rel="noopener">
																	<button type="button" id="ubtn-5179" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-right   tooltip-5bfdde087f957" data-hover="#475564" data-border-color="#ffffff" data-bg="" data-hover-bg="#ffffff" data-border-hover="#ffffff" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-5179" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:normal;width:135px;min-height:28px;padding:px px;border-radius:0px;border-width:1px;border-color:#ffffff;border-style:solid;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(255, 255, 255);"></span><span class="ubtn-data ubtn-text ">Read More</span>
																	</button>
																</a>
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
			<section class="l-section wpb_row height_medium home-video">
				<div class="l-section-h i-cf">
					<div class="g-cols vc_row type_default valign_top">
						<div class="vc_col-sm-12 wpb_column vc_column_container">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div class="g-cols wpb_row type_default valign_top vc_inner ">
										<div class="vc_col-sm-4 wpb_column vc_column_container home-respo-border-bottom">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="w-video ratio_16x9">
														<div class="w-video-h">
															<iframe src="https://www.youtube.com/embed/jorbtFU_7k0?feature=oembed" allowfullscreen></iframe>
														</div>
													</div>
													<h4 style="font-size: 14px;color: #f78f1e;line-height: 18px;text-align: left" class="vc_custom_heading"><b>Olympic team about B-Cure Laser</b></h4>
													<div class="ult-spacer spacer-5bfdde0880939" data-id="5bfdde0880939" data-height="20" data-height-mobile="20" data-height-tab="20" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
													<div class=" vc_custom_1529607170168 ubtn-ctn-center ">
														<a class="ubtn-link ult-adjust-bottom-margin ubtn-center ubtn-custom " href="#" rel="noopener">
															<button type="button" id="ubtn-4668" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-center   tooltip-5bfdde0880a85" data-hover="#ffffff" data-border-color="#f78f1e" data-bg="#f78f1e" data-hover-bg="#f77f00" data-border-hover="#f78f1e" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-4668" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:bold;width:300px;min-height:40px;padding:px px;border-radius:1px;border-width:1px;border-color:#f78f1e;border-style:solid;background: #f78f1e;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(247, 127, 0);"></span><span class="ubtn-data ubtn-text ">More Movies</span>
															</button>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_col-sm-4 wpb_column vc_column_container has-fill home-reviews home-respo-border-bottom">
											<div class="vc_column-inner  vc_custom_1536148972378">
												<div class="wpb_wrapper">
													<h3 style="font-size: 18px;color: #00ac7b;text-align: left" class="vc_custom_heading">
																<b>Doctors<br>
																recommendations</b>
															</h3>
													<div class="w-grid type_carousel layout_1785" id="us_grid_1">
														<div class="w-grid-list owl-carousel owl-loaded owl-drag">
															<div class="owl-stage-outer owl-height" style="height: 145px;">
																<div class="owl-stage" style="transform: translate3d(-1132px, 0px, 0px); transition: all 0.25s ease 0s; width: 3113px;">
																	<div class="owl-item cloned" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1600 us_testimonial type-us_testimonial status-publish hentry" data-id="1600">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item cloned" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1599 us_testimonial type-us_testimonial status-publish hentry" data-id="1599">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item cloned" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1591 us_testimonial type-us_testimonial status-publish hentry" data-id="1591">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1607 us_testimonial type-us_testimonial status-publish hentry" data-id="1607">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item active" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1606 us_testimonial type-us_testimonial status-publish hentry" data-id="1606">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1600 us_testimonial type-us_testimonial status-publish hentry" data-id="1600">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1599 us_testimonial type-us_testimonial status-publish hentry" data-id="1599">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1591 us_testimonial type-us_testimonial status-publish hentry" data-id="1591">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item cloned" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1607 us_testimonial type-us_testimonial status-publish hentry" data-id="1607">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item cloned" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1606 us_testimonial type-us_testimonial status-publish hentry" data-id="1606">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
																	<div class="owl-item cloned" style="width: 283px;">
																		<article class="w-grid-item ratio_1x1 post-1600 us_testimonial type-us_testimonial status-publish hentry" data-id="1600">
																			<div class="w-grid-item-h">
																				<div class="w-vwrapper usg_vwrapper_2 align_left valign_top ">
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
													<div class="ult-spacer spacer-5bfdde088bfab" data-id="5bfdde088bfab" data-height="20" data-height-mobile="20" data-height-tab="20" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
													<div class=" vc_custom_1529607210896 ubtn-ctn-center ">
														<a class="ubtn-link ult-adjust-bottom-margin ubtn-center ubtn-custom " href="#" rel="noopener">
															<button type="button" id="ubtn-5580" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-center   tooltip-5bfdde088c0df" data-hover="#ffffff" data-border-color="#00ac7b" data-bg="#00ac7b" data-hover-bg="#00ac7b" data-border-hover="#00ac7b" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-5580" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:bold;width:300px;min-height:40px;padding:px px;border-radius:1px;border-width:1px;border-color:#00ac7b;border-style:solid;background: #00ac7b;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(0, 172, 123);"></span><span class="ubtn-data ubtn-text ">More Recomendations</span>
															</button>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_col-sm-4 wpb_column vc_column_container home-respo-border-bottom">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="w-image align_center">
														<div class="w-image-h">
															<img width="257" height="151" src="img/medica.jpg" class="attachment-full size-full" alt="">
														</div>
													</div>
													<div class="ult-spacer spacer-5bfdde088cc0d" data-id="5bfdde088cc0d" data-height="63" data-height-mobile="63" data-height-tab="63" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
													<div class=" vc_custom_1529607221356 ubtn-ctn-center ">
														<a class="ubtn-link ult-adjust-bottom-margin ubtn-center ubtn-custom " href="#" rel="noopener">
															<button type="button" id="ubtn-1184" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-center   tooltip-5bfdde088cd6d" data-hover="#ffffff" data-border-color="#475564" data-bg="#475564" data-hover-bg="#475564" data-border-hover="#475564" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-1184" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:bold;width:300px;min-height:40px;padding:px px;border-radius:1px;border-width:1px;border-color:#475564;border-style:solid;background: #475564;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-double-right" style="font-size:20px;color:;"></i></span><span class="ubtn-hover" style="background: rgb(71, 85, 100);"></span><span class="ubtn-data ubtn-text ">Visit us at</span>
															</button>
														</a>
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
			<section class="l-section wpb_row height_medium home-form-bottom">
				<div class="l-section-h i-cf">
					<div class="g-cols vc_row type_default valign_top">
						<div class="vc_col-sm-4 wpb_column vc_column_container">
							<div class="vc_column-inner">
								<div class="wpb_wrapper"></div>
							</div>
						</div>
						<div class="vc_col-sm-4 wpb_column vc_column_container">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<h6 style="font-size: 13px;text-align: left" class="vc_custom_heading vc_custom_1534921074676">
										<b>For further information please leave your contact details here</b>
									</h6>
									<div class="wpb_text_column ">
										<?php include ('include/home-form.php'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_col-sm-4 wpb_column vc_column_container">
							<div class="vc_column-inner">
								<div class="wpb_wrapper"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="l-section wpb_row height_auto pageload-popup" style="padding-top: 0px !important;padding-bottom: 0px !important;">
				<div class="l-section-h i-cf">
					<div class="g-cols vc_row type_default valign_top">
						<div class="vc_col-sm-12 wpb_column vc_column_container">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div id="modal-trg-txt-wrap-6083" class="ult-modal-input-wrapper ult-adjust-bottom-margin   ult_hide_modal_value " data-keypress-control="keypress-control-enable" data-overlay-control="overlay-control-enable">
										<div data-class-id="content-5bfdde088f7208-97507826" class="ult-onload overlay-show " data-overlay-class="overlay-zoomin" data-onload-delay="60"></div>
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