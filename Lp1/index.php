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
<html dir="LTR" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/main.css">
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
    <link rel="shortlink" href="http://painlesslife.co.uk/lp1/?sl=1">
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
                                                    <p>Do you suffer from back pain, knee pain, sciatica? </p>
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
                                                                        <h3 class="elementor-headline"> <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"><span class="elementor-headline-dynamic-text elementor-headline-text-active">Now on special offer.</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7"></path></svg></span></h3></div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-itsfwns elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Do you also want to try the B-Cure Laser at home for 30 days and find out that it works? Leave your details!</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-05xtb7v elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-shortcode">
                                                                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                                                                                <a id="gf_2" class="gform_anchor"></a>
                                                                                <form onsubmit="return validateRegisterForm()" autocomplete="off" method="post" action="../get_registration.asp" class="formCC" style="padding: 10px;">
                                                                                    <input type="hidden" name="goto" id="goto" value="<?=$paymentPage ?>">
                                                                                    <input type="hidden" name="fromWhere" id="fromWhere" value="LP">
                                                                                    <input type="hidden" name="ref" id="ref" value="<?=$ref ?>">
                                                                                    <input type="hidden" name="coupon" id="coupon" value="<?= $coupon ?>">
                                                                                    <input type="hidden" name="game" id="game" value="<?=$game ?>">
                                                                                    <input type="hidden" name="aff_id" id="aff_id" value="<?=$aff_id ?>">
                                                                                    <input type="hidden" name="aff_key" id="aff_key" value="<?=$aff_key ?>">
                                                                                    <input type="hidden" name="affTranID" id="affTranID" value="<?=$affTranID ?>">
                                                                                    <input type="hidden" name="lang" id="lang" value="<?=$lang?>">
                                                                                    <div class="gform_body">
                                                                                        <ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                                                                                            <li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                                                <label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label>
                                                                                                <div class="ginput_container ginput_container_text">
                                                                                                    <input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Name*" aria-required="true" aria-invalid="false">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                                                <label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label>
                                                                                                <input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*">
                                                                                            </li>
                                                                                            <li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                                                <label class="gfield_label" for="input_2_3">Email</label>
                                                                                                <input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email">
                                                                                            </li>
                                                                                            <li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                                <input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג">
                                                                                            </li>
                                                                                            <li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                                <input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000">
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="gform_footer top_label">
                                                                                        <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="2">
                                                                                    </div>
                                                                                </form>
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
                                                                                <img width="88" height="88" src="./img/mli_1.png" class="attachment-full size-full lazyloaded">
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
                <section class="elementor-element elementor-element-8n11lac elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-tablet elementor-hidden-phone elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-7t1e7ro elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-element elementor-element-to8f1di elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-o8fiqvb elementor-column elementor-col-100 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-9wq0txu elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">Dr James Craig (Dr Hagai Amir) explains the advantages of B-Cure Laser</div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-qphif83 elementor-aspect-ratio-169 elementor-widget elementor-widget-video">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                            <div class="embed">
                                                                                <iframe src="https://www.youtube.com/embed/zzKPlgUH9uA" allowfullscreen></iframe>
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
                                        <section class="elementor-element elementor-element-tr6v1gc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-xcjtm94 elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-mbfm3ic elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Mickey Berkowitz</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-fyfx4oj elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-element elementor-element-0vbs8xh elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-kmbc9as elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-y7ksabm elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="369" height="251" src="img/facebook_3.png" class="attachment-large size-large">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-wkrrjzv elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-kmve05i elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">In the race of life, do not let pain stop you. </h2></div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-uey942b elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">Tens of thousands of patients use B-Cure Laser for the relief of pain from orthopaedic problems and infections, and they have returned to being their old selves.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-element elementor-element-p918yd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-b6xg6w1 elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-hcsdg26 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Patient recommendations</p>
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
                                                                            <img width="326" height="214" src="img/facebook_4.png" class="attachment-large size-large">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-4xacolq elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">"I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation. "</div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-28rpdbp elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                <br class="desktop">
                                                                                <br class="desktop">
                                                                            </p>
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
                                                                            <img width="325" height="214" src="img/facebook_5.jpg" class="attachment-large size-large" />
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
                                                                            <img width="325" height="214" src="img/shutterstock.jpg" class="attachment-large size-large" />
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
                                                    <p>Do you suffer from back pain, knee pain, sciatica? </p>
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
                                                <h3 class="elementor-headline"> <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"><span class="elementor-headline-dynamic-text elementor-headline-text-active">Now on special offer.</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7"></path></svg></span></h3></div>
                                        </div>
                                        <div class="elementor-element elementor-element-f2b540e elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Do you also want to try the B-Cure Laser at home for 30 days and find out that it works? Leave your details!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ukx07za elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                                                        <a id="gf_2" class="gform_anchor"></a>
                                                        <form method="post" enctype="multipart/form-data" id="gform_2" action="http://bcurelaser.co.il/bc/rem/#gf_2">
                                                            <div class="gform_body">
                                                                <ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                                                                    <li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                        <label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label>
                                                                        <div class="ginput_container ginput_container_text">
                                                                            <input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="3" placeholder="Name*" aria-required="true" aria-invalid="false">
                                                                        </div>
                                                                    </li>
                                                                    <li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                        <label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label>
                                                                        <input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*">
                                                                    </li>
                                                                    <li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                        <label class="gfield_label" for="input_2_3">Email</label>
                                                                        <input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email">
                                                                    </li>
                                                                    <li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible">
                                                                        <input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג">
                                                                    </li>
                                                                    <li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible">
                                                                        <input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="gform_footer top_label">
                                                                <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="4" onclick="        if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  " onkeypress="        if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} window[&quot;gf_submitting_2&quot;]=true;  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }">
                                                                <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
                                                                <input type="hidden" class="gform_hidden" name="gform_submit" value="2">
                                                                <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                                                <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImFkYzIyMmJjOWUxMzFiOWIzYmNkMTRiOTg4ZmU5YTE0Il0=">
                                                                <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0">
                                                                <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1">
                                                                <input type="hidden" name="gform_field_values" value="">
                                                            </div>
                                                        </form>
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
                                        <section class="elementor-element elementor-element-90ongi1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-850wa8y elementor-column elementor-col-100 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-ee8suo8 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Dr James Craig (Dr Hagai Amir) explains the advantages of B-Cure Laser</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-twbbl3h elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-element_type="video.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                            <div class="embed">
                                                                                <iframe src="https://www.youtube.com/embed/zzKPlgUH9uA?feature=oembed" allowfullscreen></iframe>
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
                                                                                <img width="88" height="88" src="img/shutterstock.jpg" class="attachment-full size-full" alt="">
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
                </section>
                <section class="elementor-element elementor-element-eqwky0s elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-hidden-desktop elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"></path>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-wn9uby8 elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-element elementor-element-46k25kj elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-pm7cil9 elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-6940kmx elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Mickey Berkowitz</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-kl0y06s elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-element elementor-element-sd5s8oj elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-tb34zeh elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-a5t8l3v elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="369" height="251" src="img/facebook_2.png" class="attachment-large size-large" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-mxc18z5 elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-kdoqw2w elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">In the race of life, do not let pain stop you. </h2></div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-jgp0jx4 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Tens of thousands of patients use B-Cure Laser for the relief of pain
                                                                                <br>from orthopaedic problems and infections, and they have returned
                                                                                <br>to being their old selves..
                                                                                <br>
                                                                                <br>B-Cure Laser is clinically proven and recommended by international professionals
                                                                                <br>as an effective treatment, natural and non-invasive, with no known side effects.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-element elementor-element-dayx877 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-do1v4xr elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-c7t6wz6 elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Patient recommendations</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9xyt28w elementor-column elementor-col-50 elementor-inner-column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-element elementor-element-4ztsm9c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-lh640hx elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-q847sj5 elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="326" height="214" src="img/facebook_3.png" class="attachment-large size-large"/>                  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-q4kn4ol elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">"I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation. "</div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-va9eeta elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>I suffered from severe knee pain and was a candidate for surgery, but with the B-Cure laser, the pain measurably decreased. The result was a significant improvement in the quality of life, so I cancelled the operation.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2jeze4f elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-279dokd elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="325" height="214" src="img/facebook_4.png">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-xqn343f elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>I’m back to my own self and going out with friends.”
                                                                                <br>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-jojin1q elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>"A health professional recommended B-Cure Laser, and I treated myself at home several times a day, and to my amazement, not only did the pain decrease, but the problem itself disappeared.”I’m back to my own self and going out with friends.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-k9lepn7 elementor-column elementor-col-33 elementor-inner-column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-wiqmxb2 elementor-widget elementor-widget-image">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="325" height="214" src="img/facebook_5.jpg" class="attachment-large size-large">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-kqnugkr elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>“We bought the device, and within two days he began to feel better.”
                                                                                <br class="desktop">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7gsxeuk elementor-widget elementor-widget-text-editor">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>"John has suffered from ankle pain for many years and tried various treatments - elastic bandages, special shoes, ankle braces
                                                                                <br class="desktop">br but that did not solve the problem - we bought the device, and within two days he began to feel better."</p>
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
                <section class="elementor-element elementor-element-frnu8ue elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-z5470ai elementor-column elementor-col-100 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-hvjkrql elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Leave Your Details Here:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b9vgon6 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                                                        <a id="gf_2" class="gform_anchor"></a>
                                                        <form method="post" enctype="multipart/form-data" id="gform_2" action="http://bcurelaser.co.il/bc/rem/#gf_2">
                                                            <div class="gform_body">
                                                                <ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                                                                    <li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                        <label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label>
                                                                        <div class="ginput_container ginput_container_text">
                                                                            <input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="5" placeholder="Name*" aria-required="true" aria-invalid="false">
                                                                        </div>
                                                                    </li>
                                                                    <li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                        <label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label>
                                                                        <input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*">
                                                                    </li>
                                                                    <li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                                        <label class="gfield_label" for="input_2_3">Email</label>
                                                                        <input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email">
                                                                    </li>
                                                                    <li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible">
                                                                        <input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג">
                                                                    </li>
                                                                    <li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible">
                                                                        <input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="gform_footer top_label">
                                                                <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="6" onclick="                                                            if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  " onkeypress="                                                            if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} window[&quot;gf_submitting_2&quot;]=true;  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }">
                                                                <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
                                                                <input type="hidden" class="gform_hidden" name="gform_submit" value="2">
                                                                <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                                                <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImFkYzIyMmJjOWUxMzFiOWIzYmNkMTRiOTg4ZmU5YTE0Il0=">
                                                                <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0">
                                                                <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1">
                                                                <input type="hidden" name="gform_field_values" value="">
                                                            </div>
                                                        </form>
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
                <section class="elementor-element elementor-element-tua73m7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-sumvmnj elementor-column elementor-col-50 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-ju6tk1d elementor-widget elementor-widget-text-editor">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>
                                                        A device does not replace medical treatment as recommended by a physician.
                                                        The PI sheet should be read before use.
                                                    </p>
                                                    <p dir="LTR"><span lang="EN" style="font-size: 11.5pt; font-family: Arial,sans-serif; color: #475564; letter-spacing: -.4pt;">
                                                * The device does not replace medical treatment as recommended by a physician</span>
                                                        <span dir="LTR" style="font-size: 11.5pt; font-family: OpenSansHebrew-Regular; color: #475564; letter-spacing: -.4pt;">.&nbsp;<br> </span>
                                                        <span lang="EN" style="font-size: 11.5pt; font-family: Arial,sans-serif; color: #475564; letter-spacing: -.4pt;">The experience is subject to the regulations</span>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-37w1m0s elementor-column elementor-col-50 elementor-top-column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-lrfkdpp elementor-widget elementor-widget-image">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img width="187" height="53" src="img/facebook_2.png" class="attachment-large size-large" alt="" />
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script type="text/javascript">
        jQuery(document).bind('gform_post_render', function(event, formId, currentPage) {
            if (formId == 2) {
                if (typeof Placeholders != 'undefined') {
                    Placeholders.enable();
                }
            }
        });
        jQuery(document).ready(function() {
            jQuery(document).trigger('gform_post_render', [2, 1])
        });
    </script>
</body>

</html>