<?php
$template = $this->request->detail;
if ($template == '123-dbe-comfit-eartips') {
    echo $this->Element('product_detail/template_2');
} else if ($template == '123-dbe-hardcase') {
    echo $this->Element('product_detail/template_3');
} else {
    echo $this->Element('product_detail/template_1');
}
