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

	 $folder = "uploads/";
	 move_uploaded_file( $filetemp,$folder.$filename);

	 $query = "INSERT INTO tbl_image (imageName) VALUES ('$filename')";

	 $inserted_rows = $db->insert($query);
	 if($inserted_rows){
			echo "<span class='success'>Image Uploaded Successully.</span>";
	 }else{
			echo "<span class='error'>Image Uploaded Successully.</span>";
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
		 </div>

	</section>

<?php include "inc/footer.php";?>
