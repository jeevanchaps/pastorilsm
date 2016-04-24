
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>ADD USER</small>
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
                    if(isset($_POST['submit']))
                    {
                        $full_name=$obj->sanitize($_POST['full_name']);
                        $email=$obj->sanitize($_POST['email']);
                        $username=$obj->sanitize($_POST['username']);
                        $password=md5($obj->sanitize($_POST['password']));
                        $tbl_name="users";
                        $data="full_name='$full_name',
                                email='$email',
                                username='$username',
                                password='$password'";
                        $query=$obj->insert_data($tbl_name,$data);
                        $res=$obj->execute_query($conn,$query);
                        if($res)
                        {
                            $_SESSION['success']="User successfully added";
                            header('Location:'.SITEURL.'admin/index.php?type=user');
                        }
                        else
                        {
                            $_SESSION['fail']="Failed to add user.";
                            header('Location:'.SITEURL.'admin/index.php?type=add_user');
                        }
                    }
                ?>
                <form method="post" action="">
                  <table>
                    <tr>
                        <td>Full Name: </td>
                        <td><input type="text" name="full_name" placeholder="Full Name" required="true" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email" placeholder="Email" required="true" /></td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username" placeholder="Username" required="true" /></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" placeholder="Password" required="true" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"> <input type="submit" name="submit" value="ADD USER" /></td>
                    </tr>
                  </table>
                </form>
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->