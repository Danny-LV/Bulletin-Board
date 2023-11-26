<?php
    // Подключение к базе данных
    $db=mysqli_connect('localhost','root','root','ad_board');
    mysqli_select_db($db,'ad_board');


    // Проверка подключения
    if ($db->connect_error) {
        die("Ошибка подключения: " . $db->connect_error);
    }

    // Обработка данных из формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $created_at = $_POST['created_at'];

        // SQL-запрос для вставки данных
        $sql_add = "insert into advertisements (id, title, description, created_at) values (NULL, '$title', '$description', CURRENT_TIMESTAMP())";
        $result_add=mysqli_query($db,$sql_add);

        if ($result_add) {
            echo "Новое объявление успешно создано.";
        } else {
            echo "Ошибка: " . $sql_add . "<br>" . mysqli_error($db);
        }
    }

    // Закрытие соединения с базой данных
    $db->close();
?>
