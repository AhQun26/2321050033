<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        display: flex;
        margin: 0;
        align-items: center;
        justify-content: center;
        
    }

    th,td {
        border: 1px solid black;
        border-radius: 5px;
        padding: 8px;
        text-align: left;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .xoa {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }
        
    .sua {
            color: blue;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }
</style>
<body>
    <div>
        <div style="justify-content: space-around; display: flex; text-align: center; width: 100%; align-items: center;">
            <h1>Danh sách thể loại</h1>

            <div>
                <a class="them" href="index.php?page_layout=themtheloai">Thêm thể loại</a>
            </div>
            
        </div>
    </div>
    <table border =1>
        <tr>
            <th>Tên thể loại</th>
            <th>Chức năng</th>
        </tr>
        </tr>
        <?php
            include("connect.php");
            $sql= "select * from the_loai ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row["ten_the_loai"]?></td>
            <td>
                <a class="sua" href="index2.php?page_layout=updatetheloai&id=<?php echo $row['id']; ?>">Sửa</a>
                <a class="xoa" href="index2.php?page_layout=xoatheloai&id<?php echo $row["id"] ?>;">Xóa</a>
            </td>
        <?php } ?>
    </table>
</body>
</html>