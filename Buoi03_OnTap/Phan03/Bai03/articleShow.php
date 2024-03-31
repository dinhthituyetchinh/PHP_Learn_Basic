<?php
include "./header.php";
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

if(isset($_POST["cmt"]))
{
    $_SESSION["comment"] = $_POST["cmt"];

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
    <b>Comments</b> 
    <p> <?php if(isset($_SESSION["comment"]))  echo $_SESSION["comment"];
       // header("location: ./articleShow");
    ?></p>
    <?php
    if(isset($_SESSION["username"]))
    {
        ?>
           <form method="post" action="">
           <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="cmt"></textarea>
            <label for="floatingTextarea2">Comments</label>
            <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Submit Comment</button>
            </div>
           </form>
        <?php
    }
    
    ?>
</body>
</html>