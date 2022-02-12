<?php
include('db.php');

if(!isset($_SESSION['auth']))
{

    $_SESSION['message']= "Per te pasur akses hyni ne llogarin tuaj";
    header("Location: login.php");
    exit(0);
}
else
{
    if($_SESSION['auth_role'] !="1")
    {
    
        $_SESSION['message']= "Ju nuk jeni te autorizuar per admin";
        header("Location: index.php");
        exit(0);
}
}

?>