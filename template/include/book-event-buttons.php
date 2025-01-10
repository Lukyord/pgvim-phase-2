<div class="sticky-buttons <?php if ($show == "pc") {
                                echo "show-md";
                            } elseif ($show == "mb") {
                                echo "hidden-device-md";
                            } ?>">
    <ul>
        <li>
            <a href="javascript:;" class="button dropdown-trigger">
                <i class="ic ic-calendar_today"></i>
                ADD TO CALENDAR
            </a>
            <div class="dropdown-options up-mb">
                <ul data-lenis-prevent>
                    <?php
                    $options = [
                        [
                            "label" => "Google Calendar",
                            "link" => "#outer"
                        ],
                        [
                            "label" => "iCalendar",
                            "link" => "#outer"
                        ],
                        [
                            "label" => "Outlook 365",
                            "link" => "#outer"
                        ],
                        [
                            "label" => "Outlook Live",
                            "link" => "#outer"
                        ],
                    ];
                    foreach ($options as $option) {
                    ?>
                        <li>
                            <a href="#<?php echo $option["link"] ?>" target="_blank" class="option"><?php echo $option["label"] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </li>
        <li>
            <a href="#outer" class="button active">
                BOOK NOW
            </a>
        </li>
    </ul>
</div>