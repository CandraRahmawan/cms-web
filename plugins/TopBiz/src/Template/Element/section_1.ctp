<?php
if (!empty($section)):
    foreach ($section as $sec) {
        if (($sec['content']['status'] == 'Y') && ($sec['t']['key'] == 'section_1')) {
            ?>
            <section class="testiArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center">
                            <?php echo $sec['content']['description']; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
endif;