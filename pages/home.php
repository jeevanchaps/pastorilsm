
<div class="main">
            <div class="wrapper">
                <?php //$location='<span id="location"></span>'; echo $location;?></p>
                
                <?php 
                    if(isset($_SESSION['email']))
                    {
                        echo '<span class="message">';
                        echo $_SESSION['email'];
                        unset($_SESSION['email']);
                        echo '</span>';
                    }
                ?>
                
                <div class="box">
                    <form method="post" action="<?php echo SITEURL; ?>pages/search.php">
                        <input type="search" name="keywords" placeholder="Keywords" required="true" />
                        <input type="submit" name="submit" value="SEARCH" />
                    </form>
                    <span class="menu-trigger">
                        <a href="#"><button type="button">I'm Lost.</button></a>
                    </span>
                    <div class="contact">
                        <form method="post" action="">
                            <input type="email" name="sender" placeholder="Sender Email" required="true" /> &nbsp;
                            <input type="email" name="receiver" placeholder="Receiver Email" required="true" />
                        <input type="text" name="location" id="location" />
                            
                            <input type="submit" name="submit" value="SEND" />
                        </form>
                    </div>
                    <?php 
                        if(isset($_POST['submit']))
                        {
                            $sender=$obj->sanitize($_POST['sender']);
                            $receiver=$obj->sanitize($_POST['receiver']);
                            $subject="I am Lost. Help Me.";
                            $message="I am Lost. And This is my current location. Please rescue me.";
                            $location=$_POST['location'];
                            $tbl_name="message";
                            $data="sender='$sender',
                                    receiver='$receiver',
                                    subject='$subject',
                                    location='$location',
                                    message='$message'";
                            $query=$obj->insert_data($tbl_name,$data);
                            $res=$obj->execute_query($conn,$query);
                            $send_mail=mail($receiver,$subject,$message,$sender);
                            if($send_mail)
                            {
                                $_SESSION['email']="Message Successfully Sent.$location";
                                header('Location:'.SITEURL);
                            }
                            else
                            {
                                $_SESSION['email']="Message failed to sent.";
                                header('Location:'.SITEURL);
                            }
                        }
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>