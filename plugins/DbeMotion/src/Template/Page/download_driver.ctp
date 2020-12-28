<?php
echo $this->Html->script('/components/select2/js/select2', ['block' => 'scriptBottom']);
echo $this->Html->css('/components/select2/css/select2.min', ['block' => 'css']);
?>
<div class="driver-manual-wrapper">
    <div class="back-navigation">
      <?php
      echo $this->Html->link(
        '<span uk-icon="icon: chevron-left; ratio: 2"></span>' . '<span>Back to Product</span>',
        $this->Utility->buildFullUrl('/products'),
        ['escape' => false]
      );
      ?>
    </div>
    <div class="content-wrapper">
        <h2>DBE ACOUSTICS DRIVER AND SUPPORT</h2>
        <div>
            <label for="product_select">
                <select class="product_select js-states form-control" id="product_select">
                    <option value="AL">Alabama</option>
                    <option value="AL">Alabama</option>
                    <option value="AL">Alabama</option>
                </select>
            </label>
            <input type="text"/>
            <button type="button">
                Submit
            </button>
        </div>
        <div class="download-description">
            <button type="button">
                DOWNLOAD NOW
            </button>
            <p>For use with systems running Microsoft® Windows® and Mac Os®</p>
            <p>Download and run it directly on the system you want to update. Internet connection required.</p>
        </div>
        <div class="manual-wrapper">
            <h2>
                DBE MANUAL
            </h2>
            <div>
                <ul uk-accordion>
                    <li>
                        <a class="uk-accordion-title" href="#">[PDF] Dual Dynamic Driver In Ear Earphone dbE PR300</a>
                        <div class="uk-accordion-content">
                            <dt>[PDF] 7.1 Virtual Surround Gaming Headphone dbE GM200</dt>
                            <dt>[PDF] High Fidelity Earphone Earbud  with Microphone dbE HF300</dt>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
