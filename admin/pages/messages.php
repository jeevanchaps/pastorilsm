<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>MESSAGES</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <?php 
            if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
        ?>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="content">
                  <table>
                  <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Message</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $tbl_name="message";
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
                                    $message_id=$row['message_id'];
                                    $sender=$row['sender'];
                                    $receiver=$row['receiver'];
                                    $location=$row['location'];
                                    $message=$row['message'];
                                    ?>
                                    <tr>
                                        <td><?php echo $a++; ?></td>
                                        <td><?php echo $sender; ?></td>
                                        <td><?php echo $receiver; ?></td>
                                        <td><?php echo $message; ?></td>
                                        <td><?php echo $location; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/delete.php?type=messages&message_id=<?php echo $message_id; ?>"><button type="button">DELETE</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "No Messages";
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