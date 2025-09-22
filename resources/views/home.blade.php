<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  </head>
  <body>

      @include('includes.header')

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

  </body>
</html>