<article>

    <div class="row">
        <div class="col-md-12">
            <div class="our_works">
                <div class="middle_text">
                    <br>
                    <div class="breadcrumb_ariol">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active"><span>Блог</span></li>
                        </ol>
                    </div>
                    <h1 class="text-center">Наши новости</h1>

                </div>
            </div>
        </div>
    </div>


    <div class="news-list">

        <div class="row">
            <?php foreach ($article as $item) { ?>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="/articles/<?php echo $item->url ?>"><img src="/ariolby/img/icons/ya1.jpg" alt="..." class="img-responsive"></a>
                        <div class="caption">
                            <a href="/articles/<?php echo $item->url ?>"><span class="article_name"><?php echo $item->name ?></span></a>
                            <ul class="list-inline">
                                <li><img src="img/icons/icon_calendar-16.png" alt="calendar"> <?php echo $item->date ?></li>
                                <li><img src="img/icons/icon_comments-16.png" alt="comments"> ? 9 ?</li>
                                <li><img src="img/icons/icon_views-16.png" alt="views"> ? 12 ?</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

    <p class="text-center">
        <?php if ($count_articles > 8) { ?>
            <button type="button" id="more_articles" class="btn btn-default load_button">Ещё больше новостей</button>
        <?php } ?>
    </p>

</article>