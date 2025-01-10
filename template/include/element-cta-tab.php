<div class="swiper-slide">
    <div class="tab">
        <a
            href="<?php
                    if (isset($tab["tab-id"]) && $tab["tab-id"] !== "") {
                        echo $tab["tab-id"];
                    } else {
                        echo "javascript:;";
                    } ?>"
            <?php if (
                isset($tab["tab-id"]) &&
                (strpos($tab["tab-id"], 'http') === 0 || strpos($tab["tab-id"], 'www') === 0)
            ) echo 'target="_blank"'; ?>
            class="tab-card tab-link <?php if ($index == 0) echo "active" ?>"
            style="--bg-color: var(<?php echo $tab["tab-color"] ?>); --bg-color-rgb: var(<?php echo $tab["tab-color"] ?>-rgb)">
            <div class="content-wrapper">
                <?php if (isset($tab["tab-image"])) { ?>
                    <div class="hover-image">
                        <img src="<?php echo $tab["tab-image"] ?>" alt="Tab Hover Image" draggable="false" class="cover">
                    </div>
                <?php } ?>
                <div class="wrapper">
                    <div class="illustration-image">
                        <img src="./assets/media/design/tab-illustration.svg" alt="Tab Illustration">
                    </div>
                    <div class="text-content">
                        <h3 class="tab-title"><?php echo $tab["tab-title"] ?></h3>
                        <p class="show-more size-button2 show-md">SHOW MORE</p>
                        <?php if (isset($tab["tab-description"])) { ?>
                            <p class="hover-description"><?php echo $tab["tab-description"]; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>