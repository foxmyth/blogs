$( function() {
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
});