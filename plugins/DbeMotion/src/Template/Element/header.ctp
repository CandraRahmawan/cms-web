<?php
$headerClassName = isset($is_homepage) ? 'homepage' : 'page';
?>
<header class="<?= $headerClassName; ?>">
    <div class="logo">
        <a href="<?= $this->Utility->buildUrl('/'); ?>">
            <?= $headerClassName == 'homepage' ? $this->Html->image('/images/logo_white.png') : $this->Html->image('/images/logo.png'); ?>
        </a>
    </div>
    <div class="burger-menu">
        <a href="#menu-show" uk-toggle><span uk-icon="icon: menu; ratio: 2"></span></a>
    </div>
    <?= $this->Element('menu_fullbar'); ?>
</header>