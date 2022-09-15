<?php
    $filePath = "napr.txt";
    $file = fopen($filePath, 'r');

    $naprArr = array();
    while(!feof($file)){
        array_push($naprArr, fgets($file));
    }
    sort($naprArr);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dataApp.php" method="post">
        <?php
            foreach($naprArr as $napr){
                echo "<input type=radio value=".$napr ." name=directions />".$napr."<br>";
            }
        ?>
        <input type="submit" value="Відправити">
    </form>
</body>
</html>