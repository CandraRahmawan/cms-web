<?php
$headerClassName = isset($is_homepage) ? 'homepage' : 'page';
?>
<header class="<?= $headerClassName; ?>">
    <div class="logo">
        <?= $headerClassName == 'homepage' ? $this->Html->image('/images/logo_white.png') : $this->Html->image('/images/logo.png'); ?>
    </div>
    <div class="burger-menu">
        <span uk-icon="icon: menu; ratio: 2"></span>
    </div>
</header>