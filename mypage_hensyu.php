<?php
mb_check_encoding("utf8");

//セッションスタート
session_start();

//mypage.phpからの導線以外は、『login_error.php』へリダイレクト
if(empty($_POST['form_mypage'])) {
    header("Location:http://localhost/login_mypage/login_error.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src = "4eachblog_logo.jpg">
        <div class = "logout"><a href = "log_out.php">ログアウト</a></div>
    </header>

    <main>
        <form action = "mypage_update.php" method ="post" enctype = "multipart/form-data">
            <div class = "confirm">
                <div class = "kaiin">
                    <h2>会員情報</h2>
                    <p>こんにちは！
                        <?php echo $_SESSION['name'];?> さん
                    </p>
                </div>

                <div class = "gazou">
                    <img src = "<?php echo $_SESSION['picture'];?>">
                </div>

                <div class = "zyoho">
                    <p>氏名：
                        <input type = "text" class = "formbox" size = "30" name = "name"
                        value = "<?php $_SESSION['name']?>" required>
                    </p>

                    <p>メール：
                        <input type = "text" class = "formbox" size ="30" name = "mail" value = "<?php $_SESSION['mail']?>"
                        pattern = "^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </p>

                    <p>パスワード：
                        <input type = "password" class = "formbox" size = "30" name = "password"
                        value = "<?php $_SESSION['password']?>" id = "password" pattern = "^[a-zA-Z0-9]{6,}$" required>
                    </p>
                </div>

                <div class = "comments">
                    <p>
                        <br>
                        <textarea rows = "3" cols = "73" name = "comments" value = "<?php $_SESSION['comments']?>"></textarea>
                    </p>
                </div>


                <div class = "botton">
                        <input type="submit" class ="button1" value ="この内容に変更する"/>
                </div>
            </div>
        </form>
    </main>

    <footer>
        2018 InterNous.inc.All rigths reserved
    </footer>
</body>
</html>
