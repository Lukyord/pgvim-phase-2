<div class="card animate fadeIn" data-card="detail">
    <?php
    if (isset($tab_detail["card-content"]["link"])) {
    ?>
        <a href="<?php echo $tab_detail["card-content"]["link"] ?>" class="link-overlay">&nbsp;</a>
    <?php } ?>

    <div class="card-image" data-more-info="MORE INFO">
        <figure class="object-fit">
            <img src="<?php echo $tab_detail["card-content"]["image"] ?>" loading="lazy" alt="">
        </figure>
    </div>

    <div class="card-content">
        <?php if (isset($tab_detail["card-content"]["subtitle"])) { ?>
            <div class="card-content-header">
                <p class="card-subttl"><?php echo $tab_detail["card-content"]["subtitle"] ?>
                </p>
                <?php if (isset($tab_detail["card-content"]["date"])) { ?>
                    <p class="card-date"><?php echo $tab_detail["card-content"]["date"] ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (isset($tab_detail["card-content"]["long-title"])) { ?>
            <h5 class="card-ttl-long"><?php echo $tab_detail["card-content"]["long-title"] ?>
                <?php if ($i == 1) echo "Lorem Lorem Lorem Lorem Lorem"; ?>
            </h5>
        <?php } ?>



        <?php if (isset($tab_detail["card-content"]["title"])) { ?>
            <h5 class="card-ttl"><?php echo $tab_detail["card-content"]["title"] ?>
                <?php if ($i == 1) echo "Lorem Lorem Lorem Lorem Lorem"; ?>
            </h5>
        <?php } ?>

        <?php if (isset($tab_detail["card-content"]["description"])) { ?>
            <p class="card-desc">
                <?php echo $tab_detail["card-content"]["description"] ?>
                <?php if ($i == 1) echo "Lorem Lorem Lorem Lorem Lorem"; ?>
            </p>
        <?php } ?>

        <?php if (isset($tab_detail["card-content"]["detail"])) { ?>
            <table class="card-table">
                <?php foreach ($tab_detail["card-content"]["detail"] as $key => $value) { ?>
                    <tr>
                        <td><?php echo ucfirst($key); ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
    </div>
</div>