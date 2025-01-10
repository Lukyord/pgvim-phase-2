<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="learning-program-main tab-container">
    <?php
    include($root . "include/element-scroll-top-button.php");
    ?>

    <section id="learning-program-hero" class="sc hero height-screen">
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
                    "title" => "PROGRAMS",
                    "description" => "At PGVIM, we offer a comprehensive range of programs designed to elevate your musical journey. Our Bachelor of Music (B.M.) program provides a solid foundation in music theory, performance, and composition, while our Master of Music (M.M.) program delves deeper into advanced techniques and artistry. With expert faculty and a supportive environment, we are committed to nurturing your talent and helping you thrive in your musical career."
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="staff-cta-wrapper tab-links animate fadeIn">
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
                                        "tab-id" => "#bachelor-of-music-program",
                                        "tab-title" => "BACHELOR OF MUSIC PROGRAM (B.M.)",
                                        "tab-image" => "./assets/media/design/bm-image.jpg",
                                        "tab-color" => "--color-note1-b",
                                    ],
                                    [
                                        "tab-id" => "#master-of-music-program",
                                        "tab-title" => "MASTER OF MUSIC (M.M.)",
                                        "tab-image" => "./assets/media/design/bm-image.jpg",
                                        "tab-color" => "--color-blue",
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

    <section id="learning-program-content" class="sc">
        <div class="sc-inner sc-inner--precedes sc-inner--follows">
            <div class="container">
                <div class="tab-contents">
                    <div class="tab-content active" id="bachelor-of-music-program">
                        <div class="two-side-content">
                            <div class="sticky-image animate fadeIn">
                                <div class="image blurred-media">
                                    <img src="./assets/media/design/bm-image.jpg" alt="Bachelor of Music Image" class="cover" draggable="false" loading="lazy">
                                </div>
                            </div>
                            <div class="info">
                                <div class="main-content">
                                    <h3 class="title animate fadeIn">Bachelor of Music Program (B.M.)
                                    </h3>
                                    <div class="entry-content entry-fadeIn">
                                        <h6>Total Credits Required for the Program</h6>
                                        <p>130 credits</p>

                                        <h6>Career Opportunities</h6>
                                        <p>Graduates of Princess Galyani Vadhana Institute of Music have diverse career opportunities in music and related fields. PGVIM's education emphasizes both musical expertise and understanding of music's role in society, enabling students to pioneer the use of music for social change and development.
                                            <br><br>
                                            Notable career paths for graduates include:
                                        </p>
                                        <ol>
                                            <li>
                                                Professional Musician
                                                <ul>
                                                    <li>Soloist or musician in orchestras, wind ensembles, or various chamber ensembles</li>
                                                    <li>Performer with orchestras or ensembles at various venues and events</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Educator
                                                <ul>
                                                    <li>Music teacher in educational institutions such as secondary schools, music colleges, or universities</li>
                                                    <li>Private music instructor offering lessons in various musical disciplines</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Composer & Songwriter
                                                <ul>
                                                    <li>Classical music composer or composer of original stylistic works</li>
                                                    <li>Songwriter for films, television shows, or other media</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Therapist
                                                <ul>
                                                    <li>Using music for mental and physical healing in healthcare settings such as hospitals or therapy centers</li>
                                                    <li>Working with patients, special needs children, elderly, or those with psychological conditions</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Artist & Event Manager
                                                <ul>
                                                    <li>Managing and developing artists or music ensembles, including concert and related event management</li>
                                                    <li>Organizing music events at various venues and developing marketing strategies to promote artists</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Researcher & Academic
                                                <ul>
                                                    <li>Researcher and writer studying musicology, music culture, or social aspects of music</li>
                                                    <li>Working with educational institutions, social organizations, or research institutions supporting music studies</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Audio Production & Sound Engineer
                                                <ul>
                                                    <li>Studio technician producing and recording artists or musicians</li>
                                                    <li>Working in film industry, podcast production, or various musical performances</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Social Innovation Musician
                                                <ul>
                                                    <li>Creating music activities focused on social change, such as community music projects or music for quality of life development</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Entrepreneur
                                                <ul>
                                                    <li>Owner of music businesses such as production companies, music schools, instrument shops, or online music platforms</li>
                                                    <li>Creator of commercial music projects, including music merchandise distribution or concert management</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Public Relations & Communications Specialist
                                                <ul>
                                                    <li>Marketing communications expert for artists, music organizations, or social music projects</li>
                                                    <li>Planning and managing public relations for music events or social music programs</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Children's Music Educator
                                                <ul>
                                                    <li>Music teacher specializing in teaching children from preschool through elementary levels, using age-appropriate and developmentally suitable teaching methods</li>
                                                    <li>Creating curricula and music activities that enhance listening skills, movement, and musical expression, while developing social skills and creativity</li>
                                                    <li>Working in kindergartens, elementary schools, music schools, or community music programs for children, potentially using developmental music approaches such as Kodály, Orff, or Suzuki</li>
                                                </ul>
                                            </li>
                                        </ol>


                                        <h6>Academic Calendar</h6>
                                        <ul>
                                            <li>First Semester: August - December</li>
                                            <li>Second Semester: January - May</li>
                                            <li>Summer Session: June - July</li>
                                        </ul>
                                        <p>Note: The duration of each semester may change as determined by the institute.</p>

                                        <h6>Admission Requirements</h6>
                                        <ol>
                                            <li>
                                                Cumulative Grade Point Average (GPAX)
                                                <ul>
                                                    <li>For 4 semesters, must be no less than 2.00</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Education Requirements
                                                <ul>
                                                    <li>Must have completed or be expected to complete Mathayom 6 (Grade 12) or equivalent</li>
                                                </ul>
                                            </li>
                                            <li>
                                                US High School Equivalency Diploma (GED)
                                                <ul>
                                                    <li>Must score at least 145 points in each subject area</li>
                                                    <li>Must have a total combined score of no less than 640 points</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Health Requirements
                                                <ul>
                                                    <li>Must not have any medical conditions that could impede study</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Regulatory Compliance
                                                <ul>
                                                    <li>Must meet all qualifications as specified in the Princess Galyani Vadhana Institute of Music's regulations</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Musical Ability
                                                <ul>
                                                    <li>Performance proficiency in major instrument</li>
                                                    <li>Knowledge and understanding of music theory</li>
                                                    <li>Knowledge of Western music history</li>
                                                    <li>Appropriate level of aural skills</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Personal Qualities
                                                <ul>
                                                    <li>Enthusiasm for music education</li>
                                                    <li>Interest in current developments in the music world</li>
                                                    <li>Understanding of music's role in Thai, ASEAN, and international societies</li>
                                                </ul>
                                            </li>
                                        </ol>

                                        <h6>Program Philosophy</h6>
                                        <p>The Institute is committed to producing graduates of excellence with a deep understanding of musical arts. These graduates recognize music's significance both as a science and an art form, while possessing the capacity for continuous self-development. They are capable of integrating knowledge for musical creation and competing at both national and international levels. Through ongoing musical research and studies, they maintain social responsibility and a volunteer spirit, understanding diverse beliefs and cultural perspectives. Furthermore, they can effectively apply their musical knowledge to creative endeavors that benefit communities, society, the nation, and their role as global citizens.</p>

                                        <h6>Program Significance</h6>
                                        <p>In accordance with Her Royal Highness Princess Galyani Vadhana Krom Luang Naradhiwas Rajanagarindra's aspirations for the development of classical music in Thailand, the Bachelor of Music program at Princess Galyani Vadhana Institute of Music aims to produce musicians of excellence with creative mindsets. The program focuses on developing professionals capable of continuous self-development through knowledge acquisition, who recognize music's role in human potential development. Furthermore, graduates are equipped to integrate musical knowledge with other related disciplines for social creativity and development.</p>
                                    </div>
                                </div>
                                <div class="accordion-container toggle trigger-first">
                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">STRUCTURE</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                <h5>
                                                    Program Structure Bachelor of Music Program (B.M.)
                                                    <br>Princess Galyani Vadhana Institute of Music
                                                </h5>

                                                <h6>1. General Education Courses (minimum 24 credits)</h6>
                                                <ul>
                                                    <li>Humanities: 4-6 credits</li>
                                                    <li>Social Sciences: 4-6 credits</li>
                                                    <li>Languages: 8 credits</li>
                                                    <li>Science and Mathematics: 4-6 credits</li>
                                                </ul>

                                                <h6>2. Specialized Courses (minimum 86 credits)</h6>
                                                <ul>
                                                    <li>Performance Practice: 48 credits</li>
                                                    <li>Music Theory and Contextual Studies: 38 credits</li>
                                                </ul>

                                                <h6>3. Free Electives (minimum 20 credits)</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">COURSE DESCRIPTION</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Course Description
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $staff = [
                            "link" => "#outer-apply-now",
                            "cta" => "APPLY NOW",
                            "extra-class" => "blue animate fadeIn"
                        ];

                        include($root . "include/element-staff-small.php");

                        ?>
                    </div>
                    <div class="tab-content" id="master-of-music-program">
                        <div class="two-side-content">
                            <div class="sticky-image animate fadeIn">
                                <div class="image blurred-media">
                                    <img src="./assets/media/design/bm-image.jpg" alt="Bachelor of Music Image" class="cover" draggable="false" loading="lazy">
                                </div>
                            </div>
                            <div class="info">
                                <div class="main-content">
                                    <h3 class="title animate fadeIn">
                                        Master of Music Program (M.M.)
                                    </h3>
                                    <div class="entry-content entry-fadeIn">
                                        <h6>Total Credits Required for the Program</h6>
                                        <p>130 credits</p>

                                        <h6>Career Opportunities</h6>
                                        <p>Graduates of Princess Galyani Vadhana Institute of Music have diverse career opportunities in music and related fields. PGVIM's education emphasizes both musical expertise and understanding of music's role in society, enabling students to pioneer the use of music for social change and development.
                                            <br><br>
                                            Notable career paths for graduates include:
                                        </p>
                                        <ol>
                                            <li>
                                                Professional Musician
                                                <ul>
                                                    <li>Soloist or musician in orchestras, wind ensembles, or various chamber ensembles</li>
                                                    <li>Performer with orchestras or ensembles at various venues and events</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Educator
                                                <ul>
                                                    <li>Music teacher in educational institutions such as secondary schools, music colleges, or universities</li>
                                                    <li>Private music instructor offering lessons in various musical disciplines</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Composer & Songwriter
                                                <ul>
                                                    <li>Classical music composer or composer of original stylistic works</li>
                                                    <li>Songwriter for films, television shows, or other media</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Therapist
                                                <ul>
                                                    <li>Using music for mental and physical healing in healthcare settings such as hospitals or therapy centers</li>
                                                    <li>Working with patients, special needs children, elderly, or those with psychological conditions</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Artist & Event Manager
                                                <ul>
                                                    <li>Managing and developing artists or music ensembles, including concert and related event management</li>
                                                    <li>Organizing music events at various venues and developing marketing strategies to promote artists</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Researcher & Academic
                                                <ul>
                                                    <li>Researcher and writer studying musicology, music culture, or social aspects of music</li>
                                                    <li>Working with educational institutions, social organizations, or research institutions supporting music studies</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Audio Production & Sound Engineer
                                                <ul>
                                                    <li>Studio technician producing and recording artists or musicians</li>
                                                    <li>Working in film industry, podcast production, or various musical performances</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Social Innovation Musician
                                                <ul>
                                                    <li>Creating music activities focused on social change, such as community music projects or music for quality of life development</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Entrepreneur
                                                <ul>
                                                    <li>Owner of music businesses such as production companies, music schools, instrument shops, or online music platforms</li>
                                                    <li>Creator of commercial music projects, including music merchandise distribution or concert management</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Music Public Relations & Communications Specialist
                                                <ul>
                                                    <li>Marketing communications expert for artists, music organizations, or social music projects</li>
                                                    <li>Planning and managing public relations for music events or social music programs</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Children's Music Educator
                                                <ul>
                                                    <li>Music teacher specializing in teaching children from preschool through elementary levels, using age-appropriate and developmentally suitable teaching methods</li>
                                                    <li>Creating curricula and music activities that enhance listening skills, movement, and musical expression, while developing social skills and creativity</li>
                                                    <li>Working in kindergartens, elementary schools, music schools, or community music programs for children, potentially using developmental music approaches such as Kodály, Orff, or Suzuki</li>
                                                </ul>
                                            </li>
                                        </ol>


                                        <h6>Academic Calendar</h6>
                                        <ul>
                                            <li>First Semester: August - December</li>
                                            <li>Second Semester: January - May</li>
                                            <li>Summer Session: June - July</li>
                                        </ul>
                                        <p>Note: The duration of each semester may change as determined by the institute.</p>

                                        <h6>Admission Requirements</h6>
                                        <ol>
                                            <li>
                                                Cumulative Grade Point Average (GPAX)
                                                <ul>
                                                    <li>For 4 semesters, must be no less than 2.00</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Education Requirements
                                                <ul>
                                                    <li>Must have completed or be expected to complete Mathayom 6 (Grade 12) or equivalent</li>
                                                </ul>
                                            </li>
                                            <li>
                                                US High School Equivalency Diploma (GED)
                                                <ul>
                                                    <li>Must score at least 145 points in each subject area</li>
                                                    <li>Must have a total combined score of no less than 640 points</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Health Requirements
                                                <ul>
                                                    <li>Must not have any medical conditions that could impede study</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Regulatory Compliance
                                                <ul>
                                                    <li>Must meet all qualifications as specified in the Princess Galyani Vadhana Institute of Music's regulations</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Musical Ability
                                                <ul>
                                                    <li>Performance proficiency in major instrument</li>
                                                    <li>Knowledge and understanding of music theory</li>
                                                    <li>Knowledge of Western music history</li>
                                                    <li>Appropriate level of aural skills</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Personal Qualities
                                                <ul>
                                                    <li>Enthusiasm for music education</li>
                                                    <li>Interest in current developments in the music world</li>
                                                    <li>Understanding of music's role in Thai, ASEAN, and international societies</li>
                                                </ul>
                                            </li>
                                        </ol>

                                        <h6>Program Philosophy</h6>
                                        <p>The Institute is committed to producing graduates of excellence with a deep understanding of musical arts. These graduates recognize music's significance both as a science and an art form, while possessing the capacity for continuous self-development. They are capable of integrating knowledge for musical creation and competing at both national and international levels. Through ongoing musical research and studies, they maintain social responsibility and a volunteer spirit, understanding diverse beliefs and cultural perspectives. Furthermore, they can effectively apply their musical knowledge to creative endeavors that benefit communities, society, the nation, and their role as global citizens.</p>

                                        <h6>Program Significance</h6>
                                        <p>In accordance with Her Royal Highness Princess Galyani Vadhana Krom Luang Naradhiwas Rajanagarindra's aspirations for the development of classical music in Thailand, the Bachelor of Music program at Princess Galyani Vadhana Institute of Music aims to produce musicians of excellence with creative mindsets. The program focuses on developing professionals capable of continuous self-development through knowledge acquisition, who recognize music's role in human potential development. Furthermore, graduates are equipped to integrate musical knowledge with other related disciplines for social creativity and development.</p>
                                    </div>
                                </div>
                                <div class="accordion-container toggle trigger-first">
                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">STRUCTURE</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                <h5>
                                                    Program Structure Bachelor of Music Program (B.M.)
                                                    <br>Princess Galyani Vadhana Institute of Music
                                                </h5>

                                                <h6>1. General Education Courses (minimum 24 credits)</h6>
                                                <ul>
                                                    <li>Humanities: 4-6 credits</li>
                                                    <li>Social Sciences: 4-6 credits</li>
                                                    <li>Languages: 8 credits</li>
                                                    <li>Science and Mathematics: 4-6 credits</li>
                                                </ul>

                                                <h6>2. Specialized Courses (minimum 86 credits)</h6>
                                                <ul>
                                                    <li>Performance Practice: 48 credits</li>
                                                    <li>Music Theory and Contextual Studies: 38 credits</li>
                                                </ul>

                                                <h6>3. Free Electives (minimum 20 credits)</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion animate fadeIn">
                                        <h3 class="entry-title">COURSE DESCRIPTION</h3>
                                        <div class="entry-panel">
                                            <div class="entry-content entry-fadeIn">
                                                Course Description
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $staff = [
                            "link" => "#outer-apply-now",
                            "cta" => "APPLY NOW",
                            "extra-class" => "blue animate fadeIn"
                        ];

                        include($root . "include/element-staff-small.php");

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="learning-program-slide" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="marquee-bg-content animate fadeIn">
                <?php
                $staff_title = "GALLERIES";

                include($root . "include/element-staff.php");
                ?>

                <div class="slides-marquee-wrapper">
                    <div class="marquee-wrapper">
                        <div class="marquee" data-js="liMarquee">
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                            ?>
                                <div class="marquee-item">
                                    <div class="decoration">
                                        <div class="illustration var-<?php echo $i + 1; ?>">
                                            <img src="./assets/media/design/illustration<?php echo $i + 1; ?>.svg" alt="Illustration" loading="lazy" draggable="false">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="slide-image blurred-media">
                                        <img src="./assets/media/design/learning-program-slide-image<?php echo $i + 1; ?>.jpg" alt="Bachelor of Music Image" class="cover" draggable="false" loading="lazy">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>