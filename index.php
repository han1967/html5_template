<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bcure Iframe</title>
    <link href="iframe.css" rel="stylesheet" type="text/css">
    <?php include_once "register_assets.php";?>
</head>
<body>
<form class="formCC" autocomplete="off" method="post" action="../register_action.php">
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
    <p class="alert"></p>
    <div dir="ltr">
        <div class="custom-cf style-cf-1 clearfix" style="background:#fff; border:1px solid #360;">
        <div class="custom-cf-title" style="text-align:left;">One of Our Experts Is Waiting for You</div>
        <p></p>
        <div class="cf-input-wrap clearfix">
        <div class="cf-item">
            <span class="wpcf7-form-control-wrap name">
                <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="name">
            </span>
        </div>
        <div class="cf-item">
            <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" maxlength="11" minlength="9" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="phone number"></span>
        </div>
        <div class="cf-item">
            <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="email"></span>
        </div>
        </div>
        <div class="cf-button-wrap contact-green-button">
            <input type="submit" value="Contact me for details" class="wpcf7-form-control wpcf7-submit">
        </div>
        <div class="cf-custom-check" style="font-weight:bold;">
            <span class="wpcf7-form-control-wrap checkbox-97"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="checkbox-97[]" value="&nbsp; &nbsp; By clicking subscribe you agree our privacy policy" checked="checked"><span class="wpcf7-list-item-label">&nbsp; &nbsp; By clicking subscribe you agree our privacy policy</span></label></span></span></span>
        </div>
        <p>
        </p>
    </div>
</form>
</body>
</html>