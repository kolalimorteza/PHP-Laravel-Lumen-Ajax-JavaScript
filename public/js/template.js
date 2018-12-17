 
         /**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function($)
{
	$(document).ready(function()
	{

		$('body').click(function(){
			$('.r-cart').slideUp()
			$(".cart-logo").removeClass('active');
			$('.r-menu').slideUp()
			$(".hamber-logo").removeClass('active');
		})
 
 $(".hamber-logo").click(function(event){
 	event.stopPropagation();
   if($(this).hasClass('active')){
		$(this).removeClass('active');
		$('.r-menu').slideUp();
   }else{
		$(this).addClass('active')
		$('.r-menu').slideDown();
		$('.r-cart').slideUp()
		$(".cart-logo").removeClass('active');

   }
});


   $(".cart-logo").click(function(event){
   	event.stopPropagation();
   if($(this).hasClass('active')){
		$(this).removeClass('active');
		$('.r-cart').slideUp();
   }else{
		$(this).addClass('active')
		$('.r-cart').slideDown();

		$('.r-menu').slideUp()
		$(".hamber-logo").removeClass('active');
   }
});


	})
})(jQuery);