<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
</head>
<body>
	<form onsubmit="return validateRegisterForm()" autocomplete="off" method="post"  action="../get_registration.asp" class="formCC" style="padding: 10px;">
			<input type="hidden" name="goto" id="goto" value="<?=$paymentPage ?>">
			<input type="hidden" name="fromWhere" id="fromWhere" value="LP">
			<input type="hidden" name="ref" id="ref" value="<?=$ref ?>">
			<input type="hidden" name="coupon" id="coupon" value="<?= $coupon ?>">
			<input type="hidden" name="game" id="game" value="<?=$game ?>">
			<input type="hidden" name="aff_id" id="aff_id" value="<?=$aff_id ?>">
			<input type="hidden" name="aff_key" id="aff_key" value="<?=$aff_key ?>">
			<input type="hidden" name="affTranID" id="affTranID" value="<?=$affTranID ?>">
			<input type="hidden" name="lang" id="lang" value="<?=$lang?>">
<div class="gform_body"><ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below"><li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Name*" aria-required="true" aria-invalid="false"></div></li><li id="field_2_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_2">Phone<span class="gfield_required">*</span></label><input id="input_2_2" class="small" tabindex="2" max="2018" name="input_2" step="any" type="tel" value="" aria-required="true" aria-invalid="false" placeholder="Phone*"></li><li id="field_2_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_3">Email</label><input id="input_2_3" class="small" tabindex="3" max="2018" name="input_3" step="any" type="email" value="" aria-required="true" aria-invalid="false" placeholder="Email"></li><li id="field_2_4" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_4" id="input_2_4" type="hidden" class="gform_hidden" aria-invalid="false" value="בלוג"></li><li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"><input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" aria-invalid="false" value="200000"></li></ul></div><div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send&gt;&gt;" tabindex="2" onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} window[&quot;gf_submitting_2&quot;]=true;  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" class="gform_hidden" name="is_submit_2" value="1"> <input type="hidden" class="gform_hidden" name="gform_submit" value="2"> <input type="hidden" class="gform_hidden" name="gform_unique_id" value=""> <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImFkYzIyMmJjOWUxMzFiOWIzYmNkMTRiOTg4ZmU5YTE0Il0="> <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0"> <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1"> <input type="hidden" name="gform_field_values" value=""></div></form></div>
                                                                            <script type="text/javascript">jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(typeof Placeholders != 'undefined'){
    Placeholders.enable();
}} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script>
                                                                            <script type="text/javascript">    jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } );</script>
                                                                        </div>

</body>
</html>
