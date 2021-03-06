<aside class="right-side">
    <section class="content-header">
        <h1>
            Quản lý Admins
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="<?=site_url('admin/admins')?>">Quản lý admins</a></li>
            <li class="active">Cập nhật thông tin admins</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row" style="margin-left: -15px">
            <!-- left column -->
            <div class="col-md-8 col-sm-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Cập nhật thông tin Admins</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST">
                        <div class="box-body">
                            <div class="form-group row-fluid">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" value="<?=@$admin->email?>" required=""/>
                                </div>
                            </div>
                            <div class="form-group row-fluid">
                                <label class="col-md-3">Mật khẩu</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" required=""/>
                                </div>
                            </div>
                            <div class="form-group row-fluid">
                                <label class="col-md-3">Nhập lại mật khẩu</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="repassword" required=""/>
                                </div>
                            </div>
                            <div class="form-group row-fluid">
                                <label class="col-md-3">Quyền</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="group" required="">
                                        <option value="admin" <?php if($admin->group=="admin"){echo 'selected="selected" ';}?>>Admin</option>
                                        <option value="mod" <?php if($admin->group=="mod"){echo 'selected="selected" ';}?>>Mod</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" name="submit" value="Cập nhật">
                            <a href="javascript:window.history.go(-1);" class="btn btn-default">Hủy</a>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->