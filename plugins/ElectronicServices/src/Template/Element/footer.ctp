<?php
$html = $this->Html;
?>
<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <?php
            echo $html->image('/images/logo.jpeg', ['class' => 'uk-border-circle']);
            echo $html->tag('h4', 'Maju Teknik');
            ?>
        </div>
        <div class="footer-address">
            <?php
            echo $html->tag('h4', 'Alamat');
            echo $html->tag('span', 'JL. Raya Bekasi KM 18 RT 003 RW 011 No 20 Kec. Cakung, Kel. Jatinegara');
            ?>
        </div>
        <div class="footer-contact">
            <?= $html->tag('h4', 'Kontak Kami'); ?>
            Telp / WA : 0858-5698-0387
            <br/>
            Email : <a href="mailto:service@maju-teknik.com">service@maju-teknik.com</a>
        </div>
        <div class="footer-blog">
            <?= $html->tag('h4', 'Artikel Lainnya'); ?>
            <div>
                <a href="">Service AC Jakarta Utara</a>
            </div>
            <div>
                <a href="">Service AC Bekasi</a>
            </div>
            <div>
                <a href="">Service AC Depok</a>
            </div>
            <div>
                <a href="">Service AC Jakarta Selatan</a>
            </div>
            <div>
                <a href="">Service AC Jakarta Timur</a>
            </div>
        </div>
    </div>
    <div class="copyright">
        2019 &copy; Maju Teknik. All rights reserved.
    </div>
</footer>
