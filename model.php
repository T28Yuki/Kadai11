<?php
session_start();

function db_connect()
{
    try {
        $db_name = 'gs_db2'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo; //PDOオブジェクトを返す
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

function get_posts_by_id($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id= :id;');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $status = $stmt->execute();

    if ($status === false) {
        $error = $stmt->errorInfo();
        exit('SQLError:' . print_r($error, true));
    } else {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; // $resultを返す
    }
}


function get_posts_u_by_id($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM gs_member_table WHERE id= :id;');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $status = $stmt->execute();

    if ($status === false) {
        $error = $stmt->errorInfo();
        exit('SQL Error:' . $error[2]);
    }

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result; // $resultを返す
}

function get_all_posts($pdo)
{
    //２．データ取得SQL作成
    $stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
    $status = $stmt->execute();

    //３．データ表示

    $view = "";
    if ($status == false) {
        // execute（SQL実行時にエラーがある場合）
        $error = $stmt->errorInfo();
        exit('SQLError:' . print_r($error, true));
    } else {
        // Selectデータの数だけ自動でループしてくれる
        // FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $view .= "<p>";

            $view .= '<a href="detail.php?id=' . $result["id"] . '">';
            $view .= h($result["tempo_no"]) . " : " . h($result["tempo_name"]) . " : " . h($result["postcode"]) .
                " : " . h($result["address"]) . " : " . h($result["phone_no"]);
            $view .= '</a>';

            if (isset($_SESSION['kanri_flg']) && $_SESSION['kanri_flg'] !== '0') {
                $view .= '<a href="delete.php?id=' . $result["id"] . '">';
                $view .= '削除';
                $view .= '</a>';
            }

            $view .= "</p>";
        }
    }

    return $view; // $viewを返す
}

function get_all_posts_u($pdo)
{
    //２．データ取得SQL作成
    $stmt = $pdo->prepare("SELECT * FROM gs_member_table");
    $status = $stmt->execute();

    //３．データ表示
    $view="";
    if ($status==false) {
        //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
    }else{
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "<p>";

        $view .= '<a href="detail_u.php?id=' . $result["id"] . '">';
            $view .=  h($result["name"]) . " : " . h($result["lid"]) . " : " . h($result["lpw"]) .
            " : " . h($result["kanri_flg"]). " : " . h($result["life_flg"]) ; 
        $view .= '<?a>';

        $view .= '<a href="delete_u.php?id=' . $result["id"] . '">';
        $view .= '削除' ; 
        $view .= '<?a>';

        $view .= "</p>";
        }
    }

    return $view; // $viewを返す
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


