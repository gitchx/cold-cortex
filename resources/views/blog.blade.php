@extends('layouts.app')
    <h1 class="text-2xl font-bold text-center mt-20 font-mono">
@section('content')
    <h1 class="text-2xl font-bold text-center mt-20 font-mono">
        <?= esc($title) ?>
    </h1>
    <div class="text-center mt-20 max-w-3xl mx-auto font-mono text-s">
    <?php if (!empty($body)): ?>
        <?php
        // 2回以上の改行で段落分割
        $paragraphs = preg_split("/\n{2,}/", $body);
        foreach ($paragraphs as $p) {
            echo '<p style="margin-bottom:1.5em;">' . nl2br(htmlspecialchars(trim($p))) . '</p>';
        }
        ?>
    <?php else: ?>
        <div class="text-red-500 mb-2">APIから本文を取得できませんでした。</div>
    <?php endif; ?>
    </div>
@endsection