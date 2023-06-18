<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>
    <body>
<?php include("./includes/header.php");?>
			
			<div id="body">
			
					<div class="banner">&nbsp;</div>
					
			       <div id="content">
				   
				        <div class="content">
								<ul>
                                    <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
                                        
    <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px ; color:orange ; font-size:300%;">Register</h1>
        
            <div class="w3-col m6 w3-padding-large">
                <?php 

                $page_title = 'Register' ;
                if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
                {
                    
                  $errors = array();
                    
                  if ( empty( $_POST[ 'first_name' ] ) )
                  { $errors[] = 'Enter your first name.' ; }
                  else
                  { $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'first_name' ] ) ) ; }

                    
                  if (empty( $_POST[ 'last_name' ] ) )
                  { $errors[] = 'Enter your last name.' ; }
                  else
                  { $ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'last_name' ] ) ) ; }
                 
                    
                  if ( empty( $_POST[ 'email' ] ) )
                  { $errors[] = 'Enter your email address.'; }
                  else
                  { $e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ; }
                  
                    
                  if ( !empty($_POST[ 'pass1' ] ) )
                  {
                    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
                    { $errors[] = 'Passwords do not match.' ; }
                    else
                    { $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pass1' ] ) ) ; }
                  }
                  else { $errors[] = 'Enter your password.' ; }


                  if ( empty( $errors ) )
                  {
                    $q = "SELECT user_id FROM users WHERE email='$e'" ;
                    $r = @mysqli_query ( $dbc, $q ) ;
                    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a href="login.php">Login</a>' ;
                  }
                  if ( empty( $errors ) ) 
                  {
                    $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) VALUES ('$fn', '$ln', '$e', SHA2('$p',256), NOW() )";
                    $r = @mysqli_query ( $dbc, $q ) ;
                    if ($r)
                    { echo '<h1>Registered!</h1><p>You are now registered.</p><p><a href="login.php">Login</a></p>'; }

            
                    mysqli_close($dbc); 

                    exit();
                  }
                  else 
                  {
                    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
                    foreach ( $errors as $msg )
                    { echo " - $msg<br>" ; }
                    echo 'Please try again.</p>';
                
                    mysqli_close( $dbc );
                  }  
                }
                ?>
                <!-- Display the registration section -->
                <form action="" method="post">
                <p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p> 
                <p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
                <p>Email Address: <input type="text" name="email" size="50" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></p>
                <p>Password: <input type="password" name="pass1" size="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" ></p>
                <p>Confirm Password: <input type="password" name="pass2" size="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"></p>
                <p><input type="submit" value="Register"></p>
                </form>
                
                <br>
                <br>
                <br>

            </div>
            </div>
            </div>
  
 							
				</ul>
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