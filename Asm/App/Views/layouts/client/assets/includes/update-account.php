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
                        <h3 class="title">Cập nhập tài khoản</h3>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Tên tài khoản</label>
                            <input type="hidden" name="id" value="<?= $iduser ?>">
                            <input type="text" class="form-control" id="name" name="username" value="<?= $name ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Mật khẩu</label>
                            <input type="text" class="form-control" id="name" name="password"
                                value="<?= $password ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" id="name" name="email" value="<?= $email ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh tài khoản</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <img src="images/<?= $image ?>.png" s width="100" height="110" alt="">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" type="submit" style="background-color:#D10024; padding: 10px;">Cập
                                nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>