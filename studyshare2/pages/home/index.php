<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <style>
        body{
            font-family: "arial";
            margin: 0;
            overflow-x: hidden; /* cố định chiều ngang không hiển thị thanh cuộn ngang */
        }
        .header{    
            background-color: #ffffff;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px 0 20px;
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
        .avatar img{
            width: 35px;
            border-radius:15px;
        }
        form{
            width: 80%;
            display: flex;
        }
        .header_feature_search_input{
            display: flex;
            align-items: center;
            gap: 150px;
            background-color: #f5f5f5;
            padding: 10px 18px;
            border-radius: 30px;
            width: 45%;
            margin-right: 50px;
        }
        .header_feature_search_combobox select{
            padding: 10px 18px;
            background-color: #f5f5f5;
            border-radius: 30px;
        }
        .header_feature_search input,select, button{
            border: none;
            outline: none;
            background: transparent; /*nền trong suốt để nhìn màu nên đằng sau*/
        }
        .header_feature_account{
            display: flex;
            align-items: center;
            gap: 30px;
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
        .document_top div{
            display: flex;
            justify-content: space-between;
        }
        .document_main{
            display: flex;
            gap: 15px;
            border-radius: 50px;
        }
        .card{
            width: 290px;
            background-color: #ffffff ;
            border-radius: 20px;
            margin-bottom: 40px;
        }
        .card_header img{
            width: 290px;
            height: 200px;
            border-radius: 30px 30px 0px 0px;
            /* border: 1px solid red; */
            object-fit:cover;
        }
        .card_main{
            padding: 20px;
        }
        .card_main h2 {
            margin-bottom: 0px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
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
    include('../../config/db.php');
    ?>
    <div class="header">
        <div href="" class="header_logo">
            <img src="../../assets/icons/logo.svg" width="40px">
            <h2>StudyShare</h2>
        </div>
        <div class="header_feature">
            <div class="header_feature_search">
                <form action="index.php" onsubmit="return checkSubmit()" method="get">
                    <div class="header_feature_search_input">
                        <input type="hidden" name="page_layout" value="search">
                        <input type="text" placeholder="Search documents..." id="search" name="keyword"> 
                        <button>
                            <i href="" class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="header_feature_search_combobox">
                        <select id="combobox" onchange="goPage()">                            
                            <option >Chọn môn học</option>
                            <?php 
                                $sql_subject="SELECT * FROM `subjects`";
                                $result_subject= mysqli_query($conn2,$sql_subject);
                                while($row_subject= mysqli_fetch_array($result_subject)) {  
                            ?>
                                <option value= <?php echo $row_subject["id"] ?>> <?php echo $row_subject["name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="header_feature_account">
                <a href="abc.php"><i href="" class="avatar"><img src="../../assets/images/default.jpg" alt=""></i></a>
            </div>
        </div>
    </div>
    <div class="main_left">
            <nav>
                <ul  class="main_left_category">
                    <li><a class="" href="index.php?page_layout=list"><i class="fa-regular fa-house"></i> Home</a></li>
                    <li><a class="" href="index.php?page_layout=my_document"><i class="fa-regular fa-folder"></i> My Documents</a></li>
                    <li><a class="" href=""><i class="fa-solid fa-upload"></i> Upload</a></li>
                    <li><a class="" href=""><i class="fa-solid fa-user"></i> Profile</a></li>
                    <li><a class="" href=""><i class="fa-solid fa-users"></i> Shared with me</a></li>
                </ul>
                <ul  class="main_left_setting">
                    <li><a href=""><i class="fa-solid fa-gear"></i> Setting</a></li>
                </ul>
            </nav>
        </div>
    <?php
    $page_layout = $_GET['page_layout'] ?? 'list';
    switch ($_GET["page_layout"]){
        case 'search':
            include 'search.php';
            break;
        case 'subject':
            include 'subject.php';
            break;
        case 'my_document':
            include '../my-documents/my_documents.php';
            break;
        case 'created_at':
            include "more.php";
            break;
        case 'download_count':
            include "more.php";
            break;
        case 'view_count':
            include "more.php";
            break;
        default:
            include "list.php";
            break; 
    }
?>
<script>
        function checkSubmit(){
            let search = document.getElementById("search").value;
            if(!search){
                alert("Vui lòng nhập tên tài liệu trước khi tìm kiếm!");
                return false;
            }
           return true;
        }  
        function goPage(){
            let id = document.getElementById("combobox").value;
            window.location.href = "index.php?page_layout=subject&id="+id;
        }
</script>

</body>
</html>

