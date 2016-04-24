<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>PLACES</small>
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
                    if(isset($_SESSION['error']))
                    {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
                <a href="<?php echo SITEURL; ?>admin/index.php?type=add_place"><button type="button">ADD PLACE</button></a>
                  <table>
                  <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Place</th>
                        <th>Keywords</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $tbl_name="places";
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
                                    $place_id=$row['place_id'];
                                    $place_title=$row['place_title'];
                                    $keywords=$row['keywords'];
                                    $image_name=$row['image_name'];
                                    ?>
                                    <tr>
                                        <td><?php echo $a++; ?>.</td>
                                        <td><?php echo $place_title; ?></td>
                                        <td><?php echo $keywords; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/index.php?type=edit_place&place_id=<?php echo $place_id; ?>"><button type="button">EDIT</button></a>
                                            <a href="<?php echo SITEURL; ?>admin/delete.php?type=places&place_id=<?php echo $place_id; ?>&image_name=<?php echo $image_name; ?>"><button type="button">DELETE</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "No Places Added";
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