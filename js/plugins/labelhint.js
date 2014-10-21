/*!
	* Label Hint v1.3
*/
!function(n){n.fn.labelHint=function(){var i=n(this),s="on",e="show",t=i.find("input"),a=i.find("textarea"),l=function(){var s=n(this).closest(i).find("label");""!==this.value?s.addClass(e):s.removeClass(e)};t.add(a).bind("checkval",l),t.add(a).on("keyup",function(){n(this).trigger("checkval")}).on("focus",function(){n(this).closest(i).find("label").addClass(s)}).on("blur",function(){n(this).closest(i).find("label").removeClass(s)}).trigger("checkval")}}(jQuery);