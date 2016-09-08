$( function($) {
	// show Profile for edit
	$("#show-profile").on("click", function() {
		$("#register-default").hide();
		$("#register-mail").hide();
		$("#register-profile").show();

	});

	$("#show-mail").on("click", function() {
		$("#register-default").hide();
		$("#register-profile").hide();
		$("#register-mail").show();

	});

	$("#register-profile").hide();
	$("#register-mail").hide();	

	// preview profile image on fileupload
	function previewImg(input) {
		if(input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$("#profile-img").attr('src', e.target.result);
				$("#profile-img").attr('class', 'img-size-200x200');
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#profile").change(function() {
		previewImg(this);		
	});

});

