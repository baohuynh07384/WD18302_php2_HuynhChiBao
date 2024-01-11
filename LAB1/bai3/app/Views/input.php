<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.3</title>
</head>
<body>
  <div class="wrapper">
    <h2>PC07384 - Lab 1.3</h2>
    <form action="" method="post">
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" >
      </div>
      <div class="input-box">
        <h1><?= (!empty($_POST['email']) ? $user[0]['firstname']." ".$user[0]['lastname'] : "Không tồn tại")?></h1>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>