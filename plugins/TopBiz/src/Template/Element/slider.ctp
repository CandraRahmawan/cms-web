<section class="sliderArea" data-currentslide="activRev_1">
    <div class="tp-banner1">
        <?php
        if (!empty($top_slider)):
            echo '<ul>';
            foreach ($top_slider as $slider) {
                ?>
                <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000" >
                    <?php
                    $img = $this->Utility->basePathImgSliderBanner($base_url, $slider['g']['category_id']);
                    echo $this->Html->image($img . $slider['g']['path'], [
                        'alt' => $slider['g']['title'],
                        'data-bgfit' => 'cover',
                        'data-bgposition' => 'left top',
                        'data-bgrepeat' => 'no-repeat'
                    ]);
                    ?>
                    <div class="tp-caption lightgrey_divider lft fadeout"
                         data-x="left"
                         data-y="235"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <h1 class="headCaption"><?php echo $slider['g']['title']; ?></h1>
                    </div>
                    <div class="tp-caption lightgrey_divider lfl fadeout"
                         data-x="left"
                         data-y="395"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeInOutElastic">
                        <p class="capItalic">
                            <?php echo $slider['g']['description']; ?>
                        </p>
                    </div>
                    <?php
                    if ($slider['g']['link'] != '' || $slider['g']['link'] != ''):
                        ?>
                        <div class="tp-caption lightgrey_divider lfb fadeout"
                             data-x="left"
                             data-y="460"
                             data-speed="1400"
                             data-start="1300"
                             data-easing="Power4.easeOut">
                            <a href="#" class="sliderBtn"><i class="icon-bulb"></i><span>Learn More</span></a>
                        </div>
                    <?php endif; ?>
                </li>
                <?php
            }
            echo '</ul>';
        endif;
        ?>
    </div>
</section>
