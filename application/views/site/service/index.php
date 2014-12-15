<div class="block_w no_bord no_p_b">

    <div class="block">

        <div class="brcs">
            <b>Вы здесь:</b>
            <a href="/">Главная</a>
            <i>&bull;</i>
            <a href="/section/<?php echo $service_section->url ?>"><?php echo $service_section->name ?></a>
            <i>&bull;</i>
            <span><?php echo $name ?></span>
        </div>

    </div>

</div>

<div class="block_w no_bord no_p_t">

    <div class="block">

        <h2 class="block_title"><span><?php echo $name ?></span></h2>


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

            <div class="block_content">

                <?php foreach ($discounts as $item) { ?>

                    <div class="adv_block">
                        <img src="<?php echo Lib_Image::crop($item->second_image, 'discounts',$item->id, 849, 175); ?>" alt="<?php echo $item->name ?>"/>
                        <a class="read_more" href="/discount/<?php echo $item->url ?>"><span>Узнай подробности</span></a>
                    </div>

                <?php } ?>

                <?php echo $content ?>

                <div class="form_wrap">
                    <strong class="form_title">Хотите ознакомиться с нашим прайсом или уточнить условия сотрудничества?</strong>
                    <span class="form_desc">Отправьте нам заявку. Мы изучим Вашу ситуацию и составим предложение индивидуально для Вашего бизнеса.</span>

                    <form action="#">
                        <input name="name" type="text" placeholder="Ваше имя *" />
                        <input name="email" type="text" placeholder="E-mail *"/>
                        <input name="phone" type="text" placeholder="Телефон *"/>
                        <textarea name="text" placeholder="Комментарий"></textarea>

                        <div class="submit_wrap">
                            <input class="slider_link" type="submit" value="Отправить заявку"/>
                        </div>

                    </form>

                </div>




            </div>



        </div>



    </div>
</div>

<div class="block_w no_bord no_p_t block_bord zi_9">

    <div class="block">

        <h2 class="block_title small"><span><?php echo $service_section->name ?></span></h2>

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