<?php include 'header.php'?>

<?php

$fullname = $_POST['fullname'];//Retrieves and stores input from the text field at index.php

/*
Error Validation and User Feedback with a bit of personality ;)
*/

//Error message:: for no name with no interests
if($_POST["fullname"] == "" && !(isset($_POST['interests']))) {
	echo '<div class="interests">';//div for position and styling
	echo '<p>Did you even try T_T?</p><a href="/nnash_ex1/index.php">Return</a>';
	echo '</div>';
} 

//Error message:: for no name with interests
if($_POST["fullname"] == "" && (isset($_POST['interests']))) {
	echo '<div class="interests">';
	echo '<p>What&apos;s your name stranger?</p><a href="/nnash_ex1/index.php">Return</a>';
	echo '</div>';
} 

//Error message:: for name with no interests
if($_POST["fullname"] != "" && !(isset($_POST['interests']))) {
	echo '<div class="interests">';
	echo '<p>Hey ', $fullname, ' you haven&apos;t selected any interests! Surely you&apos;re not that boring?</p><a href="/nnash_ex1/index.php">Return</a>';
	echo '</div>';
} 

//Success condition:: for name with interests
if($_POST["fullname"] != "" && (isset($_POST['interests']))) {
	echo '<div class="interests">';	
	echo '<p>Hey ', $fullname, ' here are some links I think you might enjoy!</p>';	
	displayLinks();//Links are only displayed when the form validates successfully
	echo '<a  href="/nnash_ex1">Return to start.</a>';			
	echo '</div>';	
} 

function displayLinks(){
	$interests = $_POST['interests'];	
	foreach ($interests as $interest){//Since each interest is stored in an array I can loop through them and assign a case
		switch ($interest) {
			case "Design"://If the use has selected an interest e.g., Design, echo out links
				 echo "<h2>Design</h2>";
				 echo '<p><a href="http://dribbble.com" target="_blank">Dribbble</a><br/>';
				 echo '<a href="http://news.layervault.com" target="_blank">Designer News</a><br/>';
				 echo '<a href="http://beta.psdboard.com/" target="_blank">PSDboard</a></p>';
		         break;
			case "Web Development": 
	 		 	 echo "<h2>Web Development</h2>";
			 	 echo '<p><a href="http://jqapi.com/" target="_blank">jQuery API</a><br/>';
				 echo '<a href="https://developers.google.com/speed/libraries/" target="_blank">Google API Library</a><br/>';
				 echo '<a href="https://developer.mozilla.org/en-US/" target="_blank">Mozilla Developer Network</a></p>';
		         break; 
			case "Startups":
	 			 echo "<h2>Startups</h2>";
				 echo '<p><a href="http://news.ycombinator.com" target="_blank">Hacker News</a><br/>';
				 echo '<a href="http://andrewchen.co/" target="_blank">@andrewchen</a><br/>';
				 echo '<a href="http://techcrunch.com/" target="_blank">Tech Crunch</a></p>';
		         break; 
			case "Video Games":
				 echo "<h2>Video Games</h2>";
				 echo '<p><a href="http://twitch.tv" target="_blank">TwitchTV</a><br/>';
				 echo '<a href="http://www.giantbomb.com/" target="_blank">Giant Bomb</a><br/>';
				 echo '<a href="http://tap-repeatedly.com" target="_blank">Tap Repeatedly</a></p>';
		         break;
			case "Online Magazines":			 			
	 			 echo "<h2>Online Magazines</h2>";
				 echo '<p><a href="https://medium.com/" target="_blank">Medium</a><br/>';
				 echo '<a href="http://svbtle.com" target="_blank">Svbtle</a><br/>';
				 echo '<a href="http://explorecreaterepeat.com/" target="_blank">Explore Create Repeat</a></p>';
		}//End switch case
	}//End foreach	
}//End display links function

?>

<?php include 'footer.php'?>
