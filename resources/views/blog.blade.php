@extends('layouts.app')

@section('content')

<body class="bg-black text-white">
  <div class="container mx-auto px-4">

  <h1 class="text-2xl font-bold text-center mt-20 font-mono">Blog一覧</h1>
  <ul class="max-w-3xl mx-auto mt-10">
    @forelse ($blogs as $blog)
      <li class="mb-6 border-b pb-4">
        <h2 class="text-xl font-bold text-center">
          <a href="{{ route('article.show', ['id' => $blog['_id']]) }}" class="text-white hover:text-gray-300 transition-colors duration-200">
            {{ $blog['Title'] }}
          </a>
        </h2>
      </li>
    @empty
      <li>記事がありません。</li>
    @endforelse
  </ul>
@endsection