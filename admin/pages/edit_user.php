
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>EDIT USER</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="content">
                
                <?php 
                    if(isset($_SESSION['fail']))
                    {
                        echo $_SESSION['fail'];
                        unset($_SESSION['fail']);
                    }
                ?>
                <?php 
                    if(isset($_GET['user_id']))
                    {
                        $user_id=$_GET['user_id'];
                        $tbl_name="users";
                        $where="user_id='$user_id'";
                        $query=$obj->select_data($tbl_name,$where);
                        $res=$obj->execute_query($conn,$query);
                        if($res)
                        {
                            $row=$obj->fetch_data($res);
                            $full_name=$row['full_name'];
                            $username=$row['username'];
                            $email=$row['email'];
                            $password_db=$row['password'];
                            ?>
                            <form method="post" action="">
                              <table>
                                <tr>
                                    <td>Full Name: </td>
                                    <td><input type="text" name="full_name" value="<?php echo $full_name; ?>" required="true" /></td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td><input type="email" name="email" value="<?php echo $email; ?>" required="true" /></td>
                                </tr>
                                <tr>
                                    <td>Username: </td>
                                    <td><input type="text" name="username" value="<?php echo $username; ?>" required="true" /></td>
                                </tr>
                                <tr>
                                    <td>Password: </td>
                                    <td>
                                        <input type="password" name="password" placeholder="Password" /><br />
                                        <p>Leave blank if you do not want to change password.</p>
                                        <input type="hidden" name="password_db" value="<?php echo $password_db; ?>" />
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="submit" name="submit" value="UPDATE USER" /></td>
                                </tr>
                              </table>
                            </form>
                            <?php
                        }
                    }
                ?>
                <?php 
                    if(isset($_POST['submit']))
                    {
                        $full_name=$obj->sanitize($_POST['full_name']);
                        $email=$obj->sanitize($_POST['email']);
                        $username=$obj->sanitize($_POST['username']);
                        $password_new=md5($obj->sanitize($_POST['password']));
                        $blank=md5('');
                        $password_db=$_POST['password_db'];
                        if($password_new==$blank)
                        {
                            $password=$password_db;
                        }
                        else
                        {
                            $password=$password_new;
                        }
                        $tbl_name="users";
                        $data="full_name='$full_name',
                                email='$email',
                                username='$username',
                                password='$password'";
                        $where="user_id='$user_id'";
                        $query=$obj->update_data($tbl_name,$data,$where);
                        $res=$obj->execute_query($conn,$query);
                        if($res)
                        {
                            $_SESSION['success']="User successfully Updated";
                            header('Location:'.SITEURL.'admin/index.php?type=user');
                        }
                        else
                        {
                            $_SESSION['fail']="Failed to update user.";
                            header('Location:'.SITEURL.'admin/index.php?type=edit_user&user_id='.$user_id);
                        }
                    }
                ?>
                
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->