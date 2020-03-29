<?php
$value_1 = '';
$value_2 = '';
$value_3 = '';
$hasContent = 0;
foreach ($plugin as $item) {
  if ($item['plugin']['key'] == 'section_3') {
    $hasContent++;
    $value_1 = $item['detail']['value_1'];
    $value_2 = json_decode($item['detail']['value_2']);
    $value_3 = $item['detail']['value_3'];
  }
}
if ($hasContent > 0):
  ?>
    <section class="home-section-3">
        <div class="section-part-left">
            <img data-src="<?= $value_3; ?>" uk-img/>
        </div>
        <div class="section-part-right">
            <h1><?= $value_1; ?></h1>
            <span><?= $value_2->key1; ?></span>
            <div class="box-text"><?= $value_2->key2; ?></div>
        </div>
    </section>
<?php
endif;