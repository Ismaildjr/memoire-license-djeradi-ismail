<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav>
  <div class="navbar-container">
    <div class="navbar-logo">
      <a href="#">Logo</a>
    </div>
    <div class="navbar-search">
      <input type="text" placeholder="Search">
    </div>
    <div class="navbar-profile">
      <a href="#">
        <img src="profile-picture.jpg" alt="Profile Picture">
      </a>
      <div class="navbar-profile-dropdown">
        <ul>
          <li><a href="#">Profile Edit</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </div>
    </div>
    <div class="navbar-ads">
      <a href="#">
        <img src="ads.jpg" alt="Ads">
      </a>
    </div>
    <div class="navbar-filter">
      <select>
        <option value="">Filter 1</option>
        <option value="">Filter 2</option>
        <option value="">Filter 3</option>
      </select>
    </div>
    <div class="navbar-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</nav>
<style>
  /* Primary color: #4135c8 */
/* Complementary color 1: #c83541 */
/* Complementary color 2: #35c841 */

/* Navbar */
.navbar {
  background-color: #4135c8;
  color: #fff;
  font-size: 18px;
}

.navbar-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 16px;
}

/* Logo */
.navbar-logo a {
  font-size: 24px;
  color: #fff;
}

/* Search bar */
.navbar-search input[type="text"] {
  padding: 10px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  background-color: #fff;
  color: #4135c8;
}

.navbar-search button {
  padding: 10px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  background-color: #35c841;
  color: #fff;
  margin-left: 10px;
}

/* Profile picture and dropdown */
.navbar-profile {
  display: flex;
  align-items: center;
  color: #fff;
}

.navbar-profile img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-left: 10px;
  margin-right: 10px;
  border: 2px solid #fff;
}

.navbar-profile-dropdown {
  position: relative;
  display: inline-block;
}

.navbar-profile-dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
}

.navbar-profile-dropdown ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.navbar-profile-dropdown li a {
  display: block;
  color: #333;
  padding: 10px;
  text-decoration: none;
}

.navbar-profile-dropdown li a:hover {
  background-color: #f1f1f1;
}

/* Ads and filter */
.navbar-ads img {
  width: 100px;
  height: auto;
}

.navbar-filter select {
  padding: 10px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  background-color: #fff;
  color: #4135c8;
}

/* Mobile navigation */
.navbar-toggle {
  display: none;
}

/* Mobile layout */
@media only screen and (max-width: 768px) {
  .navbar-container {
    flex-wrap: wrap;
  }
  
  .navbar-search {
    flex-basis: 100%;
    margin-bottom: 10px;
  }
  
  .navbar-profile {
    margin-left: auto;
    margin-right: 10px;
  }
  
  .navbar-ads {
    flex-basis: 100%;
    margin-bottom: 10px;
  }
  
  .navbar-filter {
    flex-basis: 100%;
    margin-bottom: 10px;
  }
  
  .navbar-toggle {
    display: block;
    cursor: pointer;
    margin-left: auto;
  }
}

</style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
