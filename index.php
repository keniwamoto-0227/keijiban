<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4each_掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <header>
            <div class="header_logo"><img src="4eachblog_logo.jpg"></div>
            <div class="header_list">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
        
        <main>
            <div class="left">
            <h1 class="main_header">プログラミングに役立つ掲示板</h1>
            
            <form method="post" action="insert.php">
                <div class="contactform">
                    <h1>入力フォーム</h1>
                    <div>
                        <label>ハンドルネーム</label>
                        <p><input type="text" class="text" name="handlename"></p>
                    </div>
                    <div>
                        <label>タイトル</label>
                        <p><input type="text" class="text" name="title"></p>
                    </div>
                    <div>
                        <label>コメント</label>
                        <p><textarea cols="35" rows="7" name="comments"></textarea></p>
                    </div>
                    <p><input type="submit" class="submit" value="送信する"></p>
                </div>
            </form>
            <div class="box">
                <h3>タイトル</h3>
                <p>記事内容</p>
            </div>
            <div class="box">
                <h3>タイトル</h3>
                <p>記事内容</p>
            </div>
            </div>
            
            <div class="right">
                <h2 class="sub_title">人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>いま人気のエディタTop5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                <h2 class="sub_title">オススメリンク</h2>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                <h2 class="sub_title">カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
            </div>
        </main>
        
        <footer>
            copyright ©️ internous|4each blog the which provides A to Z about programming.
        </footer>
    </body>
</html>