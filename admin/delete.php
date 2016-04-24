<?php 
    include('includes/apply.php');
    if(isset($_GET['type']))
    {
        $type=$_GET['type'];
    
        switch($type)
        {
            case "user":
            {
                if(isset($_GET['user_id']))
                {
                    $user_id=$_GET['user_id']; 
                }
                $tbl_name="users";
                $where="user_id='$user_id'";
            }
            case "messages":
            {
                if(isset($_GET['message_id']))
                {
                    $message_id=$_GET['message_id']; 
                }
                $tbl_name="message";
                $where="message_id='$message_id'";
            }
            break;
            case "places":
            {
                if(isset($_GET['place_id']))
                {
                    $place_id=$_GET['place_id'];
                }
                if(isset($_GET['image_name']))
                {
                    $image_name=$_GET['image_name'];
                }
                else{
                    $image_name="";
                }
                $path="../images/places/".$image_name;
                $tbl_name="places";
                $where="place_id='$place_id'";
            }
            break;
        }
        if($image_name!="")
        {
            $remove=unlink($path);
            if(!$remove)
            {
                $_SESSION['error']="Failed to delete Image.";
                header('Location:'.SITEURL.'admin?type='.$type);
                exit();
            }
        }
        $query=$obj->delete_data($tbl_name,$where);
        $res=$obj->execute_query($conn,$query);
        if($res)
        {
            $_SESSION['delete']="Successfully deleted.";
            header('Location:'.SITEURL.'admin?type='.$type);
        }
        else
        {
            $_SESSION['delete']="Failed to delete.";
            header('Location:'.SITEURL.'admin?type='.$type);
        }
    }
?>