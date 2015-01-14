<article>
    <div class="row">
        <div class="col-md-12">
            <div class="our_works">
                <div class="middle_text">
                    <br>

                    <div class="breadcrumb_ariol">

                    </div>
                    <h1 class="text-center"><?php echo $name ?></h1>

                </div>
            </div>
        </div>
    </div>

    <div class="news">

        <div class="row">
            <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8">
                <div class="news_text">
                    <p><?php echo $content ?></p>
                </div>
            </div>

            <div class="form_wrap">

                <strong class="form_title">Если надо заполнить</strong>
                <span class="form_desc">Наш менеджер свяжется с Вами в ближайшее время для подтверждения заказа.</span>

                <form action="#">
                    <input name="name" type="text" placeholder="Ваше имя *" />
                    <input name="email" type="text" placeholder="E-mail *"/>
                    <input name="phone" type="text" placeholder="Телефон *"/>
                    <textarea name="text" placeholder="Комментарий"></textarea>

                    <div class="submit_wrap">
                        <input class="slider_link" id="feedb_but" type="submit" value="Сделать заказ"/>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <div id="gmap" style="height: 400px;"></div>

</article>
