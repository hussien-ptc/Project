<?php 
include "funct.php";
$errstd_id="";$errstd_name="";$errmajor="";$errdate ="";$erremail="";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * from students where id='". $id ."'";
    try {
        $val = $conn->query($sql);
        $row = $val->fetch();

        $errstd_name= $row['std_name'];
      //  echo $title;
        $errmajor = $row['major'];
       // echo $description;
        $erremail = $row['email'];

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
?>


<html>
<header>

</header>
<body dir="rtl"><br><br><br>
	<h4>صفحة تعديل بيانات طالب</h4>
	<h1 align="center">برنامج شئون الطلاب</h1>
	<div align="center">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
	
	 اسم الطالب: <input type="text" name="std_name" value="<?php echo $errstd_name;?>"> 
	<br><br>
    التخصص : <input type="text" name="major"><?php echo  $errmajor;?></textarea><br>
<br>
   البريد الالكتروني :<input type="email" name="email" ><?php echo  $erremail;?><br><br>
    <button type="submit">تعديل </button>
    <button type="reset">حذف</button>

</form>
</div>
</body>
</html>

	
	
	