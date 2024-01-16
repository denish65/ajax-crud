<?php
// include("../db/db.php");
// if(isset($_POST['catname']))
// {
//     $cate=$_POST['cat'];
//     $tmp_nam=$_FILES['img']['tmp_name'];
//     $path='gallery/'.$_FILES['img']['name'];
//     $img=$path;
//     $ci=new db();
//     $ci->cateinsert($cate,$img);
// }

$cate=$_POST['catname'];
$conn = new mysqli("localhost","root","admin@123" ,"test");

foreach ($_FILES['image']['name'] as $i => $value) {
/*	echo "<br>".*/ 
/*	echo "<br>".*/$image_name = $_FILES['image']['tmp_name'][$i];
	/*echo "<br>".*/$folder = "images/";
	/*echo "<br>".*/$image_path = $folder.$_FILES['image']['name'][$i];
/*	echo "<br>".*/move_uploaded_file($image_name,$image_path);

$sql = "INSERT INTO images(category,images) VALUES ('$cate','$image_path')"	;
$stmt = $conn->query($sql);

}

// echo  "hello <br>";
// echo $cate=$_POST['catname'];
// echo "<br>";
// echo $_FILES['image']['tmp_name'];
// echo "<br>";
// echo $_FILES['image']['name'];
// echo "<br>";


// $count = count($_FILES['image']['name']);


// for($i=0;$i<=$count;$i++)
// {
// 	echo $image_path.$i."<br>";
// }

?>