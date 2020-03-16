<?php
echo $this->Html->script([
    '/plugins/jQuery/jquery-2.2.3.min',
    '/plugins/jquery-validation/dist/jquery.validate.min'], ['block' => 'scriptBottom']);

echo $this->Html->script('https://www.google.com/recaptcha/api.js?render=' . $settings['captcha_site_key'] . '');
?>
<div class="review-wrapper">
    <?= $this->Element('scroll_text_absolute'); ?>
    <h1>REVIEWS</h1>
    <div class="review-list">
        <div class="review-content">
            <h3>Edber Ditamayatsa</h3>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et
            </p>
        </div>
        <div class="review-content">
            <h3>Dyntha Armazitha</h3>
            <p> Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et
            </p>
        </div>
        <div class="review-content">
            <h3>Ayogia Bramatama</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            </p>
        </div>
        <div class="review-content">
            <h3>Yunita Tatiayura</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua.
            </p>
        </div>
        <div class="review-content">
            <h3>Riangga Dwisatya</h3>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                dolor sit amet.
            </p>
        </div>
        <div class="review-content">
            <h3>Zethamara Geraldy</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            </p>
        </div>
    </div>
    <div class="load-more-wrapper">
        <div class="left-content"></div>
        <div class="right-content">
            More Review
            <span uk-icon="icon: arrow-right; ratio: 2"></span>
        </div>
    </div>
    <div class="youtube-section-wrapper blue-grey">
        <div>
            <iframe width="480" height="315"
                    src="https://www.youtube.com/embed/ItrI2aYumU4">
            </iframe>
            <div class="logo-youtube">
                <?= $this->Html->image('/images/youtube_logo.png'); ?>
                <div>Review on Youtube Channel</div>
            </div>
        </div>
        <div>
            <iframe width="480" height="315"
                    src="https://www.youtube.com/embed/UavrhybmzNQ">
            </iframe>
        </div>
    </div>
    <div class="review-form-wrapper">
        <div class="left-content">
            <h1>Story of Your Best Experience with</h1>
        </div>
        <div class="right-content">
            <?= $this->Form->create(null, ['id' => 'form_review', 'onsubmit' => 'event.preventDefault();']); ?>
            <div class="input-group">
                <label for="name" class="label">Your Name</label>
                <input class="uk-input" type="text" id="name" name="name">
            </div>
            <div class="input-group">
                <label for="email" class="label">Email</label>
                <input class="uk-input" type="text" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="phone_number" class="label">Phone</label>
                <input class="uk-input" type="text" id="phone_number" name="phone_number">
            </div>
            <div class="input-group">
                <label for="comment" class="label">Comment</label>
                <textarea class="uk-textarea" rows="3" id="comment" name="comment"></textarea>
            </div>
            <button type="submit">Submit</button>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>

<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('<?= $settings['captcha_site_key']; ?>', {action: 'homepage'}).then(function (token) {
        });
    });

    $.ajax({
        url: 'https://www.google.com/recaptcha/api/siteverify',
        type: 'POST',
        data: {
            secret: '<?= $settings['captcha_secret_key']; ?>',
            response: ''
        }
    });
</script>