<?php
session_start();
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

$servername = "localhost";
$username = "toto";
$password = "abc123";
$dbname = "petshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

 if (isset($_POST['add'])) {
    $guide = $_POST['name'];
    $description = $_POST['description'];          
    $sqlInsert = "INSERT INTO guide (pet_guide, description) VALUES ('$guide', '$description')";
    mysqli_query($conn, $sqlInsert);
}

if (isset($_POST['update'])) {
    $id = $_POST['Name'];
    $guide = $_POST['name'];
    $description = $_POST['description'];          
    $sqlUpdate = "UPDATE guide SET id= '$id', pet_guide='$guide', description= '$description' WHERE id='$id'";
    mysqli_query($conn, $sqlUpdate);
}
if (isset($_POST['delete'])) {
    $id=$_POST['name'];
    $sqlDelete = "DELETE FROM guide WHERE id='$id'";
    mysqli_query($conn, $sqlDelete);
}


$conn->close();
?>


<!DOCTYPE html >
<html>
<body>
<!--  Website template by freewebsitetemplates.com  -->
  <?php include("./includes/header.php");?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							   <h2>Pet Guide</h2>
							   <div>
								   <p>
									  Here are some useful pet quide tips for your pets. Easy and convenient for you to learn more on how to understand them. basic intructions to useful information not just for your pet but also for other animals. 
								   </p>
							   </div>
							   
							   <ul class="section">                 
                                   
                        <?php


                        $sql = "SELECT id, pet_guide, description FROM guide";
                        $result = $dbc->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                               echo "<li><h2>{$row['id']} - {$row['pet_guide']}</h2> <p>{$row['description']}</p></li>";

                            }
                        } else {
                            echo "0 results";
                        }
                        echo "<br><br><br>";


                       ?>                                  
                                   
									
				        </ul>
								<div class="paging">
								   <a class="active" href="petguide.html">1</a>
								   <a href="petguide.html">2</a>
								   <a href="petguide.html">3</a>
								   <a href="petguide.html">4</a>
								   <a class="next" href="petguide.html">NEXT</a>
								</div>
							   
						</div>
						
					    <div id="sidebar">
						
						     <div id="section">
							    <div>
							      <div>
							           <h2>Pet Guide Overview</h2>
										<ul>
											<li><a href="petguide.html">Pet Trainging Guides <span>(1)</span> </a></li>
											<li><a href="petguide.html">Behavior Training <span>(11)</span> </a></li>
											<li><a href="petguide.html">Pet Recipes <span>(3)</span> </a></li>
											<li><a href="petguide.html">Do's and Don'ts <span>(8)</span> </a></li>
											<li><a href="petguide.html">Pet Foods <span>(3)</span> </a></li>
											<li><a href="petguide.html">Cosplay Pets <span>(2)</span> </a></li>
											<li><a href="petguide.html">Shopping Guides <span></span> </a></li>
											<li><a href="petguide.html">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
											<li><a href="petguide.html">Medications <span>(7)</span> </a></li>
											<li><a href="petguide.html">Excercise <span>(7)</span> </a></li>
											<li><a href="petguide.html">Diet <span>(10)</span> </a></li>
											<li><a href="petguide.html">Grooming <span>(1)</span> </a></li>
											<li><a href="petguide.html">Cosplay Pets <span>(2)</span> </a></li>
											<li><a href="petguide.html">Shopping Guides <span></span> </a></li>
											<li><a href="petguide.html">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
											<li><a href="petguide.html">Medications <span>(7)</span> </a></li>
											<li><a href="petguide.html">Excercise <span>(7)</span> </a></li>
											<li><a href="petguide.html">Diet <span>(10)</span> </a></li>
											<li><a href="petguide.html">Grooming <span>(1)</span> </a></li>
										</ul>
							      </div>
							    </div>
							 </div>
						       
								
					    </div>
				   </div>
                
                
                                                  
                <div class="w3-col l6 w3-padding-large">
              <h1 class="w3-center">Manage The Guide</h1>
              <hr>
                <h4 style="color:orange ;"> Add New Guide: </h4>
              <form border= "1" action= "" method= "post">
                  Pet Guide: <input type= "text" id="name" name="name" /><br>
                  Description: <input type="text" id= "description" name= "description" /> <br>
                  <input type= "submit" name= "add" value= "Add" />
              </form>

              <hr>

             <h4 style="color:orange ;">  Update the Guide: </h4>
              <form border= "1" action= "" method= "post">
                  Id: <input type= "number" id="name" name="Name" /><br>
                  Pet Guide: <input type= "text" id="name" name="name" /><br>
                  Description: <input type="text" id= "description" name= "description" /> <br>
                  <input type= "submit" name= "update" value= "Update" />
              </form>

              <hr>

              <h4 style="color:orange ;">  Delete the Guide: </h4> 
              <form border= "1" action= "" method= "post">
                  Id: <input type= "number" id="name" name="name" /><br>
                  <input type= "submit" name= "delete" value= "Delete" />
              </form>
				   
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