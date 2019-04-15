<?php

namespace App\Controller;

use Cake\Utility\Xml;

class SeoController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('content');
    }

    public function robots()
    {
    }

    public function sitemapArticle()
    {
        $this->viewBuilder()->layout(false);
        $this->render(false);
        $articles = $this->content
            ->find('all')
            ->select([
                'Content.title',
                'Content.content_id',
                'Content.description',
                'Content.create_date',
                'Content.update_date',
                'Content.category_id',
                'Content.picture',
                'Content.link'
            ])
            ->join([
                'cat' => [
                    'table' => 'category',
                    'type' => 'INNER',
                    'conditions' => 'cat.category_id = Content.category_id'
                ]
            ])
            ->where([
                'Content.status' => 'Y',
                'cat.status' => 'Y',
                'cat.type' => 'Content'
            ])
            ->toArray();
        $xmlArray = [];
        foreach ($articles as $key => $item) {
            $content = $item['Content'];
            $xmlArray['urlset']['url'][$key]['loc'] = $this->baseUrl . $content['link'];
            $xmlArray['urlset']['url'][$key]['changefreq'] = 'monthly';
            $xmlArray['urlset']['url'][$key]['priority'] = '0.5';
            $xmlArray['urlset']['url'][$key]['lastmod'] = empty($content['update_date']) ? $content['create_date'] : $content['update_date'];
        }
        $xmlObject = Xml::fromArray($xmlArray);
        $xmlString = $xmlObject->asXML();
        $xmlString = str_replace("<urlset>", "<urlset xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:mobile=\"http://www.google.com/schemas/sitemap-mobile/1.0\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">", $xmlString);
        $this->response->type('xml');
        $this->response->body($xmlString);
        $this->response;
    }

    public function sitemapPage()
    {
        $this->viewBuilder()->layout(false);
        $this->render(false);
        $articles = $this->content
            ->find('all')
            ->select([
                'Content.title',
                'Content.content_id',
                'Content.description',
                'Content.create_date',
                'Content.update_date',
                'Content.category_id',
                'Content.picture',
                'Content.link'
            ])
            ->join([
                'cat' => [
                    'table' => 'category',
                    'type' => 'INNER',
                    'conditions' => 'cat.category_id = Content.category_id'
                ]
            ])
            ->where([
                'Content.status' => 'Y',
                'cat.status' => 'Y',
                'cat.type' => 'Page'
            ])
            ->toArray();
        $xmlArray = [];
        foreach ($articles as $key => $item) {
            $content = $item['Content'];
            $xmlArray['urlset']['url'][$key]['loc'] = $this->baseUrl . $content['link'];
            $xmlArray['urlset']['url'][$key]['changefreq'] = 'monthly';
            $xmlArray['urlset']['url'][$key]['priority'] = '0.5';
            $xmlArray['urlset']['url'][$key]['lastmod'] = empty($content['update_date']) ? $content['create_date'] : $content['update_date'];
        }
        $xmlObject = Xml::fromArray($xmlArray);
        $xmlString = $xmlObject->asXML();
        $xmlString = str_replace("<urlset>", "<urlset xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:mobile=\"http://www.google.com/schemas/sitemap-mobile/1.0\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">", $xmlString);
        $this->response->type('xml');
        $this->response->body($xmlString);
        $this->response;
    }

}