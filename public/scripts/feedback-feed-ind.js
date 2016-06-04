jQuery.noConflict();
(function($){
	$(document).ready(function(){
			function InOut( elem )
			{
			 elem.delay()
			     .fadeIn('slow')
			     .delay(6000)
			     .fadeOut(
			          function(){
			             if(elem.next().length > 0) // if there is a next element
			               {InOut( elem.next() );} // use it
			             else
			               {InOut( elem.siblings(':first'));} // if not, then use go back to the first sibling
			
			           }
			         );
			
			}
			$('#feedback_feed_ind').css('display','block');
			$('#feedback_feed_ind li').hide();
			InOut( $('#feedback_feed_ind li:first'));
		});
})(jQuery);