<div class="product-list-wrapper">
    <div class="top-content">
      <?php
      echo $this->Element('scroll_text_absolute');
      echo $this->Html->image('/images/featured_img.jpg');
      ?>
        <div class="content-info-wrapper">
            <div class="title-wrapper">
                <h1>Product</h1>
                <div class="subtitle-wrapper">
                    <div>
                        <h3>
                            Headphones / Earphones Wired
                        </h3>
                    </div>
                    <div>
                      <?= $this->Html->link(
                        '<span uk-icon="icon: chevron-left; ratio:1.8" />',
                        '/products',
                        ['escape' => false]
                      ); ?>
                    </div>
                </div>
            </div>
            <div class="content-color" style="background-color: #AED8D5">
                <div class="content-wrapper">
                    <div class="left-content">
                        dbE PR300 Dual Driver In Ear Earphone has 2
                        dynamic driver in each side, with 8mm driver as
                        the first and 6mm driver as the second
                    </div>
                    <div class="right-content">
                        <h2>
                            dbE PR300
                        </h2>
                        <span>Dual Driver In Ear Earphone</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-list-wrapper">
      <?php
      if (sizeof($product) > 0) {
        foreach ($product as $item) {
          echo '<div class="card-list">';
          echo '<a href="' . $this->Utility->buildUrl('/products/' . $this->request->params['category'] . DS . $this->Utility->slugText($item['unique_id'] . ' ' . $item['name'])) . '">';
          echo $this->Html->image('/images/card/card_1.jpg');
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