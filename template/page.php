<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main">
    <section id="page-hero" class="sc hero">
        <div class="sc-inner sc-inner--precedes sc-inner--follows">
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
                    "title" => "Privacy Policy",
                ];

                include($root . "include/section-header.php");

                ?>

            </div>
        </div>
    </section>

    <section id="page-content" class="sc">
        <div class="sc-inner sc-inner--no-padding-top">
            <div class="container">
                <div class="two-side tab-container padding-bottom">
                    <?php
                    $tab_detail = [
                        "type" => [
                            "privacy" => "PRIVACY NOTICE",
                            "cookie" => "COOKIES NOTIICE",
                            "term-of-use" => "TERM OF USE",
                        ],
                    ];
                    $first_key = array_key_first($tab_detail["type"]);
                    ?>
                    <div class="tabs">
                        <div class="sticky-content">
                            <div class="swiper auto tab-links">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($tab_detail["type"] as $key => $value) {
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="tab">
                                                <a href="#<?php echo $key; ?>" class="button <?php if ($key == $first_key) echo "active" ?>"><?php echo $value; ?></a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-contents">
                        <?php
                        foreach ($tab_detail["type"] as $key => $value) {
                        ?>
                            <div class="tab-content <?php if ($key == $first_key) echo "active"; ?>" id="<?php echo $key ?>">
                                <div class="entry-content entry-fadeIn">
                                    <h6>1. Purpose of Data Collection</h6>
                                    <p>PGVIM collects personal information to improve educational services, manage admissions, conduct research, and communicate effectively with students, staff, and visitors. This includes data submitted via applications, surveys, or other interactions on our website.</p>
                                    <hr class="wp-block-separator">

                                    <h6>2. Types of Data Collected</h6>
                                    <ul>
                                        <li>
                                            <strong>Personal Information</strong>: Full name, contact information (email, phone number), address, and, if applicable, academic history.
                                        </li>
                                        <li>
                                            <strong>Technical Data</strong>: IP addresses, device type, and website interaction logs for system analysis and improvement.
                                        </li>
                                        <li>
                                            <strong>Usage Information</strong>: Browsing patterns on our website, used to enhance user experience and optimize content.
                                        </li>
                                    </ul>
                                    <hr class="wp-block-separator">

                                    <h6>3. Use of Cookies</h6>
                                    <p>We utilize cookies to facilitate website functionality and gather analytical insights. Users may disable cookies through browser settings, though this may affect website performance.</p>
                                    <hr class="wp-block-separator">

                                    <h6>4. Data Storage and Security</h6>
                                    <p>PGVIM securely stores data using encryption and access controls to prevent unauthorized access. We regularly review security measures to comply with PDPA guidelines.</p>
                                    <hr class="wp-block-separator">

                                    <h6>5. Sharing of Data</h6>
                                    <p>Data may be shared with authorized third parties to facilitate services like online payment processing, analytics (e.g., Google Analytics), and academic partnerships. Such parties are bound by confidentiality obligations.
                                    </p>
                                    <hr class="wp-block-separator">

                                    <h6>6. User Rights</h6>
                                    <p>Under the PDPA, users have the right to:</p>
                                    <ul>
                                        <li><strong>Access</strong> their data</li>
                                        <li><strong>Request correction</strong> of incorrect data</li>
                                        <li><strong>Request deletion</strong> of data, subject to legal retention requirements</li>
                                        <li><strong>Withdraw consent</strong> for data usage at any time</li>
                                    </ul>
                                    <hr class="wp-block-separator">

                                    <h6>7. Contact Information</h6>
                                    <p>For any inquiries or to exercise data rights, please contact PGVIM's Data Protection Officer at [contact email] or through our office.</p>
                                    <hr class="wp-block-separator">

                                    <h6>8. Policy Updates</h6>
                                    <p>This policy may be updated periodically. Updates will be posted on our website.</p>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="illustration var-4 rellax" data-rellax-speed="-0.4">
                            <img src="./assets/media/design/illustration4.svg" alt="Illustration" loading="lazy" draggable="false">
                        </div>
                        <div class="illustration var-1 rellax" data-rellax-speed="-0.2">
                            <img src="./assets/media/design/illustration1.svg" alt="Illustration" loading="lazy" draggable="false">
                        </div>
                        <div class="illustration var-6 rellax" data-rellax-speed="-0.4">
                            <img src="./assets/media/design/illustration6.svg" alt="Illustration" loading="lazy" draggable="false">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>