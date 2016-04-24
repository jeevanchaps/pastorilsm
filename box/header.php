<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title>NASA SPACE APPS</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>assets/css/style.css" />
        <link rel="stylesheet" href="<?php echo SITEURL; ?>assets/fontawesome/css/font-awesome.min.css" />
        <!--ADDING JQUERY FILE-->
        <script type="text/javascript" src="<?php echo SITEURL; ?>assets/js/jquery-2.1.4.js"></script>
        <!--ADDING JQUERY FILE-->
        <script type="text/javascript" src="<?php echo SITEURL; ?>assets/script.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else { 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position) {
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;
	$.ajax({
		type:'POST',
		url:'getLocation.php',
		data:'latitude='+latitude+'&longitude='+longitude,
		success:function(msg){
            if(msg){
               $("#location").val(msg);
            }else{
                $("#location").val('Not Available');
            }
		}
	});
}
</script>
    </head>