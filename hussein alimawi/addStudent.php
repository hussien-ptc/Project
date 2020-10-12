<?php 
include "funct.php";
CheckUser();

echo "<div id='welcome-msg'> مرحباً <span id='name-msg'>&nbsp;" . $_SESSION['name'] . "&nbsp;	</span> بك في  صفحة إدخال البيانات </div>";

 $errstd_id = "";
 $errstd_name = "";
 $errmajor = "";
 $errdate = "";
 $erremail = "";
 

 if(isset($_POST['btnAdd']))
 {  
     $std_id = $_POST['std_id'];
     $std_name = $_POST['std_name'];
     $major = $_POST['major'];
     $birthdate = $_POST['birthdate'];
     $telephone = $_POST['telephone'];
     $email = $_POST['email'];
    
     if(empty($std_id))
     {
        $errstd_id = "الرجاء ادخال الرقم الجامعي"; 
     }
     if(empty($std_name))
     {
        $errstd_name = "الرجاء ادخال اسم الطالب"; 
     }
      if (empty($major)) {
        $errmajor = "الرجاء ادخال اسم التخصص"; 
     } 
     
     if (empty($email)) {
        $erremail = "الرجاء ادخال البريد الالكتروني"; 
     }
     else{
         
         $sql = "insert into students(std_id , std_name , major , birthdate , telephone , email ) "
                 . "values ('$std_id', '$std_name' , '$major' , '$birthdate' , '$telephone' , '$email')";
         $rs = dbQuery($sql);
         if($rs){
             echo "<meta http-equiv='refresh' content='0;URL=viewStudent.php'>";
         }else{
             echo "Error";
         }
     }
 }
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> برنامج شئون الطلاب</title>
	<style>
		@font-face {
  font-family: 'Aljazeera';
  font-style: normal;
 
  src: 
        url('assets/font/Aljazeera.ttf') format('truetype');
}
@font-face {
  font-family: 'Aljazeera';
  font-style: normal;
  font-weight: 600;
 
  src: 
        url('assets/font/Aljazeera.ttf') format('truetype');
}
	#welcome-msg{
		
    font-size:30px;
}
#name-msg{
	
    color:#04127E; font-weight:bold;
    font-size:30px;
}

body{background: #128184;
	direction:rtl;
    font-family: 'Aljazeera';
    padding:2%;
	
}
h2{
  font-family: 'Aljazeera';
  font-style: normal;
  font-weight: 350;
  text-align:center;
}
	
		.header{
margin: 30px auto 0px;
                   width:20%;
color: white;
background: #5F9EA0;
text-align: center;
padding: 20px;
border-radius: 20px 20px 0px 0px;
border: 0px solid #5F9EA0;
}
		form{
width: 30%;
text-align:center;
	margin: 0px auto;
	padding: 20px;
	border: 10px solid #5F9EA0;
	background: white;
	border-radius: 20px 20px 20px 20px;
}
		.input{
	margin: 10px 0px 10px 0px;
}
.input label {
	display: block;
	text-align: center;
	margin: 3px;
	font-size:18px;
	font-weight:bold;
	
}
.input input{
border-radius: 5px 5px 5px 5px;
height: 35px;
width:93%;
padding: 5px 10px;
font-size: 18px;
text-align: right;

}
.inputs input{
border-radius: 5px 5px 5px 5px;
height: 100px;
width:40%;
padding: 5px 10px;
font-size: 18px;
text-align:center;
}

		.btn{
background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
	font-size: 18px;
			font-weight:bold;
			border-radius: 5px 5px 5px 5px;
			
}
		
		
		
		
		
		
		</style>
</head>
 <body style="background: #71bbc1">

	
	<div class="header">
		<h2>برنامج شئون الطلاب</h2>
	</div> 
    <form action="" method="post">
<h3>  مرحبا بك في صفحة ادخال بيانات طالب جديد  </h3>
             <div class="input">
                <label>الرقم الجامعي</label>
                <input type="text" name="std_id">
            <span><?= $errstd_id ?></span>
            </div>
             <div class="input">
        <label>اسم الطالب</label>
                <input type="text" name="std_name">
            <span><?= $errstd_name ?></span>
            </div>
            <div class="input">
			<label>التخصص</label>
                <input type="text" name="major">
            <span ><?= $errmajor ?></span>
            </div>
             <div class="input">
        <label> تاريخ الميلاد</label>
                <input type="date" name="birthdate">
            <span><?= $errdate ?></span>
            </div>
             <div class="input">
          <p>
             <label> رقم الهاتف </label>
                <input type="number" name="telephone">
				 </p>
            </div>
             <div class="input">
			<label>البريد الالكتروني</label>
                <input type="email" name="email" requierd>
            <span><?= $erremail ?></span>
            </div>
          <div>
            <button type="submit" class="btn" name="btnAdd">إدخال</button>
            <button type="reset"  class="btn" name="reset" >إلغاء</button>
			  </div><br>
            <div class="bt"><a href="index.php">العودة إلى الصفحة الرئيسية</a></div>
        </form> 
          
 
            
</body>
</html> 