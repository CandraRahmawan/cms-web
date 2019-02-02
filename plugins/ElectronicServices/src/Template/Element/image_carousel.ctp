<?php
if (!empty($top_slider)) {
    echo '<div class="carousel-image-wrapper">';
    echo '<div id="image-carousel-desktop" class="uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true;max-height: 550;min-height: 400;">';
    echo '<ul class="uk-slideshow-items">';
    foreach ($top_slider as $slider) {
        $img_path = $this->Utility->basePathImgSliderBanner($path_url_admin, $slider['g']['category_id']);
        echo '<li>';
        echo '<img data-src="' . $img_path . $slider['g']['path'] . '" alt="' . $slider['g']['title'] . '" uk-cover uk-img="target: !ul > :last-child, !* +*"/>';
        echo '</li>';
    }
    echo '</ul>';
    echo '<a href="#" class="uk-hidden-hover arrow-img-carousel left" uk-slidenav-previous uk-slideshow-item="previous"></a>';
    echo '<a href="#" class="uk-hidden-hover arrow-img-carousel right" uk-slidenav-next uk-slideshow-item="next"></a>';
    echo '</div>';

    echo '<div id="image-carousel-tablet" class="uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true;max-height: 300;min-height: 200;">';
    echo '<ul class="uk-slideshow-items">';
    foreach ($top_slider as $slider) {
        $img_path = $this->Utility->basePathImgSliderBanner($path_url_admin, $slider['g']['category_id']);
        echo '<li>';
        echo '<img data-src="' . $img_path . $slider['g']['path'] . '" alt="' . $slider['g']['title'] . '" uk-cover uk-img="target: !ul > :last-child, !* +*"/>';
        echo '</li>';
    }
    echo '</ul>';
    echo '<a href="#" class="uk-hidden-hover arrow-img-carousel left" uk-slidenav-previous uk-slideshow-item="previous"></a>';
    echo '<a href="#" class="uk-hidden-hover arrow-img-carousel right" uk-slidenav-next uk-slideshow-item="next"></a>';
    echo '</div>';

    echo '<div id="image-carousel-mobile" class="uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true;max-height: 150;min-height: 150;">';
    echo '<ul class="uk-slideshow-items">';
    foreach ($top_slider as $slider) {
        $img_path = $this->Utility->basePathImgSliderBanner($path_url_admin, $slider['g']['category_id']);
        echo '<li>';
        echo '<img data-src="' . $img_path . $slider['g']['path'] . '" alt="' . $slider['g']['title'] . '" uk-cover uk-img="target: !ul > :last-child, !* +*"/>';
        echo '</li>';
    }
    echo '</ul>';
    echo '<a href="#" class="uk-hidden-hover arrow-img-carousel left" uk-slidenav-previous uk-slideshow-item="previous"></a>';
    echo '<a href="#" class="uk-hidden-hover arrow-img-carousel right" uk-slidenav-next uk-slideshow-item="next"></a>';
    echo '</div>';

    echo '</div>';
}
?>
