<!-- Include the Header from a separate PHP file -->
<?php include 'header.php'?>
		<section>
		    <form class="form-signin" method="post" action="suggest.php"> 
	             <h3>Please select one or more interests</h3>
		         <p>
				      <?php
				 		echo '<p>Full Name:</p><input type="text" class="user-name" name="fullname" vale="Full Name" /> <br/>';
				 		/*
						Here I'm naming all of the checkboxes interests[] to store
						them in an array. 
						----------------------------------------------------------*/
						//interest 1
					    echo '<input type="checkbox" id="check-design" name="interests[]" value="Design" />';
					    echo '<label for="check-design">Design</label>';
					    //interest 2
					    echo '<input type="checkbox" id="check-webdevelopment" name="interests[]" value="Web Development"/>';
					    echo '<label for="check-webdevelopment">Web Development</label>';
					    //interest 3
					    echo '<input type="checkbox" id="check-startups" name="interests[]"  value="Startups"/>';
					    echo '<label for="check-startups">Startups</label>';		   
					    //interest 4
					    echo '<input type="checkbox" id="check-videogames" name="interests[]"value="Video Games" />';
					    echo '<label for="check-videogames">Video Games</label>';				   
					    //interest 5
					    echo '<input type="checkbox" id="check-onlinemagazines" name="interests[]" value="Online Magazines" />';
					    echo '<label for="check-onlinemagazines">Online Magazines</label>';	
				      ?>			   		   				   					 
		         </p>
				<button class="btn btn-large btn-primary" type="submit" name="links">Suggest links</button>
		    </form>			
		</section>
<!-- Include the Footer from a separate PHP file -->
<?php include 'footer.php'?>
		