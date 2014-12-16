<article>
    <div class="row">
        <?php foreach ($slide as $item) { ?>
            <div class="col-md-12">
                <img src="<?php echo Lib_Image::crop($item->image, 'slide',$item->id, 1500, 588); ?>" alt="slide-1" class="img-responsive">

                <div class="color_divider"></div>



                <div class="over_slide col-md-4 col-sm-6">
                    <h2><?php echo $item->name ?></h2>

                    <p><?php echo $item->content ?></p>

                    <ul class="list-inline">

                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="middle_text">
        <br><br>
        <h1 class="text-center">Наши последние работы</h1>
        <br>
        <p class="text-center">Мы любим, то что делаем и с гордостью показываем это Вам.</p>
    </div>

    <div class="after_slider">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/pholife.png" alt="pholife" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">Pholife</a></p>
                <p class="text-center">Иллюстрация</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/max_target.png" alt="max_target" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">Max Target</a></p>
                <p class="text-center">Web-design, оптимизация</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/artstick.png" alt="artstick" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">ArtStick</a></p>
                <p class="text-center">Дизайн, вёрстка, продвижение</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/sibillina.png" alt="sibillina" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">Издательство Сибиллина</a></p>
                <p class="text-center">Создание сайта, поддержка</p>
            </div>
            <!-- </div>

             <div class="row">-->
            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/best_day_logo.png" alt="best_day_logo" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">The Best Day</a></p>
                <p class="text-center">Логотип сайта</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/vprint.png" alt="vprint" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">VPrint</a></p>
                <p class="text-center">Дизайн сайта, СЕО</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/best_day.png" alt="best_day" class="img-responsive"></a>
                <p class="text-center"><a  href="#" class="text_link">The Best Day</a></p>
                <p class="text-center">Веб-сайт, продвижение</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="#"><img src="/ariolby/img/super_pol.png" alt="super_pol" class="img-responsive"></a>
                <p class="text-center"><a href="#" class="text_link">Напольные покрытия</a></p>
                <p class="text-center">Разработка сайта</p>
            </div>
        </div>

    </div>

    <p class="text-center"><button type="button" class="btn btn-default">Ещё больше работ</button></p>
</article>