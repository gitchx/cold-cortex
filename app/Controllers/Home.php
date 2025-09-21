<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // API設定
        $api_url = "https://phps.sakura.ne.jp/cms/api/content/item/Home";
        $api_key = "API-61fa65c0959cbef89754d6a70cc215e817469f13";

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
