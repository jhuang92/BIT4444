<html>
<head><title> Piedmont Furnishings </title></head>
<!--<body bgcolor="#dddddd"> test-->
<center>
<h1> Piedmont Furnishings <br/> Login Portal </h1>
<hr/>
</center>
	<br/>
	<br/>
	<br/>

<?php if (isset($_REQUEST['page1_submit'])) { ?>
	<?php if ($_REQUEST['pword'] == "furnish") { 
		header('Location: agent.php');
		exit;
	?>
	<?php } else if ($_REQUEST['pword'] == "manager") { 
		header('Location: manager.php')
	?>
	<?php } else { ?>
		<center>
			<h2>
				Invalid password! Try again.
				<form method="POST" action="login.php">
					Password: 
					<input type="password" name="pword" />
						<br/> 
						<br/>
					<input type="submit" name="page2_submit" value ="SUBMIT" />
					<input type="reset" value="RESET" />
						<br/>
				</form>
			</h2>
		</center>
	<?php } ?>
	
<?php } else if (isset($_REQUEST['page2_submit'])) { ?>
	<?php if ($_REQUEST['pword'] == "furnish") { 
		header('Location: agent.php');
		exit;
	?>
	<?php } else if ($_REQUEST['pword'] == "manager") { 
		header('Location: manager.php')
	?>
	<?php } else { ?>
		<center>
			<h2>
				Invalid passowrd! This was your second attempt.
				<form method="POST" action="login.php">
					Password: 
					<input type="password" name="pword" />
						<br/> 
						<br/>
					<input type="submit" name="page3_submit" value ="SUBMIT" />
					<input type="reset" value="RESET" />
						<br/>
				</form>
			</h2>
		</center>
	<?php } ?>

<?php } else if (isset($_REQUEST['page3_submit'])) { ?>
	<?php if ($_REQUEST['pword'] == "furnish") { 
		header('Location: agent.php');
		exit;
	?>
	<?php } else if ($_REQUEST['pword'] == "manager") { 
		header('Location: manager.php')
	?>
	<?php } else { ?>
		<center>
			<h2>
				Invalid passowrd! This was your final attempt.
			</h2>
		</center>
	<?php } ?>	
		
<?php } else { ?>
	<center>
		<h2>
			Please enter your password to access this site!
				<br/>
			<form method="POST" action="login.php" >
				Password:
				<input type="Password" name="pword" > 
					<br/>
					<br/>
				<input type="submit" name="page1_submit" value="SUBMIT" />
				<input type="reset" value="RESET" />
					<br/>
			</form>
		</h2>
	</center>
<?php } ?>


</body>
</html>
