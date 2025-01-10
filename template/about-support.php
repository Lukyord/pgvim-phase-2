<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-support-main">
    <section id="support-hero" class="sc height-screen hero hero-bg-banner">
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
                        "name" => "ABOUT US",
                        "url" => ""
                    ],
                    [
                        "name" => "GIVING & SUPPORT",
                        "url" => ""
                    ]
                ];
                $on_dark_bg = true;

                include($root . "include/element-directory.php");
                ?>

                <div class="section-header">
                    <h2 class="title animate fadeIn" data-wow-delay="0.2s">
                        GIVING & SUPPORT
                    </h2>

                    <p class="description animate fadeIn" data-wow-delay="0.4s">
                        At PGVIM, your support is essential to nurturing our vibrant music community. By contributing, you help provide resources, scholarships, and opportunities that empower our talented students and dedicated staff. Together, we can cultivate creativity and foster growth in the arts. Join us in making a lasting impact on the future of music education.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="support-content" class="sc">
        <div class="sc-inner sc-inner--precedes">
            <div class="container single-page-content">
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
            </div>
        </div>
    </section>

    <section id="ways-to-support" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="container">
                <div class="staff-cta-wrapper animate fadeIn">
                    <div class="inner-wrapper">
                        <?php
                        $staff_title = "WAYS TO SUPPORT US";

                        include($root . "include/element-staff.php");
                        ?>

                        <div class="swiper cta-tabs animate slideInFromRight">
                            <div class="swiper-wrapper">
                                <?php
                                $items_arr = [
                                    [
                                        "outer-link" => "#outer",
                                        "title" => "Give online to PGVIM",
                                        "image" => "./assets/media/design/2007.jpg",
                                        "decoration" => true,
                                    ],
                                    [
                                        "outer-link" => "#outer",
                                        "title" => "Download Gift Form for Individials",
                                        "image" => "./assets/media/design/hero-banner-bg.jpg",
                                        "decoration" => true,
                                    ],
                                    [
                                        "outer-link" => "#outer",
                                        "title" => "Download Gift Form for Corporate Donors",
                                        "image" => "./assets/media/design/hero-banner-bg-m.jpg",
                                        "decoration" => true,
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
</main>

<?php include($root . "footer.php"); ?>