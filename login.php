<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
    background-color: #F5F5DC;

}

.align{
    display: inline-block;
    clear: left;
    width: 230px;
    text-align: right;
}
h2{
    display: inline-block;
    clear: left;
    width: 230px;
    text-align: center;

}
table{
    width: 600px;
    border: 1px;
   
}

#links2{
  float: right;
}



</style>
<title>Access Database</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="links2">
	<a href="http://codd.cs.gsu.edu/~mterfie1/Assignment7/loginConformation.php">Login Page</a><br/>
	<a href="http://codd.cs.gsu.edu/~mterfie1/Assignment7/createTables.php">Access Database</a>
	</div>


<?php


$mysql_host="localhost";
$mysql_user="mterfie1";
$mysql_password="mterfie1";

$con2 = mysql_connect($mysql_host,$mysql_user,$mysql_password);

$login = "CREATE TABLE user (

	username varchar(20),
	password varchar(20)

)";


$sql = mysql_query($login,$con2);

?>

<form action="loginConformation.php" method="post">
	<div class="align">
	<h2>Sign Up</h2>
	<br/>
    <label>Username:</label> <input type="text" name="username"><br/>
	<label>Password:</label> <input type="text" name="password"><br/>
	<input type="submit" name="userSubmit">


 </body>
 </html>
