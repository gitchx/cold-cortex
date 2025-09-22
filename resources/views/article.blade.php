@extends('layouts.app')

@section('content')
<body class="bg-white text-black">
  <div class="container mx-auto px-4">

    <h1 class="text-2xl font-bold text-center mt-20 font-mono">
        {{ $title }}
    </h1>
    <div class="text-center mt-20 max-w-3xl mx-auto font-mono text-s">
        <div class="article-body mx-auto">
            {!! !empty($body) ? str_replace('<p>', '<p class="mb-4">', $body) : '<div class="text-red-500 mb-2">APIから本文を取得できませんでした。</div>' !!}
        </div>
    </div>
@endsection