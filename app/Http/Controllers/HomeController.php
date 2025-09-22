<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $api_key = env('API_KEY');
        $api_url = "https://phps.sakura.ne.jp/cms/api/content/item/Home";

        $description = '';

        $response = \Illuminate\Support\Facades\Http::withHeaders([
            'accept' => 'application/json',
            'api-key' => $api_key,
        ])->get($api_url);

        if ($response->ok()) {
            $json = $response->json();
            if (isset($json['Description'])) {
                $description = $json['Description'];
            }
        }

        return view('home', ['description' => $description]);
    }
}
