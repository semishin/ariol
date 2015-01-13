$( document ).ready(function() {

    $(".fancybox").fancybox();

    if($("#gmap").length){
        initializeMap(53.894262, 27.481949, 14);
    }

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

    $('#feedb_but').click(function(e) {


        e.preventDefault();

        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var phone = $('input[name="phone"]').val();
        var text = $('textarea[name="text"]').val();
        var errors = 0;
        if (!name) {
            $('input[name=name]').addClass('error');
            errors++;
        } else {
            $('input[name=name]').removeClass('error');
        }
        if (!email) {
            $('input[name=email]').addClass('error');
            errors++;
        } else {
            $('input[name=email]').removeClass('error');
        }
        if (!phone) {
            $('input[name=phone]').addClass('error');
            errors++;
        } else {
            $('input[name=phone]').removeClass('error');
        }
        if (!text) {
            $('textarea[name=text]').addClass('error');
            errors++;
        } else {
            $('textarea[name=text]').removeClass('error');
        }
        if (errors) {
            $('.form_desc').removeClass('loading');
            return false;
        }
        $.ajax({
            url : "/feedb/add",
            dataType : "json",
            type : "post",
            data : {name : name, email : email, phone : phone, text : text},
            success : function(jsondata) {
                $('.form_desc').removeClass('loading');
                $('.form_desc').html('<h3>Спасибо за заявку</h3>');
                $('.form_wrap form').html('');

            }
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

function initializeMap(lat, lng, zoom) {
    var map;
    var qmap = new google.maps.LatLng(lat, lng);
    var MY_MAPTYPE_ID = 'custom_style';
    var featureOpts = [{
        featureType: "all",
        elementType: "all",
        stylers: [
            {saturation: 80 }, // <-- насыщенность
            {lightness: 0 } // <-- яркость
        ]
    }];
    var mapOptions = {
        zoom: zoom,
        center: qmap,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        mapTypeId: MY_MAPTYPE_ID,
        panControl: true,
        panControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        scaleControl: true,
        streetViewControl: true,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        }
    };
    map = new google.maps.Map(document.getElementById('gmap'),
        mapOptions);
    var styledMapOptions = {
        name: 'Custom Style'
    };
    var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
    var image = new google.maps.MarkerImage(
        '/ariolby/img/map_marker.png',
        new google.maps.Size(34,48),
        new google.maps.Point(0,0),
        new google.maps.Point(17,48)
    );
    var infowindow = new google.maps.InfoWindow({
        content: '<div class="textInfo"><span>Контактные телефоны:+ 375 44 753 33 33<br/> + 375 29 619 67 01<br/> + 375 17 292 34 11<br/><br/>Электронная почта:<br/>lumena.ad@gmail.com</span></div>'
    });
    var marker = new google.maps.Marker({
        draggable: false,
        raiseOnDrag: false,
        icon: image,
        map: map,
        position: qmap
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
}