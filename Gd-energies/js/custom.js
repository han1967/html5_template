jQuery(document).ready(function(){
	
	jQuery("#contact_submit").click(function(event){
		var form_data=jQuery("#contact").serializeArray();
		var error_free=true;
		for (var input in form_data){
			var element=jQuery("#contact_"+form_data[input]['name']);
			var valid=element.hasClass("valid");
			if (!valid){
				error_free=false;
				element.removeClass('invalid').addClass('invalid');
				element.parent().children('.warnning').removeClass('invalid').addClass('invalid');
			}
		}
		if (!error_free){
			event.preventDefault(); 
		}
	});
	jQuery('#contact_name').on('input', function() {
		var input=jQuery(this);
		var is_name=input.val();
		if(is_name){
			input.removeClass("invalid").addClass("valid");
			input.parent().children('.warnning').removeClass('invalid');			
		}
		else{
			input.removeClass("valid").addClass("invalid");
			input.parent().children('.warnning').removeClass('invalid').addClass('invalid');
		}
	});
	jQuery('#contact_phone').on('input', function() {
		var input=jQuery(this);
		var re = /[0-9-]+/;
		var is_phone=re.test(input.val());
		if (is_phone) {
			if (input.val().length<9) is_phone=false;
		}
		if(is_phone){
			input.removeClass("invalid").addClass("valid");
			input.parent().children('.warnning').removeClass('invalid');
		}
		else{
			input.removeClass("valid").addClass("invalid");
			input.parent().children('.warnning').removeClass('invalid').addClass('invalid');
		}
	});
	
	jQuery('#contact_email').on('input', function() {
		var input=jQuery(this);
		var re = /^[a-zA-Z0-9.]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)/;
		var is_email=re.test(input.val());
		if(is_email){
			input.removeClass("invalid").addClass("valid");
			input.parent().children('.warnning').removeClass('invalid');			
		}
		else{
			input.removeClass("valid").addClass("invalid");
			input.parent().children('.warnning').removeClass('invalid').addClass('invalid');
		}
	});
	
	if (jQuery(window).width() < 700){
	    jQuery('.slide-popup-close').hide();
	    var win = jQuery(window);
	   // if (win.scrollTop()) {
	    jQuery( window ).scroll(function() {
	        if(win.scrollTop() > 200){
	            jQuery('.slide-popup-close').show();
	        } else {
	            jQuery('.slide-popup-close').hide();
	        }
	    });
	}
})



