<?php
    // Подключение к базе данных
    $db=mysqli_connect('localhost','root','root','ad_board');
    mysqli_select_db($db,'ad_board');

    // Проверка подключения
    if ($db->connect_error) {
        die("Ошибка подключения: " . $db->connect_error);
    }

    if (isset($_GET['id'])) {
        $advertisementId = $_GET['id'];

        // Удаление объявления по ID
        $deleteSql = "delete from advertisements where id = $advertisementId";

        if ($db->query($deleteSql) === TRUE) {
            echo "Объявление успешно удалено.";
        } else {
            echo "Ошибка при удалении объявления: " . $db->error;
        }
    }

    $db->close();
?>
