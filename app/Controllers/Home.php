<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // .envからAPIキーを取得
        $api_key = getenv('API_KEY');
        $api_url = "https://phps.sakura.ne.jp/cms/api/content/item/Home";

        // APIリクエスト
        $client = \Config\Services::curlrequest();
        $response = $client->get($api_url, [
            'headers' => [
                'accept' => 'application/json',
                'api-key' => $api_key
            ]
        ]);

        $description = '';
        if ($response->getStatusCode() === 200) {
            $json = json_decode($response->getBody(), true);
            if (isset($json['Description'])) {
                $description = $json['Description'];
            }
        }

        // ビューに渡す
        return view('home', ['description' => $description]);
    }
}
