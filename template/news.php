<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="news-main">
    <?php
    include($root . "include/element-scroll-top-button.php");
    ?>

    <section id="news-hero" class="sc hero height-screen">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <?php
                $directory_arr = [
                    [
                        "name" => "HOME",
                        "url" => $root . "index.php"
                    ],
                    [
                        "name" => "NEWS & ANNOUNCEMENT",
                        "url" => ""
                    ],
                ];

                include($root . "include/element-directory.php");
                ?>

                <?php
                $section = [
                    "title" => "NEWS & ANNOUNCEMENT",
                    "description" => "In our News and Announcements section, you'll find important updates, upcoming events, and highlights from our vibrant music community. Whether it’s new program offerings, student achievements, or special performances, this is your go-to source for all the exciting developments at our institute."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="staff-cta-wrapper slide animate fadeIn" style="--slide-column: 3;">
                    <div class="inner-wrapper">
                        <?php
                        include($root . "include/element-staff.php");
                        ?>

                        <div class="swiper cta-tabs animate slideInFromRight">
                            <div class="swiper-wrapper">
                                <?php
                                $items_arr = [
                                    [
                                        "link" => "#news-sc",
                                        "title" => "NEWS",
                                        "image" => "./assets/media/design/news-figure1.png",
                                    ],
                                    [
                                        "link" => "#announcement-sc",
                                        "title" => "ANNOUNCEMENT",
                                        "image" => "./assets/media/design/news-figure2.png",
                                    ],
                                    [
                                        "link" => "#good-governance-sc",
                                        "title" => "GOOD GOVERNANCE",
                                        "image" => "./assets/media/design/news-figure3.png",
                                    ],
                                ];

                                foreach ($items_arr as $index => $item) {
                                ?>
                                    <div class="swiper-slide">

                                        <?php
                                        include($root . "include/staff-cta-item.php");
                                        ?>
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

    <section id="news-sc" class="sc">
        <?php
        $tab_detail = [
            "id" => "news",
            "title" => "NEWS",
            "type" => [
                "news-all" => "All",
                "news-alumni-achievements" => "Alumni Achievements",
                "news-performances" => "Performances",
                "news-music" => "Music",
            ],
            "card-content" => [
                "link" => $root . "news-single.php",
                "image" => "./assets/media/design/history-image2.jpg",
                "subtitle" => "Alumni Achievements",
                "date" => "20 Sep 2024",
                "long-title" => "Each Year, PGVIM Hosts a Select Group of Gifted Young Artists for a Summer Program, Technical Excellence, and Collaboration in a Supportive and Dynamic Environment.",
            ],
        ];
        ?>
        <div class="collection-content tab-container">
            <div class="sc-inner sc-inner--no-padding-top overflow-visible">
                <div class="container">
                    <div class="collection-content-header">
                        <h2 class="title animate fadeIn size-h3 c-blue uppercase">
                            <?php echo $tab_detail["title"] ?>
                        </h2>

                        <div class="swiper auto tab-links animate fadeIn">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($tab_detail["type"] as $key => $value) {
                                    $first_key = array_key_first($tab_detail["type"]);
                                ?>
                                    <div class="swiper-slide">
                                        <div class="tab">
                                            <a href="#<?php echo $key ?>" class="button <?php if ($key == $first_key) echo "active" ?>">
                                                <?php echo $value ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="swiper-slide show-md">
                                    <?php
                                    include($root . "include/button-search.php");
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="hidden-device-md">
                            <?php
                            include($root . "include/button-search.php");
                            ?>
                        </div>
                    </div>

                    <div class="tab-contents">
                        <?php
                        foreach ($tab_detail["type"] as $key => $value) {
                            $first_key = array_key_first($tab_detail["type"]);
                        ?>
                            <div class="tab-content <?php if ($key == $first_key) echo "active"; ?>" id="<?php echo $key ?>">
                                <div class="card-container fit" data-card-layout="grid">
                                    <?php
                                    for ($i = 1; $i <= 6; $i++) {
                                        include($root . "include/detail-card.php");
                                    } ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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
        </div>
    </section>

    <section id="announcement-sc" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="container">
                <div class="two-side tab-container news">
                    <?php
                    $tab_detail = [
                        "id" => "announcement-sc",
                        "title" => "ANNOUNCEMENT",
                        "type" => [
                            "all" => "ALL",
                            "announcement" => "ANNOUNCEMENT",
                            "annual-Report" => "ANNUAL REPORT",
                            "procurement" => "PROCUREMENT",
                        ],
                    ];
                    ?>
                    <div class="tabs">
                        <div class="sticky-content">
                            <h2 class="title animate fadeIn">
                                <?php echo $tab_detail["title"] ?>
                            </h2>

                            <div class="swiper auto tab-links animate fadeIn">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($tab_detail["type"] as $key => $value) {
                                        $first_key = array_key_first($tab_detail["type"]);
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="tab">
                                                <a href="#<?php echo $key; ?>" class="button <?php if ($key == $first_key) echo "active" ?>"><?php echo $value; ?></a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-contents">
                        <?php
                        foreach ($tab_detail["type"] as $key => $value) {
                            $first_key = array_key_first($tab_detail["type"]);
                        ?>
                            <div class="tab-content <?php if ($key == $first_key) echo "active"; ?>" id="<?php echo $key ?>">
                                <div class="swiper auto fade">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $announcement_item = [
                                            "type" => "announcement",
                                            "title" => "Cancellation of Classes and Participation in the Musical Performance in Honor of His Majesty on Friday, February 17, 2023.",
                                            "date" => "20 Sep 2024",
                                            "link" => $root . "news-single.php",
                                        ];

                                        $announcement_list = array_fill(0, 16, $announcement_item);

                                        $chunks = array_chunk($announcement_list, 5);


                                        foreach ($chunks as $chunk) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="card-container" data-card-layout="grid" style="--gap-x: var(--spacing-2sm);">
                                                    <?php foreach ($chunk as $announcement) {
                                                        include($root . "include/announcement-card.php");
                                                    } ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="swiper-navigation">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="good-governance-sc" class="sc">
        <?php
        $tab_detail = [
            "detail-title" => "GOOD<br>GOVERNANCE",
            "detail-image" => "./assets/media/design/collection-bg.jpg",
            "detail-image-m" => "./assets/media/design/collection-bg-m.jpg",
        ]
        ?>
        <div class="collection-file-download cta-hover-bg">
            <div class="cover">
                <div class="wrapper gradient-overlay" style="--overlay-opacity: 0.2;">
                    <?php
                    $section_cover =  $tab_detail["detail-image"];
                    $section_cover_m =  $tab_detail["detail-image-m"];
                    include($root . "include/function-group.php");
                    ?>
                </div>
            </div>

            <div class="wrapper">
                <h2 class="detail-title animate fadeIn"><?php echo $tab_detail["detail-title"] ?></h2>

                <?php
                $staff = [
                    "file-download" => "true",
                    "link" => "#download",
                    "cta" => "DOWNLOAD REPORT",
                    "extra-class" => "animate fadeIn"
                ];

                include($root . "include/element-staff-small.php");

                ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>