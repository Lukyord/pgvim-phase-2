<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="news-tag-main">
    <section id="news-tag-hero" class="sc hero">
        <?php
        $tab_detail = [
            "id" => "alumni-achievements",
            "title" => "Alumni Achievements",
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
                        <h2 class="title animate fadeIn size-h3 c-blue uppercase uppercase">
                            <?php echo $tab_detail["title"] ?>
                        </h2>
                    </div>

                    <div class="card-container fit" data-card-layout="grid">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            include($root . "include/detail-card.php");
                        } ?>
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