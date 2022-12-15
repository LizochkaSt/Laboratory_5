<?php
    require("db.php");

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET["id"];

        $flower = $db -> query("SELECT * FROM flowers WHERE id=$id")-> fetchALL(PDO::FETCH_ASSOC);

        if (count($flower) > 0){
            $flower = $flower[0];
        }
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $photo = $_POST['imgflower'];
        $name = $_POST['nameflower'];
        $cost = $_POST['costflower'];

        $db -> query("UPDATE flowers SET name='$name', cost='$cost', photo='$photo' WHERE id=$id");

        echo "<script>alert('Данные успешно обновлены'); location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Изменение данных</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgflower" value="<?php echo $flower["photo"]?>">
        <br>
        <br>
        <input type="text" name="nameflower" value="<?php echo $flower["name"]?>">
        <br>
        <br>
        <input type="text" name="costflower" value="<?php echo $flower["cost"]?>">
    
        <input type="hidden" name="id" value="<?php echo $flower["id"]?>">
        <br>
        <br>
        <button type="submit" name="submit">Сохранить</button>
    </form>
</body>
</html>