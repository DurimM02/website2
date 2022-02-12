<?php
    session_start();
    include('db.php');


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


            <div class="produkt">

               

            <?php  
                    $query ="SELECT * FROM product";
                    $query_run = mysqli_query($con , $query);

                    if(mysqli_num_rows ($query_run) > 0)
                        {
                        foreach($query_run as $row)
                        {
                            ?>
                                
                                <div class="produkt1">
                                <img src="/website/Katalogu/<?= $row['image']; ?>" alt="">
                                <h4><?= $row['title']; ?></h4>
                                <h6><?= $row['brandname']; ?></h6>
                                <p><?= $row['price']; ?> Euro </p>


                                </div>
                                
                            <?php
                        }}
                        
                        else
                        {
                            ?>
                            <tr>
                                    <td colspan="6">Nuk gjeneden informacionet</td>
                            </tr>
                            <?php
                        }
                ?>







            </div>





        
    <div class="fotoer">
        <p>Powerd by Durim Murati & Sylë Rexha</p>

    </div>
    

   
</body>
</html>