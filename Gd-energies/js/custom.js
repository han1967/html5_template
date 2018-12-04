jQuery(document).ready(function(){
	
	jQuery(".btn_submit").click(function(){
		event.preventDefault();
		var name 			= jQuery("#name").val();
		var mobile 			= jQuery("#mobile").val();
		var email 			= jQuery("#email").val();
		var Leadsourcename 	= 'אתר חברה';
		var supname 		= 200000; 
		
		jQuery.ajax({
			type: "POST",
			url : "http://207.232.45.153:35742/Main/gen",
			data: {
				name:name,
				email:email,
				phonenum:mobile,
				Leadsourcename:Leadsourcename,
				supname:supname
			},
			success: function(data){
				jQuery(".wpcf7-form").submit();
			 }
		});
	});
	if (jQuery(window).width() < 700){
	    jQuery('.slide-popup-close').hide();
	    console.log('mobile')
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



