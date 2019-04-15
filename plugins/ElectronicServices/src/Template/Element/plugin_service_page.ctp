<div class="homepage-content-wrapper">
    <?= $this->Html->tag('h2', 'Service Kami'); ?>
    <div class="line-divider">
        <hr class="uk-divider-small">
        <hr class="blue-divider">
    </div>
    <div class="uk-child-width-1-2@s" uk-grid>
        <?php
        foreach ($plugin_service_page as $key => $item) {
            $item = $item['detail'];
            echo '<div>';
            echo '<div class="uk-card-primary uk-padding">';
            echo '<h3 class="white">' . $item['value_1'] . '</h3>';
            echo '<p class="ellipsis white">' . $item['value_2'] . '</p>';
            echo '<a href="' . $this->Utility->buildUrl('/service-kami') . '" class="uk-button uk-button-default white">Selengkapnya...</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
