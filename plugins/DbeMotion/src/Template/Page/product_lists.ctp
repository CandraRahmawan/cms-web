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
        <div class="card-list">
            <a href="<?= $this->Utility->buildUrl('/products/' . $this->request->params['category'] . '/123-dbe-pr400'); ?>">
              <?php
              echo $this->Html->image('/images/card/card_1.jpg');
              echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
              ?>
            </a>
            <div class="detail-info">
                <h2>dbE PR100</h2>
                <span class="description">Earphone with Microphone</span>
                <span class="price">Rp. 100.000</span>
            </div>
        </div>
        <div class="card-list">
            <a href="<?= $this->Utility->buildUrl('/products/' . $this->request->params['category'] . '/123-dbe-pr400'); ?>">
              <?php
              echo $this->Html->image('/images/card/card_2.jpg');
              echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
              ?>
            </a>
            <div class="detail-info">
                <h2>dbE PR100</h2>
                <span class="description">Earphone with Microphone</span>
                <span class="price">Rp. 100.000</span>
            </div>
        </div>
        <div class="card-list">
            <a href="<?= $this->Utility->buildUrl('/products/' . $this->request->params['category'] . '/123-dbe-hardcase'); ?>">
              <?php
              echo $this->Html->image('/images/card/card_4.jpg');
              echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
              ?>
            </a>
            <div class="detail-info">
                <h2>dbE Hardcase</h2>
                <span class="description">EVA Hardcase for Earphone / Headphone Protection</span>
                <span class="price">Rp. 40.000 - 150.000</span>
            </div>
        </div>
        <div class="card-list">
            <a href="<?= $this->Utility->buildUrl('/products/' . $this->request->params['category'] . '/123-dbe-pr400'); ?>">
              <?php
              echo $this->Html->image('/images/card/card_1.jpg');
              echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
              ?>
            </a>
            <div class="detail-info">
                <h2>dbE PR400</h2>
                <span class="description">Hifi Triple Driver In Ear Earphone</span>
                <span class="price">Rp. 450.000</span>
            </div>
        </div>
        <div class="card-list">
            <a href="<?= $this->Utility->buildUrl('/products/' . $this->request->params['category'] . '/123-dbe-comfit-eartips'); ?>">
              <?php
              echo $this->Html->image('/images/card/card_3.jpg');
              echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
              ?>
            </a>
            <div class="detail-info">
                <h2>dbE Comfit Eartips</h2>
                <span class="description">High Quality Silicon Eartips</span>
                <span class="price">Rp. 35.000</span>
            </div>
        </div>
        <div class="card-list">
            <a href="<?= $this->Utility->buildUrl('/products/' . $this->request->params['category'] . '/123-dbe-pr400'); ?>">
              <?php
              echo $this->Html->image('/images/card/card_2.jpg');
              echo $this->Html->image('/images/arrow-srp.png', ['class' => 'arrow']);
              ?>
            </a>
            <div class="detail-info">
                <h2>dbE PR400</h2>
                <span class="description">Hifi Triple Driver In Ear Earphone</span>
                <span class="price">Rp. 450.000</span>
            </div>
        </div>
    </div>
</div>