<?php 

include 'config.php';

 
$wilaya_id = $_POST['wilaya_data'];
//echo $wilaya_id;
$communes="SELECT cmid , name FROM `counties` WHERE `cmid`='$wilaya_id';";
$communes_qry=mysqli_query($conn,$communes);
$output='<option value="" >Select communes</option>';
while ($communes_row = mysqli_fetch_assoc($communes_qry)){

    $output .="<option>$communes_row[name]</option>";

}
echo $output;