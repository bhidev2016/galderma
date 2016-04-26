jQuery(document).ready(function(){
	jQuery('#material_name').val('');
	
	jQuery('a[href^=http]').click(function(event){
		   event.preventDefault();
		   var link = '<a class="modal_btn" href="'+jQuery(this).attr('href')+'" >CONTINUE TO <span>'+jQuery(this).html()+'</span></a>';
		jQuery("#continueleave").html(link);
		//jQuery("#continueleave span").html(jQuery(this).html());
		jQuery('.leaving').trigger( "click" );
         
             });

	jQuery('.request_btn').click(function(){
 		jQuery('#material_name').val(jQuery(this).attr('title'));
	});

	jQuery('.submit_req_frm').click(function(event){
		event.preventDefault();

                          var numofmaterials = jQuery('#number_required').val();
                          var material = jQuery('#material_name').val();
                          var delivery_addr = jQuery('#delivery_address').val();
		 var additional_info = jQuery('#additional_information').val();


		jQuery.ajax({
		  method: "POST",
		  url:  jQuery('#req_form').attr('action'),
		  data: { material_name : material, number_required:numofmaterials,  delivery_address:delivery_addr,  additional_information:additional_info }
		})
		  .done(function( msg ) {
		   // alert( "Data Saved: " + msg );
		   jQuery('#number_required').val('');
		jQuery('#material_name').val('');
		 jQuery('#delivery_address').val('');
		 jQuery('#additional_information').val('');

		    jQuery('#msgarea').html(msg);
		  });
 
	         
	}); 


	jQuery('.cancel_req_frm').click(function(event){
		event.preventDefault();
		jQuery('#number_required').val('');
		jQuery('#material_name').val('');
		 jQuery('#delivery_address').val('');
		 jQuery('#additional_information').val('');

	}); 
	

	jQuery('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash;
	    var $target = jQuery(target);
    jQuery('html, body').stop().animate({
	        'scrollTop': $target.offset().top - 20
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

	//bhi new
	    var highestBox = 0;
	     jQuery('.content_holder .col_25').each(function(){  
	                if(jQuery(this).height() > highestBox){  
	                highestBox = jQuery(this).height();  
	        }
	    });    
	    jQuery('.content_holder .col_25').height(highestBox);
});