// JavaScript Document
//You need an anonymous function to wrap around your function to avoid conflict

/*
 * Snippet :: jQuery image rezizer
 * http://dev-skills.com/
 *
 * Copyright 2012, Dev-Skills
 * Date: Sat Jan 03, 2012
 */
(function($){

	//Attach this new method to jQuery
 	$.fn.extend({ 
 		
 		//This is where you write your plugin's name
 		thumbs: function(options) {
			//Set the default values, use comma to separate the settings, example:
            var defaults = {
				path : "",
                width: 100,
                height : 130,
				quality : 90
            }
                 
            var options =  $.extend(defaults, options);

			//Iterate over the current set of matched elements
    		return this.each(function() {
				var o = options;
				var self = $(this);
				self.find('img').each(function(){
					uri = o.path+'/timthumb.php?src='+$(this).attr('src')+'&zc=1&w='+o.width+'&h='+o.height+'&q='+o.quality;
					$(this).attr('src',uri).load(function(){
						$(this).css('visibility' , 'visible');
					})
				})		 
			
    		});
    	}
	});
	
//pass jQuery to the function, 
//So that we will able to use any valid Javascript variable name 
//to replace "$" SIGN. But, we'll stick to $ (I like dollar sign: ) )		
})(jQuery);