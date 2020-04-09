<div class="product-detail-wrapper">
    <div class="top-content <?= !empty($detail_image['top_image']) ? '' : 'no-image' ?>">
      <?= $this->Element('scroll_text_absolute'); ?>
        <img data-src="<?= $detail_image['top_image']; ?>" uk-img/>
        <div class="content-info-wrapper template-2">
            <a href="#" class="hide-mobile"
               onclick="backButtonDetailPage('<?= $this->Utility->buildFullUrl('/products/' . $this->request->params['category']); ?>')">
                <span uk-icon="icon: chevron-left; ratio:1.8"/>
            </a>
            <div class="title-wrapper template-2">
                <div>
                  <?= $this->Html->tag('h3', $product['subtitle']) ?>
                </div>
              <?= $this->Html->tag('h1', $product['name']) ?>
            </div>
        </div>
        <a href="#" class="show-mobile"
           onclick="backButtonDetailPage('<?= $this->Utility->buildFullUrl('/products/' . $this->request->params['category']); ?>')">
            <span uk-icon="icon: chevron-left; ratio:1"/>
        </a>
    </div>
  <?php
  if (!empty($detail_image['section_1_image'])):
    ?>
      <div class="section-1 template-2">
          <img data-src="<?= $detail_image['section_1_image']; ?>" uk-img/>
          <div class="right-content template-2 hide-mobile">
            <?= $product['description_1']; ?>
          </div>
      </div>
  <?php
  endif;
  ?>
    <div class="section-2 template-2 blue-grey">
        <div class="content-wrapper template-2">
            <span class="show-mobile">
                <?= $product['description_1']; ?>
            </span>
          <?= $product['description_2']; ?>
        </div>
      <?php
      if (!empty($product['specification'])) {
        echo '<div class="specification-wrapper template-2">';
        echo $this->Html->tag('h4', 'Specification');
        echo $product['specification'];
        echo '</div>';
      }
      ?>
    </div>
</div>