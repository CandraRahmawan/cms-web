<?php
$html = $this->Html;
?>
<div class="content-wrapper">
    <?php
    echo $this->Element('image_carousel');
    echo $this->Html->tag('div', $this->Element('section_1'), ['class' => 'uk-background-muted line-top']);
    echo $this->Element('plugin_why_choose_us');
    ?>
    <div class="uk-background-muted">
        <?= $this->Element('plugin_service_page'); ?>
    </div>
    <div>
        <?= $this->Element('plugin_area_coverage'); ?>
    </div>
</div>
