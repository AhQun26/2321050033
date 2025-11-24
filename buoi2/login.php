<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2 - php</title>
    <style>
        .warning {
            color: red;
        }
    </style>
</head>
<body>
    <form action ="login.php" method ="post"> <!--không truyền gì thì sẽ là get sẽ bị lộ thông tin lên url-->
        <h1> Đăng nhập </h1>
        <div>
            Tên đăng nhập: <input type="text" name="username" placeholder="Nhập tên đăng nhập">
        </div>
        <div>
            Mật khẩu: <input type="password" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>
    </form>
    <?php 
        // lấy dữ liệu từ form
        // $tenDangNhap = $_POST['username']; // ở trên dùng method gì thì ở dưới dùng cái đó + name ở input
        // $matKhau = $_POST['password'];
        // echo $tenDangNhap . "<br>";
        // echo $matKhau . "<br>";

        // nếu tên đăng nhập = admin và mật khẩu = 123 thì cho phép người dùng vào trang trang chủ
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $tenDangNhap = $_POST['username']; 
            $matKhau = $_POST['password'];
            if($tenDangNhap == "admin" && $matKhau == "123") {
                header('Location: trangchu.php'); //chuyển hướng trang
            } else {
                echo "<; class='warning'> Đăng nhập thất bại! </p>";
            }
        }
    ?>
    
</body>
</html>