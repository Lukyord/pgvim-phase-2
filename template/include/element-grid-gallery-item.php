<div
    <?php if ($gallery_type == "showcase") echo 'data-fancybox="gallery"' ?>
    <?php if ($gallery_type == "showcase") echo 'data-src="' . $gallery["image"] . '"' ?>
    <?php if ($gallery_type == "showcase") echo 'data-caption="' . $gallery["title"] . '"' ?>
    class="grid-gallery-item animate fadeIn <?php if ($gallery_type == "showcase") echo "showcase" ?>"
    style="--grid-column-number: <?php echo $index + 1 ?>">
    <?php
    if (isset($gallery["link"]) && $gallery["link"] != "") {
    ?>
        <a href="<?php echo $gallery["link"] ?>" class="link-overlay">&nbsp;</a>
    <?php
    }
    ?>
    <div class="image">
        <img
            src="<?php echo $gallery["image"] ?>"
            alt=""
            class="cover">
    </div>

    <div class="content">
        <div class="wrapper">
            <div class="text">
                <?php if (isset($gallery["type"]) && isset($gallery["date"])) { ?>
                    <p class="info">
                        <span class="type"><?php echo $gallery["type"] ?></span>
                        <span class="info-date"><?php echo $gallery["date"] ?></span>
                    </p>
                <?php } ?>
                <?php if (isset($gallery["title"])) { ?>
                    <h3 class="text-title"> <?php echo $gallery["title"] ?></h3>
                <?php } ?>
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