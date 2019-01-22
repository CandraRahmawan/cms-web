<?php
$html = $this->Html;
?>
<header uk-sticky>
    <div class="header-content">
        <div class="logo-wrapper">
            <?php
            echo $html->image('/images/logo.jpeg');
            echo $html->tag('h4', 'Maju Teknik');
            ?>
        </div>
        <div class="top-menu-wrapper">
            <ul>
                <li class="active"><a href="">Beranda</a></li>
                <li><a href="">Produk</a></li>
                <li><a href="">Service</a></li>
                <li><a href="">Kontak</a></li>
                <li><a href="">Artikel</a></li>
                <li class="contact-menu"><a href=""><span uk-icon="icon: whatsapp"></span>Whatsapp</a></li>
                <li class="contact-menu"><a href=""><span uk-icon="icon: mail"></span>Email</a></li>
            </ul>
        </div>
    </div>
</header>
