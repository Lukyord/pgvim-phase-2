<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main main">
    <?php
    include($root . "include/element-index-loading-screen.php");
    ?>

    <section id="index-hero" class="sc hero height-screen">
        <div class="sc-inner">
            <div class="main-text a-center">
                <h1 class="title size-h2 c-blue animate fadeIn">
                    PRINCESS <br class="hidden-device-md">
                    GALYANI VADHANA <br class="hidden-device-md">
                    INSTITUTE OF MUSIC
                </h1>
                <p class="description c-gold size-sub2 weight-light animate fadeIn">
                    Princess Galyani Vadhana Institute of Music, Thailand
                    <br>A place to learn and be inspired by music.
                </p>
            </div>

            <div class="hero-marquee-wrapper">
                <div class="upcoming-event">
                    <?php
                    $staff_title = "UPCOMING EVENT";

                    include($root . "include/element-staff.php");
                    ?>

                    <div class="marquee-wrapper animate fadeIn">
                        <div class="marquee" data-js="liMarquee">
                            <?php
                            $events_arr = [
                                [
                                    "link" => "https://www.facebook.com/PGVIMusic",
                                    "image" => "./assets/media/design/event1.jpg",
                                    "date" => "8 DEC 2024",
                                    "event-name" => "The Royal Celebration Concert on the Auspicious Occasion of His Majesty The King's Sixth Cycle Birthday Anniversary 28th July 2024",
                                ],
                                [
                                    "link" => "https://www.facebook.com/PrincessGalyaniVadhanaYouthOrchestra",
                                    "image" => "./assets/media/design/event2.jpg",
                                    "date" => "20 DEC 2024",
                                    "event-name" => "PYO Project MADS",
                                ],
                                [
                                    "link" => "https://www.facebook.com/PGVIMusic",
                                    "image" => "./assets/media/design/event3.jpg",
                                    "date" => "11 JAN 2024",
                                    "event-name" => "PGVIM POP-UP!",
                                ],
                                [
                                    "link" => "https://www.facebook.com/PGVIMsingers",
                                    "image" => "./assets/media/design/event4.jpg",
                                    "date" => "25 JAN 2025",
                                    "event-name" => "PGVIM SINGERS",
                                ],
                            ];

                            foreach ($events_arr as $index => $event) {
                                $var_num = ($index % 4) + 1;
                            ?>
                                <div class="marquee-item">
                                    <div class="circle-hover image">
                                        <a href="<?php echo $event["link"] ?>" target="_blank" class="link-overlay" target="_blank">&nbsp;</a>
                                        <img src="<?php echo $event["image"] ?>" alt="Event Image <?php echo $index + 1 ?>" loading="lazy" draggable="false">

                                        <div class="detail hidden-device-md">
                                            <p class="size-sub c-blue"><?php echo $event["date"] ?></p>
                                            <p class="event-name size-h5 c-blue"><?php echo $event["event-name"] ?></p>
                                        </div>
                                    </div>
                                    <div class="decoration">
                                        <div class="illustration var-<?php echo $var_num; ?>">
                                            <img src="./assets/media/design/illustration<?php echo $var_num; ?>.svg" alt="Illustration" loading="lazy" draggable="false">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="index-announcement" class="sc">
        <div class="wrapper animate fadeIn">
            <p class="section-description size-sub c-white">ANNOUNCEMENT</p>

            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $announcement_arr = [
                        [
                            "image" => "./assets/media/design/index-announcement-image1.jpg",
                            "image_m" => "./assets/media/design/index-announcement-image1-m.jpg",
                            "title" => "STUDENT LIFE",
                            "description" => "We want you to connect and stay connected with an active <br>student life - whether you are joining us on campus",
                            "link" => "#outer",
                            "cta" => "READ MORE",
                        ],
                    ];

                    foreach ($announcement_arr as $index => $announcement) {
                    ?>
                        <div class="swiper-slide">
                            <div class="wrapper">
                                <div class="image">
                                    <?php
                                    $cover = $announcement["image"];
                                    $cover_m = $announcement["image_m"];
                                    ?>
                                    <picture class="object blurred-media">
                                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                        <img
                                            src="<?php echo $cover; ?>"
                                            alt="Announcement Image"
                                            class="cover"
                                            loading="lazy"
                                            draggable="false">
                                    </picture>
                                </div>

                                <div class="content">
                                    <h2 class="title size-h1 c-white"><?php echo $announcement["title"] ?></h2>
                                    <p class="description c-white margin-top-30 margin-bottom-30">
                                        <?php echo $announcement["description"] ?>
                                    </p>
                                    <?php
                                    $staff = [
                                        "link" => $announcement["link"],
                                        "cta" => $announcement["cta"],
                                    ];

                                    include($root . "include/element-staff-small.php");
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
    </section>

    <section id="index-latest-news" class="sc">
        <div class="sc-inner">
            <h2 class="title animate fadeIn size-h3 c-blue">
                LATEST NEWS
            </h2>

            <div class="grid-gallery animate fadeIn" style="--columns-number: 5">
                <div class="wrapper">
                    <?php
                    $grid_gallery_arr = [
                        [
                            "type" => "SUSTAINABILITY EXPO",
                            "date" => "27 SEP - 6 OCT 2024 ",
                            "title" => "PGVIM participated in SX2024 and the Healing Melodies Charity Concert at QSNCC, featuring performances by Time Soul Percussion Group",
                            "link" => "",
                            "image" => "./assets/media/design/index-news-image1.jpg",
                        ],
                        [
                            "type" => "RATCHABURI",
                            "date" => "1 - 4 NOV 2024",
                            "title" => "Recognising culture through sound: Karen folk melodies inspire cultural tourism",
                            "link" => "",
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
                            "link" => "",
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


            <?php
            $staff = [
                "link" => "#outer-latest-news",
                "cta" => "EXPLORE MORE",
                "extra-class" => "blue animate fadeIn"
            ];

            include($root . "include/element-staff-small.php");

            ?>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>