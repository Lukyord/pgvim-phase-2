<?php

use function PHPSTORM_META\map;

$root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="news-single-main">
    <section id="news-single-hero" class="sc height-screen hero hero-bg-banner">
        <div class="cover">
            <div class="wrapper gradient-overlay">
                <?php
                $section_cover = "./assets/media/design/hero-banner-bg.jpg";
                $section_cover_m = "./assets/media/design/hero-banner-bg-m.jpg";
                include($root . "include/function-group.php");
                ?>
            </div>
        </div>

        <div class="sc-inner">
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
                $on_dark_bg = true;

                include($root . "include/element-directory.php");
                ?>

                <div class="section-header">
                    <div class="description animate fadeIn c-white">
                        <p class="desc-subttl">Performances</p>
                        <p class="desc-date">20 Sep 2024</p>
                    </div>

                    <h2 class="title animate fadeIn" data-wow-delay="0.3s">
                        The world's most promising
                        young artists are chosen to come
                        to Verbier each summer to work
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="news-single-content" class="sc">
        <div class="sc-inner">
            <div class="container">
                <div class="single-page-content">
                    <div class="entry-content max-width entry-fadeIn">
                        <h4>Be The Hope</h4>

                        <p>Your gift to us can be designated to a number of high priority programs. Contact us to learn more about the different ways that you can make a difference to our students and faculty.</p>

                        <p>
                            <strong>Share our passion</strong><br>
                            The College of Music welcomes contribution from individuals and corporations to encourage and retain the best and brightest young artists in Thailand.
                        </p>

                        <p>
                            <strong>Make a change</strong><br>
                            By supporting scholarships you can actively play an integral role in helping students.
                        </p>

                        <p>
                            <strong>Make a gifts</strong><br>
                            The College operatives several endowments including the “General Prem Music Scholarship Fund” and the “Land of Smiles” Thailand Philharmonic Orchestra Fund that provide ongoing support to the College and its educational mission.
                        </p>

                        <p>
                            <strong>Corporate Sponsorships</strong><br>
                            The College's “Corporate Club” aims to provide a platform for business leaders and individuals to appreciate and support the work of our students, and at the same time network and socialize with business associates and friends.
                        </p>

                        <figure class="wp-block-image size-large">
                            <img src="./assets/media/design/2007.jpg" alt="">
                        </figure>

                        <p>
                            Your support is vital to enhancing our campus and enriching the educational experience. By contributing, you help create a vibrant environment for learning, collaboration, and creativity. Your donations will fund facilities, resources, and programs that empower students and faculty alike, ensuring we continue to foster talent and innovation in music and beyond. Join us in building a brighter future for our community
                        </p>
                    </div>

                    <div class="share c-blue animate fadeIn">
                        <p class="size-sub">SHARE</p>
                        <div class="social">
                            <a href="javascript:;" onclick="fbShare()" target="_blank"><i class="ic ic-facebook"></i></a>
                            <a href="javascript:;" onclick="lineMSG()" target="_blank"><i class="ic ic-line"></i></a>
                            <a href="javascript:;" onclick="tweetShare()" target="_blank"><i class="ic ic-twitter"></i></a>
                        </div>
                    </div>

                    <div class="news-tags animate fadeIn">
                        <h4 class="size-h4 c-blue">TAGS</h4>
                        <div class="tags">
                            <?php
                            $tags_arr = [
                                "Alumni Achievement",
                                "Our Musicians",
                                "Csr",
                                "Sponserships",
                                "Student Opportunity",
                                "Pgvim Life",
                                "Music"
                            ];

                            foreach ($tags_arr as $tag) {
                            ?>
                                <a href="<?php echo $root; ?>news-tag.php" class="tag button">
                                    <?php echo $tag; ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="featured-news" class="sc">
        <div class="sc-inner sc-inner--follows overflow-visible">
            <div class="illustration var-5 rellax" data-rellax-speed="-0.4">
                <img src="./assets/media/design/illustration5.svg" alt="Illustration" loading="lazy" draggable="false">
            </div>
            <div class="illustration var-4 rellax" data-rellax-speed="-0.2">
                <img src="./assets/media/design/illustration4.svg" alt="Illustration" loading="lazy" draggable="false">
            </div>
            <div class="illustration var-7 rellax show-md" data-rellax-speed="-0.4">
                <img src="./assets/media/design/illustration7.svg" alt="Illustration" loading="lazy" draggable="false">
            </div>

            <h2 class="page-padding sc-title animate fadeIn">
                YOU MAY ALSO LIKE
            </h2>

            <div class="grid-gallery zigzag animate fadeIn" style="--columns-number: 5">
                <div class="wrapper">
                    <?php
                    $gallery_type = "news";

                    $grid_gallery_arr = [
                        [
                            "type" => "SUSTAINABILITY EXPO",
                            "date" => "27 SEP - 6 OCT 2024 ",
                            "title" => "PGVIM participated in SX2024 and the Healing Melodies Charity Concert at QSNCC, featuring performances by Time Soul Percussion Group",
                            "link" => $root . "news-single.php",
                            "image" => "./assets/media/design/index-news-image1.jpg",
                        ],
                        [
                            "type" => "RATCHABURI",
                            "date" => "1 - 4 NOV 2024",
                            "title" => "Recognising culture through sound: Karen folk melodies inspire cultural tourism",
                            "link" => $root . "news-single.php",
                            "image" => "./assets/media/design/index-news-image2.jpg",
                        ],
                        [
                            "type" => "PGVIM SYMPOSIUM",
                            "date" => "18 - 24 AUG 2024",
                            "title" => "Beyond Genres, Beyond Generations: PGVIM Symposium 2024 'Dreamland'  creates revolutionary platform for musical dialogue",
                            "link" => "https://www.pgvis.com/",
                            "image" => "./assets/media/design/index-news-image3.jpg",
                        ],
                        [
                            "type" => "LITTLE PRINCE",
                            "date" => "6 SEP 2024",
                            "title" => "The immortal world literature 'The Little Prince' (Le Petit Prince) comes alive once again on stage at Thailand Cultural Centre",
                            "link" => $root . "news-single.php",
                            "image" => "./assets/media/design/index-news-image4.jpg",
                        ],
                        [
                            "type" => "MUSIC ON THE MOVE",
                            "date" => "10 - 14 JULY 2024",
                            "title" => "Young musicians gather for a unique music camp in Hua Hin, combining intensive chamber music training with performances at iconic venues",
                            "link" => "https://bio.site/MusicontheMove",
                            "image" => "./assets/media/design/index-news-image5.jpg",
                        ],
                    ];

                    foreach ($grid_gallery_arr as $index => $gallery) {
                        include($root . "include/element-grid-gallery-item.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>