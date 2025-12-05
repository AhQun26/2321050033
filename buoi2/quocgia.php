<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
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
</head>
<body>
    <h1>Quốc gia</h1>
     <table border =1>
        <tr>
            <th>Tên quốc gia</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql= "select * from quoc_gia ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row["ten_quoc_gia"]?></td>
             <td>
            <a class="sua" href="index2.php?page_layout=updatequocgia&id=<?php echo $row['id']; ?>">Sửa</a>

            <a class="xoa" href="index2.php?page_layout=xoaquocgia&id<?php echo $row["id"] ?>;">Xóa</a>
        </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>