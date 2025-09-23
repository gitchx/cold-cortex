<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        $api_url = "https://cms.mixkey.studio/api/content/items/Blog";
        $api_key = env('API_KEY');

        $blogs = [];

        $response = \Illuminate\Support\Facades\Http::withHeaders([
            'accept' => 'application/json',
            'api-key' => $api_key,
        ])->get($api_url);

        if ($response->ok()) {
            $blogs = $response->json();
        }

        return view('blog', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $api_url = "https://cms.mixkey.studio/api/content/item/Blog/$id";
        $api_key = env('API_KEY');

        $title = '';
        $body = '';

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'api-key' => $api_key,
        ])->get($api_url);

        //dd($response->json());

        if ($response->ok()) {
            $json = $response->json();
            if (isset($json['Title'])) {
                $title = $json['Title'];
            }
            if (isset($json['Body'])) {
                $body = $json['Body'];
            }
        }
        
        //dd($body);

        return view('article', [
            'title' => $title,
            'body' => $body
        ]);
    }
}
