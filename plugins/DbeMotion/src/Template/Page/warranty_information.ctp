<div class="warranty-information-wrapper">
    <?= $this->Element('scroll_text_absolute'); ?>
    <div class="title-wrapper">
        <h1>Warranty Information</h1>
    </div>
    <div class="content-wrapper">
        <div class="left-content">
            <hr>
            <h3>All our Products are covered by 1 year warranty.</h3>
        </div>
        <div class="right-content">
            <div class="top-text">
                If you have any problems with dbE products,<br> please contact us at
            </div>
            <div class="store-list">
                <h3>JAKARTA</h3>
                <p>Plaza Semanggi Lantai 2B no. 122</p>
            </div>
            <div class="store-list">
                <h3>BANDUNG</h3>
                <p>Bandung Electronic Center 2nd Fl Y05</p>
                <?= $this->Html->link(
                    '<p>022-4234642</p>',
                    'tel:022-4234642',
                    ['escape' => false]
                );
                ?>
            </div>
        </div>
    </div>
</div>
