<div class="product-detail-wrapper">
    <?= $this->Element('scroll_text_absolute'); ?>
    <div class="top-content">
        <?= $this->Html->image('/images/template_1/top_image.jpg'); ?>
        <div class="content-info-wrapper">
            <?= $this->Html->link(
                '<span uk-icon="icon: chevron-left; ratio:1.8" />',
                '/products/' . $this->request->params['category'] . '',
                ['escape' => false]
            ); ?>
            <div class="title-wrapper">
                <div>
                    <h3>
                        Professional
                        Gaming Headphone
                    </h3>
                </div>
                <h1>GM500</h1>
            </div>
        </div>
    </div>
    <div class="section-1">
        <?= $this->Html->image('/images/template_1/section_1_img.jpg'); ?>
        <div class="right-bg-color-skew"></div>
        <div class="right-content">
            <p>
                dbE GM500 is a gaming headphone with dual audio input, 3.5mm for smartphone / tablet or USB for PC /
                Laptop.
                In USB Audio mode, dbE GM500 equipped with very high quality USB 7.1 Virtual Surround Soundcard
            </p>
        </div>
    </div>
    <div class="section-2 blue-grey">
        <div class="content-wrapper">
            <div class="left-content">
                <h3>
                    We made GM500 earcup using the best PU
                    Leather and Memory Foam available. Both
                    combination made GM500 very
                    comfortable to wear even for long time
                    usage.
                </h3>
                <p>
                    Sound characteristics of GM500 is punchy bass, very
                    wide staging, very good detail and instrument separation. We designed GM500 as an all rounder
                    headphone, which means it is excellent to use for gaming
                    (you can listen to enemy steps clearly), listening to
                    music (sound quality similar to hifi headphone) and
                    waching movie. You can use GM500 for all your listening
                    activities.
                </p>
            </div>
            <div class="right-content">
                <?= $this->Html->image('/images/template_1/section_2_img.png'); ?>
            </div>
        </div>
    </div>
</div>