// A $( document ).ready() block.

$( document ).ready(function() {
    
    $('.ccm-image-block').hover(function(){
    	console.log($(this).attr('alt'));
    })

});