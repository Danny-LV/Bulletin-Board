<?php
    // echo "<br> DEBUG - Начало скрипта edit_advertisement";
    // Подключение к базе данных
    $db=mysqli_connect('localhost','root','root','ad_board');
    mysqli_select_db($db,'ad_board');
    // echo "<br> DEBUG - Подключили базу данных";
    // Проверка подключения
    if ($db->connect_error) {
        die("Ошибка подключения: " . $db->connect_error);
    }

    if (isset($_GET['id'])) {
       
        $advertisementId = $_GET['id'];
        // echo "<br> DEBUG - Нашли ID записи ".$advertisementId;
        // Получение данных объявления по ID
        $sql_add = "select id, title, description, created_at from advertisements where id = $advertisementId";
        // echo "<br> DEBUG - составили SQL запрос ".$sql_add;
        $result_add = $db->query($sql_add);

        if ($result_add->num_rows > 0) {
            // echo "<br> DEBUG - запрос прошел успешно, нашлось несколько записей ".$result_add->num_rows;
            $row = $result_add ->fetch_assoc();
            $advertisementId = $row["id"];
            $title = $row["title"];
            $description = $row["description"];
            $created_at = $row["created_at"];
        } else {
            echo "Объявление не найдено.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['editAdvertisement'])) {
        $newTitle = $_GET['title'];
        $newDescription = $_GET['description'];
        $newCreated_at = $_GET['created_at'];

        // Обновление данных объявления
        $updateSql = "update advertisements set title = '$newTitle', description = '$newDescription', created_at = '$newCreated_at' where id = $advertisementId";

        if ($db->query($updateSql) === TRUE) {
            echo "Объявление успешно обновлено.";
        } else {
            echo "Ошибка при обновлении объявления: " . $db->error;
        }

        header("Location: Bulltn_board.php");
        exit();
    }

    $db->close();
?>

