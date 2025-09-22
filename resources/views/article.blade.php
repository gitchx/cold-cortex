@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-center mt-20 font-mono">
        {{ $title }}
    </h1>
    <div class="text-center mt-20 max-w-3xl mx-auto font-mono text-s">
        {!! !empty($body) ? nl2br(e($body)) : '<div class="text-red-500 mb-2">APIから本文を取得できませんでした。</div>' !!}
    </div>
@endsection