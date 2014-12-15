<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width">
    <title><?php echo $s_title;?></title>
    <meta name="description" content="<?php echo $s_description;?>">
    <meta name="keywords" content="<?php echo $s_keywords;?>">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/lumena/css/normalize.css"/>
    <link rel="stylesheet" href="/lumena/css/fonts/fonts.css"/>
    <!--<link rel="stylesheet" href="js/lib/fancybox/jquery.fancybox.css"/>-->
    <!--<link rel="stylesheet" href="js/lib/customscrollbar/jquery.mCustomScrollbar.css"/>    -->
    <link rel="stylesheet" href="/lumena/css/styles.css"/>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="/lumena/js/lib/jquery-1.11.1.min.js"></script>
    <!--<script src="js/lib/jquery-migrate-1.2.1.min.js"></script>-->
    <script src="/lumena/js/lib/jquery.carouFredSel-6.2.1-packed.js"></script>
    <!--<script src="js/lib/fancybox/jquery.fancybox.pack.js"></script>-->
    <!--<script src="js/lib/customscrollbar/jquery.mCustomScrollbar.min.js"></script>-->
    <!--<script src="js/lib/jquery.scrollTo.min.js"></script>-->
    <!--<script src="js/lib/velocity.min.js"></script>-->
    <!--<script src="js/lib/jquery.mousewheel.js"></script>-->
    <script src="/lumena/js/lib/jquery.blImageCenter.js"></script>

    <script src="/lumena/js/main.js?v1"></script>

    <!--[if gte IE 9]>
        <style type="text/css">
            .gradient {
                filter: none;
            }
        </style>
    <![endif]-->

    <!--[if lte IE 9]>
        <script>
            document.getElementsByTagName('html')[0].className += "IE IE9";
        </script>
    <![endif]-->

    <!--[if lte IE 8]>
        <script>
            document.getElementsByTagName('html')[0].className += " oldIE";
        </script>
    <![endif]-->



