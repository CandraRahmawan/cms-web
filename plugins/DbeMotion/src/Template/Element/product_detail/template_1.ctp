<div class="product-detail-wrapper">
    <div class="top-content">
      <?= $this->Element('scroll_text_absolute'); ?>
        <img data-src="<?= $this->Url->assetUrl('/images/template_1/top_image.jpg') ?>" uk-img/>
        <div class="content-info-wrapper">
          <?= $this->Html->link(
            '<span uk-icon="icon: chevron-left; ratio:1.8" />',
            '/products/' . $this->request->params['category'] . '',
            ['escape' => false, 'class' => 'hide-mobile']
          ); ?>
            <div class="title-wrapper">
                <div>
                  <?= $this->Html->tag('h3', $product['subtitle']) ?>
                </div>
              <?= $this->Html->tag('h1', $product['name']) ?>
            </div>
        </div>
      <?= $this->Html->link(
        '<span uk-icon="icon: chevron-left; ratio:1" />',
        '/products/' . $this->request->params['category'] . '',
        ['escape' => false, 'class' => 'show-mobile']
      ); ?>
    </div>
    <div class="section-1">
      <?= $this->Html->image('/images/template_1/section_1_img.jpg'); ?>
        <div class="right-bg-color-skew hide-mobile"></div>
        <div class="right-content">
          <?= $product['description_1']; ?>
        </div>
    </div>
    <div class="section-2 blue-grey">
        <div class="content-wrapper">
            <div class="left-content">
              <?= $product['description_2']; ?>
            </div>
            <div class="right-content">
              <?= $this->Html->image('/images/template_1/section_2_img.png'); ?>
            </div>
        </div>
    </div>
    <div class="section-3">
      <?php
      if (!empty($product['specification'])) {
        echo '<div class="left-content">';
        echo '<h3>Specification</h3>';
        echo $product['specification'];
        echo '</div>';
      }
      ?>
        <div class="right-content">
          <?php
          if (!empty($product['feature_note'])) {
            echo '<div class="top">';
            echo $product['feature_note'];
            echo '</div>';
          }
          if (sizeof(json_decode($product['features'])) > 0):
            ?>
              <div class="bottom">
                  <h4>Features</h4>
                  <div class="text-features">
                    <?php
                    foreach (json_decode($product['features']) as $item) {
                      echo '<span style="background-color: #FE0000">' . $item . '</span>';
                    }
                    ?>
                  </div>
              </div>
          <?php endif; ?>
        </div>
    </div>
</div>