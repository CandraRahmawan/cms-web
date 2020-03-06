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
                <li class="social-link">
                    <?= $this->Html->link(
                        $this->Html->image('/images/fb_logo.png'),
                        'https://www.facebook.com/DbE-Indonesia-111625933761626/',
                        ['escape' => false, 'target' => '_blank']
                    );
                    ?>
                </li>
                <li class="social-link">
                    <?= $this->Html->link(
                        $this->Html->image('/images/ig_logo.png'),
                        'https://www.instagram.com/dbe.id/',
                        ['escape' => false, 'target' => '_blank']
                    );
                    ?>
                </li>
                <li class="social-link">
                    <?= $this->Html->link(
                        $this->Html->image('/images/shopee_logo.png'),
                        'https://shopee.co.id/dbeofficial',
                        ['escape' => false, 'target' => '_blank']
                    );
                    ?>
                </li>
                <li class="social-link">
                    <?= $this->Html->link(
                        $this->Html->image('/images/tokped_logo.png'),
                        'https://www.tokopedia.com/dbeofficial',
                        ['escape' => false, 'target' => '_blank']
                    );
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>