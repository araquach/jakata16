jQuery.noConflict();
(function($){
	$(document).ready(function(){
		var button = '<a href="#" class="button"></a>';
		$('nav').parent().append(button);
		$('a.button').click(function(){
			$('nav ul').slideToggle();
		return false;
		}); // end click
	});
})(jQuery);