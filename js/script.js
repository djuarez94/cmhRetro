$( document ).ready(function() {

/*--------------------
Animate on Scroll
--------------------*/
$(window).scroll(function() {
		$('.divTitle h3').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("fadeIn");
			}
		});

        $('.animateUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("slideUp");
			}
		});
	});

/*--------------------
Smooth Scrool to Top
--------------------*/
$('.back-to-top').hide();
	$(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });


});