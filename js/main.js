$(document).ready(function () {
	$("#mobilenav").click(function () {
		$("#nav").slideToggle("slow");
	});

	$("#lightboxBtn").click(function () {
		$("#overlay").fadeIn();
	});

	$("#lightboxBtn2").click(function () {
		$("#overlay").fadeIn();
	});

	$("#close").click(function () {
		$("#overlay").fadeOut();
	});

	$("#overlay").click(function () {
		$("#overlay").fadeOut();
	});
});
