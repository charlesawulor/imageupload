<html>
<head>
<title>uploading images</title>
</head>
<body>
<form align='center' action='images.php' method='post' enctype="multipart/form-data">
select image:<input type="file" name="image">
<input type="submit" name='submit' value="upload">
</form>
<?php
if(isset($_POST['submit']))
{
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp_name=$_FILES['image']['tmp_name'];

if($image_name==''){
	echo "<script>alert('pls select an image to upload')</script>";
	exit();
}
else
{
 move_uploaded_file($image_tmp_name,"images/$image_name");
 echo "image uploaded successfully"."<br>"."<br>";
 
 echo "<img src='images/$image_name'>";
}
}
?>
</body>
</html>
	