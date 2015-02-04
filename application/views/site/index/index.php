<article>
    <div class="row">
        <div class="col-md-12">

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($slide as $item) { ?>
                        <!--First Slide-->
                        <div class="swiper-slide">
                            <!-- Any HTML content of the first slide goes here -->
                            <img src="<?php echo Lib_Image::crop($item->image, 'slide',$item->id, 1500, 588); ?>" alt="<?php echo $item->name ?>" class="img-responsive">

                            <div class="over_slide  col-md-4 col-sm-6">
                                <h3><?php echo $item->name ?></h3>

                                <p><?php echo $item->content ?></p>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="color_divider"></div>
            <div class="pagination"></div>
        </div>
    </div>

    <div class="middle_text">
        <br><br>
        <h1 class="text-center">Наши последние работы</h1>
        <br>
        <p class="text-center">Мы любим, то что делаем и с гордостью показываем это Вам.</p>
    </div>

    <div class="block_works">
        <div class="row">
            <?php foreach ($ourproduct as $item) { ?>
                <div class="col-md-3 col-sm-6">
                    <a href="/portfolio/<?php echo $item->url ?>"><img src="<?=$item->image; ?>" alt="<?php echo $item->name ?>" class="img-responsive"></a>
                    <p class="text-center"><a  href="/portfolio/<?php echo $item->url ?>" class="text_link"><?php echo $item->name ?></a></p>
                    <p class="text-center">
                        <?php $names = array(); ?>
                        <?php foreach ($item->categories->find_all() as $cat) { ?>
                            <?php $names[] = mb_ucfirst(mb_strtolower($cat->name)); ?>
                        <?php } ?>
                        <?php echo join(', ', $names); ?>
                    </p>
                </div>
            <?php } ?>
        </div>

    </div>
    <?php if ($count_product > 8) { ?>
        <p class="text-center"><button on_main="1" type="button" id="more_items" class="btn btn-default">Ещё больше работ</button></p>
    <?php } ?>
</article>