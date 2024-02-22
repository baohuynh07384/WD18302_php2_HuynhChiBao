<?
use App\Core\Sessions;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Modern Login Page | AsmrProg</title>
    <link rel="stylesheet" href="App/Views/layouts/account/assets/css/style.css">
</head>

<body>


    <div class="container" id="container">
        <div class="form-container sign-in">

            <form action="?url=LoginController/handleLogin" method="post" id="form">
                <h1>Sign In</h1>
                <input type="text" placeholder="username" name="username" value="" id="username">
                <?php if (isset($_SESSION['username'])): ?>
                    <p style="color: red; margin: 0px;">
                        <?php echo Sessions::display_session('username'); ?>
                    </p>
                <?php endif; ?>
                <input type="password" placeholder="Password" name="password" value="" id="password">
                <?php if (isset($_SESSION['password'])): ?>
                    <p style="color: red; margin: 0px;">
                        <?php echo Sessions::display_session('password'); ?>
                    </p>
                <?php endif; ?>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login">Sign In</button>

            </form>
        </div>
        <div class="toggle-container">

            <div class="toggle">

                <div class="toggle-panel toggle-right">
                    <a href="/" class="close" tabindex="0" role="button"></a>
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden"><a href="?url=RegristerController/RegristerPage"
                            style="background-color:#D10024; color: white;">Sign Up</a></button>
                </div>
            </div>
        </div>
    </div>

    <script src="App/Views/layouts/account/assets/js/script.js"></script>


    </script>
</body>

</html>