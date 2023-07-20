<?php
$id = isset($_GET["id"]) ? $_GET["id"] : null;

require_once("model.php");
$pdo = db_connect();
$result = get_posts_u_by_id($pdo, $_GET["id"]);
require_once("templates/detail_u.php");
