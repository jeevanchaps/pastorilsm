 <?php include('includes/apply.php'); 
 ob_start();
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!-- Horizontal Form -->
 <body>
 <div <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> WEB PATORLISM</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <?php 
                                    if(isset($_SESSION['fail']))
                                    {
                                        echo $_SESSION['fail'];
                                        unset($_SESSION['fail']);
                                    }
                                ?>
                                <form role="form" method="post" action="">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     <input type="submit" name="submit" value="Login Now" class="btn btn-primary " />
                                    </form>
                                    <?php 
                                        if(isset($_POST['submit']))
                                        {
                                            $username=$obj->sanitize($_POST['username']);
                                            $password=md5($obj->sanitize($_POST['password']));
                                            $tbl_name="users";
                                            $where="username='$username' && password='$password'";
                                            $query=$obj->select_data($tbl_name,$where);
                                            $res=$obj->execute_query($conn,$query);
                                            if($res)
                                            {
                                                $count=$obj->count_rows($res);
                                                if($count==1)
                                                {
                                                    $_SESSION['user']=$username;
                                                    $_SESSION['success']="Login Successful.";
                                                    header('Location:'.SITEURL.'admin/index.php?type=dashboard');
                                                }
                                                else
                                                {
                                                    $_SESSION['fail']="Login Failed";
                                                    header('Location:'.SITEURL.'admin/login.php');
                                                }
                                            }
                                        }
                                    ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
    </body>
