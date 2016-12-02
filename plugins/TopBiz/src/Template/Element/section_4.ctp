<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_4')) {
            ?>
            <section class="portfolioArea home commonSection">
                <div class="container">
                    <?php echo $sec['content']['description']; ?>
                </div>
            </section>
            <?php
        }
    }
endif;
