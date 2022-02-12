
<?php
    session_start();
    include('db.php');


?>
<!DOCTYPE html>
<html>
<head>
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
     
<section class="info">
    <div class="iheader">
    <h1>Rreth kompanis FAMUBI</h1>
    <h4>Famubi është një kompani prodhuese e tullave 2 cm dhe fuge per tulla me qendër ne Ferizaj, Kosovë. Tullat janë të prodhuara me teknologjinë e fundit dhe janë me garancion 30 vjet. Në lokacionin tonë mund të zgjedhni modele nga me të ndryshmet.</h4>
    </div>

    <div class="second">
    <h2>Qfarë lloje të tullav janë ?</h2>
    <img src="images/22.png" width="600" Height="300"><h4>Janë tulla me trashësi 2 cm.Që mund te përdoren mbrenda dhe jashtë objektit qe doni.<h4>
    </div>

    <div class="third">
    <h2>Si punohen ?</h2>
    <img src="images/9.jpg" width="400" height ="350"> <h4>Veshja e murit me kësi lloje tulla bëhet me ngjitës special dhe pastaj mbushen fugat nëse dëshironi.Në përfundim nuk dallohet që nuk janë tulla të plota 12 cm.</h4>
    </div>
</section>
    <div class="Adress">
        <div>
        <h1>Na Vizitoni:</h1>

        <h4>Bibaj-Ferizaj, Kosovë</h4>
        <h4>info@famubi.com</h4>
        <h4>+(383) 44 344 090</h4>
        <h4>+(383) 48 344 090</h4>
        </div><div>
        <img src="images/map.png" alt="">
            </div>
    </div>

    <div class="fotoer">
        <p>Powerd by Durim Murati & Sylë Rexha</p>

    </div>

    </body>

</html>

    
