<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="learning-opportunity-main tab-container">
    <?php
    include($root . "include/element-scroll-top-button.php");
    ?>

    <section id="learning-opportunity-hero" class="sc hero height-screen">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <?php
                $directory_arr = [
                    [
                        "name" => "HOME",
                        "url" => $root . "index.php"
                    ],
                    [
                        "name" => "LEARNING & OPPORTUNITIES",
                        "url" => ""
                    ],
                ];

                include($root . "include/element-directory.php");
                ?>
                <?php
                $section = [
                    "title" => "OPPORTUNITIES",
                    "description" => "At PGVIM, we offer a comprehensive range of programs designed to elevate your musical journey. Our Bachelor of Music (B.M.) program provides a solid foundation in music theory, performance, and composition, while our Master of Music (M.M.) program delves deeper into advanced techniques and artistry. With expert faculty and a supportive environment, we are committed to nurturing your talent and helping you thrive in your musical career."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="staff-cta-wrapper animate fadeIn">
                    <div class="inner-wrapper">
                        <?php
                        $staff_title = "OUR PROMISE";

                        include($root . "include/element-staff.php");
                        ?>

                        <div class="swiper cta-tabs box-tab tab-links animate slideInFromRight">
                            <div class="swiper-wrapper">
                                <?php
                                $tabs_arr = [
                                    [
                                        "tab-id" => "#student-opportunities",
                                        "tab-title" => "STUDENT OPPORTUNITIES",
                                        "tab-description" => "A music institute that nurtures and develops highly skilled classical music professionals with creativity and the ability to apply their musical knowledge in ways that are beneficial and appropriate to the context of society",
                                        "tab-color" => "--color-note5-lb",
                                    ],
                                    [
                                        "tab-id" => "#researcher-opportunities",
                                        "tab-title" => "RESEARCHER OPPORTUNITIES",
                                        "tab-description" => "A music institute that nurtures and develops highly skilled classical music professionals with creativity and the ability to apply their musical knowledge in ways that are beneficial and appropriate to the context of society",
                                        "tab-color" => "--color-note2-r",
                                    ],
                                    [
                                        "tab-id" => "#staff-opportunities",
                                        "tab-title" => "STAFF OPPORTUNITIES",
                                        "tab-description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla nec purus",
                                        "tab-color" => "--color-note3-p",
                                    ],
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

    <section id="learning-program-content" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="container">
                <div class="tab-contents">
                    <div class="tab-content active" id="student-opportunities">
                        <div class="two-side-content">
                            <div class="sticky-image animate fadeIn">
                                <div class="image blurred-media">
                                    <img src="./assets/media/design/hero-banner-bg.jpg" alt="" class="cover" draggable="false" loading="lazy">
                                </div>
                            </div>
                            <div class="info">
                                <div class="main-content">
                                    <h3 class="title animate fadeIn">
                                        Student Opportunities
                                    </h3>
                                    <div class="entry-content entry-fadeIn">
                                        <h6>Student Life</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim ligula at pellentesque tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer sem nisi, feugiat eget nunc id, efficitur consectetur mauris. Mauris laoreet ut tortor non facilisis. Donec quis lacus vel metus imperdiet tempor id ac magna. Nullam euismod sapien enim, sit amet molestie sem dapibus nec. Nam mauris leo, blandit sit amet pretium sit amet, accumsan ac enim. Cras ac nunc condimentum, eleifend augue et, auctor ante. Cras id nisi purus. Vestibulum odio sem, accumsan eget libero vitae, facilisis cursus risus. Sed rutrum tellus nec lectus dapibus luctus. Ut viverra mauris purus, non maximus tellus facilisis quis. Phasellus fermentum nibh eget dapibus aliquet.</p>
                                        <p>Nulla convallis eleifend nisl quis feugiat. Cras et quam vitae felis egestas pretium. Mauris fermentum finibus metus eu vehicula. Mauris eget pellentesque felis. Integer et congue risus. Curabitur facilisis ligula a tempor scelerisque. Duis nec volutpat odio. Integer mattis, arcu eu condimentum tincidunt, orci urna commodo tellus, eget finibus sapien felis nec velit. Duis vulputate feugiat cursus. Curabitur eu efficitur dui. Morbi nec vehicula sem. Phasellus lobortis, ipsum eu eleifend fringilla, leo mi congue mauris, ac consequat lacus nunc sit amet odio. Duis placerat tristique est non congue. Fusce luctus, ligula nec rhoncus semper, massa velit ullamcorper nisl, eu rhoncus odio quam non risus.</p>

                                        <h6>PGVIM</h6>
                                        <p>Vestibulum nec orci eget erat pretium suscipit ut eget nibh. Pellentesque id lacus in sem ullamcorper fermentum. Maecenas auctor ipsum vel elit posuere, ut iaculis lorem lacinia. Pellentesque hendrerit quam quam, eget congue risus molestie eget. Aliquam erat volutpat. Proin vel convallis diam. Aenean mollis nulla eget finibus consectetur. Integer consectetur vehicula nibh. Integer congue hendrerit mi, eu dictum risus dignissim vitae. Curabitur hendrerit dictum velit, non consectetur urna malesuada ac.</p>
                                        <p>Cras viverra eros id ex convallis, sed elementum urna bibendum. Integer rhoncus velit eu velit luctus, vel ultricies lorem viverra. Aliquam dapibus facilisis ultricies. Praesent vel eleifend erat. Duis luctus libero a augue interdum varius. Maecenas convallis viverra purus non vestibulum. Pellentesque sit amet risus est. Proin aliquet eleifend mollis. Donec finibus at lectus sit amet posuere. Vivamus id nibh sem. Vivamus blandit imperdiet arcu, eu molestie dui pellentesque eu. Aliquam ac sollicitudin purus, ac aliquam arcu. Proin nec ante volutpat, pellentesque justo at, eleifend mi. Vestibulum dapibus rutrum metus, vitae faucibus quam feugiat ut.</p>

                                        <h6>Student Scholarship</h6>
                                        <ul>
                                            <li>
                                                <p>Completion of high school (Grade 12) or equivalent, either in formal or informal education.</p>
                                            </li>
                                            <li>
                                                <p>Selection based on the criteria set by the Kalyaniwattana Music Institute.</p>
                                            </li>
                                            <li>
                                                <p>Fulfillment of other qualifications as required by the Kalyaniwattana Music Institute or the Office of the Higher Education Commission.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-container toggle trigger-first">
                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">SCHOLARSHIP</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Scholarship
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">ONLINE COURSES</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Online Courses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="researcher-opportunities">
                        <div class="two-side-content">
                            <div class="sticky-image animate fadeIn">
                                <div class="image blurred-media">
                                    <img src="./assets/media/design/hero-banner-bg.jpg" alt="" class="cover" draggable="false" loading="lazy">
                                </div>
                            </div>
                            <div class="info">
                                <div class="main-content">
                                    <h3 class="title animate fadeIn">
                                        Researcher Opportunities
                                    </h3>
                                    <div class="entry-content entry-fadeIn">
                                        Researcher Opportunities
                                    </div>
                                </div>
                                <div class="accordion-container toggle trigger-first">
                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">SCHOLARSHIP</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Scholarship
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">ONLINE COURSES</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Online Courses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="staff-opportunities">
                        <div class="two-side-content">
                            <div class="sticky-image animate fadeIn">
                                <div class="image blurred-media">
                                    <img src="./assets/media/design/hero-banner-bg.jpg" alt="" class="cover" draggable="false" loading="lazy">
                                </div>
                            </div>
                            <div class="info">
                                <div class="main-content">
                                    <h3 class="title animate fadeIn">
                                        Staff Opportunities
                                    </h3>
                                    <div class="entry-content entry-fadeIn">
                                        Staff Opportunities
                                    </div>
                                </div>
                                <div class="accordion-container toggle trigger-first">
                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">SCHOLARSHIP</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Scholarship
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">ONLINE COURSES</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Online Courses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>