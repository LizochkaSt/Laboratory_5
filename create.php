
 <?php
   require("db.php");

   if (isset($_POST['submit'])){
    $name = $_POST['nameflower'];
    $cost = $_POST['costflower'];
    $photo = $_POST['imgflower'];

    $db -> query("INSERT INTO flowers (name, cost, photo) VALUES('$name', '$cost', '$photo')");
    echo"<script> alert('Цветок успешно создан'); </script>";
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgflower" placeholder="url цветка">
        <br>
        <br>
        <input type="text" name="nameflower" required placeholder="введите название цветка">
        <br>
        <br>
        <input type="text" name="costflower" required placeholder="введите стоимость цветка">
        <br>
        <br>
        <button type="submit" name="submit">Создать</button>
    </form>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>