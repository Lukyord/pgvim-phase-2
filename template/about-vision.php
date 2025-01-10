<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-vision-main">
    <section id="vision-hero" class="sc hero height-screen">
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
                        "name" => "VISION & VALUE",
                        "url" => ""
                    ]
                ];

                include($root . "include/element-directory.php");
                ?>

                <?php
                $section = [
                    "title" => "VISION & VALUE",
                    "description" => "While we at PGVIM, are ready to support your educational service with sympathy, so you, the new students, must begin your musical journeys to gather experiences and develop your skills. Be ready to open your mind to widen your knowledge; it will guide you in your future careers."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="staff-cta-wrapper animate fadeIn">
                    <div class="inner-wrapper">
                        <?php
                        $staff_title = "OUR PROMISE";

                        include($root . "include/element-staff.php");
                        ?>

                        <div class="swiper cta-tabs animate slideInFromRight">
                            <div class="swiper-wrapper">
                                <?php
                                $tabs_arr = [
                                    [
                                        "tab-title" => "CENTER FOR MUSIC AND KNOWLEDGE DISSEMINATION",
                                        "tab-description" => "Become the center for disseminating musical knowledge and related sciences to society.",
                                        "tab-color" => "--color-note2-r",
                                    ],
                                    [
                                        "tab-title" => "CENTER FOR GLOBAL MUSIC RESEARCH AND EXCHANGE",
                                        "tab-description" => "A center for research, integration, and exchange of musical knowledge among individuals, communities, and educational institutions both domestically and internationally.",
                                        "tab-color" => "--color-blue",
                                    ],
                                    [
                                        "tab-title" => "INNOVATIVE CLASSICAL MUSIC EDUCATION",
                                        "tab-description" => "A music institute that nurtures and develops highly skilled classical music professionals with creativity and the ability to apply their musical knowledge in ways that are beneficial and appropriate to the context of society",
                                        "tab-color" => "--color-note3-p",
                                    ]
                                ];

                                foreach ($tabs_arr as $index => $tab) {
                                    include($root . "include/element-cta-tab.php");
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-vision-content" class="sc">
        <div class="sc-inner tab-contents sc-inner--follows">
            <div class="container">
                <div class="two-side-content">
                    <div class="sticky-image animate fadeIn">
                        <div class="image blurred-media">
                            <img src="./assets/media/design/bm-image.jpg" alt="Bachelor of Music Image" class="cover" draggable="false" loading="lazy">
                        </div>
                    </div>

                    <div class="info max-width">
                        <div class="main-content">
                            <h3 class="title c-blue uppercase size-h3 animate fadeIn">
                                Music of life,
                                <br>Music of land.
                            </h3>

                            <div class="entry-content entry-fadeIn">
                                <h6>Mission</h6>
                                <p>Princess Galyani Vadhana Institute of Music was established with the intention of honoring and continuing the royal vision of Her Royal Highness Princess Kalyaniwattana Naradhiwas Rajanagarindra, in developing talented individuals in classical music to meet international standards. It also aims to promote a better understanding of classical music among the public, serving as a key entity in disseminating knowledge and experiences in classical music to Thai society.</p>

                                <h6>Vision</h6>
                                <p>To be a higher education institution in music that is accredited by MusiQuE by the year 2026.</p>
                            </div>
                        </div>
                    </div>

                    <div class="illustration var-4 rellax" data-rellax-speed="-0.5">
                        <img src="./assets/media/design/illustration4.svg" alt="Illustration" loading="lazy" draggable="false">
                    </div>
                    <div class="illustration var-1 rellax" data-rellax-speed="-0.25">
                        <img src="./assets/media/design/illustration1.svg" alt="Illustration" loading="lazy" draggable="false">
                    </div>
                    <div class="illustration var-2 rellax" data-rellax-speed="-0.5">
                        <img src="./assets/media/design/illustration2.svg" alt="Illustration" loading="lazy" draggable="false">
                    </div>
                </div>
            </div>
        </div>


    </section>
</main>

<?php include($root . "footer.php"); ?>