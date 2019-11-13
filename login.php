<?php
include('./file/function.php');
?>
<!doctype html>
<html lang="en">
<head>
  <title>ADMIN-PAGE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="./pic/favicon.ico" type="image/x-icon">
</head>
<?php
if (sizeof($_POST) > 0) {
  $data = $_POST;
  $status_error = 0;
  if ($data['form'] == 'Login') {
    $username = $data['username'];
    $password = $data['password'];
    $sql = "SELECT * FROM user WHERE username = '$username';";
  }
  $result = confetch($sql);
  if ($result[0]['password'] == hash('md5', $data['password'])) {
    $_SESSION['login_status'] = 1;
    $_SESSION['username'] = $data['username'];
    $_SESSION['uid'] = $result[0]['id'];
    $_SESSION['role'] = $result[0]['role'];
    $_SESSION['email'] = $result[0]['email'];
    $_SESSION['login_status'] = 1;
    header('Location: library.php');
  }
  else{
    $status_error = 1;
  }
}
?>

<body class="login-page">
  <div class="wrapper text-center justify-content-center ">
    <form class="form-signin rounded" method="post">
      <h2 class="form-signin-heading text-dark shadow-w eng">ADMIN LOGIN PAGE</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <?php
      if ($status_error == 1) { ?>
        <sp class="">
          <?php echo "Username or Password is incorrect"; ?>
        </sp>
      <?php } ?>
      <button class="btn btn-lg btn-primary btn-block eng" type="submit">Login</button>
      <button class="btn btn-lg btn-block text-white eng" type="submit" style="background-color: #00c300;">LINE</button>   
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
</body>

</html>