<!DOCTYPE html>
<html>
<head>
    <title>Редактирование объявления</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 5px 0px #ccc;
            width: 300px; /* Ширина формы, можно настроить по своему усмотрению */
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Редактирование объявления</h2>
    <form method="post" action="edit_advertisement.php">
        <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Заголовок" required><br>
        <textarea name="description" placeholder="Описание" required><?php echo $description; ?></textarea><br>
        <input type="timestamp" name="created_at" value="<?php echo $created_at; ?>" placeholder="Создано" required><br>
        <button type="submit" name="editAdvertisement">Сохранить</button>
    </form>
</body>
</html>
