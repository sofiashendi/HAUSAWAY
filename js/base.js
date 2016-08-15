var HA = {};

HA.init = function(){
	var $ = jQuery;
	
	var strPageId = $('body').attr('id');
	
	HA.smoothScroll.init();
	
	switch(strPageId)
	{
		case 'contact':
			HA.contact.init();
			break;
	}

};

HA.smoothScroll = {
	init: function(){
		var $ = jQuery,
			_this = HA.smoothScroll;
			
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	}, // init()
}; // HA.smoothScroll

HA.contact = {
	init: function(){
		var $ = jQuery,
			_this = HA.contact;
			
		$form = $('#contactForm');
		
			
		$('#contactForm').submit(function(e){
			e.preventDefault();
			
			var name = $("input#name").val();
            var email = $("input#email").val();
            //var phone = $("input#phone").val();
            var message = $("textarea#message").val();
			
			$.ajax({
                url: "../ajax/contact.php",
                type: "POST", 
                data: {
                    name: name,
                    //phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#form_area').hide();
                    $('#success_area').show();
                    $form.trigger("reset");
                },
                error: function() {
	                $form.trigger("reset");
                },
            });
		});
	}, // init()
}; // HA.contact

$(document).ready(function(){
	HA.init();
});