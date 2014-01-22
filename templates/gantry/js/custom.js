jQuery(function(){
        var $ = jQuery;
        //$("a.modal").removeClass('modal');
        
        $("[class*='formelm'] button").addClass('btn');
		
        function moveFiller(container){
                var filler = container.parent().parent().find('.filler')
                if (filler.length) {
                        filler.first().insertAfter(container)
                }
                
        }
        
        $('.user-menu').prependTo('body');
        
        var defaultCropWidth = '100%';
        var defaultCropHeight = '180px';
        
        $('.rt-block.slideshow.full-width').closest('.rt-container').width('100%');
        $('.rt-block.slideshow.full-width').closest('[class*="rt-grid"]').width('100%');
        
        $('img.crop').each(function(index){
                
                var cropWidth = ($(this).attr('data-width') !== undefined) ? $(this).attr('data-width') : defaultCropWidth;
                var cropHeight = ($(this).attr('data-height') !== undefined) ? $(this).attr('data-height') : defaultCropHeight;
                
                var container = $(this).parent('div.image-container');
                
                if (container.length) {
                        parent.addClass('crop').width(cropWidth).height(cropHeight);
                        $(this).appendTo(image.parent('div.image-container'))
                }else{
                        container = $('<div class="image-container crop"></div>').width(cropWidth).height(cropHeight);;
                        $(this).wrap(container);
                }
                moveFiller($(this));
        });
        
        
        $('.image-title').each(function(index){
                
                
                if ($(this).attr('for') !== undefined) {
                        var image_id = $(this).attr('for');
                        var image = $('#'+image_id);
                }else{
                        if ($(this).prev('img').length) {
                                var image = $(this).prev('img');
                        }else{
                                var image = $(this).prev('.image-container').children('img').first();
                        }
                }
                if (image.parent('div.image-container').length) {
                        $(this).appendTo(image.parent('div.image-container'))
                }else{
                        var container = $('<div class="image-container"></div>');
                        image.wrap(container);
                        $(this).insertAfter(image);
                }
                moveFiller(image);
        });
        
});