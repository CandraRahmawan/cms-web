<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_6')) {
            ?>
            <section class="skillArea commonSection">
                <div class="overlay"></div>
                <div class="container">
                    <?php echo $sec['content']['description']; ?>
                </div>
            </section>
            <?php
        }
    }
endif;

