<?php

include "./Article.php";
include "./header.php";

if(!isset($_SESSION["data"]))
{
    $obj = new Article();

    $_SESSION["data"] = $obj->getAll("./data.csv");
}
// echo "<pre>";
//  print_r($_SESSION["data"]);
foreach( $_SESSION["data"] as $item)
{
?>
<div class="card" style="width: 18rem;">
  <img src="./img/<?php echo $item->image ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><?php echo $item->title ?></p>
    <p><?php echo $item->date?></p>
    <a href="./articleShow.php?id=<?php echo $item->id?>" class="card-link">View</a>
  </div>
</div>
<?php
}
include "./footer.php";
?>
