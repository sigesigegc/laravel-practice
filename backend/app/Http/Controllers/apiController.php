<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class apiController extends Controller
{
    public function index()
    {
        $url = "http://koyomi.zingsystem.com/api/"; //url次第
        $method = "GET";
        $param = array(
            "mode" => "m",
            "cnt" => "12",
            "targetyyyy" =>"2022",
            "targetmm" => "1",
            "targetdd" => "1"
        );

        //接続
        $client = new Client();

        $response = $client->request($method, $url, ['query' => $param]);

        $posts = $response->getBody();
        $posts = json_decode($posts, true); //jsonに変換

        return view('api', ['results' => $posts]);
    }
}
