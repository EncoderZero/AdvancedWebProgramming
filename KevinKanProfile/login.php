<?php
//Author Kevin Kan
// Version 1
//This is the website's login page.
require_once 'header.php';
if(!empty($_SESSION['userName'])&&!empty($_SESSION['passWord'])){
	echo "<p>You've just logged out, log back in?</p>";
	$_SESSION['userName']="";
	$_SESSION['passWord']="";
}
if(isset($_POST['signup'])){
	$passwordSignUp= sha1($_POST['passwordSignUp'].$_POST['userNameSignUp']);
	$userNameSignUp= $_POST['userNameSignUp'];
	$queryCheck=$database->prepare("SELECT * FROM kkprofileusers WHERE username=\"".$userNameSignUp);
	$queryCheck->execute();
	$rows=$queryCheck->fetch(PDO::FETCH_NUM);
	if($rows<1){
		$querySignUp=$database->prepare("INSERT INTO kkprofileusers(username,password) VALUES(\"".$userNameSignUp."\",\"".$passwordSignUp."\")");
		$querySignUp->execute();
	}
	else {echo "<p>This user name is already taken</p>";}
}
?>
<div class='pageContent'>
<h2>Login To Kevin Kan's Profile</h2>
<div id="loginSignOutForms">
	<?php echo (empty($loginFailMessage))?"<p>Please login or sign up to see my business contacts.</p>":"<p>$loginFailMessage</p>";?>
	<form action="login.php" method="post" enctype="multipart/form-data" >
	<fieldset>
	<legend>Login</legend>
		<label for = 'userName'>User Name:</label> 
		<input name='userName' type="text" required="required" value="<?php echo $userName;?>"/><br>
		<label for = 'password'>Password:</label>
		<input name='password' type="password" required="required"/><br>
		<input name='submit' type="submit">
	</fieldset>
	</form>
	<div id="signUpControls">
		<p>If you don't have an account click on the Sign Up button below!</p><br>
		<button id='signUpButton'>Sign Up</button>
	</div>
	<form id='signUpForm' name="signup" action="login.php" method="post" enctype="multipart/form-data" >
	<fieldset id="signUpForm">
	<legend>Sign Up</legend>
		<label for = 'userNameSignUp'>User Name:</label> 
		<input name='userNameSignUp' type="text" required="required" value=""/><br>
		<label for = 'passwordSignUp'>Password:</label>
		<input name='passwordSignUp' type="password" required="required"/><br>
		<input name='signup' type="submit">
	</fieldset>
	</form>
</div>
</div>
<?php require_once 'footer.php';?>