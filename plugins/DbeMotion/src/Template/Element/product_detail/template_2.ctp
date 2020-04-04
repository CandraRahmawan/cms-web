<?php
$extract_img = !empty($product['img_path']) ? json_decode($product['img_path']) : [];
$img_url = [];
foreach ($extract_img as $subItem) {
  $img_url[] = $subItem;
}
$top_image = isset($img_url[1]) ? $img_url[1] : '';
$section_1_image = isset($img_url[2]) ? $img_url[2] : '';
?>
<div class="product-detail-wrapper">
    <div class="top-content <?= !empty($top_image) ? '' : 'no-image' ?>">
      <?= $this->Element('scroll_text_absolute'); ?>
        <img data-src="<?= $full_base_admin_url . $top_image; ?>" uk-img/>
        <div class="content-info-wrapper template-2">
          <?= $this->Html->link(
            '<span uk-icon="icon: chevron-left; ratio:1.8" />',
            '/products/' . $this->request->params['category'] . '',
            ['escape' => false, 'class' => 'hide-mobile']
          ); ?>
            <div class="title-wrapper template-2">
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
      <div class="section-1 template-2">
          <img data-src="<?= $full_base_admin_url . $section_1_image; ?>" uk-img/>
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