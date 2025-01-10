<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="activity-single-main">
    <section id="activity-single-hero" class="sc hero">
        <?php
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
        ];

        include($root . "include/banner-slide.php");
        ?>
    </section>

    <section id="activity-single-content" class="sc">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <div class="single-page-content">
                    <div class="main-content-wrapper">
                        <?php
                        $show = "pc";

                        include($root . "include/book-event-buttons.php");
                        ?>

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
                    </div>

                    <div class="share c-blue animate fadeIn">
                        <p class="size-sub">SHARE</p>
                        <div class="social">
                            <a href="javascript:;" onclick="fbShare()" target="_blank"><i class="ic ic-facebook"></i></a>
                            <a href="javascript:;" onclick="lineMSG()" target="_blank"><i class="ic ic-line"></i></a>
                            <a href="javascript:;" onclick="tweetShare()" target="_blank"><i class="ic ic-twitter"></i></a>
                        </div>
                    </div>

                    <?php
                    $show = "mb";

                    include($root . "include/book-event-buttons.php");
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-activity" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="container">
                <?php
                $tab_detail = [
                    "id" => "you-may-also-like",
                    "title" => "YOU MAY ALSO LIKE",
                    "card-content" => [
                        "image" => "./assets/media/design/history-image1.jpg",
                        "title" => "Recital Room with grand piano",
                        "description" => "Room with piano (Yamaha grand C3)",
                        "detail" => [
                            "room size" => "250x410 cm",
                            "price" => "500THB/hour 500THB/hour",
                            "capacity" => "1-12 people",
                        ]
                    ],
                ];
                ?>
                <div class="collection-content tab-container">
                    <div class="illustration var-1 rellax" data-rellax-speed="-0.4">
                        <img src="./assets/media/design/illustration1.svg" alt="Illustration" loading="lazy" draggable="false">
                    </div>
                    <div class="illustration var-5 rellax" data-rellax-speed="-0.2">
                        <img src="./assets/media/design/illustration5.svg" alt="Illustration" loading="lazy" draggable="false">
                    </div>
                    <div class="illustration var-2 rellax show-md" data-rellax-speed="-0.4">
                        <img src="./assets/media/design/illustration2.svg" alt="Illustration" loading="lazy" draggable="false">
                    </div>

                    <div class="collection-content-header">
                        <h2 class="title animate fadeIn size-h3 c-blue uppercase">
                            <?php echo $tab_detail["title"] ?>
                        </h2>
                    </div>

                    <div class="tab-contents">
                        <div class="card-container" data-card-layout="grid">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                include($root . "include/detail-card.php");
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>