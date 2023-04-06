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
	$prodelet_id=$_GET['ProDelete'];
	$delete="DELETE FROM projects_tbl WHERE projectID='$prodelet_id'";
	$run_query=mysqli_query($conn,$delete);
	if($run_query){
		echo "
		  	<script>
		  		window.confirm('Record Has Been Deleted Successfully!');
		  		window.open('projects.php','_self');
		  	</script>
		  ";
	}
?>