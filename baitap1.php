<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <form action="" method="POST">
        <input type="text" name="keySearch" placeholder="Nhập từ khóa cần tìm">
        <button type="submit" value="search">Tìm</button>
        <button type="submit" name="all">Tất cả</button>
    </form>

    <?php
        $students=array(
            'masv2015487' =>array(
                'Họ  và Tên'=> 'Nguyễn Thị Hồng Loan',
                'Giới tính'=> 'Nữ',
                'Quê Quán'=>'Hiệp Hòa - Bắc Giang',
                'Ngày sinh'=> 1999,
                'Ngành Học'=> 'Công nghệ thông tin'
            ),
            'masv2017501' =>array(
                'Họ và Tên'=> '	Vũ Giang Sơn',
                'Giới tính'=> 'Nam',
                'Quê Quán'=> 'Móng Cái - Quảng Ninh',
                'Ngày sinh'=> 1998,
                'Ngành Học'=> 'Cơ điện tử'
            ),
              'masv2015487' =>array(
                'Họ và Tên'=> 'Bùi Thanh Lam',
                'Giới tính'=> 'Nữ',
                'Quê Quán'=> 'Tiền Hải - Thái Bình',
                'Ngày sinh'=> 2001,
                'Ngành Học'=> 'Kế toán'
            ), 
             'masv2017105' =>array(
                'Họ và Tên'=> 'Phạm Quốc Huy',
                'Giới tính'=> 'Nam',
                'Quê Quán'=> 'Phủ Lý - Hà Nam',
                'Ngày sinh'=> 2000,
                'Ngành Học'=>'Văn hóa học'
            ),
              'masv2017594' =>array(
                'Họ và Tên'=> 'Nguyễn Thanh Phương',
                'Giới tính'=> 'Nữ',
                'Quê Quán'=> 'Ninh Giang - Hải Dương',
                'Ngày sinh'=> 1998,
                'Ngành Học'=> 'Quản trị văn phòng'
            ),
              'masv2018320' =>array(
                'Họ và Tên'=> 'Tô Cát Anh',
                'Giới tính'=> 'Nữ',
                'Quê Quán'=> 'Yên Khánh - Ninh Bình',
                'Ngày sinh'=> 2000,
                'Ngành Học'=> 'Ngôn ngữ Anh'
            ),
              'masv2018794' =>array(
                'Họ và Tên'=> '	Phạm Hồng Quang',
                'Giới tính'=> 'Nam',
                'Quê Quán'=> 'Lục Ngạn - Bắc Giang',
                'Ngày sinh'=> 1998,
                'Ngành Học'=> 'Công nghệ thông tin'
            ),
              'masv2017553' =>array(
                'Họ và Tên'=> 'Hoàng Thu Hạnh',
                'Giới tính'=> 'Nữ',
                'Quê Quán'=> 'Gia Lộc - Hải Dương',
                'Ngày sinh'=> 1999,
                'Ngành Học'=> 'Thiết kế thời trang'
            ),
              'masv2017199' =>array(
                'Họ và Tên'=> 'Trần Nguyễn Ngọc Sơn',
                'Giới tính'=> 'Nam',
                'Quê Quán'=> 'Nho Quan - Ninh Bình',
                'Ngày sinh'=> 1999,
                'Ngành Học'=> 'Cơ khí'
            ),
        );
    

        $filteredStudents = $students;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['search']) && !empty($_POST['keySearch'])) {
                $keyword = strtolower(trim($_POST['keySearch']));
                $filteredStudents = [];

                foreach ($students as $masv => $student) {
                    // So sánh tên, quê quán và ngành học
                    if (strpos(strtolower($student['Ho va ten']), $keyword) !== false || 
                        strpos(strtolower($student['Que Quan']), $keyword) !== false || 
                        strpos(strtolower($student['Nganh hoc']), $keyword) !== false) {
                        $filteredStudents[$masv] = $student;
                    }
                }
            }
        }

        echo "<table border='1'>
                <tr><th>Mã sinh viên</th><th>Họ và tên</th><th>Giới tính</th><th>Quê quán</th><th>Ngày sinh</th><th>Ngành học</th></tr>";
        foreach ($filteredStudents as $masv => $student) {
            echo "<tr>
                    <td>{$masv}</td>
                    <td>{$student['Ho va ten']}</td>
                    <td>{$student['Gioi tinh']}</td>
                    <td>{$student['Que Quan']}</td>
                    <td>{$student['Ngay sinh']}</td>
                    <td>{$student['Nganh hoc']}</td>
                  </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
