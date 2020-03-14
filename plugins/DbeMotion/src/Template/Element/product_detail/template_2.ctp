<div class="product-detail-wrapper">
    <?= $this->Element('scroll_text_absolute'); ?>
    <div class="top-content">
        <?= $this->Html->image('/images/template_2/top_image.jpg'); ?>
        <div class="content-info-wrapper template-2">
            <?= $this->Html->link(
                '<span uk-icon="icon: chevron-left; ratio:1.8" />',
                '/products/' . $this->request->params['category'] . '',
                ['escape' => false]
            ); ?>
            <div class="title-wrapper template-2">
                <h1>
                    Dbe Comfit Eartips
                </h1>
            </div>
        </div>
    </div>
    <div class="section-1">
        <?= $this->Html->image('/images/template_2/section_1_img.jpg'); ?>
        <div class="right-content template-2">
            <p>
                We made dbE Comfit for you
                who wants a good eartips with
                high quality silicon and
                affordable price
            </p>
        </div>
    </div>
    <div class="section-2 template-2 blue-grey">
        <div class="content-wrapper template-2">
            <h2>
                For in ear earphone, a good eartips is essential to get the maximum sound
                quality. Good eartips usually made of high quality soft silicon to ensure
                perfect fit in your ear canal.
            </h2>
            <h2>
                We made dbE Comfit for you who wants a good eartips with high quality
                silicon and affordable price.In 1 package of dbE Comfit, we have 1 pair of
                small eartips, 1 pair of medium eartips and 1 pair of large eartips.
            </h2>
        </div>
        <div class="specification template-2">
            <h4>Specification</h4>
            <p>
                3 pair of eartips, 1 pair small, 1 pair medium and 1 pair large
                All eartips are made of high quality soft silicon
            </p>
        </div>
    </div>
</div>