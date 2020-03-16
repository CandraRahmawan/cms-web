<?php
echo $this->Html->docType();
if (!empty($content[0]['picture'])) {
    $og_image = $this->Utility->basePathImgArticle($path_url_admin, $content[0]['cat']['category_id']) . $content[0]['picture'];
} else {
    $og_image = isset($settings['image_logo']) ? $settings['image_logo'] : '';
}
$title = !empty($seo['meta_title']) ? $seo['meta_title'] : '';
$description = !empty($seo['meta_description']) ? $seo['meta_description'] : '';
?>
<html>
<head>
    <?php
    echo $this->Html->charset();
    echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
    echo $this->Html->tag('title', $title);
    echo $this->Html->meta('description', $description);
    echo $this->Html->meta(['rel' => 'canonical', 'link' => $this->Utility->buildFullUrl($this->request->here)]);
    echo $this->Html->meta(['property' => 'og:type', 'content' => 'website']);
    echo $this->Html->meta(['property' => 'og:title', 'content' => $title]);
    echo $this->Html->meta(['property' => 'og:description', 'content' => $description]);
    echo $this->Html->meta(['property' => 'og:url', 'content' => $this->Utility->buildFullUrl($this->request->here)]);
    echo $this->Html->meta(['property' => 'og:site_name', 'content' => isset($settings['company_title']) ? $settings['company_title'] : '']);
    echo $this->Html->meta(['name' => 'google-site-verification', 'content' => 'Kc4ZjRsxpVhsEscBm1x8RoCwM50FuG9c68hb6okuAQc']);
    echo $this->Html->meta(['property' => 'og:image', 'content' => $og_image]);
    echo $this->Element('favicon');
    echo $this->fetch('css');
    echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css');
    if ($this->Utility->isDevelopment()) {
        echo $this->Html->css('/DbeMotion/css/styles.css?' . time() . '', ['plugin' => false]);
    } else {
        echo $this->Html->css('styles.min');
    }
    ?>
</head>
<body>
<div class="container">
    <?php
    echo $this->Element('header');
    echo $this->fetch('content');
    echo $this->Element('footer');
    ?>
</div>
<script>
    const fullBaseAdminUrl = "<?= $full_base_admin_url; ?>";
    const captchaSecretKey = "<?= $settings['captcha_secret_key']; ?>";
    const captchaSiteKey = "<?= $settings['captcha_site_key']; ?>";
</script>
<?php
echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit.min.js');
echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit-icons.min.js');
echo $this->fetch('scriptBottom');
if ($this->Utility->isDevelopment()) {
    echo $this->Html->script('app.js?' . time() . '', ['plugin' => false]);
} else {
    echo $this->Html->script('app.js');
}
?>
</body>
</html>
