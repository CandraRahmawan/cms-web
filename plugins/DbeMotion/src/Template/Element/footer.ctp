<footer>
    <div class="left-footer">
        <?= $this->Html->image('/images/logo.png') ?>
        <ul>
            <?php
            foreach ($menu_header as $item) {
                echo $this->Html->tag('li', $this->Html->tag('a', $item['name'], ['href' => $this->Utility->buildUrl($item['link'])]), ['class' => 'uk-' . $item['active']]);
            }
            ?>
        </ul>
    </div>
    <div class="bottom-footer">
        <div>
            dBE acoustics 2020
        </div>
    </div>
</footer>