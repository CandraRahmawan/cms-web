<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Inflector;
use Cake\View\Helper\UrlHelper;

class UtilityHelper extends Helper
{
    public function buildBlogUrl($title, $id)
    {
        return UrlHelper::build('/' . strtolower(Inflector::slug($title . DIRECTORY_SEPARATOR . $id)));
    }

    public function formatDate($dateTime) {
        return date('d M Y', strtotime($dateTime));
    }

}
