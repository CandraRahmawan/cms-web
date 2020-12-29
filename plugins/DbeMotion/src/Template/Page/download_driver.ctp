<?php
echo $this->Html->script('/components/select2/js/select2', ['block' => 'scriptBottom']);
echo $this->Html->css('/components/select2/css/select2.min', ['block' => 'css']);
$link_download = json_decode($products['link_download']);
?>
<div class="driver-manual-wrapper">
    <div class="back-navigation">
      <?php
      echo $this->Html->link(
        '<span uk-icon="icon: chevron-left; ratio: 2"></span>' . '<span>Back to Product</span>',
        $this->Utility->buildUrl('/products'),
        ['escape' => false]
      );
      ?>
    </div>
    <div class="content-wrapper">
        <h2>DBE ACOUSTICS DRIVER AND SUPPORT</h2>
        <div class="filter-wrapper">
            <label for="product_select">
                <select class="product_select js-states form-control" id="product_select">
                  <?php
                  foreach (json_decode($content[0]['detail']['value_3']) as $key => $item) {
                    if (!empty($products['unique_id']) && $products['unique_id'] == $item->id) {
                      $selected = 'selected';
                    } else {
                      $selected = $key == 0 ? 'selected' : '';
                    }
                    echo '<option ' . $selected . ' value="' . $item->id . '">' . $item->name . '</option>';
                  }
                  ?>
                </select>
            </label>
            <input type="text" placeholder="Model name or Keyword"/>
            <button type="button" onclick="return downloadDriverSearch()">
                Search
            </button>
        </div>
        <div class="download-description">
            <button type="button" onclick="window.open('<?= $link_download->download; ?>')">
            DOWNLOAD NOW
            </button>
            <div class="info">
              <?= $content[0]['detail']['value_2'] ?>
            </div>
        </div>
      <?php
      if (!empty($link_download->others)):
        ?>
          <div class="manual-wrapper">
              <h2>
                  DBE MANUAL
              </h2>
              <div>
                  <ul uk-accordion>
                      <li>
                          <a class="uk-accordion-title" href="#"><?= $link_download->others[0]->title ?></a>
                          <div class="uk-accordion-content">
                            <?php
                            foreach ($link_download->others as $item) {
                              echo '<dt><a href="' . $item->link . '">' . $item->title . '</a></dt>';
                            }
                            ?>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      <?php endif; ?>
    </div>
</div>
