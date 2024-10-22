<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .red{
        color: red;
        font-size: 30px;
    }
    .orange{
        color: orange;
        font-size: 30px;
    }
    .green{
        color: green;
        font-size: 30px;
    } 
</style>
<body>
    <!-- <?php
     $fruits=array("Banana","orange","mango");
        echo $fruits[0]."<br>",
            $fruits[1]."<br>",
            $fruits[2];
    ?> -->

    <!-- <?php
        $fruits=array("Banana","orange","mango");
        foreach($fruits as $fruit){
            echo "$fruit <br>";
        }
    ?> -->
<!-- 
    <?php
        $fruits=array("Banana","orange","mango");

        for ($i=0;$i<count($fruits);$i++){
            echo "<p class= 'color'> $fruits[0] </p>";
            echo "<br>";
        }
    ?> -->

    <!-- <?php
        $fruits=array("Banana","orange","mango");

        for ($i=0;$i<count($fruits);$i++){
            if ($fruits[$i]== $fruits[0]){
                echo "<p class= 'red'> $fruits[$i] </p>";
            }
            elseif ($fruits[$i]== $fruits[1]){
                echo "<p class= 'blue'> $fruits[$i] </p>";
            }
            else{
                echo "<p class= 'green'> $fruits[$i] </p>";
            }
            echo "<br>"; 
        }
    ?>  -->

    <!-- <?php
        $colors= array('red','orange','green');
        foreach($colors as $color)
            echo "<p class=$color>$color</p>";
    ?> -->
    
<!-- 
    <?php
        $courses= array(
            'FRONTEND'=> array(
                                'Title'=>'Học lập trình fontend online',
                                'fee'=> 1200000
            ),
            'BACKEND'=> array(
                                'Title'=>'Học lập trình backend online',
                                'fee'=> 2200000
            )
        );
        foreach ($courses as $key => $value){
            echo"{$key}<br/>";
            echo"{$value['Title']}<br/>";
            echo"{$value['fee']}<br/>";

         }
    ?> -->
   
    <!-- <?php
        $school=array(
            'Student'=> array(
                        'Sv1'=>array(
                            'Mã sv'=> 'Sv01',
                            'Tên'=> 'Phạm Văn A ',
                            'Ngày sinh'=> '14/06/2004',
                            'Giới tính'=> 'Nam'),
                        'Sv2'=>array(
                            'Mã sv'=> 'Sv02',
                            'Tên'=> 'Phạm Văn A',
                            'Ngày sinh'=> '14/06/2004',
                            'Giới tính'=> 'Nam'),
                        'Sv3'=>array(
                            'Mã sv'=> 'Sv03',
                            'Tên'=> 'Phạm Văn A ',
                            'Ngày sinh'=> '14/06/2004',
                            'Giới tính'=> 'Nam'),
                        'Sv4'=>array(
                            'Mã sv'=> 'Sv04',
                            'Tên'=> 'Phạm Văn A ',
                            'Ngày sinh'=> '14/06/2004',
                            'Giới tính'=> 'Nam'),
            ),
            'teacher'=> array(
                'GV1'=>array(
                    'Mã gv'=> 'GV01',
                    'Tên'=> 'Phạm Văn A ',
                    'Ngày sinh'=> '14/06/2004',
                    'Giới tính'=> 'Nam'),
                'GV2'=>array(
                    'Mã gv'=> 'GV02',
                    'Tên'=> 'Phạm Văn A ',
                    'Ngày sinh'=> '14/06/2004',
                    'Giới tính'=> 'Nam'),
            )
                );
    ?>
    <div id="content">
    <?php
        foreach($school as $key =>$value){
    ?>
        <h1 class="list-title"> <?php echo $key; ?> </h1>
        <ul class="list_school">
            <?php foreach ($value as $key1=$value1){
            ?>
            <li>
                <p><span> Mã sv: </span><?php echo $key1;?></p>
                <p><span> Tên: </span><?php echo $value1['Tên'];?></p>
                <p><span> Mã sv: </span><?php echo $value1['Ngày sinh'];?></p>
                <p><span> Mã sv: </span><?php echo $value1['Giới tính'];?></p>
            </li>
            <?php
            } ?>
        </ul>
        <?php
    }?>
    </div> -->

    <!-- in_array: timf phần tử có trong danh sách
     if (in_array("value","mảng")){}-->

     <!-- Tìm kiếm giá trị và trả về key tương ứng array_search -->

   

</body>
</html>