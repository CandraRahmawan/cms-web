<?php
$html = $this->Html;
?>
<div class="content-wrapper">
    <?php
    echo $this->Element('image_carousel');
    echo $this->Html->tag('div', $this->Element('section_1'), ['class' => 'uk-background-muted line-top']);
    ?>
    <div class="homepage-content-wrapper">
        <?= $this->Html->tag('h2', 'Kelebihan Service AC di Maju Teknik'); ?>
        <div class="line-divider">
            <hr class="uk-divider-small">
            <hr class="blue-divider">
        </div>
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
            <div class="card-wrapper">
                <div class="uk-card uk-card-default uk-card-body">
                    <span uk-icon="icon: check; ratio: 3.5"></span>
                    <h4 class="uk-card-title uk-text-center ellipsis">Terpercaya</h4>
                    <p class="uk-text-center">Teknisi yang handal dan terpercaya.</p>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="uk-card uk-card-default uk-card-body">
                    <span uk-icon="icon: tag; ratio: 3.5"></span>
                    <h4 class="uk-card-title uk-text-center ellipsis">Harga Terjangkau</h4>
                    <p class="uk-text-center">Harga bersaing disesuaikan dengan kantong Anda.</p>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="uk-card uk-card-default uk-card-body">
                    <span uk-icon="icon: happy; ratio: 3.5"></span>
                    <h4 class="uk-card-title uk-text-center ellipsis">Kemudahan</h4>
                    <p class="uk-text-center">Komunikasi langsung lewat Telp atau Whatsapp serta email.</p>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="uk-card uk-card-default uk-card-body">
                    <span uk-icon="icon: star; ratio: 3.5"></span>
                    <h4 class="uk-card-title uk-text-center ellipsis">Jaminan Garansi</h4>
                    <p class="uk-text-center">Garansi dijamin beres dan berfungsi dengan baik.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-background-muted">
        <?= $this->Element('plugin_service_page'); ?>
    </div>
    <div>
        <?= $this->Element('plugin_area_coverage'); ?>
    </div>
</div>
