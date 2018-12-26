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
$t = empty($_GET['t']) ? '' : $_GET['t'];
$r = empty($_GET['r']) ? '' : $_GET['r'];
$a = empty($_GET['a']) ? '' : $_GET['a'];
$m = empty($_GET['m']) ? '' : $_GET['m'];

$paymentPage = 'payshortlpbp';
$country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? $_SERVER['HTTP_CF_IPCOUNTRY']:'';
$countryLower = strtolower($country);
$m = empty($_GET['m']) ? '000' : $_GET['m'];
if($color == 2){
    $paymentPage = 'paymentShort2c';
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bcure </title>
    <link href="iframe.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type='text/javascript'>
  window._tfa = window._tfa || [];
  window._tfa.push({notify: 'event', name: 'page_view', id: 1150032});
  !function (t, f, a, x) {
         if (!document.getElementById(x)) {
            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
         }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/unip/1150032/tfa.js',
  'tb_tfa_script');
</script>
<noscript>
  <img src='//trc.taboola.com/1150032/log/3/unip?en=page_view'
      width='0' height='0' style='display:none'/>
</noscript>
<script data-obct type="text/javascript">
  /** DO NOT MODIFY THIS CODE**/
  !function(_window, _document) {
    var OB_ADV_ID='009ba77e9147ff5ebef1e50937b61dd077';
    if (_window.obApi) {var toArray = function(object) {return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];};_window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));return;}
    var api = _window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.1';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = _document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
obApi('track', 'PAGE_VIEW');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120830425-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120830425-1');
</script>



<!-- Global site tag (gtag.js) - Google Ads: 800598159 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-800598159"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-800598159');
</script>



</head>
<body>
<form class="formCC" autocomplete="off" method="post" action="register_action.php">
    <input type="hidden" name="goto" id="goto" value="<?=$paymentPage ?>">
    <input type="hidden" name="fromWhere" id="fromWhere" value="LP">
    <input type="hidden" name="ref" id="ref" value="<?=$ref ?>">
    <input type="hidden" name="coupon" id="coupon" value="<?= $coupon ?>">
    <input type="hidden" name="game" id="game" value="<?=$game ?>">
    <input type="hidden" name="aff_id" id="aff_id" value="<?=$aff_id ?>">
    <input type="hidden" name="aff_key" id="aff_key" value="<?=$aff_key ?>">
    <input type="hidden" name="affTranID" id="affTranID" value="<?=$affTranID ?>">
    <input type="hidden" name="lang" id="lang" value="<?=$lang?>">
    <input type="hidden" name="t" id="t" value="<?=$t?>">
    <input type="hidden" name="r" id="r" value="<?=$r?>">
    <input type="hidden" name="a" id="a" value="<?=$a?>">
    <input type="hidden" name="m" id="m" value="<?=$m?>">
    <p class="alert"></p>
    <div dir="ltr">
        <div class="custom-cf style-cf-1 clearfix" style="border:0px; width: 90%;">
            <!--div class="custom-cf-title" style="text-align:left;">One of Our Experts Is Waiting for You</div>
            <p></p-->

            <!--h1 style="font-weight: bolder; font-size: 35px; font-family: Arial, Helvetica, sans-serif;">Now On a special offer - 25% off + free gift</h1-->
                <div class="cf-input-wrap clearfix">
                    <div class="cf-item cf-reg-input">
                        <span class="wpcf7-form-control-wrap name">
                            <input type="text" name="first_name" id="first_name" value="" size="80" class="rounded wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="FULL NAME" required>
                        </span>
                    </div>
                    <div class="cf-item cf-reg-input">
                        <span class="wpcf7-form-control-wrap phone"><input type="text" name="MobilePhone" id="MobilePhone" value="" size="80" maxlength="11" minlength="9" class="rounded wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="MOBILE NUMBER" required></span>
                    </div>
                    <div class="cf-item cf-reg-input">
                        <span class="wpcf7-form-control-wrap email"><input type="email" name="email" id="email" value="" size="80" class="rounded wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="EMAIL" required></span>
                    </div>
                </div>
                <div class="cf-btn-wrapper">
                    <button class="cf-submit-btn" type="submit" value="Get 25% OFF" >
                        <span>Yes, I want my 25% disccount & a free gift!</span>
                    </button>
                    <span class="glyphicon glyphicon-chevron-right cf-chevron"></span>
                </div>
          
        </div>
    </div>
</form>
<script src="LP1/js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {
    $('.cf-chevron').click(function (e) {
        $('.cf-submit-btn').click();
    });
    $(".formCC").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        form.find('.alert').css('display', 'none');
        var parentDiv = form.parent();
        var url = form.attr('action');
        $.ajax( {
            url: url,
            type: "post",
            dataType: "json",
            async:false,
            cache:false,
            data: form.serialize(),
            success: function (res) {
                if (res.data) {
                    form.remove();
                    var inhtml = "<div style='background:#00855F; color:#fff; padding: 10px 20px;'><h2>Thanks</h2><p>Thank you, your request has been received. Our representative will contact you shortly</p></div>";
                    parentDiv.append(inhtml);
					obApi('track', 'Leads New');
					 _tfa.push({notify: 'event', name: 'lead', id: 1150032});

					 gtag('event', 'Lead', {
  'event_category': 'Registration',
  'event_label': '',
  'value': 1
});

  gtag('event', 'conversion', {'send_to': 'AW-800598159/p_y_CLmd4IoBEI_R4P0C'});



                }
                else {
                    form.find('.alert').css('display', 'block');
                    form.find('.alert').html(res.status.message);
                }
            }
        });
        return false;
    });
});
</script>
</body>
</html>