<div class="warranty-information-wrapper">
  <?= $this->Element('scroll_text_absolute'); ?>
    <div class="title-wrapper">
      <?= $this->Html->tag('h1', $warranty[0]['detail']['value_1']); ?>
    </div>
    <div class="content-wrapper">
        <div class="left-content">
            <hr>
          <?= $this->Html->tag('h3', $warranty[0]['detail']['value_3']); ?>
        </div>
        <div class="right-content">
            <div class="top-text">
              <?= $warranty[0]['detail']['value_2']; ?>
            </div>
          <?php
          foreach ($service_centre as $item) {
            echo '<div class="store-list">';
            echo '<h3>' . $item['detail']['value_1'] . '</h3>';
            echo '<p>' . $item['detail']['value_2'] . '</p>';
            echo '</div>';
          }
          ?>
            <div class="store-list contact">
              <?php
              if ($settings['phone_number'] != "") {
                echo $this->Html->link(
                  '<p>' . $settings['phone_number'] . '</p>',
                  'tel:' . $settings['phone_number'],
                  ['escape' => false]
                );
              }
              if ($settings['whatsapp_number'] != "") {
                echo $this->Html->link(
                  '<span uk-icon="icon: whatsapp; ratio: 1.2"/>',
                  'https://api.whatsapp.com/send?phone=' . $settings['whatsapp_number'],
                  ['escape' => false, 'target' => '_blank']
                );
              }
              ?>
            </div>
        </div>
    </div>
</div>
