<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<?php if(isset($_SESSION['username'])){
  echo "<script type='text/javascript'>
        alert('Please Log Out First');
        location = 'http://localhost:8080/Mpaoulo/index.php';
      </script>";
    }
?>
<div class="head">
  <h1>
    Registration
  </h1>
</div>

<form method="post" action="register.php">
  <div class="form">
  <?php include('errors.php') ?>
  <div class="input-group">
    <label>FirstName</label>
    <input type="text" name="firstname" pattern=[A-Z\sa-z]{3,20} value="<?php echo $firstname; ?>"/>
  </div>
  <div class="input-group">
    <label>LastName</label>
    <input type="text" name="lastname" value="<?php echo $lastname; ?>"/>
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>"/>
  </div>
  <div class="input-group">
    <label>PhoneNumber</label>
    <input type="tel" name="phone" pattern="[0-9]{10}" value="<?php echo $phone; ?>"/>
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password1" />
  </div>
  <div class="input-group">
    <label>Re-Enter Password</label>
    <input type="password" name="password2" />
  </div>
  <div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
  </div>
  <p>
    Already A User? <a href="login.php">Sign In</a>
  </p>
</div>
</form>
<?php include('templates/footer.php'); ?>
</html>
