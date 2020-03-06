<?= $this->Html->docType(); ?>
<html>
<head>
    <?php
    echo $this->Html->charset();
    echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
    echo $this->Html->tag('title', '404 Page Not Found');
    echo $this->Html->meta('description', 'page not found');
    echo $this->Element('favicon');
    echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css');
    if ($this->Utility->isDevelopment()) {
        echo $this->Html->css('/DbeMotion/css/styles.css?' . time() . '', ['plugin' => false]);
    } else {
        echo $this->Html->css('styles.min');
    }
    ?>
</head>
<body class="not-found-page">
<div class="container">
    <?= $this->Element('header'); ?>
    <div class="not-found-wrapper">
        <div class="header-text">
            <p>SORRY, PAGE NOT FOUND...</p>
            <h1>404 ERROR</h1>
        </div>
    </div>
</div>
<div class="not-found-page-image-wrapper">
    <?= $this->Html->image('/images/404/left-img.png'); ?>
    <?= $this->Html->image('/images/404/right-img.png'); ?>
</div>
<div class="not-found-btn-home">
    <?= $this->Html->link(
        $this->Html->image('/images/404/btn-home.png'),
        '/',
        ['escape' => false]
    ); ?>
</div>
<?php
echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit.min.js');
echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit-icons.min.js');
if ($this->Utility->isDevelopment()) {
    echo $this->Html->script('app.js?' . time() . '', ['plugin' => false]);
} else {
    echo $this->Html->script('app.js');
}
?>
</body>
</html>
