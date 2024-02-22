<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Tài khoản</h3>
                </div>
            </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">

                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">

                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b></b></h2>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-solid fa-lock"></i></span></li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-solid fa-envelope"></i></span></li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-solid fa-circle"></i></span></li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-solid fa-user"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="../images/.png" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <!-- <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                          </a> -->
                                    <div style="display:flex; float:right">
                                        <form action="./?action=update-account&id=" method="post">
                                            <input type="hidden" name="idupdate" value="">
                                            <input class="btn btn-success" type="submit" name="update" value="Cập Nhập">
                                        </form>
                                        <form action="" method="post">
                                            <input type="hidden" name="iddelete" value="">
                                            <input class="btn btn-danger" type="submit" name="delete" value="Xóa">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->