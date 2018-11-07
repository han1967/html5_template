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

$paymentPage = 'payshortlpbp';
$country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? $_SERVER['HTTP_CF_IPCOUNTRY']:'';
$countryLower = strtolower($country);
$m = empty($_GET['m']) ? '000' : $_GET['m'];
if($color == 2){
    $paymentPage = 'paymentShort2c';
}
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {
    $(".formCC #MobilePhone").keydown(function (e) {
        console.log(e.keyCode);
        if (e.keyCode != 8 && $(this).val().length > 8) {
            e.preventDefault();
            return;
        }
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 8, 116]) !== -1 ||
            // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
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