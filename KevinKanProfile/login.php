<?php
//Author Kevin Kan
// Version 1
//This is the website's login page.
require_once 'header.php';
?>
<div id="loginForm">
	<?php if($loginFail){echo "<p =class'loginFail'>User Name or Password was incorrect please try again</p>"} else{echo "<p>Please Login to view my Business Contacts page.</p>";} ?>
	<form action="login.php" method="post" enctype="multipart/form-data" >
		<label for = 'userName'>User Name:</label> 
		<label for = 'password'>Password:</label>
		<input name='userName' type="text" required="required" value="<?php echo $_POST['userName']?>;"/>
		<input name='password' type="password" required="required"/>
		<input name='submit' type="submit">
	</form>
</div>