<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ編集</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">店舗一覧</a></div>
            </div>
        </nav>
    </header>

    <div>
        <h1>店舗登録フォーム</h1>
    </div>

    <!-- Main[Start] -->
    <form method="POST" action="update.php">
        <div class="tempo">
            <fieldset>
                <legend>店舗登録フォーム</legend>
                <label>店番：<input type="text" name="tempo_no" value="<?= $result['tempo_no'] ?>"></label><br>
                <label>店舗名：<input type="text" name="tempo_name" value="<?= $result['tempo_name'] ?>"></label><br>
                <label>郵便番号：<input type="text" name="postcode" value="<?= $result['postcode'] ?>"></label><br>
                <label>住所：<input type="text" name="address" value="<?= $result['address'] ?>"></label><br>
                <label>電話番号：<input type="text" name="phone_no" value="<?= $result['phone_no'] ?>"></label><br>
                <label>開店日：<input type="date" name="open_date" value="<?= $result['open_date'] ?>"></label><br>
                <label>閉店日：<input type="date" name="close_date" value="<?= $result['close_date'] ?>"></label><br>
                <input type="hidden" name="id" value="<?= $result["id"] ?>">
                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->

</body>

</html>
