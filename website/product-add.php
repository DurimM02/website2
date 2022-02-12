<?php
     session_start();
     
     include('auth.php');
     include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Famubi-Tulla per qefi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    
    


</head>
<body>
    <nav>
    
        <div><img src="images/logo.png" alt="My logo" width="200px"></div>
        
        <div class="nav">
        <a href="index.php">Home</a>
        <a href="catalog.php">Katalogu</a>
        <a href="info.php">Info</a>
        
        <a href="ContactUS/index.php">Kotaktoni</a>
        <a href="galleri.php">Galleri</a>
        </div>
        <?php if(isset($_SESSION['auth_user'])) : ?>
        <div class="user">
            <?= $_SESSION['auth_user']['user_name'];  ?>
        <a href="#">Profili im</a>
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
    <div class="all">
    <div class="navbar">
    <div class="navbar1" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path></svg>
        <a href="admin.php">Dashboard</a>
    </div>
    <div class="navbar1" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 2H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-6 2.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM19 15H9v-.25C9 12.901 11.254 11 14 11s5 1.901 5 3.75V15z"></path><path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8z"></path></svg>
        <a href="viewregister.php">Shikoni regjistrimet</a>
    </div>
        
    </div>
    <div class="faqe">

    <div class="row">
                    <h4>Edit User</h4>
                     <div class="card-body">

                    
                     <form action="code.php" method="POST">
                     <div class="row">
                               
                                <div class="row1">
                                <label for="">title</label>
                                <input type="text" name="title"  class="form-control">
                                </div>
                                <div class="row1">
                                <label for="">price</label>
                                <input type="text" name="price"  class="form-control">
                                </div>
                                <div class="row1">
                                <label for="">brandname</label>
                                <input type="text" name="brandname"  class="form-control">
                                </div>
                                <div class="row1">
                                <label for="">image</label>
                                <input type="text" name="image"  class="form-control">
                                </div>
                                <div class="row1">
                                <label for="">description</label>
                                <input type="text" name="description"  class="form-control">
                                </div>

                                
                                <div class="row1"><button type="submit" name="add_pr" class="edbtn">Add Produkt</button>
                                </div>
        </form>
       


</div>

    </div>
    </div>
     

    <div class="fotoer">
        <p>Powerd by Durim Murati & Sylë Rexha</p>

    </div>

    </body>

</html>

    