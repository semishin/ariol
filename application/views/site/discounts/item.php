<div class="block_w no_bord no_p_b">

    <div class="block">

        <div class="brcs">
            <b>Вы здесь:</b>
            <a href="/">Главная</a>
            <i>&bull;</i>
            <a href="/discounts/">Акции</a>
            <i>&bull;</i>
            <span><?php echo $name ?></span>
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

            <div class="block_content">

                <h2 class="page_title"><span><?php echo $name ?></span></h2>

                <?php echo $content ?>


                <div class="form_wrap">
                    <strong class="form_title">Чтобы сделать заказ отправьте свои данные нам на почту.</strong>
                    <span class="form_desc">Наш менеджер свяжется с Вами в ближайшее время для подтверждения заказа.</span>

                    <form action="#">
                        <input name="name" type="text" placeholder="Ваше имя *" />
                        <input name="email" type="text" placeholder="E-mail *"/>
                        <input name="phone" type="text" placeholder="Телефон *"/>
                        <textarea name="text" placeholder="Комментарий"></textarea>

                        <div class="submit_wrap">
                            <input class="slider_link" type="submit" value="Сделать заказ"/>
                        </div>

                    </form>

                </div>




            </div>

        </div>
    </div>
</div>