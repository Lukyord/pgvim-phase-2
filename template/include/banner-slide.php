<div class="banner-slide">
    <div class="wrapper animate fadeIn">

        <?php
        if (isset($slide_subtitle)) {
        ?>
            <p class="section-description"><?php echo $slide_subtitle ?></p>
        <?php } ?>

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($slide_arr as $index => $slide) {
                ?>
                    <div class="swiper-slide cta-hover-bg">
                        <div class="wrapper">
                            <div class="image">
                                <?php
                                $cover = $slide["image"];
                                $cover_m = $slide["image_m"];
                                ?>
                                <picture class="object blurred-media">
                                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                    <img
                                        src="<?php echo $cover; ?>"
                                        alt=""
                                        class="cover"
                                        loading="lazy"
                                        draggable="false">
                                </picture>
                            </div>

                            <div class="content">
                                <h2 class="title"><?php echo $slide["title"] ?></h2>

                                <?php
                                if (isset($slide["description"])) {
                                ?>
                                    <p class="description">
                                        <?php echo $slide["description"] ?>
                                    </p>
                                <?php
                                } ?>

                                <?php
                                if (isset($slide["list-info"])) {
                                ?>
                                    <table class="list-info">
                                        <?php foreach ($slide["list-info"] as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo ucfirst($key); ?></td>
                                                <td><?php echo $value; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($slide["cta"]) && isset($slide["link"])) {
                                    $staff = [
                                        "link" => $slide["link"],
                                        "cta" => $slide["cta"],
                                    ];

                                    if (isset($slide["new-tab"])) {
                                        $staff["new-tab"] = $slide["new-tab"];
                                    }


                                    include($root . "include/element-staff-small.php");
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>