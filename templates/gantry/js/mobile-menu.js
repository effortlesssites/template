function getRotationDegrees(obj) {
        var matrix = obj.css("-webkit-transform") ||
        obj.css("-moz-transform")    ||
        obj.css("-ms-transform")     ||
        obj.css("-o-transform")      ||
        obj.css("transform");
        if(matrix !== 'none') {
            var values = matrix.split('(')[1].split(')')[0].split(',');
            var a = values[0];
            var b = values[1];
            var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
        } else { var angle = 0; }
        return (angle < 0) ? angle +=360 : angle;
};

jQuery(function(){
        setTimeout(function(){
                jQuery('div.gf-menu-device-container .gf-menu li.parent > .item').append('<i class="fa fa-plus"></i>');
                jQuery('div.gf-menu-device-container .gf-menu .item').bind('tapone', function(){
                        console.log('bind')
                        jQuery(this).siblings('.dropdown').first().slideToggle();
                        var rotation = getRotationDegrees(jQuery(this).children('i').first());
                        jQuery(this).children('i').first().css('transform', 'rotate(' + (rotation + 45) + 'deg)')
                });
        }, 500);
});