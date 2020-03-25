<header>
    <div class="logo">
        <a href="<?= $this->Utility->buildUrl('/'); ?>">
          <?= $this->Html->image('/images/logo.png'); ?>
        </a>
    </div>
    <div class="burger-menu">
        <a href="#menu-show" uk-toggle><span uk-icon="icon: menu; ratio: 2"></span></a>
    </div>
  <?= $this->Element('menu_fullbar'); ?>
</header>