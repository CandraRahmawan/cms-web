<header class="headerArea">
    <div class="logo pull-left">
        <div class="logoImg">
        </div>
        <h2><a href="/"><?= $title_meta['title_logo']; ?></a></h2>
    </div>
    <nav class="mainMenu pull-left">
        <div class="menuButton hidden-lg hidden-md">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>                                                                                 
            <li><a href="/">Home</a></li>
            <li><a href="/">Profile</a></li>
            <li><a href="/">Layanan Kami</a></li>
            <li><a href="/">Klien Kami</a></li> 
            <li><a href="/">Hubungi Kami</a></li> 
        </ul>
    </nav>
    <div class="topSocial pull-right">
        <ul>
            <?php
            foreach ($social_media as $social) {
                echo '<li><a class="' . $social['key'] . '" href="' . $social['value_1'] . '"><i class="fa fa-' . $social['key'] . '"></i></a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="clearfix"></div>
</header>
