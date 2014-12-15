<div class="block_w no_bord no_p_b">

    <div class="block">

        <div class="brcs">
            <b>Вы здесь:</b>
            <a href="/">Главная</a>
            <i>&bull;</i>
            <span><?php echo $name ?></span>
        </div>

        <h2 class="block_title"><span><?php echo $name ?></span></h2>

        <div class="adv_type_list">

            <?php $services_chunk=array_chunk($services,$chunk);
                    foreach($services_chunk as $service) { ?>
                        <div class="adv_type">
                            <ul> <?php foreach($service as $item) { ?>
                                    <li><a href="/service/<?php echo $item->url?>"><span><?php echo $item->name; ?></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

        </div>

    </div>

</div>

<div class="block_w no_bord">

    <div class="block">
        <div class="left_block">
            <div class="call_w">
                <strong>Ваш консультант</strong>
                <div class="cons_name">
                    <div class="img_wrap">
                        <img src="<?php echo $manager->icon?>" alt="<?php echo $manager->first_name?> <?php echo $manager->last_name?>"/>
                    </div>
                    <span><?php echo $manager->first_name?><br/><?php echo $manager->last_name?></span>
                </div>
                <span class="cons_cont"><b>Должность:</b><?php echo $manager->employee?></span>
                <span class="cons_cont"><b>Тел.:</b><?php echo $manager->phone?></span>
                <span class="cons_cont"><b>E-mail:</b><a href="mailto:<?php echo $manager->email?>"><span><?php echo $manager->email?></span></a></span>
                <a class="skype_call" href="skype:<?php echo $manager->skype?>"><i><!--skype_ico--></i><span>Начать разговор<b></b></span></a>
            </div>
        </div>

        <div class="right_block">

            <div class="tiles_wrap">

                <?php  foreach($services as $item) { ?>

                    <div class="item">
                        <a href="/service/<?php echo $item->url?>">
                            <img src="<?php echo Lib_Image::crop($item->main_image, 'service',$item->id, 268, 268); ?>" />
                                    <span class="tile_desc_w"><i></i>
                                        <strong class="tile_desc"><?php echo $item->short_content ?></strong>
                                    </span>
                            <span class="link_text"><?php echo $item->name ?><span></span></span>
                        </a>
                    </div>

                <?php } ?>

            </div>

        </div>



    </div>
</div>

<div class="block_w no_bord no_p_t zi_9">

    <div class="block ">
        <div class="page_desc">
            <?php echo $content;?>
        </div>

    </div>

</div>