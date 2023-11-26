<script>
    function enableform(id)
    {
        let selector = "#form" + id;
        let form=document.querySelector(selector);
        form.style.display="block";
    }
</script>
<?php

    // Подключение к базе данных
    $db=mysqli_connect('localhost','root','root','ad_board');
    mysqli_select_db($db,'ad_board');

    // Проверка подключения
    if ($db->connect_error) {
        die("Ошибка подключения: " . $db->connect_error);
    }

    // SQL-запрос для выбора всех объявлений
    $sql_add = "select id, title, description, created_at from advertisements";
    $result_add = mysqli_query($db,$sql_add);

    // Проверка и вывод объявлений
    if ($result_add->num_rows > 0) {
        echo '<div class="d-container">';
        while ($row = $result_add->fetch_assoc()) {
            echo "<div class='d-card'>";
            echo "<p class='d-title'>". $row["title"]."</p>";
            echo "<p class='d-description'>".$row["description"]."</p>";
            echo "<p class='d-date'>". $row["created_at"]."</p>";
            // echo "<a href='edit_advertisement.php?id=" . $row["id"] . "'>Редактировать  </a>";
            echo "<span onclick='enableform(".$row["id"].")'> Включить форму редактирования </span>";
            echo "<a href='delete_advertisement.php?id=" . $row["id"] . "'>Удалить  </a>";
            echo "</div>";
            echo "
            <form class='editform' id='form".$row["id"]."' style='display:none' method='get' action='edit_advertisement.php'>
                <input type='text' name='title' value='".$row["title"]."' placeholder='Заголовок' required><br>
                <textarea name='description' placeholder='Описание' required>".$row["description"]."</textarea><br>
                <input type='timestamp' name='created_at' value='". $row["created_at"]."' placeholder='Создано' required><br>
                <input type='hidden' name='id' value='".$row["id"]."'>
                <button type='submit' name='editAdvertisement'>Сохранить</button>
            </form>";
        }
        echo '</div">';
    } else {
        echo "0 results";
    }

    // Закрытие соединения с базой данных
    $db->close();
?>
