<footer>
    <div class="wrapper-section">
        <div class="left-footer">
            <?= $this->Html->image('/images/logo.png') ?>
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
                <?= $this->Html->image('/images/fb_logo.png'); ?>
                <?= $this->Html->image('/images/ig_logo.png'); ?>
                <?= $this->Html->image('/images/shopee_logo.png'); ?>
                <?= $this->Html->image('/images/tokped_logo.png'); ?>
            </li>
            <li class="social-contact">
                +62 22 423 4642
            </li>
            <li class="social-contact">
                info@dbeacoustics.com
            </li>
        </div>
    </div>
    <div class="bottom-footer">
        <div>
            dBE acoustics 2020
        </div>
    </div>
</footer>