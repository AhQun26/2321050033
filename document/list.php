<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <style>
        body{
            font-family: "Roboto";
            margin: 0;
            /* background-color: #ffffff; */
            overflow-x: hidden;
        }
        .header{    
            background-color: #ffffff;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px 0 20px;
            /* border-bottom: 2px solid #e0e0e0; */
            position: fixed;
            width: calc(100% - 60px);
        }
        .header_logo{
            display: flex;
            gap: 12px;
        }
        .header_feature{
            width: 80%;
            display: flex;
            justify-content: space-between;
            margin-left: 60px;
        }
        .header_feature_search {
             width: 80%;
        }
        form{
            width: 80%;
            display: flex;
        }
        .header_feature_search_input{
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #f5f5f5;
            padding: 10px 18px;
            border-radius: 30px;
            width: 45%;
            margin-right: 50px;
        }
        .header_feature_search_combobox{
            display: flex;
            align-items: center;
            gap: 10px;   
        }
        .header_feature_search_combobox select,.header_feature_search_combobox i{
            padding: 10px 18px;
            background-color: #f5f5f5;
            border-radius: 30px;
        }
        .header_feature_search input,select, button{
            border: none;
            outline: none;
            background: transparent;
        }
        .header_feature_account{
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .header_feature_account_upload{
            background-color: #ffc107; 
            padding: 10px 22px;
            border-radius: 25px;
        }
        .main{
            display: flex;
            width: 100%;
        }
        .main_left{
            background-color: #ffffff;
            height: auto;
            position: fixed;
            top: 70px;  
            width: 230px;
        }
        .main_left_category{
            display: flex;
            flex-direction: column;
            gap: 30px;
            border-bottom: 2px solid #e0e0e0;
        }
        .main_left_setting{
            margin-top: 40px;
        }
        ul{
            list-style: none;
            padding: 20px 0px 40px 25px;
        }
        a{
            text-decoration: none;
            color: #757575;
        }
        .main_right{
            margin-top: 70px;
            margin-left: 230px;
            width: calc(100% - 230px);
            background-color: #f5f5f5;
            padding: 0px 40px ;
            height: auto;
        }
        .document_top{
            display: flex;
            justify-content: space-between;
        }
        .document_topleft div{
            display: flex;
            gap: 15px;
        }
        .all {
            padding: 5px 15px;
            background-color: #e8f3ff;
            border: 2px solid #2b9af5;
            color: #2b9af5;
            border-radius: 15px ;
        }
        .pdf {
            padding: 5px 15px;
            background-color: #ffeded;
            border: 2px solid #ff5959;
            color: #ff5959;
            border-radius: 15px ;
        }
        .slides {
            padding: 5px 15px;
            background-color: #fffae6;
            border: 2px solid #ffa600;
            color: #ffa600;
            border-radius: 15px ;
        }
        .exams {
            padding: 5px 15px;
            background-color: #eee8ff;
            border: 2px solid #6a34ff;
            color: #6a34ff;
            border-radius: 15px ;
        }
        .notes {
            padding: 5px 15px;
            background-color: #e9fce1;
            border: 2px solid #56a833;
            color: #56a833;
            border-radius: 15px ;
        }
        .document_topright button{
            padding: 10px 20px;
            background-color: #ffc107;
            border-radius: 25px;
        }
        .document_main{
            margin-top: 40px;
            display: flex;
            /* justify-content: space-around; */
            gap: 20px;
            border-radius: 50px;
        }
        .card{
            width: 280px;
            background-color: #ffffff ;
            border-radius: 20px;
            margin-bottom: 100px;
        }
        .card_header img{
            width: 280px;
            height: 200px;
            border-radius: 30px 30px 0px 0px;
            /* border: 1px solid red; */
            object-fit:cover;
        }
        .card_main{
            padding: 30px;
        }
        .card_main h1 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .card_main p {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            overflow-wrap:anywhere ;
        }
        .pagination{
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .pagination a{
            padding: 5px 15px;
            background-color: #ffffff;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <?php
        include('db.php')
    ?>
    <div class="header">
        <div href="" class="header_logo">
            <img src="../../../assets/icons/logo.svg" width="40px">
            <h2>StudyShare</h2>
        </div>
        <div class="header_feature">
            <div class="header_feature_search">
                <form action="search.php" onsubmit="return checkSubmit()">
                    <div class="header_feature_search_input">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search documents..." id="search" name="keyword">
                    </div>
                    <div class="header_feature_search_combobox" name="subject">
                        <select id="combobox">                            
                            <option value= 0>Tất cả môn học</option>
                            <option value="">sdfsdf</option>
                            <option value="">sdgds</option>
                            <option value="">sdfsd</option>
                            <option value="">sdfsd</option>
                            <option value="">sdffsd</option>
                        </select>
                        <button>
                            <i href="" class="fa-solid fa-magnifying-glass"></i>
                        </button>
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
                    <li><a class="" href=""><i class="fa-regular fa-folder"></i> My Documents</a></li>
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
                            <button href="" class="pdf">PDF</button>
                            <button href="" class="slides">Slides</button>
                            <button href="" class="exams">Exams</button>
                            <button href="" class="notes">Notes</button>
                        </div>
                    </div>
                    <div class="document_topright">
                        <button href="">
                            <i class="fa-solid fa-upload"></i>
                            Upload Document
                        </button>
                    </div>  
                </div>
                <div class="document_main">
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="slides">Slides</button>
                            <h1>Recent Documents</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="pdf">PDF</button>
                            <h1>Recent Documents</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="exams">Exams</button>
                            <h1>Recent Documents</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="pdf">PDF</button>
                            <h1>Recent Documents</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                </div>
                <div class="document_topleft">
                        <h1>Popular Document</h1>
                        <p><font color="#757575">Most downloaded files</font></p>
                        <div>
                            <button href="" class="all">All</button>
                            <button href="" class="pdf">PDF</button>
                            <button href="" class="slides">Slides</button>
                            <button href="" class="exams">Exams</button>
                            <button href="" class="notes">Notes</button>
                        </div>
                    </div>
                    
                <div class="document_main">
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/hero.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="slides">Slides</button>
                            <h1>Popular Document</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="pdf">PDF</button>
                            <h1>Popular Doc sdgsfhdj sgdfsb sdgsdg sdgsd</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>                            
                            <p><font color="#757575" >Ausdfssssssssssssssssqefvwsdvsdv</font></p>                                
                            <p><font color="#757575">Dsfasfad</font></p>
                        </div>
                    </div>
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="exams">Exams</button>
                            <h1>Popular Document</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                    <div class="card" href="">
                        <div class="card_header">
                            <img src="../../../assets/images/img_file_test.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <button href="" class="exams">Exams</button>
                            <h1>Popular Document</h1>
                            <p><font color="#757575"><u>Môn học</u></font></p>
                            <p><font color="#757575" >Author</font></p>                                
                            <p><font color="#757575">-Date</font></p>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <a class="page_prev">« Prev</a>
                    <a class="page_number">1</a>
                    <a class="page_number">2</a>
                    <a class="page_number">3</a>
                    <a class="page_number">4</a>
                    <a class="page_number">5</a>
                    <a class="page_next">Next »</a>
                </div>
            </div>
        </div>       
    </div>
    <script>
        function checkSubmit(){
            let search = document.getElementById("search").value;
            let combobox = document.getElementById("combobox").value;
            if(!search){
                alert("Vui lòng nhập tên tài liệu trước khi tìm kiếm!");
                return false;
            }
           return true;
        }  
    </script>
</body>
</html>