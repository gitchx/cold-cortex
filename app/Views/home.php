<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Cold Cortex</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./dist/styles.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
  <?php include __DIR__ . '/includes/header.php'; ?>
  <div class="container mx-auto px-4">
    <h1 class="text-5xl font-bold text-center mt-10 font-mono">Cold Cortex</h1>
    <p class="text-center text-slate-600 pt-1 font-bitcount-ink font-bitcount-ink-vars">Dub Techno powered by ❤️</p>
    <img class="w-70 mx-auto pt-8 rounded-full" src="dist/img/cold_cortex.jpg" alt="Logo">
    <div class="text-center mt-8 max-w-3xl mx-auto font-mono text-xs">
      <?php if (!empty($description)): ?>
        <?php
          // 2回以上の改行で段落分割
          $paragraphs = preg_split("/\n{2,}/", $description);
          foreach ($paragraphs as $p) {
            // 1回の改行は<br>、2回以上は<p>でスペース（margin）を追加
            echo '<p style="margin-bottom:1.5em;">' . nl2br(htmlspecialchars(trim($p))) . '</p>';
          }
        ?>
      <?php else: ?>
        <div class="text-red-500 mb-2">APIから説明文を取得できませんでした。</div>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
