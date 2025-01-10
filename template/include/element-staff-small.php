<div class="staff-small animate fadeIn <?php if (isset($staff["extra-class"])) echo $staff["extra-class"] ?>">
    <div class="wrapper">
        <div class="staff-line"></div>
        <div class="staff-line"></div>
        <div class="staff-line"></div>
        <div class="staff-line"></div>
        <div class="staff-line"></div>
        <?php if (isset($staff["is-footer"])) { ?>
            <a href="<?php echo $staff["link"] ?>" class="shorten-logo">
                <div class="wrapper">
                    <img src="./assets/media/shorten-text-logo.svg" alt="Logo Text Shorten" draggable="false">
                </div>
            </a>
        <?php } elseif (isset($staff["is-submit"])) { ?>
            <button
                class="cta"
                type="submit">
                <?php echo $staff["cta"] ?>
            </button>
        <?php } else { ?>
            <a
                href="<?php echo $staff["link"] ?>"
                class="cta"
                <?php if (isset($staff["new-tab"])) echo "target='_blank'"; ?>
                <?php if (isset($staff["file-download"])) echo "download"; ?>>
                <?php echo $staff["cta"] ?>
            </a>
        <?php } ?>
    </div>
</div>