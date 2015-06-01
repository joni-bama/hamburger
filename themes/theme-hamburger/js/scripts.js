$(function(){
	var a = $(document).scrollTop();
    var b = $('.mainNav').outerHeight();
	
	$(".fa-bars").on("click", function(){
		$("header .container").toggleClass("slide");
	});

    $(window).scroll(function() {
        var c = $(document).scrollTop();

        if (c > b) {
            $('.mainNav').addClass('mainNav2');
        } 
        else {
            $('.mainNav').removeClass('mainNav2');
        }
    });

	$(".hamburger img").on("click", function(){
		$(".overlay").addClass("show");
	});

	$(".close").on("click",function(e){
		e.preventDefault();
		$(".overlay").removeClass("show");
	});
});