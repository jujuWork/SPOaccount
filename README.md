#ルール

##HTML コーディング
1. HTMLをコーディングする際は、できるだけセマンティックなHTMLタグを使用してください。
            ```
            例：
            
            <header>
            <nav>
            <main>
            <aside>
            <article>
            <section>
            <footer>
            ```

<div>タグだけで構成しないようご注意ください。

2. HTMLタグにクラス名を付ける際は、内容に関連した分かりやすい名称を設定してください。
例：

      ```
      <header>
        <div class="city">Tokyo</div>
        <div class="prefecture">Kanto</div>
      </header>
      ```

3. ファイル管理をしやすくするため、HTMLファイルは必ず**.php**で保存してください。

4. フォルダ内の画像をHTMLに読み込む際は、以下の書き方を使用してください。


     ```
     例：
         <img src="<?php echo htmlspecialchars(get_template_directory_uri() . '/assets/icons/call.png'); ?>" alt="telephone">
     ```


6. 大きい背景画像を読み込む際は、PNGやJPGではなく、.webp形式に変換して使用することをおすすめします。





##CSS コーディング

1. ボックスを作る時は、ブラウザのレスポンシブを良くするために Flexbox か Grid を使ってください。

2 .サイトをスタイリングする時は、できるだけシンプルな CSS か SCSS を使い、ファイル名も分かりやすく分けてください。

       
      ```
       例：
        header.css

        style.css

        top-page.css
      ```

3. CSS を書くときは、新しいコンテナのスタイルを書く前に 1 行スペース を入れてください。

      ```
       例：
      h1 {
        color: white;
      }

      h2 {
        color: blue;
      }
      ```

4. .css ファイルの中で SCSS っぽい書き方をしたい時は、ファイル名を変えずに SCSS を使えるよう案内しますので、先に サンチェス（私）に聞いてください。

5. SCSS を使う場合は、下のようなネストの書き方を守ってください。

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

      ```
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
      ```
