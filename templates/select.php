<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>店舗登録フォーム</title>
  <link rel="stylesheet" href="css/styles.css" />

  <style>
    div{
      padding: 10px;
      font-size:16px;
      }
  </style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ホーム画面に戻る</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
  <div class="container jumbotron" style="font-size: 18px; color: white;">
    <a href="detail.php" style="color: white;"></a>
    <div class="view-content"><?= $view ?></div>
  </div>
</div>

<!-- Main[End] -->

</body>
</html>
