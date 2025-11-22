<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php 
    // 1. in ra màn hình
    echo "Hello world! <br>";

    echo "Hi <br>";
   
    // 2.Biến
    // Cú pháp: $ + tên biến = giá trị của biến
    $ten = "Anh Quan";
    $tuoi = 21;
    // dấu chấm "." dùng để nối chuỗi, dùng tương tự như js
    echo $ten . " " . $tuoi . " tuổi<br>";

    // 3.Hằng
    define("soPi", "3.14");
    echo soPi . "<br>";

    // 4.Phân biệt ' ' và " "
    // ' ' trả về chuỗi còn " " trả về là giá trị của biến
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";

    // 5.Chuỗi
    // 5.1 Kiểm tra độ dài của chuỗi
    echo strlen($ten) . "<br>";

    // 5.2 Đếm số từ
    echo str_word_count($ten) . "<br>";

    // 5.3 Tìm kiếm vị trí xuất hiện đầu tiên của kí tự trong chuỗi
    echo strpos($ten, "Q"). "<br>";
    
    // 5.4 Thay thế vị trí trong chuỗi
    echo str_replace("Quan", "Qun", $ten) . "<br>";

    // 6 Toán tử
    $soThuNhat =10;
    $soThuHai =5;

        // Phép cộng
        echo $soThuNhat + $soThuHai . "<br>";

        // Phép trừ
        echo $soThuNhat - $soThuHai . "<br>";

        // Phép nhân
        echo $soThuNhat * $soThuHai . "<br>";

        // Phép chia
        echo $soThuNhat / $soThuHai . "<br>";

        // %=
        // echo $soThuNhat %= $soThuHai ;

        // !=  (1 là true)
        echo $soThuNhat != $soThuHai . "<br>";
    
    // 7. Câu điều kiện
    // if("Điều kiện") {
        // logic
    // }
    // elseif ("Điều kiện") {
        // logic
    // }

    // Kiểm tra tổng của số thứ nhất và số thứ 2
        // nếu <15 thì in ra nhỏ hơn 15
        // nếu =15 thì in ra tổng = 15
        // còn lịa in ra lớn hơn 15

        $tong = $soThuNhat + $soThuHai;
        
        if($tong<15){
            echo "<br> nhỏ hơn 15 ";
        }
        elseif($tong==15) {
            echo "<br> tổng = 15 ";
        }
        else{
            echo "<br> lớn hơn 15";
        }
       
    // 8. Switch case
    $color = "red";
    switch ($color) {
        case "red":
            echo "is  red";
            break;
        case "blue":
            echo "is  blue";
            break;
        default:
            echo "no color";
            break;
    }

    // 9. for
    for ($i=0; $i < 100; $i++) {
        echo $i . "<br>";
    } 

    // 10. Mảng
    $mang = ["An", "NA", "VA"];

    // Đếm phần tử
    echo count($mang) . "<br>";
    echo $mang[1];
    // in phần tử
    print_r($mang);
    // thay đổi phần tử
    $mang[0] = "HA";
    // thêm phần tử
    $mang[]= "AQ";
    print_r($mang);
    // xóa phần tử
    unset($mang[3]);
    print_r($mang);
    ?>
</body>
</html>