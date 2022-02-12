<?php
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Famubi-Tulla per qefi</title>
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


        <?php if(isset($_SESSION['auth_user'])) : ?>
        <div class="user">
            <?= $_SESSION['auth_user']['user_name'];  ?>
      
        <form action="allcode.php" method="POST">
            <button type="submit" name="logout_btn" class="userbtn" >Logout</button>
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

        <div class="tulla">
            
             <H1>Tulla per qefi</H1>
             
        </div>
        
        <div class="vjet3">
            <div  class="vjet">
             <img src="images/30.jpg" >
        </div>
        
            <div class="vjet2">
            <img src="images/top.jpg" >
       </div>
    </div>
        <div class="h2">
            <h1> Bejme prodhimin e tullave dhe fuges per tulla</h1>
        </div>
        <div class="foto">
            <div class="fotos1">
             <img src="images/2.jpg" >
        </div>
        
            <div class="fotos">
            <img src="images/3.png" >
       </div>
    </div>
    <section class="slid">
       <div class="slider">
        </div>
        </section>
        <div class="best">
            <h2>Bestsellser</h2>
       </div>
        <div class="test">
        <div class="foto1">
            <img src="images/b0000.png" >
            <figcaption>B-003</figcaption>
       </div>
            <div class="foto1">
                <img src="images/B-001.png" >
                <figcaption>B-001</figcaption>
        </div>
        <div class="foto1">
            <img src="images/b-022.png" >
            <figcaption>B-022</figcaption>
        </div>
        <div class="foto1">
           <img src="images/B-023.png" >
           <figcaption>b-023</figcaption>
        </div>
       <div class="foto1">
        <img src="images/B-024.png" >
        <figcaption>B-024</figcaption>
     </div>
    </div>

     
     
    </div>

    <div class="produkt">

               






    <div class="foto6">
     <div class="foto4">
        <img src="images/22.png" >

     </div>
     <div class="foto5">
        <H2>Si punohen ?</H2>
        <H4>Veshja e murit me kësi lloje tulla bëhet me ngjitës special dhe pastaj mbushen fugat nëse dëshironi.Në përfundim nuk dallohet që nuk janë tulla të plota 12 cm.</H4>
    </div>
    </div>  
     <div class="buton">
        <h2>Klikoni per tu regjistruar per porosi ne faqen FAMUBI</h2>
        <a href="Register.php"><button type="submit" class="button">Regjistrohu</button></a>
    </div>
    <div class="fotoer">
        <p>Powerd by Durim Murati & Sylë Rexha</p>

    </div>
    

   
</body>
</html>