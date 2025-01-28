<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="activities-main tab-container">
    <?php
    include($root . "include/element-scroll-top-button.php");
    ?>

    <section id="activities-hero" class="sc hero height-screen">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <?php
                $directory_arr = [
                    [
                        "name" => "HOME",
                        "url" => $root . "index.php"
                    ],
                    [
                        "name" => "ACTIVITIES & PROJECTS",
                        "url" => ""
                    ],
                ];

                include($root . "include/element-directory.php");
                ?>

                <?php
                $section = [
                    "title" => "ACTIVITIES & PROJECTS",
                    "description" => "At PGVIM, our Activities and Projects showcase the dynamic engagement of our music community. From collaborative performances and masterclasses to community outreach and innovative workshops, we create opportunities for students and faculty to connect, learn, and grow together. These initiatives not only enhance artistic skills but also foster a sense of camaraderie and inspire a lifelong passion for music."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="staff-cta-wrapper animate fadeIn">
                    <div class="inner-wrapper">
                        <?php
                        include($root . "include/element-staff.php");
                        ?>

                        <div class="swiper cta-tabs tab-links animate slideInFromRight">
                            <div class="swiper-wrapper">
                                <?php
                                $items_arr = [
                                    [
                                        "link" => "#event-activity",
                                        "title" => "EVENT & ACTIVITY",
                                        "image" => "./assets/media/design/activity-figure1.png",
                                    ],
                                    [
                                        "link" => "#our-project",
                                        "title" => "OUR PROJECT",
                                        "image" => "./assets/media/design/activity-figure2.png",
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

    <section id="activities-content" class="sc">
        <div class="tab-contents">
            <div class="tab-content active" id="event-activity">
                <?php
                $tab_detail = [
                    "id" => "event-activity",
                    "title" => "EVENT & ACTIVITY",
                    "card-content" => [
                        "image" => "./assets/media/design/history-image2.jpg",
                        "subtitle" => "Performance",
                        "title" => "Music, Conflict, and Harmony: Dreamland",
                        "description" => "Pink Sky Orcas and Fien Lert",
                        "detail" => [
                            "date" => "24 August 2024",
                            "time" => "3.30-4.30 PM",
                        ],
                        "link" => $root . "activity-single.php",
                    ],
                ];
                ?>

                <?php
                $slide_subtitle = "FEATURED EVENTS";
                $slide_arr = [
                    [
                        "image" => "./assets/media/design/event-bg.jpg",
                        "image_m" => "./assets/media/design/event-bg-m.jpg",
                        "title" => "STUDENT LIFE",
                        "list-info" => [
                            "date" => "24 August 2024",
                            "time" => "15:30 - 16:30 hrs (GMT+7)"
                        ],
                        "link" => $root . "activity-single.php",
                        "cta" => "READ MORE",
                    ],
                    [
                        "image" => "./assets/media/design/index-announcement-image1.jpg",
                        "image_m" => "./assets/media/design/index-announcement-image1-m.jpg",
                        "title" => "STUDENT LIFE",
                        "list-info" => [
                            "date" => "24 August 2024",
                            "time" => "15:30 - 16:30 hrs (GMT+7)"
                        ],
                        "link" => $root . "activity-single.php",
                        "cta" => "READ MORE",
                    ],
                    [
                        "image" => "./assets/media/design/index-announcement-image1.jpg",
                        "image_m" => "./assets/media/design/index-announcement-image1-m.jpg",
                        "title" => "STUDENT LIFE",
                        "description" => "We want you to connect and stay connected with an active <br>student life - whether you are joining us on campus",
                        "link" => $root . "activity-single.php",
                        "cta" => "READ MORE",
                    ],
                ];

                include($root . "include/banner-slide.php");
                ?>

                <div class="sc-inner padding-top">
                    <div class="container">
                        <div class="collection-content tab-container">

                            <div class="collection-content-header">
                                <h2 class="title animate fadeIn size-h3 c-blue uppercase">
                                    <?php echo $tab_detail["title"] ?>
                                </h2>
                            </div>


                            <div class="card-container" data-card-layout="grid">
                                <?php
                                for ($i = 1; $i <= 7; $i++) {
                                    include($root . "include/detail-card.php");
                                } ?>
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
            </div>
        </div>

        <div class="tab-content" id="our-project">
            our project
        </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>