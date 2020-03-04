<?php

namespace DbeMotion\Controller;

use App\Controller\PagesController;

class PageController extends PagesController
{

    public function productCategory()
    {
        $this->pluginContent('product_category_page');
    }

    public function whereToBuy()
    {
        $this->pluginContent('where_to_buy_page');
    }

    public function ourStory()
    {
        $this->pluginContent('our_story_page');
    }
}
