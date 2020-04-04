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
  if (!empty($section_1_image)):
    ?>
      <div class="section-1 template-3">
          <img data-src="<?= $full_base_admin_url . $section_1_image; ?>" uk-img/>
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
            <div class="specification-list">
                <h2>dbE Earphone Hardcase S (small)</h2>
                <p>
                    dbE Earphone Hardcase is a hard case made by EVA plastic to protect your earphone / in ear monitor
                    from damage.
                </p>
                <div class="specification">
                    <h4>Specification</h4>
                    <table border="0">
                        <tbody>
                        <tr>
                            <td><span>High Quality EVA Plastics & Zipper</span></td>
                        </tr>
                        <tr>
                            <td><span>Size 10 cm (width) x 8 cm (length) x 4 cm (height)</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="specification-list">
                <h2>dbE Earphone Hardcase L (large)</h2>
                <p>
                    dbE Headphone Hardcase Large is hard case made by EVA Plastic to protect your headphones from
                    damage. This case is suitable for large sized headphone and planar headphones
                </p>
                <div class="specification">
                    <h4>Specification</h4>
                    <table border="0">
                        <tbody>
                        <tr>
                            <td><span>High Quality EVA Plastics & Zipper</span></td>
                        </tr>
                        <tr>
                            <td><span>Size 27 cm (width) x 22 cm (length) x 10 cm (height)</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="specification-list">
                <h2>dbE Earphone Hardcase M (medium)</h2>
                <p>
                    Is a hard case made by EVA Plastic to protect your headphones from damage. This case is suitable for
                    medium sized headphone and foldable headphone.
                </p>
                <div class="specification">
                    <h4>Specification</h4>
                    <table border="0">
                        <tbody>
                        <tr>
                            <td><span>High Quality EVA Plastics & Zipper</span></td>
                        </tr>
                        <tr>
                            <td><span>Size 25 cm (width) x 22 cm (length) x 6 cm (height)</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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