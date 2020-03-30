<footer>
    <div class="wrapper-section">
        <div class="left-footer">
          <?= $this->Html->link(
            $this->Html->image('/images/logo.png'),
            '/',
            ['escape' => false]
          ); ?>
            <ul class="uk-nav">
              <?php
              foreach ($menu_header as $item) {
                echo $this->Html->tag('li', $this->Html->tag('a', $item['name'], ['href' => $this->Utility->buildUrl($item['link'])]), ['class' => 'uk-' . $item['active']]);
              }
              ?>
            </ul>
        </div>
        <div class="right-footer">
            <div class="social-title">
                Follow dbE Acoustics
            </div>
            <li class="social-contact">
              <?php
              if ($settings['facebook'] != "") {
                echo $this->Html->link(
                  $this->Html->image('/images/fb_logo.png'),
                  $settings['facebook'],
                  ['escape' => false, 'target' => '_blank']
                );
              }
              if ($settings['instagram'] != "") {
                echo $this->Html->link(
                  $this->Html->image('/images/ig_logo.png'),
                  $settings['instagram'],
                  ['escape' => false, 'target' => '_blank']
                );
              }
              if ($settings['shopee'] != "") {
                echo $this->Html->link(
                  $this->Html->image('/images/shopee_logo.png'),
                  $settings['shopee'],
                  ['escape' => false, 'target' => '_blank']
                );
              }
              if ($settings['shopee'] != "") {
                echo $this->Html->link(
                  $this->Html->image('/images/tokped_logo.png'),
                  $settings['tokopedia'],
                  ['escape' => false, 'target' => '_blank']
                );
              }
              ?>
            </li>
          <?php
          if ($settings['phone_number'] != "") {
            echo '<li class="social-contact">';
            echo $this->Html->link($settings['phone_number'], 'tel: ' . $settings['phone_number']);
            echo '</li>';
          }
          if ($settings['email'] != "") {
            echo '<li class="social-contact">';
            echo $this->Html->link(
              $settings['email'],
              'mailto: ' . $settings['email']
            );
            echo '</li>';
          }
          ?>
        </div>
    </div>
    <div class="bottom-footer">
        <div>
            dBE acoustics 2020
        </div>
    </div>
</footer>