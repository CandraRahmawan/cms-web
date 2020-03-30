<div id="menu-show" uk-offcanvas>
    <div class="uk-offcanvas-bar">
        <div class="menu-fullbar-header">
          <?= $this->Html->link(
            $this->Html->image('/images/logo.png'),
            '/',
            ['escape' => false]
          ); ?>
            <div>
                <a href="#menu-show" uk-toggle><span uk-icon="icon: close; ratio: 2"></span></a>
            </div>
        </div>
        <div class="list-menu">
            <ul class="uk-nav">
              <?php
              foreach ($menu_header as $item) {
                echo $this->Html->tag('li', $this->Html->tag('a', $item['name'], ['href' => $this->Utility->buildUrl($item['link'])]), ['class' => 'uk-' . $item['active']]);
              }
              ?>
            </ul>
            <ul class="uk-nav uk-nav-default social-list">
                <div class="social-title">
                    Follow dbE Acoustics
                </div>
                <div class="social-link-list">
                    <li class="social-link">
                      <?= $this->Html->link(
                        $this->Html->image('/images/fb_logo.png'),
                        $settings['facebook'],
                        ['escape' => false, 'target' => '_blank']
                      );
                      ?>
                    </li>
                    <li class="social-link">
                      <?= $this->Html->link(
                        $this->Html->image('/images/ig_logo.png'),
                        $settings['instagram'],
                        ['escape' => false, 'target' => '_blank']
                      );
                      ?>
                    </li>
                    <li class="social-link">
                      <?= $this->Html->link(
                        $this->Html->image('/images/shopee_logo.png'),
                        $settings['shopee'],
                        ['escape' => false, 'target' => '_blank']
                      );
                      ?>
                    </li>
                    <li class="social-link">
                      <?= $this->Html->link(
                        $this->Html->image('/images/tokped_logo.png'),
                        $settings['tokopedia'],
                        ['escape' => false, 'target' => '_blank']
                      );
                      ?>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</div>