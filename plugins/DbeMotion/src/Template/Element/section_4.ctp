<?php
$key = 'section_4';
$section_4 = [];
foreach ($plugin as $item) {
  if ($item['plugin']['key'] == $key) {
    array_push($section_4, [
      'value_1' => $item['detail']['value_1'],
      'value_2' => $item['detail']['value_2']
    ]);
  }
}
$sizeSection = sizeof($section_4);
if ($sizeSection > 0):
  ?>
    <section class="home-section-4">
        <div class="title-section">
            <h1>Advantages of DBE Acoustic</h1>
        </div>
        <div class="column-content">
          <?php
          $lastArray = 0;
          echo '<div class="section-part-left">';
          foreach ($section_4 as $item) {
            if (ceil($sizeSection / 2) > $lastArray) {
              echo '<div class="section-icon">';
              echo '<img data-src="' . $item['value_2'] . '" uk-img/>';
              echo '<span>' . $item['value_1'] . '</span>';
              echo '</div>';
              $lastArray++;
            }
          }
          echo '</div>';
          echo '<div class="section-part-right">';
          for ($i = 0; $i < $sizeSection; $i++) {
            if ($lastArray == $i) {
              echo '<div class="section-icon">';
              echo '<img data-src="' . $section_4[$i]['value_2'] . '" uk-img/>';
              echo '<span>' . $section_4[$i]['value_1'] . '</span>';
              echo '</div>';
            }
          }
          echo '</div>';
          ?>
        </div>
    </section>
<?php
endif;