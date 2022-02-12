<?php
    session_start();

?>
<!DOCTYPE html>
  <html>
  <head>
  <title>Welcome To Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  </head>

	<body>
        <nav>
    
            <div><img src="images/logo.png" alt="My logo" width="200px"></div>
            
            <div class="nav">
			<a href="index.php">Home</a>
        <a href="product.php">Katalogu</a>
        <a href="info.php">Info</a>
		
        <a href="ContactUS/index.php">Kotaktoni</a>
        <a href="galleri.php">Galleri</a>
            </div>
			
        </nav >
         
	<section class="login">
	<div id="main">
	<div class="h-tag">
	<h2>Mirsevini</h2>
	</div>
	<form action="logincode.php" method="POST">
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td>Username :</td>
	<td><input type="email" name="email" placeholder="email" id="email" class="tb" /></td>
	</tr>
	<tr>
	<td>Password :</td>
	<td><input type="password" name="password" placeholder="Password " id="pwd1" class="tb" /></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" value="Fshij" class="btn" />
	<input type="submit" name="login_btn" value="Login" class="btn" onClick="login()" /></td>
	</tr>
	</table>
    <p>Nuk keni account?<a href="Register.php">Regjistrohu</a></p>
	</div>
	</form>
	</div>
	<!-- Main div ending here... -->
</section>
    
  </body>
  </html>
 