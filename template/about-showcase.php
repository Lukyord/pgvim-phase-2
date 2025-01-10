<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-showcase-main">
    <section id="showcase-hero" class="sc hero height-screen">
        <div class="sc-inner">
            <div class="container">
                <?php
                $directory_arr = [
                    [
                        "name" => "HOME",
                        "url" => $root . "index.php"
                    ],
                    [
                        "name" => "ABOUT US",
                        "url" => ""
                    ],
                    [
                        "name" => "SHOWCASES",
                        "url" => ""
                    ]
                ];

                include($root . "include/element-directory.php");
                ?>

                <?php
                $section = [
                    "title" => "SHOWCASES",
                    "description" => "PGVIM is a place to develop the young generation of musicians to meet the international standard in many ways of music-making, to expand the boundaries of musical carriers. In the meantime, PGVIM is a global music hub to exchange musical knowledge both locally and internationally."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="marquee-full-screen animate fadeIn">
                    <div class="showcases-marquee">
                        <?php
                        include($root . "include/element-staff.php");
                        ?>

                        <div class="marquee-wrapper animate fadeIn">
                            <div class="marquee" data-js="liMarquee">
                                <?php
                                $element_arr = [
                                    [
                                        "image" => "./assets/media/design/element1.png",
                                        "rotate-deg" => "10"
                                    ],
                                    [
                                        "image" => "./assets/media/design/element2.png",
                                        "rotate-deg" => "-10"
                                    ],
                                    [
                                        "image" => "./assets/media/design/element3.jpg",
                                        "rotate-deg" => "10"
                                    ],
                                    [
                                        "image" => "./assets/media/design/element4.svg",
                                        "rotate-deg" => "0"
                                    ],
                                    [
                                        "image" => "./assets/media/design/element5.png",
                                        "rotate-deg" => "-10"
                                    ],
                                    [
                                        "image" => "./assets/media/design/element6.jpg",
                                        "rotate-deg" => "10"
                                    ],
                                ];

                                foreach ($element_arr as $index => $element) {
                                ?>
                                    <div
                                        class="marquee-item fancybox-trigger"
                                        data-index="<?php echo $index + 1 ?>"
                                        style="--rotate-deg: <?php echo $element["rotate-deg"] ?>deg">
                                        <picture class="object-contain">
                                            <img src="<?php echo $element["image"] ?>" alt="">
                                        </picture>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="showcase-grid" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="container">
                <div class="grid-gallery" style="--columns-number: 3">
                    <div class="wrapper">
                        <?php
                        $gallery_type = "showcase";

                        for ($index = 1; $index <= 12; $index++) {
                            $imageNumber = ($index - 1) % 3 + 1;

                            $gallery = [
                                "title" => "PGVIM Showcase",
                                "image" => "./assets/media/design/showcase" . $imageNumber . ".jpg",
                            ];
                            include($root . "include/element-grid-gallery-item.php");
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            $staff = [
                "link" => "javascript:;",
                "cta" => "SHOW MORE",
                "extra-class" => "blue animate fadeIn"
            ];

            include($root . "include/element-staff-small.php");

            ?>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>