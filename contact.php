<!DOCTYPE html >
<html>
<body>
    
<!--  Website template by freewebsitetemplates.com  -->
 <?php include("./includes/header.php");?>


<?php

if ($dbc ->connect_error) {
   die("Connection failed: " . $dbc ->connect_error);
} 
              
 if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $question = $_POST['question'];           
    $sqlInsert = "INSERT INTO contact (first_name, last_name, contact_email, question) VALUES ('$fname', '$lname', '$email', '$question')";
     
    mysqli_query($dbc, $sqlInsert);
}
                      
$dbc->close();
?>

<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
    }</style>
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
                            
                         
							   <h2>Contact us</h2>
							   <div>
								   <p>
									 This website template has been designed by <a href="http://www.freewebsitetemplates.com">freewebsitetemplates.com</a> for you, free.
									 You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
									 If you're having problems editing this website template, then don't hesitate to ask for jhelp on the  <a href="http://www.freewebsitetemplates.com">freewebsitetemplates.com</a>
								   </p>
                                   <br><br>
                                   <hr>
                                    
                                   <form action=""  method="POST">
                                      <label for="fname">First Name</label>
                                      <input type="text" id="fname" name="fname">
                                       <br>
                                      <label for="lname">Last Name</label>
                                      <input type="text" id="lname" name="lname">
                                       <br>
                                      <label for="email">Email</label>
                                      <input type="text" id="email" name="email">
                                       <br>
                                      <label for="question">Question? </label>
                                       <input type="text" id="question" name="question">
                                       <br><br>
                                       <input type="submit" name="submit" value = "Submit"/> 
                                    </form>
                                   <hr>
                                    <br><br>
							   </div>
							   
							   <ul class="connect">
									<li>
										<h2>Customer Sales and Serevice</h2>
										<p>
										  <span>E-mail: <a href="contact.html">freewebsitetemplates.com</a></span>
										  <span>Call or e-mail us for help with any aspect of your purchase, online or offline.</span>
										</p>
										<p>
										  <span>Call toll-free: 877 000 0000</span>
										  <span>Call toll-free: 866 000 0000</span>
										  <span>Call toll-free: 877 000 0000</span>
										</p>
									</li>
									<li>
										<h2>Store Hours</h2>
										<p>
										  <span>monday to Friday 9:00 am - 7:00 pm EST (GMT -05000)</span>
										  <span>Closed Saturday and Sunday</span>
										</p>
										
									</li>
									<li>
										<h2>Mailing Address</h2>
										<p>
										  <span>Petshop</span>
										  <span>250 Lorem Ipsum Street</span>
										  <span>4th Floor</span>
										  <span>jaonfanr, Caknan 109935</span>
										  <span>Kiangab</span>
										</p>
									</li>
								</ul>
							   
						</div>
						
					    <div id="sidebar">
						
						     <div class="connect">
							    <h2>Follow Us</h2>
								<ul>
									<li><a class="facebook" href="contact.html">Facebook</a></li>
									<li><a class="subscribe" href="contact.html">Subscribe</a></li>
									<li><a class="twitter" href="contact.html">Twitter</a></li>
									<li><a class="flicker" href="contact.html">Flicker</a></li>
                                 </ul>
							 </div>  
						       
								
					    </div>
				   </div>
				   
				   <div class="featured">
				        <ul>
							<li><a href="index.html"><img src="images/organic-and-chemical-free.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li><a href="index.html"><img src="images/good-food.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li class="last"><a href="index.html"><img src="images/pet-grooming.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
						</ul>
				        
				   </div>
				  
			
			</div>
			
			<div id="footer">
			        <div class="section">
						<ul>
							<li>
								<img src="images/friendly-pets.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Friendly Pets</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonummy nib. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="images/pet-lover2.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">How dangerous are they</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="images/healthy-dog.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Keep them healthy</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonu mmy. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								
								<h2><a href="index.html">Love...love...love...pets</a></h2>
								<p>
								     Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diameusim. <a class="more" href="index.html">Read More</a> 
								</p>
								<img src="images/pet-lover.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
							</li>	
						</ul>
					</div>
					<div id="footnote">
						<div class="section">
						   &copy; 2011 <a href="index.html">Petshop</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>