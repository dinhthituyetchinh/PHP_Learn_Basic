<?php
include "./Article.php";

function getID($id)
{
    $obj = new Article();
    $d = $obj->getAll("./data.csv");
    foreach($d as $i)
    {
        if($id == $i->id)
        {
            return $i;
        }
    }
}

if(isset($_GET['id']))
{
   $item = getID($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $item->title?></h1>
    <p><?php echo $item->content?></p>
    <?php
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        ?>
            <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
            <button type="button" class="btn btn-primary">Primary</button>
            </div>
        <?php
    }
    
    ?>
</body>
</html>