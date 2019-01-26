<?php
$html = $this->Html;
?>
<div class="content-wrapper">
    <?= $this->Element('image_carousel'); ?>
    <div class="uk-background-muted line-top">
        <div class="homepage-content-wrapper">
            <?= $this->Html->tag('h2', 'Selamat datang di website Maju Teknik', ['class' => 'uk-text-center']); ?>
            <hr class="desktop uk-divider-icon">
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
        <?= $this->Element('area_coverage'); ?>
    </div>
</div>
