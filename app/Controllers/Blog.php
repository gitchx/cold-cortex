<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        $api_url = "https://php.x0.com/cms/api/content/item/Blog";
        $api_key = getenv('API_KEY');

        $client = \Config\Services::curlrequest();
        $response = $client->get($api_url, [
            'headers' => [
                'accept' => 'application/json',
                'api-key' => $api_key,
            ]
        ]);

        $title = '';
        $body = '';
        if ($response->getStatusCode() === 200) {
            $json = json_decode($response->getBody(), true);
            if (isset($json['Title'])) {
                $title = $json['Title'];
            }
            if (isset($json['Body'])) {
                $body = $json['Body'];
            }
        }

        return view('blog', [
            'title' => $title,
            'body' => $body
        ]);
    }

}
