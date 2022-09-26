<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Login Page</title>
</head>
<body>
<div class="container header">
<h3>admin</h3>
        <p class="p-title">Вход</p>
        <p class="p-tit">Доступ к Fdikit админ-панели - используйте логин и пароль.</p>
</div>
<form method="post" action="login.php">
<?php include('errors.php'); ?>
<div class="input-type">
      <form method="post" action="login.php">
      <?php include('errors.php');?>
                <label for="name">Логин</label>
                <input type="text" name="username">
                <label for="password">Пароль</label>
                <input type="password" name="password">
                <a href="">
                <button type="submit" class="btn-list" name="login_user">Login</button>
                </a>
            </form> 
        </div>
    </div>
  <script src="/js/main.js"></script>
</body>
</html>