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

            <?php
            foreach ($menu_header as $item):
                if ($item['md']['drop_down'] == 0 && $item['md']['parent_id'] == 0) {
                    echo '<li><a href="' . $item["ct"]["link"] . '">' . $item['c']['name'] . '</a></li>';
                } else if ($item['md']['drop_down'] != 0) {
                    echo '<li class="hasChild">';
                    echo '<a href="#">' . $item['c']['name'] . '</a>';
                    echo '<ul class="dropMenu">';
                    $this->Utility->categoryMenu($item['md']['menu_detail_id']);
                    echo '</ul>';
                    echo '</li>';
                }
            endforeach;
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
