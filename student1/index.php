<?php
session_start();
require("includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<table class="table table-striped ">
	<thead>
		<tr>
			<th>Student ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Course Name</th>
			<th>Reg Date</th>
			<th>Action</th>
		</tr>
    </thead>
    <tbody>
    <?php
$query="SELECT * FROM view_registeredcourses";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
	echo'
	 <tr>  
<td>'.$row['student_id'].'</td>
<td>'.$row['firstname'].'</td>
<td>'.$row['lastname'].'</td>
<td>'.$row['course_name'].'</td>
<td>'.$row['regdate'].'</td>

<td><a href="index.php?deleteid='.$row['student_id'].'"class="btn btn-danger btn-xs" onclick="return confirm(\'Delete?\')"><span class="glyphicon glyphicon-trash"></span></a>
<a href="index-edit.php?editid='.$row['student_id'].'"class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil "></span></a>
</td>



	</tr>';

}
?>	

    </tbody>


</table>




<!-- script -->

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>