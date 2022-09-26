<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container navbar">
      <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Admin</a>
          <i class="bi bi-person-fill"></i>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href=""><i class="bi bi-people" ></i> Пользователи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cash-coin"></i> Платежи</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-play-circle"></i> Видеоуроки</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-file-earmark"></i> Логи</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-gear-fill"></i> Настройки</a>
                  </li> 
            </div>
          </div>
        </div>
      </nav>
    </div>

<div class="header">
<h3 class="title_1">Админ панель</h3>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>

      <div class="container content">
     <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="title_1">добро пожаловать, <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p><a href="index.php?logout='1'" style="color: red;">выход</a> </p>
    <?php endif ?>
      </div>
</div>
		
</body>
</html>