<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_7')) {
            ?>
            <section class="blogArea commonSection">
                <div class="container">
                    <?php echo $sec['content']['description']; ?>
                </div>
            </section>
            <?php
        }
    }
endif;
