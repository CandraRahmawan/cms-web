<?php if (!empty($plugin_area_coverage)): ?>
    <div class="homepage-content-wrapper">
        <?= $this->Html->tag('h2', 'Jangkauan Area Kami'); ?>
        <div class="line-divider">
            <hr class="uk-divider-small">
            <hr class="blue-divider">
        </div>
        <div class="switcher-area">
            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <?php
                foreach ($plugin_area_coverage as $key => $item) {
                    echo '<li><a href="#" class="uk-text-capitalize">' . $item['detail']['value_1'] . '</a></li>';
                }
                ?>
            </ul>
            <hr class="desktop uk-divider-icon">
            <ul class="uk-switcher uk-margin">
                <?php
                foreach ($plugin_area_coverage as $key => $item) {
                    echo '<li>';
                    echo '<table class="desktop uk-table uk-table-striped">';
                    echo '<tbody>';
                    $index = 1;
                    foreach (json_decode($item['detail']['value_2']) as $subkey => $subitems) {
                        if ($index == 1) {
                            echo '<tr>';
                        }
                        echo '<td>' . $subitems . '</td>';
                        $index++;
                        if ($index > 7) {
                            echo '</tr>';
                            $index = 1;
                        }
                    }
                    echo '</tbody>';
                    echo '</table>';
                    echo '<table class="mobile uk-table uk-table-striped">';
                    echo '<tbody>';
                    $index = 1;
                    foreach (json_decode($item['detail']['value_2']) as $subkey => $subitems) {
                        if ($index == 1) {
                            echo '<tr>';
                        }
                        echo '<td>' . $subitems . '</td>';
                        $index++;
                        if ($index > 3) {
                            echo '</tr>';
                            $index = 1;
                        }
                    }
                    echo '</tbody>';
                    echo '</table>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
