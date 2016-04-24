<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>USERS</small>
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
                    if(isset($_SESSION['success']))
                    {
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                ?>
                <a href="<?php echo SITEURL; ?>admin/index.php?type=add_user"><button type="button">ADD USER</button></a>
                  <table>
                  <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $tbl_name="users";
                        $query=$obj->select_data($tbl_name);
                        $res=$obj->execute_query($conn,$query);
                        $a=1;
                        if($res)
                        {
                            $count=$obj->count_rows($res);
                            if($count>0)
                            {
                                while($row=$obj->fetch_data($res))
                                {
                                    $user_id=$row['user_id'];
                                    $full_name=$row['full_name'];
                                    $username=$row['username'];
                                    $email=$row['email'];
                                    ?>
                                    <tr>
                                        <td><?php echo $a++; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/index.php?type=edit_user&user_id=<?php echo $user_id; ?>"><button type="button">EDIT</button></a>
                                            <a href="<?php echo SITEURL; ?>admin/delete.php?type=user&user_id=<?php echo $user_id; ?>"><button type="button">DELETE</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                           {
                                echo"No Users Found";
                           } 
                        }
                    ?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->