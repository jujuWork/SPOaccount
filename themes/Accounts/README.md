# ルール


## HTML コーディング
1. HTMLをコーディングする際は、できるだけセマンティックなHTMLタグを使用してください,<div>タグだけで構成しないようご注意ください。
- ```
  例：<header>
  <nav>
  <main>
  <aside>
  <article>
  <section>
  <footer>
 
2. HTMLのクラス名については、こちらの命名ルールに従っていきましょう。
- ```
  https://qiita.com/takahirocook/items/01fd723b934e3b38cbbc
  ```
 例：  
- ```<header class="header">
    <div class="header__logo-container">
        <a href="#home" class="header__logo-link"><h2>Sponago</h2></a>
    </div>
    <nav class="header__nav">
        <ul class="header__nav-list">
            <li class="header__nav-item">
                <a href="#feature" class="header__nav-link">Features</a>
            </li>
            <li class="header__nav-item">
                <a href="" class="header__nav-link">Offices</a>
            </li>
            <li class="header__nav-item">
                <a href="#about" class="header__nav-link">About</a>
            </li>
            <li class="header__nav-item">
                <a href="#recruit" class="header__nav-link">Recruitment</a>
            </li>
            <li class="header__nav-item header__nav-item--last">
                <a href="#inquire" class="header__nav-link">Inquiry</a>
            </li>
        </ul>
    </nav>
</header>
>>>>>>> 62a085e28d714ce01d818171433f6cfa6587d540

3. ファイル管理をしやすくするため、HTMLファイルは必ず[ **.php** ]で保存してください。
4. フォルダ内の画像をHTMLに読み込む際は、以下の書き方を使用してください。

- ```
  例：
  
  <img src="<?php echo htmlspecialchars(get_template_directory_uri() . '/assets/icons/call.png'); ?>" alt="telephone">
5. 大きい背景画像を読み込む際は、PNGやJPGではなく、.webp形式に変換して使用することをおすすめします。


***

## CSS コーディング


1. ボックスを作る時は、ブラウザのレスポンシブを良くするために Flexbox か Grid を使ってください。

2 .サイトをスタイリングする時は、できるだけシンプルな CSS か SCSS を使い、ファイル名も分かりやすく分けてください。
- ```
  例：
  
  header.css
  style.css
  top-page.css

3. CSS を書くときは、新しいコンテナのスタイルを書く前に 1 行スペース を入れてください。
- ```
  例：
  
  h1 {
    color: white;
  }
  -------
  h2 {
    color: blue;
  }

4. .css ファイルの中で SCSS っぽい書き方をしたい時は、ファイル名を変えずに SCSS を使えるよう案内しますので、先に [ サンチェス（私）] に聞いてください。

5. SCSS を使う場合は、下のようなネストの書き方を守ってください。
- ```
  例：
  header {
      nav {
        color: white;
      }
      
      .city {
        color: black;
      }
  }
6. カラー管理は、短縮の変数を使うと便利です。

- ```
  例：
  :root {
  --primary-color: #fff;
  --secondary-color: #000;
  --hover-color: #fdfdfd;
  }
  
  header {
  color: var(--primary-color);
  background-color: var(--secondary-color);
  }
