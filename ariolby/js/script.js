
// A $( document ).ready() block.
$( document ).ready(function() {

    $(function(){
        var mySwiper = $('.swiper-container').swiper({
            //Your options here:
            mode:'horizontal',
            loop: true
            //etc..
            ,keyboardControl: true,
            //cssWidthAndHeight: true,
            //preventLinksPropagation: true,
            calculateHeight: true,

            pagination: '.pagination',
            paginationClickable: true,


            //autoplay: 5000,
            speed: 1000
        });
    })

});