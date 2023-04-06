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
	$vdelet_id=$_GET['VenderDelete'];
	$delete="DELETE FROM venders_tbl WHERE venderID='$vdelet_id'";
	$run_query=mysqli_query($conn,$delete);
	if($run_query){
		echo "
		  	<script>
		  		window.confirm('Record Has Been Deleted Successfully!');
		  		window.open('venders.php','_self');
		  	</script>
		  ";
	}
?>