<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="service-external-main tab-container">
    <?php
    include($root . "include/element-scroll-top-button.php");
    ?>

    <section id="service-external-hero" class="sc hero height-screen">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <?php
                $directory_arr = [
                    [
                        "name" => "HOME",
                        "url" => $root . "index.php"
                    ],
                    [
                        "name" => "PGVIM EXPERIENCES",
                        "url" => ""
                    ],
                ];

                include($root . "include/element-directory.php");
                ?>
                <?php
                $section = [
                    "title" => "PGVIM EXPERIENCES",
                    "description" => "Discover the opportunities available through PGVIM Experiences. Whether you're looking to elevate a special occasion or need a creative space, our resources are designed to meet your needs while supporting our vibrant music community."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="staff-cta-wrapper animate fadeIn">
                    <div class="inner-wrapper">
                        <?php
                        include($root . "include/element-staff.php");
                        ?>

                        <div class="swiper cta-tabs  box-tab tab-links animate slideInFromRight">
                            <div class="swiper-wrapper">
                                <?php
                                $tabs_arr = [
                                    [
                                        "tab-id" => "#renting-space",
                                        "tab-title" => "RENTING SPACE",
                                        "tab-description" => "Rent our soundproof music practice rooms, designed for musicians of all levels. Perfect for individual practice or group sessions, equipped with everything you need to enhance your musical skills",
                                        "tab-color" => "--color-note5-lb",
                                    ],
                                    [
                                        "tab-id" => "#hire-musicians",
                                        "tab-title" => "HIRE MUSICIANS",
                                        "tab-description" => "Hire professional musicians for your events, performances, or workshops. Our talented artists bring expertise in various genres, ensuring a memorable experience tailored to your needs.",
                                        "tab-color" => "--color-note4-y",
                                    ],
                                    [
                                        "tab-id" => "#enroll-in-courses",
                                        "tab-title" => "ENROLL IN COURSES",
                                        "tab-description" => "Explore our wide range of music courses designed for all ages and skill levels. From beginner to advanced, our experienced instructors will guide you on your musical journey, helping you achieve your goals.",
                                        "tab-color" => "--color-note7-g",
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

    <section id="service-external-content" class="sc">
        <div class="tab-contents">
            <div class="tab-content active" id="renting-space">
                <?php
                $tab_detail = [
                    "id" => "renting-space",
                    "title" => "RENTING SPACE",
                    "type" => [
                        "renting-space-all" => "All",
                        "renting-space-practice-room" => "Practice Room",
                        "renting-space-hall" => "Hall",
                    ],
                    "card-content" => [
                        "image" => "./assets/media/design/history-image1.jpg",
                        "subtitle" => "Performance",
                        "title" => "Recital Room with grand piano",
                        "description" => "Room with piano (Yamaha grand C3)",
                        "detail" => [
                            "room size" => "250x410 cm",
                            "price" => "500THB/hour 500THB/hour",
                            "capacity" => "1-12 people",
                        ]
                    ],
                    "detail-title" => "RENTING<br>SPACE DETAIL",
                    "detail-image" => "./assets/media/design/collection-bg.jpg",
                    "detail-image-m" => "./assets/media/design/collection-bg-m.jpg",
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
                                    </div>
                                </div>
                            </div>

                            <div class="tab-contents">
                                <?php
                                foreach ($tab_detail["type"] as $key => $value) {
                                    $first_key = array_key_first($tab_detail["type"]);
                                ?>
                                    <div class="tab-content <?php if ($key == $first_key) echo "active"; ?>" id="<?php echo $key ?>">
                                        <div class="card-container" data-card-layout="grid">
                                            <?php
                                            for ($i = 1; $i <= 7; $i++) {
                                                include($root . "include/detail-card.php");
                                            } ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

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
                            "cta" => "DOWNLOAD PDF",
                            "extra-class" => "animate fadeIn"
                        ];

                        include($root . "include/element-staff-small.php");

                        ?>
                    </div>
                </div>

                <div class="collection-contact-form">
                    <div class="sc-inner">
                        <div class="container">
                            <?php
                            $section = [
                                "title" => "CONTACT US",
                                "description" => "Please fill out the information below so that our sales team can contact you."
                            ];

                            include($root . "include/section-header.php");
                            ?>

                            <form action="javascript:;">
                                <div class="fields">
                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="fullname-<?php echo $tab_detail["id"] ?>">Your Name</label>
                                            <input type="text" name="fullname-<?php echo $tab_detail["id"] ?>" id="fullname-<?php echo $tab_detail["id"] ?>" autocomplete="given-name" placeholder="Type Here" required>
                                        </div>
                                    </div>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="lastname-<?php echo $tab_detail["id"] ?>">Last Name</label>
                                            <input type="text" name="lastname-<?php echo $tab_detail["id"] ?>" id="lastname-<?php echo $tab_detail["id"] ?>" autocomplete="family-name" placeholder="Type Here" required>
                                        </div>
                                    </div>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="email-<?php echo $tab_detail["id"] ?>">Email</label>
                                            <input type="text" name="email-<?php echo $tab_detail["id"] ?>" id="email-<?php echo $tab_detail["id"] ?>" autocomplete="email" placeholder="Type Here" required>
                                        </div>
                                    </div>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="phone-<?php echo $tab_detail["id"] ?>">Phone Number</label>
                                            <input type="text" name="phone-<?php echo $tab_detail["id"] ?>" id="phone-<?php echo $tab_detail["id"] ?>" autocomplete="tel" placeholder="Type Here" required>
                                        </div>
                                    </div>

                                    <?php
                                    /*
                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="room-type-<?php echo $tab_detail["id"] ?>">Room Type</label>
                                            <div class="select">
                                                <select class="select2" name="room-type-<?php echo $tab_detail["id"] ?>" id="room-type-<?php echo $tab_detail["id"] ?>" data-placeholder="Recital Room with grand piano" required>
                                                    <option value=""></option>
                                                    <option value="Option1">Option 1</option>
                                                    <option value="Option2">Option 2</option>
                                                    <option value="Option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="hours-<?php echo $tab_detail["id"] ?>">Hours</label>
                                            <div class="select">
                                                <select class="select2" name="hours-<?php echo $tab_detail["id"] ?>" id="hours-<?php echo $tab_detail["id"] ?>" data-placeholder="1 Hour" required>
                                                    <option value=""></option>
                                                    <option value="Option1">Option 1</option>
                                                    <option value="Option2">Option 2</option>
                                                    <option value="Option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="date-<?php echo $tab_detail["id"] ?>">Date</label>
                                            <div class="datepicker">
                                                <input class="date date-device" type="text" name="date-<?php echo $tab_detail["id"] ?>" id="date-<?php echo $tab_detail["id"] ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="start-time-<?php echo $tab_detail["id"] ?>">Starting Time</label>
                                            <div class="select">
                                                <select class="select2" name="start-time-<?php echo $tab_detail["id"] ?>" id="start-time-<?php echo $tab_detail["id"] ?>" data-placeholder="10 AM" required>
                                                    <option value=""></option>
                                                    <option value="Option1">Option 1</option>
                                                    <option value="Option2">Option 2</option>
                                                    <option value="Option3">Option 3</option>
                                                    <option value="Option1">Option 1</option>
                                                    <option value="Option2">Option 2</option>
                                                    <option value="Option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    */ ?>

                                    <div class="field animate fadeIn">
                                        <div class="input">
                                            <label class="label" for="message-<?php echo $tab_detail["id"] ?>">Message</label>
                                            <textarea name="message-<?php echo $tab_detail["id"] ?>" id="message-<?php echo $tab_detail["id"] ?>" placeholder="Type Here"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $staff = [
                                    "is-submit" => true,
                                    "link" => "submit",
                                    "cta" => "SUBMIT",
                                    "extra-class" => "blue animate fadeIn"
                                ];

                                include($root . "include/element-staff-small.php");

                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="hire-musicians">
                Hire Musicians
            </div>

            <div class="tab-content" id="enroll-in-courses">
                Enroll in Courses
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>