<div class="content-wrapper">
    <?php
    foreach ($service as $key => $item) {
        $item = $item['detail'];
        if ($key % 2 === 0) {
            echo '<div class="uk-background-muted">';
            echo '<div class="service-wrapper left">';
            echo '<div class="service-content">';
            echo '<h3>' . $item['value_1'] . '</h3>';
            echo '<hr class="uk-divider-small">';
            echo '<p>' . $item['value_2'] . '</p>';
            echo '</div>';
            echo '<div class="service-image">';
            echo '<img src="' . $item['value_3'] . '"/>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="uk-background-secondary">';
            echo '<div class="service-wrapper right">';
            echo '<div class="service-content">';
            echo '<h3>' . $item['value_1'] . '</h3>';
            echo '<hr class="uk-divider-small">';
            echo '<p>' . $item['value_2'] . '</p>';
            echo '</div>';
            echo '<div class="service-image">';
            echo '<img src="' . $item['value_3'] . '"/>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>
