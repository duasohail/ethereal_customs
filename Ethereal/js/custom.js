$(document).ready(function(){

	var userfeed = new Instafeed({
		get:'user',
		userId:'7009147287',
		limit:25,
		resolution:'standard_resolution',
		accessToken:'7009147287.1677ed0.13b00613f7444dd5a189381c42756633',
		sortBy:'most-recent',
		template:'<div class="gallery col-lg-3"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
	});

	userfeed.run();

});