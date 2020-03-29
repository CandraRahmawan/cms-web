<?php
$key = 'section_4';
$hasContent = 0;
foreach ($plugin as $item) {
  if ($item['plugin']['key'] == $key) {
    $hasContent++;
  }
}
if ($hasContent > 0):
  ?>
    <section class="home-section-4">
        <div class="title-section">
            <h1>Advantages of DBE Acoustic</h1>
        </div>
        <div class="column-content">
          <?php
          echo '<div class="section-part-left">';
          $halfColumn = 1;
          $lastArrayHalfColumn = 1;
          foreach ($plugin as $index => $item) {
            if ($item['plugin']['key'] == $key) {
              if ($halfColumn <= ceil($hasContent / 2)) {
                echo '<div class="section-icon">';
                echo '<img data-src="' . $item['detail']['value_2'] . '" uk-img/>';
                echo '<span>' . $item['detail']['value_1'] . '</span>';
                echo '</div>';
                $halfColumn++;
                $lastArrayHalfColumn = $index + 1;
              }
            }
          }
          echo '</div>';
          echo '<div class="section-part-right">';
          for ($i = 0; $i < sizeof($plugin); $i++) {
            if ($plugin[$i]['plugin']['key'] == $key) {
              if ($lastArrayHalfColumn == $i) {
                echo '<div class="section-icon">';
                echo '<img data-src="' . $plugin[$i]['detail']['value_2'] . '" uk-img/>';
                echo '<span>' . $plugin[$i]['detail']['value_1'] . '</span>';
                echo '</div>';
                $lastArrayHalfColumn++;
              }
            }
          }
          echo '</div>';
          ?>
        </div>
    </section>
<?php
endif;