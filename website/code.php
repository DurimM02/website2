<?php
session_start();
include('auth.php');

if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];

    $query = "DELETE FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
{
    $_SESSION['message'] = "Delete i suksesshem";
    header('Location: viewregister.php');
    exit(0);
        }
        else
        {
    $_SESSION['message'] = "Delete i pa suksesshem";
    header('Location: viewregister.php');
    exit(0);
        }
        
    }



    if(isset($_POST['product_delete']))
    {
        $product_id = $_POST['product_delete'];
    
        $query = "DELETE FROM product WHERE id='$product_id'";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
    {
        $_SESSION['message'] = "Delete i suksesshem";
        header('Location: createproduct.php');
        exit(0);
            }
            else
            {
        $_SESSION['message'] = "Delete i pa suksesshem";
        header('Location: createproduct.php');
        exit(0);
            }
            
        }
    






if(isset($_POST['update_user']))
{
$user_id = $_POST['user_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role_as = $_POST['role_as'];

$status = $_POST['status'] == true ? '1':'0' ;

$query ="UPDATE users SET fname='$fname', lname='$lname' email='$email', password='$password', role_as='$role_as' ,status='$status'
WHERE id='$user_id' ";

$query_run=mysqli_query($con, $query);

if($query_run)
{
    $_SESSION['message'] = "update i suksesshem";
    header('Location: viewregister.php');
    exit(0);
        }
        else
{
    $_SESSION['message'] = "update i pa suksesshem";
    header('Location: viewregister.php');
    exit(0);
        }
        

}


if(isset($_POST['add_user'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0' ;
    
    $query = "INSERT INTO users (fname,lname,email,password,role_as,status) VALUES ('$fname','$lname','$email','$password','$role_as','$status')";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "U shtua me sukses";
        header('Location: viewregister.php');
        exit(0);
            }
            else
    {
        $_SESSION['message'] = "tentim i pa suksesshem";
        header('Location: viewregister.php');
        exit(0);
            }
    
    }
    
    if(isset($_POST['add_pr'])){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $brandname = $_POST['brandname'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        
        
        $query = "INSERT INTO product (title,price,brandname,image,description) VALUES ('$title','$price','$brandname','$image','$description')";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
            $_SESSION['message'] = "U shtua me sukses";
            header('Location: createproduct.php');
            exit(0);
                }
                else
        {
            $_SESSION['message'] = "tentim i pa suksesshem";
            header('Location: createproduct.php');
            exit(0);
                }
        
        }
        

?>