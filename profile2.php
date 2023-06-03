<?php
   include 'config.php';
  

   if (isset($_GET['id'])){
    $mm = $_GET["id"];
    
    $sql = "SELECT full_name ,number,email, skills , experience , exper , wilaya , communes , price ,pp FROM users WHERE id='$mm'";
    $result = mysqli_query($conn, $sql);
    
 if($result==false){
  echo "Error executing query: " . mysqli_error($conn);    }
else{
$queryResults = mysqli_num_rows($result);


if ($queryResults >0){  while ($row = mysqli_fetch_assoc($result)){
    $fullName = $row['full_name'];
    $jobTitle = $row['experience'];
    $expp=$row['exper'];
    $description = $row['skills'];
    $profilePicture = $row['pp']; // Assuming the column name is 'profile_picture'
    $coverPicture = $row['pp']; // Assuming the column name is 'cover_picture'
    $phoneNumber = $row['number']; // Assuming the column name is 'phone_number'
    ;}}}}
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile de <?php echo $fullName;?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<body>
  

<div class="bg-white md:mx-auto rounded shadow-xl w-full md:w-1/2 overflow-hidden">
  <div class="h-[140px] bg-gradient-to-r from-cyan-500 to-blue-500"></div>
  <div class="px-5 py-2 flex flex-col gap-3 pb-6">
    <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white"><img <?php echo 'src="uploads/' . $profilePicture . '"' ?> alt="Photo de profile" class="w-full h-full rounded-full object-center object-cover"></div>
    <?php echo'
    <div class="">
      
      <h3 class="text-xl text-slate-900 relative font-bold leading-6">'.$fullName.'</h3>
  
    </div>';
    ?>
    <div class="flex gap-3 flex-wrap"><span class="rounded-sm bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-800"><?php echo $jobTitle;?></span></div>
    <div class="flex gap-2"><button type="button" class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-1 rounded border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 transition hover:border-gray-300 active:bg-white hover:bg-gray-100 focus:border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300"><?php   echo '<a class="call-link" href="tel:' . $phoneNumber . '">';
  echo 'Appeler';
  echo '</a>';
;?></button>
    </div>
    
    <h4 class="text-md font-medium leading-3">Competance</h4>
    <p class="text-sm text-stone-500"><?php echo $description;?></p>
    <h4 class="text-md font-medium leading-3">Experiences</h4>
    <p class="text-sm text-stone-500"><?php echo $expp;echo"ans";?></p>
  </div>
</div>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

  
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>

</html>