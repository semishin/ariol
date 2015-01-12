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