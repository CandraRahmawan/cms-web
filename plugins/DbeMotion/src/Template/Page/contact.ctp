<?php
echo $this->Html->script([
  '/plugins/jQuery/jquery-2.2.3.min',
  '/plugins/jquery-validation/dist/jquery.validate.min',
  'https://www.google.com/recaptcha/api.js?render=' . $settings['captcha_site_key'] . ''], ['block' => 'scriptBottom']);
?>
<div class="contact-page-wrapper">
  <?= $this->Element('scroll_text_absolute'); ?>
    <div class="contact-page-top">
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
              <?php
              foreach ($service_centre as $item) {
                echo '<div class="store-list">';
                echo '<h3>' . $item['detail']['value_1'] . '</h3>';
                echo '<p>' . $item['detail']['value_2'] . '</p>';
                echo '</div>';
              }
              ?>
                <div class="store-list contact">
                  <?php
                  if ($settings['phone_number'] != "") {
                    echo $this->Html->link(
                      '<p>' . $settings['phone_number'] . '</p>',
                      'tel:' . $settings['phone_number'],
                      ['escape' => false]
                    );
                  }
                  if ($settings['whatsapp_number'] != "") {
                    echo $this->Html->link(
                      '<span uk-icon="icon: whatsapp; ratio: 1.2"/>',
                      'https://api.whatsapp.com/send?phone=' . $settings['whatsapp_number'],
                      ['escape' => false, 'target' => '_blank']
                    );
                  }
                  ?>
                </div>
            </div>
        </div>
    </div>
    <div class="blue-grey">
        <div class="contact-page-bottom">
          <?= $this->Form->create(null, ['id' => 'form_contact', 'onsubmit' => 'event.preventDefault();']); ?>
            <div class="content-top">
                <div class="left-content">
                    <h1>Ask a question</h1>
                    <span class="show-mobile">Our Specialist will contact you and tell you about the conditions.</span>
                </div>
                <div class="right-content">
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
                        <label for="message" class="label">Message</label>
                        <textarea class="uk-textarea" rows="3" id="message" name="message"></textarea>
                    </div>
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"/>
                </div>
            </div>
            <div class="content-bottom">
                <div class="left-content">
                    <span>Our Specialist will contact you and tell you about the conditions.</span>
                </div>
                <div class="right-content">
                    <button type="submit">Book Consultation</button>
                </div>
            </div>
          <?= $this->Form->end(); ?>
        </div>
    </div>
</div>