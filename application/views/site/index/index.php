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
            <?php foreach ($ourproduct as $item) { ?>
                <div class="col-md-3 col-sm-6">
                    <a href="<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->image, 'ourproduct',$item->id, 315, 227); ?>" alt="<?php echo $item->name ?>" class="img-responsive"></a>
                    <p class="text-center"><a  href="<?php echo $item->url ?>" class="text_link"><?php echo $item->name ?></a></p>
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

    <p class="text-center"><button type="button" class="btn btn-default">Ещё больше работ</button></p>
</article>