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
    $t = empty($_GET['t']) ? 'none' : $_GET['t'];

    $paymentPage = 'payshortlpbp';
    $country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? $_SERVER['HTTP_CF_IPCOUNTRY']:'';
    $countryLower = strtolower($country);
    $m = empty($_GET['m']) ? '000' : $_GET['m'];
    if($color == 2){
        $paymentPage = 'paymentShort2c';
    }
    // $json = file_get_contents('phoneCode.json');
    // $json = json_decode($json, true);
    // $phonePerfix = $json[$country];
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
// function validateRegisterForm(form){
//     $.ajax( {
//         url: "../register_action.php",
//         type: "post",
//         dataType: "json",
//         async:true,
//         cache:false,
//         data: form.serialize(),
//         success: function (res) {
//             console.log(res);
//         }
//     });
//     return false;
// }
$(document).ready(function() {
    $(".formCC").submit(function(e) {
        e.preventDefault();
        var form = $(this);
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
                    //var inhtml = "<h2>Thanks</h2>"+res.data.user.id+" is created!</h3>";
                    var inhtml = "<div style='background:#00855F; color:#fff; padding: 10px 20px;'><h2>Thanks</h2><p>Thank you, your request has been received. Our representative will contact you shortly</p></div>";
                    parentDiv.append(inhtml);
                }
                else {
                    alert('login failed');
                }
            }
        });
        return false;
    });
});
</script>