</head>
<body class="index">

    <div class="viewport">

        <div class="header_w">

            <div class="header">

                <div class="soc_w">
                    <a class="soc_link vk" href="#"><!--vk--></a>
                    <a class="soc_link fb" href="#"><!--fb--></a>
                    <a class="soc_link tw" href="#"><!--tw--></a>
                </div>


                <div class="search_w">
                    <form action="/search">
                        <input type="text" name="q" placeholder="Поиск по сайту"/>
                        <input type="submit" value="Поиск"/>
                    </form>
                </div>

                <a class="site_logo" href="/">
                    <img src="/lumena/i/site_logo.png" alt="Lumena.by"/>
                </a>

                <div class="header_contacts_w">
                    <span class="phone">+375 (17) 292-34-11</span>
                    <a href="mailto:lumena.ad@gmail.com" class="email"><b>lumena.ad@gmail.com</b></a>
                </div>

                <div class="header_menu_w">
                    <ul>
                        <li><a href="/about-us"><span>О компании</span></a></li>
                        <li><a href="/news/novosti-kompanii/"><span>Новости</span></a></li>
						<li><a href="/discounts/"><span>Акции</span></a></li>
						<li><a href="/news/poleznoe/"><span>Полезное</span></a></li>
                        <li><a href="/kontaktyi"><span>Контакты</span></a></li>
                    </ul>
                </div>

            </div>

        </div>
        
        <div class="service_menu_w">
            <ul>
                <?php $uslugi = ORM::factory('Service_Section')->where('active', '=', true)->order_by('position', 'asc')->find_all();?>
                <?php foreach($uslugi as $item) { ?>
                  <li><a href="/section/<?php echo $item->url?>"><span><?php echo $item->name ?></span></a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="slider_w">



            <div class="bkg_slider_w">

                <div class="bkg_slider_arrow prev"><!--prev--></div>
                <div class="bkg_slider_arrow next"><!--next--></div>
                <div class="bkg_slider_pagi"><!--pagi--></div>


                <div id="bkg_slider">

                </div>

            </div>


            <div class="content_slider_w">

                <div id="content_slider">

                    <?php foreach ($slides as $item) { ?>

                        <div class="item">
                            <div class="img_mrap"><a href="<?php echo $item->link?>"><img src="<?php echo $item->main_image?>" /></a></div>
                            <?php if ($item->content) {?>
                                <div class="slider_desc">
                                    <h3 class="slider_title"><?php echo $item->name?></h3>
                                    <div class="slider_text"><?php echo $item->content?></div>
                                    <a class="slider_link" href="<?php echo $item->link?>">Узнай больше</a>
                                </div>
                            <?php } ?>
                        </div>

                    <?php } ?>

                </div>

                <div class="slide_controls">
                    <div class="content_slider_arrow prev"><!--prev--></div>
                    <div class="content_slider_pagi"><!--pagination--></div>
                    <div class="content_slider_arrow next"><!--next--></div>
                </div>

            </div>

        </div>

        <div class="block_w">

            <div class="block">
                <h2 class="block_title"><span>Направление работы</span></h2>
                
                <div class="cat_desc_list">

                    <?php foreach($uslugi as $item) { ?>

                            <div class="item">
                                <div class="img_wrap">
                                    <a href="/section/<?php echo $item->url?>" class="img_auto_w_h"><img src="<?php echo Lib_Image::crop($item->main_image, 'service_section',$item->id, 256, 256); ?>" /></a>
                                </div>
                                <div class="cat_desc">
                                    <h3 class="title_desc"><a href="/section/<?php echo $item->url?>"><span><?php echo $item->name ?></span></a></h3>
                                    <div class="text_desc"><?php echo $item->short_content ?></div>
                                </div>
                            </div>

                    <?php } ?>

                </div>

            </div>
            
        </div>

        <?php $main = ORM::factory('Main')->where('id','=',1)->find(); ?>

        <div class="block_w">

            <div class="block">
                <h2 class="block_title"><span>Наши преимущества</span></h2>

                <div class="block_desc">Нас выбирают потому что:</div>

                <div class="advantages_list">
                    <div class="item">
                        <div class="img_wrap"><img src=<?php echo $main->icon_1?> /></div>
                        <h4 class="title_advantages"><?php echo $main->icon_name_1?></h4>
                        <div class="text_advantages"><?php echo $main->icon_text_1?></div>
                    </div>

                    <div class="item">
                        <div class="img_wrap"><img src=<?php echo $main->icon_2?> /></div>
                        <h4 class="title_advantages"><?php echo $main->icon_name_2?></h4>
                        <div class="text_advantages"><?php echo $main->icon_text_2?></div>
                    </div>

                    <div class="item">
                        <div class="img_wrap"><img src=<?php echo $main->icon_3?> /></div>
                        <h4 class="title_advantages"><?php echo $main->icon_name_3?></h4>
                        <div class="text_advantages"><?php echo $main->icon_text_3?></div>
                    </div>

                    <div class="item">
                        <div class="img_wrap"><img src=<?php echo $main->icon_4?> /></div>
                        <h4 class="title_advantages"><?php echo $main->icon_name_4?></h4>
                        <div class="text_advantages"><?php echo $main->icon_text_4?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block_w no_bord">

            <div class="block">
                <h2 class="block_title"><span><?php echo $main->name?></span></h2>

                <div class="block_content">
                    <div class="about_w">
                        <div class="about_img">
                            <img src=<?php echo $main->main_image?> />
                        </div>
                        <div class="about_text">
                            <?php echo $main->content?>
                        </div>
                    </div>


                </div>

            </div>

        </div>



        <div class="block_w no_bord zi_9 no_p_t">

            <div class="block">
                <h2 class="block_title"><span>Наши клиенты</span></h2>
                <div class="block_desc">Нам доверяют разработку рекламной продукции:</div>

                <div class="client_slider_w">
                    <div id="client_slider">
                        <?php foreach($clients as $item) { ?>
                            
                                <div class="item"><img src="<?php echo $item->icon ?>" /></div>
                            
                        <?php } ?>
                    </div>

                    <a class="client_slider_arr prev" href="#"><!--prev--></a>
                    <a class="client_slider_arr next" href="#"><!--next--></a>
                    
                </div>

            </div>

        </div>

        <div class="block_w no_pad no_bord">

            <div class="map_wrap">

                <div id="gmap"><!--gmap--></div>

                <div class="map_info">
                    <strong>Адрес:</strong>
                    <span>ул. М.Богдановича. д. 153 В, офис 413<br>г. Минск, Беларусь</span>
                    <strong>Контактные телефоны:</strong>
                    <span>+ 375 44 753 33 33<br/>+ 375 29 619 67 01<br/>+ 375 17 292 34 11</span>
                    <strong>Электронная почта:</strong>
                    <a href="mailto:lumena.ad@gmail.com"><b>lumena.ad@gmail.com</b></a>
                </div>

            </div>

        </div>

        <div class="block_w no_bord zi_10">
            <div class="block">
                <div class="adv_serv_lists">

                    <div class="item">
                        <h5 class="small_title">Наружная реклама</h5>
                        <ul>
                            <li><a href="#"><span>Световые короба</span></a></li>
                            <li><a href="#"><span>Объемные буквы</span></a></li>
                            <li><a href="#"><span>Штендеры</span></a></li>
                            <li><a href="#"><span>Пилоны и стеллы</span></a></li>
                        </ul>
                    </div>

                    <div class="item">
                        <h5 class="small_title">Выставочное оборудование</h5>
                        <ul>
                            <li><a href="#"><span>Мобильные стенды</span></a></li>
                            <li><a href="#"><span>Стенды и павильоны</span></a></li>
                            <li><a href="#"><span>Оформление выставочных стендов</span></a></li>
                            <li><a href="#"><span>Индивидуальный проект</span></a></li>
                        </ul>
                    </div>

                    <div class="item">
                        <h5 class="small_title">Интерьерная реклама</h5>
                        <ul>
                            <li><a href="#"><span>Офисные таблички</span></a></li>
                            <li><a href="#"><span>Интерьерные вывески</span></a></li>
                            <li><a href="#"><span>Информационные стенды</span></a></li>
                            <li><a href="#"><span>Световые панели</span></a></li>
                        </ul>
                    </div>

                    <div class="item">
                        <h5 class="small_title">Полиграфия</h5>
                        <ul>
                            <li><a href="#"><span>POS материалы</span></a></li>
                            <li><a href="#"><span>Визитки</span></a></li>
                            <li><a href="#"><span>Буклеты</span></a></li>
                            <li><a href="#"><span>Календари</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer_w">
            <div class="footer">
                <div class="footer_info">Рекламное агентство Lumenа</div>
                <div class="copy">&copy;2011-2014 </div>
            </div>
        </div>

    </div><!--.viewport-->

</body>
</html>