(function($) {
	
	$.placeholder = function(mixSelector){			
		$(mixSelector).placeholder();
	};
	$.placeholder.onFocus_text = function(objEvent){
		var jThis = $(this);
		//Remove text
		jThis.val('');
		jThis.die('focus');
		//Set blur function
		jThis.blur($.placeholder.onBlur_text);
	};
	$.placeholder.onFocus_pass = function(objEvent){
		var jNewText = $(this);
		//Set original visible
		var jOldText = jNewText.data('swapInput');
		
		//Remove object
		if(typeof jOldText != 'undefined'){
			try{
			jOldText.css('display', '');
			}catch(exe){
				//IE is Satan
				//jOldText.css('display', '');
				console.log(exe);
			}
			jOldText.focus();
			jNewText.die('focus');
			jNewText.remove();
			jOldText.blur($.placeholder.onBlur_pass);
		}
		
	};
	$.placeholder.onBlur_text = function(objEvent){
		var jThis = $(this);
		if(jThis.attr('value').length == 0){
			$.placeholder.setTextEle(jThis);
		}
	};
	$.placeholder.onBlur_pass = function(objEvent){
		var jThis = $(this);
		if(jThis.attr('value').length == 0){
			$.placeholder.setPassEle(jThis);
		}
	};
	$.placeholder.setTextEle = function(jThis){
		//Find the text boxs and apply set the text and focus function
		jThis.attr('value', jThis.attr('placeholder_txt'));
		//focus
		jThis.focus($.placeholder.onFocus_text);
	};
	$.placeholder.setPassEle = function(jThis){
		//Find the pword boxes and do the swap
		//Create new object with same properties
		var jNewText = $("<input type='text' id='" + jThis.attr('id') + "_placeholder' />");
		for(i = 0, len = jThis.context.attributes.length; i < len; i++){
			var strAttrName = jThis.context.attributes[i].name;
			if((strAttrName != 'type') && (strAttrName != 'id')){
				jNewText.attr(strAttrName, jThis.attr(strAttrName));
			}
		}
		//Append it to parent
		//TODO: Switch append with better command
		jThis.before(jNewText);
		//Set data
		jNewText.data('swapInput', jThis);
		//set original invisible
		jThis.css('display', 'none');
		//Dont forget to set the text
		jNewText.val(jThis.attr('placeholder_txt'));
		//focus
		jNewText.focus($.placeholder.onFocus_pass);
	};
	$.fn.placeholder = function(mixObject){
		this.each(function(){
			var jThis = $(this);
			if(jThis.attr('type') != 'password'){
				$.placeholder.setTextEle(jThis);
			}else{
				$.placeholder.setPassEle(jThis);
			}
		});
	};

	/*$(document).ready(function() {
		$.placeholder.init();
	});*/
})(jQuery);