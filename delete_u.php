<?php
session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET["id"];

try {
    $db_name = 'gs_db2'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

// 3.データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_member_table WHERE id= :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);//PARAM_INTなので注意

$status = $stmt->execute(); //実行

$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header("Location: select_u.php");
    exit();
}