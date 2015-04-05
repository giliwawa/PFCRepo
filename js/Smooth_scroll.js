$(document).ready(function(){
		$('nav a').click(function(){
			if($(this).attr('data') != "signin"){
				var scrollAncre = $(this).attr('data');
				var navHeight = $('nav').outerHeight();
				var scrollTo = $('section[id="'+scrollAncre+'"]').offset().top ;
				$('body ,html').animate( {scrollTop: scrollTo} , 500) ;
				$(this).addClass('active');

			}
			

		});

$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
        
        $('section').each(function(i) {
            if ($(this).position().top <= windscroll +64) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });

})
	});


$(document).ready(function(){
		$('footer-nav a').click(function(){
			if($(this).attr('data') != "signin"){
				var scrollAncre = $(this).attr('data');
				var navHeight = $('footer-nav').outerHeight();
				var scrollTo = $('section[id="'+scrollAncre+'"]').offset().top ;
				$('body ,html').animate( {scrollTop: scrollTo} , 500) ;
				$(this).addClass('active');

			}
			

		});





