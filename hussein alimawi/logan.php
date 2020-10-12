
<?php 
include "funct.php";
$errMessage = "";

if(isset($_POST['txtUsername']))
{
    $result = doLogin();
    if($result != "")
    {
        $errMessage = $result;
    }
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> برنامج شئون الطلاب</title>
<style>
	.header{
margin: 50px auto 0px;
                   width:30%;
color: white;
background: #5F9EA0;
text-align: center;
padding: 0px;
border-radius: 20px 20px 20px 20px;
border: 10px solid #5F9EA0;
}
form
{
width: 70%;
text-align: center;
	margin: 0px auto;
	padding: 20px;
	border: 10px solid #5F9EA0;
	background:#FFFFFF;
	border-radius: 20px 20px 20px 20px;
}
	

	
	
.input{
	margin: 10px 0px 10px 0px;
}

.input input{
border-radius: 5px 5px 5px 5px;
height: 20px;
width:70%;
padding: 5px 10px;
font-size: 18px;
text-align: right;
	font-family: myFirstFont;

}
.input label {color: black;
	display: block;
	text-align: center;
	margin: 3px;
	font-size: 20px;
	
}

.btn{
padding:3%;
font-size:30px;
color: black;
background: #4BCF5A;

border-radius:4px;
}
	h3{color: black;
	align-content: center;
text-align: center;
	font-size: 35px;
	}
	img.avatar {
  width:55%;
  border-radius: 50%;
}
	
	</style>
</head>
<body style="background: #71bbc1 ">

	
	<div class="header">
		<h2>برنامج شئون الطلاب</h2>
	
		
	<form action="" method="post">
		
		  <div class="input">
			       <img src="img/img_avatar.png" alt="Avatar" class="avatar">
        <label>اسم المستخدم</label>
			<input type="text" name="txtUsername"  >
            </div>
              <div class="input">
        <label>كلمة المرور</label>
			<input type="password" name="txtPassword">
      </div>
                  
        <button type="submit" class="btn" name="login">دخـول</button>
		
	
	</form>
		</div>
</body>
</html>