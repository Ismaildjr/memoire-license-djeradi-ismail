<?php session_start();
  if (isset($_POST['submit1'])) {
  session_destroy();
header('Location: AAB.php');

exit;

}
  //if (!isset($_SESSION['username'])) {
    

  //  header('Location: user login1.php'); // redirect the user to the login page if not logged in
//}
  
  
  ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="content7.css">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xS30JIcQ0cyHFrVwY9IKMoM1Ug3bJkzzJXojPPlxBG3ovk3YnBN12RGWw3C9iW2H" crossorigin="anonymous"></script>
  <title>ManoPro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<style>
   
  </style>
</head>

<body>
  <nav class="navbar">
  <div class="logo">
  <span class="mano">Mano</span><span class="pro">Pro</span>
</div>
<style>.logo {
  font-family: Arial, sans-serif;
  font-size: 24px;
  font-weight: bold;
  color: #007bff; /* Blue color */
}

.mano {
  color: #007bff; /* Blue color */
}

.pro {
  color: #000; /* Black color */
}
</style>
   
    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <?php
if (isset($_SESSION['logged_in1'])) {
    echo '<li class="nav-item"><a class="nav-link" href="profile for edit employer.php">Profile</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
}
if (isset($_SESSION['logged_in'])) {
  echo '<li class="nav-item"><a class="nav-link" href="user update info.php">Profile</a></li>';
  echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
}
else{
  echo '<li class="nav-item"><a class="nav-link" href="AAB.php">Login</a></li>';

}
?>
</ul>


    </div>
  </nav>

  <section class="ads-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://img.freepik.com/vecteurs-libre/equipe-construction-travaillant-site_74855-4775.jpg?w=1060&t=st=1685652597~exp=1685653197~hmac=e9da1c86482e4d8c098be3cab858f72c09f41b7c6f0e566f4d3f2998fb80f9a9" class="d-block w-100" alt="Ad 1">
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/vecteurs-libre/conversation-entretien-embauche_74855-7566.jpg" class="d-block w-100" alt="Ad 2">
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/vecteurs-libre/gestionnaires-demarrage-presentant-analysant-graphique-croissance-ventes-groupe-travailleurs-tas-argent-fusee-diagrammes-barres-fleche-tas-argent_74855-14166.jpg?w=1060&t=st=1685652706~exp=1685653306~hmac=64e17e20424ba516cc9b1951577d5ff3852f21ed2728e96ee954ed676a7ea799" class="d-block w-100" alt="Ad 3">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navbarToggler = document.querySelector('.navbar-toggler');
      const navbarCollapse = document.querySelector('.navbar-collapse');
      const navbarSelect = document.querySelector('.navbar-select');

      navbarToggler.addEventListener('click', function () {
        navbarCollapse.style.display = navbarCollapse.style.display === 'none' ? 'flex' : 'none';
      });

      navbarSelect.addEventListener('change', function () {
        const selectedValue = this.value;
        if (selectedValue) {
          window.location.href = selectedValue;
        }
      });
    });
  </script>
<section class="filter-bar">
  <style></style>
  <div class="container">
    <div class="row">
    <form method="POST">

      <div class="col-md-3 col-sm-6 mb-3">
        <select class="form-select" name="categorie">
          <option value="" label="Select" selected disabled >Categorie</option>
                
                <option >Transport et chauffeurs</option>
                <option >Agents polyvalents</option>
                <option >Mécanicien</option>
                <option >Industrie & Production</option>
                <option >Bureautique & Secretariat</option>
                <option >Commerce & Vente</option>
                <option >Agents polyvalents</option>
                <option>Eléctronique & Téchnique</option>
                <option >Securité</option>
                <option >Electricien auto</option>
                <option >Electricien batiment</option>
                <option >Plombier</option>
                <option >Paintre</option>
                <option >Menuisier</option>
                <option >Soudeur</option>
                <option >Maçon</option>
                <option>Menuisier aluminium </option>
                <option >Verrier</option>
                <option >Chef cuisinier</option>
        </select>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <select class="form-select" name="wilaya">
          <option selected disabled>Wilaya</option>
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
      <div class="col-md-3 col-sm-6 mb-3">
        <select class="form-select" name="experience">
          <option selected>Experience</option>
          <option value="1">1 an</option>
<option value="2">2 ans</option>
<option value="3">3 ans</option>
<option value="4">4 ans</option>
<option value="5">5 ans</option>
<option value="6">6 ans</option>
<option value="7">7 ans</option>
<option value="8">8 ans</option>
<option value="9+">9 ans et plus</option>
        </select>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="range-slider">
          
          <div class="col-md-4 col-sm-6 form-group">
  <label for="price">Price:</label>
 <input type="range" class="form-range"id="price" name="price" min="0" max="10000" step="500">
  <span id="price-value"></span>
</div>
    
