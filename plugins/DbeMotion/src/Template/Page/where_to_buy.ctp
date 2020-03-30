<div class="where-to-buy-wrapper">
  <?= $this->Element('scroll_text_absolute'); ?>
    <h1>Where To Buy</h1>
    <div class="image-ecommerce">
      <?php
      foreach ($content as $item) {
        echo $this->Html->link(
          '<img data-src="' . $item['detail']['value_2'] . '" uk-img/>',
          $item['detail']['value_1'],
          ['escape' => false, 'target' => '_blank']
        );
      }
      ?>
    </div>
    <h2>
        PROVIDER STORE
    </h2>
    <div class="provider-store">
        <div class="column-1">
            <div class="store-list-wrapper">
                <h3>Bandung</h3>
                <div class="store-list">
                    <h5>Clover Gaming</h5>
                    <span>BEC 2 Lantai 1 Blok W07</span>
                    <span>0877 7729 1249</span>
                </div>
                <div class="store-list">
                    <h5>Bass Audio BEC</h5>
                    <span>Istana Bandung Electronic Center, UG T-1</span>
                    <span>(022) 86012743</span>
                </div>
                <div class="store-list">
                    <h5>Pondok CD</h5>
                    <span>BEC, Lantai 1, Blok C05</span>
                    <span>(022) 4222953</span>
                </div>
                <div class="store-list">
                    <h5>Warung Gadget</h5>
                    <span>Istana Bandung Electronic Centre Lantai 2 Blok. F1</span>
                    <span>(022) 4222953</span>
                </div>
                <div class="store-list">
                    <h5>Sinfonia Music School</h5>
                    <span>Jl. Lembah Sarimadu Bar. No.7, Sukawarna, Kec. Sukajadi, Kota Bandung, Jawa Barat 40163</span>
                    <span>(022) 2018440</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Jakarta</h3>
                <div class="store-list">
                    <h5>Good Gaming Shop</h5>
                    <span>Mangga Dua Mall Lt 2 No 2A, Jl Alteri, Mangga Dua Raya,RT.11/RW.5, Ancol, Pademangan, North Jakarta City, Jakarta 14430</span>
                    <span>(021) 62302218 / 0817 805 665</span>
                </div>
                <div class="store-list">
                    <h5>Quantech</h5>
                    <span>Ratu Plaza Lantai 3 Nomor 19. Jalan Jend. Sudirman kav. 9</span>
                    <span>021-5724789</span>
                </div>
                <div class="store-list">
                    <h5>Bass Audio Gading</h5>
                    <span>Mall Artha Gading 1st Floor, A2 – 38 Jl. Arta Gading Selatan Jakarta Utara – 14240</span>
                    <span>021-22454219</span>
                </div>
            </div>
        </div>
        <div class="column-2">
            <div class="store-list-wrapper">
                <h3>Bekasi</h3>
                <div class="store-list">
                    <h5>Gamer Loka</h5>
                    <span>Grand Galaxy City Jl. Bulevard Raya Timur RSN3 No 18 Bekasi</span>
                    <span>0877-8812-0888</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Surabaya</h3>
                <div class="store-list">
                    <h5>iGamerWorld</h5>
                    <span>Jl. Klampis Aji I No. 19, Klampis, Ngasem, Kec. Sukolilo, Kota Surabaya, Jawa Timur 60117</span>
                    <span>0878-5341-6234</span>
                </div>
                <div class="store-list">
                    <h5>Win Computer</h5>
                    <span>ITC Surabaya Mega Grosir Lantai 2 Blok K3A no 3, Jl. Gembong No.20-30, Jawa Timur 60141</span>
                    <span>(031)37301771 / 081703684339</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Bali</h3>
                <div class="store-list">
                    <h5>PC Gamer</h5>
                    <span>Jl. Gunung Batukaru No 42 Denpasar Barat</span>
                    <span>0815-2912-4202</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Yogyakarta</h3>
                <div class="store-list">
                    <h5>PT. Wisno Grahakom</h5>
                    <span>Jl. Pangeran Diponegoro No.62, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233</span>
                    <span>(0274) 580620</span>
                </div>
                <div class="store-list">
                    <h5>Star Comp</h5>
                    <span>Jl. Nusa Indah Candi Gebang, Dero, Depok, Sleman RT05 / RW 12 No.240, YOGYAKARTA  55283</span>
                    <span>(0274) 28030309 / 0811-2951-900</span>
                </div>
            </div>
        </div>
        <div class="column-3">
            <div class="store-list-wrapper">
                <h3>Papua</h3>
                <div class="store-list">
                    <h5>Emond Store</h5>
                    <span>Jl. Jend. Sudirman, Padarni, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312</span>
                    <span>0813-4333-3333</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Samarinda</h3>
                <div class="store-list">
                    <h5>Masterpiece Comp</h5>
                    <span>C11 Kompleks mahakam square Jl. Untung Surapati Karang Asam Ulu Kunjang River Samarinda Kelet-Borneó 75126 ID</span>
                    <span>Jl. Untung Suropati, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243</span>
                    <span>(0541) 272420</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Semarang</h3>
                <div class="store-list">
                    <h5>Dext Technologies</h5>
                    <span>Jl. Karang Anyar No.13, Brumbungan, Semarang Tengah, Kota Semarang, Jawa Tengah 50135</span>
                    <span>0856 4161 1980</span>
                </div>
            </div>
            <div class="store-list-wrapper hide-mobile">
                <h3>Makassar</h3>
                <div class="store-list">
                    <h5>IR Computer</h5>
                    <span>Jl. Maccini Raya Ruko PIM No 3A Makassar, Ruko PIM, Karuwisi, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231</span>
                    <span>0812 4279 5777</span>
                </div>
            </div>
            <div class="store-list-wrapper hide-mobile">
                <h3>Malang</h3>
                <div class="store-list">
                    <h5>Keewee Shop</h5>
                    <span>Jl. Simpang Borobudur no.41 E. Malang</span>
                    <span>62341479655</span>
                </div>
            </div>
        </div>
        <div class="column-4 show-mobile">
            <div class="store-list-wrapper">
                <h3>Makassar</h3>
                <div class="store-list">
                    <h5>IR Computer</h5>
                    <span>Jl. Maccini Raya Ruko PIM No 3A Makassar, Ruko PIM, Karuwisi, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231</span>
                    <span>0812 4279 5777</span>
                </div>
            </div>
            <div class="store-list-wrapper">
                <h3>Malang</h3>
                <div class="store-list">
                    <h5>Keewee Shop</h5>
                    <span>Jl. Simpang Borobudur no.41 E. Malang</span>
                    <span>62341479655</span>
                </div>
            </div>
        </div>
    </div>
</div>