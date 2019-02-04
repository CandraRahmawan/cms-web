<header uk-sticky>
    <div class="header-content desktop">
        <div class="logo-wrapper">
            <?php
            echo $this->Html->image('/images/logo.jpeg');
            echo $this->Html->tag('h4', $settings['company_title']);
            ?>
        </div>
        <div class="top-menu-wrapper">
            <ul>
                <?php
                foreach ($menu_header as $item) {
                    echo $this->Html->tag('li', $this->Html->tag('a', $item['name'], ['href' => $this->Utility->buildUrl($item['link'])]), ['class' => $item['active']]);
                }
                ?>
                <li class="contact-menu">
                    <a href="https://api.whatsapp.com/send?phone=<?= $settings['contact_whatsapp']; ?>" target="_blank">
                        <span uk-icon="icon: whatsapp"></span>
                        Whatsapp
                    </a>
                </li>
                <li class="contact-menu">
                    <a href="mailto:<?= $settings['contact_email']; ?>">
                        <span uk-icon="icon: mail"></span>
                        Email
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-content tablet">
        <nav class="uk-navbar uk-navbar-container uk-margin uk-navbar-transparent">
            <div class="uk-navbar-left">
                <a href="#menu" class="uk-navbar-toggle" uk-toggle="target: #menu">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
            </div>
            <div class="uk-navbar-right">
                <div class="logo-wrapper">
                    <?php
                    echo $this->Html->image('/images/logo.jpeg');
                    echo $this->Html->tag('h4', $settings['company_title']);
                    ?>
                </div>
            </div>
        </nav>
        <div id="menu" uk-offcanvas="mode: reveal; overlay: true">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-nav-header">Menu</li>
                    <li class="uk-nav-divider"></li>
                    <?php
                    foreach ($menu_header as $item) {
                        echo $this->Html->tag('li', $this->Html->tag('a', $item['name'], ['href' => $this->Utility->buildUrl($item['link'])]), ['class' => 'uk-' . $item['active']]);
                    }
                    ?>
                    <li class="uk-nav-divider"></li>
                    <li class="contact-menu">
                        <a href="https://api.whatsapp.com/send?phone=<?= $settings['contact_whatsapp']; ?>">
                            <span uk-icon="icon: whatsapp"></span>
                            Whatsapp
                        </a>
                    </li>
                    <li class="contact-menu">
                        <a href="mailto:<?= $settings['contact_email']; ?>">
                            <span uk-icon="icon: mail"></span>
                            Email
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
