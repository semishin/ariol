<article>
    <div class="row">
        <div class="col-md-12">
            <div class="our_works">
                <div class="middle_text">
                    <br>
                    <h1 class="text-center">Наши работы</h1>
                    <div class="portfolio_buttons">
                        <!--<div class="center-block">-->
                        <ul class="list-unstyled list-inline">
                            <li><button data-id="" type="button" class="btn btn-default active">Все</button></li>
                            <?php foreach ($ourproduct_category as $item) { ?>
                                <li><button data-id="<?php echo $item->id; ?>" type="button" class="btn btn-default"><?php echo $item->name ?></button></li>
                            <?php } ?>
                        </ul>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block_works main"><!-- loading -->
        <div class="row">
            <div style="display: none;" class="loading_animation">
                <img src="/ariolby/svg-loaders/grid.svg">
            </div>
            <?php foreach ($ourproduct as $item) { ?>
                <div class="col-md-3 col-sm-6">
                    <a href="/portfolio/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->image, 'ourproduct',$item->id, 315, 227); ?>" alt="<?php echo $item->name ?>" class="img-responsive"></a>
                    <p class="text-center"><a  href="/portfolio/<?php echo $item->url ?>" class="text_link"><?php echo $item->name ?></a></p>
                    <p class="text-center"><?php $names = array(); ?>
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
        <p class="text-center"><button on_main="0" type="button" id="more_items" class="btn btn-default load_button">Ещё больше работ</button></p>
    <?php } ?>

</article>