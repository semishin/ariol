<div class="block_w no_bord no_p_b">

    <div class="block">

        <div class="brcs">
            <b>Вы здесь:</b>
            <a href="/">Главная</a>
            <i>&bull;</i>
            <span><?php echo $name?></span>
        </div>
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

            <h1 class="section-title-h"><?php echo $name; ?></h1>

            <div class="actions_wrap">


                <?php  foreach($news as $item) { ?>

                    <div class="action_item">
                        <a href="/news/<?php echo $url?>/<?php echo $item->url?>">
                            <span class="img_wrap"><img src="<?php echo Lib_Image::crop($item->main_image, 'news',$item->id, 408, 264); ?>" /></span>
                            <span class="action_percentage"><?php echo $item->created_at?></span>
                                    <span class="action_text_w">
                                        <span class="action_text"><?php echo $item->name?></span>
                                    </span>
                        </a>
                    </div>

                <?php } ?>


            </div>

            <?php echo $pagination?>

        </div>

<?php /* ?>       <div class="right_block">

                        <h1 class="section-title-h"><?php echo $name; ?></h1>

                        <div class="block_content">

                            <div class="news-list">
                                <?php foreach ($news as $item) { ?>
                                    <p class="news-item" id="bx_1914200112_82">
                                        <span class="news-date-time"><?php echo date('d.m.Y', strtotime($item->created_at)); ?></span>
                                        <a href="/about-us/news-company/<?php echo $item->id; ?>/"><b><?php echo $item->name; ?></b></a><br />
                                    <p></p>
                                    <?php echo $item->short_content; ?>
                                    </p>
                                    <br />
                                <?php } ?>
                            </div>

                        </div>

       </div>
<?php */ ?>
    </div>
</div>
