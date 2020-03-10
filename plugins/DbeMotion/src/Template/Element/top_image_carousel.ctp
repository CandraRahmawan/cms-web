<section class="top-image" uk-slideshow="animation:scale;autoplay:true;autoplay-interval:2000">
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
                <?= $this->Html->image('/images/carousel/1.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <?= $this->Html->image('/images/carousel/2.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <?= $this->Html->image('/images/carousel/3.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <?= $this->Html->image('/images/carousel/4.jpg', ['class' => 'hero-image']); ?>
            </li>
            <li>
                <?= $this->Html->image('/images/carousel/5.jpg', ['class' => 'hero-image']); ?>
            </li>
        </ul>
    </div>
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
    <?= $this->Element('scroll_text_absolute'); ?>
</section>