<?php
echo $this->Html->docType();
?>
<html>
<head>
    <?php
    echo $this->Html->charset();
    echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
    echo $this->Html->tag('title', $seo['meta_title']);
    echo $this->Html->meta('description', $seo['meta_description']);
    echo $this->Html->meta(['rel' => 'canonical', 'link' => $this->Utility->buildFullUrl($this->request->here)]);
    echo $this->Html->meta(['property' => 'og:type', 'content' => 'website']);
    echo $this->Html->meta(['property' => 'og:title', 'content' => $seo['meta_title']]);
    echo $this->Html->meta(['property' => 'og:description', 'content' => $seo['meta_description']]);
    echo $this->Html->meta(['property' => 'og:url', 'content' => $this->Utility->buildFullUrl($this->request->here)]);
    echo $this->Html->meta(['property' => 'og:site_name', 'content' => $settings['company_title']]);
    echo '<meta name="google-site-verification" content="Kc4ZjRsxpVhsEscBm1x8RoCwM50FuG9c68hb6okuAQc" />';
    //echo $this->Html->meta(['property' => 'og:image', 'content' => '']);
    echo $this->Element('favicon');
    echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css');
    if ($this->Utility->isDevelopment()) {
        echo $this->Html->css('/ElectronicServices/css/styles-dev.css?' . time() . '', ['plugin' => false]);
        echo $this->Html->css('/ElectronicServices/css/mobile.css?' . time() . '', ['plugin' => false]);
        echo $this->Html->css('/ElectronicServices/css/tablet.css?' . time() . '', ['plugin' => false]);
        echo $this->Html->css('/ElectronicServices/css/desktop.css?' . time() . '', ['plugin' => false]);
    } else {
        echo $this->Html->css('styles');
    }
    ?>
</head>
<body onload="scrollFunction()">
<div class="container">
    <?php
    echo $this->Element('header');
    echo $this->fetch('content');
    echo $this->Element('footer');
    echo $this->Html->tag('div', '<a href="#" uk-totop uk-scroll></a>', ['class' => 'scroll-top uk-border-circle', 'id' => 'scroll-top'])
    ?>
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
