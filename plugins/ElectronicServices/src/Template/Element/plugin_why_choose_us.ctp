<?php if (!empty($plugin_why_choose_us)): ?>
    <div class="homepage-content-wrapper">
        <?= $this->Html->tag('h2', $settings['why_choose_us_title']); ?>
        <div class="line-divider">
            <hr class="uk-divider-small">
            <hr class="blue-divider">
        </div>
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
            <?php
            foreach ($plugin_why_choose_us as $key => $item) {
                $item = $item['detail'];
                echo '<div class="card-wrapper">';
                echo '<div class="uk-card uk-card-default uk-card-body" style="text-align:center;">';
                echo '<img src="' . $item['value_3'] . '" style="width:70px;height:70px;object-fit:contain;" />';
                echo '<h4 class="uk-card-title uk-text-center ellipsis" >' . $item['value_1'] . '</h4 >';
                echo '<p class="uk-text-center" >' . $item['value_2'] . '</p >';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
<?php endif; ?>