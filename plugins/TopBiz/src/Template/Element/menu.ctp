<header class="headerArea">
    <div class="logo pull-left">
        <div class="logoImg">
            <a href="index.html"><?php echo $this->Html->image('/TopBiz/images/logo.png'); ?></a>
        </div>
        <h2><a href="index.html">top<span>biz</span></a></h2>
    </div>
    <nav class="mainMenu pull-left">
        <div class="menuButton hidden-lg hidden-md">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>                                                                                 
            <li><a href="/">Home</a></li>
            <?php
            foreach ($menu_header as $menu) {
                echo '<li><a href="' . $this->Url->build('/pages/' . $menu['category_id'], true) . '">' . $menu['name'] . '</a></li>';
            }
            ?>
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
