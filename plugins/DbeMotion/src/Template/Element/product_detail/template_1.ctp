<?php
$extract_img = !empty($product['img_path']) ? json_decode($product['img_path']) : [];
$img_url = [];
foreach ($extract_img as $subItem) {
  $img_url[] = $subItem;
}
$top_image = isset($img_url[1]) ? $img_url[1] : '';
$section_1_image = isset($img_url[2]) ? $img_url[2] : '';
$section_2_image = isset($img_url[3]) ? $img_url[3] : '';
?>

<div class="product-detail-wrapper">
    <div class="top-content <?= !empty($top_image) ? '' : 'no-image' ?>">
      <?= $this->Element('scroll_text_absolute'); ?>
        <img data-src="<?= $full_base_admin_url . $top_image; ?>" uk-img/>
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
  <?php
  if (!empty($section_1_image)):
    ?>
      <div class="section-1">
          <img data-src="<?= $full_base_admin_url . $section_1_image; ?>" uk-img/>
          <div class="right-bg-color-skew hide-mobile"></div>
          <div class="right-content">
            <?= $product['description_1']; ?>
          </div>
      </div>
  <?php
  endif;
  ?>
  <?php
  if (!empty($product['description_2']) || !empty($section_2_image)):
    ?>
      <div class="section-2 blue-grey">
          <div class="content-wrapper">
              <div class="left-content">
                <?= $product['description_2']; ?>
              </div>
              <div class="right-content">
                  <img data-src="<?= $full_base_admin_url . $section_2_image; ?>" uk-img/>
              </div>
          </div>
      </div>
  <?php
  endif;
  ?>
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
                      echo '<span style="background-color: ' . $product['features_color'] . '">' . $item . '</span>';
                    }
                    ?>
                  </div>
              </div>
          <?php endif; ?>
        </div>
    </div>
</div>