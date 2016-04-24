<?php include('../admin/includes/apply.php'); ?>
<?php include('../box/header.php'); ?>
<?php include('../box/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <div class="main-content-box">
            <h2>SEARCH RESULTS</h2>
            <hr />
            <br />
            <?php 
                if(isset($_POST['keywords']))
                {
                    $keywords=$_POST['keywords'];
                    $tbl_name="places";
                    $where="keywords LIKE '%$keywords%' OR place_title LIKE '%$keywords%'";
                    $query=$obj->select_data($tbl_name,$where);
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
                                ?>
                                <a href="<?php echo SITEURL; ?>pages/detail.php?place_id=<?php echo $place_id; ?>"><span class="result"><?php echo $a++; ?>. <?php echo $place_title; ?></span><br /></a>
                                <?php
                            }
                        }
                        else
                        {
                            echo "Places Not Found";
                        }
                    }
                }
                else
                {
                    header('Location:'.SITEURL);
                }
            ?>
        </div>
    </div>
</div>
<?php include('../box/footer.php'); ?>