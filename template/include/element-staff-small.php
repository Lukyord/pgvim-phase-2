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
        <?php } else { ?>
            <a href="<?php echo $staff["link"] ?>" class="cta" target="_blank">
                <?php echo $staff["cta"] ?>
            </a>
        <?php } ?>
    </div>
</div>