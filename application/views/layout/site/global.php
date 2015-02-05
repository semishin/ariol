<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test_Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/ariolby/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ariolby/css/style.css" rel="stylesheet">

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/ariolby/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/ariolby/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/ariolby/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Include slider -->
    <link rel="stylesheet" href="/ariolby/js/Swiper-master/src/idangerous.swiper.css">
    <!-- <script defer src="js/Swiper-master/dist/idangerous.swiper.min.js"></script>   --> <!--  ******   -->
    <script defer src="/ariolby/js/Swiper-master/src/idangerous.swiper.js"></script>

    <!-- Include  user-js -->
    <script src="/ariolby/js/script.js"></script>
</head>
<body>

<div class="site_page">

    <header>

        <div class="row">
            <div class="col-md-3 col-sm-4">

                <div class="logo">
                    <h1>
						<?php if ($_SERVER['REQUEST_URI'] == '/') { ?>
						<div>Ariol <span>web development</span></div>
						<?php } else { ?>
						<a href="/" style="color: inherit">Ariol <span>web development</span></a></h1>
						<?php } ?>
					</h1>
                    <span><br><br><br><br>web development</span>
                </div>

            </div>

            <div class="col-md-6 col-sm-8 large_menu">

                <ul class="nav nav-pills navigation">

                    <li><a href="/">Главная</a></li>
                    <li><a href="/o-kompanii">О компании</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Услуги<i><span class="caret"></span></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($services as $item) { ?>
                                <li><a href="/service/<?php echo $item->url ?>"><?php echo $item->name ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <li><a href="/portfolio">Работы</a></li>
                    <li><a href="/articles">Блог</a></li>
                    <li><a href="/contacts">Контакты</a></li>

                </ul>


            </div>

            <div class="col-md-6 small_menu">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#">Menu</a>-->
                    </div>

                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="/o-kompanii">О компании</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Услуги <i><b class="caret"></b></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($services as $item) { ?>
                                        <li><a href="/service/<?php echo $item->url ?>"><?php echo $item->name ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="/portfolio">Работы</a></li>
                            <li><a href="/articles">Блог</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-md-3 col-sm-3 header_right_block">
                <p class="text-center"><a href="/brif" class="fancybox fancybox.ajax"><button type="button" class="btn btn-default">Заполните Бриф</button></a></p>
                <p class="text-center"><small>или позвоните</small></p>
                <p class="text-center"><strong><?php echo Kohana::$config->load('properties.phone1'); ?></strong></p>
            </div>
        </div>

    </header>

    <?php echo $content ?>

    <footer>
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

                        <div class="top_part">
                            <div class="row">
                                <div class="col-md-4 col-sm-8">
                                    <p>220012, Республика Беларусь<br>
                                        г.Минск, ул. Понаморенко, 34, помещение 10H </p>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                    <p><?php echo Kohana::$config->load('properties.phone1'); ?> velcom<br>
                                        <?php echo Kohana::$config->load('properties.phone2'); ?> городской</p>
                                </div>

                                <div class="col-md-2 col-sm-6">
                                    <p><a href=""><?php echo Kohana::$config->load('properties.email'); ?></a></p>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="soc_imgs">
                                        <a href="<?php echo Kohana::$config->load('social.facebook'); ?>"><img src="/ariolby/img/fb.png" alt="fb"></a>
                                        <a href="<?php echo Kohana::$config->load('social.vk'); ?>"><img src="/ariolby/img/vk.png" alt="vk"></a>
                                        <a href="<?php echo Kohana::$config->load('social.g+'); ?>"><img src="/ariolby/img/g.png" alt="g+"></a>
                                        <a href="<?php echo Kohana::$config->load('social.skype'); ?>"><img src="/ariolby/img/skype.png" alt="skype"></a>
                                        <a href="<?php echo Kohana::$config->load('social.twitter'); ?>"><img src="/ariolby/img/tw.png" alt="tw"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="bot_part">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="/ariolby/img/blog_icon.png" alt="blog_icon" class="blog_icon">
                                    <p>Читайте в нашем блоге:<br>
                                        <a href="#">Как заставить сайт работать</a></p>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="central_text">
                                        <p class="text-center">Студия web-разработок</p>
                                        <p class="text-center"><span>Ariol</span></p>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="share_icons">
                                        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus" data-yashareTheme="counter"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>

</body>
</html>