<?php
     session_start();
	 
?>

<!DOCTYPE html>
  <html>
  <head>
  <title>Registration-Famubi</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
  
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

			<?php if(isset($_SESSION['auth_user'])) : ?>
        <div class="user">
            <?= $_SESSION['auth_user']['user_name'];  ?>
        
        <form action="allcode.php" method="POST">
            <button type="submit" name="logout_btn" class="user" >Logout</button>
        </form>
        </div>
        <?php else : ?>
        <div class="user">
        <a href="Login.php">Login</a>
        <a href="register.php">Regjistrohu</a>
        </div>
        <?php endif; ?>
        </nav >
		<?php
			include('message.php');
		?>
         <form action="registercode.php" method="POST">
	<div id="main">
	<div class="h-tag">
	<h2>Krijoni account</h2>
	</div>
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Emri :</td>
	<td><input  required type="text" name="fname"placeholder="Emri" id="t1" class="tb" /></td>
	</tr>
	
	<td align="right">Lastname :</td>
	<td><input required type="text"name="lname"placeholder="Username" id="t3" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Email :</td>
	<td><input  required type="text" name="email"placeholder="Email" id="t2" class="tb" /></td>
	</tr>
	<tr>
	<tr>
	<td align="right">Password :</td>
	<td><input required type="password" name="password"placeholder="Password " id="t4" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Password :</td>
	<td><input required type="password" name="cpassword"placeholder="Password " id="t4" class="tb" /></td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<input type="reset" value="Fshij" onclick="clearFunc()" id="res" class="btn" />
	<input type="submit" name="register_btn" value="Krijoni account"  /></td>
	</tr>
	</table>
    <p>Keni account?<a href="login.php">Hyni</a></p>
	</div>
	</div>
	</form>
	</body>
	</html>
