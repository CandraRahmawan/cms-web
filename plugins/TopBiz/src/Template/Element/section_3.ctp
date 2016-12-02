<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_3')) {
            ?>
            <section class="serviceArea commonSection">
                <div class="overlay"></div>
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