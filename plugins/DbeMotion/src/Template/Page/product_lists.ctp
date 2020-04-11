<div class="product-list-wrapper">
    <div class="top-content <?= $featuredSize > 0 ? '' : 'no-featured'; ?>">
      <?= $this->Element('scroll_text_absolute'); ?>
        <img data-src="<?= $featured['img_url']; ?>" uk-img/>
        <div class="content-info-wrapper">
            <div class="title-wrapper">
                <h1>Product</h1>
                <div class="subtitle-wrapper">
                    <div>
                      <?= $this->Html->tag('h3', $category['name']); ?>
                    </div>
                    <div>
                      <?= $this->Html->link(
                        '<span uk-icon="icon: chevron-left; ratio:1.8" />',
                        '/products/',
                        ['escape' => false]
                      ); ?>
                    </div>
                </div>
            </div>
          <?php
          if ($featuredSize > 0):
            ?>
              <div class="content-color" style="background-color: <?= $featured['bg_color']; ?>">
                  <div class="content-wrapper">
                      <div class="left-content">
                        <?= $featured['description']; ?>
                      </div>
                      <div class="right-content">
                        <?php
                        echo $this->Html->tag('h2', $featured['title']);
                        echo $this->Html->tag('span', $featured['subtitle']);
                        ?>
                      </div>
                  </div>
              </div>
          <?php
          endif;
          ?>
        </div>
    </div>
    <div class="card-list-wrapper">
      <?php
      if (sizeof($product) > 0) {
        foreach ($product as $item) {
          $extract_img = !empty($item['img_path']) ? json_decode($item['img_path']) : [];
          $img_url = '';
          foreach ($extract_img as $subItem) {
            $img_url = $subItem;
            break;
          }
          echo '<div class="card-list">';
          echo '<a href="' . $this->Utility->buildUrl('/products/' . $this->request->params['category'] . DS . $this->Utility->slugText($item['unique_id'] . ' ' . $item['name'])) . '">';
          echo '<img data-src="' . $full_base_admin_url . $img_url . '" uk-img/>';
          echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
          echo '</a>';
          echo '<div class="detail-info">';
          echo $this->Html->tag('h2', $item['name']);
          echo '<span class="description">' . $item['subtitle'] . '</span>';
          echo '<span class="price">' . $item['prefix_currency'] . ' ' . $item['price'] . '</span>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo $this->Html->tag('span', 'Product not found', ['class' => 'not-found-content']);
      }
      echo '<ul class="uk-pagination uk-flex-center" uk-margin>';
      if ($this->Paginator->numbers()) {
        echo $this->Paginator->first('<<');
        echo $this->Paginator->prev('<');
        echo $this->Paginator->numbers();
        echo $this->Paginator->next('>');
        echo $this->Paginator->last('>>');
      }
      echo '</ul>';
      ?>
    </div>
</div>