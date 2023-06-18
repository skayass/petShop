<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>
    <body>
<?php include("./includes/header.php");?>
			
			<div id="body">
			
					<div class="banner">&nbsp;</div>
					
			       <div id="content">
				   
				        <div class="content">
				
                                    <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about"> 
                                        
    <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px ; color:orange ; font-size:300%;">Login</h1>
        
            <?php
    
                $page_title = 'Login' ;

                if ( isset( $errors ) && !empty( $errors ) )
                {
                 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
                 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
                 echo 'Please try again or <a href="register.php">Register</a></p>' ;
                }
                 ?>
        
                <!-- Display the login. -->
                <form action="login_action.php" method="post">
                <p>Email Address: <input type="text" name="email"> </p>
                <p>Password: <input type="password" name="pass"></p>
                <p><input type="submit" value="Login" ></p>
                </form>

                
                <br>
                <br>
                <br>
        
            </div>
            </div>
            </div>
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