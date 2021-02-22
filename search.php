<?php
session_start();
$id = $_SESSION['id'];

require_once "admin.php";

if (isset($_POST['query'])) {

    $query = "SELECT * FROM information WHERE user_id = $id AND "
}
?>