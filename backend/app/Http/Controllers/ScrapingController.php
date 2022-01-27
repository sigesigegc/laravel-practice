<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;

class ScrapingController extends Controller
{
    public function index()
    {
        // ここではアマゾンカメラランキングをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://www.amazon.co.jp/gp/bestsellers/electronics/3946818051?ref_=Oct_BSellerC_3946818051_SAll&pf_rd_p=7019a35e-d4ad-5da4-8fdd-f9f5c8ef9428&pf_rd_s=merchandised-search-10&pf_rd_t=101&pf_rd_i=3946818051&pf_rd_m=AN1VRQENFRJN5&pf_rd_r=61C7KYXHQFEAY80RGM67&pf_rd_r=61C7KYXHQFEAY80RGM67&pf_rd_p=7019a35e-d4ad-5da4-8fdd-f9f5c8ef9428');

        //viewに渡すパラメータ
        $params = array();

        //取得
        $goutte->filter('.a-cardui')->each(function ($node) use (&$params) {  
            $params["results"][] = [
                'text' => $node->filter('.a-link-normal > span > div')->text(),
                'image' => $node->filter('.a-dynamic-image')->attr('src'),
            ];
        });

        return view('scraping', $params);
    }
}
