<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="search-result-main">
    <section id="search-result-hero" class="sc hero">
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
            <div class="sc-inner sc-inner--bottom-normal">
                <div class="container">
                    <?php
                    $directory_arr = [
                        [
                            "name" => "HOME",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "NEWS & ANNOUNCEMENT",
                            "url" => $root . "news.php"
                        ],
                        [
                            "name" => "NEWS",
                            "url" => ""
                        ]
                    ];

                    include($root . "include/element-directory.php");
                    ?>

                    <div class="collection-content-header">
                        <h2 class="title animate fadeIn size-h3 c-blue uppercase margin-bottom-0">
                            <?php echo $tab_detail["title"] ?>
                        </h2>

                        <div class="swiper auto tab-links">
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
                                    for ($i = 1; $i <= 12; $i++) {
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
                    "cta" => "SHOWMORE",
                    "extra-class" => "blue animate fadeIn"
                ];

                include($root . "include/element-staff-small.php");

                ?>
            </div>
        </div>
        </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>