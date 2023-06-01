<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<title>Responsive Navbar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style1.css">
</head>
<body>






<div class="user-card">
  <div class="user-card-image">
    <img src="https://via.placeholder.com/150" alt="User Image">
  </div>
  <div class="user-card-details">
    <h2>John Doe</h2>
    <p>Web Developer</p>
    <div class="user-card-social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</div>

<style>
  .user-card {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  overflow: hidden;
  position: relative;
}

.user-card:hover {
  transform: translateY(-2px);
  box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
}

.user-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.user-card .card-body {
  padding: 20px;
}

.user-card .card-body h5 {
  margin-top: 0px;
  margin-bottom: 10px;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}

.user-card .card-body p {
  margin-top: 0px;
  margin-bottom: 10px;
  font-size: 16px;
  color: #555;
}

.user-card .card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
}

.user-card .card-footer span {
  font-size: 16px;
}

@media (max-width: 767px) {
  .user-card img {
    height: 150px;
  }
  
  .user-card .card-body h5 {
    font-size: 18px;
  }
  
  .user-card .card-body p {
    font-size: 14px;
  }
}

</style>
</body>