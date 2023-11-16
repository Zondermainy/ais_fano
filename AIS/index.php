<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="tab-icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <title>Код Фано</title>
</head>

<style>
<?php include 'CSS/reset.css'; ?>
<?php include 'CSS/style.css'; ?>
</style>


<body>
  <div class="gradient-background">
  <h1 class="header">Программа - "Коды Шеннона-Фано"</h1>
    <form action="#" method="POST">
      <input class="input_text" type="text" name="form1" placeholder="Введите символы">
      <input class="input_data" type="submit" name="submit" value="Ввод данных">
    </form>


    <h1 class="result_header">Результат работы программы:</h1>
    <div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form1 = $_POST["form1"];
    echo "<p>" . $form1 . "</p>";
}
    ?>
    </div>
<div class="buttons">
<div class="buttondiv1">
<a href="index_info.php">
  <h1 class="group_list">Список группы</h1>
  <img class="button2" src="info.png" alt="Перейти на новую страницу" style="width:160px; height:160px;">
</a>
</div>
<div class="buttondiv2">
<a href="list_info.php">
  <h1 class="programm_info">Описание программы</h1>
  <img class="button1" src="list.png" alt="Перейти на новую страницу" style="width:160px; height:160px;">
</a>
</div>

</div>
</div>
</body>

</html>