<script>
  const priceInput = document.getElementById('price');
  const priceValue = document.getElementById('price-value');
  
  // update the price value span whenever the range input value changes
  priceInput.addEventListener('input', () => {
    priceValue.textContent = `DZD ${priceInput.value}`;
    
  });
</script>
        </div>
      </div>
    </div>
  </div>
  <button class="blue-button" type="submit">Recherche</button>
</form>
</section>
<style>


</style>

</section>

<style>
  /* Navbar */


</style>
<style>
   
</style>

<div class="container">
    <?php
    include 'config.php';
    $usersQuery = mysqli_query($conn, "SELECT * FROM users2") or die('Query failed');

    
    
    ?>
<style>
  
</style>

<div class="card-container">
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérez les valeurs des champs du formulaire
  $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : '';
  $wilaya = isset($_POST['wilaya']) ? $_POST['wilaya'] : '';
  $experience = $_POST['experience'];
  $price = $_POST['price'];

  // Faites quelque chose avec les valeurs récupérées, par exemple, effectuez une requête SQL pour filtrer les données en fonction des critères sélectionnés

  // Exemple de requête SQL
  $conn = mysqli_connect('localhost', 'root', '', 'craft2');
  $sql = "SELECT * FROM `users` WHERE verify_status='1'";

  if (!empty($categorie)) {
    $sql .= " AND experience = '$categorie'";
  }

  if (!empty($wilaya)) {
    $sql .= " AND wilaya = '$wilaya'";
  }

  if (!empty($experience)) {
    $sql .= " AND exper >= $experience";
  }

  if (!empty($price)) {
    $sql .= " AND price <= $price";
  }

  $result = mysqli_query($conn, $sql);

  if (!$result) {
    die("Erreur lors de l'exécution de la requête: " . mysqli_error($conn));
  }
  while ($row = mysqli_fetch_assoc($result)) {
  $fullName = $row['full_name'];
  $jobTitle = $row['experience'];
  $description = $row['skills'];
  $profilePicture = $row['pp']; // Assuming the column name is 'profile_picture'
  $coverPicture = $row['pp']; // Assuming the column name is 'cover_picture'
  $phoneNumber = $row['number']; // Assuming the column name is 'phone_number'

  echo '<div style="margin-left:0.3%;margin-top:0.3%" class="card">';
  echo '<div class="cover-image">';
  echo '<img src="uploads/' . $coverPicture . '" alt="Cover Image">';
  echo '<div class="user-image">';
  echo '<img src="uploads/' . $profilePicture . '" alt="User Image">';
  echo '</div>';
  echo '</div>';

  echo '<div class="content">';
  echo '<h3 class="name">' . $fullName . '</h3>';
  echo '<p class="username">@Jackson</p>';

  echo '<p class="details">';
  echo $description;
  echo '</p>';

  echo '<a  href ="profile2.php?id='.$row['id'].'" class="effect effect-4" href="#">';
  echo 'Profil';
  echo '</a>';
  
  
  echo '<a class="call-link" href="tel:' . $phoneNumber . '">';
  echo 'Appeler';
  echo '</a>';

  echo '</div>';
  echo '</div>';}} else {
  // Handle the case where no filters are submitted
  $usersQuery = mysqli_query($conn, "SELECT * FROM users WHERE verify_status='1'") or die('Query failed');

  while ($row = mysqli_fetch_assoc($usersQuery)) {
    // Rest of your code to display all users
    $fullName = $row['full_name'];
    $jobTitle = $row['experience'];
    $description = $row['skills'];
    $profilePicture = $row['pp']; // Assuming the column name is 'profile_picture'
    $coverPicture = $row['pp']; // Assuming the column name is 'cover_picture'
    $phoneNumber = $row['number']; // Assuming the column name is 'phone_number'

    echo '<div style="margin-left:0.3%;margin-top:0.3%" class="card">';
    echo '<div class="cover-image">';
    echo '<img src="uploads/' . $coverPicture . '" alt="Cover Image">';
    echo '<div class="user-image">';
    echo '<img src="uploads/' . $profilePicture . '" alt="User Image">';
    echo '</div>';
    echo '</div>';

    echo '<div class="content">';
    echo '<h3 class="name">' . $fullName . '</h3>';
    echo '<p class="username">@Jackson</p>';

    echo '<p class="details">';
    echo $description;
    echo '</p>';

    echo '<a  href ="profile2.php?id='.$row['id'].'" class="effect effect-4" href="#">';
    echo 'Profil';
    echo '</a>';
    
    
    echo '<a class="call-link" href="tel:' . $phoneNumber . '">';
    echo 'Appeler';
    echo '</a>';

    echo '</div>';
    echo '</div>';
  }
}
?>

</div>

</div>

</div>

</div>

</div>

</div>


<script src="https://kit.fontawesome.com/704ff50790.js"
        crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
