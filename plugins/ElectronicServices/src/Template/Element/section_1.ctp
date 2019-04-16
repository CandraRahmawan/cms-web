<div class="homepage-content-wrapper">
    <?php
    echo $this->Html->tag('h1', 'Selamat datang di website Maju Teknik', ['class' => 'uk-text-center']);
    echo '<hr class="desktop uk-divider-icon">';
    if (!empty($section)) {
        foreach ($section as $sec) {
            if (($sec['c']['status'] == 'Y') && ($sec['t']['key'] == 'section_1')) {
                echo $sec['c']['description'];
            }
        }
    }
    ?>
</div>
