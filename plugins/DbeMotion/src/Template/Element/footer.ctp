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
                <?= $this->Html->link(
                    $this->Html->image('/images/fb_logo.png'),
                    '/',
                    ['escape' => false, 'target' => '_blank']
                );
                ?>
                <?= $this->Html->link(
                    $this->Html->image('/images/ig_logo.png'),
                    'https://www.instagram.com/dbe.id/',
                    ['escape' => false, 'target' => '_blank']
                );
                ?>
                <?= $this->Html->link(
                    $this->Html->image('/images/shopee_logo.png'),
                    'https://shopee.co.id/dbeofficial',
                    ['escape' => false, 'target' => '_blank']
                );
                ?>
                <?= $this->Html->link(
                    $this->Html->image('/images/tokped_logo.png'),
                    'https://www.tokopedia.com/dbeofficial',
                    ['escape' => false, 'target' => '_blank']
                );
                ?>
            </li>
            <li class="social-contact">
                +62 22 423 4642
            </li>
            <li class="social-contact">
                <?= $this->Html->link(
                    'info@dbeacoustics.com',
                    'mailto: info@dbeacoustics.com'
                );
                ?>
            </li>
        </div>
    </div>
    <div class="bottom-footer">
        <div>
            dBE acoustics 2020
        </div>
    </div>
</footer>