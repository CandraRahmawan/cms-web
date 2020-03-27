<div class="product-category-wrapper">
  <?php
  echo $this->Element('scroll_text_absolute');
  foreach ($content as $item) {
    echo '<div class="content-wrapper">';
    echo '<div>';
    echo '<h1>' . $item['detail']['value_1'] . '</h1>';
    echo '</div>';
    echo '<div class="bg-image" style="background-color: ' . $item['detail']['value_2'] . '">';
    echo '<img data-src="' . $item['detail']['value_3'] . '" uk-img/>';
    echo $this->Html->link(
      $this->Html->image('/images/icon-circle-right.png'),
      '/products/' . $this->Utility->slugText($item['detail']['value_1']),
      ['escape' => false]
    );
    echo '</div></div>';
  }
  ?>
</div>