jQuery.noConflict();
(function($){
	$(document).ready(function(){
			$('.team_member_copy').css({opacity: 0});
			$('.team_member_copy').each(function(){
			$(this).toggle(function(){
				$(this).css({opacity: 1});
				return false;
				}, 
				function(){
			$(this).css({opacity: 0});
			});
			});	
		});
})(jQuery);



