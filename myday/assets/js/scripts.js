function bgpos() {
	/*Login page full height*/

	var windowH = $(window).height();
	$('body').css('height', windowH);
}

jQuery(document).ready(function () {

	/*
	    Fullscreen background
	*/

	/*
	    Form validation
	*/
	$('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function () {
		$(this).removeClass('input-error');
	});

	$('.login-form').on('submit', function (e) {

		$(this).find('input[type="text"], input[type="password"], textarea').each(function () {
			if ($(this).val() == "") {
				e.preventDefault();
				$(this).addClass('input-error');
			} else {
				$(this).removeClass('input-error');
			}
		});

	});

	bgpos();

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
});

$(window).resize(function(){
	bgpos();
});