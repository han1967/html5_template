<form class="formCC" autocomplete="off" method="post" action="../register_action.php" id="gform_9">
    <div class="gform_body">
        <ul id="gform_fields_9" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_9_1" class="gfield gf_right_third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                <label class="gfield_label" for="first_name">שם<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_text">
                    <!-- <input name="input_1" id="input_9_1" type="text" value="" class="medium" tabindex="1" placeholder="שם*" aria-required="true" aria-invalid="false"> -->
                    <input name="first_name" id="first_name" type="text" value="" class="medium" placeholder="Name*" aria-required="true">
                </div>
            </li>
            <li id="field_9_2" class="gfield gf_middle_third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                <label class="gfield_label" for="MobilePhone">טלפון<span class="gfield_required">*</span></label>
                <input id="MobilePhone" class="small" name="MobilePhone" type="tel" value="" aria-required="true" placeholder="Phone*">
                <!-- <input id="input_9_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="טלפון*"> -->
            </li>
            <li id="field_9_3" class="gfield gf_left_third field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                <label class="gfield_label" for="input_9_3">מייל</label>
                <!-- <input id="input_9_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="מייל"> -->
                <input id="email" class="small" name="email" type="email" value="" aria-required="true" placeholder="Email">
            </li>
        </ul>
    </div>
    <div class="gform_footer top_label">
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
        <input type="submit" id="gform_submit_button_9" class="gform_button button" value="Send">
    </div>
</form>