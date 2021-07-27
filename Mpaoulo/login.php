<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<?php if(isset($_SESSION['username'])){
  echo "<script type='text/javascript'>
        alert('Already Logged In');
        location = 'http://localhost:8080/Mpaoulo/index.php';
      </script>";
    }
?>
<div class="head">
  <h1>
    Login
  </h1>
</div>

<form method="post" action="login.php">
  <div class="form">
    <?php include('errors.php') ?>
  <div class="input-group">
    <label>Email</label>
    <input type="email" name="email" />
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password1" />
  </div>
  <div class="input-group">
    <button type="submit" name="login" class="btn">Login</button>
  </div>
  <p>
    Dont hane an account? <a href="register.php">Register Here</a>
  </p>
    </div>
</form>
<?php include('templates/footer.php'); ?>
</html>
