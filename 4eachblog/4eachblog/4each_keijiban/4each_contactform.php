<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>問合せフォーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
    <div class="logo"><img src="4eachblog_logo.jpg"></div>
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <a href="4each_contactform.php"><li>問い合わせ</li></a>
            <li>その他</li>
        </ul>
     </header>
        <br>
        <br>
        <br>
        
        <div class="left_main">
<h1>プログラミングに役立つ掲示板</h1>

<div class="nixyuurixyoku">
    <div class="kz"><h2>入力フォーム</h2></div>
        
<form method="post" action="insert2.php">
    
        
            <div class="xz">
    <label><p>ハンドルネーム</p><input type="text" name="handlename" size="40"></label>
            </div>
            
            <div class="xz">
    <label><p>タイトル</p>
        <input type="text" name="title" size="40"></label>
            </div>
        
        <div class="xz">
        <label><p>コメント</p>
        <textarea name="comments" rows="10" cols="60"></textarea>
            </label>
            </div>
            
        <input type="submit" class="submit" value="送信する">
    
        </form>
        </div>
            
        <?php

            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=nemu;host=localhost;","root","mysql");
            $stmt = $pdo->query("select * from 4each_keijiban");
            
            
?>

        <?php
        while ($row = $stmt->fetch()) {
            echo "<div class='hako1'>";
            echo"<h3>".$row{'title'}."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
}
            
?>

        
            
            
            </div>
        
        
        
        
        <div class="right">
        <h2>人気の記事</h2>
        <ul>
            <li>PHP オススメの本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
            </ul>
            <br>
            <h2>オススメのリンク</h2>
            <ul>
            <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
            </ul>
            <br>
            <h2>カテゴリ</h2>
            <ul><li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
            </ul>
        </div>
        <footer>
        copyright internous |　4each blog is the one which provides A to Z about programming.
        </footer>
    </body>



</html>