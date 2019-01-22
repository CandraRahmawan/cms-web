<?php
$html = $this->Html;
?>
<div class="content-wrapper">
    <div class="carousel-image-wrapper">
        <div id="image-carousel" class="uk-visible-toggle uk-light" tabindex="-1"
             uk-slideshow="autoplay: true;max-height: 400;min-height: 400;">
            <ul class="uk-slideshow-items">
                <li>
                    <img data-src="http://dottoroac.co.id/wp-content/uploads/2017/03/slide-service-ac.jpg" uk-cover
                         uk-img="target: !ul > :last-child, !* +*">
                </li>
                <li>
                    <img data-src="https://acsofts.com/wp-content/uploads/2018/08/service-AC-sidoarjo-2-1024x576.jpg"
                         uk-cover uk-img="target: !* -*, !* +*">
                </li>
            </ul>
            <a class="uk-position-center-left uk-hidden-hover arrow-img-carousel" href="#" uk-slidenav-previous
               uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-hidden-hover arrow-img-carousel" href="#" uk-slidenav-next
               uk-slideshow-item="next"></a>
        </div>
    </div>
    <div class="uk-background-muted line-top">
        <div class="homepage-content-wrapper">
            <?= $this->Html->tag('h2', 'Selamat datang di website Maju Teknik', ['class' => 'uk-text-center']); ?>
            <hr class="uk-divider-icon">
            <?= $this->Html->tag('p', 'Maju Teknik adalah sebuah perusahaan jasa service dan perbaikan AC, telah berpengalaman menangani berbagai layanan service AC mulai dari pengadaan, pemasangan, dan tentunya berbagai layanan perbaikan dan perawatan rutin yang dibutuhkan AC Anda.'); ?>
            <p>Didukung oleh tim teknisi handal, ramah dan terpercaya di seluruh wilayah Jakarta dan sekitarnya, kami berpengalaman memberikan berbagai pelayanan service AC mulai dari perumahan, apartment, sampai perkantoran, pabrik dan industri.</p>
            <p>Selain itu juga bisa melakukan service dan perbaikan Kulkas, Mesin Cuci dan Alat Elektronik lainnya.</p>
        </div>
    </div>
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
        <div class="homepage-content-wrapper">
            <?= $html->tag('h2', 'Service Kami'); ?>
            <div class="line-divider">
                <hr class="uk-divider-small">
                <hr class="blue-divider">
            </div>
            <div class="uk-child-width-1-2@s" uk-grid>
                <div>
                    <div class="uk-card-primary uk-padding">
                        <h3 class="white">Service Cuci AC</h3>
                        <p class="ellipsis white">Pencucian AC, baik untuk bagian indoor maupun outdoor AC, perlu
                            dilakukan agar AC Anda bebas debu. Debu yang menumpuk akan mengakibatkan berkurangnya
                            kesejukan AC, juga mengotori udara di ruangan. Pastikan Anda melakukan service cuci AC
                            setiap 3-4 bulan sekali.</p>
                        <button class="uk-button uk-button-default white">Selengkapnya...</button>
                    </div>
                </div>
                <div>
                    <div class="uk-card-primary uk-padding">
                        <h3 class="white">Penambahan Freon</h3>
                        <p class="ellipsis white">Freon adalah salah satu komponen terpenting dalam AC. Salah satu tanda
                            bahwa freon harus ditambahkan adalah ketika AC Anda tidak lagi terasa dingin. Lakukan
                            penambahan freon setidaknya setahun sekali.</p>
                        <button class="uk-button uk-button-default white">Selengkapnya...</button>
                    </div>
                </div>
                <div>
                    <div class="uk-card-primary uk-padding">
                        <h3 class="white">Pengisian Freon</h3>
                        <p class="ellipsis white">Jika AC Anda perlu ditambahi freon setiap tiga bulan sekali, maka
                            besar
                            kemungkinan telah terjadi kebocoran di AC Anda. Maka, yang Anda perlukan bukan hanya
                            menambah kadar freon, tetapi mengisi ulang freon di AC Anda.</p>
                        <button class="uk-button uk-button-default white">Selengkapnya...</button>
                    </div>
                </div>
                <div>
                    <div class="uk-card-primary uk-padding">
                        <h3 class="white">Pemasangan AC</h3>
                        <p class="ellipsis white">Pemasangan AC memerlukan keahlian khusus untuk memastikan bahwa tempat
                            pemasangan telah sesuai untuk menjaga AC tetap awet.</p>
                        <button class="uk-button uk-button-default white">Selengkapnya...</button>
                    </div>
                </div>
                <div>
                    <div class="uk-card-primary uk-padding">
                        <h3 class="white">Pengecekan AC</h3>
                        <p class="ellipsis white">Teknisi kami bisa melakukan pengecekan untuk memastikan apakah AC Anda
                            berfungsi dengan
                            seharusnya dan apakah kadar suhu di ruangan ketika AC dinyalakan sesuai dengan
                            seharusnya.</p>
                        <button class="uk-button uk-button-default white">Selengkapnya...</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="homepage-content-wrapper">
            <?= $html->tag('h2', 'Jangkauan Area Kami'); ?>
            <div class="line-divider">
                <hr class="uk-divider-small">
                <hr class="blue-divider">
            </div>
            <div class="switcher-area">
                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                    <li><a href="#" class="uk-text-capitalize">Jakarta Utara</a></li>
                    <li><a href="#" class="uk-text-capitalize">Jakarta Pusat</a></li>
                    <li><a href="#" class="uk-text-capitalize">Jakarta Timur</a></li>
                    <li><a href="#" class="uk-text-capitalize">Jakarta Barat</a></li>
                    <li><a href="#" class="uk-text-capitalize">Bekasi Utara</a></li>
                    <li><a href="#" class="uk-text-capitalize">Bekasi Barat</a></li>
                    <li><a href="#" class="uk-text-capitalize">Bekasi Timur</a></li>
                    <li><a href="#" class="uk-text-capitalize">Bekasi Selatan</a></li>
                </ul>
                <hr class="uk-divider-icon">
                <ul class="uk-switcher uk-margin">
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Cilincing</td>
                                <td>Kali Baru</td>
                                <td>Marunda</td>
                                <td>Rorotan</td>
                                <td>Semper Barat</td>
                                <td>Semper Timur</td>
                                <td>Sukapura</td>
                            </tr>
                            <tr>
                                <td>Pegangsaan Dua</td>
                                <td>Koja</td>
                                <td>Pademangan</td>
                                <td>Ancol</td>
                                <td>Penjaringan</td>
                                <td>Kamal Muara</td>
                                <td>Kapuk Muara</td>
                            </tr>
                            <tr>
                                <td>Pejagalan</td>
                                <td>Penjaringan</td>
                                <td>Pluit</td>
                                <td>Tanjung Priok</td>
                                <td>Sunter</td>
                                <td>Kebun Bawang</td>
                                <td>Warakas</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Cempaka Putih</td>
                                <td>Rawa Sari</td>
                                <td>Cideng</td>
                                <td>Jahar Baru</td>
                                <td>Galur</td>
                                <td>Tanah Tinggi</td>
                                <td>Kemayoran</td>
                            </tr>
                            <tr>
                                <td>Harapan Mulya</td>
                                <td>Kebon Kosong</td>
                                <td>Cempaka Baru</td>
                                <td>Menteng</td>
                                <td>Cikini</td>
                                <td>Gondangdia</td>
                                <td>Kebon Sirih</td>
                            </tr>
                            <tr>
                                <td>Pegangsaan</td>
                                <td>Sawah Besar</td>
                                <td>Kartini</td>
                                <td>Mangga dua Selatan</td>
                                <td>Pasar Baru</td>
                                <td>Senen</td>
                                <td>Bunggur</td>
                            </tr>
                            <tr>
                                <td>Kramat</td>
                                <td>Kwitang</td>
                                <td>Paseban</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Cakung</td>
                                <td>Kp. Lio</td>
                                <td>Penggilingan</td>
                                <td>Pulo Gadung</td>
                                <td>Cipinang</td>
                                <td>Kayu Putuh</td>
                                <td>Pisangan</td>
                            </tr>
                            <tr>
                                <td>Rawa Mangun</td>
                                <td>Duren Sawit</td>
                                <td>Klender</td>
                                <td>Malaka</td>
                                <td>Pondok Bambu</td>
                                <td>Pondok Kelapa</td>
                                <td>Pondok Kopi</td>
                            </tr>
                            <tr>
                                <td>Matraman</td>
                                <td>Kayu Manis</td>
                                <td>Kebon Manggis</td>
                                <td>Pal Maria</td>
                                <td>Jatinegara</td>
                                <td>Bali Mester</td>
                                <td>Cipinang Besar Selatan</td>
                            </tr>
                            <tr>
                                <td>Cipinang Besar Utara</td>
                                <td>Cipinang Cempedak</td>
                                <td>Kampung Melayu</td>
                                <td>Rawa Bunga</td>
                                <td>Kramat Jati</td>
                                <td>Cililitan</td>
                                <td>Cawang</td>
                            </tr>
                            <tr>
                                <td>Dukuh</td>
                                <td>Belakambang</td>
                                <td>Batu Ampar</td>
                                <td>Makasar</td>
                                <td>Cipinang Melayu</td>
                                <td>Kebon Pala</td>
                                <td>Pinang Ranti</td>
                            </tr>
                            <tr>
                                <td>Halim</td>
                                <td>Ciracas</td>
                                <td>Cibubur</td>
                                <td>Rambutan</td>
                                <td>Pasar Rebo</td>
                                <td>Cijantung</td>
                                <td>Gedong</td>
                            </tr>
                            <tr>
                                <td>Kalisari</td>
                                <td>Pekayon</td>
                                <td>Cipayung</td>
                                <td>Bambu Apus</td>
                                <td>Ceger</td>
                                <td>Cilangkap</td>
                                <td>Lubang Buaya</td>
                            </tr>
                            <tr>
                                <td>Pondok Rangon</td>
                                <td>Setu</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Cengkareng</td>
                                <td>Duri Kosambi</td>
                                <td>Kapuk</td>
                                <td>Kedaung Kali Angke</td>
                                <td>Rawa Buaya</td>
                                <td>Grogol</td>
                                <td>Tanjung Duren Selatan</td>
                            </tr>
                            <tr>
                                <td>Tomang</td>
                                <td>Wijaya Kusuma</td>
                                <td>Kalideres</td>
                                <td>Kamal</td>
                                <td>Pegadungan</td>
                                <td>Semanan</td>
                                <td>Kebon Jeruk</td>
                            </tr>
                            <tr>
                                <td>Duri Kelapa</td>
                                <td>Kedoya</td>
                                <td>Kelapa Dua</td>
                                <td>Kembangan</td>
                                <td>Joglo</td>
                                <td>Meruya</td>
                                <td>Srengseng</td>
                            </tr>
                            <tr>
                                <td>Palmerah</td>
                                <td>Kemanggisan</td>
                                <td>Slipi</td>
                                <td>Taman Sari</td>
                                <td>Mangga Besar</td>
                                <td>Krukut</td>
                                <td>Tambora</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Harapan Baru</td>
                                <td>Harapan Jaya</td>
                                <td>Kaliabang Tengah</td>
                                <td>Jatiasih</td>
                                <td>Jatikramat</td>
                                <td>Jatiluhur</td>
                                <td>Jatimekar</td>
                            </tr>
                            <tr>
                                <td>Jatirasa</td>
                                <td>Jatisari</td>
                                <td>Jatisampurna</td>
                                <td>Jatikarya</td>
                                <td>Jatiraden</td>
                                <td>Jatirangga</td>
                                <td>Jatiranggon</td>
                            </tr>
                            <tr>
                                <td>Harapan Mulya</td>
                                <td>Kalibaru</td>
                                <td>Medan Satria</td>
                                <td>Pejuang</td>
                                <td>Jatibening</td>
                                <td>Jaticempaka</td>
                                <td>Jatimakmur</td>
                            </tr>
                            <tr>
                                <td>Jatiwaringin</td>
                                <td>Jatimelati</td>
                                <td>Jatimurni</td>
                                <td>Jatirahayu</td>
                                <td>Jatiwarna</td>
                                <td>Bojong Menteng</td>
                                <td>Rawalumbu</td>
                            </tr>
                            <tr>
                                <td>Pengasinan</td>
                                <td>Sepanjang Jaya</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Bintara</td>
                                <td>Jakasampurna</td>
                                <td>Kranji</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Aren Jaya</td>
                                <td>Bekasi Jaya</td>
                                <td>Margahayu</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-striped">
                            <tbody>
                            <tr>
                                <td>Jakamulya</td>
                                <td>Kayurangin Jaya</td>
                                <td>Pekayon</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
