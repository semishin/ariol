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
                            <li class="active"><span><?php echo ucfirst($name) ?></span></li>
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
                            <?php echo $task; ?>
                        </p>
                        <br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-sm-8 no-padding_right">
                        <img src="<?php echo Lib_Image::crop($second_image, 'ourproduct',$id, 929, 702); ?>" alt="<?php echo $name ?>" class="img-responsive">

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
                                <a target="_blank" rel="nofollow" href="<?php echo $link ?>" class="text_link15"><?php echo $link ?></a>

                                <br><strong>Дата разработки:</strong><br>
                                <?php echo $date ?>
                                <?php if ($performer) {?>
                                    <br><strong>В проекте учавствовали:</strong><br>
                                    <?php echo $performer ?>
                                <?php }?>
                            </p>
                        </div>
<!--
                        <div class="green_tooltip">
                            <p>Интересный эффект при наведении курсора
                                на товар</p>
                            <img src="/ariolby/img/work-description/green-tooltip.png" alt="tool-tip">
                        </div>
                        <img src="/ariolby/img/work-description/after_green-tooltip.png" alt="image" class="img-responsive">
-->
                        <div>
                            <?php echo $feature ?>
                        </div>
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
                <?php foreach ($pre_ourproduct as $item) { ?>
                    <div class="col-md-4 col-sm-4">
                        <a href="/portfolio/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->image, 'ourproduct',$item->id, 349, 251); ?>"<?php echo $item->name ?>" class="img-responsive"></a>
                        <p class="text-center"><a  href="/portfolio/<?php echo $item->url ?>" class="text_link"><?php echo $item->name ?></a></p>
                        <p class="text-center"><?php $names = array(); ?>
                            <?php foreach ($item->categories->find_all() as $cat) { ?>
                                <?php $names[] = mb_ucfirst(mb_strtolower($cat->name)); ?>
                            <?php } ?>
                            <?php echo join(', ', $names); ?></p>
                    </div>
                <?php } ?>

                <?php foreach ($post_ourproduct as $item) { ?>
                    <div class="col-md-4 col-sm-4">
                        <a href="/portfolio/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->image, 'ourproduct',$item->id, 349, 251); ?>" alt="<?php echo $item->name ?>" class="img-responsive"></a>
                        <p class="text-center"><a  href="/portfolio/<?php echo $item->url ?>" class="text_link"><?php echo $item->name ?></a></p>
                        <p class="text-center"><?php $names = array(); ?>
                            <?php foreach ($item->categories->find_all() as $cat) { ?>
                                <?php $names[] = mb_ucfirst(mb_strtolower($cat->name)); ?>
                            <?php } ?>
                            <?php echo join(', ', $names); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</article>