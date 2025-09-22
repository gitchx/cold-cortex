@extends('layouts.app')
@section('content')

<body class="bg-black text-white">
  <div class="container mx-auto px-4">
    
  <h1 class="text-5xl font-bold text-center mt-10 font-mono">Cold Cortex</h1>
  <p class="text-center text-slate-600 pt-1 font-bitcount-ink font-bitcount-ink-vars">Dub Techno powered by ❤️</p>
  <img class="w-70 mx-auto pt-8 rounded-full" src="{{ asset('dist/img/cold_cortex.jpg') }}" alt="Logo">
  <div class="text-center mt-8 max-w-3xl mx-auto font-mono text-xs">
    @if (!empty($description))
      @php
        // 2回以上の改行で段落分割
        $paragraphs = preg_split("/\n{2,}/", $description);
      @endphp
      @foreach ($paragraphs as $p)
        <p style="margin-bottom:1.5em;">{!! nl2br(e(trim($p))) !!}</p>
      @endforeach
    @else
      <div class="text-red-500 mb-2">APIから説明文を取得できませんでした。</div>
    @endif
  </div>
@endsection