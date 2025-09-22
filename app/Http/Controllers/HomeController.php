<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $api_key = env('API_KEY');
        # dd($api_key);

        $api_url = "https://php.x0.com/cms/api/content/item/Home";

        $description = '';

        $response = \Illuminate\Support\Facades\Http::withHeaders([
            'accept' => 'application/json',
            'api-key' => $api_key,
        ])->get($api_url);
        # dd($response->json());
        if ($response->ok()) {
            $json = $response->json();
            if (isset($json['Description'])) {
                $description = $json['Description'];
            }
        }

        return view('home', ['description' => $description]);
    }
}
