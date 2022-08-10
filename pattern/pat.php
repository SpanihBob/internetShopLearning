<?
    $path=$_SERVER['DOCUMENT_ROOT'];// на каждой странице вводим переменную для прописывания пути для подключения include это абсолютный путь
    require_once "$path/system/db.php";       // на каждой странице подключаемся к БД
    
    //echo "<pre>";   
    //print_r($db);   //проверяем подключение к бд
    //echo"</pre>";

    //подключаемся к БД записываем данные
    // $db->query("INSERT INTO `users` (`login`,`password`,`time_signup`) VALUES('vnnv','jvsjvc',123)");
    
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include_once "$path/private/head.php";//подключаем head.php
?>
<body>
   <div class="cont">
    <?php
        include_once "$path/private/header.php";//подключаем header.php
    ?>
    <main>
        
    </main>
    <?php
        include_once "$path/private/footer.php";//подключаем footer.php
    ?>
   </div>
</body>
</html> 