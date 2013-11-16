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
<div id="loginForm">
	<?php if($loginFail){echo "<p =class'loginFail'>User Name or Password was incorrect please try again</p>";} else{echo "<p>Please Login to view my Business Contacts page.</p>";} ?>
	<
	<form action="login.php" method="post" enctype="multipart/form-data" >
	<fieldset>
	<legend>Login</legend>
		<label for = 'userName'>User Name:</label> 
		<input name='userName' type="text" required="required" value="<?php echo $userName;?>"/>
		<label for = 'password'>Password:</label>
		<input name='password' type="password" required="required"/>
		<input name='submit' type="submit">
	</fieldset>
	</form>
	
	<form id='signUpForm' name="signup" action="login.php" method="post" enctype="multipart/form-data" >
	<fieldset>
	<legend>Sign Up</legend>
		<label for = 'userNameSignUp'>User Name:</label> 
		<input name='userNameSignUp' type="text" required="required" value=""/>
		<label for = 'passwordSignUp'>Password:</label>
		<input name='passwordSignUp' type="password" required="required"/>
		<input name='signup' type="submit">
	</fieldset>
	</form>
</div>