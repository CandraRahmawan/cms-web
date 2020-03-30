<div class="warranty-information-wrapper">
  <?= $this->Element('scroll_text_absolute'); ?>
    <div class="title-wrapper">
        <h1>Warranty Information</h1>
    </div>
    <div class="content-wrapper">
        <div class="left-content">
            <hr>
            <h3>All our Products are covered by 1 year warranty.</h3>
        </div>
        <div class="right-content">
            <div class="top-text">
                If you have any problems with dbE products,<br> please contact us at
            </div>
            <div class="store-list">
                <h3>JAKARTA</h3>
                <p>Plaza Semanggi Lantai 2B no. 122</p>
            </div>
            <div class="store-list">
                <h3>BANDUNG</h3>
                <p>Bandung Electronic Center 2nd Fl Y05</p>
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
