<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content{
        margin-left: 300px;
    }
</style>
<body>

    <?php 
     session_start();
        // Kiểm tra nếu có thông tin được gửi từ form
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Lấy thông tin từ form
            $proName=$_POST['proName'];
            $proPrice=$_POST['proPrice'];
       
    //    Thêm sản phẩm vào mảng trong session
    if (!empty($proName) && !empty($proPrice)) {
        if (!isset($_SESSION['products'])){
                $_SESSION['products']=[]; #khởi tạo mảng nêú chưa tồn tại
        }
    }
        // Thêm sản phẩm mới vào mảng
        array_push($_SESSION['products'],['name' => $proName, 'price' => $proPrice]);
    }
    ?>
    <div class="content">



    

        <h1>Thêm Sản Phẩm mới</h1>
        <form action="Thêm.php" method="POST">
                <label>Tên Sản Phẩm: </label>
                <input type="text" id="proName" name="proName">
                <label style=" margin-left: 10px">Giá Sản Phẩm: </label>
                <input type="text" id="proPrice" name="proPrice">
                <button>Thêm sản phẩm</button>   
        </form>
        <div id="prolist">
            <h2>Danh Sách Sản Phẩm</h2>
            <ul>
                <?php 
                // Bắt đầu phiên làm việc
                    // session_start();
                    //  Kiểm tra nêu phiên đã có sản phẩm
                    if (isset($_SESSION['products'])){
                        foreach($_SESSION['products'] as $product){
                            echo"<li>{$product['name']}-{$product['price']}VND</li>";
                        }
                    }
                    else{
                        echo"<li>Chưa có sản phẩm nào</li>";
                    };
                ?>
            </ul>
        </div>
    </div>
</body>
</html>