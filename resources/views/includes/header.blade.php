<!DOCTYPE html>
<html lang="ja">
<header class="bg-black text-white shadow-lg border-b-2 border-slate-600">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center h-16 font-mono">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <h1 class="text-2xl font-bold bg-clip-text">
          Cold Cortex
        </h1>
      </div>
      
      <!-- Navigation -->
      <nav class="md:block">
        <ul class="flex space-x-8">
          <li>
            <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors duration-200 font-medium">
              Home
            </a>
          </li>
          <li>
            <a href="{{ route('blog') }}" class="hover:text-gray-300 transition-colors duration-200 font-medium pr-10">
              Blog
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<body class="bg-black text-white">
  <div class="container mx-auto px-4">