<?php
require("connect_db.php");

    $query = 'select * from user where email =\''.$_POST['email'].'\' and password =\''.$_POST['password'].'\';';
	$rs = mysqli_query($conn,$query);
	$nbre = mysqli_num_rows($rs);
	
	if($nbre==1){
				
			echo '<script>window.location.href = "../page2.html";</script>';
	
	}
	else{
		 echo '<script>window.location.href = "../index.html";</script>';


	}
	
	
?>
