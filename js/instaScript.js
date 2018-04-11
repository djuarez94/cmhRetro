$(document).ready(function () {
/*--------------------
Instagram API
--------------------*/

  var userFeed = new Instafeed({
	get : 'user',
	userId: '254340346',
	limit: 6,
	resolution: 'standard_resolution',
	accessToken: '254340346.8f63a5a.3e84327cd7424ca3aeb0a627049b5c6b',
	sortBy: 'most-recent',
	template: '<div class="col-md-4 gallery instaImg"><a href="{{image}}"  target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>'
  });
  userFeed.run();

  // This will create a single gallery from all elements that have class "gallery"
$('.gallery').magnificPopup({
  type: 'image',
  delegate: 'a',
  gallery:{
	enabled:true
  }
});
});
