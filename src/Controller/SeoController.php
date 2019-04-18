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
                'content.title',
                'content.content_id',
                'content.description',
                'content.create_date',
                'content.update_date',
                'content.category_id',
                'content.picture',
                'content.link'
            ])
            ->join([
                'cat' => [
                    'table' => 'category',
                    'type' => 'INNER',
                    'conditions' => 'cat.category_id = content.category_id'
                ]
            ])
            ->where([
                'content.status' => 'Y',
                'cat.status' => 'Y',
                'cat.type' => 'Content'
            ])
            ->toArray();
			
        $xmlArray = [];
        foreach ($articles as $key => $item) {
            $xmlArray['urlset']['url'][$key]['loc'] = $this->baseUrl . $item['link'];
            $xmlArray['urlset']['url'][$key]['changefreq'] = 'monthly';
            $xmlArray['urlset']['url'][$key]['priority'] = '0.5';
            $xmlArray['urlset']['url'][$key]['lastmod'] = empty($item['update_date']) ? $item['create_date'] : $item['update_date'];
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
        $page = $this->content
            ->find('all')
            ->select([
                'content.title',
                'content.content_id',
                'content.description',
                'content.create_date',
                'content.update_date',
                'content.category_id',
                'content.picture',
                'content.link'
            ])
            ->join([
                'cat' => [
                    'table' => 'category',
                    'type' => 'INNER',
                    'conditions' => 'cat.category_id = content.category_id'
                ]
            ])
            ->where([
                'content.status' => 'Y',
                'cat.status' => 'Y',
                'cat.type' => 'Page'
            ])
            ->toArray();
        $xmlArray = [];
        foreach ($page as $key => $item) {
            $xmlArray['urlset']['url'][$key]['loc'] = $this->baseUrl . $item['link'];
            $xmlArray['urlset']['url'][$key]['changefreq'] = 'monthly';
            $xmlArray['urlset']['url'][$key]['priority'] = '0.5';
            $xmlArray['urlset']['url'][$key]['lastmod'] = empty($item['update_date']) ? $item['create_date'] : $item['update_date'];
        }
        $xmlObject = Xml::fromArray($xmlArray);
        $xmlString = $xmlObject->asXML();
        $xmlString = str_replace("<urlset>", "<urlset xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:mobile=\"http://www.google.com/schemas/sitemap-mobile/1.0\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">", $xmlString);
        $this->response->type('xml');
        $this->response->body($xmlString);
        $this->response;
    }

}