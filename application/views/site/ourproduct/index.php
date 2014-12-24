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
                            <li><button type="button" class="btn btn-default active">Все</button></li>
                            <li><button type="button" class="btn btn-default">СЕО продвижение</button></li>
                            <li><button type="button" class="btn btn-default">Landing Page</button></li>
                            <li><button type="button" class="btn btn-default">Интернет-магазины</button></li>
                            <li><button type="button" class="btn btn-default">Промо-сайты</button></li>
                            <li><button type="button" class="btn btn-default">Корпоративные сайты</button></li>
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
                    <a href="<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->image, 'ourproduct',$item->id, 315, 227); ?>" alt="<?php echo $item->name ?>" class="img-responsive"></a>
                    <p class="text-center"><a  href="<?php echo $item->url ?>" class="text_link"><?php echo $item->name ?></a></p>
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


    <!-- <div class="bs-example">
         <div class="progress progress-striped active">
             <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                 <span class="sr-only">Nothing change</span>
             </div>
         </div>
     </div>-->


    <!-- <div class="progress progress-striped active" style="width: 168px; height: 30px; margin-left: 50px;">
         <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">

         </div>
     </div>-->
    <!--<button style="position: absolute; bottom: -1624px; left: 84px;" type="button" class="btn btn-default load_button">
        Ещё больше работ
    </button>-->


    <p class="text-center"><button type="button" class="btn btn-default load_button">Ещё больше работ</button></p>

</article>