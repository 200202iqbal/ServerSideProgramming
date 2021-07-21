<?php
//セッションを開始
session_start();

//もしセッションにユーザがあれば
if(isset($_SESSION["user"]))
{
    //セッションからユーザを消す
    unset($_SESSION["user"]);
    //ログイン画面に戻す
    header("Location:login.php");
}

?>