<?php
if (!empty($top_slider)) {
  echo '<section class="top-image hide-mobile" uk-slideshow="autoplay:true;autoplay-interval:3000">';
  echo '<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">';
  echo '<ul class="uk-slideshow-items">';
  foreach ($top_slider as $slider) {
    if ($slider['t']['key'] == 'featured_top_image_carousel') {
      echo '<li>';
      echo '<img data-src="' . $full_base_admin_url . $slider['g']['path'] . '" uk-img uk-cover/>';
      echo '<div class="text-image-centre">';
      echo '<span>' . $slider['g']['description'] . '</span>';
      echo '<div class="box-text">' . $slider['g']['title'] . '</div>';
      echo '</div>';
      echo '</li>';
    } else {
      echo '<li>';
      echo '<div class="text-title">';
      echo '<span>' . $slider['g']['description'] . '</span>';
      echo '<h1>' . $slider['g']['title'] . '</h1>';
      echo '</div>';
      echo '<img data-src="' . $full_base_admin_url . $slider['g']['path'] . '" uk-img uk-cover/>';
      echo '</li>';
    }
  }
  echo '</ul>';
  echo '</div>';
  echo '<ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>';
  echo $this->Element('scroll_text_absolute');
  echo '</section>';
  
  foreach ($top_slider as $slider) {
    if ($slider['t']['key'] == 'featured_top_image_carousel') {
      echo '<section class="top-image show-mobile">';
      echo '<img data-src="' . $full_base_admin_url . $slider['g']['path'] . '" uk-img/>';
      echo '<div class="text-image-centre">';
      echo '<span>' . $slider['g']['description'] . '</span>';
      echo '<div class="box-text">' . $slider['g']['title'] . '</div>';
      echo '</div>';
      echo '</section>';
    }
  }
}