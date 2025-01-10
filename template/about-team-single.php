<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-team-single-main">
    <section id="team-single-hero" class="sc hero height-screen">
        <div class="sc-inner sc-inner--bottom-extra">
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
                        "url" => $root . "about-team.php"
                    ],
                    [
                        "name" => "DANIEL STEIN",
                        "url" => ""
                    ],
                ];

                include($root . "include/element-directory.php");
                ?>


                <?php
                $section = [
                    "title" => "OUR TEAMS",
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="two-side-content">
                    <div class="sticky-image animate fadeIn">
                        <div class="image blurred-media">
                            <img src="./assets/media/design/team.png" alt="Bachelor of Music Image" class="cover" draggable="false" loading="lazy">
                        </div>
                    </div>
                    <div class="info">
                        <div class="main-content">
                            <div class="title animate fadeIn">
                                <h3 class="c-blue uppercase size-h3">DANIEL STEIN</h3>
                                <p class="subtitle">Associate Academic Officer</p>
                            </div>

                            <ul class="info-list">
                                <li class="info-item-item animate fadeIn">
                                    <p class="c-blue">Email</p>
                                    <a href="mailto:daniel.stein@pgvim.ac.th">daniel.stein@pgvim.ac.th</a>
                                </li>

                                <li class="info-item-item animate fadeIn">
                                    <p class="c-blue">Phone</p>
                                    <a href="tel:+66299999999">(+66)29 999 9999</a>
                                </li>
                            </ul>
                            <div class="entry-content entry-fadeIn">
                                <h6>Background & Education</h6>

                                <p>
                                    A graduate of Berklee College of Music, Daniel Stein started his professional career as a studio musician in New York City playing keyboards on records, soundtracks, and jingles. In 1988, he moved to Los Angeles when he was accepted into USC’s graduate program “Composition for Film and Television”.
                                    <br>
                                    Since that time, Dan has been composing, arranging, and playing music for animation, films, and visual media. For seven years he was a staff composer at Asche and Spencer Music where he wrote and produced music for over 45 national commercials, including two Super Bowl spots.
                                </p>

                                <p>
                                    As a keyboardist, he has worked with musicians including James Taylor, Jon Bon Jovi, and Joe Cocker and currently teaches at Musician’s Institute in Hollywood. In the early days of his career, Dan worked on the score for films such as Ace Ventura and Mambo Kings, produced themes and scores for Disney and Jim Henson.
                                </p>

                                <p>
                                    Dan has been working on two projects: “Skyline Forest” is an exploration of ambient soundscapes, combined with melodic vintage acoustic keyboards. “R For Romeo” and the debut instrumental jazz release ‘Plan R’ was written, performed, and produced by Dan and fellow Musicians Institute instructor, guitarist Stuart Ziff.
                                </p>

                                <ul>
                                    <li>Completion of high school (Grade 12) or equivalent, either in formal or informal education.</li>
                                    <li>Selection based on the criteria set by the Kalyaniwattana Music Institute.</li>
                                    <li>Fulfillment of other qualifications as required by the Kalyaniwattana Music Institute or the Office of the Higher Education Commission.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>