<?php 
include "funct.php";

CheckUser();
  echo "<div id='welcome-msg'> مرحباً <span id='name-msg'>&nbsp;" . $_SESSION['name'] . "&nbsp;	</span> بك في الصفحة الرئيسية </div>";
?>

<!doctype html>
<html
<head>
<meta charset="utf-8">
<title> برنامج شئون الطلاب</title>
	
	  <style>
		  #welcome-msg{
			 
    font-size:25px;
}
#name-msg{
    color:blue; font-weight:bold;
    font-size:30px;
}
       body{
           direction:rtl;
           padding:3%;
		   
       }
       div.container {
           padding:3%;
		   margin: auto;
           background-color:#e8d4b0;
           border:2px solid #000;
           border-radius:15px
       }
       div.container .col-4 {
           display:inline-block;
          padding-left:150px
       }
       div.container .col-12 {
           text-align:center;
       }
       .button {
           text-align:center;
           margin-top:30px
       }
       a {
           font-weight:bold;
           font-size:22px
       }
    </style>
</head>

<body style="background: #eddfc4">
 <h2 align="center" style="font-size: 30px">برنامج شئون الطلاب</h2>
	
 <div class="container">
     <div class="row">
        <div class="col-12">
            <div class="col-4">
                <a href="addStudent.php">إدخال بيانات طالب جديد</a>
            </div>
            <div class="col-4">
                <a href="#">تعديل بيانات طالب </a>
            </div>
            <div class="col-4">
                <a href="viewStudent.php">عرض بيانات طالب</a>
            </div>
        </div>
     </div>
 </div>
 <div class="button">
     <a href="logout.php">تسجيل خروج</a>
 </div>
</body>
</html> 