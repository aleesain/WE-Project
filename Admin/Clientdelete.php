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
	$Cdelet_id=$_GET['ClientDelete'];
	$delete="DELETE FROM clients_tbl where clientID='$Cdelet_id'";
	$run_query=mysqli_query($conn,$delete);
	if($run_query){
		echo "
		  	<script>
		  		window.confirm('Client Has Been Deleted Successfully!');
		  		window.open('clients.php','_self');
		  	</script>
		  ";
	}
?>