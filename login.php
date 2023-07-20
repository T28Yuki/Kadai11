<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/styles.css" />
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン</title>
</head>

<body>

    <div class="login">
        <h1>Login</h1>
        <form name="form1" action="login_act.php" method="post">
        <input type="text" name="lid" placeholder="Username" required="required" />
        <input type="password" name="lpw" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        </form>
    </div>


</body>

</html>