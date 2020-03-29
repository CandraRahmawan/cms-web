<?php
$value_1 = '';
$value_2 = '';
$hasContent = 0;
foreach ($plugin as $item) {
  if ($item['plugin']['key'] == 'section_2') {
    $hasContent++;
    $value_1 = $item['detail']['value_1'];
    $value_2 = $item['detail']['value_2'];
  }
}
if ($hasContent > 0):
  ?>
    <section class="home-section-2">
        <img data-src="<?= $value_2; ?>" uk-img/>
        <div>
            <h1><?= $value_1; ?></h1>
        </div>
    </section>
<?php
endif;