<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Image gallery</h1>
        <div class="image">
        <?php
        $i = 1;
        do{
            echo '<img src = "./img/'.$i.'.jpeg" />';
            $flagShow = 0;
            if(isset($_GET["show"]))
            {
                $flagShow = $_GET["show"];
                $i++;
            }
        } while($i<= 4 && $flagShow == 1);
        ?>
        <a href="./09.php?show=1">Show All</a>
        <a href="./09.php?show=0">Show demo</a>
        </div>
    </div>
</body>
</html>