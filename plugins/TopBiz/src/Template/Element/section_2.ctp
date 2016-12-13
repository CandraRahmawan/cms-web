<?php
if (!empty($section)):
    foreach ($section as $sec) {
        ?>
        <section class="featureArea commonSection">
            <div class="container">
                <div class="row">
                    <?php echo $sec['c']['description']; ?>
                </div>
            </div>
        </section>
        <?php
    }
endif;
