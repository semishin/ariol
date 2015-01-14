<article>

    <div class="row">
        <div class="col-md-12">
            <div class="our_works">
                <div class="middle_text">
                    <br>
                    <div class="breadcrumb_ariol">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/portfolio">Работы</a></li>
                            <li class="active"><span><?php echo $name ?></span></li>
                        </ol>
                    </div>
                    <h1 class="text-center"><?php echo $name ?></h1>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="full_description">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1">
                        <p>
                            <strong>Задача:</strong><br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-sm-8 no-padding_right">
                        <img src="<?php echo Lib_Image::crop($image, 'ourproduct',$id, 929, 702); ?>" alt="<?php echo $name ?>" class="img-responsive">

                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-md-offset-2 col-sm-offset-2">
                                <p class="text_after_macbook">
                                    <?php echo $content ?>
                                </p>

                                <div class="page_examples">

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 no-padding_left">
                        <div class="site_info">
                            <p>
                                <strong>Адрес в интернете:</strong><br>
                                <a href="<?php echo $link ?>" class="text_link15"><?php echo $link ?></a>

                                <br><strong>Дата разработки:</strong><br>
                                18 мая 2014 года

                                <br><strong>В проекте учавствовали:</strong><br>
                                Менеджмент и вёрстка - Артём Скороход<br>
                                Программирование - Олег Зголич<br>
                                Дизайн и проектирование - Илона Скороход
                            </p>
                        </div>

                        <div class="green_tooltip">
                            <p>Интересный эффект при наведении курсора
                                на товар</p>
                            <img src="/ariolby/img/work-description/green-tooltip.png" alt="tool-tip">
                        </div>
                        <img src="/ariolby/img/work-description/after_green-tooltip.png" alt="image" class="img-responsive">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="middle_text">
        <br><br>
        <h1 class="text-center">Другие работы</h1>
        <br>
        <p class="text-center font-size14">Ещё много-много сайтов, которые мы сделали</p>
    </div>

    <div class="row  bottom_140px">
        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <a href="#"><img src="/ariolby/img/pholife.png" alt="pholife" class="img-responsive"></a>
                    <p class="text-center"><a  href="#" class="text_link">Pholife</a></p>
                    <p class="text-center">Иллюстрация</p>
                </div>

                <div class="col-md-4 col-sm-4">
                    <a href="#"><img src="/ariolby/img/max_target.png" alt="max_target" class="img-responsive"></a>
                    <p class="text-center"><a  href="#" class="text_link">Max Target</a></p>
                    <p class="text-center">Web-design, оптимизация</p>
                </div>

                <div class="col-md-4 col-sm-4">
                    <a href="#"><img src="/ariolby/img/artstick.png" alt="artstick" class="img-responsive"></a>
                    <p class="text-center"><a  href="#" class="text_link">ArtStick</a></p>
                    <p class="text-center">Дизайн, вёрстка, продвижение</p>
                </div>
            </div>
        </div>
    </div>

</article>