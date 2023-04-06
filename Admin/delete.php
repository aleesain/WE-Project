<?php
    include'database.php';
    session_start();
    
    if(!isset($_SESSION['username'])) {
        header("location: login.php");
    }
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	include 'database.php';
	$delet_id=$_GET['Delete'];
	$delete="delete from user_tbl where userID='$delet_id'";
	$run_query=mysqli_query($conn,$delete);
	if($run_query){
		echo "
		  	<script>
		  		window.confirm('Record Has Been Deleted Successfully!');
		  		window.open('users.php','_self');
		  	</script>
		  ";
	}
?>