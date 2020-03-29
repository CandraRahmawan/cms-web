<?php
$value_1 = '';
$value_2 = '';
$value_3 = '';
$hasContent = 0;
foreach ($plugin as $item) {
  if ($item['plugin']['key'] == 'section_1') {
    $hasContent++;
    $value_1 = $item['detail']['value_1'];
    $value_2 = $item['detail']['value_2'];
    $value_3 = $item['detail']['value_3'];
  }
}
if ($hasContent > 0):
  ?>
    <section class="home-section-1">
        <div class="section-part-left">
            <h1><?= $value_1; ?></h1>
            <span><?= $value_2; ?></span>
        </div>
        <div class="section-part-right">
            <img data-src="<?= $value_3; ?>" uk-img/>
        </div>
    </section>
<?php
endif;