<div class="product-category-wrapper">
  <?php
  echo $this->Element('scroll_text_absolute');
  foreach ($content as $item) {
    $value_1 = json_decode($item['detail']['value_1']);
    echo '<div class="content-wrapper">';
    echo '<div>';
    echo '<h1>' . $value_1->name . '</h1>';
    echo '</div>';
    echo '<div class="bg-image" style="background-color: ' . $item['detail']['value_2'] . '">';
    echo '<img data-src="' . $item['detail']['value_3'] . '" uk-img/>';
    echo $this->Html->link(
      $this->Html->image('/images/icon-circle-right.png'),
      '/products/' . $this->Utility->slugText($value_1->id . ' ' . $value_1->name),
      ['escape' => false]
    );
    echo '</div></div>';
  }
  ?>
</div>