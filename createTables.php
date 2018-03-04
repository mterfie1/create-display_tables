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


</style>
<title>mySQL conn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>


<form action="displayTable.php" method="post">

<?php


$mysql_host="localhost";
$mysql_user="mterfie1";
$mysql_password="mterfie1";

$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);

if (!$con){
	die("Error: " . mysql_error());
}
echo "Mysql connection successful" . "<br/>";

$db = mysql_select_db("mterfie1",$con);

if (!$db){
	echo "Error: " . mysql_error();
}
else{
	echo "Database connection successful" . "<br/>";	
}

$table1 = "CREATE TABLE albums (

	title varchar(20),
	artist varchar(20),
	year int(4),
	genre varchar(20)

)";

$table2 = "CREATE TABLE artists (

	name varchar(20),
	bio varchar(20),
	albums varchar(40)

)";

$sql = mysql_query($table1,$con);
$sql2 = mysql_query($table2,$con);


if (!$sql){
}
else{
	echo "Table1 created successfully" . "<br/>";	
}
if (!$sql2){
}
else{
	echo "Table2 created successfully" . "<br/>";	
}



?>
	<div class="align">
	<h2>Albums</h2>
	<br/>
        <label>Title:</label> <input type="text" name="title"><br/>
	<label>Artist:</label> <input type="text" name="artist"><br/>
	<label>Year:</label> <input type="text" name="year"><br/>
	<label>Genre:</label> <input type="text" name="genre"><br/>
	<input type="submit" name="submitAlbum">
	<h2>Artists</h2>
	<br/>
	<label>Name:</label> <input type="text" name="name"><br/>
	<label>Bio:</label> <input type="text" name="bio"><br/>
	<label>Album:</label> <input type="text" name="albums"><br/>
	<input type="submit" name="submitArtist">
	</div>

</body>
</html>
