<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim</title>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 90%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .xoa { 
            color: red; text-decoration: none; font-weight: bold;
         }
        .sua { 
            color: blue; text-decoration: none; font-weight: bold; margin-right: 10px;
        }
        .them {
            color: green; font-weight: bold; background-color: #f0f234;
            padding: 5px 10px; text-decoration: none;
        }
        /* img.poster-img { width: 50px; height: auto; } */
</style>

</head>
<body>
    <h1>Phim</h1>
    <table border =1>
        <tr>
            <th>Tên phim</th>
            <th>Tên đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Tên quốc gia</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql= "SELECT p.*, nd.ho_ten as ten_dao_dien, qg.ten_quoc_gia 
                FROM quoc_gia qg JOIN phim p ON qg.id=p.quoc_gia_id 
                JOIN nguoi_dung nd on p.dao_dien_id = nd.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row["ten_phim"]?></td>
            <td><?php echo $row["ten_dao_dien"]?></td>
            <td><?php echo $row["nam_phat_hanh"]?></td>
            <td><?php echo $row["poster"]?></td>
            <td><?php echo $row["ten_quoc_gia"]?></td>
            <td><?php echo $row["so_tap"]?></td>
            <td><?php echo $row["trailer"]?></td>
            <td><?php echo $row["mo_ta"]?></td>
            <td>
                <a class="sua" href="index2.php?page_layout=updatephim&id=<?php echo $row['id']; ?>">Sửa</a>
                
                <a class="xoa" href="index2.php?page_layout=updatephim&id=<?php echo $row['id']; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>