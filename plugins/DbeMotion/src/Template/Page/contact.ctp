<div class="contact-page-top">
    <?= $this->Element('scroll_text_absolute'); ?>
    <div class="title-wrapper">
        <h1>Contact</h1>
    </div>
    <div class="content-wrapper">
        <div class="left-content">
            <h3>We guarantee high quality, timely supply of products and are prepared to provide test samples.
                Contact
                us in the way most convenient to you. We look forward to cooperating with you!</h3>
        </div>
        <div class="right-content">
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

                <?= $this->Html->link(
                    '<span uk-icon="icon: whatsapp; ratio: 1.2"/>',
                    'https://api.whatsapp.com/send?phone=6281319991783',
                    ['escape' => false, 'target' => '_blank']
                );
                ?>

            </div>
        </div>
    </div>
</div>
<div class="blue-grey">
    <div class="contact-page-bottom">
        <div class="content-top">
            <div class="left-content">
                <h1>Ask a question</h1>
            </div>
            <div class="right-content">
                <form>
                    <div>
                        <span>Your Name</span>
                        <input class="uk-input" type="text">
                    </div>
                    <div>
                        <span>Email</span>
                        <input class="uk-input" type="text">
                    </div>
                    <div>
                        <span>Phone</span>
                        <input class="uk-input" type="text">
                    </div>
                    <div>
                        <span>Message</span>
                        <textarea class="uk-textarea" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
        <div class="content-bottom">
            <div class="left-content">
                <span>Our Specialist will contact you and tell you about the conditions.</span>
            </div>
            <div class="right-content">
                <button>
                    Book Consultation
                </button>
            </div>
        </div>
    </div>
</div>