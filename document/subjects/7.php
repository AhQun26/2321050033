<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div href="" class="header_logo">
            <img src="../../../assets/icons/logo.svg" width="40px">
            <h2>StudyShare</h2>
        </div>
        <div class="header_feature">
            <div class="header_feature_search">
                <form action="search.php" onsubmit="return checkSubmit()" method="get">
                    <div class="header_feature_search_input">
                        <input type="text" placeholder="Search documents..." id="search" name="keyword">
                        <button>
                            <i href="" class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="header_feature_search_combobox">
                        <select id="combobox" name="combobox" onchange="goPage()">                            
                            <option >Chọn môn học</option>
                            <option value="0">Tất cả môn học</option>
                            <?php 
                                $sql_subject="SELECT * FROM `subjects`";
                                $result_subject= mysqli_query($conn,$sql_subject);
                                while($row_subject= mysqli_fetch_array($result_subject)) {  
                            ?>
                                <option value= <?php echo $row_subject["id"] ?>> <?php echo $row_subject["name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="header_feature_account">
                <i href="" class="fa-regular fa-bell"></i>
                <i href="" class="fa-regular fa-user"></i>
                <button href="" class="header_feature_account_upload">
                    Upload
                </button>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main_left">
            <nav>
                <ul  class="main_left_category">
                    <li><a class="" href=""><i class="fa-regular fa-house"></i> Home</a></li>
                    <li><a class="" href="../user/my_documents.php"><i class="fa-regular fa-folder"></i> My Documents</a></li>
                    <li><a class="" href=""><i class="fa-regular fa-star"></i> Favorites</a></li>
                    <li><a class="" href=""><i class="fa-regular fa-clock"></i> Recent</a></li>
                    <li><a class="" href=""><i class="fa-solid fa-users"></i> Shared with me</a></li>
                </ul>
                <ul  class="main_left_setting">
                    <li><a href=""><i class="fa-solid fa-gear"></i> Setting</a></li>
                </ul>
            </nav>
        </div>
        <div class="main_right">
            <p><font color="#757575" size="5">View Design System</font></p>
                <br>
            <div class="document">
                <div class="document_top">
                    <div class="document_topleft">
                        <h1>Recent Documents</h1>
                        <p><font color="#757575">Your most recent uploads and dowloads</font></p>
                        <div>
                            <button href="" class="all">All</button>
                            <button href="" class="PDF">PDF</button>
                            <button href="" class="Slides">Slides</button>
                            <button href="" class="Exams">Exams</button>
                            <button href="" class="Notes">Notes</button>
                        </div>
                    </div>
                    <a href="../user/upload.php">
                    <div class="document_topright">
                        <button>
                            <i class="fa-solid fa-upload"></i>
                            Upload Document
                        </button>
                    </div>
                    </a>  
                </div>
                <div class="document_main">
                    <?php 
                        $sql_recent="SELECT d.* ,s.name as 'ten_mon', u.name as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        where s.id =7 ORDER BY created_at DESC LIMIT 4 OFFSET $offset;";
                        $result_recent= mysqli_query($conn,$sql_recent);
                        while($row_recent= mysqli_fetch_array($result_recent)){
                    ?>
                    <a href="detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <button href="" class="<?php echo $row_recent['genre'] ?>"><?php echo $row_recent['genre'] ?></button>
                            
                                <h1 style="height: 80px; color: black;"> <?php echo $row_recent['title']?> </h1>
                                <p><font color="#757575"><u><?php echo $row_recent['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_recent['ten_user']?></font></p>                                
                                <p><font color="#757575"><?php echo $row_recent['created_at']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 50px"><font color="#757575">Dowload: <?php echo $row_recent['download_count']?></font></p>
                                    <p><font color="#757575">View: <?php echo $row_recent['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <div class="document_topleft">
                        <h1>Popular Documents</h1>
                        <p><font color="#757575">Most downloaded files</font></p>
                        <!-- <div>
                            <button href="" class="all">All</button>
                            <button href="" class="PDF">PDF</button>
                            <button href="" class="Slides">Slides</button>
                            <button href="" class="Exams">Exams</button>
                            <button href="" class="Notes">Notes</button>
                        </div> -->
                </div>
                <a href="detail.php">
                    <div class="document_main">
                        <?php 
                            $sql_popular="SELECT d.* ,s.name as 'ten_mon', u.name as 'ten_user' 
                            FROM subjects s JOIN documents d ON s.id = d.subject_id 
                            JOIN users u ON d.user_id = u.id where s.id =7 ORDER BY download_count DESC 
                            LIMIT 4 OFFSET $offset;";
                            $result_popular= mysqli_query($conn,$sql_popular);
                            while($row_popular= mysqli_fetch_array($result_popular)){
                        ?>
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <button href="" class="<?php echo $row_popular['genre'] ?>"><?php echo $row_popular['genre'] ?></button>
                            
                                <h1 style="height: 80px; color: black;"> <?php echo $row_popular['title']?> </h1>
                                <p><font color="#757575"><u><?php echo $row_popular['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_popular['ten_user']?></font></p>                                
                                <p><font color="#757575"><?php echo $row_popular['created_at']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 50px"><font color="#757575">Dowload: <?php echo $row_popular['download_count']?></font></p>
                                    <p><font color="#757575">View: <?php echo $row_popular['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </a>
                <div class="document_topleft">
                        <h1>Top Views</h1>
                        <p><font color="#757575">Most viewed documents</font></p>
                </div>
                <div class="document_main">
                    <?php 
                        $sql_view="SELECT d.* ,s.name as 'ten_mon', u.name as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        where s.id =7 ORDER BY view_count DESC LIMIT 4 OFFSET $offset;";
                        $result_view= mysqli_query($conn,$sql_view);
                        while($row_view= mysqli_fetch_array($result_view)){
                    ?>
                    <a href="detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <button href="" class="<?php echo $row_view['genre'] ?>"><?php echo $row_view['genre'] ?></button>
                            
                                <h1 style="height: 80px; color: black;"> <?php echo $row_view['title']?> </h1>
                                <p><font color="#757575"><u><?php echo $row_view['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_view['ten_user']?></font></p>                                
                                <p><font color="#757575"><?php echo $row_view['created_at']?></font></p>
                                <div style="display: flex">
                                    <p style="padding-right: 50px"><font color="#757575">Dowload: <?php echo $row_view['download_count']?></font></p>
                                    <p><font color="#757575">View: <?php echo $row_view['view_count']?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <div class="document_topleft">
                        <h1>Popular Documents</h1>
                        <p><font color="#757575">Most downloaded files</font></p>
                </div>
                <div class="document_main">
                    <?php 
                        $sql_recent="SELECT d.* ,s.name as 'ten_mon', u.name as 'ten_user' FROM subjects s JOIN documents d ON s.id = d.subject_id JOIN users u ON d.user_id = u.id
                        where s.id =7 ORDER BY download_count DESC LIMIT 4 OFFSET $offset;";
                        $result_recent= mysqli_query($conn,$sql_recent);
                        while($row_recent= mysqli_fetch_array($result_recent)){
                    ?>
                    <a href="detail.php">
                        <div class="card" href="">
                            <div class="card_header">
                                <img src="../../../assets/images/img_file_test.jpg" alt="">
                            </div>
                            <div class="card_main">
                                <button href="" class="<?php echo $row_recent['genre'] ?>"><?php echo $row_recent['genre'] ?></button>
                            
                                <h1 style="height: 80px; color: black;"> <?php echo $row_recent['title']?> </h1>
                                <p><font color="#757575"><u><?php echo $row_recent['ten_mon']?></u></font></p>
                                <p><font color="#757575" ><?php echo $row_recent['ten_user']?></font></p>                                
                                <p><font color="#757575"><?php echo $row_recent['created_at']?></font></p>
                                <p><font color="#757575">Dowload: <?php echo $row_recent['download_count']?></font></p>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <div class="pagination">
                    <?php 
                        $sql_page= "SELECT COUNT(id) as 'count' FROM documents WHERE subject_id=7;";
                        $result_page = mysqli_query($conn,$sql_page);
                        $count= mysqli_fetch_assoc($result_page);
                        $page_total= ceil($count['count'] / 4); 
                        $page_layout= $_GET["page_layout"];
                    ?>
                     <?php if ($page > 1){ ?>
                        <a class="page_prev" href="?page_layout=<?php echo $page_layout ?>&page=<?php echo $page - 1 ?>">« Prev</a>
                    <?php } ?>
                    <a class="page_number"><?php echo $page ?></a>
                    <?php if ($page < $page_total){ 
                    ?>
                        <a class="page_next" href="?page_layout=<?php echo $page_layout ?>&page=<?php echo $page + 1 ?>">Next »</a>
                    <?php } ?>
                </div>
            </div>
        </div>       
    </div>
</body>
</html>