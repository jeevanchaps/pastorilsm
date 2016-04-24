
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>ADD PLACE</small>
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
                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }
                    if(isset($_SESSION['invalid']))
                    {
                        echo $_SESSION['invalid'];
                        unset($_SESSION['invalid']);
                    }
                ?>
                <?php 
                    if(isset($_POST['submit']))
                    {
                        $place_title=$obj->sanitize($_POST['place_title']);
                        $keywords=$obj->sanitize($_POST['keywords']);
                        $grass=$obj->sanitize($_POST['grass']);
                        $water=$obj->sanitize($_POST['water']);
                        $route=$obj->sanitize($_POST['route']);
                        $market=$obj->sanitize($_POST['market']);
                        $weather=$obj->sanitize($_POST['weather']);
                        $legal=$obj->sanitize($_POST['legal']);
                        $law=$obj->sanitize($_POST['law']);
                        $diseases=$obj->sanitize($_POST['diseases']);
                        $disasters=$obj->sanitize($_POST['disasters']);
                        $image_title=$obj->sanitize($_POST['image_title']);
                        if(($_FILES['image']['name'])!="")
                        {
                            $image=$_FILES['image']['name'];
                            $array = explode('.', $image);
                            $ext = end($array);
                            $allowed =  array('gif','GIF','png','PNG' ,'jpg','JPG');
                            if(!in_array($ext,$allowed) ) {
                                $_SESSION['invalid']="Invalid Image Format. Please Try JPG, GIF or PNG Image Format.";
                                header('Location:'.SITEURL.'admin/index.php?type=add_place');
                                exit();
                            }
                            $uniq=$obj->uniqid();
                            $image_name="Pastoralism_Life_".$uniq.'.'.$ext;
                            $source=$_FILES['image']['tmp_name'];
                            $destination="../images/places/".$image_name;
                            $upload=move_uploaded_file($source,$destination);
                            if(!$upload)
                            {
                                $_SESSION['upload']="Failed to upload image.";
                                header('Location:'.SITEURL.'admin/index.php?type=add_place');
                                exit();
                            }
                        }
                        else
                        {
                            $image_name="";
                        }
                        $tbl_name="places";
                        $data="place_title='$place_title',
                                keywords='$keywords',
                                grass='$grass',
                                route='$route',
                                water='$water',
                                market='$market',
                                weather='$weather',
                                legal='$legal',
                                law='$law',
                                diseases='$diseases',
                                disasters='$disasters',
                                image_title='$image_title',
                                image_name='$image_name'
                                ";
                        $query=$obj->insert_data($tbl_name,$data);
                        $res=$obj->execute_query($conn,$query);
                        if($res)
                        {
                            $_SESSION['success']="Place successfully added";
                            header('Location:'.SITEURL.'admin/index.php?type=places');
                        }
                        else
                        {
                            $_SESSION['fail']="Failed to add place.";
                            header('Location:'.SITEURL.'admin/index.php?type=add_place');
                        }
                    }
                ?>
                <form method="post" action="" enctype="multipart/form-data">
                  <table>
                    <tr>
                        <td>Place Title: </td>
                        <td><input type="text" name="place_title" placeholder="Place Title" required="true" /></td>
                    </tr>
                    <tr>
                        <td>Keywords: </td>
                        <td><textarea name="keywords" placeholder="Keywords"></textarea></td>
                    </tr>
                    <tr>
                        <td>Grassland Availability: </td>
                        <td><textarea name="grass" placeholder="Grassland Availability"></textarea></td>
                    </tr>
                    <tr>
                        <td>Water Availability: </td>
                        <td><textarea name="water" placeholder="Water Availability"></textarea></td>
                    </tr>
                    <tr>
                        <td>Safe Route: </td>
                        <td><textarea name="route" placeholder="Safe Route"></textarea></td>
                    </tr>
                    <tr>
                        <td>Market Points: </td>
                        <td><textarea name="market" placeholder="Market Points"></textarea></td>
                    </tr>
                    <tr>
                        <td>Weather Infromation: </td>
                        <td><textarea name="weather" placeholder="Weather Information"></textarea></td>
                    </tr>
                    <tr>
                        <td>Legal Rights: </td>
                        <td><textarea name="legal" placeholder="Legal Rights"></textarea></td>
                    </tr>
                    <tr>
                        <td>Laws of Common Land: </td>
                        <td><textarea name="law" placeholder="Laws of Common Land"></textarea></td>
                    </tr>
                    <tr>
                        <td>Diseases: </td>
                        <td><textarea name="diseases" placeholder="Diseases"></textarea></td>
                    </tr>
                    <tr>
                        <td>Natural Disasters: </td>
                        <td><textarea name="disasters" placeholder="Natural Disasters"></textarea></td>
                    </tr>
                    <tr>
                        <td>Image: </td>
                        <td><input type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <td>Image Title: </td>
                        <td><input type="text" name="image_title" placeholder="Image Title" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"> <input type="submit" name="submit" value="ADD PLACE" /></td>
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