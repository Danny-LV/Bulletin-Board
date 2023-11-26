<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Доска объявлений</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
        <style>
            .d-container {
                margin: 20px;
            }

            .d-card {
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 15px;
                margin-bottom: 20px;
            }

            .title {
                text-align: center;
                color: #202020;
            }

            .d-title {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 10px;
                color: #2e2e2e;
            }

            .d-description {
                margin-bottom: 10px;
                color: #454545;
            }

            .d-date {
                color: #888;
            }
            .d-btn {
                background-color: #337ab7;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 3px;
                cursor: pointer;
            }
            .editform{
                position:absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 35vh;
                margin: 0;
                /* background-color: #f5f5f5;*/
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0px 0px 5px 0px #ccc;
                width: 300px; /* Ширина формы, можно настроить по своему усмотрению */
            }

            .editform h2 {
                text-align: center;
            }

            .editform input[type="text"],
            .editform textarea {
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .editform button {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                font-weight: bold;
            }

            .editform button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <section class="section">
            <div class="container">
                <h1 class="title">Доска объявлений</h1>
            </div>
        </section>

        <div class="container">
            <!-- Здесь будут отображаться объявления -->
            <div id="advertisements">
                <?php 
                   require_once('advertisements.php');
                //    require_once('edit_advertisement.php');
                   require_once('delete_advertisement.php');
                ?>
            </div>

        </div>
    </body>

</html>
