<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab 1.4</title>
</head>

<body>
  <div class="wrapper">
    <h2>PC07384 - Lab 1.4</h2>
    <form action="" method="post">
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="text" name="firstname" placeholder="Enter your firstname" required>
      </div>
      <div class="input-box">
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
      </div>
      <div class="input-box">
        <input type="text" name="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Submit">
      </div>
    </form>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th></th>
          <th>firstname</th>
          <th></th>
          <th>lastname</th>
          <th></th>
          <th>Email</th>
          <th></th>
          <th>Password</th>
          <th></th>
          <th>Status</th>
          <th></th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?
          foreach($data_user as $value){
            echo'
            <tr>
              <th>'.$value['id'].'</th>
              <th></th>
              <th>'.$value['firstname'].'</th>
              <th></th>
              <th>'.$value['lastname'].'</th>
              <th></th>
              <th>'.$value['email'].'</th>
              <th></th>
              <th>'.$value['password'].'</th>
              <th></th>
              <th>'.$value['status'].'</th>
              <th></th>
              <th>'.$value['created_at'].'</th>
            </tr>
            ';
          }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>