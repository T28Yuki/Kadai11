<?php
$view = ""; // $view変数を空の文字列で初期化
require_once("model.php");
$pdo = db_connect();
$view = get_all_posts($pdo);
require_once("templates/select.php");