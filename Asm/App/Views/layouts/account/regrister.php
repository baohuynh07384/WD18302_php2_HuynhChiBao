<?
use App\Core\Sessions;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Men Wear</title>
  <link rel="stylesheet" href="App/Views/layouts/account/assets/css/style.css">
</head>

<body>

  <div class="container" id="container">
    <div class="form-container sign-up">
      <form action="?url=RegristerController/handleRegister" method="post">
        <h1>Sign Up</h1>
        <input type="text" placeholder="Username" name="username">
        <?php if (isset($_SESSION['username'])): ?>
          <p style="color: red; margin: 0px;">
            <?php echo Sessions::display_session('username'); ?>
          </p>
        <?php endif; ?>
        <input type="text" placeholder="Email" name="email">
        <?php if (isset($_SESSION['email'])): ?>
          <p style="color: red; margin: 0px;">
            <?php echo Sessions::display_session('email'); ?>
          </p>
        <?php endif; ?>
        <input type="password" placeholder="Password" name="password">
        <?php if (isset($_SESSION['password'])): ?>
          <p style="color: red; margin: 0px;">
            <?php echo Sessions::display_session('password'); ?>
          </p>
        <?php endif; ?>
        <button type="submit" name="register">Sign Up</button>
      </form>
    </div>

    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-right">
          <a href="./index.php" class="close" tabindex="0" role="button" style="color: white;"></a>
          <h1>Welcome Back!</h1>
          <p>Enter your personal details to use all of site features</p>
          <button class="hidden"><a href="?url=LoginController/Loginpage" style="color: white;">Sign In</a></button>
        </div>

      </div>
    </div>
  </div>

  <script src="App/Views/layouts/account/assets/js/script.js"></script>
</body>

</html>