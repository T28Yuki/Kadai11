<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="css/styles.css" />
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>

</head>

<body>
    <header>
    <div class="navbar-container">
        <nav class="navbar login-default">
        <div class="login-fluid">
            <div class="navbar-brand"><a class="navbar-brand" href="select_u.php">ユーザ一覧</a></div>
        </div>
        </nav>

        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="index.php">ホーム画面に戻る</a>
            </div>
        </div>
        </nav>
    </div>
    </header>

    <!-- Main[Start] -->
    <form method="POST" action="insert_u.php" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
        <div class="user">
            <fieldset>
                <legend><span style="font-size: 25px; display: flex; justify-content: center;">ユーザー登録フォーム</span></legend>
                <label>ユーザー名：<input type="text" name="name"></label><br>
                <label>ログインID：<input type="text" name="lid"></label><br>
                <label>パスワード：<input type="text" name="lpw"></label><br>
                <label>管理者ステータス：<input type="text" name="kanri_flg"></label><br>
                <label>ステータス状況：<input type="text" name="life_flg"></label><br>
                <div style="display: flex; justify-content: center;">
                    <button type="submit" class="register" style="font-size: 20px;">登録</button>
                </div>
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->

</body>

</html>