<form class="formCC" autocomplete="off" method="post" action="../register_action.php">
    <div class="main_form">
        <div class="details_holder">
            <h3>Do you also want to try the B-Cure Laser at home for 30 days and find out that it works? Leave your details!</h3>
            <div class="form_content">
                <ul>
                    <li>
                    <input name="first_name" id="first_name" type="text" value="" class="medium" placeholder="Name*" aria-required="true">
                    </li>
                    <li><input id="MobilePhone" class="small" name="MobilePhone" type="tel" value="" aria-required="true" placeholder="Phone*"></li>
                    <li><input id="email" class="small" name="email" type="email" value="" aria-required="true" placeholder="Email"></li>
                </ul>
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
            </div>
            <div class="btn_holder"><input name="" type="submit" value="Send >>"></div>
        </div>
    </div>
</form>