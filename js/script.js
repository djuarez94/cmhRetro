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
		});

	
});