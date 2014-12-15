<div class="block_w no_bord no_p_b">

    <div class="block">

        <div class="brcs">
            <b>Вы здесь:</b>
            <a href="/">Главная</a>
            <i>&bull;</i>
            <span>Акции</span>
        </div>

        <h2 class="block_title"><span>Акции</span></h2>

    </div>

</div>

<div class="block_w no_bord zi_9">

    <div class="block">

        <div class="left_block">
            <div class="call_w">
                <strong>Ваш консультант</strong>
                <div class="cons_name">
                    <div class="img_wrap">
                        <img src="/lumena/i/consultant_avatar.jpg" alt="Карина Михайлова"/>
                    </div>
                    <span>Карина<br/>Михайлова</span>
                </div>
                <span class="cons_cont"><b>Тел.:</b>+ 375 (17) 292 34 11</span>
                <span class="cons_cont"><b>E-mail:</b><a href="mailto:lumena.ad@gmail.com"><span>lumena.ad@gmail.com</span></a></span>
                <a class="skype_call" href="#"><i><!--skype_ico--></i><span>Начать разговор<b></b></span></a>
            </div>
        </div>

        <div class="right_block">

            <div class="actions_wrap">


                <?php  foreach($discounts as $item) { ?>

                    <div class="action_item">
                        <a href="/discount/<?php echo $item->url?>">
                            <span class="img_wrap"><img src="<?php echo Lib_Image::crop($item->main_image, 'discounts',$item->id, 408, 264); ?>" /></span>
                            <span class="action_percentage"><?php echo $item->benefit?></span>
                                    <span class="action_text_w">
                                        <span class="action_text"><?php echo $item->short_text?></span>
                                    </span>
                        </a>
                    </div>

                <?php } ?>


            </div>

            <?php echo $pagination?>

        </div>
    </div>
</div>