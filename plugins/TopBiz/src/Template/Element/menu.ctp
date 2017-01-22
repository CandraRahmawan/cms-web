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
            <li><a href="<?= $menu_static[0]['content']['link'] ?>"><?= $menu_static[0]['cat']['name'] ?></a></li>
            <li class="hasChild">
                <a href="#">Layanan Kami</a>
                <ul class="dropMenu">
                    <li><a href="<?= $menu_static[3]['content']['link'] ?>"><?= $menu_static[3]['cat']['name'] ?></a></li>
                    <li><a href="<?= $menu_static[4]['content']['link'] ?>"><?= $menu_static[4]['cat']['name'] ?></a></li>
                    <li><a href="<?= $menu_static[0]['content']['link'] ?>"><?= $menu_static[0]['cat']['name'] ?></a></li>
                    <li><a href="<?= $menu_static[0]['content']['link'] ?>"><?= $menu_static[0]['cat']['name'] ?></a></li>
                </ul>
            </li>
            <li><a href="<?= $menu_static[0]['content']['link'] ?>"><?= $menu_static[0]['cat']['name'] ?></a></li> 
            <li><a href="<?= $menu_static[0]['content']['link'] ?>"><?= $menu_static[0]['cat']['name'] ?></a></li> 
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
