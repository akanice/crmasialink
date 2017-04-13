<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý nhân viên
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li>
								<a href="<?=base_url('admin/users')?>">Quản lý nhân viên</a>
							</li>
							<li class="active">
								Thêm mới nhân viên
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
            </div>
        </div>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Tạo mới nhân viên</h4>
					</div>
					<div class="content">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
							<div class="form-group">
								<label class="col-sm-2 control-label">Họ*:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lastname" required=""/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Tên*:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="firstname" required=""/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Mã nhân viên:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="user_code"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Mật khẩu:</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" required=""/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Email:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Số điện thoại:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="phone"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Địa chỉ:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="address"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Vị trí:</label>
								<div class="col-sm-10">
									<select class="form-control" name="group_id">
										<?php foreach ($usergroups as $item) {?>
											<option value="<?=$item->id?>"><?=$item->name?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<input type="submit" class="btn btn-primary btn-fill btn-wd" name="submit" value="Lưu lại">
									<a href="javascript:window.history.go(-1);" class="btn btn-default">Hủy</a>
								</div>
							</div>
						</form>
					<!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- END PAGE -->
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".chosen-select").chosen();
        });
    </script>