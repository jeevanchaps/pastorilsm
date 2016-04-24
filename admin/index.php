<?php include('includes/apply.php'); ?>
<?php include('box/header.php'); ?>
<?php 
    if(!isset($_SESSION['user'])){
        header('Location:'.SITEURL.'admin/login.php ');
    }
?>
<?php include('box/navbar.php'); ?>
<?php include('box/main.php'); ?>
<?php include('box/footer.php'); ?>