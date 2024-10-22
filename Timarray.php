<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
`   <?php
        function Search($value, $array){
            return(array_search($value,$array));
        }
        $array=array(
            "tình",
            "yêu",
            "và",
            "hận",
            "thù",
        );
        $value=$_POST['search'];
        $kq=Search($value,$array);

        for($i=0,$i<count($array),$i++){
            if ($i=$array[$i]){
                echo "tìm thấy.$value.trong mảng tại index.$array[$i]";
            }else{
                echo "Không tìm thấy value..."
            }
        }
       
    ?>
    <form action="timarray.php" method="POST">
        <div class="nhap">
            <lable>Search:</lable>
            <input type="text" name="search" id="search" value="<?php echo $value; ?>" >
        </div>
        <div class=btn>
            <button>OK</button>
        </div>
    </form>
    <div class="kq"><?php echo"$kq" ?>
</body>
</html>