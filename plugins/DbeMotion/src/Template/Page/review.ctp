<?php
echo $this->Html->script([
  '/plugins/jquery-validation/dist/jquery.validate.min',
  'https://www.google.com/recaptcha/api.js?render=' . $settings['captcha_site_key'] . ''], ['block' => 'scriptBottom']);
?>
<div class="review-wrapper">
  <?= $this->Element('scroll_text_absolute'); ?>
    <div class="title">
        <h1>REVIEWS</h1>
    </div>
    <div class="review-list">
    </div>

    <div class="load-more-wrapper" onclick="getListReviews()">
        <input type="hidden" id="page"/>
        <div class="left-content">
            <div class="loading"></div>
        </div>
        <div class="right-content">
            More Review
            <span uk-icon="icon: arrow-right; ratio: 2"></span>
        </div>
    </div>
    <div class="youtube-section-wrapper blue-grey">
      <?php
      if (sizeof($youtube) > 0) {
        foreach ($youtube as $index => $item) {
          echo '<div>';
          echo '<iframe width="480" height="315" src="https://www.youtube.com/embed/' . $item['detail']['value_1'] . '"></iframe>';
          if ($index == 0) {
            echo '<div class="logo-youtube hide-mobile">';
            echo $this->Html->image('/images/youtube_logo.png');
            echo '<div>Review on Youtube Channel</div>';
            echo '</div>';
          }
          echo '</div>';
        }
        echo '<div class="logo-youtube show-mobile">';
        echo $this->Html->image('/images/youtube_logo.png');
        echo '<div>Review on Youtube Channel</div>';
        echo '</div>';
      }
      ?>
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
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"/>
            <button type="submit" onclick="callbackValid('form_review')">Submit</button>
          <?= $this->Form->end(); ?>
        </div>
    </div>
</div>

<script>
    let page = $('#page').val() || 1;
    const limit = 6;

    $(document).ready(function () {
        getListReviews();
    });

    function getListReviews() {
        $.ajax({
            url: `${fullBaseAdminUrl}api/getListReview?limit=${limit}&page=${page}`,
            type: 'GET',
            beforeSend: function (xhr) {
                $('.loading').html('Loading data...');
                $('.load-more-wrapper > .right-content').hide();
            }
        }).done(function (result) {
            $('.loading').empty();
            const jsonResult = JSON.parse(result);
            const totalCount = jsonResult.totalCount;
            if (totalCount <= (limit * page)) {
                $('.load-more-wrapper > .right-content').hide();
            } else {
                $('.load-more-wrapper > .right-content').show();
            }

            if (totalCount <= 0) {
                $('.review-list').html('<div class="not-found-content">Not Reviews Found</h4>');
            } else {
                jsonResult.data.map(item => {
                    $('.review-list').append(`<div class="review-content"><h3>${item.name}</h3><p>${item.comment}</p></div>`);
                });
            }
            $('#page').val(page++);
        }).fail(function (jqXHR) {
            $('.review-list').html('<div class="not-found-content">Error Load Reviews :(</h4>');
            console.log('error : ', jqXHR);
        });
    }
</script>