<?php
$html = $this->Html;
?>
<header uk-sticky>
    <div class="header-content desktop">
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
    <div class="header-content tablet">
        <nav class="uk-navbar uk-navbar-container uk-margin uk-navbar-transparent">
            <div class="uk-navbar-left">
                <a href="#offcanvas-slide" class="uk-navbar-toggle" uk-toggle>
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
            </div>
            <div class="uk-navbar-right">
                <div class="logo-wrapper">
                    <?php
                    echo $html->image('/images/logo.jpeg');
                    echo $html->tag('h4', 'Maju Teknik');
                    ?>
                </div>
            </div>
        </nav>
        <div id="offcanvas-slide" uk-offcanvas>
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-nav-header">Menu</li>
                    <li class="uk-nav-divider"></li>
                    <li class="uk-active"><a href="#">Beranda</a></li>
                    <li><a href="">Produk</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li class="uk-nav-divider"></li>
                    <li class="contact-menu"><a href=""><span uk-icon="icon: whatsapp"></span>Whatsapp</a></li>
                    <li class="contact-menu"><a href=""><span uk-icon="icon: mail"></span>Email</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
