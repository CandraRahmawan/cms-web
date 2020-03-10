<div class="product-category-wrapper">
    <?= $this->Element('scroll_text_absolute'); ?>
    <div class="content-wrapper">
        <div>
            <h1>Headphones / Earphones Wired</h1>
        </div>
        <div class="bg-image grey">
            <?php
            echo $this->Html->image('/images/category/headphones.png');
            echo $this->Html->link(
                $this->Html->image('/images/icon-circle-right.png'),
                '/products/headphones-earphones-wired',
                ['escape' => false]
            );
            ?>
        </div>
    </div>
    <div class="content-wrapper">
        <div>
            <h1>Headphones / Earphones Gaming</h1>
        </div>
        <div class="bg-image yellow">
            <?php
            echo $this->Html->image('/images/category/headphones-gaming.png');
            echo $this->Html->link(
                $this->Html->image('/images/icon-circle-right.png'),
                '/products/headphones-earphones-gaming',
                ['escape' => false]
            );
            ?>
        </div>
    </div>
    <div class="content-wrapper">
        <div>
            <h1>Wireless Audio</h1>
        </div>
        <div class="bg-image blue">
            <?php
            echo $this->Html->image('/images/category/wireless-audio.png');
            echo $this->Html->link(
                $this->Html->image('/images/icon-circle-right.png'),
                '/products/wireless-audio',
                ['escape' => false]
            );
            ?>
        </div>
    </div>
    <div class="content-wrapper">
        <div>
            <h1>Accessories</h1>
        </div>
        <div class="bg-image orange">
            <?php
            echo $this->Html->image('/images/category/accessories.png');
            echo $this->Html->link(
                $this->Html->image('/images/icon-circle-right.png'),
                '/products/accessories',
                ['escape' => false]
            );
            ?>
        </div>
    </div>
</div>