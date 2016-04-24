<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">
        <?php 
            if(isset($_SESSION['success']))
            {
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            }
        ?>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                <?php 
                    $tbl_name="users";
                    $query=$obj->select_data($tbl_name);
                    $res=$obj->execute_query($conn,$query);
                    if($res)
                    {
                        $count=$obj->count_rows($res);
                        echo "<h3>$count</h3>";
                    }
                ?>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo SITEURL; ?>admin/index.php?type=user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                <?php 
                    $tbl_name="places";
                    $query=$obj->select_data($tbl_name);
                    $res=$obj->execute_query($conn,$query);
                    if($res)
                    {
                        $count=$obj->count_rows($res);
                        echo "<h3>$count</h3>";
                    }
                ?>
                  <p>Total Places</p>
                </div>
                <div class="icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <a href="<?php echo SITEURL; ?>admin/index.php?type=places" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                    <?php 
                    $tbl_name="message";
                    $query=$obj->select_data($tbl_name);
                    $res=$obj->execute_query($conn,$query);
                    if($res)
                    {
                        $count=$obj->count_rows($res);
                        echo "<h3>$count</h3>";
                    }
                ?>
                  <p>Total Messages</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <a href="<?php echo SITEURL; ?>admin/index.php?type=messages" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->