$(window).load(function() 
{
	$(".se-pre-con").fadeOut("slow");
});

//from here main js starts

//jQuery time
$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate

$(".next").click(function(){
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.hide();

});

$(".previous").click(function(){
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.hide();
});

$(".submit").click(function(){
	return false;
});

});





function toggleButton()
{
	event.preventDefault();
	if($('.half-day').hasClass('active'))
	{
		$('.half-day').removeClass('active');
		$('.full-day').addClass('active');
	}
	else
	{
		$('.half-day').addClass('active');
		$('.full-day').removeClass('active');
	}
}
