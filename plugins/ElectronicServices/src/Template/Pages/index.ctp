<div class="content-wrapper">
    <div class="homepage-content-wrapper">
        <article class="uk-article">
            <h1 class="uk-article-title">
                <a class="uk-link-reset" href="">
                    <?php
                    $content = $content[0];
                    if ($content['cat']['type'] == 'Page') {
                        echo $content['cat']['name'];
                    } else {
                        echo $content['title'];
                    }
                    ?>
                </a>
            </h1>
            <?php
            if ($content['cat']['type'] != 'Page') {
                echo '<p class="uk-article-meta">';
                echo 'Ditulis oleh ';
                echo $this->Html->tag('b', $content['u']['first_name'] . ' ' . $content['u']['last_name']);
                echo ', ';
                echo $this->Utility->formatDate($content['create_date']);
                echo '.</p >';
            }
            ?>
            <hr>
            <p><?= $content['description']; ?></p>
        </article>
        <?= $this->Element('related_blog'); ?>
    </div>
</div>
