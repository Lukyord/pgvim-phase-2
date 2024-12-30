<div class="grid-gallery-item animate fadeIn" style="--grid-column-number: <?php echo $index + 1 ?>">
    <?php
    if (isset($gallery["link"]) && $gallery["link"] != "") {
    ?>
        <a href="<?php echo $gallery["link"] ?>" class="link-overlay" target="_blank">&nbsp;</a>
    <?php
    }
    ?>
    <div class="image">
        <img src="<?php echo $gallery["image"] ?>" alt="<?php echo $gallery["title"] ?> - Image" class="cover">
    </div>

    <div class="content">
        <div class="wrapper">
            <div class="text">
                <div class="info">
                    <p class="type"><?php echo $gallery["type"] ?></p>
                    <p class="info-date"><?php echo $gallery["date"] ?></p>
                </div>
                <h3 class="title"> <?php echo $gallery["title"] ?></h3>
            </div>

            <?php
            if (isset($gallery["link"]) && $gallery["link"] != "") {
            ?>
                <div class="cta show-md">
                    <p class="read-more">READ MORE</p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>