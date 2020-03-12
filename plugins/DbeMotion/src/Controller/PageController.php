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

    public function review()
    {
        $this->pluginContent('review_page');
    }

    public function warrantyInformation()
    {
        $this->pluginContent('warranty_information_page');
    }

    public function contact()
    {
        $this->pluginContent('contact_page');
    }

    public function productLists()
    {
        $this->pluginContent('product_lists');
    }
}
