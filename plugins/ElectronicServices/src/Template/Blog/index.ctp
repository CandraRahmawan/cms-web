<div class="content-wrapper">
    <div class="homepage-content-wrapper">
        <?php
        foreach ($blog as $item) {
            $img_path = $this->Utility->basePathImgArticle($base_url, $item['category_id']);
            echo '<article class="uk-article">';
            echo $this->Html->tag('h1', $this->Html->tag('a', $item['title'], ['class' => 'uk-link-reset', 'href' => $this->Utility->buildBlogUrl($item['title'], $item['content_id'])]), ['class' => 'uk-article-title']);
            echo $this->Html->tag('p',
                'Ditulis oleh <b>' . $item['u']['first_name'] . ' ' . $item['u']['last_name'] . '</b> ' .
                $this->Utility->formatDate($item['create_date']) . '', ['class' => 'uk-article-meta']);
            echo '<div class="article-content-wrapper">';
            if ($item['picture'] != '') {
                echo $this->Html->image($img_path . $item['picture']);
            }
            echo '<span>' . $this->Text->truncate($item['description'], 500, ['ellipsis' => '...', 'exact' => false]) . '</span>';
            echo '</div>';
            echo '<div class="uk-grid-small uk-child-width-auto" uk-grid><div>';
            echo $this->Html->tag('a', 'Selengkapnya...', ['href' => $this->Utility->buildBlogUrl($item['title'], $item['content_id']), 'class' => 'uk-button uk-button-primary']);
            echo '</div></div>';
            echo '</article>';
            echo '<hr>';
        }
        ?>
        <ul class="uk-pagination uk-flex-center" uk-margin>
            <?php
            if ($this->Paginator->numbers()) {
                echo $this->Paginator->prev('<');
                echo $this->Paginator->numbers();
                echo $this->Paginator->next('>');
            }
            ?>
        </ul>

    </div>
</div>
