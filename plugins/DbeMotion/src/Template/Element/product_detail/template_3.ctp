<div class="product-detail-wrapper">
    <div class="top-content <?= !empty($detail_image['top_image']) ? '' : 'no-image' ?>">
      <?= $this->Element('scroll_text_absolute'); ?>
        <img data-src="<?= $detail_image['top_image']; ?>" uk-img/>
        <div class="content-info-wrapper template-3">
          <?= $this->Html->link(
            '<span uk-icon="icon: chevron-left; ratio:1.8" />',
            '/products/' . $this->request->params['category'] . '',
            ['escape' => false, 'class' => 'hide-mobile']
          ); ?>
            <div class="title-wrapper template-3">
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
  if (!empty($detail_image['section_1_image'])):
    ?>
      <div class="section-1 template-3">
          <img data-src="<?= $detail_image['section_1_image']; ?>" uk-img/>
          <div class="right-content template-3">
            <?= $product['description_1']; ?>
          </div>
      </div>
  <?php
  endif;
  ?>
    <div class="section-2 template-3 blue-grey">
        <div class="content-wrapper template-3">
          <?= $product['description_2']; ?>
        </div>
        <div class="specification-wrapper template-3">
          <?php
          foreach ($product['specification'] as $spec) {
            if (!empty($spec['title']) && !empty($spec['description'] && !empty($spec['specification']))) {
              echo '<div class="specification-list">';
              echo $this->Html->tag('h2', $spec['title']);
              echo $this->Html->tag('p', $spec['description']);
              echo '<div class="specification">';
              echo $this->Html->tag('h4', 'Specification');
              echo '<table border="0">';
              echo $spec['specification'];
              echo '</table>';
              echo '</div>';
              echo '</div>';
            }
          }
          ?>
        </div>
    </div>
  <?php
  if (!empty($product['additional_info'])) {
    echo '<div class="section-3 template-3">';
    echo $this->Html->tag('h4', 'Available Size and Type');
    echo $product['additional_info'];
    echo '</div>';
  }
  ?>
</div>