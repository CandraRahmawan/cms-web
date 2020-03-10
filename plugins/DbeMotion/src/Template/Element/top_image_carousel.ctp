<section class="top-image" uk-slideshow="autoplay:true;autoplay-interval:2000">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
        <ul class="uk-slideshow-items">
            <li>
                <?= $this->Html->image('/images/carousel/top_image_home.jpg', ['class' => 'hero-image']); ?>
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
                <?= $this->Html->image('/images/carousel/1.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <div class="text-title">
                    <span>Dual Dynamic Driver Earphone</span>
                    <h1>PR300</h1>
                </div>
                <?= $this->Html->image('/images/carousel/2.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <div class="text-title">
                    <span>7.1 Virtual Surround Gaming Headphone</span>
                    <h1>GM300</h1>
                </div>
                <?= $this->Html->image('/images/carousel/3.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <div class="text-title">
                    <span>Pro Gaming Headphone dengan 3.5mm Jack</span>
                    <h1>GM250</h1>
                </div>
                <?= $this->Html->image('/images/carousel/4.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <div class="text-title">
                    <span>High Definition Wood Earphone</span>
                    <h1>WS100</h1>
                </div>
                <?= $this->Html->image('/images/carousel/5.jpg', ['class' => 'hero-image']); ?>
            </li>
        </ul>
    </div>
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
    <?= $this->Element('scroll_text_absolute'); ?>
</section>