<div id="menu-show" uk-offcanvas>
    <div class="uk-offcanvas-bar">
        <div class="menu-fullbar-header">
            <div>
                <?= $this->Html->image('/images/logo.png'); ?>
            </div>
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
                <li class="social-link">
                    <?= $this->Html->image('/images/fb_logo.png'); ?>
                </li>
                <li class="social-link">
                    <?= $this->Html->image('/images/ig_logo.png'); ?>
                </li>
                <li class="social-link">
                    <?= $this->Html->image('/images/shopee_logo.png'); ?>
                </li>
                <li class="social-link">
                    <?= $this->Html->image('/images/tokped_logo.png'); ?>
                </li>
            </ul>
        </div>
    </div>
</div>