<?php require 'employerlogin1.php';
include 'config.php';
if($_SESSION['logged_in1']==false){
    header('Location: AAB1.php');

}
require 'employer update info.php';
?>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile</title>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
   </head>
  
   <body  style="min-height:90vh;">
      <div id="app">
         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               <a class="navbar-brand" href="#">
               Navbar
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Link One</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Link Two</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <main class="py-4">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-4">
                     <h4 class="pb-2">
                        Profile Information
                     </h4>
                     <span class="text-justify mb-3" style="padding-top:-3px;">Update your account's profile information and email address.<br><br> When You change your email ,you need to verify your email else the account will be blocked</span>
                  </div>
                  <div class="col-lg-8 text-center pt-2">
                     <div class="card py-4 mb-5 mt-md-3 bg-white rounded " style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

                     <form method="POST11" enctype="multipart/form-data" >
    <div class="form-group px-3">
        <label for="displayName" class="col-12 text-left pl-0">Name</label>
        <input type="text" name="name" class="col-md-8 form-control" placeholder="Jane Doe">

        <label for="email" class="pt-3 col-12 text-left pl-0">Email</label>
        <input type="email" name="email" class="col-md-8 form-control" placeholder="name@example.com">
    </div>
    <div class="form-group row mb-0 mr-4">
        <div class="col-md-8 offset-md-4 text-right">
            <button type="submit"  class="btn btn-primary">Save</button>
        </div>
    </div>
</form>


                     </div>
                  </div>
               </div>
               <div class="border-bottom border-grey"></div>
               <div class="row justify-content-center pt-5">
                  <div class="col-lg-4">
                     <h4 class="pb-2">
                     Update Password</h4>
                     <span class="text-justify" style="padding-top:-3px;">Ensure your account is using a long, random password to stay secure.</span>
                  </div>
                  <div class="col-lg-8 text-center pt-2">
                     <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

                     <form method="POST"  enctype="multipart/form-data">
                            <div class="form-group px-3">

                              <label for="password" class="col-12 text-left pl-0">New Password</label>
                              <input type="password" name="password" class="col-md-8 form-control" placeholder="Password">

                              <label for="password" class="pt-3 col-12 text-left pl-0">Confirm Password</label>
                              <input type="password" name="password1" class="col-md-8 form-control"  placeholder="Password">

                            </div>
                            <div class="form-group row mb-0 mr-4">
                                <div class="col-md-8 offset-md-4 text-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="border-bottom border-grey"></div>
<div class="row justify-content-center pt-5">
    <div class="col-lg-4">
        <h4 class="pb-2">Update Password</h4>
        <span class="text-justify" style="padding-top:-3px;">Ensure your account is using a long, random password to stay secure.</span>
    </div>
    <div class="col-lg-8 text-center pt-2">
        <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
            <form method="POST" action="user_update_info.php">
                <div class="form-group px-3">
                  
                    
                <label for="dropdown1">Liste déroulante 1</label>
                <select name="wilayas" id="wilayas" required>
                    <option selected disabled>Wilayas</option>
                    <?php
                                         $conn = mysqli_connect('localhost', 'root', '', 'craft2');
                                         $sql = "SELECT code, name FROM `states`";
                                         $result = mysqli_query($conn, $sql);
                                         while ($row = mysqli_fetch_array($result)) {
                                             echo "<option value=$row[code]>$row[name]</option>";
                                         }
                                         ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="dropdown2">Liste déroulante 2</label>
                <select name="communes" id="communes" required></select>

<script>
$('#wilayas').on('change', function () {
var wilaya_id = this.value;
$.ajax({
url: 'state.php',
type: "POST",
data: {
wilaya_data: wilaya_id
},
success: function (result) {
$('#communes').html(result);
}
})
});
</script>

                </div>
                <div class="form-group row mb-0 mr-4">
                    <div class="col-md-8 offset-md-4 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

               <div class="border-bottom border-grey"></div>
               <div class="row justify-content-center pt-5">
                  <div class="col-lg-4">
                     <h4 class="pb-2">
                     Delete Account</h4>
                     <span class="text-justify" style="padding-top:-3px;">Permanently delete your account.</span>
                  </div>
                  <div class="col-lg-8 pt-0">
                     <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
                        <div class="text-left px-3">
                           Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
                        </div>

                        <form>
                            <div class="form-group row mb-0 mr-4 pt-4 px-3">
                                <div class="col-md-8 offset-l-4 text-left">
                                    <button type="submit" class="btn btn-danger pl-3">Delete Account</button>
                                </div>
                             </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <footer id="sticky-footer" class="flex-shrink-0 py-4 text-dark-50">
         <div class="container text-center">
            <small>Made with ❤️ by <a href="https://suhasrkms.github.io/" style="text-decoration: none;">suharkms</a></small>
         </div>
      </footer>
      <style>
        .btn-primary {
   
    font-family: 'Roboto', sans-serif;
    
    background-color: #f86d2d; /* Updated color to blue (#007bff) */
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
       .btn-primary:hover {
    background-color: #cf6a2c; /* Updated hover color to a darker shade of blue */
  }
   </style>
   </body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
