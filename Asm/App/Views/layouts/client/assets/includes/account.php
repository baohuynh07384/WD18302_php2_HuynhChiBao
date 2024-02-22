<?
$iduser = $_SESSION['username']['id'];
$name = $_SESSION['username']['username'];
$password = $_SESSION['username']['password'];
$email = $_SESSION['username']['email'];
$image = $_SESSION['username']['image'];
?>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-7" style="border-style: solid; ">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Thông tin tài khoản</h3>
                    </div>
                    <form method="post" action="./?action=update-account&id=<?= $iduser ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh tài khoản</label>
                            <div class="custom-file">
                                <img src="images/<? echo $image ?>.png" s width="100" height="110" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Tên tài khoản</label>
                            <input type="text" class="form-control" id="name" name="username" value="<? echo $name ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Mật khẩu</label>
                            <input type="text" class="form-control" id="name" name="password"
                                value="<? echo $password ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" id="name" name="email" value="<? echo $email ?>">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" style="background-color:#D10024; padding: 10px;">Cập
                                nhập</button>
                        </div>
                    </form>
                    <button class="btn btn-warning"
                        style="background-color:#D10024; padding: 10px; margin-left:100px; margin-top:-65px;"><a
                            style="color:white;" href="index.php?page=logout">Thoát</a></button>
                </div>
            </div>
        </div>
    </div>
</div>