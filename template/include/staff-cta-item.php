<?php $var_num = ($index % 4) + 1; ?>
<div class="staff-cta-item">
    <div class="image">
        <?php
        if (isset($item["description"])) {
        ?>
            <p class="description"><?php echo $item["description"] ?></p>
        <?php
        }
        ?>
        <?php if (isset($item["outer-link"])) { ?>
            <div class="circle-hover">
                <a
                    href="<?php echo $item["outer-link"] ?>"
                    class="link-overlay">&nbsp;</a>
                <img src="<?php echo $item["image"] ?>" alt="" loading="lazy" draggable="false">
            </div>
        <?php } elseif (isset($item["link"])) { ?>
            <div class="circle-hover no-hover tab">
                <a
                    href="<?php echo $item["link"]; ?>"
                    class="link-overlay">&nbsp;</a>
                <img src="<?php echo $item["image"] ?>" alt="" loading="lazy" draggable="false">
            </div>
        <?php } elseif (isset($item["slide-link"])) { ?>
            <div class="circle-hover">
                <a
                    href="javascript:;"
                    data-slide-id="<?php echo $item["slide-link"] ?>"
                    class="link-overlay timeline-trigger">&nbsp;</a>
                <img src="<?php echo $item["image"] ?>" alt="" loading="lazy" draggable="false">
            </div>
        <?php } ?>


        <p class="title"><?php echo $item["title"] ?></p>

    </div>
    <?php
    if (isset($item["decoration"])) {
    ?>
        <div class="decoration">
            <div class="illustration var-<?php echo $var_num; ?>">
                <img src="./assets/media/design/about-illustration<?php echo $var_num; ?>.svg" alt="Illustration" loading="lazy" draggable="false">
            </div>
        </div>
    <?php
    }
    ?>
</div>