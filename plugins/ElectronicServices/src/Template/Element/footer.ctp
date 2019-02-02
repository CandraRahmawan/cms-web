<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <?php
            echo $this->Html->image('/images/logo.jpeg', ['class' => 'uk-border-circle']);
            echo $this->Html->tag('h4', $settings['company_title']);
            ?>
        </div>
        <div class="footer-address">
            <?php
            echo $this->Html->tag('h4', 'Alamat');
            echo $this->Html->tag('span', $settings['footer_address']);
            ?>
        </div>
        <div class="footer-contact">
            <?php
            echo $this->Html->tag('h4', 'Kontak Kami');
            echo 'Telp / WA : ' . $settings['contact_phone'];
            echo '<br/>';
            echo 'Email : ' . $this->Html->tag('a', $settings['contact_email'], ['href' => 'mailto:' . $settings['contact_email']])
            ?>
        </div>
        <?php
        if (sizeof($random_blog_post) > 0) {
            echo '<div class="footer-blog">';
            echo $this->Html->tag('h4', 'Artikel Lainnya');
            foreach ($random_blog_post as $item) {
                echo $this->Html->tag('div', $this->Html->tag('a', $item['title'], ['href' => $this->Utility->buildBlogUrl($item['title'], $item['content_id'])]), ['class' => 'ellipsis-one-line']);
            }
            echo '</div>';
        }
        ?>
    </div>
    <?php echo $this->Html->tag('div', $settings['footer_copyright'], ['class' => 'copyright']); ?>
</footer>
