<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>
    <body>
    
    <?php include("./includes/header.php");?>

 	<div id="body">
			
			       <div id="content">
				         
						 
						 <div class="search">
									<input type="text" name="s" value="Find"><button>&nbsp;</button>
									<label for="articles"><input type="radio" id="articles"> Articles</label>
									<label for="products"><input type="radio" id="products" checked> PetMart Products</label>
								</div>                      
                    		
				        <div class="content">
											        
				<ul>
									<li>  
                                        <a href="index.html"><img src="images/koi2.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>Food Area</h2>
                 <?php

                $sql = "SELECT id, item_category,  item_image, item_list FROM petmart WHERE item_category = 'Food Area' " ;
                $result = $dbc->query($sql);

                if ($result->num_rows > 0 ) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<span><a href='petmart.html'>{$row['item_list']}</a></span> " ; 
            
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </li>
                    
                                    <li>  
                                        <a href="index.html"><img src="images/cat3.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>Accesories</h2>
                                        
                <?php

                $sql = "SELECT id, item_category,  item_image, item_list FROM petmart WHERE item_category = 'Accesories' " ;
                $result = $dbc->query($sql);

                if ($result->num_rows > 0 ) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<span><a href='petmart.html'>{$row['item_list']}</a></span> " ; 
            
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </li>
                                    <li>  
                                        <a href="index.html"><img src="images/dog2.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>Training & Behavior</h2>
                <?php

                $sql = "SELECT id, item_category,  item_image, item_list FROM petmart WHERE item_category = 'Training & Behavior' " ;
                $result = $dbc->query($sql);

                if ($result->num_rows > 0 ) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<span><a href='petmart.html'>{$row['item_list']}</a></span> " ; 
            
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </li>
                                    <li>  
                                        <a href="index.html"><img src="images/bird3.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>Health Center</h2>
                <?php
                $sql = "SELECT id, item_category,  item_image, item_list FROM petmart WHERE item_category = 'Health Center' " ;
                $result = $dbc->query($sql);

                if ($result->num_rows > 0 ) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<span><a href='petmart.html'>{$row['item_list']}</a></span> " ; 
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </li>
                                    <li>    
                                        <a href="index.html"><img src="images/bird-in-cage.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>Travel Essentials</h2>
                <?php

                $sql = "SELECT id, item_category,  item_image, item_list FROM petmart WHERE item_category = 'Travel Essentials' " ;
                $result = $dbc->query($sql);

                if ($result->num_rows > 0 ) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<span><a href='petmart.html'>{$row['item_list']}</a></span> " ; 
            
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </li>
                                    <li>  
                                        <a href="index.html"><img src="images/puppy3.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>Grooming</h2>
                <?php

                $sql = "SELECT id, item_category,  item_image, item_list FROM petmart WHERE item_category = 'Grooming' " ;
                $result = $dbc->query($sql);

                if ($result->num_rows > 0 ) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<span><a href='petmart.html'>{$row['item_list']}</a></span> " ; 
            
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </li>                         
                </ul>
				</div>                       
										
					    <div id="sidebar">
								
                              								
								   <a href="petmart.html"><img src="images/discount.jpg" width="300" height="790" alt="Pet Shop" title="Pet Shop"></a> 	
								
								
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