<?php
$html = $this->Html;
echo $html->docType();
?>
<html>
<head>
    <?php
    echo $html->charset();
    echo $html->meta('viewport', 'width=device-width, initial-scale=1.0');
    echo $html->css('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css');
    echo $html->css('/ElectronicServices/css/styles.css?' . time() . '', ['plugin' => false]);
    echo $html->css('/ElectronicServices/css/desktop.css?' . time() . '', ['plugin' => false]);
    echo $html->css('/ElectronicServices/css/tablet.css?' . time() . '', ['plugin' => false]);
    //echo $html->css('styles');
    ?>
</head>
<body onload="scrollFunction()">
<div class="container">
    <?php
    echo $this->Element('header');
    echo $this->fetch('content');
    echo $this->Element('footer');
    echo $html->tag('div', '<a href="#" uk-totop uk-scroll></a>', ['class' => 'scroll-top uk-border-circle', 'id' => 'scroll-top'])
    ?>
</div>
<?php
echo $html->script('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit.min.js');
echo $html->script('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit-icons.min.js');
echo $html->script('app');
?>
</body>
</html>
