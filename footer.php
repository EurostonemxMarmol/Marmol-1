<?php 
 
if(isset($_POST['query-submit']))
{
include 'config.php';
  extract($_POST);
 
  $q1="INSERT INTO `contact`(`email`,`mobile`,`message`) VALUES ('".$email."','".$mobile."','".$message."')";
  $d1=mysqli_query($dbcon,$q1);
  if(mysqli_affected_rows($dbcon)>0)
  {
    echo'<script>
      alert("Thanks For Your Interest..We will be back to You Soon");

    </script>';
  }
  else
  {
    echo'<script>
      alert("Technical Error..Please try after Some time");

    </script>';
  }
}

?>
<div class="footer">
	<div class="row inside-footer">
		<div class="col-sm-4 address-block">
			<div class="logo-wrapper-footer">
				<img class="logo" src="assets/mmg logo.svg">
				<span class="mmGranites mmGranites-footer">MM Granites</span>
			</div>
			<div class="address">
				MM (MINES LAKHA) Group – the company with 20 year of business experience in “Granites Block, Granites Slabs Making, ” & “Whole Sells”. MM Group  founded in 1996.Serves qualitative & satisfactory output to the customers through more than 5 Type Of Finishing.
		    </div>	
		   <div class="other-links">
		   		<ul class="other-links-list">
		   			<li><a href="index.php">Home</a></li>
		   			<li ><a href="products.php">Products</a></li>
		   			<li ><a href="projects.php"> Projects</a></li>
		   			<li ><a href="aboutus.php">About Us</a></li>
		   			<li ><a href="contact.php">Contact US</a></li>
		   		</ul>
		   </div> 
		</div>
		<div class="col-sm-4 query-block">
			<span class="footer-heading">Enquiry</span>
			<form action="#" method="post" class="query-form">
				<div class="form-group">
            <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile No." min="6000000000" max="9999999999" required="required">
 
			</div>
			<div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required="required">
 
			</div>
			<div class="form-group">
            <textarea rows="4" cols="20" placeholder="Your Query" name="message" class="form-control" required>  </textarea>
  			</div>
			<div class="form-group">
				<input type="submit" name="query-submit" class="mm-button query-btn">
			</div>
		
		
			
			
			
			
			
			</form>
		</div>
		<div class="col-sm-4 social-block">
			<span class="footer-heading">Social Links</span>
			<div class="social-icon-block">
				<a href="#"><img src="assets/img/fb.png" class="social-icon"></a>
				<a href="#"><img src="assets/img/twitter.png" class="social-icon"></a>
				<a href="#"><img src="assets/img/insta.png" class="social-icon"></a>
			</div>
		</div>
	</div>
	<span class="copyright">&copy;Copy right 2018. All right reserved.</span>
</div>