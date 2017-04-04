<?php include "inc/header.php";?>

<?php include "lib/database.php";?>

<?php

$db = new Database();


?>
	<section class="mainoption">

		 <div class="myform">

		 <?php

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
	
	$permited = array('jpg', 'jpeg', 'png', 'gif');

	 $filename = $_FILES['image']['name'];
	 $fileSize = $_FILES['image']['size'];
	 $filetemp = $_FILES['image']['tmp_name'];

	 $div = explode('.', $filename);
	 $file_ext = strtolower(end($div));
	 $unique_name = substr(md5(time()),0,10).'.'.$file_ext;

	 if(empty($filename)){
	 	echo "<span class='error'>Please Select An Image !</span>";
	 }elseif($fileSize > 1048567){
	 echo "<span class='error'>Select An Image Less Then 1MB.</span>";
	 }elseif(in_array($file_ext,$permited)===false){
	 echo "<span class='error'>You Can Upload Only:- ".implode(', ',$permited)."</span>";
	 }else{


	 $folder = "uploads/";
	 move_uploaded_file( $filetemp,$folder.$unique_name);

	 $query = "INSERT INTO tbl_image (imageName) VALUES ('$unique_name')";

	 $inserted_rows = $db->insert($query);
	 if($inserted_rows){
			echo "<span class='success'>Image Uploaded Successully.</span>";
	 }else{
			echo "<span class='error'>Image Uploaded Successully.</span>";
	 }

	} 

}


?>
		  <form action="" method="post" enctype="multipart/form-data">
		   <table>
		    <tr>
		     <td>Select Image</td>
		     <td><input type="file" name="image"/></td>
		    </tr>
		    <tr>
		     <td></td>
		     <td><input type="submit" name="submit" value="Upload"/></td>
		    </tr>
		   </table>
		  </form>
		  <?php

		$query = "SELECT * FROM  tbl_image ORDER BY imageId DESC LIMIT 1";
		$show = $db->select($query);
		if($show){
		while($result = $show->fetch_assoc()){
		
		  ?>
		  
		  <img src="<?php echo $result['imageName'];?>" height="100px" weight="100px">
		  <?php } }?>
		 </div>

	</section>

<?php include "inc/footer.php";?>
