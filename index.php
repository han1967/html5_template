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
    <title>Bcure Iframe</title>
    <link href="iframe.css" rel="stylesheet" type="text/css">
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
        <div class="custom-cf style-cf-1 clearfix" style="background:#fff; border:1px solid #360;">
        <div class="custom-cf-title" style="text-align:left;">One of Our Experts Is Waiting for You</div>
        <p></p>
        <div class="cf-input-wrap clearfix">
        <div class="cf-item">
            <span class="wpcf7-form-control-wrap name">
                <input type="text" name="first_name" id="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="name">
            </span>
        </div>
        <div class="cf-item">
            <span class="wpcf7-form-control-wrap phone"><input type="text" name="MobilePhone" id="MobilePhone" value="" size="40" maxlength="11" minlength="9" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="phone number"></span>
        </div>
        <div class="cf-item">
            <span class="wpcf7-form-control-wrap email"><input type="email" name="email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="email"></span>
        </div>
        </div>
        <div class="cf-button-wrap contact-green-button">
            <input type="submit" value="Contact me for details" class="wpcf7-form-control wpcf7-submit">
        </div>
        <p>
        </p>
    </div>
</form>
<script src="LP1/js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {
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