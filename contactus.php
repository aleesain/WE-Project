<!DOCTYPE html>
<html>

<?php 
    
    include 'header.php'; 

?>
<title>CWMS</title>
<style>

.hover-card{
  transition: 0.5s;
 
}
.hover-card:hover{
  transition: 0.5s;
  transform: scale(1.05);
}

</style>
<body class="">
<?php include 'navbar.php'; ?>
<div class=" bg-dark" style="background: url(images/9.jpg); background-size: 100% 100%; height: 300px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom: 2px solid black; background-blend-mode:overlay;">
<br><br>
    <h1 class="text-center  text-white display-3">Contact Us</h1>

</div>

<!--Content Start-->
<div class="container-fluid p-4">
      <div class="container">
          <h2 class="text-warning">CONTACT US</h2>
          <hr color="#007bff">
            <br>
            <div class="row  mt-4">
              
                <div class="col-md-6">
                  <form action="#" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Message</label>
                            <textarea name="msg" class="form-control">                            
                            </textarea>
                        </div>
                        <div>
                          <input type="submit" name="sub" value="Submit" class="btn btn-block bg-warning">                        
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230696.7198014754!2d68.22647205591632!3d25.383504845439994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70f6d444f3c3%3A0xc00bbc183d41e285!2sHyderabad%2C+Sindh%2C+Pakistan!5e0!3m2!1sen!2s!4v1558431363189!5m2!1sen!2s" style="border:0" allowfullscreen="" width="600" height="450" frameborder="0"></iframe>
                </div>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>  
        </div>
    </div>

<!--Content end-->
<br>

<?php include 'footer.php'; ?>




</body>
</html>