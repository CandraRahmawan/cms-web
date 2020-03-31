<div class="our-story-wrapper">
  <?= $this->Element('scroll_text_absolute'); ?>
    <div class="top-content">
      <?php
      echo $this->Html->tag('h1', $content[0]['detail']['value_1']);
      echo $this->Html->tag('h2', $content[0]['detail']['value_2']);
      echo $this->Html->tag('div', $content[0]['detail']['value_3'], ['class' => 'text-content']);
      ?>
    </div>
    <div class="middle-content">
        <div class="top-triangle"></div>
        <div class="text">
          <?= $content[1]['detail']['value_1']; ?>
        </div>
        <img data-src="<?= $content[1]['detail']['value_2']; ?>" uk-img/>
        <div class="bottom-triangle"></div>
    </div>
    <div class="bottom-content">
      <?php
      for ($i = 2; $i < sizeof($content); $i++) {
        echo '<div class="text-content">';
        echo $this->Html->tag('h2', $content[$i]['detail']['value_1']);
        echo $this->Html->tag('p', $content[$i]['detail']['value_2']);
        echo '</div>';
      }
      ?>
    </div>
</div>