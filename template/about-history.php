<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-history-main">
    <section id="history-hero" class="sc hero height-screen">
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
                        "name" => "HISTORY",
                        "url" => ""
                    ]
                ];

                include($root . "include/element-directory.php");
                ?>

                <?php
                $section = [
                    "title" => "HISTORY",
                    "description" => 'The Princess Galyani Vadhana Institute of Music was established through the collaborative efforts of the Faculty of Music at Silpakorn University and the Ministry of Culture, who jointly developed the project to establish a music institute in the conservatory model. The institute was created to commemorate Her Royal Highness Princess Galyani Vadhana Krom Luang Naradhiwas Rajanagarindra on the auspicious occasion of her 84th birthday on May 6, 2007. This establishment acknowledged her boundless grace and numerous contributions to the Thai people throughout her life, as well as her aspiration to advance classical music in Thailand to international standards.
                    <br><br>
                    When Professor Emeritus Khunying Khaisri Sri-aroon was serving as the Minister of Culture at that time, she presented the project for establishing a higher education institution for music to Her Royal Highness. Princess Galyani Vadhana graciously bestowed the name "Princess Galyani Vadhana Institute of Music" upon the institution.'
                ];

                include($root . "include/section-header.php");
                ?>

                <div class="marquee-full-screen animate fadeIn">
                    <div class="history-timeline">
                        <?php
                        $staff_title = "HISTORY";

                        include($root . "include/element-staff.php");
                        ?>

                        <div class="marquee-wrapper animate fadeIn">
                            <div class="marquee" data-js="liMarquee">
                                <?php
                                $timeline_card_arr = [
                                    [
                                        "slide-link" => "#timeline-1",
                                        "image" => "./assets/media/design/2007.jpg",
                                        "description" => "2007",
                                        "title" => "Beginning",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-2",
                                        "image" => "./assets/media/design/2008.jpg",
                                        "description" => "2008",
                                        "title" => "Location",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-3",
                                        "image" => "./assets/media/design/2009.jpg",
                                        "description" => "2009",
                                        "title" => "Design and Construction",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-4",
                                        "image" => "./assets/media/design/2011.jpg",
                                        "description" => "2011",
                                        "title" => "Milestone",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-5",
                                        "image" => "./assets/media/design/2012.jpg",
                                        "description" => "2012",
                                        "title" => "Authorization",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-6",
                                        "image" => "./assets/media/design/2014.jpg",
                                        "description" => "2014",
                                        "title" => "Launch",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-7",
                                        "image" => "./assets/media/design/2016.jpg",
                                        "description" => "2016",
                                        "title" => "Ceremony",
                                        "decoration" => "true"
                                    ],
                                    [
                                        "slide-link" => "#timeline-8",
                                        "image" => "./assets/media/design/2017.jpg",
                                        "description" => "2017",
                                        "title" => "Infrastructure",
                                        "decoration" => "true"
                                    ]
                                ];

                                foreach ($timeline_card_arr as $index => $item) {
                                    include($root . "include/staff-cta-item.php");
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="history-slides" class="sc">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                $timeline_arr = [
                    [
                        "id" => "timeline-1",
                        "name" => "Beginning",
                        "year" => "2007",
                        "slide-color" => "--color-black",
                        "bg-image" => "./assets/media/design/2007.jpg",
                        "content" => [
                            [
                                "date" => "May 22, 2007",
                                "text" => "
                                The Princess Galyani Vadhana Institute of Music Establishment Project 
                                <br><br>
                                The Princess Galyani Vadhana Institute of Music Establishment Project The Cabinet, under Prime Minister General Surayud Chulanont, approved the establishment of the Princess Galyani Vadhana Institute of Music as a commemorative project in honor of Her Royal Highness Princess Galyani Vadhana Krom Luang Naradhiwas Rajanagarindra on the occasion of her 84th birthday anniversary on May 6, 2007.
                                ",
                            ],
                            [
                                "date" => "July 11, 2007",
                                "text" => "At the 4/2007 meeting, the Silpakorn University Council endorsed the establishment of the Princess Galyani Vadhana Institute of Music as an affiliated unit of Silpakorn University, as recommended by the Bureau of the Budget, to enable the procurement of government funding for the Institute's establishment.",
                            ],
                            [
                                "date" => "September 21, 2007 ",
                                "text" => "The Ministry of Culture submitted a formal request to the Ministry of Industry for the use of a 14-rai plot (approximately 5.5 acres) at the former Bang Yi Khan Distillery site near Rama VIII Bridge on the Thonburi side. This land was requested for the establishment of the Princess Galyani Vadhana Institute of Music. Her Royal Highness Princess Maha Chakri Sirindhorn, the Honorary Advisor to the Institute's establishment project, conducted a royal visit on November 17, 2007, to inspect the site, including the Bottle Washing Building (which was later renovated and used as the office of the Royal Project Coordination Committee and the Chaipattana Foundation), the former Bang Yi Khan Distillery Administrative Building, and the heritage building under the supervision of the Fine Arts Department.",
                            ],
                            [
                                "date" => "December 25, 2007 ",
                                "text" => "The Cabinet approved the establishment of the Princess Galyani Vadhana Institute of Music and authorized an initial budget of 22,535,750 Thai baht for the project's preliminary operations",
                            ],
                        ]
                    ],
                    [
                        "id" => "timeline-2",
                        "name" => "Location",
                        "year" => "2008",
                        "slide-color" => "--color-note3-p",
                        "bg-image" => "./assets/media/design/2008.jpg",
                        "content" => [
                            [
                                "date" => "January 23, 2008",
                                "text" => "Silpakorn University appointed two working committees: one for the construction design and architecture of the Princess Galyani Vadhana Institute of Music, and another for the development of the Institute's academic curriculum and educational programs.",
                            ],
                            [
                                "date" => "June 11, 2008",
                                "text" => "Her Royal Highness Princess Maha Chakri Sirindhorn issued a royal directive to request the use of the Bang Yi Khan Distillery site as the location for the Princess Galyani Vadhana Institute of Music."
                            ]
                        ]
                    ],
                    [
                        "id" => "timeline-3",
                        "name" => "Design and Construction",
                        "year" => "2009",
                        "slide-color" => "--color-gold",
                        "bg-image" => "./assets/media/design/2009.jpg",
                        "content" => [
                            [
                                "date" => "July 10, 2009",
                                "text" => "The Treasury Department, Ministry of Finance, granted permission to Silpakorn University to use the state property building of the Department of Industrial Promotion, Ministry of Industry, for renovation into an administrative building. The project received a renovation budget of 20 million Thai baht in 2009 and an additional 10 million Thai baht in fiscal year 2010.",
                            ],
                            [
                                "date" => "September 11, 2009",
                                "text" => "The Department of Industrial Promotion, Ministry of Industry, granted permission to the Princess Galyani Vadhana Institute of Music to use a vacant area of 1,730 square meters (approximately 18,620 square feet) at the former Bang Yi Khan Distillery site for the construction of the Institute's academic building. The project received government funding of 127,599,000 baht for construction from 2011 to 2014. The building was designed by Architects 49 Limited under the guidance of Professor Nithi Sthapitanonda. Construction began in 2011, with S.Inter & Associates Company Limited as the construction contractor. The building is a four-story structure with a total usable area of 4,180 square meters (approximately 44,990 square feet).",
                            ],
                        ]
                    ],
                    [
                        "id" => "timeline-4",
                        "name" => "Milestone",
                        "year" => "2011",
                        "slide-color" => "--color-note1-b",
                        "bg-image" => "./assets/media/design/2011.jpg",
                        "content" => [
                            [
                                "date" => "September 9, 2011",
                                "text" => "Her Royal Highness Princess Maha Chakri Sirindhorn presided over the opening ceremony of the Princess Galyani Vadhana Institute of Music's Administrative Building, along with the buildings of the Chaipattana Foundation and the Office of the Royal Development Projects Board (RDPB). She also performed the foundation stone laying ceremony for the Institute's academic building. The Administrative Building has a usable area of 1,674 square meters (approximately 18,020 square feet), with an auditorium on the ground floor and the Institute's offices on the second floor.
                                            <br><br>During the opening ceremony on September 9, 2011, Princess Sirindhorn instructed Dr. Somsuda Leyavanija, the Director-General of the Fine Arts Department, who was present at the ceremony, to restore the heritage building adjacent to the Administrative Building and transfer it to the Princess Galyani Vadhana Institute of Music for its use. In response to this royal initiative, the Fine Arts Department allocated a budget of 36 million baht for the years 2012 and 2013 for the restoration work and the construction of a monument to Her Royal Highness Princess Galyani Vadhana Krom Luang Naradhiwas Rajanagarindra in front of the building. The project was expected to be completed in 2014.
                                            <br><br>The Administrative Building was affected by flooding in October 2011. The Bureau of the Budget allocated emergency relief funds of 2,357,000 baht for flood damage recovery and repairs, which were completed on April 22, 2012.
                                        ",
                            ],
                            [
                                "date" => "October 7, 2011",
                                "text" => "Phra Khru Siridhammanuruk, the Abbot of Wat Phraya Siri-Aisawan Temple, performed the foundation stone laying ceremony for the academic building of the Princess Galyani Vadhana Institute of Music, placing the foundation stone that had been previously consecrated by Her Royal Highness Princess Maha Chakri Sirindhorn.",
                            ],
                        ]
                    ],
                    [
                        "id" => "timeline-5",
                        "name" => "Authorization",
                        "year" => "2012",
                        "slide-color" => "--color-black",
                        "bg-image" => "./assets/media/design/2012.jpg",
                        "content" => [
                            [
                                "date" => "March 15, 2012 ",
                                "text" => "The House of Representatives voted to approve the Princess Galyani Vadhana Institute of Music Act."
                            ],
                            [
                                "date" => "April 9, 2012",
                                "text" => "Prime Minister Yingluck Shinawatra presented the Princess Galyani Vadhana Institute of Music Act of 2012 to His Majesty King Bhumibol Adulyadej for royal endorsement."
                            ],
                            [
                                "date" => "May 25, 2012",
                                "text" => "His Majesty King Bhumibol Adulyadej graciously granted royal assent to the Princess Galyani Vadhana Institute of Music Act of 2012, which came into effect on May 26, 2012."
                            ],
                            [
                                "date" => "July 26, 2012",
                                "text" => "The executives and personnel of the Princess Galyani Vadhana Institute of Music relocated from the Office of the President building at Silpakorn University, Taling Chan, to the Institute's Administrative Building located at 2010 Arun Amarin 36 Road, Bang Yi Khan Sub-district, Bang Phlat District, Bangkok 10700."
                            ]
                        ]
                    ],
                    [
                        "id" => "timeline-6",
                        "name" => "Launch",
                        "year" => "2014",
                        "slide-color" => "--color-note3-p",
                        "bg-image" => "./assets/media/design/2014.jpg",
                        "content" => [
                            [
                                "date" => "June 2, 2014",
                                "text" => "In the 2014 academic year, the Princess Galyani Vadhana Institute of Music welcomed its first cohort of 14 students."
                            ]
                        ]
                    ],
                    [
                        "id" => "timeline-7",
                        "name" => "Ceremony",
                        "year" => "2016",
                        "slide-color" => "--color-gold",
                        "bg-image" => "./assets/media/design/2016.jpg",
                        "content" => [
                            [
                                "date" => "December 2, 2016",
                                "text" => "The Princess Galyani Vadhana Institute of Music held a memorial ceremony to pay tribute and express gratitude to His Majesty King Bhumibol Adulyadej. The ceremony featured performances of His Majesty's musical compositions by the Princess Galyani Vadhana Institute Orchestra, conducted by Professor Sittichai Pengcharoen. The event included a rendition of \"The Impossible Dream\" and a candle-lighting ceremony at the plaza in front of Her Royal Highness Princess Galyani Vadhana's monument at the Gita Rajanagarindra building, Princess Galyani Vadhana Institute of Music."
                            ],
                            [
                                "date" => "December 27, 2016",
                                "text" => "Her Royal Highness Princess Maha Chakri Sirindhorn presided over the consecration ceremony of the monument of Her Royal Highness Princess Galyani Vadhana Krom Luang Naradhiwas Rajanagarindra. She also inaugurated the newly renovated Gita Rajanagarindra Building and the Galyanin Keetakan Building, which serves as the academic building."
                            ]
                        ]
                    ],
                    [
                        "id" => "timeline-8",
                        "name" => "Infrastructure",
                        "year" => "2017",
                        "slide-color" => "--color-black",
                        "bg-image" => "./assets/media/design/2017.jpg",
                        "content" => [
                            [
                                "date" => "June 22, 2017",
                                "text" => "
                                            The Treasury Department, through letter No. Gor Kor 0314/9508 dated June 22, 2017, granted permission to the Princess Galyani Vadhana Institute of Music to use all four buildings and their surrounding areas, which include:
                                            <br><br>
                                            1. The Administrative Building <br>
                                            2. The Gita Rajanagarindra Building <br>
                                            3. The PGVIM Learning Center <br>
                                            4. The Galyanin Keetakan Building
                                        "
                            ]
                        ]
                    ]

                ];

                foreach ($timeline_arr as $index => $timeline) {
                ?>
                    <div class="swiper-slide"
                        id="<?php echo $timeline["id"] ?>"
                        style="
                        --slide-color: var(<?php echo $timeline["slide-color"] ?>); 
                        --slide-color-rgb: var(<?php echo $timeline["slide-color"] ?>-rgb)">
                        <div class="wrapper">
                            <div class="background-image blurred-media">
                                <img src="<?php echo $timeline["bg-image"] ?>" alt="<?php echo $timeline["name"] ?> (<?php echo $timeline["year"] ?>)" class="cover" loading="lazy" draggable="false">
                            </div>

                            <div class="content">
                                <div class="wrapper">
                                    <div class="header">
                                        <div class="title c-white">
                                            <h2 class="name size-h2"><?php echo $timeline["name"] ?></h2>
                                            <h3 class="year size-h3">(<?php echo $timeline["year"] ?>)</h3>
                                        </div>
                                        <div class="swiper-navigation hidden-device-md">
                                            <div class="nav-wrapper">
                                                <div class="history-slides-swiper-button-prev swiper-button-prev"></div>
                                                <div class="history-slides-swiper-button-next swiper-button-next"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="body-scroll" data-lenis-prevent>
                                            <div class="content-container">
                                                <?php
                                                foreach ($timeline["content"] as $index => $content) {
                                                ?>
                                                    <div class="content-item">
                                                        <?php if (isset($content["date"])) { ?>
                                                            <h3 class="content-date"><?php echo $content["date"] ?></h3>
                                                        <?php } ?>
                                                        <p class="text"><?php echo $content["text"] ?></p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-navigation show-md">
                <div class="wrapper">
                    <div class="history-slides-swiper-button-prev swiper-button-prev"></div>
                    <div class="history-slides-swiper-button-next swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>