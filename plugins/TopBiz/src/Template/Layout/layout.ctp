<!DOCTYPE html>
<html>
    <head>
        <title><?= $title_meta['title_web']; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?= $title_meta['description_meta']; ?>">
        <?php
        echo $this->Html->css([
            'TopBiz.bootstrap',
            'TopBiz.prettyPhoto',
            'TopBiz.rticons',
            'TopBiz.settings',
            'TopBiz.font-awesome.min',
            'TopBiz.js-image-slider',
            'TopBiz.preset',
            'TopBiz.style',
            'TopBiz.responsive',
            'TopBiz.animate',
        ]);
        $this->fetch('css');
        ?>
        <link rel="icon"  type="image/png" href="images/favicon.png">
        <!--[if lt IE 9]>
        <?php
        echo $this->Html->script('TopBiz.html5shiv');
        ?>
        <![endif]-->
    </head>
    <body>        
        <div class="boxWrapper">
            <?php
            echo $this->Element('menu');
            echo $this->fetch('content');
            echo $this->Element('footer');
            ?>
        </div>
        <a href="#" id="backto"><?php echo $this->Html->image('/images/backto.png') ?></a>
        <?php
        echo $this->Html->script([
            'TopBiz.jquery',
            'TopBiz.bootstrap',
            'TopBiz.jquery.prettyPhoto',
            'TopBiz.mixer',
            'TopBiz.appear',
            'TopBiz.circle-progress',
            'TopBiz.modernizr.custom',
            'TopBiz.directionHover',
            'TopBiz.js-image-slider',
            'TopBiz.wow.min',
            'https://maps.googleapis.com/maps/api/js',
            'TopBiz.gmaps',
            'TopBiz.jquery.themepunch.revolution.min',
            'TopBiz.jquery.themepunch.tools.min',
            'TopBiz.theme'
        ]);
        ?>
    </body>
</html>
