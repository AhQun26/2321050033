<?php
    // cokie
    # lưu ở phía người dùng
    # dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "CamTu";

    setcookie($cookieName, $cookieValue, time() + (86400), "/"); // 86400 =

    if(isset($_COOKIE[$cookieName])) {
        echo "cookie đã tồn tại!<br>";
    } else {
        echo "Cookie chưa tồn tại" . "<br>";
    }


    // session 
    # thông tin đăng nhập, giỏ hàng
    session_start(); // bắt buộc phải có
    $_SESSION['name'] = "CamTu 123";
    echo $_SESSION['name'];

?>