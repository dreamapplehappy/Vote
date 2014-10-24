$(function(){
	$("#action a").click(function(){
		var popup = $(this).attr("action");
		$("#" + popup).fadeIn();
		
		$("body").append("<div id='mask'></div>");
		$("#mask").css({'filter' : 'alpha(opacity=80)'}).fadeIn();

		var popupTopMargin = $("#" + popup).height() / 2;
		var popupLeftMargin= $("#" + popup).width() / 2;

		$("#" + popup).css(
			{'marginTop': -popupTopMargin,
			'marginLeft': -popupLeftMargin});
		$("#mask").click(function(){
			$("#mask,#login_form,#register_form").fadeOut();
			return false;
		})

	})
});