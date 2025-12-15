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
        .PDF {
            padding: 5px 15px;
            background-color: #ffeded;
            border: 2px solid #ff5959;
            color: #ff5959;
            border-radius: 15px ;
        }
        .Slides {
            padding: 5px 15px;
            background-color: #fffae6;
            border: 2px solid #ffa600;
            color: #ffa600;
            border-radius: 15px ;
        }
        .Exams {
            padding: 5px 15px;
            background-color: #eee8ff;
            border: 2px solid #6a34ff;
            color: #6a34ff;
            border-radius: 15px ;
        }
        .Notes {
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
<script>
        function checkSubmit(){
            let search = document.getElementById("search").value;
            let combobox = document.getElementById("combobox").value;
            if(!search){
                alert("Vui lòng nhập tên tài liệu khi tìm kiếm!");
                return false;
            }
           return true;
        }  
        function goPage(){
            let id = document.getElementById("combobox").value;
            if (id == 0){
                window.location.href = "list.php";
            }
            else
                window.location.href = "index.php?page_layout="+id;
        }
    </script>
<?php 
    include('db.php');
    if(isset($_GET['page_layout'])){
    switch ($_GET["page_layout"]){
        case 0:
            include "list.php";
            break;
        case 1:
            include "subjects/1.php";
            break;
        case 2:
            include "subjects/2.php";
            break;
        case 3:
            include "subjects/3.php";
            break;
        case 4:
            include "subjects/4.php";
            break;
        case 5:
            include "subjects/5.php";
            break;
        case 6:
            include "subjects/6.php";
            break;
        case 7:
            include "subjects/7.php";
            break;
        case 8:
            include "subjects/8.php";
            break;
        case 9:
            include "subjects/9.php";
            break;
        case 10:
            include "subjects/10.php";
            break;
    }
}
?>