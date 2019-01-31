<?php
if (sizeof($random_related_blog_post) > 0) {
    echo $this->Html->tag('h2', 'Artikel Terkait');
    echo $this->Html->tag('hr', '', ['class' => 'uk-divider-small']);
    echo '<div class="uk-child-width-1-3@s" uk-grid>';
    foreach ($random_related_blog_post as $item) {
        echo '<div class="related-blog-wrapper">';
        echo '<div class="uk-dark uk-background-muted uk-padding">';
        echo $this->Html->tag('h4', $item['title'], ['class' => 'ellipsis']);
        echo $this->Html->tag('span', $this->Text->truncate($item['description'], 200, ['ellipsis' => '...', 'exact' => false]));
        echo $this->Html->tag('a', 'Selengkapnya...', ['href' => $this->Utility->buildBlogUrl($item['title'], $item['content_id']), 'class' => 'uk-button uk-button-primary']);
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
