
<?php 
include "funct.php";
?>
   <?php 

    $sql = "SELECT * FROM Students" ;
    $rs = dbQuery($sql);
    ?>
<html>
<head>
<meta charset="utf-8">
<title> برنامج شئون الطلاب</title>
<style>

	
			.btn{
background-color: #990099;
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
<body style="background: #ffe6ff;margin-top: -200px;" >
<table border="4" width="100%" cellspacing="0" dir="rtl">
	<thead style="background:  #ff1aff">
    <tr style="background: #ff99bb" >
        <th> الرقم الجامعي </th>
        <th> إسم الطالب</th>
        <th> التخصص </th>
        <th> تاريخ الميلاد</th>
        <th>رقم الهاتف </th>
        <th>البريد الالكتروني </th>
		
    </tr>
		 </thead>
    <tbody>
		
		
 <?php
    
  while($row =  dbFetchArray($rs)){ 
      echo "<tr>";
      echo "<td>".$row['std_id']."</td><br>" ;
      echo "<td>".$row['std_name']."</td><br>" ;
      echo "<td>".$row['major']."</td><br>" ;
      echo "<td>".$row['birthdate']."</td><br>" ;
      echo "<td>".$row['telephone']."</td><br>" ;
      echo "<td>".$row['email']."</td>" ;
	      
      echo "</tr>";
  }
        
  ?> 

		  </tbody>
	<h1 align="center">عرض بيانات الطلبة</h1>
</table>
<br>
<div align="center">
    <button type="submit"  class="btn" onclick="window.location.href='addStudent.php?view=list';">  اضافة طلب جديد  </button>
            <button type="button"  class="btn" onclick="window.location.href='index.php?view=list';" >رجوع</button>
	</div>
  </table> 
	



</body>
</html>

