<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-team-main">
    <section id="team-hero" class="sc hero height-screen">
        <div class="sc-inner tab-container">
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
                        "name" => "OUR TEAM",
                        "url" => ""
                    ]
                ];

                include($root . "include/element-directory.php");
                ?>
                <div class="tab-list">
                    <?php
                    $section = [
                        "title" => "OUR TEAMS",
                        "description" => "At PGVIM, our talented and experienced staff is dedicated to nurturing a vibrant music community. By blending expertise with passion, we empower students to reach their full potential while fostering creativity and collaboration that ensures our community thrives."
                    ];

                    include($root . "include/section-header.php");
                    ?>

                    <div class="tab-selector">
                        <span class="selected">
                            <p>TEACHER</p>
                            <i class="ic ic-chevron-down size-icon-2xs"></i>
                        </span>

                        <div class="tab-options">
                            <ul data-lenis-prevent>
                                <?php
                                $team_arr = [
                                    "teacher" => "TEACHER",
                                    "governing-board" => "GOVERNING BOARD",
                                    "teacher-2" => "TEACHER",
                                    "governing-board-2" => "GOVERNING BOARD",
                                    "teacher-3" => "TEACHER",
                                    "governing-board-3" => "GOVERNING BOARD",
                                ];
                                $firstIndex = array_key_first($team_arr);
                                foreach ($team_arr as $team_id => $team) {
                                ?>
                                    <li class="tab">
                                        <a href="#<?php echo $team_id ?>" data-tab-value="<?php echo $team ?>"><?php echo $team ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="marquee-full-screen animate fadeIn">
                    <div class="tab-contents">
                        <div class="tab-content active" id="teacher">
                            <?php
                            include($root . "include/element-staff.php");
                            ?>

                            <div class="marquee-wrapper animate fadeIn">
                                <div class="marquee" data-js="liMarquee">
                                    <?php
                                    $card = [
                                        "name" => "Pakphoom Talapkeaw",
                                        "role" => "Chief Academic Officer",
                                        "image" => "./assets/media/design/team.png",
                                        "link" => $root . "about-team-single.php"
                                    ];

                                    for ($i = 1; $i <= 6; $i++) {
                                    ?>
                                        <div class="marquee-item">
                                            <div class="card animate fadeIn" data-card="team">
                                                <a href="<?php echo $card["link"] ?>" class="link-overlay"></a>

                                                <div class="card-image" data-more-info="MORE INFO">
                                                    <figure class="object-fit">
                                                        <img src="<?php echo $card["image"] ?>" loading="lazy" alt="">
                                                    </figure>
                                                </div>

                                                <div class="card-content">
                                                    <div class="card-name">
                                                        <p><?php echo $card["name"] ?></p>
                                                    </div>

                                                    <div class="card-role">
                                                        <p><?php echo $card["role"] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="governing-board">
                            <?php
                            include($root . "include/element-staff.php");
                            ?>

                            <div class="marquee-wrapper animate fadeIn">
                                <div class="marquee" data-js="liMarquee">
                                    <?php
                                    $card = [
                                        "name" => "Pakphoom Talapkeaw",
                                        "role" => "Chief Academic Officer",
                                        "image" => "./assets/media/design/team.png",
                                        "link" => $root . "about-team-single.php"
                                    ];

                                    for ($i = 1; $i <= 3; $i++) {
                                    ?>
                                        <div class="marquee-item">
                                            <div class="card animate fadeIn" data-card="team">
                                                <a href="<?php echo $card["link"] ?>" class="link-overlay"></a>

                                                <div class="card-image" data-more-info="MORE INFO">
                                                    <figure class="object-fit">
                                                        <img src="<?php echo $card["image"] ?>" loading="lazy" alt="">
                                                    </figure>
                                                </div>

                                                <div class="card-content">
                                                    <div class="card-name">
                                                        <p><?php echo $card["name"] ?></p>
                                                    </div>

                                                    <div class="card-role">
                                                        <p><?php echo $card["role"] ?></p>
                                                    </div>
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
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>