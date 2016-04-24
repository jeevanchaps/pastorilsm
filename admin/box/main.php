<?php 
    if(isset($_GET['type']))
    {
        $type=$_GET['type'];
    }
    else
    {
        $type="dashboard";
    }
    switch ($type)
    {
        case "dashboard":
        {
            include('pages/dashboard.php');
        }
        break;
        case "user":
        {
            include('pages/user.php');
        }
        break;
        case "add_user":
        {
            include('pages/add_user.php');
        }
        break;
        case "edit_user":
        {
            include('pages/edit_user.php');
        }
        break;
        case "places":
        {
            include('pages/places.php');
        }
        break;
        case "add_place":
        {
            include('pages/add_place.php');
        }
        break;
        case "edit_place":
        {
            include('pages/edit_place.php');
        }
        break;
        case "messages":
        {
            include('pages/messages.php');
        }
        break;
        case "logout":
        {
            session_destroy();
            header('Location:'.SITEURL.'admin/login.php');
        }
         default:
         {
            include ('pages/dashboard.php');
         }
    }
?>