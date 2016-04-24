<?php include('../admin/includes/apply.php'); ?>
<?php include('../box/header.php'); ?>
<?php include('../box/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <div class="main-content-box">
            <?php 
                if(isset($_GET['place_id']))
                {
                    $place_id=$_GET['place_id'];
                    $tbl_name="places";
                    $where="place_id='$place_id'";
                    $query=$obj->select_data($tbl_name,$where);
                    $res=$obj->execute_query($conn,$query);
                    if($res)
                    {
                        $row=$obj->fetch_data($res);
                        $place_title=$row['place_title'];
                        $grass=$row['grass'];
                        $water=$row['water'];
                        $route=$row['route'];
                        $market=$row['market'];
                        $weather=$row['weather'];
                        $legal=$row['legal'];
                        $law=$row['law'];
                        $diseases=$row['diseases'];
                        $disasters=$row['disasters'];
                        $image_title=$row['image_title'];
                        $image_name=$row['image_name'];
                        ?>
                        <h2><?php echo $place_title; ?></h2>
                        <hr />
                        <br />
                        <?php if($image_name!=""){
                            ?>
                            <img src="../images/places/<?php echo $image_name; ?>" alt="<?php echo $image_title; ?>" /><br />
                            <?php
                        } ?>
                        <label>
                            <span>Grassland</span><?php echo $grass; ?>
                        </label>
                        
                        <label>
                            <span>Water</span><?php echo $water; ?>
                        </label>
                        
                        <label>
                            <span>Route</span><?php echo $route; ?>
                        </label>
                        
                        <label>
                            <span>Market</span><?php echo $market; ?>
                        </label>
                        
                        <label>
                            <span>Weather</span><?php echo $weather; ?>
                        </label>
                        
                        <label>
                            <span>Legal</span><?php echo $legal; ?>
                        </label>
                        
                        <label>
                            <span>Law</span><?php echo $law; ?>
                        </label>
                        
                        <label>
                            <span>Diseases</span><?php echo $diseases; ?>
                        </label>
                        
                        <label>
                            <span>Disasters</span><?php echo $disasters; ?>
                        </label>
                        
                        <?php
                    }
                }
            ?>
            
        </div>
    </div>
</div>
<?php include('../box/footer.php'); ?>