
<?php foreach ($ourproduct as $item) { ?>
    <div class="col-md-3 col-sm-6">
        <a href="/portfolio/<?php echo $item["url"] ?>"><img src="<?php echo Lib_Image::crop($item["image"], 'ourproduct',$item["id"], 333, 240); ?>" alt="<?php echo $item["name"] ?>" class="img-responsive"></a>
        <p class="text-center"><a  href="/portfolio/<?php echo $item["url"] ?>" class="text_link"><?php echo $item["name"] ?></a></p>
        <p class="text-center">
        </p>
    </div>
<?php } ?>