<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_5')) {
            ?>
            <section class="funFactArea commonSection">
                <div class="allFacts">
                    <?php echo $sec['content']['description']; ?>
                </div>
            </section>
            <?php
        }
    }
endif;
