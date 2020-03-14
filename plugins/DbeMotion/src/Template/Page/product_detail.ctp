<?php
$template = $this->request->detail;
if ($template == '123-dbe-comfit-eartips') {
    echo $this->Element('product_detail/template_2');
} else {
    echo $this->Element('product_detail/template_1');
}
