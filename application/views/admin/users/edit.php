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
						<h4 class="title">Thông tin chi tiết nhân viên</h4>
					</div>
					<div class="content">
						<div class="widget-body">
							<table class="table table-striped table-bordered">
								<tr class="odd gradeX">
									<td width="20%">Email</td>
									<td><?=@$user->email?></td>
								</tr>
								<tr class="odd gradeX">
									<td width="20%">Tên</td>
									<td><?=@$user->lastname?> <?=@$user->firstname?></td>
								</tr>
								<tr class="odd gradeX">
									<td width="20%">Số điện thoại</td>
									<td><?=@$user->phone?></td>
								</tr>
								<tr class="odd gradeX">
									<td width="20%">Tỉnh/Thành Phố</td>
									<td><?=@$user->city?></td>
								</tr>
								<tr class="odd gradeX">
									<td width="20%">Địa chỉ</td>
									<td><?=@$user->address?></td>
								</tr>
								<tr class="odd gradeX">
									<td width="20%">Ngày đăng kí</td>
									<td><?=date("d/m/Y",@$user->create_time)?></td>
								</tr>
								<tr class="odd gradeX">
									<td></td>
									<td><button class="btn btn-success btn-fill btn-wd" data-toggle="modal" data-target="#ModalPopup">Cấp mới mật khẩu</button></td>
								</tr>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- END PAGE -->
    </section>
	
	<div class="modal fade" id="ModalPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Cấp mới mật khẩu cho người dùng</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="<?=site_url('admin/users/updatePassword')?>">
						<div class="form-group">
							<div class="col-sm-12">
								<input type="password" name="password" id="newpw" class="form-control" placeholder="mật khẩu mới" required="" /><br>
								<a href="#" id="showpw" class="btn btn-fill btn-warning">Hiện mật khẩu <i class="fa fa-eye"></i></a> <a href="#" id="hidepw" style="display:none" class="btn btn-fill btn-warning">Ẩn mật khẩu <i class="fa fa-eye"></i></a>
							</div>
							<input type="hidden" name="id" value="<?=$user->id?>">
							<input type="hidden" name="email" value="<?=$user->email?>">
						</div>
						<br>
						<div class="form-group">
							<div class="col-sm-12 pull-right">
								<button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Đóng</button>
								<button type="submit" class="btn btn-primary btn-fill">Lưu lại</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('#showpw').click(function(e) {
			e.preventDefault();
			$(this).hide();
			$("#newpw").prop("type", "text");
			$('#hidepw').show();
		});
		$('#hidepw').click(function(e) {
			e.preventDefault();
			$(this).hide();
			$("#newpw").prop("type", "password");
			$('#showpw').show();
		});
	</script>