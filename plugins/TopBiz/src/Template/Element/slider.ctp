<section class="sliderArea" data-currentslide="activRev_1">
    <div class="tp-banner1">
        <?php
        if (!empty($top_slider)):
            echo '<ul>';
            foreach ($top_slider as $slider) {
                if ($slider['gallery']['is_active'] == 'Y') {
                    ?>
                    <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000" >
                        <?php
                        $img = $this->Utility->basePathImgSliderBanner($base_url, $slider['gallery']['category_id']);
                        echo $this->Html->image($img . $slider['gallery']['path'], [
                            'alt' => $slider['gallery']['title'],
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
                            <p class="redCaption"><?php echo $slider['gallery']['title']; ?></p>
                        </div>
                        <div class="tp-caption lightgrey_divider lfl fadeout"
                             data-x="left"
                             data-y="395"
                             data-speed="1400"
                             data-start="1300"
                             data-easing="easeInOutElastic">
                            <p class="capItalic">
                                <?php echo $slider['gallery']['description']; ?>
                            </p>
                        </div>
                        <?php
                        if ($slider['gallery']['link'] != '' || $slider['gallery']['link'] != ''):
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
            }
            echo '</ul>';
        endif;
        ?>
    </div>
</section>
