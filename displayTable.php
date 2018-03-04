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
<?php
 
if (isset($_POST['submitAlbum'])){
	
	$album = "INSERT INTO albums (title,artist,year,genre) VALUES ('$_POST[title]','$_POST[artist]','$_POST[year]','$_POST[genre]')";
	
	mysql_query($album,$con);
	
	
	
}

else if (isset($_POST['submitArtist'])){
	
	$artist = "INSERT INTO artists (name,bio,albums) VALUES ('$_POST[name]','$_POST[bio]','$_POST[albums]')";
	
	mysql_query($artist,$con);
	
	
}

else {

}

?>


<table>
	<thead>
	<tr>
		<th>Title</th>
		<th>Artitst</th>
		<th>Year</th>
		<th>Genre</th>

	</tr>
	</thead>
	<tbody>
	<?php
		$i = 0;
		$tb1 = "SELECT * FROM albums";
		$result = mysql_query($tb1,$con);

		
				while($row = mysql_fetch_array($result)) : $i++; ?>
					
					
					<tr>
		
						<td><?php echo $i ?></td>
						<td><?php echo $row['title']?></td>
						<td><?php echo $row['artist']?></td>
						<td><?php echo $row['year']?></td>
						<td><?php echo $row['genre']?></td>
					</tr>
					
					
				
			
				
			<?php endwhile ?>
	</tbody>		
</table>
</body>
</html>