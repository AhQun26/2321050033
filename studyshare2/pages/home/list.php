<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if(!isset($_GET['page'])){
            $page=1; 
        } 
        else{
            $page =$_GET['page'];
        }
        $offset = ($page - 1) * 4;
    ?>
    <div class="main">
        
        <div class="main_right">
            <div class="document">
                <div class="document_top">
                    <h1>Recent Documents</h1>
                    <div>
                        <p><font color="#757575">Your most recent uploads and dowloads</font></p> 
                        <a href="index.php?page_layout=created_at"><u>>> More</u></a>  
                    </div> 
                </div>
                <div class="document_main">
                    <?php 
                        $sql_recent="SELECT d.* ,date(d.created_at) as 'date',s.name as 'ten_mon', u.fullname as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        ORDER BY created_at DESC LIMIT 4 OFFSET $offset;";
                        $result_recent= mysqli_query($conn2,$sql_recent);
                        while($row_recent= mysqli_fetch_array($result_recent)){
                    ?>
                    <a href="../document/detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../assets/images/img_file_test.jpg" alt="">
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
                <div class="document_top">
                    <h1>Popular Documents</h1>
                    <div>
                        <p><font color="#757575">Most downloaded files</font></p> 
                        <a href="index.php?page_layout=download_count"><u>>> More</u></a>  
                    </div> 
                </div>
                    <div class="document_main">
                        <?php 
                            $sql_popular="SELECT d.*,date(d.created_at) as 'date' ,s.name as 'ten_mon', u.fullname as 'ten_user' 
                            FROM subjects s JOIN documents d ON s.id = d.subject_id 
                            JOIN users u ON d.user_id = u.id ORDER BY download_count DESC 
                            LIMIT 4 OFFSET $offset;";
                            $result_popular= mysqli_query($conn2,$sql_popular);
                            while($row_popular= mysqli_fetch_array($result_popular)){
                        ?>
                        <a href="../document/detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <h2 style="color: black;"> <?php echo $row_popular['title']?> </h2>
                                <p><font color="#757575"><u><?php echo $row_popular['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_popular['ten_user']?></font></p>                                
                                <p style="margin-bottom: 0px"><font color="#757575"><?php echo $row_popular['date']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 110px"><font color="#757575"><i class="fa-solid fa-download"></i> <?php echo $row_popular['download_count']?></font></p>
                                    <p><font color="#757575"><i class="fa-regular fa-eye"></i> <?php echo $row_popular['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                        </a>
                        <?php } ?>
                    </div>
                <div class="document_top">
                    <h1>Top Views</h1>
                    <div>
                        <p><font color="#757575">Most viewed documents</font></p> 
                        <a href="index.php?page_layout=view_count"><u>>> More</u></a>  
                    </div> 
                </div>
                <div class="document_main">
                    <?php 
                        $sql_view="SELECT d.*,date(d.created_at) as 'date' ,s.name as 'ten_mon', u.fullname as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        ORDER BY view_count DESC LIMIT 4 OFFSET $offset;";
                        $result_view= mysqli_query($conn2,$sql_view);
                        while($row_view= mysqli_fetch_array($result_view)){
                    ?>
                    <a href="../document/detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <h2 style="color: black;"> <?php echo $row_view['title']?> </h2>
                                <p><font color="#757575"><u><?php echo $row_view['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_view['ten_user']?></font></p>                                
                                <p style="margin-bottom: 0px"><font color="#757575"><?php echo $row_view['date']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 110px"><font color="#757575"><i class="fa-solid fa-download"></i> <?php echo $row_view['download_count']?></font></p>
                                    <p><font color="#757575"><i class="fa-regular fa-eye"></i> <?php echo $row_view['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <div class="pagination">
                    <?php 
                        $sql_page= "SELECT COUNT(id) as 'count' FROM documents;";
                        $result_page = mysqli_query($conn2,$sql_page);
                        $count= mysqli_fetch_assoc($result_page);
                        $page_total= $count['count'] / 4; 
                    ?>
                     <?php if ($page > 1){ ?>
                        <a class="page_prev" href="?page_layout=list&page=<?php echo $page - 1 ?>">« Prev</a>
                    <?php } ?>
                    <a class="page_number"><?php echo $page ?></a>
                    <?php if ($page < $page_total){ ?>
                        <a class="page_next" href="?page_layout=list&page=<?php echo $page + 1 ?>">Next »</a>
                    <?php } ?>
                </div>
            </div>
        </div>       
    </div>
</body>
</html>