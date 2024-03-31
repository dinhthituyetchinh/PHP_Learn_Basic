<?php
if(!isset($_POST["year"]))
   {
    $inputYear = "Nhập năm";
   }
else if(!is_numeric($_POST["year"]))
{
    $inputYear = "Nhập năm phải là số";
}else if(isset($_POST["year"]) < 1975)
{
    $inputYear = "Nhập năm phải lớn hơn hoăc bằng 1975";
}
else{
    if(isset($_POST["year"]))
    {
        if($_POST["year"] % 4 == 0)
        {
            $prize = "Olympic";
            $prize += "Bóng đá châu Âu";
            if($_POST["year"] >= 1996)
            {
                $prize += "Tiger Cup";
            }
        }
        if($_POST["year"] % 4 == 1 || $_POST["year"] == 3)
        {
            $prize = "SEA Games";
        }
        if($_POST["year"] % 4 == 2)
        {
            $prize = "World Cup" ;
            if($_POST["year"] >= 1996)
            {
                $prize += "Tiger Cup";
            }
        }
    }
   
}
?>

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
        <h1>Giải thể thao</h1>
        <form action="#" method="post">
            <div class="dong">
                <span>Nhập năm (năm >= 1975):</span>
                <input type ="text" name = "year" value="<?php
                if(isset($_POST["year"])) 
                {
                    echo $_POST["year"];
                }
                ?>"/>
                <p style="color: red;"><?php echo $inputYear ?></p>
            </div>
            <div class="dong">
                <span>Giải thể thao:</span>
                <input type ="text" value="<?php
                if(!isset($_POST["year"])) 
                { 
                    $prize = " ";
                    echo $prize;
                }
                else{
                    echo $prize;
                }
                ?>"/>    
                
            </div>
            <div class="btn_sub">
                <input type="submit" value="Xem kết quả" />
            </div>
        </form>
    </div>
</body>
</html>