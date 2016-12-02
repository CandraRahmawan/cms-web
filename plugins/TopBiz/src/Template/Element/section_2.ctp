<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_2')) {
            ?>
            <section class="featureArea commonSection">
                <div class="container">
                    <div class="row">
                        <?php echo $sec['content']['description']; ?>
                    </div>
                </div>
            </section>
            <?php
        }
    }
endif;
