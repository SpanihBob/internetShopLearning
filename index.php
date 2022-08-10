<?
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once "$path/system/db.php";

    // echo "<pre>";    //посмотрели что использовать
    //     print_r($_SERVER);
    // echo "<pre>";


    // если /  или /start , переходим на /public/start.php
    if(empty($_SERVER['REDIRECT_URL']) || $_SERVER['REDIRECT_URL']=="/start") {
        require_once "$path/public/start.php";
    }
    // иначе, если страницы не существует переходим на 404
    else {
        require_once "$path/public/404.php";
    }
?>