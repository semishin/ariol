<div class="clear"></div>
<div class="content">
    <div class="container_16">

        <div class="grid_16">
            <div class="teni">
            </div>
        </div>
        <div class="grid_3">
            <div class="left_menu">
                <ul>
                    <?php foreach ($service as $item) { ?>
                        <li><a href="/service/<?php echo $url ?>/<?php echo $item->url ?>"><?php echo $item->name ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="grid_13">
            <article>
                <div class="top_p">
                    <h1><?php echo $name ?></h1>
                    <?php echo $content ?>
                </div>
                <div class="separator_"></div>

                <a class="order" href="/kontaktyi" rel="nofollow">Заказать</a>

                <div class="separator_"></div>
                <div class="korzinu">
                    <?php if ($images) {?>
                        <?php foreach ($images as $item) { ?>
                            <img src="<?php echo Lib_Image::crop($item, 'service_category',$id, 163, 163); ?>" alt="<?php echo $name ?>" class="telega img1_">
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="separator_"></div>
                <!--social-->
                <a href="#"><img class="soc_icons" src="/ironprod/img/sub_category_images/soc_icon_vk.jpg" alt="soc1"></a>
                <a href="#"><img class="soc_icons" src="/ironprod/img/sub_category_images/soc_icon_fb.jpg" alt="soc2"></a>
                <a href="#"><img class="soc_icons" src="/ironprod/img/sub_category_images/soc_icon_tw.jpg" alt="soc3"></a>
                <a href="#"><img class="soc_icons" src="/ironprod/img/sub_category_images/soc_icon_od.jpg" alt="soc4"></a>
                <a href="#"><img class="soc_icons" src="/ironprod/img/sub_category_images/soc_icon_g.jpg" alt="soc5"></a>
                <!--block gde vu  -->
                <div class="you_here">
                    <span class="orange_">Вы здесь:</span>
                    <span><a href="/">Главная</a> ></span>
                    <span class="orange_"><?php echo $name ?></span>
                </div>
                <br>
            </article>
        </div>
    </div>
</div>