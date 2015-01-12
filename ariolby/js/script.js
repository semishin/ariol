$( document ).ready(function() {

    $(".fancybox").fancybox();

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
    });

    var offset = 8;
    var category_id;

    $('#more_articles').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/articles/more",
            data: {
                offset: offset
            },
            dataType: 'json',
            success: function(result) {
                offset += 8;
                var html = $('.news-list .row').html();
                html += result.html;
                $('.news-list .row').html(html);
                if (!result.more) {
                    $('#more_articles').hide();
                }
            }
        });
    });

    $('#more_items').click(function(e) {
        var on_main = $(this).attr('on_main');
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/portfolio/more",
            data: {
                offset: offset,
                category_id: category_id,
                on_main: on_main
            },
            dataType: 'json',
            success: function(result) {
                offset += 8;
                var html = $('.block_works .row').html();
                html += result.html;
                $('.block_works .row').html(html);
                if (!result.more) {
                    $('#more_items').hide();
                }
            }
        });
    });

    $('.portfolio_buttons li button').click(function(e) {
        e.preventDefault();
        category_id = $(this).attr('data-id');
        $.ajax({
            type: "POST",
            url: "/portfolio/category",
            data: {
                offset: offset,
                category_id: $(this).attr('data-id')
            },
            dataType: 'json',
            success: function(result) {
                offset = 8;
                $('.block_works .row').html(result.html);
                if (!result.more) {
                    $('#more_items').hide();
                }
            }
        });
    });

});