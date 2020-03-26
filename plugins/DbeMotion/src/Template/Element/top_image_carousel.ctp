<section class="top-image hide-mobile" uk-slideshow="autoplay:true;autoplay-interval:3000">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
        <ul class="uk-slideshow-items">
            <li>
                <img src="<?= $this->Url->assetUrl('/images/carousel/top_image_home.jpg'); ?>"
                     uk-cover/>
                <div class="text-image-centre">
                    <span>We love music.. Who doesn’t love music.</span>
                    <div class="box-text">
                        SERIOUSLY GOOD VALUE
                    </div>
                </div>
            </li>
            <li>
                <div class="text-title">
                    <span>High Quality Metal Earphone</span>
                    <h1>PR100</h1>
                </div>
                <img src="<?= $this->Utility->buildUrl('/dbe_motion/images/carousel/1.jpg'); ?>" uk-cover/>
            </li>
            <li>
                <div class="text-title">
                    <span>Dual Dynamic Driver Earphone</span>
                    <h1>PR300</h1>
                </div>
                <img src="<?= $this->Utility->buildUrl('/dbe_motion/images/carousel/2.jpg'); ?>" uk-cover/>
            </li>
            <li>
                <div class="text-title">
                    <span>7.1 Virtual Surround Gaming Headphone</span>
                    <h1>GM300</h1>
                </div>
                <img src="<?= $this->Utility->buildUrl('/dbe_motion/images/carousel/3.jpg'); ?>" uk-cover/>
            </li>
            <li>
                <div class="text-title">
                    <span>Pro Gaming Headphone dengan 3.5mm Jack</span>
                    <h1>GM250</h1>
                </div>
                <img src="<?= $this->Utility->buildUrl('/dbe_motion/images/carousel/4.jpg'); ?>" uk-cover/>
            </li>
            <li>
                <div class="text-title">
                    <span>High Definition Wood Earphone</span>
                    <h1>WS100</h1>
                </div>
                <img src="<?= $this->Utility->buildUrl('/dbe_motion/images/carousel/5.jpg'); ?>" uk-cover/>
            </li>
        </ul>
    </div>
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
  <?= $this->Element('scroll_text_absolute'); ?>
</section>

<section class="top-image show-mobile">
    <img src="<?= $this->Url->assetUrl('/images/carousel/top_image_home.jpg'); ?>"/>
    <div class="text-image-centre">
        <span>We love music.. Who doesn’t love music.</span>
        <div class="box-text">
            SERIOUSLY GOOD VALUE
        </div>
    </div>
</section>