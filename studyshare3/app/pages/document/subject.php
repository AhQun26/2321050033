<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $id= $_GET['id'];
        if(!isset($_GET['page'])){
            $page=1; 
        } 
        else{
            $page =$_GET['page'];
        }
        $offset = ($page - 1) * 12;
    ?>
    <div class="main">
        </div>
        <div class="main_right">
            <div class="document">
                <div class="document_top">
                    <h1><?php
                            $sql_subject="SELECT * FROM `subjects` where id=$id";
                            $result_subject= mysqli_query($conn,$sql_subject);
                            $subject= mysqli_fetch_assoc($result_subject);
                            echo $subject['name']; ?></h1> 
                            <br>
                </div>
                <div class="document_main">
                    <?php 
                        $sql_recent="SELECT d.* ,date(d.created_at) as 'date',s.name as 'ten_mon', u.fullname as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        where s.id=$id ORDER BY created_at DESC LIMIT 4 OFFSET $offset";
                        $result_recent= mysqli_query($conn,$sql_recent);
                        while($row_recent= mysqli_fetch_array($result_recent)){
                    ?>
                    <a href="detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <h2 style="color: black;"> <?php echo $row_recent['title']?> </h2>
                                <p><font color="#757575"><u><?php echo $row_recent['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_recent['ten_user']?></font></p>                                
                                <p style="margin-bottom: 0px"><font color="#757575"><?php echo $row_recent['date']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 110px"><font color="#757575"><i class="fa-solid fa-download"></i> <?php echo $row_recent['download_count']?></font></p>
                                    <p><font color="#757575"><i class="fa-regular fa-eye"></i> <?php echo $row_recent['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                  <div class="document_main">
                    <?php 
                        $sql_recent="SELECT d.* ,date(d.created_at) as 'date',s.name as 'ten_mon', u.fullname as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        where s.id=$id ORDER BY created_at DESC LIMIT 4 OFFSET ".($offset+4);
                        $result_recent= mysqli_query($conn,$sql_recent);
                        while($row_recent= mysqli_fetch_array($result_recent)){
                    ?>
                    <a href="detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <h2 style="color: black;"> <?php echo $row_recent['title']?> </h2>
                                <p><font color="#757575"><u><?php echo $row_recent['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_recent['ten_user']?></font></p>                                
                                <p style="margin-bottom: 0px"><font color="#757575"><?php echo $row_recent['date']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 110px"><font color="#757575"><i class="fa-solid fa-download"></i> <?php echo $row_recent['download_count']?></font></p>
                                    <p><font color="#757575"><i class="fa-regular fa-eye"></i> <?php echo $row_recent['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <div class="document_main">
                    <?php 
                        $sql_recent="SELECT d.* ,date(d.created_at) as 'date',s.name as 'ten_mon', u.fullname as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        where s.id=$id ORDER BY created_at DESC LIMIT 4 OFFSET ".($offset+8);
                        $result_recent= mysqli_query($conn,$sql_recent);
                        while($row_recent= mysqli_fetch_array($result_recent)){
                    ?>
                    <a href="detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <h2 style="color: black;"> <?php echo $row_recent['title']?> </h2>
                                <p><font color="#757575"><u><?php echo $row_recent['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_recent['ten_user']?></font></p>                                
                                <p style="margin-bottom: 0px"><font color="#757575"><?php echo $row_recent['date']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 110px"><font color="#757575"><i class="fa-solid fa-download"></i> <?php echo $row_recent['download_count']?></font></p>
                                    <p><font color="#757575"><i class="fa-regular fa-eye"></i> <?php echo $row_recent['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="pagination">
                    <?php 
                        $sql_page= "SELECT COUNT(id) as 'count' FROM documents WHERE subject_id=$id;";
                        $result_page = mysqli_query($conn,$sql_page);
                        $count= mysqli_fetch_assoc($result_page);
                        $page_total= $count['count'] / 12; 
                    ?>
                     <?php if ($page > 1){ ?>
                        <a class="page_prev" href="?page_layout=<?php echo $_GET['page_layout'] ?>&id=<?php echo $id ?>&page=<?php echo $page - 1 ?>">« Prev</a>
                    <?php } ?>
                    <a class="page_number"><?php echo $page ?></a>
                    <?php if ($page < $page_total){ 
                    ?>
                        <a class="page_next" href="?page_layout=<?php echo $_GET['page_layout'] ?>&id=<?php echo $id ?>&page=<?php echo $page + 1 ?>">Next »</a>
                    <?php } ?>
                </div>
            </div>
        </div>       
    </div>
</body>
</html>