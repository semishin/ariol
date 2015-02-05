<?php foreach ($article as $item) { ?>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <a href="/articles/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->image, 'article',$item->id, 297, 297); ?>" alt="<?php echo $item->name ?>" class="img-responsive"></a>
            <div class="caption">
                <a href="/articles/<?php echo $item->url ?>"><span class="article_name"><?php echo $item->name ?></span></a>
                <ul class="list-inline">
                    <li><img src="/ariolby/img/icons/icon_calendar-16.png" alt="calendar"> <?php echo $item->date ?></li>
<!--                    <li><img src="/ariolby/img/icons/icon_comments-16.png" alt="comments"> ? 9 ?</li>-->
                    <?php if($item->count_views) { ?><li><img src="/ariolby/img/icons/icon_views-16.png" alt="views"> <?php echo $item->count_views ?></li><?php } ?>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>