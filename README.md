【ルール】

1. HTMLをコーディングする際は、できるだけセマンティックなHTMLタグを使用してください。
例：

<header>
<nav>
<main>
<aside>
<article>
<section>
<footer>


<div>タグだけで構成しないようご注意ください。

2. HTMLタグにクラス名を付ける際は、内容に関連した分かりやすい名称を設定してください。
例：

<header>
  <div class="city">Tokyo</div>
  <div class="prefecture">Kanto</div>
</header>


3. ファイル管理をしやすくするため、HTMLファイルは必ず**.php**で保存してください。

4. フォルダ内の画像をHTMLに読み込む際は、以下の書き方を使用してください。
例：

<img src="<?php echo htmlspecialchars(get_template_directory_uri() . '/assets/icons/call.png'); ?>" alt="telephone">


5. 大きい背景画像を読み込む際は、PNGやJPGではなく、.webp形式に変換して使用することをおすすめします。
